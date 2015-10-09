@extends('layouts.guest')

@section('header')
	<title>Homepage</title>
@stop

@section('content')
	<div class="container banner">
        <div class="row">
            <div class="large-6 columns homepage-grid">
                <h1>Welcome to Internhunt!</h1>
                <div class="banner-div">
                    <div class="row">
                        <div class="large-4 columns">
                            <i class="fa fa-search banner-image" style="color:#8e44ad"></i>
                            Get discovered by top companies
                        </div>
                        <div class="large-4 columns">
                            <i class="fa fa-rocket banner-image" style="color:#27ae60"></i> 
                            Take your skills to a whole new level!
                        </div>
                     <div class="large-4 columns">
                        <i class="fa fa-sitemap banner-image" style="color:#d35400"></i>
                            Build your network ang get noticed fast
                    </div>
                </div>
            </div>
        </div>
			<div class="large-5 columns cfa homepage-grid">
				<div class="register-box">
					<h1>Sign Up</h1>
						{!! Form::open(['url' => 'search', 'method' => 'get'])!!}
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
                                {!! Form::text('email','',['placeholder' => 'Email']) !!}
                            </div>
                        </div>
					    <div class="row">
                            <div class="large-12 columns">
                                {!! Form::text('address','',['placeholder' => 'Address']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-12 columns">
                                {!! Form::text('birthdate','',['placeholder' => 'Birthdate']) !!}
                            </div>
                        </div>

	                    <button class="button expand">Register</button>
						{!! Form::close()!!}
				</div>
			</div>
            <div class="large-1 columns">
                &nbsp;
            </div>
		</div>
        <div class="row">
            <div class="footer large-12 columns">
                &copy; Copyright 2015 
            </div>
        </div>
	</div>
@stop
