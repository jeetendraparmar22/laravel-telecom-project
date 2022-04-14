<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompletedFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('completed_forms', function (Blueprint $table) {
            $table->id();
            $table->string('formno');
            $table->string('invoice_no');
            $table->string('invoice_date');
            $table->string('customer_id');
            $table->string('phone_no');
            $table->string('cust_name');
            $table->string('cust_address');
            $table->string('cust_city');
            $table->string('cust_state');
            $table->string('cust_zip');
            $table->string('cust_email');
            $table->string('cust_dob');
            $table->string('cust_alt_no');
            $table->string('mobile_planname');
            $table->string('plane_code');
            $table->string('validity');
            $table->string('addon_services');
            $table->string('mobile_device');
            $table->string('dealer_company_name');
            $table->string('dealer_name');
            $table->string('dealer_company_address');
            $table->string('dealer_company_state');
            $table->string('dealer_company_city');
            $table->string('dealer_company_zip');
            $table->string('dealer_company_email');
            $table->string('dealer_no');
            $table->string('dealer_code');
            $table->string('retail_name');
            $table->string('retail_address');
            $table->string('retail_state');
            $table->string('retail_city');
            $table->string('retail_zip');
            $table->string('retail_email');
            $table->string('retail_no');
            $table->string('retail_code');
            $table->string('payment');
            $table->string('discount');
            $table->string('coupon_code');
            $table->string('payment_type');
            $table->string('card_type');
            $table->string('total_payment');
            $table->string('reference_no');
            $table->string('transaction_id');
            $table->string('remark');
            $table->string('captcha');
            $table->dateTime('post_datetime');
            $table->dateTime('update_datetime');
            $table->integer('eid');
            $table->string('ename');
            $table->string('usertype');
                       
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('completed_forms');
    }
}
