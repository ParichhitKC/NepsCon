@extends('layout.app')
@section('content')

<table class="table table-bordered">
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
    </tr>
    </thead>
    @foreach($Contact as $con)
        <tr>
            <td>{{$con->name}}</td>
            <td>{{$con->email}}</td>
            <td>{{$con->phone}}</td>
            <td>{{$con->message}}</td>
        </tr>
    @endforeach

</table>

@endsection
