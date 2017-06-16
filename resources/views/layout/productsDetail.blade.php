@extends('layout/default')
@section('menu')
    <!--links only for product-->

@endsection
@section('content')
@foreach ($products as $product)
						<!--$id = {{$product->id}}-->
						 <div class='products'> <img src= {{$product->img}}   height='100' width='150'>
							 <br>Brand:   {{$product->name}}
							 <br>Year:   {{$product->year}}
							 <br>Price:   {{$product->price}}   €


							 <br>Description:   {{$product->getDescription }}
							 <br>Km:   {{$product->getKm }}
							 <br>cc:   {{$product->getCc}}
							 <br>Date of insert:   {{$product->getDate}}


							$user = $_SESSION[user]
							$user = unserialize($user)
							@if (isset($_SESSION['user'])&&$user->getId()!= $product->getIduser() )
									$idproduct = {{$product->getId}}
									$idseller = {{$product->getIduser}}
									$idbuyer = {{$user->getId}}
									<div class='contact'>
									<label for='fields'>Contact: </label>
											<form method='post' action='indexphp?option=3' >

													<label for='name'>Name:</label>
													<input type='text'  placeholder='Name' name='name' required ></input>

													<label for='mail'>Mail:</label>
													<input type='email'  placeholder='Mail' name='mail' required ></input>

													<label for='mesage'>Mesage:</label>
													<textarea placeholder='Mesage' name='mesage' rows='10' cols='40' required ></textarea>
													<input type='hidden' name='idseller' value='$idseller' ></input>
													<input type='hidden' name='idbuyer' value='$idbuyer' ></input>
													<input type='hidden' name='idproduct' value='$idproduct' ></input>
													<input class='button' type='submit' name='action' value='Reservation'/>
											</form>
									</div>
							@endif

						</div><br>
				@endforeach
@endsection
