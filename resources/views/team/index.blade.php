@extends('layout.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>team</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('team.create') }}"> Create New team</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($team as $teams)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $teams->name }}</td>
                <td>{{ $teams->Designation}}</td>
                <td><img src="{{asset('images/'.$teams->image)}}" style="max-width: 100px;"> </td>
                <td>
                    <form action="{{ route('team.destroy',$teams->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('team.show',$teams->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('team.edit',$teams->id) }}">Edit</a>



                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>

                    </form>
                </td>
            </tr>
        @endforeach
    </table>


    {!! $team->links() !!}


@endsection
