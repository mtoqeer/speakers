@extends('layouts.weblayout')
@section('title', 'Home')
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
                        <span class="about-active"> Privacy Policy</span>
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
                            <div class="paragraph">{!! $privacycontent->privacy_policy !!}
                              </div>
                    </div>
                </div>
            </section>
            <!-- vision area end -->
@endsection
    
@section('customjs')
    
@endsection
