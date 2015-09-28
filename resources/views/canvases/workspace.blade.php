@extends('layout')

@section('canvas')
	@include('partials.global.toolbar')
	<div class="container-fluid workspace">
		<div class="row">
			@yield('workspace')
		</div>
	</div>
@stop