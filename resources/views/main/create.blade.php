@extends('layout.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New team</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('main.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('main.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>vision:</strong>
                    <textarea type="text" name="vision" class="form-control" placeholder="Name"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>mission:</strong>
                    <textarea type="text" name="mission" class="form-control" placeholder="Name"></textarea>
                </div>
            </div><div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>about:</strong>
                    <textarea type="text" name="about" class="form-control" placeholder="Name"></textarea>
                </div>
            </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <strong>vision_img:</strong>
                        <input type="file" name="vision_img" placeholder="Choose file" id="main">
                        @error('main')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div><div class="col-md-12">
                    <div class="form-group">
                        <strong>mission_img:</strong>
                        <input type="file" name="mission_img" placeholder="Choose file" id="main">
                        @error('main')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div><div class="col-md-12">
                    <div class="form-group">
                        <strong>about_img:</strong>
                        <input type="file" name="about_img" placeholder="Choose file" id="main">
                        @error('main')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>


    </form>

@endsection
