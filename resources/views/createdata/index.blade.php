@extends('layouts.app')
@section('content')

    <div class="container">
    <!-- Error Catch -->
        @if (session('status')=="Data tidak ditemukan!")
        <div class="alert alert-danger fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Error!</strong> {{ session('status') }}
        </div>
        @elseif (session('status')=="Data berhasil dihapus!")
        <div class="alert alert-success fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> {{ session('status') }}
        </div>
        @elseif (session('status')=="Data berhasil diubah!")
        <div class="alert alert-success fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> {{ session('status') }}
        </div>
        @elseif (session('status')=="Data berhasil dibuat!")
        <div class="alert alert-success fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> {{ session('status') }}
        </div>
        @elseif (session('status')=="Tiket Berhasil di ACC!")
        <div class="alert alert-success fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> {{ session('status') }}
        </div>
        @endif
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
			<th>Created By</th>
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
			<td>{{$createdatas->username}}</td>
			<td>
				@if ($createdatas->acc !== 1)
	            <a href="{{ route('acc.edit', $createdatas->id) }}" type="submit" button type="button" class="btn btn-danger">ACC Tiket</a>
	            <br>
	            @endif
				<form method="POST" action="{{ route('createdata.destroy', $createdatas->id) }}" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
	              	<a href="{{ route('createdata.edit', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>
	              	<a href="{{ route('createdata.show', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Detail</a>
					@if ($createdatas->acc !== 1)
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" button type="button" class="btn btn-danger" value="Hapus" />
	                @endif
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
