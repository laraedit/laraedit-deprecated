<form method="POST" action="/auth/register" class="col-md-10 col-md-offset-1">
    {!! csrf_field() !!}

    <br />

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}">
    </div>

    <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" class="form-control" placeholder="Email Address" name="email" value="{{ old('email') }}">
    </div>
    
    <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" id="password" placeholder="Password" name="password" type="password" value="">
    </div>
   
   <div class="form-group">
        <label for="confirm-password">Confirm Password</label>
        <input class="form-control" id="confirm-password" placeholder="Confirm Password" name="password_confirmation" type="password" value="">
    </div>

    <br />
    
    <div class="container-fluid">
        <div class="form-group pull-right">
            <input class="btn btn-default" type="submit" value="Register">
        </div>
    </div>

    <br />

</form>