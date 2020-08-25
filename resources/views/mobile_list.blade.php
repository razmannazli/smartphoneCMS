@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
			<table class="table">
			  <thead class="thead-dark">
				<tr>
				  <th scope="col">Brand</th>
				  <th scope="col">Model</th>
				  <th scope="col">Color</th>
				  <th scope="col">Storage</th>
				  <th scope="col">Price</th>
				  <th scope="col">Update</th>
				</tr>
			  </thead>
			  <tbody>
				@foreach($smartphones as $smartphone)
				<tr>
				  <td>{{ $smartphone->brand}}</td>
				  <td>{{ $smartphone->model}}</td>
				  <td>{{ $smartphone->color}}</td>
				  <td>{{ $smartphone->storage}}</td>
				  <td>{{ $smartphone->price}}</td>
				  
				  <td>
					<form method="GET" action="{{ route('view_mobile', ['id' => $smartphone->id ]) }}">
						@csrf						
						<button type="submit" >Submit</button>
					</form>
				  </td>
				</tr>
				@endforeach
			  </tbody>
			</table>
        </div>
    </div>
</div>
@endsection
