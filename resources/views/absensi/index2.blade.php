@extends('layouts.app')
@section('content')

    <div class="container">
    <div class="col-md-12">
            <div class="panel panel-default">
							<div class="table-responsive">

<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>ID LINE</th>
			<th>NO HP</th>
			<th>Email</th>
			<th>Tanggal Daftar</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($createdata as $createdatas)
		<tr>
			<td>{{$createdatas->id}}</td>
			<td>{{$createdatas->nama}}</td>
			<td>{{$createdatas->nim}}</td>
			<td>{{$createdatas->id_line}}</td>
			<td>{{$createdatas->no_hp}}</td>
			<td>{{$createdatas->email}}</td>
			<td>{{$createdatas->tgl_daftar}}</td>
			<td>
				<form method="POST" action="{{ route('createdata.destroy', $createdatas->id) }}" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
	              	<a href="{{ route('createdata.edit', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>
	              	<a href="{{ route('createdata.show', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Detail</a>
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" button type="button" class="btn btn-danger" value="Hapus" />
	            </form>
			</td>
		</tr>
	@endforeach
	</tbody>
</table><center>
<a href="{{ route('createdata.create') }}" button type="button" class="btn btn-info btn-lg btn-block">Create</a></button>
</center>
</div></div></div></div></div>
@endsection
