@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

		
		<form method="POST" action="{{ route('post_mobile', ['id' => $smartphone->id ]) }}">
		@csrf
		  <div class="form-group">
			<label for="exampleInputEmail1">Brand</label>
			<input type="text" class="form-control" name="brand" value="{{$smartphone->brand}}">
			</div>
			<div class="form-group">
			<label for="exampleInputEmail1">Model</label>
			<input type="text" class="form-control" name="model" value="{{$smartphone->model}}">
			</div>
			<div class="form-group">
			<label for="exampleInputEmail1">Color</label>
			<input type="text" class="form-control" name="color" value="{{$smartphone->color}}">
			</div>
			<div class="form-group">
			<label for="exampleInputEmail1">Storage</label>
			<input type="text" class="form-control" name="storage" value="{{$smartphone->storage}}">
			</div>
			<div class="form-group">
			<label for="exampleInputEmail1">Price</label>
			<input type="text" class="form-control" name="price" value="{{$smartphone->price}}">
			</div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		  
		</form>
        </div>
    </div>
</div>

<script>


</script>
@endsection
