@extends('layouts.weblayout')
@section('title', 'About Us')
@section('customstyles')
    
@endsection


@section('main-content')
    <!-- hero area start -->
    <section class="all-page-hero about-page">
            <div class="page-content container">
                     <span class="about-active"> About Us</span>
                 </div>
         </section>
     
         <!-- hero area end -->
         <!-- Our Vision area start -->
         <section class="popular-courses section-padding vision-area">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-6">
                         <div class="section-heading ">
                                <h2>Our Mission</h2>
                                <p>The mission of the Wisdom Speakers Bureau is to make finding the perfect speaker for your 
                                    event simple. We will work with you directly to 
                                    understand your specific event outcomes and budget in order to source the best speaker to 
                                    ensure your attendees leave with the tools and resources they need.</p>

                                    
                             <h2>About the Founder</h2>
                             <p>Gail Kingsbury has been in the event and public speaking industry for 30 years, working with companies 
                                 such as Kodak, Pizza Hut, Inc. Magazine and producing numerous events around the globe. She has worked with 
                                 the top speakers in the world, including Tony Robbins, Brendon Burchard, Brian Tracy, Dr. Barbara DeAngelis and Seth Godin, assisting with 
                                 everything from event production for 10 to 20,000 people, to focusing on making sure the right people are on the stage to best support the audience.</p>
     
                             
     

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
