{{-- resources/views/admin/pages/mobil/create.blade.php --}}
@extends('admin.layouts.master')

@section('title', 'Tambah Mobil')

@section('content')
    
<div class="row d-flex justify-content-center">
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title text-capitalize">
                    Tambah Data Mobil
                </h3>
            </div>
            <!-- /.card-header -->

            <form action="#" method="POST">
                <div class="card-body">
                    <div class="row">
                        <!-- Kolom Kiri -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="merk">Merk Mobil</label>
                                <input type="text" class="form-control" id="merk" 
                                       name="merk" placeholder="Masukkan merk mobil">
                            </div>

                            <div class="form-group">
                                <label for="model">Model Mobil</label>
                                <input type="text" class="form-control" id="model" 
                                       name="model" placeholder="Masukkan model mobil">
                            </div>

                            <div class="form-group">
                                <label for="tahun">Tahun</label>
                                <input type="number" class="form-control" id="tahun" 
                                       name="tahun" placeholder="Masukkan tahun mobil">
                            </div>
                        </div>

                        <!-- Kolom Kanan -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="no_plat">Nomor Plat</label>
                                <input type="text" class="form-control" id="no_plat" 
                                       name="no_plat" placeholder="Masukkan nomor plat">
                            </div>

                            <div class="form-group">
                                <label for="warna">Warna</label>
                                <input type="text" class="form-control" id="warna" 
                                       name="warna" placeholder="Masukkan warna mobil">
                            </div>

                            <div class="form-group">
                                <label for="harga">Harga Sewa / Hari</label>
                                <input type="number" class="form-control" id="harga" 
                                       name="harga" placeholder="Masukkan harga sewa">
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
