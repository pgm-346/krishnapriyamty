@extends('layout')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Add New Deposite</h2>

</div>

        </div>

    </div>
    @if ($message = Session::get('success'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>

@endif


    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


    <form action="{{ route('deposite.store') }}" method="POST">

    	@csrf


         <div class="row">

		    <div class="col-xs-6 col-sm-6 col-md-6">

		        <div class="form-group">

		            <strong>Deposite Money:</strong>

                    <input type = "hidden" name = "user_id" value = "{{Auth::user()->id}}">

                    <input type = "hidden" name = "type" value = "credit">

                    <input type = "hidden" name = "details" value = "Deposite">

		            <input type="text" name="amount" class="form-control" placeholder="Deposite Money">

		        </div>

		    </div>

		    <div class="col-xs-12 col-sm-6 col-md-12 text-center">

		            <button type="submit" class="btn btn-primary">Deposite</button>

		    </div>

		</div>

    </form>

@endsection