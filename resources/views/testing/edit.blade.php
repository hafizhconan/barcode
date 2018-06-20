@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
							<div class="table-responsive">
                            <center>
<h4>EDIT</h4></center>
{!! Form::model($gurus, ['route'=>['buku.update', $gurus->id], 'method'=> 'PATCH'])  !!}
    <div class="col-md-5 col-md-offset-1">
        <div class="form-group">
        {!! Form::label('kode','Kode') !!}
        {!! Form::text('kode', null, array('class' =>'form-control','placeholder' => 'Masukkan Kode Buku')) !!}
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-group">
        {!! Form::label('kategori','Kategori') !!}
        {!! Form::text('kategori', null, array('class' =>'form-control','placeholder' => 'Masukkan Kategori')) !!}
        </div>
    </div>
    <div class="col-md-5 col-md-offset-1">
        <div class="form-group">
        {!! Form::label('judul','Judul') !!}
        {!! Form::text('judul', null, array('class' =>'form-control','placeholder' => 'Masukkan Judul Buku')) !!}
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-group">
        {!! Form::label('deskripsi','Deskripsi') !!}
        {!! Form::text('deskripsi', null, array('class' =>'form-control','placeholder' => 'Masukkan Deskripsi Buku')) !!}
       </div>
    </div>
    <div class="col-md-10 col-md-offset-1">
        <div class="form-group">
        {!! Form::label('pengarang','Pengarang') !!}
        {!! Form::textarea('pengarang', null, array('class' =>'form-control','placeholder' => 'Masukkan Pengarang')) !!}
        </div>
    </div>
    <div class="col-md-5 col-md-offset-1">
        <div class="form-group">
        {!! Form::label('penerbit','Penerbit') !!}
        {!! Form::textarea('penerbit', null, array('class' =>'form-control','placeholder' => 'Masukkan Penerbit')) !!}
        </div>
    </div>
    <div class="col-md-5 col-md-offset-1">
        <div class="form-group">
        {!! Form::label('jml_hal','Jumlah Halaman') !!}
        {!! Form::textarea('jml_hal', null, array('class' =>'form-control','placeholder' => 'Masukkan Jumlah Halaman')) !!}
        </div>
    </div>
    <div class="col-md-5 col-md-offset-1">
        <div class="form-group">
        {!! Form::label('thn_terbit','Tahun Terbit') !!}
        {!! Form::textarea('thn_terbit', null, array('class' =>'form-control','placeholder' => 'Masukkan Tahun Terbit')) !!}
        </div>
    </div>
{!! Form::close() !!}
@endsection
      </div>
    </div></div></div></div>
