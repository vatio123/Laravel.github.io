@extends('layout/default')
@section('menu')
<!--links only for product-->
@endsection
	@section('content')

	@foreach ($products as $product)
		<div class='products'> <img src= {{$product->img}}   height='100' width='150'>
			<br>Brand:   {{$product->name}}
			<br>Year:   {{$product->year}}
			<br>Price:   {{$product->price}}   €

			@if(Session::has('user'))
				<br><a type='submit' href="productsDetail{{$product->id}}" name='action' value='{{$product->id}}'>Show more</a>
			@endif

			@if(Session::has('admin'))
				<br><a type='submit' class="btn-sm btn-danger href="delete/{{$product->id}}" name='action' value='{{$product->id}}'>Delete</a>
			@endif

		</div><br>
	@endforeach

@endsection
