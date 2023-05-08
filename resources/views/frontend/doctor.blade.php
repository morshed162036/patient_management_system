@extends('frontend.layouts.master')
@section('main-content')

<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Our Doctors</h5>
            <h1 class="display-4">Qualified HealthNet Professionals</h1>
        </div>
        <div class="owl-carousel team-carousel position-relative">
            <div class="team-item">
                <div class="row g-0 bg-light rounded overflow-hidden">
              
                    <div class="col-12 col-sm-5 h-100">
                        <img class="img-fluid h-100" src="{{ asset('frontend/img/team-1.jpg') }}" style="object-fit: cover;">
                    </div>
                    <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                        <div class="mt-auto p-4">
                            <a href="{{ route('doctor-profile') }}"> <h3>Doctor Name</h3></a>
                            <h6 class="fw-normal fst-italic text-primary mb-4">Cardiology Specialist</h6>
                            <p class="m-0">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                        </div>
                        <div class="d-flex mt-auto border-top p-4">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
               
                </div>
            </div>
            <div class="team-item">
                <div class="row g-0 bg-light rounded overflow-hidden">
                    <div class="col-12 col-sm-5 h-100">
                        <img class="img-fluid h-100" src="{{ asset('frontend/img/team-2.jpg') }}" style="object-fit: cover;">
                    </div>
                    <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                        <div class="mt-auto p-4">
                            <a href="{{ route('doctor-profile') }}"> <h3>Doctor Name</h3></a>
                            <h6 class="fw-normal fst-italic text-primary mb-4">Cardiology Specialist</h6>
                            <p class="m-0">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                        </div>
                        <div class="d-flex mt-auto border-top p-4">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <div class="row g-0 bg-light rounded overflow-hidden">
                    <div class="col-12 col-sm-5 h-100">
                        <img class="img-fluid h-100" src="{{ asset('frontend/img/team-3.jpg') }}" style="object-fit: cover;">
                    </div>
                    <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                        <div class="mt-auto p-4">
                            <a href="{{ route('doctor-profile') }}"> <h3>Doctor Name</h3></a>
                            <h6 class="fw-normal fst-italic text-primary mb-4">Cardiology Specialist</h6>
                            <p class="m-0">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                        </div>
                        <div class="d-flex mt-auto border-top p-4">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Find A Doctor</h5>
            <h1 class="display-4 mb-4">Find A HealthNet Professionals</h1>
            <h5 class="fw-normal">Duo ipsum erat stet dolor sea ut nonumy tempor. Tempor duo lorem eos sit sed ipsum takimata ipsum sit est. Ipsum ea voluptua ipsum sit justo</h5>
        </div>
        <div class="mx-auto" style="width: 100%; max-width: 600px;">
            <div class="input-group">
                <select class="form-select border-primary w-25" style="height: 60px;">
                    <option selected>Department</option>
                    <option value="1">Department 1</option>
                    <option value="2">Department 2</option>
                    <option value="3">Department 3</option>
                </select>
                <input type="text" class="form-control border-primary w-50" placeholder="Keyword">
                <button class="btn btn-dark border-0 w-25">Search</button>
            </div>
        </div>
    </div>
</div>

@endsection