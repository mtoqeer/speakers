<?php

namespace App\Http\Controllers;
use Response;
use Newsletter;
use App\Mail\ContactForm;
use Illuminate\Http\Request;
Use Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

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
            'program_length' => 'required',
            'requested_topic' => 'required',
            'event_city' => 'required',
            'event_length' => 'required',
            'event_theme' => 'required',
            'audience_size' => 'required',
            'total_presenters_needed' => 'required',
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
            'program_length' => $request->program_length,
            'requested_topic' => $request->requested_topic,
            'event_city' => $request->event_city,
            'event_length' => $request->event_length,
            'event_theme' => $request->event_theme,
            'audience_size' => $request->audience_size,
            'total_presenters_needed' => $request->total_presenters_needed,
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
        Mail::to('admin@wisdomspeakersbureau.com')->send(new ContactForm($data));    
        Session::flash('ContactFormSend', "Your Message has been sent successfully!");
        return Redirect::back();
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
