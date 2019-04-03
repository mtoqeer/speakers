@extends('layouts.weblayout')
@section('title', 'Home')
@section('customstyles')
    
@endsection


@section('main-content')
    <!-- hero area start -->
    <section class="hero-area" id="home">
            <div class="main-slider owl-carousel">

                <div class="single-slider-item slider-bg-1">
                    <div class="slide-tab">
                        <div class="slide-tab-cell" style="padding-top: 42px;text-align: center;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-2">
                                        <h2>The BEST SPEAKERS make The BEST EVENTS</h2>
                                        <p>Find Your Best Speakers Now</p> 
                                        <a style="opacity: 1;" href="{{route('webspeakers')}}" class="biddaloy-btn animated fadeInLeft">Find The PERFECT Speaker</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-slider-item slider-bg-2">
                        <div class="slide-tab">
                            <div class="slide-tab-cell" style="padding-top: 42px;text-align: center;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8 offset-lg-2">
                                            <h2>Your Event Is About To Get A LOT More Interesting (And Easier To Manage)</h2>
                                            <p>Find Your Best Speakers Now</p>
                                            <a href="{{route('webspeakers')}}" class="biddaloy-btn">Find The PERFECT Speaker</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="single-slider-item slider-bg-3">
                        <div class="slide-tab">
                            <div class="slide-tab-cell" style="padding-top: 42px;text-align: center;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8 offset-lg-2">
                                            <h2>Wisdom Speakers Bureau Is The PERFECT Answer For Your Next Event</h2>
                                            <p>Find Your Best Speakers Now</p>
                                            <a href="{{route('webspeakers')}}" class="biddaloy-btn">Find The PERFECT Speaker</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



            </div>
        </section>
    
        <!-- hero area end -->
    
         <!-- Wisdom Speakers Bureau start -->
        <section class="wisdom-speaker-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-heading">
                            <h2 style="text-transform: uppercase;">Wisdom Speakers Bureau</h2>
                            <p>A collection of handpicked pros all chosen with one singular goal in mind: To make YOUR event 
                                the one everyone talks about this year! Not only will our experienced collection of thought leaders 
                                deliver the top tier content you seek, They will be a breeze to work with and make you SO glad you chose them for your gathering!</p>
                        </div>
                    </div>
                </div>
                <!-- icons start-->
                <div class="row text-center justify-content-md-center">
                  <div class="col-lg-4">
    
                      <a href="speaker.php">
                        <div class="icon-wrapper"><a href="{{route('webspeakers')}}"><img src="{{asset('websiteassests/icons/search.svg')}}"></a></div>
                        <p><a href="{{route('webspeakers')}}" style="margin-top: 13px;width:38%;" class="get-details mb-2">SEARCH</a></p>
                        <p class="text-center">Quickly find the PERFECT speakers <br> for your upcoming event!</p>
                      </a>
    
                  </div>
                  {{-- <div class="col-lg-4">
    
                    <a href="speaker.php">
                        <div class="icon-wrapper"><a href="{{ route('register') }}"><img src="{{asset('websiteassests/icons/support.svg')}}"></a></div>
                        <p><a href="{{ route('register') }}" style="margin-top: 13px;width:38%;" class="get-details mb-2">SUBMIT</a></p>
                        <p class="text-center">Speaker? Apply here to create your <br> own profile for FREE!</p>
                    </a>
    
                  </div> --}}
                  <div class="col-lg-4">
    
                    <a href="speaker.php">
                        <div class="icon-wrapper"><a href="{{route('webcontact')}}"><img src="{{asset('websiteassests/icons/professional.svg')}}"></a></div>
                        <p><a href="{{route('webcontact')}}" style="margin-top: 13px;width:38%;" class="get-details mb-2">CONNECT</a></p>
                        <p class="text-center">Reach out to us so we can assist you in <br> your search, We would LOVE to help!</p>
                    </a>
    
                  </div>
                  
                </div>
                <!-- icons ends -->

    
            </div>
        </section>
        <!-- Wisdom Speakers Bureau End -->
    
    
    
         <!-- featured speakers area start -->
        <section class="speaker-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-heading">
                            <h2 style="text-transform: uppercase;">Featured Speakers</h2>
                            <p>Below are a few of our Favorite speakers guaranteed to make your next event spectacular!</p>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                   
                    @foreach ($getFeaturedSpeakers as $featuredSpeakers)
                    <div class="col-lg-3 col-md-6 col-sm-6 mob-to-res-30 owl-carousel">
                        <div class="single-speaker">
                            <div class="speaker-to-card">
                                <img src="{{asset('adminassets/img/speakerprofileimages/')}}/{{$featuredSpeakers->profile_img}}" alt="Profile Pic">
                                <ul class="speaker-social" style="width: 90%;left: 11px;">
                                    <li style="text-align: center;"><p style="line-height: 20px;display: block;margin-bottom: 15px;">{{$featuredSpeakers->why_choose}}</p></li>
                                    <li><i class="fas fa-map-marked-alt"></i> {{$featuredSpeakers->country}}</li>
                                    <li><i class="fas fa-plane-departure"></i> {{$featuredSpeakers->available_to}}</li>
                                    <li><i class="fas fa-globe"></i>
                                        
                                        @php
                                        $getLang = DB::table('languages')
                                            ->select('languages.language')
                                            ->where('languages.user_id' , $featuredSpeakers->id)->get();
                                        @endphp
                                        
                                        @foreach ($getLang as $lang)
                                            {{$lang->language}}
                                        @endforeach
                                        
                                    </li>
                                </ul>
                            </div>
                            <div class="speaker-detail">
                                <div class="speaker-detail-content">
                                    <h4>{{$featuredSpeakers->name}}</h4>
                                    @php
                                        $getUserId = DB::table('users')
                                            ->join('current_positions', 'users.id', '=', 'current_positions.user_id')
                                            ->select('current_positions.*')
                                            ->where('current_positions.user_id' , $featuredSpeakers->id)->first();
                                    @endphp
                                    <h5>{{$getUserId->title}} - {{$getUserId->department}}</h5>
                                    <div class="row avl-for-icons" style="margin-top: -10px;">
                                        <div class="col-md-12">
                                            @if ($featuredSpeakers->conference == 'Yes')
                                                <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Conference" src="{{asset('websiteassests/img/avl_for/conference.png')}}">
                                            @endif
                                            @if ($featuredSpeakers->school == 'Yes')
                                                <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="School" src="{{asset('websiteassests/img/avl_for/school.png')}}">
                                            @endif
                                            @if ($featuredSpeakers->moderator == 'Yes')
                                                <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Moderator" src="{{asset('websiteassests/img/avl_for/moderator.png')}}">
                                            @endif
                                            @if ($featuredSpeakers->online == 'Yes')
                                                <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Online" src="{{asset('websiteassests/img/avl_for/online.png')}}">
                                            @endif
                                            @if ($featuredSpeakers->workshop == 'Yes')
                                                <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Workshop (Incl. Charity)" src="{{asset('websiteassests/img/avl_for/workshop.png')}}">
                                            @endif
                                            @if ($featuredSpeakers->meetup == 'Yes')
                                                <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Meetup" src="{{asset('websiteassests/img/avl_for/meetup.png')}}">
                                            @endif

                                        </div>
                                    </div>
                                <a href="{{route('websingle', ['id' => $featuredSpeakers->id, 'name' => str_slug($featuredSpeakers->name, '-')])}}" style="margin-top: 13px;" class="get-details">learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    {{-- /singlespeaker/{{$featuredSpeakers->id}}  --}}
    
    
    
                    
    
                    <div class="col-lg-12 text-center">
                        <a href="{{route('webspeakers')}}" class="biddaloy-btn mar-top-40">See All Speakers</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured speakers area end -->
    
    
        <!-- discount area start -->
        <section class="discount-area section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-9">
                        <h2 class="h2-bold">Are you a speaker? Join us now!</h2>
                        <h2 class="h2-light">We are looking for great speakers with great content to help our planning community. 
                            Please click the button to apply. We look forward to hearing from you!</h2>
         
                    </div>
                    <div class="col-lg-3 col-md-3 text-right">
                        <a href="{{route('webhome')}}" class="biddaloy-btn">Apply</a>
                    </div>
    
                </div>
            </div>
        </section>
        <!-- discount area end -->
    
        <!-- latest speakers area start -->
        <section class="speaker-area section-padding">
            <div class="container-fluid-custom">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-heading">
                            <h2 style="text-transform: uppercase;">Resources</h2>
                            <p>We are always looking for great resources for our 
                                Planners and Promoters.  Here are a few we have found that 
                                have great information or assistance.</p>
                        </div>
                            
                        <div class="row">        
                                <div class="col-lg-2 mb-5">
                                    <img src="https://speakerhub.com/profiles/speakerhub/themes/speakerhub_theme/assets/img/companies/google.png" class="img-responsive">
                                </div>
                                
                                <div class="col-lg-2 mb-5">
                                    <img src="https://speakerhub.com/profiles/speakerhub/themes/speakerhub_theme/assets/img/companies/coca.png" class="img-responsive">
                                </div>
                                
                                <div class="col-lg-2 mb-5">
                                    <img src="https://speakerhub.com/profiles/speakerhub/themes/speakerhub_theme/assets/img/companies/redhat.png" class="img-responsive">
                                </div>
                                
                                <div class="col-lg-2 mb-5">
                                    <img src="https://speakerhub.com/profiles/speakerhub/themes/speakerhub_theme/assets/img/companies/redhat.png" class="img-responsive">
                                </div>
    
                                <div class="col-lg-2 mb-5">
                                    <img src="https://speakerhub.com/profiles/speakerhub/themes/speakerhub_theme/assets/img/companies/redhat.png" class="img-responsive">
                                </div>
    
                                <div class="col-lg-2 mb-5">
                                    <img src="https://speakerhub.com/profiles/speakerhub/themes/speakerhub_theme/assets/img/companies/redhat.png" class="img-responsive">
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-2 mb-5">
                                    <img src="https://speakerhub.com/profiles/speakerhub/themes/speakerhub_theme/assets/img/companies/google.png" class="img-responsive">
                                </div>
                                
                                <div class="col-lg-2 mb-5">
                                    <img src="https://speakerhub.com/profiles/speakerhub/themes/speakerhub_theme/assets/img/companies/coca.png" class="img-responsive">
                                </div>
                                
                                <div class="col-lg-2 mb-5">
                                    <img src="https://speakerhub.com/profiles/speakerhub/themes/speakerhub_theme/assets/img/companies/redhat.png" class="img-responsive">
                                </div>
                                
                                <div class="col-lg-2 mb-5">
                                    <img src="https://speakerhub.com/profiles/speakerhub/themes/speakerhub_theme/assets/img/companies/redhat.png" class="img-responsive">
                                </div>
                                <div class="col-lg-2"></div>
                             
                        </div>
                        <div class="row">
    
                                <div class="col-lg-2 mb-5">
                                    <img src="https://speakerhub.com/profiles/speakerhub/themes/speakerhub_theme/assets/img/companies/redhat.png" class="img-responsive">
                                </div>
    
                                 <div class="col-lg-2">
                                    <img src="https://speakerhub.com/profiles/speakerhub/themes/speakerhub_theme/assets/img/companies/google.png" class="img-responsive">
                                </div>
                                
                                <div class="col-lg-2">
                                    <img src="https://speakerhub.com/profiles/speakerhub/themes/speakerhub_theme/assets/img/companies/coca.png" class="img-responsive">
                                </div>
                                
                                <div class="col-lg-2">
                                    <img src="https://speakerhub.com/profiles/speakerhub/themes/speakerhub_theme/assets/img/companies/redhat.png" class="img-responsive">
                                </div>
                                
                                <div class="col-lg-2">
                                    <img src="https://speakerhub.com/profiles/speakerhub/themes/speakerhub_theme/assets/img/companies/redhat.png" class="img-responsive">
                                </div>
                                
                                <div class="col-lg-2">
                                    <img src="https://speakerhub.com/profiles/speakerhub/themes/speakerhub_theme/assets/img/companies/redhat.png" class="img-responsive">
                                </div>
    
                         </div>
                    </div>
                </div>
                </div>
        </section>
@endsection
    
@section('customjs')

@endsection
