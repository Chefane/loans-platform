<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class ApplyForLoan extends Model
{
    use HasUuids; 

    protected $primaryKey = 'id'; 
    protected $keyType = 'string'; 
    public $incrementing = false; 

    protected $fillable = [
        'full_names',
        'date_of_birth',
        'national_id',
        'phone_number',
        'email_address',
        'home_address',
        'employment_status',
        'monthly_income',
        'loan_amount_requested',
        'loan_purpose',
        'payment_method',
        'mobile_number',
        'identity_document',
        'bank_statement_document',
        'payment_duration',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'monthly_income' => 'decimal:2',
        'loan_amount_requested' => 'decimal:2',
    ];
}