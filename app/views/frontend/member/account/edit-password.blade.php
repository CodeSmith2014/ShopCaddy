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
	<h2>Change the password associated with Shop Caddy Account.</h2>
	<ul class="breadcrumb pull-right">
		<li><a href="/">Home</a> </li>
		<li><a href="{{URL::route('account')}}">Modify Account Information</a></li>
		<li class="active">Change Password</li>
	</ul>
</section>
@stop

@section('content')
<section class="account_info">
	<div class="row">
		@include('frontend.member.account.navigation')
		<div class="col-md-9 col-lg-9">
			{{Form::open(array('url'=>URL::route('update-password'), 'class'=>'account_info', 'method' => 'PUT'))}}
			<div class="form-group">
				{{ Form::label('current_password', 'Current Password', array('class'=>'control-label'))}}
				{{ Form::password('current_password', array('class'=>'form-control', 'required'=>''))}}
			</div>

			<div class="form-group">
				{{ Form::label('new_password', 'New Password', array('class'=>'control-label'))}}
				{{ Form::password('new_password', array('class'=>'form-control', 'required'=>''))}}
			</div>

			<div class="form-group">
				{{ Form::label('new_password_confirmation', 'New Password Confirmation', array('class'=>'control-label'))}}
				{{ Form::password('new_password_confirmation', array('class'=>'form-control', 'required'=>''))}}
			</div>

			<button class="btn btn-primary pull-right" type="submit">Save Change</button>
			{{Form::close()}}
		</div>
	</div>
</section>
@stop