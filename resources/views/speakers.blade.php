@extends('layouts.weblayout')
@section('title', 'Home')
@section('customstyles')
    <style type="text/css">
    .searchfilter h4 {
     text-transform: uppercase;
    }
    .searchfilter {
     background: #F5F5F5;
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
     <section class="speaker-area section-padding">
     <div class="container">



         <!-- First Row -->
         <div class="row">
             <div class="col-lg-3 col-md-6 col-sm-6 mob-to-res-30  shadow p-4 searchfilter" style="max-height: 850px;">
                 <form>

                     <div class="fee mb-4">
                         
                         <div class="form-group">
                           <label for="fee" style="font-weight: bold;">FEE</label>
                           <select class="form-control" id="fee">
                             <option>100</option>
                             <option>200</option>
                           </select>
                         </div>             

                     </div>

                      <!-- Lang -->
                      <hr>
                      <div class="language mb-4">
                         
                         <div class="form-group">
                           <label for="language" style="font-weight: bold;">LANGUAGE</label>
                           <select class="form-control" id="language">
                             <option>English</option>
                             <option>French</option>
                           </select>
                         </div>

                     </div>

                     <hr>
                     <div class="country mb-4">
                         
                         <div class="form-group">
                           <label for="country" style="font-weight: bold;">COUNTRY</label>
                           <select class="form-control" id="country">
                             <option>USA</option>
                             <option>UK</option>
                           </select>
                         </div>  

                     </div>

                     <hr>
                     <div class="topic mb-4">
                         
                         <div class="form-group">
                           <label for="topic" style="font-weight: bold;">TOPIC</label>
                           <select class="form-control" id="topic">
                             <option>Leadership</option>
                             <option>Busines</option>
                           </select>
                         </div>    

                     </div>

                     <hr>
                     <div class="gender mb-4">
                         
                         <div class="form-group">
                           <label for="gender" style="font-weight: bold;">GENDER</label>
                           <select class="form-control" id="gender">
                             <option>Male</option>
                             <option>Female</option>
                           </select>
                         </div>      

                     </div>

                     <hr>
                     <div class="avlfor mb-4">
                         
                         <div class="form-group">
                           <label for="available-for" style="font-weight: bold;">AVAILABLE FOR</label>
                           <select class="form-control" id="available-for">
                             <option>1</option>
                             <option>2</option>
                           </select>
                         </div> 

                     </div>

                     <hr>
                     <div class="avlto mb-4">
                         
                         <div class="form-group">
                           <label for="available-to" style="font-weight: bold;">AVAILABLE TO</label>
                           <select class="form-control" id="available-to">
                             <option>1</option>
                             <option>2</option>
                           </select>
                         </div> 

                     </div>

                     <input type="submit" class="biddaloy-btn-sm" name="" value="Search" style="width: 100%;border: 1px solid#C88B39;color: #fff;cursor: pointer;">



                 </form>
             </div>

             <div class="col-lg-9">
                 <div class="row">
                     
                 <div class="col-lg-4 col-md-6 col-sm-6 mob-to-res-30 mb-4">
                     <div class="single-speaker">
                         <div class="speaker-to-card">
                             <img src="assets/img/speakers/speaker1.jpg" alt="Profile Pic">
                             <ul class="speaker-social" style="width: 90%;left: 11px;">
                                 <li style="text-align: center;"><p style="line-height: 20px;display: block;margin-bottom: 15px;">nt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p></li>
                                 <li><i class="fas fa-map-marked-alt"></i> USA</li>
                                 <li><i class="fas fa-plane-departure"></i> Global</li>
                                 <li><i class="fas fa-globe"></i> English</li>

                             </ul>

                         </div>
                         <div class="speaker-detail">
                             <div class="speaker-detail-content">
                                 <h4>Lucineida</h4>
                                 <h5>Stanford Africa MBA Fellow</h5>
                                 <div class="row" style="margin-top: -10px;">
                                     <div class="col-md-12">
                                         <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Conference" src="assets/img/conference-a.png">
                                         <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Moderator" src="assets/img/moderator-a.png">
                                         <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Workshop" src="assets/img/workshop-a.png">
                                         <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Online" src="assets/img/online-a.png">
                                         <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="School (Incl. Charity)" src="assets/img/school-a.png">
                                     </div>
                                 </div>
                                 <a href="team.html" style="margin-top: 13px;" class="get-details">learn more</a>
                             </div>
                         </div>
                     </div>
                 </div>



                   <div class="col-lg-4 col-md-6 col-sm-6 mob-to-res-30 mb-4">
                     <div class="single-speaker">
                         <div class="speaker-to-card">
                             <img src="assets/img/speakers/speaker1.jpg" alt="Profile Pic">
                             <ul class="speaker-social" style="width: 90%;left: 11px;">
                                 <li style="text-align: center;"><p style="line-height: 20px;display: block;margin-bottom: 15px;">nt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p></li>
                                 <li><i class="fas fa-map-marked-alt"></i> USA</li>
                                 <li><i class="fas fa-plane-departure"></i> Global</li>
                                 <li><i class="fas fa-globe"></i> English</li>

                             </ul>

                         </div>
                         <div class="speaker-detail">
                             <div class="speaker-detail-content">
                                 <h4>Lucineida</h4>
                                 <h5>Stanford Africa MBA Fellow</h5>
                                 <div class="row" style="margin-top: -10px;">
                                     <div class="col-md-12">
                                         <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Conference" src="assets/img/conference-a.png">
                                         <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Moderator" src="assets/img/moderator-a.png">
                                         <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Workshop" src="assets/img/workshop-a.png">
                                         <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Online" src="assets/img/online-a.png">
                                         <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="School (Incl. Charity)" src="assets/img/school-a.png">
                                     </div>
                                 </div>
                                 <a href="team.html" style="margin-top: 13px;" class="get-details">learn more</a>
                             </div>
                         </div>
                     </div>
                 </div>

                   <div class="col-lg-4 col-md-6 col-sm-6 mob-to-res-30 mb-4">
                     <div class="single-speaker">
                         <div class="speaker-to-card">
                             <img src="assets/img/speakers/speaker1.jpg" alt="Profile Pic">
                             <ul class="speaker-social" style="width: 90%;left: 11px;">
                                 <li style="text-align: center;"><p style="line-height: 20px;display: block;margin-bottom: 15px;">nt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p></li>
                                 <li><i class="fas fa-map-marked-alt"></i> USA</li>
                                 <li><i class="fas fa-plane-departure"></i> Global</li>
                                 <li><i class="fas fa-globe"></i> English</li>

                             </ul>

                         </div>
                         <div class="speaker-detail">
                             <div class="speaker-detail-content">
                                 <h4>Lucineida</h4>
                                 <h5>Stanford Africa MBA Fellow</h5>
                                 <div class="row" style="margin-top: -10px;">
                                     <div class="col-md-12">
                                         <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Conference" src="assets/img/conference-a.png">
                                         <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Moderator" src="assets/img/moderator-a.png">
                                         <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Workshop" src="assets/img/workshop-a.png">
                                         <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Online" src="assets/img/online-a.png">
                                         <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="School (Incl. Charity)" src="assets/img/school-a.png">
                                     </div>
                                 </div>
                                 <a href="team.html" style="margin-top: 13px;" class="get-details">learn more</a>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>

             </div>
     </div>
 </section>
 <!-- All speakers area end -->
@endsection
    
@section('customjs')
    
@endsection
