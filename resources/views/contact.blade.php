@extends('layouts.weblayout')
@section('title', 'Home')
@section('customstyles')

<style>
.submit-form-button {
    margin: 0 15px 12px 0;
    overflow: hidden;
    width: 100%;
    background: #e2a738;
border: medium none;
color: #fff;
font-size: 16px;
font-weight: 700;
line-height: 25px;
padding: 13px 31px;
right: 0;
text-transform: uppercase;
letter-spacing: 3px;
top: 0;
cursor: pointer;
transition: all .4s ease;
}
.submit-form-button:hover{
    border-radius: 0;
    color: black !important;
    background: #c4d3da;
}
</style>

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
                                 
                                <form method="POST" role="form" id="contactForm" action="{{route('contactform')}}">
                                        @csrf
                                     
                                    <input class="form-control" name="fname" type="text" placeholder="First Name" required>
                                    <p style="color:red;" class="fnamewrong"></p>
                                  
                                     
                                     <input class="mar-0 form-control" name="lname" type="text" placeholder="Last Name" required>
                                     
                                     <input class="form-control" name="email" type="email" placeholder="Email Address" required>
                                     
                                     <input class="mar-0 form-control" name="phone" type="tel" placeholder="Phone Number">
                                     
                                     <textarea class="form-control mb-3" rows="10" name="message" placeholder="Message"></textarea>
                                     
                                    
                                     <button class="submit-form-button" type="submit">SEND MESSAGE <i id="buttonloader" class=""></i></button>

                                     <p class="alert alert-success successmessage d-none"></p>
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
