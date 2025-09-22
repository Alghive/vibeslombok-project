{{-- resources/views/admin/pages/dashboard.blade.php --}}
@extends('admin.layouts.master')

@section('title', 'Daftar User')

@section('content')
    
    <div class="row d-flex justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-capitalize">daftar user</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="text-capitalize">nama lengkap</th>
                            <th class="text-capitalize">username</th>
                            <th class="text-capitalize">no handphone</th>
                            <th class="text-capitalize">Email</th>
                            <th class="text-capitalize">Role</th>
                            <th class="text-capitalize">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>1</td>
                                <td class="text-capitalize">Admin</td>
                                <td class="text-capitalize">Admin</td>
                                <td>09812344</td>
                                <td>admin@email.com</td>
                                <td>Admin</td>
                                <td class="text-center py-0 align-middle">
                                    <div class="btn-group btn-group-sm">
                                        <a href="{{ route('edit_user') }}" class="btn bg-gradient-info {{ Request::routeIs('edit_user') ? 'active' : '' }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="" 
                                        class="btn bg-gradient-danger" 
                                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                </td>


                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="text-capitalize">Sumanto</td>
                                <td class="text-capitalize">Sumanto87</td>
                                <td>09812344</td>
                                <td>sumanto@email.com</td>
                                <td>User</td>
                                <td class="text-center py-0 align-middle">
                                    <div class="btn-group btn-group-sm">
                                        <a href="{{ route('edit_user') }}" class="btn bg-gradient-info {{ Request::routeIs('edit_user') ? 'active' : '' }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="" 
                                        class="btn bg-gradient-danger" 
                                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="text-capitalize">Alex</td>
                                <td class="text-capitalize">Alex87</td>
                                <td>09812344</td>
                                <td>alex@email.com</td>
                                <td>User</td>
                                <td class="text-center py-0 align-middle">
                                    <div class="btn-group btn-group-sm">
                                        <a href="{{ route('edit_user') }}" class="btn bg-gradient-info {{ Request::routeIs('edit_user') ? 'active' : '' }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="" 
                                        class="btn bg-gradient-danger" 
                                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                </td>

                            </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
        var table = $('#example1').DataTable({
            "pageLength": 10,
            "responsive": true,  
            "autoWidth": false    
        });

        $('#pageLength').on('change', function() {
            var pageLength = parseInt($(this).val()); // Ambil nilai dropdown sebagai integer

            table.page.len(pageLength).draw(); // Ubah page length di tabel
        });
    });
    </script>
@endpush


