@extends('layouts.weblayout')
@section('title', 'Home')
@section('customstyles')
<style>
        p {
            color:#454545;
        }
        .nav-link, .nav-link:hover {
            color:#000000;
        }
        .nav-link, .nav-link {
         text-transform: uppercase;
        }
        .nav-pills .nav-link.active {
            background:#e2a738;
        }
        body {
         background: #F5F5F5;
        }
    </style>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />

@endsection


@section('main-content')
              <!-- hero area start -->
              <section class="all-page-hero about-page">
                    <div class="page-content container">
                        <span class="about-active"> Speakers Details</span>
                    </div>
                </section>
        
            <!-- hero area end -->
        
                @foreach ($getGeneralInfo as $generalInfo)
                <div class="container mt-5">
                    <div class="row speaker-top-bar p-5 mb-3 bg-white rounded">
                        <div class="col-md-2 col-sm-12 speaker-single-img text-center">
                        <img src="{{asset('adminassets/img/speakerprofileimages/')}}/{{$generalInfo->profile_img}}" alt="">
                        </div>
                        <div class="col-md-5 single-page-speaker-details">
                            <h2 class="mt-2">{{$generalInfo->name}}</h2>
                            @if ($getSingleCurrentPosition)
                            <h4 class="mt-3">{{$getSingleCurrentPosition->title}}</h4>
                            <h6 class="mt-2">{{$getSingleCurrentPosition->department}}</h6>
                            @endif
                            {{-- <a href="" class="biddaloy-btn-sm mt-3" data-toggle="modal" data-target="#exampleModal">Contact Info</a> --}}
                            <a href="{{route('webcontact')}}" class="biddaloy-btn-sm mt-3">Contact Info</a>
                        </div>
                        <div class="col-md-5 single-page-speaker-details" style="border-left: 1px solid rgb(197,197,197)">
                        <table>
                            <tr>
                                <th>COUNTRY</th>
                                <td>&nbsp;</td>
                                <td>&nbsp; {{$generalInfo->country}}</td>
                            </tr>
                            <tr>
                                <th>AVAILABILITY</th>
                                <td>&nbsp;</td>
                                <td>&nbsp; {{$generalInfo->available_to}}</td>
                            </tr>
                            <tr>
                                <th>FEE</th>
                                <td>&nbsp;</td>
                                <td>&nbsp; {{$generalInfo->fee}}</td>
                            </tr>
                            {{-- <tr>
                                <th>VOLUNTEER:</th>
                                <td>&nbsp;</td>
                                <td> &nbsp; {{$generalInfo->volunteer}}</td>
                            </tr> --}}
                            <tr>
                                <th>LANGUAGE/S:</th>
                                <td>&nbsp;</td>
                                <td>&nbsp; 
                                    
                                        @php
                                        $getLang = DB::table('languages')
                                            ->select('languages.language')
                                            ->where('languages.user_id' , $generalInfo->id)->get();
                                        @endphp
                                        
                                        @foreach ($getLang as $lang)
                                            {{$lang->language}}
                                        @endforeach
                                    
                            </tr>
                        </table>
                        
                            <div class="row">
                                <div class="col-md-12">
                                        @foreach ($getAvailableFor as $Availablefor)
                                        @if ($Availablefor->conference == 'Yes')
                                          <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Conference" src="{{asset('websiteassests/img/avl_for/conference.png')}}">
                                        @endif
                                        @if ($Availablefor->school == 'Yes')
                                          <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="School" src="{{asset('websiteassests/img/avl_for/school.png')}}">
                                        @endif
                                        @if ($Availablefor->online == 'Yes')
                                          <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Online" src="{{asset('websiteassests/img/avl_for/online.png')}}">
                                        @endif
                                        @if ($Availablefor->moderator == 'Yes')
                                          <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Moderator" src="{{asset('websiteassests/img/avl_for/moderator.png')}}">
                                        @endif
                                        @if ($Availablefor->workshop == 'Yes')
                                          <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Workshop" src="{{asset('websiteassests/img/avl_for/workshop.png')}}">
                                        @endif
                                        @if ($Availablefor->meetup == 'Yes')
                                          <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Meetup" src="{{asset('websiteassests/img/avl_for/meetup.png')}}">
                                        @endif
                                      @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
        
                <div class="container mt-2">
                    <div class="row">
                        
                        <div class="col-md-4">
        
                            <div class="row p-4 mb-3 bg-white rounded">
                                <div class="col-md-12">
                                    <h5 class="mb-3">WHY CHOOSE ME?</h5>
                                <p>{{$generalInfo->why_choose}}</p>
                                </div>
                            </div>
                            @endforeach {{-- $getGeneralInfo --}}
                            <div class="row p-4 mb-3 bg-white rounded">
                                <div class="col-md-12">
                                    <h5>SOCIAL MEDIA</h5>
                                    <div class="social-info text-left">
                                        <ul>
                                            @if ($getSocialMediaAccounts)
                                                @if ($getSocialMediaAccounts->facebook !== NULL)
                                                    <li><a href="{{$getSocialMediaAccounts->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                @endif
                                                @if ($getSocialMediaAccounts->linkdin !== NULL)
                                                    <li><a href="{{$getSocialMediaAccounts->linkdin}}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                                @endif
                                                @if ($getSocialMediaAccounts->twitter !== NULL)
                                                    <li><a href="{{$getSocialMediaAccounts->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                @endif
                                                @if ($getSocialMediaAccounts->instagram !== NULL)
                                                    <li><a href="{{$getSocialMediaAccounts->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                @endif
                                                @if ($getSocialMediaAccounts->youtube !== NULL)
                                                    <li><a href="{{$getSocialMediaAccounts->youtube}}" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                                @endif
                                                @if ($getSocialMediaAccounts->website !== NULL)
                                                    <li><a href="{{$getSocialMediaAccounts->website}}" target="_blank"><i class="fas fa-globe-europe"></i></a></li>
                                                @endif
                                                @if ($getSocialMediaAccounts->skype !== NULL)
                                                    <li><a href="skype:{{$getSocialMediaAccounts->skype}}?call"><i class="fab fa-skype"></i></a></li>
                                                @endif
                                            @endif
                                        </ul>
                                    </div>
                                </div>                        
                            </div>
        
                            {{-- <div class="row">
                                <div class="col-md-12  mt-3">
                                    <h5>SIMILAR SPEAKERS</h5>
                                    <hr>
                                    
                                    @foreach ($getGeneralInfo as $generalInfo)
                                    @php
                                        $country = $generalInfo->country;
                                        $getRelated = DB::table('users')
                                        ->join('user_metas', 'users.id', '=', 'user_metas.user_id')
                                        ->select('user_metas.country','users.name','user_metas.profile_img','users.id')
                                        ->where('user_metas.country' , $country)->limit(6)->get();

                                            $getCp = DB::table('users')
                                            ->join('current_positions', 'users.id', '=', 'current_positions.user_id')
                                            ->join('user_metas', 'users.id', '=', 'user_metas.user_id')
                                            ->select('current_positions.title','current_positions.department','user_metas.country')
                                            ->where('user_metas.country' , $country)->first();


                                    @endphp
                                    

                                        @foreach ($getRelated as $item)
                                            
                                        <div class="row mb-4">
                                            <div class="col-md-3 col-sm-12 similar-single-img text-center">
                                            <a href="{{route('websingle', ['id' => $item->id, 'name' => str_slug($item->name, '-')])}}" style="color:black !important;"><img src="{{asset('adminassets/img/speakerprofileimages/')}}/{{$generalInfo->profile_img}}" class="rounded-circle" alt=""></a>
                                            </div>
                                            <div class="col-md-9 single-page-speaker-details">
                                                <a href="{{route('websingle', ['id' => $item->id, 'name' => str_slug($item->name, '-')])}}" style="color:black !important;"><h5 class="mt-2">{{$item->name}}</h5></a>
                                                @php
                                                    $getCp = DB::table('users')
                                                    ->join('current_positions', 'users.id', '=', 'current_positions.user_id')->select('current_positions.title','current_positions.department','current_positions.user_id')
                                                    ->where('current_positions.user_id' , $item->id)->first();
                                                    
                                                @endphp
                                                <p class="">{{$getCp->title}}</p>
                                                <p class="">{{$getCp->department}}</p>

                                                   
                                                
                                            
                                            </div>
                                        </div>
                                        @endforeach
                                    @endforeach
                                </div>                        
                            </div> --}}
        
                        </div>
        
                        <div class="col-md-8">
        
                            <!-- Bio Section Start -->
                            <div class="row p-4 mb-3 mls-1 bg-white rounded text-left">
                            
                            <div class="col-md-4">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-bio-tab" data-toggle="pill" href="#v-pills-bio" role="tab" aria-controls="v-pills-home" aria-selected="true">Bio</a>
                                @if ($getCurrentPositions->count() > 0)
                                    <a class="nav-link" id="v-pills-current-position-tab" data-toggle="pill" href="#v-pills-current-position" role="tab" aria-controls="v-pills-profile" aria-selected="false">Current Position</a>
                                @endif
                                @if ($getDegrees->count() > 0)
                                    <a class="nav-link" id="v-pills-degrees-tab" data-toggle="pill" href="#v-pills-degrees" role="tab" aria-controls="v-pills-messages" aria-selected="false">Degrees</a>
                                @endif
                                @if ($getAchievements->count() > 0)
                                    <a class="nav-link" id="v-pills-achievement-tab" data-toggle="pill" href="#v-pills-achievement" role="tab" aria-controls="v-pills-messages" aria-selected="false">Achievements</a>
                                @endif
                                @if ($getPresentations->count() > 0)
                                    <a class="nav-link" id="v-pills-presentations-tab" data-toggle="pill" href="#v-pills-presentations" role="tab" aria-controls="v-pills-messages" aria-selected="false">Presentations</a>
                                @endif
                                @if ($getPastTalks->count() > 0)
                                    <a class="nav-link" id="v-pills-pasttalks-tab" data-toggle="pill" href="#v-pills-pasttalks" role="tab" aria-controls="v-pills-messages" aria-selected="false">Previous Clients</a>
                                @endif
                                @if ($getWorkShops->count() > 0)
                                    <a class="nav-link" id="v-pills-workshops-tab" data-toggle="pill" href="#v-pills-workshops" role="tab" aria-controls="v-pills-messages" aria-selected="false">Workshops</a>
                                @endif
                                </div>
        
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content" id="v-pills-tabContent">
                                    
                                    <div class="tab-pane fade show active mt-2" id="v-pills-bio" role="tabpanel" aria-labelledby="v-pills-bio-tab">
                                    @foreach ($getGeneralInfo as $generalinfo)
                                        <p>{{$generalinfo->bio}}</p>
                                    @endforeach
                                    </div>
                                    
                                    <div class="tab-pane fade mt-2" id="v-pills-current-position" role="tabpanel" aria-labelledby="v-pills-current-position-tab">
                                        
                                        <div class="row">
                                            @foreach ($getCurrentPositions as $currentPostions)
                                                <div class="col-md-6 mb-3">
                                                    <h5>{{$currentPostions->title}}</h5>
                                                    <p>{{$currentPostions->department}}</p>
                                                </div>
                                            @endforeach
                                            
                                        </div>
                                        
                                    </div>
        
                                    <div class="tab-pane fade mt-2" id="v-pills-degrees" role="tabpanel" aria-labelledby="v-pills-degrees-tab">
                                        <!-- degree start -->
                                        <div class="row mt-2">
                                            @foreach ($getDegrees as $degress)
                                                <div class="col-md-12 mb-2">
                                                    <h5>{{$degress->title}}</h5>
                                                    <p>{{$degress->university}}</p>
                                                    <p>{{$degress->year}}</p>
                                                </div>
                                            @endforeach
                                        </div>        
                                    </div>
        
                                    <!-- achievments start -->
                                    <div class="tab-pane fade mt-2" id="v-pills-achievement" role="tabpanel" aria-labelledby="v-pills-achievement-tab">
                                        @foreach ($getAchievements as $achievements)
                                            <div class="col-md-12 mb-3">
                                                <h5>{{$achievements->title}}</h5>
                                                    <p>{{$achievements->description}}</p>
                                            </div>
                                        @endforeach
    
        
                                    </div>
                                     <!-- achievments ends -->
        
                                     <!-- presentations starts -->
                                     <div class="tab-pane fade mt-2" id="v-pills-presentations" role="tabpanel" aria-labelledby="v-pills-presentations-tab">
                                       @foreach ($getPresentations as $presentations)
                                            <div class="col-md-12 mb-3">
                                                <h5>{{$presentations->title}}</h5>
                                                  <p>{{$presentations->description}}</p>
                                            </div>
                                        @endforeach
        
                                    </div>
                                    <!-- presentations ends -->
        
                                    <!-- pasttalks starts -->
                                     <div class="tab-pane fade mt-2" id="v-pills-pasttalks" role="tabpanel" aria-labelledby="v-pills-pasttalks-tab">
                                    @foreach ($getPastTalks as $pastTalks)
                                        <div class="col-md-12 mb-3">
                                            <h5>{{$pastTalks->title}}</h5>
                                                <p>{{$pastTalks->location}}, {{$pastTalks->date}}</p>
                                        </div>
                                    @endforeach
        
                                    </div>
                                    <!-- pasttalks ends -->
        
                                    <!-- workshops starts -->
                                     <div class="tab-pane fade mt-2" id="v-pills-workshops" role="tabpanel" aria-labelledby="v-pills-workshops-tab">
                                       @foreach ($getWorkShops as $workshop)
                                            <div class="col-md-12 mb-3">
                                                <h5>{{$workshop->title}}</h5>
                                                <h5 class="mt-1">{{$workshop->hours}}</h5>
                                                <p>{{$workshop->description}}</p>
                                            </div>
                                        @endforeach
        
                                    </div>
                                    <!-- workshops ends -->
        
        
                                </div>  <!-- tab-content -->
                            </div>
                            </div><!-- row end -->
                            <!-- Bio Section End -->
        
        
                            <!-- Videos -->
                            @if ($getVideos->count() > 0) 
                                <div class="row p-4 mb-3 mls-1  bg-white rounded">
                                    <div class="col-md-12">
                                        <h5>VIDEOS</h5>
                                        <div class="row mt-3">
                                            @foreach ($getVideos as $video)
                                                <div class="col-md-4 mb-3">
                                                    <iframe width="100%" height="100%" src="{{$video->link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            @endforeach
            
                                            
                                            
                                        </div>
                                        
                                    </div>                        
                                </div> 
                            @endif
                            <!-- Vedios End -->
        
        
                            <!-- photos -->
                            @if ($getImages->count() > 0) 
                                <div class="row p-4 mb-3 mls-1  bg-white rounded">
                                    <div class="col-md-12">
                                        <h5>PHOTOS</h5>
                                        <div class="row mt-3" id="lightgallery">
                                            @foreach ($getImages as $image)
                                                <div class="col-md-3 mb-3">
                                                    <a href="{{asset('adminassets/img/speakerimages/')}}/{{$image->path}}" data-fancybox data-caption="">
                                                        <img src="{{asset('adminassets/img/speakerimages/')}}/{{$image->path}}" class="img-thumbnail">
                                                    </a>
                                                </div>
                                            @endforeach
            
                                        
                                        </div>
                                        
                                    </div>                        
                                </div> 
                            @endif
                            <!-- photos End -->
        
        
                               <!-- Books start -->
                               @if ($getBooks->count() > 0) 
                                <div class="row p-4 mb-3 mls-1  bg-white rounded">
                                        <div class="col-md-12">
                                            <h5 class="mb-2">BOOKS</h5>
                                            @foreach ($getBooks as $books)
                                                <div class="book mt-2">
                                                    <a href="{{$books->link}}" target="_blank"><h5>{{$books->title}}</h5></a>
                                                </div>
                                            @endforeach

                                        </div>    
                                    </div> 
                                @endif
                            <!-- Books End -->

                             <!-- Article start -->
                             @if ($getArticles->count() > 0)
                                <div class="row p-4 mb-3 mls-1  bg-white rounded">
                                    <div class="col-md-12">
                                        <h5 class="mb-2">ARTICLES</h5>
                                        @foreach ($getArticles as $article)
                                            <div class="article mt-2">
                                                <a href="{{$article->link}}" target="_blank"><h5>{{$article->title}}</h5></a>
                                            </div>
                                        @endforeach
                                            
                                    </div>    
                                </div> 
                            @endif
                        <!-- Article End -->
        
        
                             <!-- Awards and Certificate start -->
                        @if ($getAwards->count() > 0)
                             <div class="row p-4 mb-3 mls-1  bg-white rounded">
                                
                                <div class="col-md-12">
                                    <h5 class="mb-2">AWARDS</h5>
                                    @foreach ($getAwards as $awards)
                                        <div class="book mt-2">
                                           <h5>{{$awards->name}}</h5>
                                            <p>{{$awards->year}}</p>
                                        </div>
                                    @endforeach
                                </div>    
                            </div> 
                        @endif    
                            
                            
                        <!-- Awards and Certificate End -->
        
                            <!-- Expertise -->
                            @if ($getExpertises->count() > 0)
                            <div class="row p-4 mb-5 mls-1 bg-white rounded">
                                <div class="col-md-12">
                                    <h5 class="mb-3">TOPICS / EXPERTISE</h5>
                                    @foreach ($getExpertises as $expertises)
                                        <span class="expertise">{{$expertises->expertise_topic}}</span>
                                    @endforeach
                                </div>                        
                            </div> 
                            <!-- Expertise End -->
                            @endif
        
        
                          
        
                        </div><!-- COL-MD-8 end -->
        
                        
                     </div><!-- row end -->
                </div><!-- container end -->
        
    
@endsection
    
@section('customjs')
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>

@endsection
