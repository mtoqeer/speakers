<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #f5f8fa; color: #74787E; height: 100%; hyphens: auto; line-height: 1.4; margin: 0; -moz-hyphens: auto; -ms-word-break: break-all; width: 100% !important; -webkit-hyphens: auto; -webkit-text-size-adjust: none; word-break: break-word;">
    <style>
        @media  only screen and (max-width: 600px) {
            .inner-body {
                width: 100% !important;
            }

            .footer {
                width: 100% !important;
            }
        }

        @media  only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }

        #customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
    </style>

    <table class="wrapper" width="100%" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #f5f8fa; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;">
        <tr>
            <td align="center" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
                <table class="content" width="100%" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;">
                    <tr>
    <td class="header" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; padding: 25px 0; text-align: center;">
        <a href="http://127.0.0.1:8000" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #bbbfc3; font-size: 19px; font-weight: bold; text-decoration: none; text-shadow: 0 1px 0 white;">
            Contact Form
        </a>
    </td>
</tr>

                    <!-- Email Body -->
                    <tr>
                        <td class="body" width="100%" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #FFFFFF; border-bottom: 1px solid #EDEFF2; border-top: 1px solid #EDEFF2; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;">
                            <table id="customers" class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #FFFFFF; margin: 0 auto; padding: 0; width: 570px; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 570px;">
                                <!-- Body content -->
                                <tr>
                                        <td>Company Name:</td>
                                        <td>{{$data['company_name']}}</td>
                                    </tr>
                                
                                    <tr>
                                        <td>Company Phone Number</td>
                                        <td>{{$data['company_phone']}}</td>
                                    </tr>
                                    <tr>
                                        <td>First Name</td>
                                        <td>{{$data['fname']}}</td>
                                    </tr>
                                
                                    <tr>
                                        <td>Last Name</td>
                                        <td>{{$data['lname']}}</td>
                                    </tr>
                                
                                    <tr>
                                        <td>Contact Phone Number</td>
                                        <td>{{$data['contact_phone']}}</td>
                                    </tr>
                                    <tr>
                                        <td>Contact Email Address</td>
                                        <td>{{$data['email']}}</td>
                                    </tr>
                                
                                    <tr>
                                        <td>Event Name</td>
                                        <td>{{$data['event_name']}}</td>
                                    </tr>
                                
                                    <tr>
                                        <td>Event Date</td>
                                        <td>{{$data['event_date']}}</td>
                                    </tr>
                                
                                    <tr>
                                        <td>Event Time Needed</td>
                                        <td>{{$data['event_time_needed']}}</td>
                                    </tr>
                                
                                    <tr>
                                        <td>Speaking Topic</td>
                                        <td>{{$data['speaking_topic']}}</td>
                                    </tr>
                                
                                    <tr>
                                        <td>Location (City)</td>
                                        <td>{{$data['event_city']}}</td>
                                    </tr>
                                
                                    <tr>
                                        <td>Length Of Presentation</td>
                                        <td>{{$data['event_length']}}</td>
                                    </tr>
                                
                                    <tr>
                                        <td>How Many Time Will it Be Presented?</td>
                                        <td>{{$data['how_many_time']}}</td>
                                    </tr>
                                
                                    <tr>
                                        <td>Audience Size</td>
                                        <td>{{$data['audience_size']}}</td>
                                    </tr>
                                
                                    <tr>
                                        <td>Type of Audience (purpose for being there, etc.)</td>
                                        <td>{{$data['type_of_audience']}}</td>
                                    </tr>
                                
                                    <tr>
                                        <td>What is their biggest challenge?</td>
                                        <td>{{$data['challenge']}}</td>
                                    </tr>
                                
                                    <tr>
                                        <td>What are they looking to gain from this event?</td>
                                        <td>{{$data['looking_to_gain']}}</td>
                                    </tr>
                                
                                    <tr>
                                        <td>A/V Equipement Available?</td>
                                        <td>{{$data['equipement']}}</td>
                                    </tr>
                                
                                    <tr>
                                        <td>Will you film the event?</td>
                                        <td>{{$data['film_the_event']}}</td>
                                    </tr>
                                
                                    <tr>
                                        <td>Internet Access Available?</td>
                                        <td>{{$data['internet_access']}}</td>
                                    </tr>
                                
                                    <tr>
                                        <td>Back of the room Vendor Table?</td>
                                        <td>{{$data['vendor_table']}}</td>
                                    </tr>
                                
                                    <tr>
                                        <td>Will you be buying books for the audience?</td>
                                        <td>{{$data['buying_books']}}</td>
                                    </tr>
                                
                                
                                    <tr>
                                        <td>What is your budget?</td>
                                        <td>{{$data['budget']}}</td>
                                    </tr>
                                
                                    <tr>
                                        <td>Please describe travel arrangements such as responsibilities- booking- lodging- etc-</td>
                                        <td>{{$data['travel_arrangments']}}</td>
                                    </tr>
                                
                                    <tr>
                                        <td>Additional Details</td>
                                        <td>{{$data['additional_details']}}</td>
                                    </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
    <td style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
        <table class="footer" align="center" width="570" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; margin: 0 auto; padding: 0; text-align: center; width: 570px; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 570px;">
            <tr>
                <td class="content-cell" align="center" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; padding: 35px;">
                    <p style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; line-height: 1.5em; margin-top: 0; color: #AEAEAE; font-size: 12px; text-align: center;">© 2019 Laravel. All rights reserved.</p>
                </td>
            </tr>
        </table>
    </td>
</tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>