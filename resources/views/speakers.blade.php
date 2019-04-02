@extends('layouts.weblayout')
@section('title', 'Home')
@section('customstyles')
    <style type="text/css">
    .searchfilter h4 {
     text-transform: uppercase;
    }
    .searchfilter {
     background: #F5F5F5;
     margin-right: 17px;
     margin-left: -18px;
    }
  </style>
@endsection


@section('main-content')
 <!-- hero area start -->
 <section class="all-page-hero about-page">
        <div class="page-content container">
             <span class="about-active"> Speakers</span>
         </div>
     </section>

     <!-- hero area end -->

     

     <!-- All speakers area start -->
     <section class="speaker-area" style="padding-top:29px;">
     <div class="container">



         <!-- First Row -->
         <div class="row">
             <div class="col-lg-3 col-md-6 col-sm-6 mob-to-res-30  shadow p-4 searchfilter" style="max-height: 732px;">
                 <form method="GET" action="{{route('speakerssearch')}}">
                     <div class="fee mb-4">
                    
                         <div class="form-group">
                           <label for="fee" style="font-weight: bold;">Fee Range</label>
                           @php
                                
                                 $getExpertise = DB::table('expertises')->orderBy('expertise_topic', 'ASC')
                                 ->distinct()
                                 ->select('expertise_topic')
                                 ->get();
                                 $getFee = DB::table('user_metas')->distinct()->select('fee')->get();
                                 $getCountry = DB::table('user_metas')->distinct()->select('country')->get();
                                 $getGender = DB::table('user_metas')->distinct()->select('gender')->get();
                                 $getAvlTo = DB::table('user_metas')->distinct()->select('available_to')->get();
                          
                               @endphp
                           <select class="form-control" id="fee" name="fee">
                                <option value="Any">Any</option>
                                <option value="Free">Free</option>
                                <option value="Up to $250">Up to $250</option>
                                <option value="$250 - $1500">$250 - $1500</option>
                                <option value="$1500 - $5000">$1500 - $5000</option>
                                <option value="$5000 - $10,000">$5000 - $10,000</option>
                                <option value="More than $10,000">More than $10,000</option>
                           </select>
                           
                         </div>             

                     </div>

                      <!-- Lang -->
                      <hr>
                      <div class="language mb-4">
                         
                         <div class="form-group">
                           <label for="language" style="font-weight: bold;">LANGUAGE</label>
                           <select name="language" id="language" class="form-control">
                            <option value="Afrikanns">Afrikanns</option>
                            <option value="Albanian">Albanian</option>
                            <option value="Arabic">Arabic</option>
                            <option value="Armenian">Armenian</option>
                            <option value="Basque">Basque</option>
                            <option value="Bengali">Bengali</option>
                            <option value="Bulgarian">Bulgarian</option>
                            <option value="Catalan">Catalan</option>
                            <option value="Cambodian">Cambodian</option>
                            <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
                            <option value="Croation">Croation</option>
                            <option value="Czech">Czech</option>
                            <option value="Danish">Danish</option>
                            <option value="Dutch">Dutch</option>
                            <option value="English" selected>English</option>
                            <option value="Estonian">Estonian</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finnish">Finnish</option>
                            <option value="French">French</option>
                            <option value="Georgian">Georgian</option>
                            <option value="German">German</option>
                            <option value="Greek">Greek</option>
                            <option value="Gujarati">Gujarati</option>
                            <option value="Hebrew">Hebrew</option>
                            <option value="Hindi">Hindi</option>
                            <option value="Hungarian">Hungarian</option>
                            <option value="Icelandic">Icelandic</option>
                            <option value="Indonesian">Indonesian</option>
                            <option value="Irish">Irish</option>
                            <option value="Italian">Italian</option>
                            <option value="Japanese">Japanese</option>
                            <option value="Javanese">Javanese</option>
                            <option value="Korean">Korean</option>
                            <option value="Latin">Latin</option>
                            <option value="Latvian">Latvian</option>
                            <option value="Lithuanian">Lithuanian</option>
                            <option value="Macedonian">Macedonian</option>
                            <option value="Malay">Malay</option>
                            <option value="Malayalam">Malayalam</option>
                            <option value="Maltese">Maltese</option>
                            <option value="Maori">Maori</option>
                            <option value="Marathi">Marathi</option>
                            <option value="Mongolian">Mongolian</option>
                            <option value="Nepali">Nepali</option>
                            <option value="Norwegian">Norwegian</option>
                            <option value="Persian">Persian</option>
                            <option value="Polish">Polish</option>
                            <option value="Portuguese">Portuguese</option>
                            <option value="Punjabi">Punjabi</option>
                            <option value="Quechua">Quechua</option>
                            <option value="Romanian">Romanian</option>
                            <option value="Russian">Russian</option>
                            <option value="Samoan">Samoan</option>
                            <option value="Serbian">Serbian</option>
                            <option value="Slovak">Slovak</option>
                            <option value="Slovenian">Slovenian</option>
                            <option value="Spanish">Spanish</option>
                            <option value="Swahili">Swahili</option>
                            <option value="Swedish ">Swedish </option>
                            <option value="Tagalog">Tagalog</option>
                            <option value="Tamil">Tamil</option>
                            <option value="Tatar">Tatar</option>
                            <option value="Telugu">Telugu</option>
                            <option value="Thai">Thai</option>
                            <option value="Tibetan">Tibetan</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Turkish">Turkish</option>
                            <option value="Ukranian">Ukranian</option>
                            <option value="Urdu">Urdu</option>
                            <option value="Uzbek">Uzbek</option>
                            <option value="Vietnamese">Vietnamese</option>
                            <option value="Welsh">Welsh</option>
                            <option value="Xhosa">Xhosa</option>
                    </select>
                         </div>

                     </div>

                     <hr>
                     <div class="country mb-4">
                         
                         <div class="form-group">
                           <label for="country" style="font-weight: bold;">COUNTRY</label>
                           <select class="form-control" id="country" name="country">
                                @foreach ($getCountry as $value)
                                <option value="{{$value->country}}">{{ucfirst($value->country)}}</option>
                                @endforeach
                           </select>
                         </div>  

                     </div>

                     <hr>
                     <div class="topic mb-4">
                         
                         <div class="form-group">
                           <label for="topic" style="font-weight: bold;">TOPIC</label>
                           <select class="form-control" id="topic" name="topic">
                               @foreach ($getExpertise as $expertise)
                               <option value="{{$expertise->expertise_topic}}">{{ucfirst($expertise->expertise_topic)}}</option>
                               @endforeach
                             
                           </select>
                         </div>    

                     </div>

                     <hr>
                     <div class="gender mb-4">
                         
                         <div class="form-group">
                           <label for="gender" style="font-weight: bold;">GENDER</label>
                           <select class="form-control" id="gender" name="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="no preferences">No Preference</option>
                           </select>
                         </div>      

                     </div>

                     {{-- <hr>
                     
                     <div class="avlfor mb-4">
                         
                         <div class="form-group">
                           <label for="available-for" style="font-weight: bold;">AVAILABLE FOR</label>
                           <select class="form-control" id="available-for">
                             <option>1</option>
                             <option>2</option>
                           </select>
                         </div> 
                     </div> --}}

                     <hr>
                     <div class="avlto mb-4">
                         
                         <div class="form-group">
                           <label for="available-to" style="font-weight: bold;">AVAILABILITY</label>
                           <select class="form-control" id="available-to" name="available_to">
                                @foreach ($getAvlTo as $value)
                                <option value="{{$value->available_to}}">{{ucfirst($value->available_to)}}</option>
                                @endforeach
                           </select>
                         </div> 

                     </div>

                     <input type="submit" class="biddaloy-btn-sm" name="submit" value="Search" style="width: 100%;border: none;cursor: pointer;">



                 </form>
             </div>
             @if (isset($getAllSpeakers))
                 
             
             <div class="col-lg-9">
                 <div class="row">
                     @if ($getAllSpeakers->count() == 0)
                         <h3>No Speaker Found</h3>
                     @endif
                    @foreach ($getAllSpeakers as $AllSpeakers)
                    <div class="col-lg-4 col-md-6 col-sm-6 mob-to-res-30 mb-3">
                        <div class="single-speaker">
                            <div class="speaker-to-card">
                                <img src="{{asset('adminassets/img/speakerprofileimages/')}}/{{$AllSpeakers->profile_img}}" alt="Profile Pic">
                                <ul class="speaker-social" style="width: 90%;left: 11px;">
                                    <li style="text-align: center;"><p style="line-height: 20px;display: block;margin-bottom: 15px;">{{$AllSpeakers->why_choose}}</p></li>
                                    <li><i class="fas fa-map-marked-alt"></i> {{$AllSpeakers->country}}</li>
                                    <li><i class="fas fa-plane-departure"></i> {{$AllSpeakers->available_to}}</li>
                                    <li><i class="fas fa-globe"></i> 

                                        @php
                                        $getLang = DB::table('languages')
                                            ->select('languages.language')
                                            ->where('languages.user_id' , $AllSpeakers->id)->get();
                                        @endphp
                                        
                                        @foreach ($getLang as $lang)
                                            {{$lang->language}}
                                        @endforeach
                                        
                                    </li>
                                </ul>
                            </div>
                            <div class="speaker-detail">
                                <div class="speaker-detail-content">
                                    <h4>{{$AllSpeakers->name}}</h4>
                                    @php
                                        $getUserId = DB::table('users')
                                            ->join('current_positions', 'users.id', '=', 'current_positions.user_id')
                                            ->select('current_positions.*')
                                            ->where('current_positions.user_id' , $AllSpeakers->id)->first();
                                    @endphp
                                    <h5>{{$getUserId->title}} - {{$getUserId->department}}</h5>
                                    <div class="row avl-for-icons" style="margin-top: -10px;">
                                        <div class="col-md-12">
                                            @if ($AllSpeakers->conference == 'Yes')
                                                <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Conference" src="{{asset('websiteassests/img/avl_for/conference.png')}}">
                                            @endif
                                            @if ($AllSpeakers->school == 'Yes')
                                                <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="School" src="{{asset('websiteassests/img/avl_for/school.png')}}">
                                            @endif
                                            @if ($AllSpeakers->moderator == 'Yes')
                                                <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Moderator" src="{{asset('websiteassests/img/avl_for/moderator.png')}}">
                                            @endif
                                            @if ($AllSpeakers->online == 'Yes')
                                                <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Online" src="{{asset('websiteassests/img/avl_for/online.png')}}">
                                            @endif
                                            @if ($AllSpeakers->workshop == 'Yes')
                                                <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Workshop (Incl. Charity)" src="{{asset('websiteassests/img/avl_for/workshop.png')}}">
                                            @endif
                                            @if ($AllSpeakers->meetup == 'Yes')
                                                <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Meetup" src="{{asset('websiteassests/img/avl_for/meetup.png')}}">
                                            @endif

                                        </div>
                                    </div>
                                    <a href="{{route('websingle', ['id' => $AllSpeakers->id, 'name' => str_slug($AllSpeakers->name, '-')])}}" style="margin-top: 13px;" class="get-details">learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
             </div>
                <div class="row mt-3 mb-3">
                    <div class="col-md-12" style="display: flex;justify-content: center;">
                                {{ $getAllSpeakers->links() }}
                    </div>
                </div>      
             </div>
             @endif
     </div>
 </section>
 <!-- All speakers area end -->
@endsection
    
@section('customjs')
    
@endsection