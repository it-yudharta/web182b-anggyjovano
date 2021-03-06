<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::paginate(10);

        return view('admin.index', ['admins' => $admins ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah = new Admin;
        $tambah->nama = $request['nama'];
        $tambah->alamat = $request['alamat'];
        $tambah->tugas = $request['tugas'];
        $tambah->save();

        return redirect('/admins')->with('stok', 'Tambah Telah Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::find($id);

        return view('admin.edit', [ 'admins' => $admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edit = Admin::find($id);
        $edit->nama = $request['nama'];
        $edit->alamat = $request['alamat'];
        $edit->tugas = $request['tugas'];
        $edit->update();

        return redirect('/admins')->with('hapus', 'Edit Telah Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Admin::where('id', $id);
        $hapus->delete();

        return redirect('/admins')->with('hapus', 'Hapus Telah Berhasil');
        }
}
