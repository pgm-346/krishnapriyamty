@extends('layout')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Statement Deatils:</h2>

            </div>

        </div>

    </div><br>
    



    <table class="table table-bordered">

        <tr>

            <th>#</th>

            <th>DATETIME</th>

            <th>AMOUNT</th>

            <th>TYPE</th>

            <th>DETAILS</th>

            <th>BALANCE</th>

        </tr>

	    @foreach ($data as $details)

	    <tr>

            <td>{{ $loop->iteration }}</td>

	        <td>{{$details->updated_at}}</td>

	        <td>{{$details->amount}}</td>

            <td>{{$details->type}}</td>

            <td>{{$details->details}}</td>

            <td>{{$details->balance}}</td>
            

	    </tr>

	    @endforeach

    </table>


   
                {!! $data->links() !!}
          

@endsection
