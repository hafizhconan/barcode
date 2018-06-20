<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Buku;

class BukuController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$bukus = Buku::all();
return view('buku.index', compact('bukus'));
}

/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('buku.create');
}

/**
* Store a newly created resource in storage.
*
* @param \Illuminate\Http\Request $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$bukus = new Buku();
$bukus->kode = $request->kode;
$bukus->kategori = $request->kategori;
$bukus->judul = $request->judul;
$bukus->deskripsi = $request->deskripsi;
$bukus->pengarang = $request->pengarang;
$bukus->penerbit = $request->penerbit;
$bukus->jml_hal = $request->jml_hal;
$bukus->thn_terbit = $request->thn_terbit;
$bukus->save();
return redirect()->route('buku.index');
}

/**
* Display the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
$bukus = Buku::find($id);
return view('buku.rinci', compact('bukus'));
}

/**
* Show the form for editing the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
$bukus = Buku::findOrFail($id);
return view('buku.edit', compact('bukus'));
}

/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param int $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$bukus = Buku::findOrFail($id);
$bukus->kode = $request->kode;
$bukus->kategori = $request->kategori;
$bukus->judul = $request->judul;
$bukus->deskripsi = $request->deskripsi;
$bukus->pengarang = $request->pengarang;
$bukus->penerbit = $request->penerbit;
$bukus->jml_hal = $request->jml_hal;
$bukus->thn_terbit = $request->thn_terbit;
$bukus->save();
return redirect()->route('buku.index');
}

/**
* Remove the specified resource from storage.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
$bukus = Buku::findOrFail($id);
$bukus->delete();
return redirect()->route('buku.index');
}
}
