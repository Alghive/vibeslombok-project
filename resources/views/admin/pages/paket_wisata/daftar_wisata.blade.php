{{-- resources/views/admin/pages/paket_wisata/index.blade.php --}}
@extends('admin.layouts.master')

@section('title', 'Daftar Paket Wisata')

@section('content')
    
    <div class="row d-flex justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-capitalize">daftar paket wisata</h3>
                <div class="card-tools">
                    <a href="{{ route('tambah_wisata') }}" class="btn btn-sm btn-primary {{ Request::routeIs('tambah_wisata') ? 'active' : '' }}">
                        <i class="fa fa-plus"></i> Tambah
                    </a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="text-capitalize">nama paket</th>
                            <th class="text-capitalize">destinasi</th>
                            <th class="text-capitalize">harga</th>
                            <th class="text-capitalize">durasi</th>
                            <th class="text-capitalize">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>1</td>
                                <td class="text-capitalize">Paket Bali</td>
                                <td class="text-capitalize">Kuta, Ubud, Tanah Lot</td>
                                <td>Rp 3.500.000</td>
                                <td>3 Hari 2 Malam</td>
                                <td class="text-center py-0 align-middle">
                                    <div class="btn-group btn-group-sm">
                                        <a href="{{ route('edit_wisata') }}" class="btn bg-gradient-info {{ Request::routeIs('edit_wisata') ? 'active' : '' }}">
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
                                <td class="text-capitalize">Paket Lombok</td>
                                <td class="text-capitalize">Gili Trawangan, Senggigi</td>
                                <td>Rp 2.800.000</td>
                                <td>4 Hari 3 Malam</td>
                                <td class="text-center py-0 align-middle">
                                    <div class="btn-group btn-group-sm">
                                        <a href="{{ route('edit_wisata') }}" class="btn bg-gradient-info {{ Request::routeIs('edit_wisata') ? 'active' : '' }}">
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
