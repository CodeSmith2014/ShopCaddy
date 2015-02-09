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
	<h2>Overview of your personal information.</h2>
	<ul class="breadcrumb pull-right">
		<li><a href="index.html">Home</a> </li>
		<li class="active">Modify Account Information</li>
	</ul>
</section>
@stop

@section('content')
<section class="account_info">
	<div class="row">
		@include('frontend.member.account.navigation')
		<div class="col-md-9 col-lg-9">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="form-group">
						<label for="username" class="control-label">Username</label>
						<input type="text" class="form-control" name="username" value="{{ $user->username }}" disabled="">
					</div>

					<div class="form-group">
						<label for="email" class="control-label">Email</label>
						<div class="input-group">
							<input type="text" class="form-control" name="email" value="{{ $user->email }}" disabled="">
							<div class="input-group-addon"><a href="{{URL::route('edit-email')}}">Edit</a></div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="form-group">
						<label for="name" class="control-label">Name</label>
						<div class="input-group">
							<input type="text" class="form-control" name="name" value="{{ $user->name }}" disabled="">
							<div class="input-group-addon"><a href="{{URL::route('edit-name')}}">Edit</a></div>
						</div>
					</div>

					<div class="form-group">
						<label for="mobile" class="control-label">Mobile No.</label>
						<div class="input-group">
							<input type="text" class="form-control" name="mobile" value="{{ $user->mobile_no }}" disabled="">
							<div class="input-group-addon"><a href="{{URL::route('edit-mobile')}}">Edit</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
{{Form::close()}}
</section>
@stop