@extends('layouts.weblayout')
@section('title', 'Terms & Conditions')
@section('customstyles')
<style>

        .paragraph p {
            color: black;
        }
        </style>    
        
        
        @endsection



@section('main-content')
    <!-- hero area start -->
    <section class="all-page-hero about-page">
            <div class="page-content container">
                     <span class="about-active"> Terms & Conditions</span>
                 </div>
         </section>
     
         <!-- hero area end -->
         <!-- Our Vision area start -->
         <section class="popular-courses section-padding vision-area">
             <div class="container">
                 <div class="row">
                        <div class="col-lg-12">
                                <div class="section-heading">
                                       
                                </div>
                                <div class="paragraph">{!! $termscontent->about_us !!}
                                  </div>
                 </div>
             </div>
         </section>
         <!-- vision area end -->
@endsection
    
@section('customjs')
    
@endsection
