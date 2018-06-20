<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Peminjamen;

use App\Siswa;

use App\Buku;

use App\Guru;

use App\File;

use Carbon\Carbon;

use Illuminate\Support\Facades\Input;

class PeminjamanController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
    public function __construct()
    {
        $this->middleware('auth');
    }

public function index()
{
$peminjamen = Peminjamen::all();
return view('peminjaman.index', compact('peminjamen'));
}

/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
$bukus = Buku::pluck('judul','kode');
$siswas = Siswa::pluck('nama','nis');
$gurus = Guru::pluck('nama','nama');
return view('peminjaman.create', compact('siswas','bukus','gurus'));
}

/**
* Store a newly created resource in storage.
*
* @param \Illuminate\Http\Request $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$gambar = new File;
if(Input::hasFile('gambar')){
	$file=Input::file('gambar');
	$file->move(public_path(). '/images/', $file->getClientOriginalName());
	$gambar->name_file = '/images/'.$file->getClientOriginalName();
	$gambar->size_file = $file->getClientsize();
	$gambar->type_file = $file->getClientMimeType();
}
$gambar->save();
$peminjamen = new Peminjamen();
$peminjamen->kode = $request->kode;
$peminjamen->nis = $request->nis;
$peminjamen->nama_guru = $request->nama_guru;
$peminjamen->tgl_pinjam = $request->tgl_pinjam;
$peminjamen->lama_pinjam = $request->lama_pinjam;
$peminjamen->tgl_kembali = '0000-00-00';
$peminjamen->denda = 0;
$peminjamen->save();
return redirect()->route('peminjamen.index');
}

/**
* Display the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
$peminjamen = Peminjamen::find($id);
$gambar=file::all();
return view('peminjaman.rinci', compact('peminjamen','gambar'));
}

/**
* Show the form for editing the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
$peminjamen = Peminjamen::findOrFail($id);
$bukus = Buku::pluck('kode','kode');
$siswas = Siswa::pluck('nis','nis');
$gurus = Guru::pluck('nama','nama');
return view('peminjaman.edit', compact('peminjamen','bukus','siswas','gurus'));
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
$peminjamen = Peminjamen::findOrFail($id);
$peminjamen->kode = $request->kode;
$peminjamen->nis = $request->nis;
$peminjamen->nama_guru = $request->nama_guru;
$peminjamen->tgl_pinjam = $request->tgl_pinjam;
$pinjam= strtotime($peminjamen->tgl_pinjam);
$kembali = strtotime($request->tgl_kembali);
$lama = round(abs(($kembali - $pinjam))/(60*60*24));
if($lama > $request->lama_pinjam){
	$telat = $lama - $request->lama_pinjam ;
} else{
	$telat = 0;
}
$denda = $telat * 1000;
$peminjamen->lama_pinjam = $request->lama_pinjam;
$peminjamen->tgl_kembali = $request->tgl_kembali;
$peminjamen->denda = $denda;
$peminjamen->save();
return redirect()->route('peminjamen.index');
}

/**
* Remove the specified resource from storage.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
$peminjamen = Peminjamen::findOrFail($id);
$peminjamen->delete();
return redirect()->route('peminjamen.index');
}
}
