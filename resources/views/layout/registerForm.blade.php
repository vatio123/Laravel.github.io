@extends('layout/default')
@section('menu')
    <!--links only for here-->

@endsection
@section('content')
<form class="center" method="post" action="" >

    <label for="nickname">Nickname:</label>
    <input class="form-control" type="text" placeholder="Nickname" name="nickname" required/>
    <br>
    <label for="password">Password:</label>
    <input class="form-control" type="password"  placeholder="Password" name="password" required />
    <br>
    <label for="password">Repeat Password:</label>
    <input class="form-control" type="password"  placeholder="Password" name="password2" required />
    <br>
    <label for="phone">Phone:</label>
    <input class="form-control" type="text"  placeholder="Phone" name="phone" required />
    <br>
    <label for="mail">Mail:</label>
    <input class="form-control" type="email"  placeholder="Mail" name="mail" required />
    <br>
    <input class='btn btn-success' type="submit" name="action" value="Register"/>

    <input type="hidden" name="action" value="Register2">
</form>
@endsection
