@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="p-3 mb-2 bg-info text-white card-header">Data Admin
                <a
                    class ="btn btn-success float-right"
                    role="button" href="/admins/create">
                    Tambah Admin                
                </a>
                </div>
                <div class="card-body">
                <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Tugas</th>
                            <th scope="col">Manage Data</th>
                        </tr>
                        </thead>
                        @foreach($admins as $admin)
                        <tbody>
                            <tr>
                            <td>{{ $admin->id }}</td>
                            <td>{{ $admin->nama }}</td>
                            <td>{{ $admin->alamat }}</td>
                            <td>{{ $admin->tugas }}</td>
                            <td>
                                <a class=" btn btn-sm btn-warning" href="/admins/{{ $admin->id }}/edit" role="button">Edit</a>
                                <a class=" btn btn-sm btn-danger" href="/admins/{{ $admin->id }}/hapus" role="button">Hapus</a>
                            </td>
                            </tr>
                        </tbody>
                        @endforeach
                        </table>
                        {{$admins->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
