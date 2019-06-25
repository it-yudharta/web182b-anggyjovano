@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if(session('stok'))
        <div class="alert alert-primary" role="alert">
        {{session('stok')}}
        </div>
        @endif
        @if(session('hapus'))
        <div class="alert alert-success" role="alert">
        {{session('hapus')}}
        </div>
        @endif
            <div class="card">
                <div class="card-header">Info Stok Handphone
                <a class="btn btn-primary btn-sm  float-right" href="/stok/tambah">Tambah Stok</a>
                </div>

                <div class="card-body">
                <table class="table  table-striped table-sm">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Merk Handphone</th>
                            <th scope="col">Tipe Handphone</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Manage Data</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($stoks as $item)
                            <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->merk }}</td>
                            <td>{{ $item->tipe }}</td>
                            <td>{{ $item->harga }}</td>
                            <td>{{ $item->stok }}</td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="/stok/{{ $item->id }}/edit">Edit</a>
                                <a class="btn btn-danger btn-sm" href="/stok/{{ $item->id }}/hapus">Hapus</a>
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
