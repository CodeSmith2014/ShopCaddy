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
	<h2>Manage all your addresses.</h2>
	<ul class="breadcrumb pull-right">
		<li><a href="index.html">Home</a> </li>
		<li><a href="{{URL::route('account')}}">Modify Account Information</a></li>
		<li class="active">Address Book</li>
	</ul>
</section>
@stop

@section('content')
<section class="account_info">
	<div class="row">
		@include('frontend.member.account.navigation')
		<div class="col-md-9 col-lg-9">
			<fieldset style="margin-bottom:10px;">
				<button class="btn btn-info">Add New Address</button>
			</fieldset>
			<section class="addresses-container">
				<h5>Sheldon Tan</h5>
				<div class="address-detail">
					109 Jurong East St 13
					#16-326
					Signapore 600109
				</div>
			</section>
		</div>
	</div>

</div>
{{Form::close()}}
</section>
@stop