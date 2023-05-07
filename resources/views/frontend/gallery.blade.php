@extends('layouts.main')
@section('content')
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Our Gallery</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Gallery</li>
                </ul>
            </div>
        </div>
    </div>



    <!--  ************************* Gallery Starts Here ************************** -->
    <div id="portfolio" class="gallery">
        <div class="container">

{{--            @foreach($category as $cat)--}}
{{--                <div class="pro">--}}
{{--                    <img src="{{asset('images/'.$cat->files)}}" alt="" style="height: 30vh;">--}}
{{--                        @endforeach--}}



                <div class="gallery-filter d-none d-sm-block">
                    <button class="btn btn-default filter-button" data-filter="all">All</button>
                    @foreach($category as $cat)
                    <button class="btn btn-default filter-button" data-filter="cat-{{$cat->id}}">{{$cat->name}}</button>
                    @endforeach

                </div>

                <br/>
                @foreach($category as $cat)
                    @foreach($cat->File as $f)
                <div class="row">
                <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter cat-{{$cat->id}}">

                    <img src="{{asset('images/'.$f->image)}}" class="img-responsive">
                </div>
                </div>
            @endforeach
            @endforeach




        </div>
    </div>
@endsection
