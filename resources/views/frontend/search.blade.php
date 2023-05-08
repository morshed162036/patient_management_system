@extends('frontend.layouts.master')
@section('main-content')

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