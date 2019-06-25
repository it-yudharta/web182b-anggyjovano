<?php

namespace App\Http\Controllers;

use App\stok;
use Illuminate\Http\Request;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Stok::paginate(10);

        return view('stok.index', ['stoks' => $item ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        return view('stok.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah = new Stok;
        $tambah->merk = $request['merk'];
        $tambah->tipe = $request['tipe'];
        $tambah->harga = $request['harga'];
        $tambah->stok = $request['stok'];
        $tambah->save();

        return redirect('/stok')->with('stok', 'Tambah Telah Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function show(stok $stok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Stok::find($id);

        return view('stok.edit', [ 'stoks' => $edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edit = Stok::find($id);
        $edit->merk = $request['merk'];
        $edit->tipe = $request['tipe'];
        $edit->harga = $request['harga'];
        $edit->stok = $request['stok'];
        $edit->update();

        return redirect('/stok')->with('hapus', 'Edit Telah Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Stok::where('id', $id);
        $hapus->delete();

        return redirect('/stok')->with('hapus', 'Hapus Telah Berhasil');

    }
}
