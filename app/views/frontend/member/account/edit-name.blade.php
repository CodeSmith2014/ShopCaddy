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
	<h2>Change the name associated with Shop Caddy Account.</h2>
	<ul class="breadcrumb pull-right">
		<li><a href="/">Home</a> </li>
		<li><a href="{{URL::route('account')}}">Modify Account Information</a></li>
		<li class="active">Change Name</li>
	</ul>
</section>
@stop

{{ $user }}

@section('content')
<section class="account_info">
	<div class="row">
		@include('frontend.member.account.navigation')
		<div class="col-md-9 col-lg-9">
			{{Form::open(array('url'=>URL::route('update-name'), 'class'=>'account_info', 'method' => 'PUT'))}}
			<div class="form-group">
				{{ Form::label('name', 'What is your new name?', array('class'=>'control-label'))}}
				{{ Form::text('name', $user->name, array('class'=>'form-control'))}}
				@if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
			</div>
			<button class="btn btn-primary pull-right" type="submit">Save Change</button>
			{{Form::close()}}
		</div>
	</div>
</section>
@stop