@extends('Backend.backendLayout')
@section('content')
    <h2 class="text-center text-slate-600 font-extrabold text-5xl pb-7">Update Event Content</h2>
    <div class="pl-3 pb-2"> <a href="{{route('event')}}" >
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

                            <form method="POST" action="{{route('event.update')}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{$event->id}}"/>
                                <div class="form-group">
                                    <label for="title">
                                        Event Name
                                    </label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Event name" value="{{$event->name}}"/>

                                </div>
                                <div class="form-group">
                                    <label for="body">Event Location</label>
                                    <input type="text" name="location" class="form-control" placeholder="Enter Position" value="{{$event->location}}"/>
                                    {{--                                    <textarea name="position"  class="form-control" rows="3">{{$candidates->position}}--}}

                                    </textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="body">Event Start Date</label>
                                    <input type="date" name="startdate" class="form-control" rows="3"/>
                                </div>
                                <div class="mb-3">
                                    <label for="body">Event End Date</label>
                                    <input type="date" name="enddate" class="form-control" rows="3"/>
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
