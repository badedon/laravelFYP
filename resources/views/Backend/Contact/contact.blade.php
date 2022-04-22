@extends('Backend.backendLayout')
@section('content')

    <div class="card text-zinc-900 ">
    <div class="card-header border-0">
        <h3 class="card-title">Contact Information</h3>

    </div>
    <div class="card-body table-responsive p-0">


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
                <th>Name</th>
                <th>Email</th>
                <th> Subject</th>
                <th> Message</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($contact as $can)
                <tr>
                    <td>{{$can->id}}</td>
                    <td>{{$can->name}}</td>
                    <td>{{$can->email}}</td>
                    <td>{{$can->subject}}</td>
                    <td>{{$can->message}}</td>
                    <td>
                        <a href="/delete-event/{{$can->id}}" class="btn btn-danger"> Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
