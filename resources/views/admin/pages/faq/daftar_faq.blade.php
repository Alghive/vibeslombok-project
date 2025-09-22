{{-- resources/views/admin/pages/faq/index.blade.php --}}
@extends('admin.layouts.master')

@section('title', 'Daftar FAQ')

@section('content')

<div class="row d-flex justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h3 class="card-title text-capitalize">daftar FAQ</h3>
                <a href="{{ route('tambah_faq') }}" class="btn btn-sm bg-gradient-primary ml-auto {{ Request::routeIs('tambah_faq') ? 'active' : '' }}">
                    <i class="fa fa-plus"></i> Tambah
                </a>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="text-capitalize">pertanyaan</th>
                            <th class="text-capitalize">jawaban</th>
                            <th class="text-capitalize">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td class="text-capitalize">Bagaimana cara memesan paket wisata?</td>
                            <td>Pemesanan bisa dilakukan melalui website atau menghubungi admin langsung.</td>
                            <td class="text-center py-0 align-middle">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('edit_faq') }}" class="btn bg-gradient-info {{ Request::routeIs('edit_faq') ? 'active' : '' }}">
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
                            <td class="text-capitalize">Apakah harga sudah termasuk transportasi?</td>
                            <td>Ya, harga sudah termasuk transportasi sesuai paket yang dipilih.</td>
                            <td class="text-center py-0 align-middle">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('edit_faq') }}" class="btn bg-gradient-info {{ Request::routeIs('edit_faq') ? 'active' : '' }}">
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
