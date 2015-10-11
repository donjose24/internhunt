@extends('layouts.guest')

@section('header')
	<title>Homepage</title>
@stop

@section('content')
<div class="wrapper">
    <div class="container banner front-banner section">
        <div class="row">
            <div class="large-12 columns">
                <div class="search-box">
                    <h1 style="color:white">What do You Want to Be?</h1>
                    <input type="text">
                    <input type="submit" value="Find Internships Now" class="button full-width">
                </div>
            </div>
        </div>
    </div>
    <div class="container section fp-auto-height">
        <div class="row banner banner-2">
            <div class="large-6 columns homepage-grid">
                <h1>Welcome to Internhunt!</h1>
                <div class="banner-div">
                    <div class="row">
                        <div class="large-4 columns">
                            <i class="fa fa-search banner-image" style="color:white"></i>
                            Get discovered by top companies
                        </div>
                        <div class="large-4 columns">
                            <i class="fa fa-rocket banner-image" style="color:white"></i> 
                            Take your skills to a whole new level!
                        </div>
                        <div class="large-4 columns">
                            <i class="fa fa-sitemap banner-image" style="color:white"></i>
                            Build your network ang get noticed fast
                        </div>
                    </div>
                </div>
            </div>
            <div class="large-5 columns cfa homepage-grid banner-2">
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
                        <i style="color:white;"> <small>By clicking Sign Up, you agree to our Terms and that you have read our Data Policy. </small></i>
                        <button class="button expand">Sign Up</button>
                        {!! Form::close()!!}
                    </div>
                    <div style="clear:both"></div>
                </div>
                <div class="large-1 columns">
                &nbsp;
            </div>
        </div>
    </div>
</div>
@stop
