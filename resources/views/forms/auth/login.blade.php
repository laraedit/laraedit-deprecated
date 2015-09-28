<form method="POST" action="/auth/login" class="col-md-10 col-md-offset-1">
    {!! csrf_field() !!}

    <br />
    
    <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" class="form-control" placeholder="Email Address" name="email" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" id="password" placeholder="Password" name="password" type="password" value="">
    </div>
    
    <br />

    <div class="container-fluid">
        <div class="form-group pull-left">
            <label for="remember">Remember Me </label>
            <input checked="checked" name="remember" type="checkbox" id="remember">
        </div>
        <div class="form-group pull-right">
            <input class="btn btn-default" type="submit" value="Login">
        </div>
    </div>
    
    <br />

</form>