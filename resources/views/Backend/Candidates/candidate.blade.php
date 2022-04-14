@extends('Backend.backendLayout')
@section('content')



    <div class="pb-3 pt-1">

        <button type="button" class="btn btn-primary pt-3 pb-3" data-toggle="modal" data-target="#exampleModal">
            Add Candidates
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <h2 class="text-center text-slate-600 font-extrabold text-5xl pb-7">Add Candidates Content</h2>


                    <div class="text-zinc-900">
                        <section class="float-center container-fluid">


                            <div class="card card-primary float-left">
                                <div class="card-header">
                                    <h3 class="card-title">Candidates</h3>


                                </div>
                                <div class="card-body">


                                    <form method="post" action="{{route('candidates.create')}}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <label for="title">
                                                Candidates name
                                            </label>
                                            <input type="text" name="name" class="form-control" placeholder="Enter Candidate name"/>
                                            <span class="alert-danger">
                                        @error('name'){{$message}}@enderror
                                    </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="body">Candidates Position</label>
                                            <input type="text" name="position" class="form-control" rows="3"/>
                                            <span class="alert-danger">
                                        @error('position'){{$message}}@enderror
                                    </span>
                                        </div>

                                        <div class="form-group">
                                            <label for="body">Event</label>
                                            <select name="event_id" class="form-control" id="exampleFormControlSelect1">
                                                @foreach($event as $evt)
                                                <option value="{{$evt->id}}">{{$evt->name}}</option>
                                                @endforeach
                                            </select>
                                            <span class="alert-danger">
                                        @error('event_id'){{$message}}@enderror
                                    </span>
                                        </div>


                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Select image file for Candidates</label>
                                            <input class="form-control" type="file" id="formFile" name="image">
                                        </div>
                                        <button type="submit" class="btn btn-success float-left bg-gradient-cyan" style="vertical-align:middle"> <span>Create Candidates</span></button>
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
            <h3 class="card-title">Candidates Information</h3>

        </div>
        <div class="card-body table-responsive p-0">
            @if(Session::has('candidates_updated'))
                <div class="alert alert-success"role="alert">
                    {{Session::get('candidates_updated')}}
                </div>
            @endif

            @if(Session::has('candidates_deleted'))
                <div class="alert alert-danger" role="alert">
                    {{Session::get('candidates_deleted')}}
                </div>
            @endif

            @if(Session::has('candidates_created'))
                <div class="alert alert-success"role="alert">
                    {{Session::get('candidates_created')}}
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
                    <th>Candidates name</th>
                    <th>Candidates Position</th>
                    <th>Event</th>
                    <th>Vote Count</th>
                    <th> Candidates Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($candidates as $can)
                    <tr>
                        <td>{{$can->id}}</td>
                        <td>{{$can->name}}</td>
                        <td>{{$can->position}}</td>
                        <td>{{$can->event->name}}</td>
                        <td>{{$can->vote}}</td>
                        <td><img src="{{asset('uploads/'.$can->image)}}"
                                 alt="No image" width="80" height="80"></td>
                        <td>
                            <a href="/candidatess/{{$can->id}}" class="btn btn-info">Details</a>
                            <a href="/edit-candidates/{{$can->id}}" class="btn btn-success">Edit</a>
                            <a href="/delete-candidates/{{$can->id}}" class="btn btn-danger"> Delete</a>
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
                    <h5 class="modal-title" id="exampleModalLabel">Add Content for Candidates Section</h5>
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
