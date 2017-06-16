@extends('layout/default')
@section('menu')
    <!--links only for product-->
@endsection
@section('content')
						 <div class='products'> <img src="{{$product->img}}"  height='100' width='150'>
							 <br>Brand:   {{$product->name}}
							 <br>Year:   {{$product->year}}
							 <br>Price:   {{$product->price}}   €
							 <br>Description:   {{$product->description }}
							 <br>Km:   {{$product->km }}
							 <br>cc:   {{$product->cc}}
							 <br>Date of insert:   {{$product->date}}

							@if (Session::has('user'))
									<div class='contact'>
									<label><strong>Contact: </strong></label>
											<form method='post' action='reservation' >
													<input type='hidden' name='idproduct' value="{{$product->id}}" required ></input>
													<input type='hidden' name='idseller' value="{{$product->iduser}}" required ></input>
													<label for='name'>Name:</label>
													<input type='text'  placeholder='Name' name='name' required ></input>
													<br>
													<label for='mail'>Mail:</label>
													<input type='email'  placeholder='Mail' name='mail' required ></input>
													<br>
													<label for='mesage'>Mesage:</label>
													<textarea placeholder='Mesage' name='mesage' rows='10' cols='40' required ></textarea>
													<br>
													<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
													<input class='btn btn-success' type='submit' name='action' value='Reservation'/>
											</form>
									</div>
							@endif
						</div><br>
@endsection
