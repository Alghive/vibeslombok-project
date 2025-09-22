{{-- resources/views/admin/pages/dashboard.blade.php --}}
@extends('admin.layouts.master')

@section('title', 'Edit User')

@section('content')
    
    <div class="row d-flex justify-content-center">
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title text-capitalize">
                     Edit Data User
                </h3>
            </div>
            <!-- /.card-header -->

            <form action="#" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <!-- Kolom Kiri -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap" 
                                       name="nama_lengkap" placeholder="Masukkan nama lengkap">
                            </div>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" 
                                       name="username" placeholder="Masukkan username">
                            </div>

                            <div class="form-group">
                                <label for="email">Alamat Email</label>
                                <input type="email" class="form-control" id="email" 
                                       name="email" placeholder="Masukkan email">
                            </div>
                        </div>

                        <!-- Kolom Kanan -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="no_hp">No. Handphone</label>
                                <input type="text" class="form-control" id="no_hp" 
                                       name="no_hp" placeholder="Masukkan nomor handphone">
                            </div>

                            <div class="form-group">
                                <label for="role">Role</label>
                                <select class="form-control" id="role" name="role">
                                    <option value="" disabled selected>-- Pilih Role --</option>
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="password">Password (opsional)</label>
                                <input type="password" class="form-control" id="password" 
                                       name="password" placeholder="Isi jika ingin ubah password">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-right">
                    <a href="" class="btn btn-secondary">
                        Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>

@endsection




