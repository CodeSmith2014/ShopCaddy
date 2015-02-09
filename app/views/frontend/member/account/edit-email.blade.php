@extends('frontend.master')

@section('title')
@parent
- Modify Account Information
@stop

@section('before_hgroup')

@stop

@section('hgroup')
<section class="hgroup">
	<h1>Modify Account Information</h1>
	<h2>Remember to use the new email address the next time you login.</h2>
	<ul class="breadcrumb pull-right">
		<li><a href="/">Home</a> </li>
		<li><a href="{{URL::route('account')}}">Modify Account Information</a></li>
		<li class="active">Change Email</li>
	</ul>
</section>
@stop

@section('content')
<section class="account_info">
	<div class="row">
		@include('frontend.member.account.navigation')
		<div class="col-md-9 col-lg-9">
			{{Form::open(array('url'=>URL::route('update-email'), 'class'=>'account_info', 'method' => 'PUT'))}}
			<div class="form-group">
				<label>Old Email Address: </label>
				{{ $user->email }}
			</div>

			<div class="form-group">
				{{ Form::label('email', 'New Email Address', array('class'=>'control-label'))}}
				{{ Form::text('email', null, array('class'=>'form-control'))}}
			</div>

			<div class="form-group">
				{{ Form::label('email_confirmation', 'Confirm New Email Address', array('class'=>'control-label'))}}
				{{ Form::text('email_confirmation', null, array('class'=>'form-control'))}}
			</div>

			<button class="btn btn-primary pull-right" type="submit">Save Change</button>
			{{Form::close()}}
		</div>
	</div>
</section>
@stop