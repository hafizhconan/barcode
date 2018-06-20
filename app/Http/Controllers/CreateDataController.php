<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\File;

use App\createdata;

use App\backup;

use Carbon\Carbon;

use QrCode;

use Mail;

use Auth;

class CreateDataController extends Controller
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
        $createdata = createdata::all();
        return view('createdata.index', compact('createdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createdata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $createdata = new createdata();
        $createdata->nama = $request->nama;
        $createdata->nim = $request->nim;
        $createdata->tgl_daftar = $request->tgl_daftar;
        $createdata->id_line = $request->id_line;
        $createdata->no_hp = $request->no_hp;
        $createdata->email = $request->email;
        $createdata->contentQR = QrCode::size(200)->generate('CCISUMMIT-'.$request->nim);
        $createdata->save();
        $data = [
                   'nama' => $request->nama,
                   'nim' => $request->nim,
                   'tgl_daftar' => $request->tgl_daftar,
                   'id_line' => $request->id_line,
                   'no_hp' => $request->no_hp,
                   'email' => $request->email,
                   'contentQR' => QrCode::format('png')->size(200)->generate('CCISUMMIT-'.$request->nim),
        ];
        $user = createdata::findOrFail($createdata->id);
        Mail::send('mail', $data, function($message) use ($user){
           $message->to($user->email, $user->nama)->subject
              ('CCI SUMMIT REGISTRATION');
           $message->from('hafizhconan@gmail.com','CCI SUMMIT');
        });
        return redirect()->route('createdata.index')->with('status', 'Data berhasil dibuat!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $createdata = createdata::find($id);
        return view('createdata.rinci', compact('createdata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $createdatas = createdata::findOrFail($id);
        return view('createdata.edit', compact('createdatas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $createdatas = createdata::findOrFail($id);
        $createdatas->nama = $request->nama;
        $createdatas->nim = $request->nim;
        $createdatas->tgl_daftar = $request->tgl_daftar;
        $createdatas->no_hp = $request->no_hp;
        $createdatas->email = $request->email;
        $createdatas->contentQR = QrCode::size(200)->generate('CCISUMMIT-'.$request->nim);
        $createdatas->save();
        return redirect()->route('createdata.index')->with('status', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = auth()->user();
        $createdata = createdata::findOrFail($id);
        //dd($createdata->nama);
        $saved = new backup();
        $saved->nama = $createdata->nama;
        $saved->nim = $createdata->nim;
        $saved->tgl_daftar = $createdata->tgl_daftar;
        $saved->id_line = $createdata->id_line;
        $saved->no_hp = $createdata->no_hp;
        $saved->email = $createdata->email;
        $saved->contentQR = QrCode::size(200)->generate('CCISUMMIT-'.$createdata->nim);
        $saved->status1 = $createdata->status1;
        $saved->status2 = $createdata->status2;
        $saved->acc = $createdata->acc;
        $saved->delete_by = $user->name;
        $saved->save();
        $createdata->delete();
        return redirect()->route('createdata.index')->with('status', 'Data berhasil dihapus!');
    }

    public function destroyAll(Request $request)
    {
        Pendaftaran::destroy($request->pndf);
        return back();
    }
}
