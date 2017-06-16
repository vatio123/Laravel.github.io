@extends('layout/default')
@section('menu')
    <!--links only for here-->

@endsection

@section('content')
@if(count($errors) > 0)
	<div class="errors">
		<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
	</div>
@endif
	<h1>Login</h1>
	<form action="testLogin" method="post">
		Name: <input class="form-control" type="text" name="nickname" min="5" value="">
		<br>
		Password: <input class="form-control" type="password" name="password" value="">
		<br>
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
		<input class='btn btn-success' type="submit" value="Login">
	</form>
@endsection
