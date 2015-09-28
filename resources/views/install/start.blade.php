@extends('layout')
@section('canvas')
	<br /><br />
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Setup the Database</h3>
			</div>
			<div class="panel-body">
				@include('forms.install.database')
			</div>
		</div>
	</div>
@stop