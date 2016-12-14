@extends('layouts.app')

@section('content')


<div id="login" class="animate form">
    <section class="login_content">
        <form role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <h1>Login Form</h1>
            @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
            @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
            <div>
                <input type="text" class="form-control" placeholder="Username" required="" name="email" value="{{ old('email') }}"/>

            </div>
            <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="password" />

            </div>
            <div>
                <button class="btn btn-default submit" >Log in</button>
                <a class="reset_pass" href="{{ url('/password/reset') }}">Lost your password?</a>
            </div>
            <div class="clearfix"></div>
            <div class="separator">

<!--                <p class="change_link">New to site?
                    <a href="#toregister" class="to_register"> Create Account </a>
                </p>
                <div class="clearfix"></div>
                <br />-->
                <div>
                    <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Gentelella Alela!</h1>

                    <p>©2015 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
            </div>
        </form>
        <!-- form -->
    </section>
    <!-- content -->
</div>


@endsection
