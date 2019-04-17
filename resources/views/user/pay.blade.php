<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Pay</title>
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('adminassets/css/adminlte.min.css')}}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 mt-5 text-center">
             
            <img src="https://wisdomspeakersbureau.com/websiteassests/img/paylogo.png" width="80%" alt="">
            
            <p>You're one step away from completing your registration. </p>
            <p>    Please click the button below to pay our one-time registration fee of $100 USD. 
                    The button connects to Paypal, where you can pay using your balance or thru a debit/credit card. We request that you stay logged on until the payment is completed, so our system can verify your payment details. Thank you!
                </p> 
             
                    
                    
                   
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="5TCV7CAPC96YU">
                <input type="image" src="https://www.ijsr.net/images/paynow.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
               <p> Your payment is 100% secure. <br>
                For concerns, please email us at support@wisdomspeakersbureau.com.</p>
            </form>
        </div>
    </div>
</div>









<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('adminassets/js/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminassets/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminassets/js/adminlte.min.js')}}"></script>


</body>
</html>