@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                
                <div class ="row">
					<div class="col-md-12">
						<div class="jumbotron">
							<h2><b>Welcome to 2018 online Voting Portal</b></h2>
							<h4><i>Helping to Conduct a violent free and fair Voting Experience</i></h4>
						</div><!--end jumbotron-->    
					</div><!--end column-->
				</div><!--end of .row-->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
