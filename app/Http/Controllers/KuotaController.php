<?php

namespace App\Http\Controllers;

use App\Kuota;
use Illuminate\Http\Request;

class KuotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Kuota::paginate(10);

        return view('kuota.index', ['kuotas' => $item ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        return view('kuota.tambah')->with('stok', 'Tambah Telah Berhasil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah = new Kuota;
        $tambah->perdana = $request['perdana'];
        $tambah->kuota = $request['kuota'];
        $tambah->harga = $request['harga'];
        $tambah->stok = $request['stok'];
        $tambah->save();

        return redirect('/perdana');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kuota  $kuota
     * @return \Illuminate\Http\Response
     */
    public function show(Kuota $kuota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kuota  $kuota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Kuota::find($id);

        return view('kuota.edit', [ 'kuotas' => $edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kuota  $kuota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edit = Kuota::find($id);
        $edit->perdana = $request['perdana'];
        $edit->kuota = $request['kuota'];
        $edit->harga = $request['harga'];
        $edit->stok = $request['stok'];
        $edit->update();

        return redirect('/perdana')->with('hapus', 'Edit Telah Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kuota  $kuota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Kuota::where('id', $id);
        $hapus->delete();

        return redirect('/perdana')->with('hapus', 'Hapus Telah Berhasil');

    }
}
