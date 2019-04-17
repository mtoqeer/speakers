<?php

namespace App\Http\Controllers;
use App\PaymentDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentDetailsController extends Controller
{
    public function show(){
        $userid = auth()->user()->id;
        $getPaymentStatus = DB::table('payment_details')          
            ->select('payment_details.*')
            ->where('payment_details.user_id' , $userid)->get();
        
        
        return view('user.paypalpayment')->with('getPaymentStatus', $getPaymentStatus);
    }


    public function save(Request $request){

        $paymentdetails = new PaymentDetails();
        $paymentdetails->paypal_email = $request->paypal_email;
        $paymentdetails->payment_date  = $request->payment_date;
        $paymentdetails->status  = $request->payment_status;
        $paymentdetails->user_id = $request->user_id;
        $paymentdetailsSave = $paymentdetails->save();

        if($paymentdetailsSave){
            return redirect('/dashboard/paymentconfirmation')->with('message','Payment Details Has Been Submitted!!');
        }

    }

    public function confirmPageShow(){

        $getPaymentStatus = DB::table('payment_details')          
            ->select('payment_details.*')
            ->where('payment_details.status' , "Awaiting Confirmation")->get();
        return view('admin.dashboard.confirmpayment')->with('getPaymentStatus', $getPaymentStatus);

    }


    public function updateToConfirm(Request $request){


        DB::table('payment_details')->where('id', $request->id)->update(['status' => 'Paid']);

        $getPaymentStatus = DB::table('payment_details')          
            ->select('payment_details.*')
            ->where('payment_details.status' , "Awaiting Confirmation")->get();
        return view('admin.dashboard.confirmpayment')->with('getPaymentStatus', $getPaymentStatus);
    }

    public function pay(){
        return view('user.pay');
    }

    public function delete($id){

        $paymentStatus = PaymentDetails::find($id);
        $paymentStatusDelete = $paymentStatus->delete();
        if($paymentStatusDelete){
            return redirect('/admin/paymentconfirmation')->with('deleted','Deleted Successfully!!');
        }

    }
}
