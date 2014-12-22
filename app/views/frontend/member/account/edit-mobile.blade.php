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
	<h2>Change the mobile phone number associated with Shop Caddy Account.</h2>
	<ul class="breadcrumb pull-right">
		<li><a href="/">Home</a> </li>
		<li><a href="{{URL::route('account')}}">Modify Account Information</a></li>
		<li class="active">Change Mobile No.</li>
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
				<label>Old Mobile Phone Number: </label>
				91442353
			</div>

			<div class="form-group">
				<label for="mobile" class="control-label">New Mobile Phone Number</label>
				<input type="text" class="form-control" name="mobile">
			</div>

			<button class="btn btn-primary pull-right" type="submit">Save Change</button>
			{{Form::close()}}
		</div>
	</div>
</section>
@stop