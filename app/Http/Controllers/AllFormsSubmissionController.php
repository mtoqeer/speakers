<?php

namespace App\Http\Controllers;
use Response;
use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Newsletter;
use Illuminate\Support\Facades\Mail;

class AllFormsSubmissionController extends Controller
{
    //

    public function sendContactFormsDetails(Request $request){
        $request->validate([
            'company_name' => 'required',
            'company_phone' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'contact_phone' => 'required',
            'email' => 'required',
            'event_name' => 'required',
            'event_date' => 'required',
            'event_time_needed' => 'required',
            'speaking_topic' => 'required',
            'event_city' => 'required',
            'event_length' => 'required',
            'how_many_time' => 'required',
            'audience_size' => 'required',
            'type_of_audience' => 'required',
            'challenge' => 'required',
            'equipement' => 'required',
            'film_the_event' => 'required',
            'internet_access' => 'required',
            'vendor_table' => 'required',
            'buying_books' => 'required',
            'budget' => 'required',
            'travel_arrangments' => 'required',
            'additional_details' => 'required',
            'looking_to_gain'=>'required',
        ]);
        $data = array(
            'company_name' => $request->company_name,
            'company_phone' => $request->company_phone,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'contact_phone' => $request->contact_phone,
            'email' => $request->email,
            'event_name' => $request->event_name,
            'event_date' => $request->event_date,
            'event_time_needed' => $request->event_time_needed,
            'speaking_topic' => $request->speaking_topic,
            'event_city' => $request->event_city,
            'event_length' => $request->event_length,
            'how_many_time' => $request->how_many_time,
            'audience_size' => $request->audience_size,
            'type_of_audience' => $request->type_of_audience,
            'looking_to_gain'=>$request->looking_to_gain,
            'challenge' => $request->challenge,
            'equipement' => $request->equipement,
            'film_the_event' => $request->film_the_event,
            'internet_access' => $request->internet_access,
            'vendor_table' => $request->vendor_table,
            'buying_books' => $request->buying_books,
            'budget' => $request->budget,
            'travel_arrangments' => $request->travel_arrangments,
            'additional_details' => $request->additional_details

        );
        Mail::to('toqeer.94@gmail.com')->send(new ContactForm($data));    
        return view('contact');
    }

    // public function speakersContactForm(Request $request){
    //     $request->validate([
    //         'customer_name' => 'required',
    //         'customer_email' => 'required',
    //         'customer_subject' => 'required',
    //         'customer_message' => 'required',
    //     ]);
    //     $data = array(
    //         'name' => $request->customer_name,
    //         'email' => $request->customer_email,
    //         'subject' => $request->customer_subject,
    //         'message' => $request->customer_message,
    //     );
    //     Mail::to('toqeer.94@gmail.com')->send(new \App\Mail\speakersContactForm($data));
    //     return Response::json(['response' => 'Success']);     
    // }

    public function mailChimpSubscribe(Request $request){
        
        if (!Newsletter::isSubscribed($request->email)) {
            Newsletter::subscribe($request->email, ['FNAME'=>$request->fname, 'LNAME'=>$request->lname]);
            return "Subscribed Successfully!!";
        }

        return "Sorry you are already subscribed";

    }
}
