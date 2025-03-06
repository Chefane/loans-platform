<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyForLoansTable extends Migration
{
    public function up()
    {
        Schema::create('apply_for_loans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('full_names');
            $table->date('date_of_birth');
            $table->string('national_id')->unique();
            $table->string('phone_number');
            $table->string('email_address')->unique();
            $table->string('home_address');
            $table->string('employment_status');
            $table->decimal('monthly_income', 10, 2);
            $table->decimal('loan_amount_requested', 10, 2);
            $table->text('loan_purpose');
            $table->string('payment_method');
            $table->string('mobile_number');
            $table->string('identity_document');
            $table->string('bank_statement_document'); 
            $table->integer('payment_duration'); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('apply_for_loans');
    }
}