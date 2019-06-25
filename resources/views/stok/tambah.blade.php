@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class=" bg bg-info card-header">Tambah Stok</div>

                <div class="card-body">
                <form method="GET" action="/stok/store">
                        @csrf

                        <div class="form-group row">
                            <label for="merk" class="col-md-4 col-form-label text-md-right">Merk</label>

                            <div class="col-md-6">
                                <input id="merk" type="text" class="form-control{{ $errors->has('merk') ? ' is-invalid' : '' }}" name="merk" value="{{ old('merk') }}" required autofocus>

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tipe" class="col-md-4 col-form-label text-md-right">Tipe</label>

                            <div class="col-md-6">
                                <input id="alamat" type="tipe" class="form-control{{ $errors->has('tipe') ? ' is-invalid' : '' }}" name="tipe" value="{{ old('tipe') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="harga" class="col-md-4 col-form-label text-md-right">Harga</label>

                            <div class="col-md-6">
                                <input id="harga" type="text" class="form-control{{ $errors->has('harga') ? ' is-invalid' : '' }}" name="harga" value="{{ old('harga') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stok" class="col-md-4 col-form-label text-md-right">Stok</label>

                            <div class="col-md-6">
                                <input id="stok" type="text" class="form-control{{ $errors->has('stok') ? ' is-invalid' : '' }}" name="stok" value="{{ old('stok') }}" required>
                            </div>
                        </div>

                            <div class="from-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                    Simpan
                                    </button>
                                    @if (Route::has('password.request'))
                                        <a class= "btn btn-success" role="button" href="/stok">
                                        Kembali
                                        </a>
                                    @endif
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
