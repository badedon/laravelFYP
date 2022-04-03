@extends('Backend.backendLayout')
@section('content')



    <div class="pb-3 pt-1">

        <button type="button" class="btn btn-primary pt-3 pb-3" data-toggle="modal" data-target="#exampleModal">
            Add Event
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <h2 class="text-center text-slate-600 font-extrabold text-5xl pb-7">Add Event Content</h2>


                    <div class="text-zinc-900">
                        <section class="float-center container-fluid">


                            <div class="card card-primary float-left">
                                <div class="card-header">
                                    <h3 class="card-title">Event</h3>


                                </div>
                                <div class="card-body">


                                    <form method="post" action="{{route('event.create')}}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <label for="title">
                                                Event name
                                            </label>
                                            <input type="text" name="name" class="form-control" placeholder="Enter
                                             Event name"/>
                                            <span class="alert-danger">
                                        @error('name'){{$message}}@enderror
                                    </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="body">Event Location</label>
                                            <input type="text" name="location" class="form-control" rows="3"/>

                                            {{--                                            <select name="Position" id="lang">--}}
                                            {{--                                                <option value="President">President</option>--}}
                                            {{--                                                <option value="php">PHP</option>--}}
                                            {{--                                                <option value="java">Java</option>--}}
                                            {{--                                                <option value="golang">Golang</option>--}}
                                            {{--                                                <option value="python">Python</option>--}}
                                            {{--                                                <option value="c#">C#</option>--}}
                                            {{--                                                <option value="C++">C++</option>--}}
                                            {{--                                                <option value="erlang">Erlang</option>--}}
                                            {{--                                            </select>--}}


                                            <span class="alert-danger">
                                        @error('position'){{$message}}@enderror
                                    </span>
                                        </div>

                                        <div class="form-group">
                                            <label for="body">Event Start Date</label>
                                            <input type="date" name="startdate" class="form-control" rows="3"/>
                                            <span class="alert-danger">
                                        @error('position'){{$message}}@enderror
                                    </span>
                                        </div>

                                        <div class="form-group">
                                            <label for="body">Event End Date</label>
                                            <input type="date" name="enddate" class="form-control" rows="3"/>
                                            <span class="alert-danger">
                                        @error('position'){{$message}}@enderror
                                    </span>
                                        </div>



                                        <button type="submit" class="btn btn-success float-left bg-gradient-cyan" style="vertical-align:middle"> <span>Create Event</span></button>
                                    </form>


                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </section>
                    </div>
                </div>

            </div>
        </div>




        <div class="card text-zinc-900 ">
            <div class="card-header border-0">
                <h3 class="card-title">Event Information</h3>

            </div>
            <div class="card-body table-responsive p-0">
                @if(Session::has('event_updated'))
                    <div class="alert alert-success"role="alert">
                        {{Session::get('event_updated')}}
                    </div>
                @endif

                @if(Session::has('event_deleted'))
                    <div class="alert alert-danger" role="alert">
                        {{Session::get('event_deleted')}}
                    </div>
                @endif

                @if(Session::has('event_created'))
                    <div class="alert alert-success"role="alert">
                        {{Session::get('event_created')}}
                    </div>
                @endif

                <a class="alert-danger">
                    @error('name'){{$message}}@enderror
                    @error('position'){{$message}}@enderror
                </a>


                <table class="table table-striped table-valign-middle ">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Event name</th>
                        <th>Event Location</th>
                        <th> Event Start Date</th>
                        <th> Event End Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($event as $can)
                        <tr>
                            <td>{{$can->id}}</td>
                            <td>{{$can->name}}</td>
                            <td>{{$can->location}}</td>
                            <td>{{$can->startdate}}</td>
                            <td>{{$can->enddate}}</td>
                            <td>
                                <a href="/events/{{$can->id}}" class="btn btn-info">Details</a>
                                <a href="/edit-event/{{$can->id}}" class="btn btn-success">Edit</a>
                                <a href="/delete-event/{{$can->id}}" class="btn btn-danger"> Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card -->

        <!--add about -->

        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-zinc-900">
                        <h5 class="modal-title" id="exampleModalLabel">Add Content for Event Section</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
