@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
							<table class="table borderless">
                            <center>
<h4>DETAIL</h4></center>
        <tr>
        <td>{{Form::label('tgl_pinjam', 'Tanggal Pinjam')}}</td>
        <td>:</td>
        <td>{{$peminjamen->tgl_pinjam}}</td>
        <tr>
        <td>{{Form::label('kode', 'Kode Buku')}}</td>
        <td>:</td>
        <td>{{$peminjamen->kode}}</td>
        </tr>
        <tr>
        <td>{{Form::label('nis', 'NIS')}}</td>
        <td>:</td>
        <td>{{$peminjamen->nis}}</td>
        </tr>
        <tr>
        <td>{{Form::label('nama_guru', 'Nama Guru')}}</td>
        <td>:</td>
        <td>{{$peminjamen->nama_guru}}</td>
        </tr>
        <tr>
        <td>{{Form::label('lama_pinjam', 'Lama Pinjam')}}</td>
        <td>:</td>
        <td>{{$peminjamen->lama_pinjam}}</td>
        </tr>
        <tr>
        <td>{{Form::label('tgl_kembali', 'Tanggal Kembali')}}</td>
        <td>:</td>
        <td>{{$peminjamen->tgl_kembali}}</td>
        </tr>
        <tr>
        <td>{{Form::label('denda', 'Denda')}}</td>
        <td>:</td>
        <td>{{$peminjamen->denda}}</td>
        </tr>
        <tr>
        <td>{{Form::label('Image', 'Images')}}</td>
        <td>:</td>
        @foreach($gambar as $gambars)
        <td><img src='{{$gambars->name_file}}' width="150" height="150"></td>
        @endforeach
        </tr>
    <center>
    <tr><td><a href="{{ route('peminjamen.index') }}" button type="button" class="btn btn-warning">Back</a>
    </tr>
    </center></table>
@endsection
    </div></div></div></div>
