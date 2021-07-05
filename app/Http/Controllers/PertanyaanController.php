<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index()
    {
        $data_pertanyaan = \App\Pertanyaan::all();
        return view('pertanyaan.index',['data_pertanyaan' => $data_pertanyaan]);
    }

    public function create(Request $request)
    {
        \App\Pertanyaan::create($request->all());
        return redirect('/pertanyaan')->with('sukses','Data berhasil ditambah');
    }

    public function edit($id)
    {
        $pertanyaan = \App\Pertanyaan::find($id);
        return view('pertanyaan/edit',['pertanyaan' => $pertanyaan]);
    }

    public function update(Request $request,$id)
    {
        $pertanyaan = \App\Pertanyaan::find($id);
        $pertanyaan->update($request->all());
        return redirect('/pertanyaan')->with('sukses','Data berhasil diupdate');
    }
}
