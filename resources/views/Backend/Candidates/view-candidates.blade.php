@extends('Backend.backendLayout')
@section('content')

    <section style ="padding-top: 60px" class="">
        <div class="pl-3 pb-2"> <a href="{{route('candidates')}}" >
                <button class="btn btn-success ">Back</button>
            </a></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header text-zinc-900">
                            Candidates Details
                        </div>
                        <div class="card-body text-zinc-900">
                            <h1 class="text-bold">{{$candidates->name}}</h1>
                            <p class="pt-4">{{$candidates->position}}</p>
                            <p><img src="{{asset('uploads/'.$candidates->image)}}"
                                    alt="No image" width="640px" height="360px"></p>
                        </div>
                    </div>
                </div>>
            </div>
        </div>
    </section>
@endsection
