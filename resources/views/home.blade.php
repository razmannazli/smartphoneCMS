@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
					
					<div class="dropdown">
					  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Menu
					  </a>

					  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="mobile">Mobile List</a>
					  </div>
					</div>
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
