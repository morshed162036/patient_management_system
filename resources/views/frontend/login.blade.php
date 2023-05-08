@extends('frontend.layouts.master')
@section('main-content')
<div class="container-fluid py-5">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="mb-4">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Login</h5>
                    <h1 class="display-4">Login And Make An Appointment For You Or Your Family</h1>
                </div>
                <p class="mb-5">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                <a class="btn btn-primary rounded-pill py-3 px-5 me-3" href="">Find Doctor</a>
                <a class="btn btn-outline-primary rounded-pill py-3 px-5" href="">Read More</a>
            </div>
            <div class="col-lg-6">
                <div class="bg-light text-center rounded p-5">
                    <h1 class="mb-4">Login</h1>
                    <form>
                        <div class="row g-3">
                            {{-- <div class="col-12 col-sm-6">
                                <select class="form-select bg-white border-0" style="height: 55px;">
                                    <option selected>Choose Department</option>
                                    <option value="1">Department 1</option>
                                    <option value="2">Department 2</option>
                                    <option value="3">Department 3</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <select class="form-select bg-white border-0" style="height: 55px;">
                                    <option selected>Select Doctor</option>
                                    <option value="1">Doctor 1</option>
                                    <option value="2">Doctor 2</option>
                                    <option value="3">Doctor 3</option>
                                </select>
                            </div> --}}
                            <div class="col-12 col-sm-12">
                                <input type="text" class="form-control bg-white border-0" placeholder="Phone or email" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-12">
                                <input type="password" class="form-control bg-white border-0" placeholder="password" style="height: 55px;">
                            </div>
                            {{-- <div class="col-12 col-sm-6">
                                <div class="date" id="date" data-target-input="nearest">
                                    <input type="text"
                                        class="form-control bg-white border-0 datetimepicker-input"
                                        placeholder="Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="time" id="time" data-target-input="nearest">
                                    <input type="text"
                                        class="form-control bg-white border-0 datetimepicker-input"
                                        placeholder="Time" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                                </div>
                            </div> --}}
                            <div>                            haven't account ?<a href="{{ route('patient-register') }}" class="nav-item nav-link">Register</a>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection