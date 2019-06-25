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
                <div class="card-header">Info Kuota Internet
                <a class="btn btn-primary btn-sm  float-right" href="/perdana/tambah">Tambah Stok</a>
                </div>

                <div class="card-body">
                <table class="table  table-striped table-sm">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Kartu Perdana</th>
                            <th scope="col">Kuota Internet</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Manage Data</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($kuotas as $item)
                            <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->perdana }}</td>
                            <td>{{ $item->kuota }}</td>
                            <td>{{ $item->harga }}</td>
                            <td>{{ $item->stok }}</td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="/pkh/{{ $item->id }}/edit">Edit</a>
                                <a class="btn btn-danger btn-sm" href="/pkh/{{ $item->id }}/hapus">Hapus</a>
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
