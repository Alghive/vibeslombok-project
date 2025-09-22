{{-- resources/views/admin/pages/faq/create.blade.php --}}
@extends('admin.layouts.master')

@section('title', 'Tambah FAQ')

@section('content')

<div class="row d-flex justify-content-center">
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title text-capitalize">
                    Tambah FAQ
                </h3>
            </div>
            <!-- /.card-header -->

            <form action="#" method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label for="pertanyaan">Pertanyaan</label>
                        <input type="text" class="form-control" id="pertanyaan" 
                               name="pertanyaan" placeholder="Masukkan pertanyaan">
                    </div>

                    <div class="form-group">
                        <label for="jawaban">Jawaban</label>
                        <textarea class="form-control" id="jawaban" 
                                  name="jawaban" rows="4" placeholder="Masukkan jawaban"></textarea>
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
