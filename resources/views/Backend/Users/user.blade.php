@extends('Backend.backendLayout')
@section('content')




    <div class="pb-3 pt-1">

        <button type="button" class="btn btn-primary pt-3 pb-3" data-toggle="modal" data-target="#exampleModal">
            Add Users
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <h2 class="text-center text-slate-600 font-extrabold text-5xl pb-7">Add User Content</h2>


                    <div class="text-zinc-900">
                        <section class="float-center container-fluid">


                            <div class="card card-primary float-left">
                                <div class="card-header">
                                    <h3 class="card-title">Users</h3>


                                </div>
                                <div class="card-body">


                                    <form method="post" action="{{route('users.create')}}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <label for="title">
                                                Name
                                            </label>
                                            <input type="text" name="name" class="form-control" placeholder="Enter user full name"/>
                                            <span class="alert-danger">
                                        @error('name'){{$message}}@enderror
                                    </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="body">Email</label>
                                            <input type="text" name="email" class="form-control" rows="3"/>
                                            <span class="alert-danger">
                                        @error('email'){{$message}}@enderror
                                    </span>

                                        </div>

                                        <div class="form-group">
                                            <label for="body">password</label>
                                            <input type="text" name="password" class="form-control" rows="3"/>
                                            <span class="alert-danger">
                                        @error('position'){{$message}}@enderror
                                    </span>

                                            <div class="form-group">
                                                <label for="body"> Is_Admin</label>
                                                <input type="text" name="is_admin" class="form-control" rows="3"/>
                                                <span class="alert-danger">
                                        @error('is_admin'){{$message}}@enderror
                                    </span>

                                            </div>

                                        </div>

                                        <button type="submit" class="btn btn-success float-left bg-gradient-cyan" style="vertical-align:middle"> <span>Create Users</span></button>
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
                <h3 class="card-title">Users Information</h3>

            </div>
            <div class="card-body table-responsive p-0">
                @if(Session::has('users_updated'))
                    <div class="alert alert-success"role="alert">
                        {{Session::get('users_updated')}}
                    </div>
                @endif

                @if(Session::has('users_deleted'))
                    <div class="alert alert-danger" role="alert">
                        {{Session::get('users_deleted')}}
                    </div>
                @endif

                @if(Session::has('users_created'))
                    <div class="alert alert-success"role="alert">
                        {{Session::get('users_created')}}
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>is_admin</th>
                        <th> Password</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $can)
                        <tr>
                            <td>{{$can->id}}</td>
                            <td>{{$can->name}}</td>
                            <td>{{$can->email}}</td>
                            <td>{{$can->is_admin}}</td>
                            <td>{{$can->password}}</td>

                            <td>
                                <a href="/userss/{{$can->id}}" class="btn btn-info">Details</a>
                                <a href="/edit-users/{{$can->id}}" class="btn btn-success">Edit</a>
                                <a href="/delete-users/{{$can->id}}" class="btn btn-danger"> Delete</a>
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
                        <h5 class="modal-title" id="exampleModalLabel">Add Content for Users Section</h5>
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
