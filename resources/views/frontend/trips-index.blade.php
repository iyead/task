@extends('layouts.master_home')
@section('home_content')
    <body>

    <div  class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="col-9 col-push">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ session('success') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                                <div class="card-header"> All Trips </div>


                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Name </th>
                                        <th scope="col">From City</th>
                                        <th scope="col">To City</th>
                                        <th scope="col">DateTime</th>
                                        <th scope="col">Cost</th>
                                        <th scope="col">Seats left</th>
                                        <th scope="col">Action</th>




                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($trips as $trip)
                                        <tr>
                                            <th scope="row"> {{ $trip->name }} </th>
                                            <td>  {{ $trip->from }}</td>
                                            <td>  {{ $trip->to }}</td>
                                            <td>  {{ $trip->datetime }}</td>
                                            <td>  {{ $trip->cost }}</td>
                                            <td>  {{ $trip->capacity }}</td>
                                            <td>
                                                <a href="{{ url('trip/edit/'.$trip->id) }}" class="btn btn-info">Book</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>



                    </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
