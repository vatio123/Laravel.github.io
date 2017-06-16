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
							@if (isset($_SESSION['user']) )
									 <form method='post' action='index.php?option=1' >
									 <br><button type='submit' name='action' value='ShowMore'>Show more</button>
									<input type='hidden' name='id' value='$id'/>

									</form>
							@endif
						</div><br>
				@endforeach
@endsection
