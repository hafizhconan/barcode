@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
							<div class="table-responsive">
                            <center>
<h4>EDIT</h4></center>
{!! Form::model($peminjamen, ['route'=>['peminjamen.update', $peminjamen->id], 'method'=> 'PATCH'])  !!}
    <div class="col-md-5 col-md-offset-1">
        <div class="form-group">
        {!! Form::label('kode','Kode Buku') !!}
        {!! Form::select('kode', $bukus, null, ['class' => 'form-control','readonly']) !!}
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-group">
        {!! Form::label('nis','NIS') !!}
        {!! Form::select('nis', $siswas, null, ['class' => 'form-control','readonly']) !!}
        </div>
    </div>
    <div class="col-md-5 col-md-offset-1">
        <div class="form-group">
        {!! Form::label('tgl_pinjam','Tanggal Pinjam') !!}
        {!! Form::date('tgl_pinjam', null, array('class' =>'form-control','placeholder' => 'Masukkan Tanggal Kembali','readonly')) !!}
       </div>
    </div>
    <div class="col-md-5">
        <div class="form-group">
        {!! Form::label('nama_guru','Nama Guru') !!}
        {!! Form::select('nama_guru', $gurus, null, ['class' => 'form-control','readonly']) !!}
       </div>
    </div>
    <div class="col-md-5 col-md-offset-1">
        <div class="form-group">
        {!! Form::label('lama_pinjam','Lama Pinjam') !!}
        {!! Form::text('lama_pinjam', null, array('class' =>'form-control','placeholder' => 'Masukkan Lama Pinjam','readonly')) !!}
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-group">
        {!! Form::label('tgl_kembali','Tanggal Kembali') !!}
        {!! Form::date('tgl_kembali', null, array('class' =>'form-control','placeholder' => 'Masukkan Tanggal Kembali')) !!}
       </div>
    </div>
    <div class="col-md-6 col-md-offset-1">
        <div class="form-group">
       {!! Form::submit('Simpan', array('class' => 'btn btn-primary')) !!}
        </div>
    </div>
{!! Form::close() !!}
@endsection
      </div>
    </div></div></div></div>
