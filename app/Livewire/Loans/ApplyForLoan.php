<?php

namespace App\Livewire\Loans;
use App\Rules\ApplyForLoanRules;

use Livewire\Component;

class ApplyForLoan extends Component
{

    public ?string $fullNames;
    public ?string  $dateOfBirth;
    public ?string $nationalId;
    public ?string $phoneNumber;
    public ?string $emailAddress;
    public ?string $homeAddress;
    public ?string $employmentStatus;
    public ?float $monthlyIncome;
    public ?float $loanAmountRequested;
    public ?string $loanPurpose;
    public ?string $paymentMethod;
    public ?string $mobileNumber;
    public  $identityDocument;
    public $bankStatementDocument;
    public ?string $paymentDuration;




    public function submit()
    {

      $this->validate(ApplyForLoanRules::rules());
    }



    public function render()
    {
        return view('livewire.loans.apply-for-loan');
    }
}
