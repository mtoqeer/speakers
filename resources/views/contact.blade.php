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
             <section class="contact-area mb-5 mt-5">
                 <div class="container">
                     <div class="row">
                         <div class="col">
                                <h3 style="color: #26436c;font-size: 38px;line-height: 52px;text-align: center;">You’re looking for a world class speaker. <br>The more information you give, the better we can help you.</h3>
                         </div>
                     </div>
                     <div class="row">
                         
                         <div class="col-lg-10 offset-lg-1 res-pad-top-30">
                             
                             <div class="sign-up-area">
                                 
                                <form method="POST" role="form" id="contactForm" action="{{route('contactform')}}">
                                        @csrf
                                    <h3 class="text-center">Company And Primary Contact Information</h3>
                                    <div class="row mt-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="tel" class="form-control" id="company_phone" name="company_phone" placeholder="Company Phone Number">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="tel" class="form-control" id="contact_phone" name="contact_phone" placeholder="Contact Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Contact Email Address">
                                            </div>
                                        </div>
                                    </div>

                                    <h3 class="text-center">Event Information</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="event_name" name="event_name" placeholder="Event Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="event_date" name="event_date" placeholder="Event Date">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="event_time_needed" name="event_time_needed" placeholder="Event Time Needed">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="speaking_topic" name="speaking_topic" placeholder="Speaking Topic">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="event_city" name="event_city" placeholder="Location (City)">
                                            </div>
                                        </div>
                                    </div>

                                    <h3 class="text-center">Event Specifics</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="event_length" name="event_length" placeholder="Length of Presentation">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="how_many_time" name="how_many_time" placeholder="How Many Time Will It Be Presented?">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="audience_size" name="audience_size" placeholder="Audience Size">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="type_of_audience" name="type_of_audience" placeholder="Type of Audience (purpose for being there, etc.)">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="challenge" name="challenge" placeholder="What is their biggest challenge?">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="looking_to_gain" name="looking_to_gain" placeholder="What are they looking to gain from this event?">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="equipement" name="equipement" placeholder="A/V Equipement Available?">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="film_the_event" name="film_the_event" placeholder="Will you film the event?">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="internet_access" name="internet_access" placeholder="Internet Access Available?">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="vendor_table" name="vendor_table" placeholder="Back of the room Vendor Table?">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="buying_books" name="buying_books" placeholder="Will you be buying books for the audience?">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="budget" name="budget" placeholder="What is your budget?">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="travel_arrangments" name="travel_arrangments" placeholder="Please describe travel arrangements such as responsibilities- booking- lodging- etc- ">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea cols="30" rows="3" id="additional_details" name="additional_details" placeholder="Additional Details" class="form-control"></textarea>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <button class="submit-form-button mt-3" type="submit">SUBMIT DETAILS</button>
                                   

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
