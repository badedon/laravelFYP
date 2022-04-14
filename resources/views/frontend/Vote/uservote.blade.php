@extends('frontend.layout.master')
@section('frontContent')

<div class="pb-3">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
            @foreach($uservote as $key => $can)
                <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                    <img src="{{asset('uploads/'.$can->image)}}" class="d-block w-100"  alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{$can->name}}</h5>
                        <p>{{$can->position}}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button"  data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true">     </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


    <div class="row pl-3">

        @foreach ($uservote as $can)
        <div class="col-lg-4">
            <img src="{{asset('uploads/'.$can->image)}}" class="img-thumbnail">

            <h3 class="btn-info">{{$can->name}}</h3>
            <h3 class="btn-info">{{$can->position}}</h3>
            <p><a class="btn btn-primary" href="{{url('/status-update',$can->id)}}">Vote</a></p>
        </div>
        @endforeach
    </div>
@endsection
