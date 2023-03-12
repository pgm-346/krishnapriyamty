@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome')}} {{Auth::user()->name}}</div>
  
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
  
                    YOUR ID: {{Auth::user()->email}}<br><br>
                    YOUR BALANCE: {{$data->balance}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection