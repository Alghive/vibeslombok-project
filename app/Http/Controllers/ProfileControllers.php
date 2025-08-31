<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Exception;

class ProfileControllers extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct() 
    {
        // Constructor is empty but can be used for middleware
    }

    /**
     * Show the user profile
     */
    public function showProfile()
    {
        $user = Auth::user();

        // Debug: Log user data
        Log::info('User profile data:', [
            'id' => $user->id,
            'name' => $user->name,
            'profile_picture' => $user->profile_picture,
            'has_picture' => !empty($user->profile_picture)
        ]);

        return view('profile', compact('user'));
    }

    /**
     * Update user profile information
     */
    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'email_notifications' => 'nullable|boolean',
            'marketing_emails' => 'nullable|boolean',
        ], [
            'name.required' => 'Nama harus diisi',
            'name.max' => 'Nama maksimal 255 karakter',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah digunakan',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            /** @var User $user */
            $user->name = $request->name;
            $user->email = $request->email;

            // Update email preferences
            $user->email_notifications = $request->has('email_notifications') ? 1 : 0;
            $user->marketing_emails = $request->has('marketing_emails') ? 1 : 0;

            $user->save();

            return redirect()->back()->with('success', 'Profil berhasil diperbarui!');
        } catch (Exception $e) {
            Log::error('Error updating profile: ' . $e->getMessage());
            return redirect()->back()
                ->withErrors(['error' => 'Terjadi kesalahan saat memperbarui profil. Silakan coba lagi.'])
                ->withInput();
        }
    }

    /**
     * Change user password
     */
    public function changePassword(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'current_password' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'current_password.required' => 'Password saat ini harus diisi',
            'password.required' => 'Password baru harus diisi',
            'password.min' => 'Password minimal 8 karakter',
            'password.confirmed' => 'Konfirmasi password tidak cocok',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput($request->except(['current_password', 'password', 'password_confirmation']));
        }

        // Check current password
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()
                ->withErrors(['current_password' => 'Password saat ini salah'])
                ->withInput($request->except(['current_password', 'password', 'password_confirmation']));
        }

        try {
            $user->password = Hash::make($request->password);

            return redirect()->back()->with('success', 'Password berhasil diubah!');
        } catch (Exception $e) {
            Log::error('Error changing password: ' . $e->getMessage());
            return redirect()->back()
                ->withErrors(['error' => 'Terjadi kesalahan saat mengubah password. Silakan coba lagi.'])
                ->withInput($request->except(['current_password', 'password', 'password_confirmation']));
        }
    }

    /**
     * Delete user account
     */
    public function deleteAccount(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'password' => 'required|string',
        ], [
            'password.required' => 'Password harus diisi untuk konfirmasi penghapusan akun',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator);
        }

        // Verify password before deletion
        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back()
                ->withErrors(['password' => 'Password salah. Akun tidak dapat dihapus.']);
        }

        try {
            // Logout user
            Auth::logout();

            return redirect('/')->with('success', 'Akun berhasil dihapus. Terima kasih telah menggunakan layanan kami.');
        } catch (Exception $e) {
            Log::error('Error deleting account: ' . $e->getMessage());
            return redirect()->back()
                ->withErrors(['error' => 'Terjadi kesalahan saat menghapus akun. Silakan coba lagi.']);
        }
    }



    /**
     * Get user profile data for API
     */
    public function getProfileData()
    {
        $user = Auth::user();

        return response()->json([
            'success' => true,
            'data' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'email_verified_at' => $user->email_verified_at,
                'created_at' => $user->created_at,
                'updated_at' => $user->updated_at,
            ]
        ]);
    }

    /**
     * Upload profile picture
     */
    public function uploadProfilePicture(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'profile_picture.required' => 'Pilih file gambar',
            'profile_picture.image' => 'File harus berupa gambar',
            'profile_picture.mimes' => 'Format gambar harus jpeg, png, jpg, atau gif',
            'profile_picture.max' => 'Ukuran gambar maksimal 2MB',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator);
        }

        try {
            /** @var User $user */
            $user = Auth::user();

            if ($request->hasFile('profile_picture')) {
                $file = $request->file('profile_picture');
                $filename = time() . '_' . $user->id . '.' . $file->getClientOriginalExtension();

                // Store the file
                $path = $file->storeAs('profile-pictures', $filename, 'public');

                // Update user profile picture
                $user->profile_picture = $path;
                $user->save();

                return redirect()->back()->with('success', 'Foto profil berhasil diperbarui!');
            }

            return redirect()->back()->withErrors(['error' => 'Tidak ada file yang dipilih']);
        } catch (Exception $e) {
            Log::error('Error uploading profile picture: ' . $e->getMessage());
            return redirect()->back()
                ->withErrors(['error' => 'Terjadi kesalahan saat mengupload foto profil. Silakan coba lagi.']);
        }
    }

    /**
     * Update user address
     */
    public function updateAddress(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'address' => 'required|string|max:255',
            'province' => 'required|string|max:100',
            'city' => 'required|string|max:100',
            'district' => 'required|string|max:100',
            'postal_code' => 'required|string|max:10',
        ], [
            'address.required' => 'Alamat lengkap harus diisi',
            'province.required' => 'Provinsi harus diisi',
            'city.required' => 'Kota/Kabupaten harus diisi',
            'district.required' => 'Kecamatan harus diisi',
            'postal_code.required' => 'Kode pos harus diisi',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            // Update user address information
            $user->address = $request->address;
            $user->province = $request->province;
            $user->city = $request->city;
            $user->district = $request->district;
            $user->postal_code = $request->postal_code;

            return redirect()->back()->with('success', 'Alamat berhasil diperbarui!');
        } catch (Exception $e) {
            Log::error('Error updating address: ' . $e->getMessage());
            return redirect()->back()
                ->withErrors(['error' => 'Terjadi kesalahan saat memperbarui alamat. Silakan coba lagi: ' . $e->getMessage()])
                ->withInput();
        }
    }
}
