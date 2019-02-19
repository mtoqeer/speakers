@extends('admin.dashboard.layouts.app')
@section('title','Admin - Profile')
@section('pagename', 'Profile')
@section('main-content')
<div class="row">
    <div class="col-md-3">

      <!-- Profile Image -->
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <img class="profile-user-img img-fluid img-circle" src="{{asset('adminassets/img/user.jpg')}}" alt="User profile picture">
          </div>

          <h3 class="profile-username text-center">Nina Mcintire</h3>

          <p class="text-muted text-center">MBA</p>

          <ul class="list-group list-group-unbordered mb-3">
            
            <li class="list-group-item">
              <b>Language</b> <a class="float-right">English, Spanish</a>
            </li>
            <li class="list-group-item">
              <b>Available To</b> <a class="float-right">Global</a>
            </li>
            <li class="list-group-item">
                <b>Fee</b> <a class="float-right">More Then $1000</a>
            </li>
            <li class="list-group-item">
                <b>Volunteer</b> <a class="float-right">Yes</a>
            </li>
            <li class="list-group-item text-center">
                    <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Meetup" src="{{asset('adminassets/img/school-a.png')}}">
                    <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Meetup" src="{{asset('adminassets/img/school-a.png')}}">
                    <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Meetup" src="{{asset('adminassets/img/school-a.png')}}">
                    <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Meetup" src="{{asset('adminassets/img/school-a.png')}}">
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

          <p class="text-muted">USA</p>

          <hr>

          <strong><i class="fa fa-pencil mr-1"></i> Expertise</strong>

          <p class="text-muted">
            <span class="tag tag-danger">Leadership,</span>
            <span class="tag tag-success">Business,</span>
            <span class="tag tag-info">Personal Development</span>
          </p>

          <hr>

          <strong><i class="fa fa-file-text-o mr-1"></i> Why Choose Me</strong>

          <p class="text-muted">Get actionable, practical insights on strategic & science 
              communication, advocacy and public affairs
        </p>
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
          </ul>
        </div><!-- /.card-header -->
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane active show" id="general">
                <div class="row">
                    <div class="col-md-6 border-right">
                        <h5 class="text-primary">Bio</h5>
                        <p>We empower others to get off their couch and find their Everest. As an Olympic 
                            Coach, Shark Diver, Bobsledder, Pilot, and Adventurer, I have lived the life 
                            of five men. Between stories of how I succeeded and failed, I have learned 
                            the tools needed for all of us to follow all our dreams. We empower others 
                            to get off their couch and find their Everest. As an Olympic Coach, Shark 
                            Diver, Bobsledder, Pilot, and Adventurer, I have lived the life of five men. 
                            Between stories of how I succeeded and failed, I have learned the tools needed 
                            for all of us to follow all our dreams.
                        </p>
                        
                        <h5 class="text-primary">Current Position</h5>
                        <div class="row">
                           <div class="col-md-6">
                                <h6><strong>CEO</strong></h6>
                                <p>WELLthMovement.com
                           </div>
                           <div class="col-md-6">
                                <h6><strong>CEO</strong></h6>
                                <p>WELLthMovement.com
                           </div>
                           <div class="col-md-6">
                                <h6><strong>CEO</strong></h6>
                                <p>WELLthMovement.com
                           </div>
                        </div>


                        <h5 class="text-primary">Degrees</h5>
                            <h6><strong>EdD, Adult Education - Training & Development</strong></h6>
                            <p>NOVA SOUTHEASTERN UNIVERSITY <br> 1993 - 1996</p>

                            <h6><strong>EdD, Adult Education - Training & Development</strong></h6>
                            <p>NOVA SOUTHEASTERN UNIVERSITY <br> 1993 - 1996</p>

                        <h5 class="text-primary">Achievements</h5>
                        <h6><strong>Amazon Best-selling Author</strong></h6>
                        <p>My book, LIVE FROM YOUR CLASS: Everything I Learned About Teaching,
                            I Learned from Working at SATURDAY NIGHT LIVE was a #1 Amazon best-seller.</p>
                        <h6><strong>Amazon Best-selling Author</strong></h6>
                        <p>My book, LIVE FROM YOUR CLASS: Everything I Learned About Teaching,
                            I Learned from Working at SATURDAY NIGHT LIVE was a #1 Amazon best-seller.</p>  

                    </div> {{-- col-md-6 end --}}
                    <div class="col-md-6">

                        <h5 class="text-primary">Presentations</h5>
                        <h6><strong>TEDx Talk: How to Spot a Leader in Their Handwriting</strong></h6>
                        <p>This talk was given at a local TEDx event, produced independently of the TED Conferences. 
                            Do Steve Jobs and Nelson Mandela have anything extraordinary in common?.</p>


                        <h5 class="text-primary">Pask Talks</h5>
                        <h6><strong>What Your Signature Says About the Kind of Leader You Are</strong></h6>
                        <p>Rigor, Relevance, Relationships Leadership 
                            Conference Houston, Texas January 10, 2018</p>

                         <h5 class="text-primary">Workshops</h5>
                            <h6><strong>WHAT YOUR SIGNATURE SAYS ABOUT THE KIND OF LEADER YOU ARE</strong></h6>
                            <p>1 hour <br> Theme: When your students are laughing, they’re learning. </p>
                    </div> {{-- col-md-6 end --}}
                </div>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="photos">
              <div class="row">
                <div class="col-md-3">
                    <img src="{{asset('adminassets/img/p1.jpg')}}" alt="" class="img-thumbnail">
                </div>
                <div class="col-md-3">
                    <img src="{{asset('adminassets/img/p1.jpg')}}" alt="" class="img-thumbnail">
                </div>
                <div class="col-md-3">
                    <img src="{{asset('adminassets/img/p1.jpg')}}" alt="" class="img-thumbnail">
                </div>
                <div class="col-md-3">
                        <img src="{{asset('adminassets/img/p1.jpg')}}" alt="" class="img-thumbnail">
                </div>
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
                <h5><a href="#">The Ultimate EU Test Book Administrator (AD) Edition 2016</a></h5>
                <p>John Harper Publishing, 2016</p>
                <hr>
                <h5><a href="#">The Ultimate EU Test Book Administrator (AD) Edition 2016</a></h5>
            </div>
            <!-- /.tab-pane -->

            <div class="tab-pane" id="awards">
                <h5>Licensed HeartMath Coach</h5>
                <p>HeartMath LLC 2001</p>
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