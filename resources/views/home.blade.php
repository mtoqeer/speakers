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
                        <div class="slide-tab-cell" style="padding-top: 76px;text-align: center;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-2">
                                        <h2>Find The Perfect Speaker For Your Event</h2>
                                        <p>For events, training workshops or schools.</p>
                                        <div class="search-area">
                                            <input type="text" class="search" placeholder="Search for a topic">
                                            <div class="search-icon">
                                                <i class="fas fa-search"></i>
                                            </div>
                                        </div>
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
                            <p>Unt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. Unt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        </div>
                    </div>
                </div>
                <!-- icons start-->
                <div class="row text-center">
                  <div class="col-lg-4">
    
                      <a href="speaker.php">
                        <div class="icon-wrapper"><img src="{{asset('websiteassests/icons/search.svg')}}"></div>
                        <p style="color: black;font-size: 15px;font-weight: bold;">Search</p>
                        <p class="text-center">Used by event organizers from 83<br>countries around the world</p>
                      </a>
    
                  </div>
                  <div class="col-lg-4">
    
                    <a href="speaker.php">
                        <div class="icon-wrapper"><img src="{{asset('websiteassests/icons/support.svg')}}"></div>
                        <p style="color: black;font-size: 15px;font-weight: bold;">Submit</p>
                        <p class="text-center">Used by event organizers from 83<br>countries around the world</p>
                    </a>
    
                  </div>
                  <div class="col-lg-4">
    
                    <a href="speaker.php">
                        <div class="icon-wrapper"><img src="{{asset('websiteassests/icons/professional.svg')}}"></div>
                        <p style="color: black;font-size: 15px;font-weight: bold;">Connect</p>
                        <p class="text-center">Used by event organizers from 83<br>countries around the world</p>
                    </a>
    
                  </div>
                  
                </div>
                <!-- icons ends -->
    
                <div class="col-lg-4 offset-lg-4 text-center">
                        <a href="team.html" class="biddaloy-btn mar-top-40">Learn More</a>
                </div>
    
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
                            <p>Unt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                   
                    @foreach ($getFeaturedSpeakers as $featuredSpeakers)
                    <div class="col-lg-3 col-md-6 col-sm-6 mob-to-res-30">
                        <div class="single-speaker">
                            <div class="speaker-to-card">
                                <img src="{{asset('adminassets/img/speakerprofileimages/')}}/{{$featuredSpeakers->profile_img}}" alt="Profile Pic">
                                <ul class="speaker-social" style="width: 90%;left: 11px;">
                                    <li style="text-align: center;"><p style="line-height: 20px;display: block;margin-bottom: 15px;">{{$featuredSpeakers->why_choose}}</p></li>
                                    <li><i class="fas fa-map-marked-alt"></i> {{$featuredSpeakers->country}}</li>
                                    <li><i class="fas fa-plane-departure"></i> {{$featuredSpeakers->available_to}}</li>
                                    <li><i class="fas fa-globe"></i> {{$featuredSpeakers->languages}}</li>
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
                                    <div class="row" style="margin-top: -10px;">
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
                                    <a href="/singlespeaker/{{$featuredSpeakers->id}}" style="margin-top: 13px;" class="get-details">learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
    
    
    
    
                    
    
                    <div class="col-lg-12 text-center">
                        <a href="team.html" class="biddaloy-btn mar-top-40">See All Speakers</a>
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
                        <h2 class="h2-light">Unt in culpa qui officia</h2>
                        <h2>voluptatem accusantium doloremque laudantium.</h2>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                    </div>
                    <div class="col-lg-3 col-md-3 text-right">
                        <a href="courses.html" class="biddaloy-btn">get detail</a>
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
                            <h2 style="text-transform: uppercase;">Partners</h2>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
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
