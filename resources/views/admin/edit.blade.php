@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class=" bg bg-info card-header">Edit Data Admin</div>

                <div class="card-body">
                <form method="GET" action="/admins/{{$admins->id}}/update">
                        @csrf

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">Nama</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{$admins-> nama}}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">Alamat</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ $admins-> alamat }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tugas" class="col-md-4 col-form-label text-md-right">Tugas</label>

                            <div class="col-md-6">
                                <input id="tugas" type="text" class="form-control" name="tugas" value="{{  $admins-> tugas }}" required>
                            </div>
                        </div>

                            <div class="from-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                    Simpan
                                    </button>
                                </div>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
