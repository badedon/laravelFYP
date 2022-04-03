@extends('frontend.layout.master')
@section('frontContent')
    <div class="row pl-3">
        @foreach ($uservote as $can)
        <div class="col-lg-4">
            <img src="{{asset('uploads/'.$can->image)}}" class="img-thumbnail">

            <h3 class="btn-info">{{$can->name}}</h3>
            <h3 class="btn-info">{{$can->position}}</h3>
            <p><a class="btn btn-primary" href="#">Vote</a></p>
        </div>
        @endforeach
    </div>
@endsection
