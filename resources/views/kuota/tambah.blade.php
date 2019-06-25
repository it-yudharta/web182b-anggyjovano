@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class=" bg bg-info card-header">Tambah Stok</div>

                <div class="card-body">
                <form method="GET" action="/perdana/store">
                        @csrf

                        <div class="form-group row">
                            <label for="perdana" class="col-md-4 col-form-label text-md-right">Kartu Perdana</label>

                            <div class="col-md-6">
                                <input id="perdana" type="text" class="form-control{{ $errors->has('perdana') ? ' is-invalid' : '' }}" name="perdana" value="{{ old('perdana') }}" required autofocus>

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kuota" class="col-md-4 col-form-label text-md-right">Kuota</label>

                            <div class="col-md-6">
                                <input id="kuota" type="tipe" class="form-control{{ $errors->has('kuota') ? ' is-invalid' : '' }}" name="kuota" value="{{ old('kuota') }}" required>
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
                                        <a class= "btn btn-success" role="button" href="/perdana">
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
