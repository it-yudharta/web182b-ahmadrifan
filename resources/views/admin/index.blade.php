@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                Daftar Admin
                <a
                    class= "btn btn-success float-right"
                    role= "button" href="{{ url('/admins/create')}}">
                    Tambah
                </a>
                </div>
                <div class="card-body">
                    {{ $admins->links() }}
                    <table class='table'>
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NIP</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($admins as $admin)
                            <tr>
                                <th scope="row">{{ $admin->id }}</td>
                                <td>{{ $admin->nim }}</td>
                                <td>{{ $admin->nama }}</td>
                                <td>{{ $admin->jabatan }}</td>
                                <td>
                                    <a class="btn-sm btn-warning" href="/admins/{{ $admin->id }}/edit" role="button">Edit</a>
                                    <a class="btn-sm btn-danger" href="/admins/{{ $admin->id }}/delete" role="button">Hapus</a>
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
