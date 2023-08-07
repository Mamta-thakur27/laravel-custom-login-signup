@extends('layout.master')

@section('title','Login')

@section('content')

@endsection
              <div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel heading">
                <h3 class="panel-title">Please Sign In</h3>
            </div>
            <div class="Panel-body">
                <form role="form">
                    <fieldst>
                        <div class="form-group">
                            <input class="form-control" placeholder="Name" name="name" type="text" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Email" name="email" type="email" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="Password" type="password" value="">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Remember Me
                            </label>
                        </div>
                        <a href="{{route('signup.check')}}" class="btn btn-lg btn-sucess btn-block">Sign Uup</a>
                    </fieldst>
                </form>
            </div>
        </div>
    </div>
    </div>




                        
