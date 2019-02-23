@extends('layouts.weblayout')
@section('title', 'Home')
@section('customstyles')
    
@endsection


@section('main-content')
         <!-- hero area start -->
         <section class="all-page-hero about-page">
                <div class="page-content container">
                         <span class="about-active"> Contact</span>
                     </div>
             </section>
             <!-- hero area end -->
             <!-- contact area start -->
             <section class="contact-area section-padding">
                 <div class="container">
                     <div class="row">
                         <div class="col-lg-4">
                             <div class="contact-info">
                                 <h3>contact information</h3>
                                 <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                                 <h5>Address: <span>Address Will Goes Here. Its Just a Dummy.</span></h5>
                                 <h5>Number: (+000) 000-000-000</h5>
                             </div>
                         </div>
                         <div class="col-lg-7 offset-lg-1 res-pad-top-30">
                             <h3>Send us a Message</h3>
                             <div class="sign-up-area">
                                 <form action="#">
                                     <input name="fname" type="text" placeholder="First Name">
                                     <input class="mar-0" name="lname" type="text" placeholder="Last Name">
                                     <input name="email" type="email" placeholder="Email Address">
                                     <input class="mar-0" name="phone" type="tel" placeholder="Phone Number">
                                     <textarea name="message" placeholder="Message"></textarea>
                                     <input class="submit-btn" type="submit" value="send message">
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </section>
             <!-- contact area end -->         
@endsection
    
@section('customjs')
    
@endsection
