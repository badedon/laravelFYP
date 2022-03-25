@extends('Backend.backendLayout')
@section('content')
@section('content')
    <h2 class="text-center text-slate-600 font-extrabold text-5xl pb-7">Update Candidates Content</h2>
    <div class="pl-3 pb-2"> <a href="{{route('candidates')}}" >
            <button class="btn btn-success ">Back</button>
        </a></div>


    <div class="content-wrapper w-100 h-100 pr-20 text-zinc-900">
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Candidates</h3>


                        </div>
                        <div class="card-body">

                            <form method="POST" action="{{route('candidates.update')}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{$candidates->id}}"/>
                                <div class="form-group">
                                    <label for="title">
                                        Candidates name
                                    </label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Post name" value="{{$candidates->name}}"/>

                                </div>
                                <div class="form-group">
                                    <label for="body">Candidate Position</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Position" value="{{$candidates->position}}"/>
{{--                                    <textarea name="position"  class="form-control" rows="3">{{$candidates->position}}--}}

                               </textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Select image file</label>
                                    <input class="form-control" type="file" id="formFile"  name="image">
                                    <img src="{{asset('uploads/'.$candidates->image)}}"
                                         alt="No image" width="80" height="80">
                                </div>

                                <button type="submit" class="btn btn-success float-left bg-gradient-cyan" style="vertical-align:middle"> <span>Update Candidates</span></button>
                            </form>


                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.card -->

            </div>
        </section>
    </div>


@endsection
