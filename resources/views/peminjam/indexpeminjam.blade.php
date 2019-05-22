@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                Data Peminjam Buku
                <a
                    class= "btn btn-success float-right"
                    role= "button" href="{{ url('/peminjams/create')}}">
                    Tambah
                </a>               
                </div>
                <div class="card-body">
                {{ $peminjams->links() }}
                <table class='table'>
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Buku Yang Dipinjam</th>
                                <th scope="col">Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($peminjams as $peminjam)
                            <tr>
                                <th scope="row">{{ $peminjam->id }}</td>
                                <td>{{ $peminjam->nim }}</td>
                                <td>{{ $peminjam->nama }}</td>
                                <td>{{ $peminjam->jurusan }}</td>
                                <td>{{ $peminjam->buku }}</td>
                                <td>
                                    <a class="btn-sm btn-warning" href="/peminjams/{{ $peminjam->id }}/edit" role="button">Edit</a>
                                    <a class="btn-sm btn-danger" href="/peminjams/{{ $peminjam->id }}/delete" role="button">Hapus</a>
                                </td>                               
                            </tr>                       
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
