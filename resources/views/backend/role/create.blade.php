@extends('backend.layout.main')

@section('content')
    <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-12 mb-2 mt-1">
                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                                <h5
                                    class="content-header-title float-left pr-1 mb-0"
                                >
                                    Add Role
                                </h5>
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb p-0 mb-0">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('admin.dashboard') }}"
                                                ><i class="bx bx-home-alt"></i
                                            ></a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('role.index') }}"
                                                >User Roles</a>
                                        </li>
                                        <li class="breadcrumb-item active">
                                            Add Role
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="content-body">
                {{-- Validation Error Message --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- Basic Inputs start -->
                <section id="basic-input">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-content">
                                    <form action="{{ route('role.store') }}" method="post"> @csrf
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <fieldset>
                                                        <h5>Role Name</h5>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="bx bx-spreadsheet"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Name" aria-describedby="basic-addon1" name="role_name">
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="mt-2">
                                                        <h5>Role Description</h5>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="bx bxs-message"></i></span>
                                                            </div>
                                                            <textarea class="form-control" id="basicTextarea" rows="3" placeholder="Textarea" name="role_description"></textarea>
                                                        </div>
                                                    </fieldset>
                                                    <button type="submit" class="btn btn-primary mt-2">Create</button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Inputs end -->
            </div>
            </div>
        </div>
    <!-- END: Content-->

@endsection

