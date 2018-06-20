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
        <td>{{Form::label('nama', 'Nama Lengkap')}}</td>
        <td>:</td>
        <td>{{$createdata->nama}}</td>
        </tr>
        <tr>
        <td>{{Form::label('nim', 'NIM')}}</td>
        <td>:</td>
        <td>{{$createdata->nim}}</td>
        </tr>
        <tr>
        <td>{{Form::label('id_line', 'ID LINE')}}</td>
        <td>:</td>
        <td>{{$createdata->id_line}}</td>
        </tr>
        <tr>
        <td>{{Form::label('no_hp', 'NO HP')}}</td>
        <td>:</td>
        <td>{{$createdata->no_hp}}</td>
        </tr>
        <tr>
        <td>{{Form::label('email', 'Email')}}</td>
        <td>:</td>
        <td>{{$createdata->email}}</td>
        </tr>
        <tr>
        <td>{{Form::label('tgl_daftar', 'Tgl Daftar')}}</td>
        <td>:</td>
        <td>{{$createdata->tgl_daftar}}</td>
        </tr>
        <tr>
        <td>{{Form::label('status1', 'Kehadiran 1')}}</td>
        <td>:</td>
        <td>
        <?php
            if($createdata->status1 == 1){
                echo "Hadir";
            }else{
                echo "Belum Hadir";
            }
          ?></td>
        </tr>
        <tr>
        <td>{{Form::label('status2', 'Kehadiran 2')}}</td>
        <td>:</td>
        <td>
        <?php
            if($createdata->status2 == 1){
                echo "Hadir";
            }else{
                echo "Belum Hadir";
            }
          ?></td>
        </tr>
        <tr>
        <td>{{Form::label('acc', 'Status Tiket')}}</td>
        <td>:</td>
        <td>
        <?php
            if($createdata->acc == 1){
                echo "Clear";
            }else{
                echo "Pending";
            }
          ?></td>
        </tr>
        <tr>
        <td>{{Form::label('contentQR', 'QR')}}</td>
        <td>:</td>
        <td>{!! $createdata->contentQR !!}</td>
        </tr>
    <center>
    <tr><td><a href="{{ route('createdata.index') }}" button type="button" class="btn btn-warning">Back</a>
    </tr>
    </center></table>
@endsection
    </div></div></div></div>
