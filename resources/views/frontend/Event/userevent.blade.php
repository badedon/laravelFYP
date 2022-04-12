@extends('frontend.layout.master')
@section('frontContent')
    <div class="row pl-3">
        @foreach ($event as $can)
        <div class="card" style="width: 18rem;">

                <div class="card-header">
                    Event
                </div>
                <h5 class="card-title">Event Name</h5>
                <h4 class="btn-info">{{$can->name}}</h4>
                <h5 class="card-title">Event Location</h5>
                <h4 class="btn-info">{{$can->location}}</h4>
                <h5 class="card-title">Start Date</h5>
                <h4 class="btn-info">{{$can->startdate}}</h4>
                <h5 class="card-title">End Date</h5>
                <h4 class="btn-info">{{$can->enddate}}</h4>
            <p><a class="btn btn-primary" href="{{route('frontend.Vote.uservote')}}">Candidates</a></p>

        </div>
        @endforeach
    </div>


@endsection



