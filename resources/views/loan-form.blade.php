<x-loan-layout>
    <!-- Navigation Bar -->
    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Loans Logo" height="60">
              </a>
              
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
    </nav> --}}

    <!-- Hero Section -->
    <div class="container-fluid py-5" id="hero-sec">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0"> <!-- Added margin-bottom for spacing on smaller devices -->
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{ asset('assets/images/advert.jpeg') }}" class="img-fluid" alt="Loan image">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('assets/images/ad.jpeg') }}" class="img-fluid" alt="Loan image">
                      </div>
                    </div>
                  </div>
            

            </div>
            <div class="col-md-6 text-center text-md-start"> <!-- Centered text on smaller devices -->
                <h4>Get Your Loan Today, Visit our Offices!</h4>
                <p>Quick and hassle-free loans—fast approvals, flexible repayments, and funds when you need them most!.</p>
                <div class="d-flex justify-content-center justify-content-md-start mt-2"> 
                    <a href="#aboutUs" class="btn btn-outline-primary">About Us</a>
                </div>                
            </div>
        </div>
    </div>

    <!-- About Us -->
    <section id="aboutUs" class="mb-5">
        <p>
            At <strong>Dubsburg Loans</strong>, we are a dedicated team of finance and technology professionals committed to revolutionizing the way people access financial support. 
            With a passion for financial inclusion and innovation, we aim to simplify the borrowing process, making it faster, more transparent, and more accessible for everyone — whether you're an entrepreneur, student, or working professional.
        </p>
        <p>
            Our team combines deep expertise in lending, data analytics, risk management, and customer service to provide a seamless digital loan experience. 
            We believe that everyone deserves the opportunity to grow, and we work tirelessly to ensure that our platform meets the highest standards of reliability, security, and user satisfaction.
        </p>
        <p>
            Since our inception, we've helped thousands of individuals achieve their financial goals, and we continue to grow our services with a strong focus on innovation, trust, and community empowerment.
            Join us on our mission to create a more financially inclusive future.
        </p>
    </section>
    
    <!-- End About Us -->
    <!-- Footer -->
    <footer class="footer-container bg-dark text-white py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 footer-column">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <span class="footer-title">Our Products</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.linbets.com/en/">Linbets</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 footer-column">
                   
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
                    <span class="copyright">Copyright &copy; Dubsburg Loans <script>document.write(new Date().getFullYear())</script></span>
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
</x-loan-layout>