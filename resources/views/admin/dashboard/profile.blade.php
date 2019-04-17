@extends('admin.dashboard.layouts.app')
@section('title','Admin - Profile')
@section('pagename', 'Profile')
@section('main-content')
<div class="row">
    <div class="col-md-3">

      <!-- Profile Image -->
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
        @foreach ($getGeneralInfo as $generalInfo)
          <div class="text-center">
          <img class="profile-user-img img-fluid img-circle" src="{{asset('adminassets/img/speakerprofileimages/')}}/{{$generalInfo->profile_img}}" alt="User profile picture">
          </div>
          
          <h3 class="profile-username text-center">{{$generalInfo->name}}</h3>
         
          @if ($getSingleCurrentPosition)
          <p class="text-muted text-center">{{$getSingleCurrentPosition->title}} - {{$getSingleCurrentPosition->department}}    </p>
          @endif

          <ul class="list-group list-group-unbordered mb-3">
            
            <li class="list-group-item">
              
              <b>Language</b> <a class="float-right">
                  @foreach ($getLanguages as $language)
                {{$language->language}} |
                @endforeach
              </a>
             
              
            </li>
            <li class="list-group-item">
              <b>Available To</b> <a class="float-right">{{$generalInfo->available_to}}</a>
            </li>
            <li class="list-group-item">
                <b>Fee</b> <a class="float-right">{{$generalInfo->fee}}</a>
            </li>
            {{-- <li class="list-group-item">
                <b>Volunteer</b> <a class="float-right">{{$generalInfo->volunteer}}</a>
            </li> --}}
            @endforeach {{-- generalInfo --}}
            <li class="list-group-item text-center">
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
                 
                  </li>

          </ul>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

      <!-- About Me Box -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">About Speaker</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <strong><i class="fa fa-map-marker mr-1"></i> Location</strong>
          @foreach ($getGeneralInfo as $generalinfo)
          <p class="text-muted">{{$generalinfo->country}}</p>
          @endforeach
          

          <hr>

          <strong><i class="fa fa-pencil mr-1"></i> Expertise</strong>

          <p class="text-muted">
            @foreach ($getExpertises as $expertises)
            <span class="tag tag-danger">{{$expertises->expertise_topic}}</span> <br>
            @endforeach
           
    
          </p>

          <hr>

          <strong><i class="fa fa-file-text-o mr-1"></i> Why Choose Me</strong>

          @foreach ($getGeneralInfo as $generalinfo)
          <p class="text-muted">{{$generalinfo->why_choose}}</p>
          @endforeach
          
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
    <div class="col-md-9">
      <div class="card">
        <div class="card-header p-2">
          <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link active show" href="#general" data-toggle="tab">General Info</a></li>
            <li class="nav-item"><a class="nav-link" href="#photos" data-toggle="tab">Photos</a></li>
            <li class="nav-item"><a class="nav-link" href="#video" data-toggle="tab">Video</a></li>
            <li class="nav-item"><a class="nav-link" href="#books" data-toggle="tab">Books and Articles</a></li>
            <li class="nav-item"><a class="nav-link" href="#awards" data-toggle="tab">Awards and Certificates</a></li>
            <li class="nav-item"><a class="nav-link" href="#payment" data-toggle="tab">Payment Details</a></li>
          </ul>
        </div><!-- /.card-header -->
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane active show" id="general">
                <div class="row">
                    <div class="col-md-6 border-right">
                        <h5 class="text-primary">Bio</h5>
                        @foreach ($getGeneralInfo as $generalinfo)
                          <p>{{$generalinfo->bio}}
                          </p>
                        @endforeach
                        
                        
                        <h5 class="text-primary">Current Position</h5>
                        <div class="row">
                          @foreach ($getCurrentPositions as $currentPostions)
                            <div class="col-md-6">
                                <h6><strong>{{$currentPostions->title}}</strong></h6>
                                <p>{{$currentPostions->department}}</p>
                          </div>
                          @endforeach 
                        </div>


                        <h5 class="text-primary">Degrees</h5>
                              @foreach ($getDegrees as $degress)
                                <h6><strong>{{$degress->title}}</strong></h6>
                                <p>{{$degress->university}} <br> {{$degress->year}}</p>
                              @endforeach 



                        <h5 class="text-primary">Achievements</h5>
                        @foreach ($getAchievements as $achievements)
                        <h6><strong>{{$achievements->title}}</strong></h6>
                        <p>{{$achievements->description}}</p>
                        @endforeach 

                       
                        

                    </div> {{-- col-md-6 end --}}
                    <div class="col-md-6">

                        <h5 class="text-primary">Presentations</h5>
                        @foreach ($getPresentations as $presentations)
                        <h6><strong>{{$presentations->title}}</strong></h6>
                        <p>{{$presentations->description}}</p>
                        @endforeach
                        


                        <h5 class="text-primary">Pask Talks</h5>
                        @foreach ($getPastTalks as $pastTalks)
                          <h6><strong>{{$pastTalks->title}}</strong></h6>
                          <p>{{$pastTalks->location}} - {{$pastTalks->date}}</p>
                        @endforeach

                         <h5 class="text-primary">Workshops</h5>
                          @foreach ($getWorkShops as $workshop)
                          <h6><strong>{{$workshop->title}}</strong></h6>
                          <p><strong>{{$workshop->hours}}</strong></p>
                          <p>{{$workshop->description}}</p>
                          @endforeach
                    </div> {{-- col-md-6 end --}}
                </div>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="photos">
              <div class="row">
                @foreach ($getImages as $image)
                  <div class="col-md-3">
                    <img src="{{asset('adminassets/img/speakerimages/')}}/{{$image->path}}" alt="" class="img-thumbnail">
                  </div>
                @endforeach
                
              </div>
            </div>
            <!-- /.tab-pane -->

            <div class="tab-pane" id="video">
              <div class="row">
                @foreach ($getVideos as $video)
                  <div class="col-md-3">
                      <iframe width="100%" height="100%" src="{{$video->link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                @endforeach
                  
              </div>
            </div>
            <!-- /.tab-pane -->


            <div class="tab-pane" id="video">
                <div class="row">
                    <div class="col-md-3">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/ylyQQOK2FCQ" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>
                </div>
            </div>
            </div>
            <!-- /.tab-pane -->


            <div class="tab-pane" id="books">

                  <h4>Books</h4>
                  @foreach ($getBooks as $books)
                  <h5><a href="{{$books->link}}" target="_blank">{{$books->title}}</a></h5>
                  @endforeach   

                  <h4>Articles</h4>
                  @foreach ($getArticles as $articles)
                  <h5><a href="{{$articles->link}}" target="_blank">{{$articles->title}}</a></h5>
                  @endforeach   
            </div>
            <!-- /.tab-pane -->

            <div class="tab-pane" id="awards">
                @foreach ($getAwards as $awards)
                  <h5>{{$awards->name}}</h5>
                  <p>{{$awards->year}}</p>
                @endforeach
                
            </div>
            <!-- /.tab-pane -->


            <div class="tab-pane" id="payment">
                @foreach ($getPaymentStatus as $status)
                  <ul>
                    <li> <strong>Email:</strong>  {{$status->paypal_email}}</li>
                    <li><strong>Date:</strong>  {{$status->payment_date}}</li>
                    <li><strong>Status: </strong> {{$status->status}}</li>
                  </ul>
                @endforeach
                
            </div>
            <!-- /.tab-pane -->
            </div>
          <!-- /.tab-content -->
        </div><!-- /.card-body -->
      </div>
      <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->
  </div>
@endsection