@extends('layout')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Add New  Withdarw:</h2>

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


    <form action="{{ route('transfer.store') }}" method="POST">

    	@csrf

        <div class="row">

         <div class="col-xs-6 col-sm-6 col-md-6">

         <div class="form-group">

        <strong>Email Address:</strong>

        <input type = "hidden" name = "user_id" value = "{{Auth::user()->id}}">

        <input type="email" name="transfer_id" class="form-control" placeholder="example@gmail.com">

        <input type = "hidden" name = "details" value = "Transfer">

        </div>

     </div>

     <div class="col-xs-6 col-sm-6 col-md-6">

      <div class="form-group">
      <strong>Type:</strong>
     <select name="type">  
      <option value="debit">Debit</option>
      <option value="credit">Credit</option> 
      </select>
     </div>
     </div>

		    <div class="col-xs-6 col-sm-6 col-md-6">

		        <div class="form-group">

		            <strong>Transfer Amount:</strong>

		            <input type="text" name="amount" class="form-control" placeholder="Transfer Money">

		        </div>

		    </div>

		    <div class="col-xs-12 col-sm-6 col-md-12 text-center">

		            <button type="submit" class="btn btn-primary">Transfer</button>

		    </div>

		</div>

    </form>

@endsection