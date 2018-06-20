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
        <td>{!! Form::label('kode','Kode') !!}</td>
        <td>:</td>
        <td>{{$bukus->kode}}</td>
        <tr>
        <td>{!! Form::label('kategori','Kategori') !!}</td>
        <td>:</td>
        <td>{{$bukus->kategori}}</td>
        </tr>
        <tr>
        <td>{!! Form::label('judul','Judul') !!}</td>
        <td>:</td>
        <td>{{$bukus->judul}}</td>
        </tr>
        <tr>
        <td>{!! Form::label('deskripsi','Deskripsi') !!}</td>
        <td>:</td>
        <td>{{$bukus->deskripsi}}</td>
        </tr>
        <tr>
        <td>{!! Form::label('pengarang','Pengarang') !!}</td>
        <td>:</td>
        <td>{{$bukus->pengarang}}</td>
        </tr>
        <tr>
        <td>{!! Form::label('penerbit','Penerbit') !!}</td>
        <td>:</td>
        <td>{{$bukus->penerbit}}</td>
        </tr>
        <tr>
        <td>{!! Form::label('jml_hal','Jumlah Halaman') !!}</td>
        <td>:</td>
        <td>{{$bukus->jml_hal}}</td>
        </tr>
        <tr>
        <td>{!! Form::label('thn_terbit','Tahun Terbit') !!}</td>
        <td>:</td>
        <td>{{$bukus->thn_terbit}}</td>
        </tr>
    <center>
    <tr><td><a href="{{ route('buku.index') }}" button type="button" class="btn btn-warning">Back</a>
    </tr>
    </center></table>
@endsection
    </div></div></div></div>
