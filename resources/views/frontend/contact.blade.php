@extends('frontend.layouts.master')
@section('main-content')

<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Any Questions?</h5>
            <h1 class="display-4">Please Feel Free To Contact Us</h1>
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-4">
                <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center" style="height: 200px;">
                    <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4" style="width: 100px; height: 70px; transform: rotate(-15deg);">
                        <i class="fa fa-2x fa-location-arrow text-white" style="transform: rotate(15deg);"></i>
                    </div>
                    <h6 class="mb-0">Blue Moon Gram Tower (4th Floor)
                        167/24 ECB Chattar, Matikata, Kalshi</h6>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center" style="height: 200px;">
                    <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4" style="width: 100px; height: 70px; transform: rotate(-15deg);">
                        <i class="fa fa-2x fa-phone text-white" style="transform: rotate(15deg);"></i>
                    </div>
                    <h6 class="mb-0">+880 171 5044 474</h6> 
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center" style="height: 200px;">
                    <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4" style="width: 100px; height: 70px; transform: rotate(-15deg);">
                        <i class="fa fa-2x fa-envelope-open text-white" style="transform: rotate(15deg);"></i>
                    </div>
                    <h6 class="mb-0">info@example.com</h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12" style="height: 500px;">
                <div class="position-relative h-100">
                    <iframe class="position-relative w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29731.38708526875!2d90.37591946904368!3d23.822547574892766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7d863921c69%3A0x6ab12aad91d06e0a!2sBlue%20Moon%20Gram%20Tower!5e1!3m2!1sen!2sbd!4v1681362636401!5m2!1sen!2sbd"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
        <div class="row justify-content-center position-relative" style="margin-top: -200px; z-index: 1;">
            <div class="col-lg-8">
                <div class="bg-white rounded p-5 m-5 mb-0">
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control bg-light border-0" placeholder="Subject" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-light border-0" rows="5" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection