<footer class="footer-area footer-section-padding">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-2 col-md-12">
                    <div class="logo-text">
                        <div class="footer-logo text-center">
                            <a href="index.html"><img src="{{asset('websiteassests/img/logo/logo2.png')}}" alt="Logo" width="40%"></a>
                        </div>
                        <p style="font-size: 10px;" class="text-center">&copy; 2019 Wisdom Speakers Bureau <br> All Rights Reserved <br> Designed by <a style="font-size:11px !important;" href="https://launchyoursoul.com" target="_blank">Launch Your Soul</a></p>
                        <p style="font-size: 10px;" class="text-center">Powered by Speak & Grow Reach</p>
                        <div class="footer-logo mt-2 mb-2 text-center">
                                <a href="index.html"><img src="{{asset('websiteassests/img/logo/poweredby.png')}}" alt="Logo" width="40%"></a>
                        </div>
                        
                        <div class="footer-social text-center">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                        
                        
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 offset-lg-0 offset-md-0 offset-sm-2" style="border-left: 1px solid rgba(255,255,255,0.1);">
                    <nav class="footer-nav res-pad-top-30">
                        <ul>
                            <li><a href="{{route('webspeakers')}}">Speakers</a></li>
                            <li><a href="{{route('webabout')}}">About Us</a></li>
                            <li><a href="{{route('webfaq')}}">FAQ's</a></li>
                            <li><a href="{{route('webprivacy')}}">Privacy Policy</a></li>
                        </ul>
                    </nav>
                </div>
                
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 pa-0 res-pad-top-30">
                    <nav class="footer-nav">
                        <ul>
                            <li><a href="{{route('webhome')}}">Home</a></li>
                            <li><a href="{{route('webterms')}}">Terms & Conditions</a></li>
                            
                        </ul>
                    </nav>
                </div>
                
                <div class="col-lg-3 col-md-5 col-sm-12 res-pad-top-30" style="border-left: 1px solid rgba(255,255,255,0.1);">
                    <nav class="footer-nav">
                        <ul>
                            <li><a href="index.php">Motivational Speaker</a></li>
                            <li><a href="#">Leadership Speakers</a></li>
                            <li><a href="#">Business Speakers</a></li>
                            <li><a href="#">Keynote Speakers</a></li>
                            <li><a href="#">Corporate Speakers</a></li>
                            <li><a href="#">Celebrity Speakers</a></li>


                        </ul>
                    </nav>
                </div>


                <div class="col-lg-3 col-md-5 col-sm-12 res-pad-top-30" style="border-left: 1px solid rgba(255,255,255,0.1);">
                    <div class="footer-form">
                        <h6 style="color: #fff;">GET SPEAKERS TIPS & SO MUCH MORE!</h6>
                        <h6 style="color: #fff;" class="mb-2 mt-2">Once a week we send you speaking tips, training ideas, calls for speakers and lots of useful updates.</h6>
                        <form class="mailChimpForm" method="POST" action="/mailchimp">
                            @csrf
                            <input class="form-control" type="email" name="email" placeholder="E-MAIL">
                            <input class="form-control" type="text" name="fname" placeholder="FIRST NAME">
                            <input class="form-control" type="text" name="lname" placeholder="LAST NAME">
                            <p style="color:white;font-weight:bold;text-align:center;" id="alertMailChimp" class="d-none">Testing</p>
                            <button class="biddaloy-btn-sm" type="submit" name="submit" style="cursor: pointer;border: none;width: 100%;border-radius:5px;">Subscribe <i id="buttonloader" class=""></i></button>
                        </form>
                    </div>
                </div>
                


            </div>
            
        </div>
    </footer>
    <!-- footer area end -->
    <!--  =========== ScrollTop ==============  -->
    <div id="stop" class="scrollTop">
        <span><a href=""><i class="fas fa-level-up-alt"></i></a></span>
    </div>


    <!--========= js linkUp =========== -->
    <script src="{{asset('websiteassests/js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('websiteassests/js/popper.js')}}"></script>
    <!-- <script src="assets/js/bootstrap.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="{{asset('websiteassests/fonts/js/all.min.js')}}"></script>
    <script src="{{asset('websiteassests/js/slicknav.min.js')}}"></script>
    <script src="{{asset('websiteassests/js/wow.min.js')}}"></script>
    <script src="{{asset('websiteassests/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('websiteassests/js/plugins.js')}}"></script>
    <script src="{{asset('websiteassests/js/main.js')}}"></script>

<script type="text/javascript">

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

       $("button").click(function(){
        $("#buttonloader").addClass("fa fa-spinner fa-spin");
        });
    
        $(function(){
            $('.mailChimpForm').on('submit', function(event){
                event.preventDefault();
                $form = $(this);
                MailChimpRequest($form);
                
            });
        });
    
        function MailChimpRequest($form){
            $.ajax({
                url: $form.attr('action'),
                method: $form.attr('method'),
                data: $form.serialize(),
                success: function(response){
                    $("#buttonloader").removeClass("fa fa-spinner fa-spin");
                    $('#alertMailChimp').html(response);
                    $('#alertMailChimp').removeClass('d-none');
                    $("#alertMailChimp").delay(1000).slideUp(300);
                    
                    
                },error:function(response){ 
                    $("#buttonloader").removeClass("fa fa-spinner fa-spin");
                    $('#alertMailChimp').html('All fields are required!!');
                    $('#alertMailChimp').removeClass('d-none');
                    $("#alertMailChimp").delay(1000).slideUp(300);
                }
            });
        }
 



</script>
      