@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Isi Sesuai Dengan Data Peminjam</div>

                <div class="card-body">
                <form method="GET" action="/peminjams/store">
                        @csrf
                        <div class="form-group row">
                            <label for="nim" class="col-md-4 col-form-label text-md-right">NIM</label>

                            <div class="col-md-6">
                                <input id="nim" type="text" class="form-control{{ $errors->has('nim') ? ' is-invalid' : '' }}" name="nim" value="{{ old('nim') }}" required autofocus>

                                @if ($errors->has('nim'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nim') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">Nama</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ old('nama') }}" required autofocus>

                                @if ($errors->has('nama'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jurusan" class="col-md-4 col-form-label text-md-right">Jurusan</label>

                            <div class="col-md-6">
                                <input id="jurusan" type="text" class="form-control{{ $errors->has('jabatan') ? ' is-invalid' : '' }}" name="jurusan" value="{{ old('jurusan') }}" required>

                                @if ($errors->has('jurusan'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('jurusan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="buku" class="col-md-4 col-form-label text-md-right">Buku Yang Dipinjam</label>

                            <div class="col-md-6">
                                <input id="buku" type="text" class="form-control{{ $errors->has('buku') ? ' is-invalid' : '' }}" name="buku" value="{{ old('buku') }}" required>

                                @if ($errors->has('buku'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('buku') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                            <div class="from-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                    Simpan
                                    </button>
                                    @if (Route::has('password.request'))
                                        <a class= "btn btn-success" role="button" href="{{ url('/peminjams')}}">
                                        Kembali
                                        </a>
                                    @endif
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
