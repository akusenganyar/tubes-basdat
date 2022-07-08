@extends('app')

@section('content')
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('error'))
                        <div class="alert alert-danger">
                          {{ session('error') }}
                        </div>
                        @endif
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!

                    </div>
                    <div class="card-body">
                        <div class="panel-body">
                            @if (Auth::user()->is_admin == 1)
                                <a href="{{route('dashboard')}}">Admin View</a>
                            @else
                            <a href="{{url('/')}}">Landing Page</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
