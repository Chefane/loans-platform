<x-guest-layout>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Loans</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#hero-sec">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testi">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container-fluid py-5" id="hero-sec">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0"> <!-- Added margin-bottom for spacing on smaller devices -->
              <img src="{{ asset('assets/images/loan-man.jpg') }}" class="img-fluid" alt="Loan Man">

            </div>
            <div class="col-md-6 text-center text-md-start"> <!-- Centered text on smaller devices -->
                <h4>Get Your Loan Online Today!</h4>
                <p>Quick and hassle-free online loans—fast approvals, flexible repayments, and funds when you need them most!.</p>
                <div class="d-flex justify-content-center justify-content-md-start"> 
                    <a href="#loan" class="btn btn-outline-primary">Apply for loan</a>
                </div>                
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="container-fluid py-5" id="loan">
        <div class="row text-center">
            <h2>Apply for Loan by filling this form</h2>
            <form action="" method="POST" enctype="multipart/form-data">
              @csrf
          
              <!-- Personal Information -->
              <h5 class="mb-3 text-primary">Personal Information</h5>
              <div class="row">
                  <div class="col-md-6 mb-3">
                      <label for="full_name" class="form-label">Full Name</label>
                      <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter your full name" required>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="dob" class="form-label">Date of Birth</label>
                      <input type="date" class="form-control" id="dob" name="dob" required>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="identity_number" class="form-label">National ID/Passport</label>
                      <input type="text" class="form-control" id="identity_number" name="identity_number" placeholder="Enter your national ID or passport number" required>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="phone_number" class="form-label">Phone Number</label>
                      <input type="tel" class="form-control" id="phone_number" name="phone_number" placeholder="Enter your phone number" required>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="email" class="form-label">Email Address</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="address" class="form-label">Address</label>
                      <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" required>
                  </div>
              </div>
          
              <!-- Employment & Income Details -->
              <h5 class="mt-4 text-primary">Employment & Income Details</h5>
              <div class="row">
                  <div class="col-md-6 mb-3">
                      <label for="employment_status" class="form-label">Employment Status</label>
                      <select class="form-select" id="employment_status" name="employment_status" required>
                          <option value="">Select your employment status</option>
                          <option value="Employed">Employed</option>
                          <option value="Self-employed">Self-employed</option>
                          <option value="Unemployed">Unemployed</option>
                      </select>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="monthly_income" class="form-label">Monthly Income</label>
                      <input type="number" class="form-control" id="monthly_income" name="monthly_income" placeholder="Enter your monthly income" required>
                  </div>
              </div>
          
              <!-- Loan Details -->
              <h5 class="mt-4 text-primary">Loan Details</h5>
              <div class="row">
                  <div class="col-md-6 mb-3">
                      <label for="loan_amount" class="form-label">Loan Amount Requested</label>
                      <input type="number" class="form-control" id="loan_amount" name="loan_amount" placeholder="Enter the loan amount" required>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="loan_purpose" class="form-label">Loan Purpose</label>
                      <select class="form-select" id="loan_purpose" name="loan_purpose" required>
                          <option value="">Select the purpose of the loan</option>
                          <option value="Personal">Personal</option>
                          <option value="Business">Business</option>
                          <option value="Medical">Medical</option>
                          <option value="Education">Education</option>
                      </select>
                  </div>
              </div>
          
              <!-- Bank Details -->
              <h5 class="mt-4 text-primary">Payment Details</h5>
              <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="bank_name" class="form-label">Provider</label>
                    <select class="form-control" id="bank_name" name="bank_name" required>
                        <option value="" disabled selected>Select payment method</option>
                        <option value="mpesa">Mpesa</option>
                        <option value="ecocash">Ecocash</option>
                    </select>
                </div>                
                  <div class="col-md-6 mb-3">
                      <label for="account_number" class="form-label">Mobile Number</label>
                      <input type="text" class="form-control" id="account_number" name="account_number" placeholder="Enter your account number" required>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="bank_statement" class="form-label">Upload National ID or Passport</label>
                      <input type="file" class="form-control" id="bank_statement" name="bank_statement">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="bank_statement" class="form-label">3 Months Bank Statement</label>
                    <input type="file" class="form-control" id="bank_statement" name="bank_statement">
                </div>
              </div>
          
              <!-- Guarantor Details -->
              <h5 class="mt-4 text-primary">Desired Payment Duration</h5>
              <div class="row">
                <div class="col-md-6 mb-3">
                    <select class="form-control" id="payment_duration" name="payment_duration" required>
                        <option value="" disabled selected>Select payment duration</option>
                        <option value="6_months">1 week</option>
                        <option value="12_months">2 weeks</option>
                        <option value="18_months">1 Month</option>
                        <option value="24_months">3 Months</option>
                    </select>
                 </div>
              </div>
          
              <!-- Agreement -->
              <div class="form-check mt-3 text-start">
                <input type="checkbox" class="form-check-input" id="agree_terms" name="agree_terms" required>
                <label class="form-check-label ms-2" for="agree_terms">
                    I agree to the <a href="#" class="text-decoration-none">terms and conditions</a>
                </label>
            </div>            
          
              <!-- Submit Button -->
              <div class="text-center mt-4">
                  <button type="submit" class="btn btn-success w-50">Submit Application</button>
              </div>
          </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer-container bg-dark text-white py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 footer-column">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <span class="footer-title">Product</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Product 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Product 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Plans & Prices</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Frequently asked questions</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 footer-column">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <span class="footer-title">Company</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Job postings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">News and articles</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 footer-column">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <span class="footer-title">Contact & Support</span>
                        </li>
                        <li class="nav-item">
                            <span class="nav-link"><i class="fas fa-phone"></i>+47 45 80 80 80</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-comments"></i>Live chat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-envelope"></i>Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-star"></i>Give feedback</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="text-center py-3">
                <i class="fas fa-ellipsis-h"></i>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website <script>document.write(new Date().getFullYear())</script></span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quick-links">
                        <li class="list-inline-item">
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</x-guest-layout>