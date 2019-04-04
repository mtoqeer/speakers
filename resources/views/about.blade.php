@extends('layouts.weblayout')
@section('title', 'Home')
@section('customstyles')
    
@endsection


@section('main-content')
    <!-- hero area start -->
    <section class="all-page-hero about-page">
            <div class="page-content container">
                     <span class="about-active"> About</span>
                 </div>
         </section>
     
         <!-- hero area end -->
         <!-- Our Vision area start -->
         <section class="popular-courses section-padding vision-area">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-6">
                         <div class="section-heading ">
                             <h2>About the Founder</h2>
                             <p>Founder, Gail Kingsbury has been in the event and public speaking industry for 30 years.  
                                 Working with companies such as Kodak, Pizza Hut, Inc. Magazine and local events around the world. 
                                 And speakers like Tony Robbins, Brendon Burchard, Dr. Barbara DeAngelis, Seth Godin, sales trainer, motivation, etc.   
                                 Assisting with everything from initial event planning for 10 to 20,000 people focusing on making sure 
                                 the right people are on the stage helping the right audience,</p>
     
                             <h2>Our Mission</h2>
                             <p>Wisdom Speakers Bureau is here to make finding the right speaker for your event simple.  We will work 
                                 with you directly to see what specific outcomes you are looking for within your budget and make sure 
                                 that your audience leaves with the tools and resources they need.</p>
     

                         </div>
                     </div>
                     <div class="col-md-6">
                        <img src="{{url('websiteassests/img/aboutus.jpg')}}" alt="">
                     </div>
                 </div>
             </div>
         </section>
         <!-- vision area end -->
@endsection
    
@section('customjs')
    
@endsection
