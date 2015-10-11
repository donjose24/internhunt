@extends('layouts.guest')

@section('header')
    <title>Login</title>
@stop

@section('content')
<div class="container  banner banner-2">
    <div class="row">
        <div class="large-4 columns">
            &nbsp;    
        </div>
        <div class="large-4 columns cfa homepage-grid">
				<div class="register-box">
					<h1>Sign In</h1>
						{!! Form::open(['url' => 'sign-in', 'method' => 'get'])!!}
                        <div class="row">
                            <div class="large-12 columns">
                                {!! Form::email('email','',['placeholder' => 'Email']) !!}
                            </div>
                        </div>
					    <div class="row">
                            <div class="large-12 columns">
                                {!! Form::password('password',['placeholder' => 'Password here']) !!}
                            </div>
                        </div>
                        <button class="button expand">Sign Up</button>
						{!! Form::close()!!}
				</div>
			</div> <div class="large-4 columns">
           &nbsp; 
        </div>
    </div>
</div>
@stop
