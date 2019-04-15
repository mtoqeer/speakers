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
                                <h3 style="color: #26436c;font-size: 38px;line-height: 52px;text-align: center;">You’re looking for a World Class Speaker...<br>We are here to help.</h3>
                                <p style="color:black;text-align:center" class="mb-5">Please provide us as much information on your upcoming event as you can so that we can best support you.</p>
                            </div>
                     </div>
                     <div class="row">
                         
                         <div class="col-lg-10 offset-lg-1 res-pad-top-30">
                            @if (Session::has('ContactFormSend'))
                            <div class="alert alert-info" id="ContactFormSend">{{ Session::get('ContactFormSend') }}</div>
                            @endif
                             <div class="sign-up-area">
                                 
                                <form method="POST" role="form" id="contactForm" action="{{route('contactform')}}">
                                        @csrf
                                    <h3 class="text-center">Company And Primary Contact Information</h3>
                                    <div class="row mt-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input value="{{ old('company_name') }}" type="text" class="form-control" id="company_name" name="company_name" placeholder="Company Name">
                                                @if ($errors->has('company_name'))
                                                    <span style="font-size:14px;color:red;" role="alert">
                                                        <strong>{{ $errors->first('company_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input value="{{ old('company_phone') }}" type="tel" class="form-control" id="company_phone" name="company_phone" placeholder="Company Phone Number">
                                                @if ($errors->has('company_phone'))
                                                    <span style="font-size:14px;color:red;" role="alert">
                                                        <strong>{{ $errors->first('company_phone') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input value="{{ old('fname') }}" type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
                                                @if ($errors->has('fname'))
                                                    <span style="font-size:14px;color:red;" role="alert">
                                                        <strong>{{ $errors->first('fname') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input value="{{ old('lname') }}" type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
                                                @if ($errors->has('lname'))
                                                    <span style="font-size:14px;color:red;" role="alert">
                                                        <strong>{{ $errors->first('lname') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input value="{{ old('contact_phone') }}" type="tel" class="form-control" id="contact_phone" name="contact_phone" placeholder="Contact Phone Number">
                                                @if ($errors->has('contact_phone'))
                                                    <span style="font-size:14px;color:red;" role="alert">
                                                        <strong>{{ $errors->first('contact_phone') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input value="{{ old('email') }}" type="email" class="form-control" id="email" name="email" placeholder="Contact Email Address">
                                                @if ($errors->has('email'))
                                                    <span style="font-size:14px;color:red;" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <h3 class="text-center">Event Information</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input value="{{ old('event_name') }}" type="text" class="form-control" id="event_name" name="event_name" placeholder="Event Name">
                                                @if ($errors->has('event_name'))
                                                    <span style="font-size:14px;color:red;" role="alert">
                                                        <strong>{{ $errors->first('event_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input value="{{ old('event_date') }}" type="text" class="form-control" id="event_date" name="event_date" placeholder="Event Date">
                                                @if ($errors->has('event_date'))
                                                    <span style="font-size:14px;color:red;" role="alert">
                                                        <strong>{{ $errors->first('event_date') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input value="{{ old('program_length') }}" type="text" class="form-control" id="program_length" name="program_length" placeholder="Program Length">
                                                @if ($errors->has('program_length'))
                                                    <span style="font-size:14px;color:red;" role="alert">
                                                        <strong>{{ $errors->first('program_length') }}</strong>
                                                    </span>.
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input value="{{ old('requested_topic') }}" type="text" class="form-control" id="requested_topic" name="requested_topic" placeholder="Requested Topic">
                                                @if ($errors->has('requested_topic'))
                                                    <span style="font-size:14px;color:red;" role="alert">
                                                        <strong>{{ $errors->first('requested_topic') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input value="{{ old('event_city') }}" type="text" class="form-control" id="event_city" name="event_city" placeholder="Location (City)">
                                                @if ($errors->has('event_city'))
                                                    <span style="font-size:14px;color:red;" role="alert">
                                                        <strong>{{ $errors->first('event_city') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <h3 class="text-center">Event Specifics</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input value="{{ old('event_length') }}" type="text" class="form-control" id="event_length" name="event_length" placeholder="Length of Presentation">
                                                @if ($errors->has('event_length'))
                                                    <span style="font-size:14px;color:red;" role="alert">
                                                        <strong>{{ $errors->first('event_length') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input value="{{ old('event_theme') }}" type="text" class="form-control" id="event_theme" name="event_theme" placeholder="Event Theme">
                                                @if ($errors->has('event_theme'))
                                                    <span style="font-size:14px;color:red;" role="alert">
                                                        <strong>{{ $errors->first('event_theme') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input value="{{ old('audience_size') }}" type="text" class="form-control" id="audience_size" name="audience_size" placeholder="Audience Size">
                                                @if ($errors->has('audience_size'))
                                                    <span style="font-size:14px;color:red;" role="alert">
                                                        <strong>{{ $errors->first('audience_size') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input value="{{ old('total_presenters_needed') }}" type="text" class="form-control" id="total_presenters_needed" name="total_presenters_needed" placeholder="Total Presenters Needed">
                                                @if ($errors->has('total_presenters_needed'))
                                                    <span style="font-size:14px;color:red;" role="alert">
                                                        <strong>{{ $errors->first('total_presenters_needed') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input value="{{ old('challenge') }}" type="text" class="form-control" id="challenge" name="challenge" placeholder="What is their biggest challenge?">
                                                @if ($errors->has('challenge'))
                                                    <span style="font-size:14px;color:red;" role="alert">
                                                        <strong>{{ $errors->first('challenge') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input value="{{ old('looking_to_gain') }}" type="text" class="form-control" id="looking_to_gain" name="looking_to_gain" placeholder="What are they looking to gain from this event?">
                                                @if ($errors->has('looking_to_gain'))
                                                    <span style="font-size:14px;color:red;" role="alert">
                                                        <strong>{{ $errors->first('looking_to_gain') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input value="{{ old('equipement') }}" type="text" class="form-control" id="equipement" name="equipement" placeholder="A/V Equipement Available?">
                                                @if ($errors->has('equipement'))
                                                    <span style="font-size:14px;color:red;" role="alert">
                                                        <strong>{{ $errors->first('equipement') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input value="{{ old('film_the_event') }}" type="text" class="form-control" id="film_the_event" name="film_the_event" placeholder="Will you film the event?">
                                                @if ($errors->has('film_the_event'))
                                                    <span style="font-size:14px;color:red;" role="alert">
                                                        <strong>{{ $errors->first('film_the_event') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input value="{{ old('internet_access') }}" type="text" class="form-control" id="internet_access" name="internet_access" placeholder="Internet Access Available?">
                                                @if ($errors->has('internet_access'))
                                                    <span style="font-size:14px;color:red;" role="alert">
                                                        <strong>{{ $errors->first('internet_access') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input value="{{ old('vendor_table') }}" type="text" class="form-control" id="vendor_table" name="vendor_table" placeholder="Will there be vendors?">
                                                @if ($errors->has('vendor_table'))
                                                    <span style="font-size:14px;color:red;" role="alert">
                                                        <strong>{{ $errors->first('vendor_table') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input value="{{ old('buying_books') }}" type="text" class="form-control" id="buying_books" name="buying_books" placeholder="Are you interested in Pre-purchasing books?">
                                                @if ($errors->has('buying_books'))
                                                    <span style="font-size:14px;color:red;" role="alert">
                                                        <strong>{{ $errors->first('buying_books') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input value="{{ old('budget') }}" type="text" class="form-control" id="budget" name="budget" placeholder="What is your budget?">
                                                @if ($errors->has('budget'))
                                                    <span style="font-size:14px;color:red;" role="alert">
                                                        <strong>{{ $errors->first('budget') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input value="{{ old('travel_arrangments') }}" type="text" class="form-control" id="travel_arrangments" name="travel_arrangments" placeholder="Please describe travel arrangements such as responsibilities- booking- lodging- etc- ">
                                                @if ($errors->has('travel_arrangments'))
                                                    <span style="font-size:14px;color:red;" role="alert">
                                                        <strong>{{ $errors->first('travel_arrangments') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea value="{{ old('additional_details') }}" cols="30" rows="3" id="additional_details" name="additional_details" placeholder="Additional Details" class="form-control"></textarea>
                                                @if ($errors->has('additional_details'))
                                                    <span style="font-size:14px;color:red;" role="alert">
                                                        <strong>{{ $errors->first('additional_details') }}</strong>
                                                    </span>
                                                @endif
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

    <script>
    $(document).ready(function(){
     $("#ContactFormSend").delay(2500).slideUp(300);
    });

    </script>

@endsection
