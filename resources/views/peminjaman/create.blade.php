@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
							<div class="table-responsive">
                            <center>
<h4>CREATE</h4></center>
{!! Form::open(['route'=>'peminjamen.store','enctype'=>'multipart/form-data','method'=>'POST'])  !!}
    <div class="col-md-5 col-md-offset-1">
        <div class="form-group">
        {!! Form::label('kode','Kode Buku') !!}
        {!! Form::select('kode', $bukus, null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-group">
        {!! Form::label('nis','NIS') !!}
        {!! Form::select('nis', $siswas, null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-5 col-md-offset-1">
        <div class="form-group">
        {!! Form::label('tgl_pinjam','Tanggal Kembali') !!}
        {!! Form::date('tgl_pinjam', null, array('class' =>'form-control','placeholder' => 'Masukkan Tanggal Kembali')) !!}
       </div>
    </div>
    <div class="col-md-5">
        <div class="form-group">
        {!! Form::label('nama_guru','Nama Guru') !!}
	    {!! Form::select('nama_guru', $gurus, null, ['class' => 'form-control']) !!}
       </div>
    </div>
    <div class="col-md-5 col-md-offset-1">
        <div class="form-group">
        {!! Form::label('lama_pinjam','Lama Pinjam') !!}
        {!! Form::text('lama_pinjam', null, array('class' =>'form-control','placeholder' => 'Masukkan Lama Pinjam')) !!}
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-group">
        {!! Form::label('gambar','Gambar') !!}
        {!! Form::File('gambar', null, array('class' =>'form-control')) !!}
        </div>
    </div>
    <div class="col-md-6 col-md-offset-1">
        <div class="form-group">
	   {!! Form::submit('Simpan', array('class' => 'btn btn-primary')) !!}
        </div>
    </div>
{!! Form::close() !!}
@endsection
</center>
</div></div></div></div></div>
