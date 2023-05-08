<div class="container-fluid sticky-top bg-white shadow-sm">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
            <a href="{{ route('index') }}" class="navbar-brand">
                <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-clinic-medical me-2"></i>HealthNet</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('index') }}" class="nav-item nav-link">Home</a>
                    <a href="{{ route('doctor') }}"  class="nav-item nav-link">Doctors</a>

                    <a href="{{ route('appointment') }}" class="nav-item nav-link">Appointment</a>

                    <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                    <a href="{{ route('service') }}" class="nav-item nav-link">Service</a>
                    <a href="{{ route('pricing') }}" class="nav-item nav-link">Pricing</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Others</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('latest_news') }}" class="dropdown-item">Latest News</a>
                            <a href="{{ route('testimonial') }}" class="dropdown-item">Testimonial</a>
                            <a href="{{ route('search') }}" class="dropdown-item">Find Doctor</a>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                    <a href="{{ route('patient-login') }}" class="nav-item nav-link">Login</a>

                </div>
            </div>
        </nav>
    </div>
</div>