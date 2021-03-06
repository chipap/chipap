@extends('frontend/layouts/account')

{{-- Page title --}}
@section('title')
Your Profile
@stop

{{-- Account page content --}}
@section('account-content')
<div class="page-header">
	<h4>Update your Profile</h4>
</div>

<form method="post" action="" class="form-vertical" autocomplete="off">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />

	<!-- First Name -->
	<div class="control-group{{ $errors->first('first_name', ' error') }}">
		<label class="control-label" for="first_name">First Name</label>
		<div class="controls">
			<input class="span4" type="text" name="first_name" id="first_name" value="{{ Input::old('first_name', $user->first_name) }}" />
			{{ $errors->first('first_name', '<span class="help-block">:message</span>') }}
		</div>
	</div>

	<!-- Last Name -->
	<div class="control-group{{ $errors->first('last_name', ' error') }}">
		<label class="control-label" for="last_name">Last Name</label>
		<div class="controls">
			<input class="span4" type="text" name="last_name" id="last_name" value="{{ Input::old('last_name', $user->last_name) }}" />
			{{ $errors->first('last_name', '<span class="help-block">:message</span>') }}
		</div>
	</div>

	<!-- Mobile Number -->
	<div class="control-group{{ $errors->first('mobile', ' error') }}">
		<label class="control-label" for="mobile">Mobile Number</label>
		<div class="controls">
			<input class="span4" type="text" name="mobile" id="mobile" value="{{ Input::old('mobile', $user->mobile) }}" />
			{{ $errors->first('mobile', '<span class="help-block">:message</span>') }}
		</div>
	</div>

	<!-- Country -->
	<div class="control-group{{ $errors->first('country', ' error') }}">
		<label class="control-label" for="country">Country</label>
		<div class="controls">
			<input class="span4" type="text" name="country" id="country" value="{{ Input::old('country', $user->country) }}" />
			{{ $errors->first('country', '<span class="help-block">:message</span>') }}
		</div>
	</div>


	<hr>

	<!-- Form actions -->
	<div class="control-group">
		<div class="controls">
			<button type="submit" class="btn">Update your Profile</button>
		</div>
	</div>
</form>
@stop
