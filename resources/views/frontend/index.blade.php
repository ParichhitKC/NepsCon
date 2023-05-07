@extends('layouts.main')
@section('content')

    <div class="slider">
    <div class="owl-carousel">
            @foreach($banner as $ban)

            <div class="item">
                <div class="slider-img"><img src="{{asset('images/'.$ban->image)}}" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="animated bounceInDown slider-captions">
                                <h1 class="slider-title">{{$ban->title}}</h1>
                                <p class="slider-text hidden-xs">{{$ban->subtitle}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

    </div>
    </div>

{{--        <div class="item">--}}
{{--            <div class="slider-img"><img src="assets/images/slider/slider-1.jpg" alt=""></div>--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">--}}
{{--                        <div class="slider-captions ">--}}
{{--                            <h1 class="slider-title">To create a just, free with dignity and healthy</h1>--}}
{{--                            <p class="slider-text hidden-xs">We are eager to create a just, free with dignity and healthy society by mobilizing the most marginalized people of the region. </p>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="item">--}}
{{--            <div class="slider-img"><img src="assets/images/slider/slider-2.jpg" alt=""></div>--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">--}}
{{--                        <div class="slider-captions ">--}}
{{--                            <h1 class="slider-title">To mobilize economically, socially and politically vulnerable people</h1>--}}
{{--                            <p class="slider-text hidden-xs">We are eager to mobilize economically, socially and politically vulnerable people like women, children, Dalits, indigenous people to increase their access to resources and decisions where they are controlled and distributed. </p>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</div>--}}

<!--  ************************* About Us Starts Here ************************** -->

<div class="about-us container-fluid">
    <div class="container">
@foreach($main as $mains)
        <div class="row natur-row no-margin w-100">
            <div class="text-part col-md-6">
                <h2>About US</h2>
{{--                <p>Of the seven province of Nepal, the karanlai has the Second lowest human development index (HDI) and hence, socio-economic condition of people from this province is compassionate in comparison to other citizens dwelling elsewhere in the country. Furthermore, condition of Dalits from this region is still worse because of the fact that they are not only economically deprived but also socially discarded. Overall condition of such under-privileged Dalits from this region is more pitiable in comparison with the Dalits from the other regions of the country. </p>--}}
{{--                <p> They are the poorest of the poor and the most marginalized within the marginalized group. However, this region has the highest population density of such under-privileged ethnic community. Besides economic poverty, other kinds of social evils including extreme form of caste discrimination as well as gender discrimination prevail with a deep root into the society. Development of such under-privileged ethnic communities is next to impossible unless and until changes in the society occur.</p>--}}

{{--                <p>Being one of the lead organizations in the region, NEPSCON has been representing in the leadership of Dalit NGO Federation and leading the Karnali Province for more than 10 years. NEPSCON has been able to provide leadership to more than 100 Dalit NGOs of the region being the president of DNF's regional chapter. It has not just limited with Dalits but has been actively contributing in the Loktantrik movement of Nepal. </p>--}}
                <p>{{$mains->about}}</p>
            </div>
            @endforeach
            <div class="image-part col-md-6">
                <div class="about-quick-box row">
                    <div class="col-md-6">
                        <div class="about-qcard">
                            <i class="fas fa-user"></i>
                            <p>Become a Volunteer</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-qcard ">
                            <i class="fas fa-search-dollar red"></i>
                            <p>Quick Fundraise</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-qcard ">
                            <i class="fas fa-donate yell"></i>
                            <p>Give Donation</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-qcard ">
                            <i class="fas fa-hands-helping blu"></i>
                            <p>Help Someone</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- ################# Mission Vision Start Here #######################--->

<section class="container-fluid mission-vision">
    <div class="container">
        <div class="row mission">
            @foreach($main as $mains)
            <div class="col-md-6 mv-det">
                <h1>Our Mission</h1>
{{--                <p>To create a just, free with dignity and healthy society by mobilizing the most marginalized people of the region. </p><br>--}}
{{--                <p>To empower the Dalits and other marginalized groups through the improvement of their awareness and organization. </p><br>--}}
{{--                <p>To advocate the issues of Dalits and other marginalized groups at the local and national level. </p>--}}
            <p>{{$mains->mission}}</p>
            </div>
            <div class="col-md-6 mv-img">
                <img src="{{asset('images/'.$mains->about_img)}}" alt="">
            </div>
        </div>
        <div class="row vision">
            <div class="col-md-6 mv-img">
                <img src="{{asset('images/'.$mains->vision_img)}}" alt="">
            </div>
            <div class="col-md-6 mv-det">
                <h1>Our Vision</h1>
{{--                <p>A just, free with dignity, self reliant and a healthy society will have been established. </p><br>--}}
{{--                <p>To promote the sustainable agriculture and protect the environment by mobilizing the local resources</p><br>--}}
{{--                <p>To mobilize economically, socially and politically vulnerable people like women, children, Dalits, indigenous people to increase their access to resources and decisions where they are controlled and distributed.</p>--}}
            <p>{{$mains->vision}}</p>
            </div>
        </div>
    </div>
    @endforeach
</section>



<!-- ################# Events Start Here#######################--->
<!--    <section class="events">
       <div class="container">
           <div class="session-title row">
               <h2>Popular Causes</h2>
               <p>We are a non-profital & Charity raising money for child education</p>
           </div>
           <div class="event-ro row">
               <div class="col-md-4 col-sm-6">
                   <div class="event-box">
                       <img src="assets/images/events/image_08.jpg" alt="">
                       <h4>Child Education in Africa</h4>

                       <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                       <p class="desic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's </p>
                       <button class="btn btn-success btn-sm">Donate Now</button>
                   </div>
               </div>
               <div class="col-md-4 col-sm-6">
                   <div class="event-box">
                       <img src="assets/images/events/image_06.jpg" alt="">
                       <h4>Child Education in Africa</h4>
                       <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                       <p class="desic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's </p>
                       <button class="btn btn-success btn-sm">Donate Now</button>
                   </div>
               </div>
               <div class="col-md-4 col-sm-6">
                   <div class="event-box">
                       <img src="assets/images/events/image_04.jpg" alt="">
                       <h4>Child Education in Africa</h4>
                       <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                       <p class="desic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's </p>
                       <button class="btn btn-success btn-sm">Donate Now</button>
                   </div>
               </div>
           </div>
       </div>
   </section>    -->




<!-- ################# Charity Number Starts Here#######################--->


<div class="doctor-message">
    <div class="inner-lay">
        <div class="container">
            <div class="row session-title">
                <h2>Our Achievemtns in Numbers</h2>
                <p>Promotion of agriculture through permaculture with the support of Action Aid Nepal, Mid western regional office from 1999-2001 with a budget of 2.75 hundred thousands rupees.</p>
            </div>
            <div class="row">
                <div class="col-sm-3 numb">
                    <h3>12+</h3>
                    <span>YEARS OF EXPEREANCE</span>
                </div>
                <div class="col-sm-3 numb">
                    <h3>1812+</h3>
                    <span>HAPPY PEOPLE</span>
                </div>
                <div class="col-sm-3 numb">
                    <h3>52+</h3>
                    <span>EVENTS</span>
                </div>
                <div class="col-sm-3 numb">
                    <h3>48+</h3>
                    <span>FUNT RAISED</span>
                </div>
            </div>
        </div>

    </div>

</div>

<!--################### Our Team Starts Here #######################--->
<   <section class="our-team team-11">
    <div class="container">
        <div class="session-title row">
            <h2>Meet our Team</h2>
            <p>These are the list of our teams.</p>
        </div>
        <div class="row team-row">
            @foreach($team as $teams)
            <div class="col-md-3 col-sm-6">

                <div class="single-usr">
                     <img src="{{asset('images/'.$teams->image)}}" alt="">
                    <div class="det-o">
                        <h4>{{$teams->name}}</h4>
                        <i>{{$teams->Designation}} </i>
                    </div>

                </div>

            </div>
            @endforeach
        </div>

{{--            <div class="col-md-3 col-sm-6">--}}
{{--                <div class="single-usr">--}}
{{--                    <!--  <img src="assets/images/team/team-memb2.jpg" alt=""> -->--}}
{{--                    <div class="det-o">--}}
{{--                        <h4>Dal Bahadur Oli </h4>--}}
{{--                        <i>Vice-president</i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3 col-sm-6">--}}
{{--                <div class="single-usr">--}}
{{--                    <!--  <img src="assets/images/team/team-memb3.jpg" alt=""> -->--}}
{{--                    <div class="det-o">--}}
{{--                        <h4>Mima Kumari Tiwari</h4>--}}
{{--                        <i>Secretary</i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3 col-sm-6">--}}
{{--                <div class="single-usr">--}}
{{--                    <!-- <img src="assets/images/team/team-memb4.jpg" alt=""> -->--}}
{{--                    <div class="det-o">--}}
{{--                        <h4>David Kanuel</h4>--}}
{{--                        <i>Project Manager</i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3 col-sm-6">--}}
{{--                <div class="single-usr">--}}
{{--                    <!-- <img src="assets/images/team/team-memb4.jpg" alt=""> -->--}}
{{--                    <div class="det-o">--}}
{{--                        <h4>Sher Bahadur Khadka</h4>--}}
{{--                        <i>Treasurer</i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3 col-sm-6">--}}
{{--                <div class="single-usr">--}}
{{--                    <!-- <img src="assets/images/team/team-memb4.jpg" alt=""> -->--}}
{{--                    <div class="det-o">--}}
{{--                        <h4>Suman Budhathoki</h4>--}}
{{--                        <i>Board Member </i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3 col-sm-6">--}}
{{--                <div class="single-usr">--}}
{{--                    <!-- <img src="assets/images/team/team-memb4.jpg" alt=""> -->--}}
{{--                    <div class="det-o">--}}
{{--                        <h4>Nanda Budha Magar</h4>--}}
{{--                        <i>Board Member</i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3 col-sm-6">--}}
{{--                <div class="single-usr">--}}
{{--                    <!-- <img src="assets/images/team/team-memb4.jpg" alt=""> -->--}}
{{--                    <div class="det-o">--}}
{{--                        <h4>Sher Bahadur B.K. </h4>--}}
{{--                        <i>Board Member</i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3 col-sm-6">--}}
{{--                <div class="single-usr">--}}
{{--                    <!-- <img src="assets/images/team/team-memb4.jpg" alt=""> -->--}}
{{--                    <div class="det-o">--}}
{{--                        <h4>Til Bahadur Nepali </h4>--}}
{{--                        <i>Board Member  </i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3 col-sm-6">--}}
{{--                <div class="single-usr">--}}
{{--                    <!-- <img src="assets/images/team/team-memb4.jpg" alt=""> -->--}}
{{--                    <div class="det-o">--}}
{{--                        <h4>Shanti Kumari LG</h4>--}}
{{--                        <i>Board Member </i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--        </div>--}}
    </div>
</section>
@endsection
