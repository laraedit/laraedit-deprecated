@extends('layout')

@section('navbar')
	@include('partials.global.navbar')
@stop

@section('canvas')
	@yield('content')
@stop