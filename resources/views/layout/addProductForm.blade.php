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

<div class="center">
	<label for="fields">Add a new  product</label>
	<form method="post" action="create" >
			<label for="idproducttype">Product type:</label>
			<select name="idproducttype" required>
					@foreach($producttypes as $producttype)
						<option  value="{{$producttype->id}}">{{$producttype->name}}</option>
					@endforeach
			</select>
			<br>
			<label for="idbrand">Brand:</label>
			<select name="idbrand" required>
				@foreach($brands as $brand)
					<option value="{{$brand->id}}">{{$brand->name}}</option>
				@endforeach

			</select>
			<br>
			<label for="price">Price:</label>
			<input class="form-control" type="text"  placeholder="price" name="price" required />

			<label for="description">Description:</label>
			<input class="form-control" type="text"  placeholder="description" name="description" required />

			<label for="year">Year:</label>
			<input class="form-control" type="text"  placeholder="year" name="year" required />

			<label for="km">Km:</label>
			<input class="form-control" type="text"  placeholder="km" name="km" required />

			<label for="cc">cc:</label>
			<input class="form-control" type="text"  placeholder="cc" name="cc" required />

			<label for="img">img:</label>
			<input class="form-control" type="text"  placeholder="img" name="img"  />

			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
			<input class="button" type="submit" name="action" value="Add"/>
	</form>
</div>
@endsection
