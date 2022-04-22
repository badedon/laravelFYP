@extends('Backend.backendLayout')
@section('content')

    <section style ="padding-top: 60px" class="">
        <div class="pl-3 pb-2"> <a href="{{route('event')}}" >
                <button class="btn btn-success ">Back</button>
            </a></div>

        <div class="row pl-3">
                <div class="card" style="width: 18rem;">

                    <div class="card-header">
                        Event
                    </div>
                    <h5 class="card-title">Event Name</h5>
                    <h4 class="btn-info">{{$event->name}}</h4>
                    <h5 class="card-title">Event Location</h5>
                    <h4 class="btn-info">{{$event->location}}</h4>
                    <h5 class="card-title">Start Date</h5>
                    <h4 class="btn-info">{{$event->startdate}}</h4>
                    <h5 class="card-title">End Date</h5>
                    <h4 class="btn-info">{{$event->enddate}}</h4>

                </div>
        </div>
    </section>
@endsection
