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
<form class="center" method="post" action="registrar" >

    <label for="nickname">Nickname:</label>
    <input class="form-control" type="text" min="2" placeholder="Nickname" name="nickname" required/>
    <br>
    <label for="password">Password:</label>
    <input class="form-control" type="password" min="2" placeholder="Password" name="password" required />
    <br>
    <label for="password">Repeat Password:</label>
    <input class="form-control" type="password" min="2" placeholder="Password" name="password2" required />
    <br>
    <label for="phone">Phone:</label>
    <input class="form-control" type="text" min="9" placeholder="Phone" name="phone" required />
    <br>
    <label for="mail">Mail:</label>
    <input class="form-control" type="email"  placeholder="Mail" name="mail" required />
    <br>
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
    <input class='btn btn-success' type="submit" name="action" value="Register"/>

</form>
@endsection
