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
			<th>Tanggal Pinjam</th>
			<th>Kode Buku</th>
			<th>NIS</th>
			<th>Nama Guru</th>
			<th>Lama Pinjam</th>
			<th>Tanggal Kembali</th>
			<th>Denda</th>
		</tr>
	</thead>
	<tbody>
	@foreach($peminjamen as $peminjamen)
		<tr>
			<td>{{$peminjamen->id}}</td>
			<td>{{$peminjamen->tgl_pinjam}}</td>
			<td>{{$peminjamen->kode}}</td>
			<td>{{$peminjamen->nis}}</td>
			<td>{{$peminjamen->nama_guru}}</td>
			<td>{{$peminjamen->lama_pinjam}}</td>
			<td>{{$peminjamen->tgl_kembali}}</td>
			<td>{{$peminjamen->denda}}</td>
			<td>
				<form method="POST" action="{{ route('peminjamen.destroy', $peminjamen->id) }}" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
	              	<a href="{{ route('peminjamen.edit', $peminjamen->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>
	              	<a href="{{ route('peminjamen.show', $peminjamen->id) }}" type="submit" button type="button" class="btn btn-warning">Detail</a>
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" button type="button" class="btn btn-danger" value="Hapus" />
	            </form>
			</td>
		</tr>
	@endforeach
	</tbody>
</table><center>
<a href="{{ route('peminjamen.create') }}" button type="button" class="btn btn-info btn-lg btn-block">Create</a></button>
</center>
</div></div></div></div></div>
@endsection
