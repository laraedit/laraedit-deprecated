@extends('layout')

@section('navbar')
	@include('partials.global.navbar')
@stop

@section('canvas')
	@include('partials.global.toolbar')
	<div class="container-fluid workspace">
		<div class="row">
			@yield('workspace')
		</div>
	</div>
@stop