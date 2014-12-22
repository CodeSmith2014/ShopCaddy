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
			{{Form::open(array('class'=>'account_info','url'=>'abc'))}}
			<div class="form-group">
				<label>Old Email Address: </label>
				t.siangyee@gmaill.com
			</div>

			<div class="form-group">
				<label for="email" class="control-label">New Email Address</label>
				<input type="text" class="form-control" name="email">
			</div>

			<div class="form-group">
				<label for="cfm-email" class="control-label">Confirm New Email Address</label>
				<input type="text" class="form-control" name="cfm-email">
			</div>

			<button class="btn btn-primary pull-right" type="submit">Save Change</button>
			{{Form::close()}}
		</div>
	</div>
</section>
@stop