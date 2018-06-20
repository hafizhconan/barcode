<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Siswa;

class SiswaController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$siswas = Siswa::all();
return view('siswa.index', compact('siswas'));
}

/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('siswa.create');
}

/**
* Store a newly created resource in storage.
*
* @param \Illuminate\Http\Request $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$siswas = new Siswa();
$siswas->nis = $request->nis;
$siswas->nama = $request->nama;
$siswas->ttempat = $request->ttempat;
$siswas->tlahir = $request->tlahir;
$siswas->alamat = $request->alamat;
$siswas->agama = $request->agama;
$siswas->jk = $request->jk;
$siswas->save();
return redirect()->route('siswa.index');
}

/**
* Display the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
$siswas = Siswa::find($id);
return view('siswa.rinci', compact('siswas'));
}

/**
* Show the form for editing the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
$siswas = Siswa::findOrFail($id);
return view('siswa.edit', compact('siswas'));
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
$siswas = Siswa::findOrFail($id);
$siswas->nis = $request->nis;
$siswas->nama = $request->nama;
$siswas->ttempat = $request->ttempat;
$siswas->tlahir = $request->tlahir;
$siswas->alamat = $request->alamat;
$siswas->agama = $request->agama;
$siswas->jk = $request->jk;
$siswas->save();
return redirect()->route('siswa.index');
}

/**
* Remove the specified resource from storage.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
$siswas = Siswa::findOrFail($id);
$siswas->delete();
return redirect()->route('siswa.index');
}
}
