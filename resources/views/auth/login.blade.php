@extends('canvases.page')

@section('content')
<br /><br />
<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Login</h3>
		</div>
		<div class="panel-body">
		@include('forms.auth.login')
		</div>
	</div>
</div>
@stop