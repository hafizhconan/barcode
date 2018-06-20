<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\createdata;

use Validator;

use Illuminate\Support\Facades\Input;

use DB;

use Carbon;

class AbsensiController extends Controller
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
        return view('absensi.index', compact('createdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
                'qrcode' => 'required',
            );

            $validation = Validator::make(Input::all(), $rules);
            if($validation->fails()) {
                    return redirect()->route('absensi.index')->withInput()->withErrors($validation->messages())->with('status', 'Masukan Data yang sesuai!');
            }
        $qrcode = $request->qrcode;
        $data = substr($qrcode, 10);
        $first = substr($qrcode, 0,1);
        if ($first != "C") {
            $ccisummit = $qrcode;
        }else{
            $ccisummit = $data;
        }

        $db = DB::table('createdatas')->where('createdatas.nim', '=', $ccisummit)->first();
        if (!is_null($db)) {
            $mytime = Carbon\Carbon::now();
            $date = $mytime->format('d-m-Y');
            if ($date == "31-03-2018") {
                if ($db->status1 != 1) {
                    $createdatas = createdata::findOrFail($db->id);
                    $createdatas->status1 = 1;
                    $createdatas->save();
                    return redirect()->route('absensi.index')->with('status', 'Selamat datang, anda berhasil masuk!');
                } else {
                    return redirect()->route('absensi.index')->with('status', 'Anda telah hadir!');
                }
            } elseif ($date == "07-04-2018") {
                if ($db->status2 != 1) {
                    $createdatas = createdata::findOrFail($db->id);
                    $createdatas->status2 = 1;
                    $createdatas->save();
                    return redirect()->route('absensi.index')->with('status', 'Selamat datang, anda berhasil masuk!');
                } else {
                    return redirect()->route('absensi.index')->with('status', 'Anda telah hadir!');
                }
            }else {
                return redirect()->route('absensi.index')->with('status', 'QR CODE tidak bisa digunakan pada tanggal ini!');
            }

        } else {
            return redirect()->route('absensi.index')->with('status', 'Data tidak ditemukan!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
