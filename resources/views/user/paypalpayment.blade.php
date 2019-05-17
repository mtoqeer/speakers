<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Enter Payment Details</title>
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
        <div class="col-md-5 mt-2 text-center">
                <img src="https://wisdomspeakersbureau.com/websiteassests/img/paylogo.png" width="60%" alt="">
            <p>Thank you for your payment. </p>

            <p>   We're eager to verify your payment details so we can approve your profile and make it live. Please enter the email you used to complete the payment and the date the payment was made. 
                </p>     
                   
            <form method="POST" action="{{route('paymentDetailsSave')}}">
                @csrf
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}" class="form-control">
                @if (session('message'))
                <p id="video_added" class="alert alert-success">
                        Congratulations! <br>

                        You're officially a part of Wisdom Speakers Bureau. We're excited to be a part of your journey and we look forward to connecting you to our meeting and event planners around the world.
                        <br><br>
                        For concerns, please email us at support@wisdomspeakersbureau.com. 
                        <br>
                        Thank you!
                    - <a href="{{route('userdashboard')}}" style="color:yellow !important;">Back To Dashboard</a></p>
                @endif 
                <div class="form-group">
                    <label for="paypal_email">Paypal Email</label>
                    <input type="text" name="paypal_email" value="" class="form-control" required {{ ($getPaymentStatus->count() == "1") ? "Disabled" : " " }}>
                </div>
              
                <div class="form-group">
                    <label for="payment_date">Payment Date</label>
                    <input type="text" name="payment_date" value="" class="form-control" required placeholder="DD-MM-Y" {{ ($getPaymentStatus->count() == "1") ? "Disabled" : " " }}>
                </div>
                
                <input type="hidden" name="payment_status" value="Paid" class="form-control" required>
                
                <button type="submit" class="btn btn-info mb-5 mt-3 float-right" style="width:100%;" {{ ($getPaymentStatus->count() == "1") ? "Disabled" : " " }}>Submit</button>
            </form>
            <p>For concerns, please email us at support@wisdomspeakersbureau.com.</p> 
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