<form method="POST" action"/install/database" class="col-md-10 col-md-offset-1">
    {!! csrf_field() !!}
	
	<br />

	<div class="form-group">
        <label for="driver">Database Driver</label>
		<select class="selectpicker form-control" id="driver" name="driver">
			<option value="sqlite">SQLite</option>
			<option value="mysql">MySQL</option>
			<option value="pgsql">PostgreSQL</option>
			<option value="sqlsrv">SQL Server</option>
		</select>
	</div>

	<div class="form-group">
		<label for="driver">Database Host</label>
		<input type="text" id="host" class="form-control" placeholder="localhost" name="host" value="{{ old('host') }}">
    </div>

    <div class="form-group">
		<label for="name">Database Name</label>
		<input type="text" id="name" class="form-control" placeholder="Database Name" name="name" value="{{ old('name') }}">
    </div>

    <div class="form-group">
		<label for="user">Database User</label>
		<input type="text" id="user" class="form-control" placeholder="Database User" name="user" value="{{ old('user') }}">
    </div>

    <div class="form-group">
		<label for="password">Database Password</label>
		<input type="password" id="password" class="form-control" placeholder="Database Password" name="password" value="">
    </div>

    <div class="container-fluid">
        <div class="form-group pull-right">
            <input class="btn btn-info" type="submit" value="Next">
        </div>
    </div>

    <br />

</form>