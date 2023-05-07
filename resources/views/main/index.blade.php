@extends('layout.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Main</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('main.create') }}"> Create New main</a>
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
            <th>Vision</th>
            <th>Mission</th>
            <th>About</th>
            <th>Vision Image</th>
            <th>Mission Image</th>
            <th>About Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($main as $mains)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $mains->vision }}</td>
                <td>{{ $mains->mission}}</td>
                <td>{{ $mains->about}}</td>
                <td><img src="{{asset('images/'.$mains->vision_img)}}" style="max-width: 100px;"> </td>
                <td><img src="{{asset('images/'.$mains->mission_img)}}" style="max-width: 100px;"> </td>
                <td><img src="{{asset('images/'.$mains->about_img)}}" style="max-width: 100px;"> </td>
                <td>
                    <form action="{{ route('main.destroy',$mains->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('main.show',$mains->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('main.edit',$mains->id) }}">Edit</a>



                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>

                    </form>
                </td>
            </tr>
        @endforeach
    </table>


    {!! $main->links() !!}


@endsection
