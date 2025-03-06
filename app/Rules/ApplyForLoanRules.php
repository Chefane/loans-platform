<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ApplyForLoanRules implements Rule
{
    public function passes($attribute, $value)
    {
       
        return true;
    }

    public function message()
    {
    
        return 'The validation error message.';
    }

    /**
     * Get the validation rules for applying for a loan.
     *
     * @return array
     */
    public static function rules()
    {
        return [
            'fullNames' => 'required|string|max:255',
            'dateOfBirth' => 'required|date',
            'nationalId' => 'required|string|unique:apply_for_loans,national_id',
            'phoneNumber' => 'required|string|max:15',
            'emailAddress' => 'nullable|email|unique:apply_for_loans,email_address',
            'homeAddress' => 'required|string|max:255',
            'employmentStatus' => 'required|string|max:50',
            'monthlyIncome' => 'required|numeric|min:0',
            'loanAmountRequested' => 'required|numeric|min:0',
            'loanPurpose' => 'required|string|max:500',
            'paymentMethod' => 'required|string|max:50',
            'mobileNumber' => 'required|string|max:15',
           'identityDocument' => 'required|file|mimes:pdf,jpg,png|max:2048',
            'bankStatementDocument' => 'required|file|mimes:pdf,jpg,png|max:2048',
            'paymentDuration' => 'required|integer|min:1',
        ];
    }

    /**
     * Get the validation error messages.
     *
     * @return array
     */
    public static function messages()
    {
        return [
            'fullNames.required' => 'The full names field is required.',
            'dateOfBirth.required' => 'The date of birth field is required.',
            'nationalId.required' => 'The national ID field is required.',
            'nationalId.unique' => 'The national ID has already been taken.',
            'phoneNumber.required' => 'The phone number field is required.',
            'emaiAddress.required' => 'The email address field is required.',
            'homeAddress.required' => 'The home address field is required.',
            'employmentStatus.required' => 'The employment status field is required.',
            'monthlyIncome.required' => 'The monthly income field is required.',
            'loanAmountRequested.required' => 'The loan amount requested field is required.',
            'loanPurpose.required' => 'The loan purpose field is required.',
            'paymentMethod.required' => 'The payment method field is required.',
            'mobileNumber.required' => 'The mobile number field is required.',
            'identityDocument.required' => 'The identity document field is required.',
            'bankStatementDocument.required' => 'The bank statement document field is required.',
            'paymentDuration.required' => 'The payment duration field is required.',
        ];
    }
}