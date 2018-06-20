@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
							<div class="table-responsive">
                            <center>
<h4>CREATE</h4></center>
{!! Form::open(['route'=>'buku.store'])  !!}
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
    <div class="col-md-10 col-md-offset-1">
        <div class="form-group">
        {!! Form::label('deskripsi','Deskripsi') !!}
	    {!! Form::textarea('deskripsi', null, array('class' =>'form-control','placeholder' => 'Masukkan Deskripsi Buku')) !!}
       </div>
    </div>
    <div class="col-md-5 col-md-offset-1">
        <div class="form-group">
        {!! Form::label('pengarang','Pengarang') !!}
        {!! Form::text('pengarang', null, array('class' =>'form-control','placeholder' => 'Masukkan Pengarang')) !!}
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-group">
        {!! Form::label('penerbit','Penerbit') !!}
        {!! Form::text('penerbit', null, array('class' =>'form-control','placeholder' => 'Masukkan Penerbit')) !!}
        </div>
    </div>
    <div class="col-md-5 col-md-offset-1">
        <div class="form-group">
        {!! Form::label('jml_hal','Jumlah Halaman') !!}
        {!! Form::text('jml_hal', null, array('class' =>'form-control','placeholder' => 'Masukkan Jumlah Halaman')) !!}
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-group">
        {!! Form::label('thn_terbit','Tahun Terbit') !!}
        {!! Form::text('thn_terbit', null, array('class' =>'form-control','placeholder' => 'Masukkan Tahun Terbit')) !!}
        </div>
    </div>
    <div class="col-md-5 col-md-offset-1">
        <div class="form-group">
       {!! Form::submit('Simpan', array('class' => 'btn btn-primary')) !!}
        </div>
    </div>
{!! Form::close() !!}
@endsection
</center>
</div></div></div></div></div>
