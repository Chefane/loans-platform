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
                <div class="d-flex justify-content-center justify-content-md-start"> <!-- Centered button on smaller devices -->
                    <button type="button" class="btn btn-outline-primary">Apply for loan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="container-fluid py-5" id="testi">
        <div class="row text-center">
            <h2>Apply for Loan by filling this form</h2>
            <form action="" method="POST" enctype="multipart/form-data">
              @csrf
              
              <!-- Personal Information -->
              <h5 class="mb-3">Personal Information</h5>
              <div class="row">
                  <div class="col-md-6 mb-3">
                      <label for="full_name">Full Name</label>
                      <input type="text" class="form-control" id="full_name" name="full_name" required>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="dob">Date of Birth</label>
                      <input type="date" class="form-control" id="dob" name="dob" required>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="identity_number">National ID/Passport</label>
                      <input type="text" class="form-control" id="identity_number" name="identity_number" required>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="phone_number">Phone Number</label>
                      <input type="tel" class="form-control" id="phone_number" name="phone_number" required>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="email">Email Address</label>
                      <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" id="address" name="address" required>
                  </div>
              </div>

              <!-- Employment & Income Details -->
              <h5 class="mt-4">Employment & Income Details</h5>
              <div class="row">
                  <div class="col-md-6 mb-3">
                      <label for="employment_status">Employment Status</label>
                      <select class="form-control" id="employment_status" name="employment_status" required>
                          <option value="">Select</option>
                          <option value="Employed">Employed</option>
                          <option value="Self-employed">Self-employed</option>
                          <option value="Unemployed">Unemployed</option>
                      </select>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="monthly_income">Monthly Income</label>
                      <input type="number" class="form-control" id="monthly_income" name="monthly_income" required>
                  </div>
              </div>

              <!-- Loan Details -->
              <h5 class="mt-4">Loan Details</h5>
              <div class="row">
                  <div class="col-md-6 mb-3">
                      <label for="loan_amount">Loan Amount Requested</label>
                      <input type="number" class="form-control" id="loan_amount" name="loan_amount" required>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="loan_purpose">Loan Purpose</label>
                      <select class="form-control" id="loan_purpose" name="loan_purpose" required>
                          <option value="Personal">Personal</option>
                          <option value="Business">Business</option>
                          <option value="Medical">Medical</option>
                          <option value="Education">Education</option>
                      </select>
                  </div>
              </div>

              <!-- Bank Details -->
              <h5 class="mt-4">Bank & Financial Details</h5>
              <div class="row">
                  <div class="col-md-6 mb-3">
                      <label for="bank_name">Bank Name</label>
                      <input type="text" class="form-control" id="bank_name" name="bank_name" required>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="account_number">Account Number</label>
                      <input type="text" class="form-control" id="account_number" name="account_number" required>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="bank_statement">Upload Bank Statement (Optional)</label>
                      <input type="file" class="form-control" id="bank_statement" name="bank_statement">
                  </div>
              </div>

              <!-- Guarantor Details -->
              <h5 class="mt-4">Guarantor Details (If Required)</h5>
              <div class="row">
                  <div class="col-md-6 mb-3">
                      <label for="guarantor_name">Guarantor Name</label>
                      <input type="text" class="form-control" id="guarantor_name" name="guarantor_name">
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="guarantor_contact">Guarantor Contact</label>
                      <input type="tel" class="form-control" id="guarantor_contact" name="guarantor_contact">
                  </div>
              </div>

              <!-- Agreement -->
              <div class="form-check mt-3">
                  <input type="checkbox" class="form-check-input" id="agree_terms" name="agree_terms" required>
                  <label class="form-check-label" for="agree_terms">I agree to the <a href="#">terms and conditions</a></label>
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