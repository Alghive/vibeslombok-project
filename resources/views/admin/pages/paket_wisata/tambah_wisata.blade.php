{{-- resources/views/admin/pages/wisata/create.blade.php --}}
@extends('admin.layouts.master')

@section('title', 'Tambah Wisata')

@section('content')
    
<div class="row d-flex justify-content-center">
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title text-capitalize">
                    Tambah Data Wisata
                </h3>
            </div>
            <!-- /.card-header -->

            <form action="#" method="POST">
                <div class="card-body">
                    <div class="row">
                        <!-- Kolom Kiri -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama_paket_wisata">Nama Paket Wisata</label>
                                <input type="text" class="form-control" id="nama_wisata" 
                                       name="nama_paket_wisata" placeholder="Masukkan nama paket wisata">
                            </div>

                            <div class="form-group">
                                <label for="destinasi">Destinasi</label>
                                <input type="text" class="form-control" id="destinasi" 
                                       name="destinasi" placeholder="Masukkan destinasi wisata">
                            </div>

                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" class="form-control" id="harga" 
                                          name="harga" placeholder="Masukkan harga wisata">
                            </div>

                        </div>

                        <!-- Kolom Kanan -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="durasi">Durasi</label>
                                <input type="text" class="form-control" id="durasi" 
                                          name="durasi" placeholder="Masukkan durasi wisata" >
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
                        Simpan
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
