@extends('layouts.app')
@section('content')

    <div class="container">
    <!-- Error Catch -->
    <div class="col-md-6">
                <center>
            <h4>Belum Hadir</h4>
            </center>
            <div class="panel panel-default">

							<div class="table-responsive">

<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Created By</th>
		</tr>
	</thead>
	<tbody>
	@foreach($belum_hadir as $index => $belum_hadirs)
		<tr>
			<td>{{$index+1}}</td>
			<td>{{$belum_hadirs->nama}}</td>
			<td>{{$belum_hadirs->nim}}</td>
			<td>{{$belum_hadirs->username}}</td>
		</tr>
	@endforeach
	</tbody>
</table>
</div></div></div>
<div class="col-md-6">
<center>
            <h4>Hadir</h4>
            </center>
            <div class="panel panel-default">
							<div class="table-responsive">

<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Created By</th>
		</tr>
	</thead>
	<tbody>
	@foreach($hadir as $index => $hadirs)
		<tr>
			<td>{{$index+1}}</td>
			<td>{{$hadirs->nama}}</td>
			<td>{{$hadirs->nim}}</td>
			<td>{{$hadirs->username}}</td>
		</tr>
	@endforeach
	</tbody>
</table><center>
</center>
</div></div></div>
</div></div>
@endsection
