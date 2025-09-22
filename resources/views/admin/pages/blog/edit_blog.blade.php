{{-- resources/views/admin/pages/blog/edit.blade.php --}}
@extends('admin.layouts.master')

@section('title', 'Edit Blog')

@section('content')

<div class="row d-flex justify-content-center">
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title text-capitalize">
                    Edit Data Blog
                </h3>
            </div>
            <!-- /.card-header -->

            <form action="#" method="POST">
                <div class="card-body">
                    <div class="row">
                        <!-- Kolom Kiri -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="judul">Judul Blog</label>
                                <input type="text" class="form-control" id="judul" 
                                       name="judul" value="">
                            </div>

                            <div class="form-group">
                                <label for="penulis">Penulis</label>
                                <input type="text" class="form-control" id="penulis" 
                                       name="penulis" value="">
                            </div>

                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" 
                                       name="tanggal" value="">
                            </div>
                        </div>

                        <!-- Kolom Kanan -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="konten">Konten</label>
                                <textarea class="form-control" id="konten" 
                                          name="konten" rows="5"></textarea>
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
