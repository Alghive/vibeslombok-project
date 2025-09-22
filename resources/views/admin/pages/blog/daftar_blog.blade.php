{{-- resources/views/admin/pages/blog/index.blade.php --}}
@extends('admin.layouts.master')

@section('title', 'Daftar Blog')

@section('content')

<div class="row d-flex justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h3 class="card-title text-capitalize">daftar blog</h3>
                <a href="{{ route('tambah_blog') }}" class="btn btn-sm bg-gradient-primary ml-auto {{ Request::routeIs('tambah_blog') ? 'active' : '' }}">
                    <i class="fa fa-plus"></i> Tambah
                </a>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="text-capitalize">judul</th>
                            <th class="text-capitalize">penulis</th>
                            <th class="text-capitalize">tanggal</th>
                            <th class="text-capitalize">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td class="text-capitalize">Tips Liburan Hemat ke Lombok</td>
                            <td class="text-capitalize">Admin</td>
                            <td>2025-09-20</td>
                            <td class="text-center py-0 align-middle">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('edit_blog') }}" class="btn bg-gradient-info {{ Request::routeIs('edit_blog') ? 'active' : '' }}">
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
                            <td class="text-capitalize">Destinasi Wisata Pantai Populer</td>
                            <td class="text-capitalize">Budi</td>
                            <td>2025-09-18</td>
                            <td class="text-center py-0 align-middle">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('edit_blog') }}" class="btn bg-gradient-info {{ Request::routeIs('edit_blog') ? 'active' : '' }}">
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
            var pageLength = parseInt($(this).val());
            table.page.len(pageLength).draw();
        });
    });
</script>
@endpush
