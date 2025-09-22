{{-- resources/views/admin/pages/mobil/index.blade.php --}}
@extends('admin.layouts.master')

@section('title', 'Daftar Mobil')

@section('content')

<div class="row d-flex justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h3 class="card-title text-capitalize">daftar mobil</h3>
                <a href="{{ route('tambah_mobil') }}" class="btn btn-sm bg-gradient-primary ml-auto {{ Request::routeIs('tambah_mobil') ? 'active' : '' }}">
                    <i class="fa fa-plus"></i> Tambah
                </a>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="text-capitalize">merek</th>
                            <th class="text-capitalize">model</th>
                            <th class="text-capitalize">tahun</th>
                            <th class="text-capitalize">nomor polisi</th>
                            <th class="text-capitalize">stok</th>
                            <th class="text-capitalize">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td class="text-capitalize">Toyota</td>
                            <td class="text-capitalize">Avanza</td>
                            <td>2020</td>
                            <td>N 1234 AB</td>
                            <td>5</td>
                            <td class="text-center py-0 align-middle">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('edit_mobil') }}" class="btn bg-gradient-info {{ Request::routeIs('edit_mobil') ? 'active' : '' }}">
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
                            <td class="text-capitalize">Honda</td>
                            <td class="text-capitalize">Brio</td>
                            <td>2019</td>
                            <td>L 5678 CD</td>
                            <td>4</td>
                            <td class="text-center py-0 align-middle">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('edit_mobil') }}" class="btn bg-gradient-info {{ Request::routeIs('edit_mobil') ? 'active' : '' }}">
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
