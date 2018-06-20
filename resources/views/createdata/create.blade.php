@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
							<div class="table-responsive">
                            <center>
<h4>CREATE</h4></center>
{!! Form::open(['route'=>'createdata.store','method'=>'POST'])  !!}
    <div class="col-md-10 col-md-offset-1">
        <div class="form-group">
        {!! Form::label('nama','Nama Lengkap') !!}
        {!! Form::text('nama', null, array('class' =>'form-control','placeholder' => 'Masukkan Nama Lengkap')) !!}
        </div>
    </div>
    <div class="col-md-offset-1 col-md-5">
        <div class="form-group">
        {!! Form::label('nim','NIM') !!}
        {!! Form::text('nim', null, array('class' =>'form-control','placeholder' => 'Masukkan NIM')) !!}
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-group">
        {!! Form::label('tgl_daftar','Tanggal Daftar') !!}
        {!! Form::date('tgl_daftar', \Carbon\Carbon::now(), array('class' =>'form-control','placeholder' => 'Masukkan Tanggal Daftar')) !!}
       </div>
    </div>
    <div class="col-md-offset-1 col-md-5">
        <div class="form-group">
        {!! Form::label('id_line','ID LINE') !!}
        {!! Form::text('id_line', null, array('class' =>'form-control','placeholder' => 'Masukkan ID LINE')) !!}
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-group">
        {!! Form::label('no_hp','NO. HP') !!}
        {!! Form::text('no_hp', null, array('class' =>'form-control','placeholder' => 'Masukkan NO. HP')) !!}
        </div>
    </div>
    <div class="col-md-10 col-md-offset-1">
        <div class="form-group">
        {!! Form::label('email','Email') !!}
        {!! Form::text('email', null, array('class' =>'form-control','placeholder' => 'Masukkan Email')) !!}
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
