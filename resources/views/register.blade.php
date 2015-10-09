@extends('layouts.guest')

@section('header')
    <title>Register</title>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="large-4 columns">
            &nbsp;    
        </div>
        <div class="large-4 columns cfa homepage-grid">
				<div class="register-box">
					<h1>Sign Up</h1>
						{!! Form::open(['url' => 'register', 'method' => 'get'])!!}
                        <div class="row">
                            <div class="large-6 columns">
                                {!! Form::text('first_name','',['placeholder' => 'First Name']) !!}
                            </div>
                            <div class="large-6 columns">
                                {!! Form::text('last_name','',['placeholder' => 'Last Name' ]) !!}
                            </div>
                        </div> 
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
                       <div class="row">
                            <div class="large-12 columns">
                                {!! Form::password('password_confirmation',['placeholder' => 'Confirm Password']) !!}
                            </div>
                        </div> 	
                        <i> <small>By clicking Sign Up, you agree to our Terms and that you have read our Data Policy. </small></i>
                        <button class="button expand">Sign Up</button>
						{!! Form::close()!!}
				</div>
			</div> <div class="large-4 columns">
           &nbsp; 
        </div>
    </div>
</div>
@stop
