<div class="container-fluid py-5" id="loan">
    <div class="row text-center">
        <h2>Apply for Loan by filling this form</h2>
        <form wire:submit.prevent="submit" enctype="multipart/form-data">
          @csrf
      
          <!-- Personal Information -->
          <h5 class="mb-3 text-primary">Personal Information</h5>
          <div class="row">
              <div class="col-md-6 mb-3">
                  <label for="full_name" class="form-label"> Full Names <span style="color: red;">*</span></label>
                  <input type="text" wire:model="fullNames" class="form-control" id="full_name" name="full_name" placeholder="Enter your full name">
                  @error('fullNames')
                    <div class="text-danger mt-1">{{ $message }}</div>
                  @enderror
              </div>
              <div class="col-md-6 mb-3">
                  <label for="dob" class="form-label">Date of Birth <span style="color: red;">*</span></label>
                  <input type="date" wire:model="dateOfBirth" class="form-control" id="dob" name="dob">
                  @error('dateOfBirth')
                    <div class="text-danger mt-1">{{ $message }}</div>
                  @enderror
              </div>
              <div class="col-md-6 mb-3">
                  <label for="identity_number" class="form-label">National ID/Passport <span style="color: red;">*</span></label>
                  <input type="text" wire:model="nationalId" class="form-control" id="identity_number" name="identity_number" placeholder="Enter your national ID or passport number">
                  @error('nationalId')
                    <div class="text-danger mt-1">{{ $message }}</div>
                  @enderror
              </div>
              <div class="col-md-6 mb-3">
                  <label for="phone_number" class="form-label">Phone Number <span style="color: red;">*</span></label>
                  <input type="text" wire:model="phoneNumber" class="form-control" id="phone_number" name="phone_number" placeholder="Enter your phone number">
                  @error('phoneNumber')
                    <div class="text-danger mt-1">{{ $message }}</div>
                  @enderror
              </div>
              <div class="col-md-6 mb-3">
                  <label for="email" class="form-label">Email Address</label>
                  <input type="email" wire:model="emailAddress" class="form-control" id="email" name="email" placeholder="Enter your email address">
                  @error('emailAddress')
                    <div class="text-danger mt-1">{{ $message }}</div>
                  @enderror
              </div>
              <div class="col-md-6 mb-3">
                  <label for="address" class="form-label">Home Address <span style="color: red;">*</span></label>
                  <input type="text" wire:model="homeAddress" class="form-control" id="address" name="address" placeholder="Enter your address">
                  @error('homeAddress')
                    <div class="text-danger mt-1">{{ $message }}</div>
                  @enderror
              </div>
          </div>
      
          <!-- Employment & Income Details -->
          <h5 class="mt-4 text-primary">Employment & Income Details</h5>
          <div class="row">
              <div class="col-md-6 mb-3">
                  <label for="employment_status" class="form-label">Employment Status <span style="color: red;">*</span></label>
                  <select class="form-select" wire:model="employmentStatus" id="employment_status" name="employment_status">
                      <option value="">Select your employment status</option>
                      <option value="Employed">Employed</option>
                      <option value="Self-employed">Self-employed</option>
                      <option value="Unemployed">Unemployed</option>
                  </select>
                  @error('employmentStatus')
                    <div class="text-danger mt-1">{{ $message }}</div>
                 @enderror
              </div>
              <div class="col-md-6 mb-3">
                  <label for="monthly_income" class="form-label">Monthly Income <span style="color: red;">*</span></label>
                  <input type="number" wire:model="monthlyIncome" class="form-control" id="monthly_income" name="monthly_income" placeholder="Enter your monthly income">
                  @error('monthlyIncome')
                    <div class="text-danger mt-1">{{ $message }}</div>
                  @enderror
              </div>
          </div>
      
          <!-- Loan Details -->
          <h5 class="mt-4 text-primary">Loan Details</h5>
          <div class="row">
              <div class="col-md-6 mb-3">
                  <label for="loan_amount" class="form-label">Loan Amount Requested <span style="color: red;">*</span></label>
                  <input type="number" wire:model="loanAmountRequested" class="form-control" id="loan_amount" name="loan_amount" placeholder="Enter the loan amount">
              </div>
              @error('loanAmountRequested')
              <div class="text-danger mt-1">{{$message}}</div>
              @enderror
              <div class="col-md-6 mb-3">
                  <label for="loan_purpose" class="form-label">Loan Purpose <span style="color: red;">*</span></label>
                  <select wire:model="loanPurpose" class="form-select" id="loan_purpose" name="loan_purpose">
                      <option value="">Select the purpose of the loan</option>
                      <option value="Personal">Personal</option>
                      <option value="Business">Business</option>
                      <option value="Medical">Medical</option>
                      <option value="Education">Education</option>
                  </select>
                  @error('loanPurpose')
                    <div class="text-danger mt-1">{{ $message }}</div>
                  @enderror
              </div>
          </div>
      
          <!-- Bank Details -->
          <h5 class="mt-4 text-primary">Payment Details</h5>
          <div class="row">
            <div class="col-md-6 mb-3">
                <label for="bank_name" class="form-label">Payment Method <span style="color: red;">*</span></label>
                <select class="form-control" wire:model="paymentMethod" id="bank_name" name="bank_name" >
                    <option value="" disabled selected>Select payment method</option>
                    <option value="mpesa">Mpesa</option>
                    <option value="ecocash">Ecocash</option>
                </select>
                @error('paymentMethod')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>                
              <div class="col-md-6 mb-3">
                  <label for="account_number" class="form-label">Mobile Number <span style="color: red;">*</span></label>
                  <input type="text" wire:model="mobileNumber" class="form-control" id="account_number" name="account_number" placeholder="Enter your account number">
                  @error('mobileNumber')
                    <div class="text-danger mt-1">{{ $message }}</div>
                  @enderror
              </div>
              <div class="col-md-6 mb-3">
                  <label for="bank_statement" class="form-label">Upload National ID or Passport <span style="color: red;">*</span></label>
                  <input type="file" wire:model="identityDocument" class="form-control" id="bank_statement" name="bank_statement">
                  @error('identityDocument')
                    <div class="text-danger mt-1">{{ $message }}</div>
                  @enderror
              </div>
              <div class="col-md-6 mb-3">
                <label for="bank_statement" class="form-label">3 Months Bank Statement <span style="color: red;">*</span></label>
                <input type="file" wire:model="bankStatementDocument" class="form-control" id="bank_statement" name="bank_statement">
                @error('bankStatementDocument')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
          </div>
      
          <!-- Guarantor Details -->
          <h5 class="mt-4 text-primary">Desired Payment Duration <span style="color: red;">*</span></h5>
          <div class="row">
            <div class="col-md-6 mb-3">
                <select class="form-control" wire:model="paymentDuration" id="payment_duration" name="payment_duration">
                    <option value="" disabled selected>Select payment duration</option>
                    <option value="6_months">1 week</option>
                    <option value="12_months">2 weeks</option>
                    <option value="18_months">1 Month</option>
                    <option value="24_months">3 Months</option>
                </select>
                @error('paymentDuration')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
             </div>
          </div>
      
          <!-- Agreement -->
          <div class="form-check mt-3 text-start">
            <input type="checkbox" class="form-check-input" id="agree_terms" name="agree_terms">
            <label class="form-check-label ms-2" for="agree_terms">
                I agree to the <a href="#" class="text-decoration-none">terms and conditions</a>
            </label>
        </div>            
    </form>
         <!-- Submit Link -->
    <div class="text-center mt-4">
        <a href="#" wire:click.prevent="submit" wire:loading.attr="disabled" class="btn btn-success w-50 text-decoration-none">
            Submit Application
            <div class="spinner-border ms-2" role="status" wire:loading style="width: 1rem; height: 1rem;">
             
            </div>
        </a>
       
    </div>
    </div>
</div>