<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    //
    public function createForm()
    {
        //allocated no of forms pass to view
        $allocate_forms = DB::table('forms')->where('folder_allocate_no',0)->get();

        return view('form',["allocate_forms" => $allocate_forms]);
    }

    //Get form details
    public function getFormDetails(Request $request)
    {
        //Display form data to user
        $form = DB::table('forms')->where('invoice_no',$request->invoice_no)->first();
       
        return $form->invoice_no ." , ".$form->invoice_date ." ,
         ".$form->customer_id ." , ".$form->phone_no ." , ".$form->cust_name ." ,
         ".$form->cust_address ." , ".$form->cust_city ." , ".$form->cust_state ." ,
         ".$form->cust_zip ." , ".$form->cust_email ." , ".$form->cust_dob ." ,
         ".$form->cust_alt_no ." , ".$form->mobile_planname ." , ".$form->plane_code ." ,
         ".$form->validity ." , ".$form->addon_services ." , ".$form->mobile_device ." ,
         ".$form->dealer_company_name ." , ".$form->dealer_name ." , ".$form->dealer_company_address ." ,
         ".$form->dealer_company_state ." , ".$form->dealer_company_city ." , ".$form->dealer_company_zip ." ,
         ".$form->dealer_company_email ." , ".$form->dealer_no ." , ".$form->dealer_code ." ,
         ".$form->retail_name ." , ".$form->retail_address ." , ".$form->retail_state ." ,
         ".$form->retail_city .",".$form->retail_zip .",".$form->retail_email ." ,
         ".$form->retail_no ." , ".$form->retail_code ." , ".$form->payment ." ,
            ".$form->discount .",".$form->coupon_code ." , ".$form->payment_type ." , ".$form->card_type ." ,
         ".$form->total_payment ." , ".$form->reference_no ." , ". $form->transaction_id;  
    
    }

    public function storeForm(Request $request)
    {
       
        //Insert data in table
        $form = DB::table('completed_forms')->insert([
            'invoice_no' => $request->invoice_no,
            'invoice_date' => $request->invoice_date,
            'customer_id' => $request->customer_id,
            'phone_no' => $request->phone_no,
            'cust_name' => $request->cust_name,
            'cust_address' => $request->cust_address,
            'cust_city' => $request->cust_city,
            'cust_state' => $request->cust_state,
            'cust_zip' => $request->cust_zip,
            'cust_email' => $request->cust_email,
            'cust_dob' => $request->cust_dob,
            'cust_alt_no' => $request->cust_alt_no,
            'mobile_planname' => $request->mobile_planname,
            'plane_code' => $request->plane_code,
            'validity' => $request->validity,
            'addon_services' => $request->addon_services,
            'mobile_device' => $request->mobile_device,
            'dealer_company_name' => $request->dealer_company_name,
            'dealer_name' => $request->dealer_name,
            'dealer_company_address' => $request->dealer_company_address,
            'dealer_company_state' => $request->dealer_company_state,
            'dealer_company_city' => $request->dealer_company_city,
            'dealer_company_zip' => $request->dealer_company_zip,
            'dealer_company_email' => $request->dealer_company_email,
            'dealer_no' => $request->dealer_no,
            'dealer_code' => $request->dealer_code,
            'retail_name' => $request->retail_name,
            'retail_address' => $request->retail_address,
            'retail_state' => $request->retail_state,
            'retail_city' => $request->retail_city,
            'retail_zip' => $request->retail_zip,
            'retail_email' => $request->retail_email,
            'retail_no' => $request->retail_no,
            'retail_code' => $request->retail_code,
            'payment' => $request->payment,
            'discount' => $request->discount,
            'coupon_code' => $request->coupon_code,
            'payment_type' => $request->payment_type,
            'card_type' => $request->card_type,
            'total_payment' => $request->total_payment,
            'reference_no' => $request->reference_no,
            'transaction_id' => $request->transaction_id,
            'remark' => $request->remark,
            'captcha' => 'jhjhh',
            'post_datetime' => date("Y-m-d h:i:s"),
            'update_datetime' => '2022-04-13 16:31:58',
            'eid' => session('id'),
            'ename' => session('name'),
            'usertype' => 'employee'
            

        ]);

        return redirect()->route('form');
    }

    // Show forms from database
    public function showform()
    {
        return "this is from show form";
    }
}


