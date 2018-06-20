<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\createdata;

use QrCode;

use Mail;

class AccController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function edit($id)
    {
        $createdatas = createdata::findOrFail($id);
        $createdatas->contentQR = QrCode::size(200)->generate('CCISUMMIT-'.$createdatas->nim);
        $createdatas->acc = '1';
        $createdatas->save();
        $data = [
                   'nama' => $createdatas->nama,
                   'nim' => $createdatas->nim,
                   'tgl_daftar' => $createdatas->tgl_daftar,
                   'id_line' => $createdatas->id_line,
                   'no_hp' => $createdatas->no_hp,
                   'email' => $createdatas->email,
                   'contentQR' => QrCode::format('png')->size(200)->generate('CCISUMMIT-'.$createdatas->nim),
        ];
    	$user = createdata::findOrFail($id);
        Mail::send('mail', $data, function($message) use ($user){
           $message->to($user->email, $user->nama)->subject
              ('CCI SUMMIT REGISTRATION');
           $message->from('ccisummit2018@gmail.com','CCI SUMMIT');
        });
        return redirect()->route('createdata.index')->with('status', 'Tiket Berhasil di ACC!');
    }
}
