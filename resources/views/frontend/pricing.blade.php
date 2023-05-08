@extends('frontend.layouts.master')
@section('main-content')

<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Medical Packages</h5>
            <h1 class="display-4">Awesome Medical Programs</h1>
        </div>
        <div class="owl-carousel price-carousel position-relative" style="padding: 0 45px 45px 45px;">
            <div class="bg-light rounded text-center">
                <div class="position-relative">
                    <img class="img-fluid rounded-top" src="img/price-1.jpg" alt="">
                    <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center" style="background: rgba(29, 42, 77, .8);">
                        <h3 class="text-primary">Pregnancy Care</h3>
                        <h1 class="display-4 text-white mb-0">
                            <span style="color:aqua">7000</span> <small class="align-top fw-normal" style="font-size: 22px; line-height: 45px; color:aqua">BDT</small><small class="align-bottom fw-normal" style="font-size: 16px; line-height: 40px;">/ Year</small>
                        </h1>
                    </div>
                </div>
                <div class="text-center py-5">
                    <p>Emergency Medical Treatment</p>
                    <p>Highly Experienced Doctors</p>
                    <p>Highest Success Rate</p>
                    <p>Telephone Service</p>
                    <a href="" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a>
                </div>
            </div>
            <div class="bg-light rounded text-center">
                <div class="position-relative">
                    <img class="img-fluid rounded-top" src="img/price-2.jpg" alt="">
                    <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center" style="background: rgba(29, 42, 77, .8);">
                        <h3 class="text-primary">Health Checkup</h3>
                        <h1 class="display-4 text-white mb-0">
                            <span style="color:aqua">5000</span> <small class="align-top fw-normal" style="font-size: 22px; line-height: 45px; color:aqua">BDT</small><small class="align-bottom fw-normal" style="font-size: 16px; line-height: 40px;">/ Year</small>
                        </h1>
                    </div>
                </div>
                <div class="text-center py-5">
                    <p>Emergency Medical Treatment</p>
                    <p>Highly Experienced Doctors</p>
                    <p>Highest Success Rate</p>
                    <p>Telephone Service</p>
                    <a href="" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a>
                </div>
            </div>
            <div class="bg-light rounded text-center">
                <div class="position-relative">
                    <img class="img-fluid rounded-top" src="img/price-3.jpg" alt="">
                    <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center" style="background: rgba(29, 42, 77, .8);">
                        <h3 class="text-primary">Dental Care</h3>
                        <h1 class="display-4 text-white mb-0">
                            <span style="color:aqua">6000</span><small class="align-top fw-normal" style="font-size: 22px; line-height: 45px; color:aqua">BDT</small><small class="align-bottom fw-normal" style="font-size: 16px; line-height: 40px;">/ Year</small>
                        </h1>
                    </div>
                </div>
                <div class="text-center py-5">
                    <p>Emergency Medical Treatment</p>
                    <p>Highly Experienced Doctors</p>
                    <p>Highest Success Rate</p>
                    <p>Telephone Service</p>
                    <a href="" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a>
                </div>
            </div>
            <div class="bg-light rounded text-center">
                <div class="position-relative">
                    <img class="img-fluid rounded-top" src="img/price-4.jpg" alt="">
                    <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center" style="background: rgba(29, 42, 77, .8);">
                        <h3 class="text-primary">Operation & Surgery</h3>
                        <h1 class="display-4 text-white mb-0">
                            <span style="color:aqua">8000</span> <small class="align-top fw-normal" style="font-size: 22px; line-height: 45px; color:aqua">BDT</small><small class="align-bottom fw-normal" style="font-size: 16px; line-height: 40px;">/ Year</small>
                        </h1>
                    </div>
                </div>
                <div class="text-center py-5">
                    <p>Emergency Medical Treatment</p>
                    <p>Highly Experienced Doctors</p>
                    <p>Highest Success Rate</p>
                    <p>Telephone Service</p>
                    <a href="" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection