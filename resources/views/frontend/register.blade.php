@extends('frontend.layouts.master')
@section('main-content')
<div class="container-fluid py-5">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="mb-4">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Register</h5>
                    <h1 class="display-4">Registter Yourself To Connct Us</h1>
                </div>
                <p class="mb-5">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                <a class="btn btn-primary rounded-pill py-3 px-5 me-3" href="">Find Doctor</a>
                <a class="btn btn-outline-primary rounded-pill py-3 px-5" href="">Read More</a>
            </div>
            <div class="col-lg-6">
                <div class="bg-light text-center rounded p-5">
                    <h1 class="mb-4">Book An Appointment</h1>
                    <form>
                        <div class="row g-3">
                       
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-white border-0" placeholder=" Name" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control bg-white border-0" placeholder="Email(optional)" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-white border-0" placeholder="Phone" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <select class="form-select bg-white border-0" style="height: 55px;">
                                    <option selected>Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                  
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="number" class="form-control bg-white border-0" placeholder="Age" min="0" max="120" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="password" class="form-control bg-white border-0" placeholder="Password" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="password" class="form-control bg-white border-0" placeholder="Confrim Password" style="height: 55px;">
                            </div>
                         
                     
                          
                           
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection