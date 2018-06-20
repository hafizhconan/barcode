@extends('layouts.app')
@section('content')
<link href="/css/font-awesome.css" rel="stylesheet">
    <div class="container">
    <div class="col-md-12">
            <div class="panel panel-default">
							<div class="table-responsive">
<table class="table table-striped">
	<thead>
		<tr>
			<th>@sortablelink('id', 'Id')</th>
			<th>@sortablelink('name')</th>
			<th>@sortablelink('email')</th>
		</tr>
	</thead>
	<tbody>
	@foreach ($bukus as $buku)
	<tr>
		<td>{{$buku->id}}</td>
		<td>{{$buku->name}}</td>
		<td>{{$buku->email}}</td>
	</tr>
	@endforeach
		</tbody>
	</table><center>
	{!! $bukus->appends(\Request::except('page'))->render() !!}
	<a href="{{ route('buku.create') }}" button type="button" class="btn btn-info btn-lg btn-block">Create</a></button>
	</center>
	</div></div></div></div></div>
@endsection
