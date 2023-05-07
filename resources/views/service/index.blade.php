@extends('layout.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Service</h2>
            </div>
            <div class="pull-right">

                    <a class="btn btn-success" href="{{ route('service.create') }}"> Create New service</a>

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
            <th>Title</th>
            <th>Raised</th>
            <th>Detail</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($service as $ser)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $ser->title }}</td>
                <td>{{ $ser->raised }}</td>
                <td>{{ $ser->detail }}</td>
                <td><img src="{{asset('images/'.$ser->image)}}" style="max-width: 100px;"> </td>

                <td>
                    <form action="{{ route('service.destroy',$ser->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('service.show',$ser->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('service.edit',$ser->id) }}">Edit</a>



                        @csrf
                        @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>

                    </form>
                </td>
            </tr>
        @endforeach
    </table>


    {!! $service->links() !!}


@endsection
