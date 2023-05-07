@extends('layout.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Banner</h2>
            </div>
            <div class="pull-right">

                    <a class="btn btn-success" href="{{ route('banner.create') }}"> Create New banner</a>

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
            <th>Subtitle</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($banner as $ban)
            <tr>
                <td>{{ $loop->index }}</td>
                <td>{{ $ban->title }}</td>
                <td>{{ $ban->subtitle }}</td>
                <td><img src="{{asset('images/'.$ban->image)}}" style="max-width: 100px;"> </td>

                <td>
                    <form action="{{ route('banner.destroy',$ban->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('banner.show',$ban->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('banner.edit',$ban->id) }}">Edit</a>



                        @csrf
                        @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>

                    </form>
                </td>
            </tr>
        @endforeach
    </table>


    {!! $banner->links() !!}


@endsection
