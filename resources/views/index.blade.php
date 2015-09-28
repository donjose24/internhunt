@extends('layouts.guest')

@section('header')
	<title>Homepage</title>
@stop

@section('content')
	<div class="container banner">
		<div class="row">
			<div class="large-6 columns">
				<h1>Welcome to Internhunt!</h1>
				<h3>
					Internhunt can help you find successful internship programs that can help you boost, expand and build your career.
					Join now and learn from the industry leaders, experienced mentors and other enthusiastic people.
				</h3>
				<br>
				<br>
				<h1>Sign up today!</h1>
			</div>
			<div class="large-6 columns cfa">
				<div class="search-box">
					<h1>What do you want to be?</h1>
						{!! Form::open(['url' => 'search', 'method' => 'get'])!!}
							{!! Form::text('keyword','',['placeholder' => 'Ex.) Web Developer, Cook, Surgeon','class' => 'search-query']) !!}
							<button class="full-width search-btn"> Search</button>
						{!! Form::close()!!}
				</div>
			</div>
		</div>
	</div>
@stop
