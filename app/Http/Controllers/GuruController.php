<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Guru;

class GuruController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$gurus = Guru::all();
return view('guru.index', compact('gurus'));
}

/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('guru.create');
}

/**
* Store a newly created resource in storage.
*
* @param \Illuminate\Http\Request $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$gurus = new Guru();
$gurus->nik = $request->nik;
$gurus->nama = $request->nama;
$gurus->tlahir = $request->tlahir;
$gurus->ttanggal = $request->ttanggal;
$gurus->alamat = $request->alamat;
$gurus->agama = $request->agama;
$gurus->jk = $request->jk;
$gurus->save();
return redirect()->route('guru.index');
}

/**
* Display the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
$gurus = Guru::find($id);
return view('guru.rinci', compact('gurus'));
}

/**
* Show the form for editing the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
$gurus = Guru::findOrFail($id);
return view('guru.edit', compact('gurus'));
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
$gurus = Guru::findOrFail($id);
$gurus->nik = $request->nik;
$gurus->nama = $request->nama;
$gurus->tlahir = $request->tlahir;
$gurus->ttanggal = $request->ttanggal;
$gurus->alamat = $request->alamat;
$gurus->agama = $request->agama;
$gurus->jk = $request->jk;
$gurus->save();
return redirect()->route('guru.index');
}

/**
* Remove the specified resource from storage.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
$gurus = Guru::findOrFail($id);
$gurus->delete();
return redirect()->route('guru.index');
}
}
