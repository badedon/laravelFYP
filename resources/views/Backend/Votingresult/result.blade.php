@extends('Backend.backendLayout')
@section('content')

    <table class="table table-striped table-valign-middle ">
        <thead>
        <tr>
            <th>@sortablelink('name')</th>
            <th> Candidates Image</th>
            <th>@sortablelink('position')</th>
            <th>@sortablelink('event_id')</th>
            <th>@sortablelink('vote')</th>


        </tr>
        </thead>
        <tbody>
        @foreach ($candidates as $can)
            <tr>
                <td>{{$can->name}}</td>
                <td><img src="{{asset('uploads/'.$can->image)}}"
                         alt="No image" width="80" height="80"></td>
                <td>{{$can->position}}</td>
                <td>{{$can->event->name}}</td>
                <td>{{$can->vote}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
