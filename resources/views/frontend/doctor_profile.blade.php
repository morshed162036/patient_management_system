@extends('frontend.layouts.master')
@section('main-content')

<div class="container-fluid py-5">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded" src="{{ asset('frontend/img/team-1.jpg') }}" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="mb-4">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5"> Name-Profile</h5>
                   
                </div>
                <div class="row g-3 pt-3">
                    <div class="col-sm-3 col-6">
                        <div class="bg-light text-center rounded-circle py-4">
                            <i class="fa fa-3x fa-microscope text-primary mb-3"></i>
                            <h6 class="mb-0">Qualification<small class="d-block text-primary">MBBs</small></h6>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="bg-light text-center rounded-circle py-4">
                            <i class="fa fa-3x fa-user-md text-primary mb-3"></i>
                            <h6 class="mb-0">Experence<small class="d-block text-primary">3</small></h6>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="bg-light text-center rounded-circle py-4">
                            <i class="fa fa-3x fa-procedures text-primary mb-3"></i>
                            <h6 class="mb-0">Treatment<small class="d-block text-primary">330 People's</small></h6>
                        </div>
                    </div>
                   
                    <div class="col-sm-3 col-6">
                        <div class="bg-light text-center rounded-circle py-4">
                            <i class="fa fa-3x fa-ambulance text-primary mb-3"></i>
                            <h6 class="mb-0">Award<small class="d-block text-primary">5</small></h6>
                        </div>
                    </div>
                </div>
                <div class="row g-3 pt-3">
                    <div class="col-sm-3 col-6">
                        <div class="bg-light text-center rounded-circle py-4">
                            <i class="fa fa-3x fa-microscope text-primary mb-3"></i>
                            <h6 class="mb-0">Shedule<small class="d-block text-primary">SAT-THU, 10Am To 5PM</small></h6>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="bg-light text-center rounded-circle py-4">
                            <i class="fa fa-3x fa-user-md text-primary mb-3"></i>
                            <h6 class="mb-0">Experence<small class="d-block text-primary">3</small></h6>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="bg-light text-center rounded-circle py-4">
                            <i class="fa fa-3x fa-procedures text-primary mb-3"></i>
                            <h6 class="mb-0">Treatment<small class="d-block text-primary">330 People's</small></h6>
                        </div>
                    </div>
                   
                    <div class="col-sm-3 col-6">
                        <div class="bg-light text-center rounded-circle py-4">
                            <i class="fa fa-3x fa-ambulance text-primary mb-3"></i>
                            <h6 class="mb-0">Award<small class="d-block text-primary">5</small></h6>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" type="submit">Make An Appointment</button>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="mb-4">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5"> Basic-info</h5>
                   
                </div>
                <div class="">
                   
                   
                    <h3>Study In</h3>
                    <h6 class="fw-normal text-primary mb-3">Dhaka Madical Collage</h6>
                    <h3>Address</h3>
                    <h6 class="fw-normal text-primary mb-3">Dhanmondi</h6>
                    <h3>Mobile</h3>
                    <h6 class="fw-normal text-primary mb-3">01738840235</h6>
                </div>
              
              
            </div>
        </div>
       
    </div>
</div>

@endsection