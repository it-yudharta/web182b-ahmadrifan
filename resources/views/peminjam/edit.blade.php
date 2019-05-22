@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Peminjam Buku</div>

                <div class="card-body">
                <form method="GET" action="/peminjams/{{ $peminjams->id }}/update">
                        @csrf 

                        <div class="form-group row">
                            <label for="nim" class="col-md-4 col-form-label text-md-right">NIM</label>

                            <div class="col-md-6">
                                <input id="nim" type="text" class="form-control" name="nim" value="{{ $peminjams->nim }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">Nama</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ $peminjams->nama }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jurusan" class="col-md-4 col-form-label text-md-right">Jurusan</label>

                            <div class="col-md-6">
                                <input id="jurusan" type="text" class="form-control" name="jurusan" value="{{ $peminjams->jurusan }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="buku" class="col-md-4 col-form-label text-md-right">Buku Yang Dipinjam</label>

                            <div class="col-md-6">
                                <input id="buku" type="text" class="form-control" name="buku" value="{{ $peminjams->buku }}" required>
                            </div>
                        </div>

                         <div class="from-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                    Simpan
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
