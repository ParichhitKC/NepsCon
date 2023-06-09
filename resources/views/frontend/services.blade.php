@extends('layouts.main')
@section('content')
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Popular Causes</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> About Us</li>
            </ul>
        </div>
    </div>
</div>



<!-- ################# Events Start Here#######################--->
<section class="events">
    <div class="container">
@foreach($service as $ser)
        <div class="event-ro row">
            <div class="col-md-4 col-sm-6">
                <div class="event-box">
                    <img src={{asset('images/'.$ser->image)}} alt="">
                    <h4>{{$ser->title}}</h4>
                    <p class="raises"><span>Raised :${{$ser->raised}}</span> / $500,000 </p>
                    <p class="desic"> {{$ser->detail}} </p>
                    <button class="btn btn-success btn-sm">Donate Now</button>
                </div>
            </div>
        </div>
        @endforeach
{{--            <div class="col-md-4 col-sm-6">--}}
{{--                <div class="event-box">--}}
{{--                    <img src="assets/images/events/image_06.jpg" alt="">--}}
{{--                    <h4>Child Education in Africa</h4>--}}
{{--                    <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>--}}
{{--                    <p class="desic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's </p>--}}
{{--                    <button class="btn btn-success btn-sm">Donate Now</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 col-sm-6">--}}
{{--                <div class="event-box">--}}
{{--                    <img src="assets/images/events/image_04.jpg" alt="">--}}
{{--                    <h4>Child Education in Africa</h4>--}}
{{--                    <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>--}}
{{--                    <p class="desic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's </p>--}}
{{--                    <button class="btn btn-success btn-sm">Donate Now</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 col-sm-6">--}}
{{--                <div class="event-box">--}}
{{--                    <img src="assets/images/events/image_05.jpg" alt="">--}}
{{--                    <h4>Child Education in Africa</h4>--}}
{{--                    <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>--}}
{{--                    <p class="desic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's </p>--}}
{{--                    <button class="btn btn-success btn-sm">Donate Now</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 col-sm-6">--}}
{{--                <div class="event-box">--}}
{{--                    <img src="assets/images/events/image_06.jpg" alt="">--}}
{{--                    <h4>Child Education in Africa</h4>--}}
{{--                    <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>--}}
{{--                    <p class="desic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's </p>--}}
{{--                    <button class="btn btn-success btn-sm">Donate Now</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 col-sm-6">--}}
{{--                <div class="event-box">--}}
{{--                    <img src="assets/images/events/image_07.jpg" alt="">--}}
{{--                    <h4>Child Education in Africa</h4>--}}
{{--                    <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>--}}
{{--                    <p class="desic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's </p>--}}
{{--                    <button class="btn btn-success btn-sm">Donate Now</button>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</section>
@endsection
