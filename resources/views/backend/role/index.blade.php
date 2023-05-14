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
                                    User Roles
                                </h5>
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb p-0 mb-0">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('admin.dashboard') }}"
                                                ><i class="bx bx-home-alt"></i
                                            ></a>
                                        </li>
                                        <li class="breadcrumb-item active">
                                            User Roles
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-body">
                    <!-- Success & Error Message -->
                        @if(Session::has('success'))
                            <div class="alert alert-success alert-dismissible mb-2" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <div class="d-flex align-items-center">
                                    <i class="bx bx-like"></i>
                                    <span>
                                        {{ Session::get('success') }}
                                    </span>
                                </div>
                            </div>
                        @elseif (Session::has('error'))
                            <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <div class="d-flex align-items-center">
                                    <i class="bx bx-error"></i>
                                    <span>
                                        {{ Session::get('error') }}
                                    </span>
                                </div>
                            </div>
                        @endif

                        
                    <!-- End Success & Error Message -->

                    <!-- Zero configuration table -->
                    <section id='column-selectors'>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <h4 class="card-title">
                                            
                                        </h4>
                                        <a href="{{ route('role.create') }}" class="btn btn-primary">+ Add Role</a>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body card-dashboard">
                                            <div class="table-responsive">
                                                <table class="table table-bordered dataex-html5-selectors" >
                                                    <thead>
                                                        <tr>
                                                            <th class="col-2">Role Name</th>
                                                            <th class="col-8">Description</th>
                                                            <th class="col-2">Created Date</th>
                                                            <th class="col-0">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if ($roles != null)
                                                            @foreach ($roles as $role)
                                                            <tr class="border">
                                                                <td class="text-primary">{{ $role->name }}</td>
                                                                <td>{{ $role->description }}</td>
                                                                <td>{{ $role->created_at }}</td>
                                                                <td>
                                                                    <div class="dropdown">
                                                                        <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></span>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <a class="dropdown-item" href="{{ route('role.show',$role->id) }}"><i class="bx bx-edit-alt mr-1"></i> Add Permissions</a>
                                                                            <a class="dropdown-item" href="{{ route('role.edit',$role->id) }}"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                                                            
                                                                            <form action="{{ route('role.destroy',$role->id) }}" method="post">
                                                                                @csrf
                                                                                @method('Delete')
                                                                                <button type="submit" class="dropdown-item"><i class="bx bx-trash mr-1"></i> delete</button>

                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>  
                                                            @endforeach
                                                        @endif
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Role Name</th>
                                                            <th>Description</th>
                                                            <th>Created Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                </div>
            </div>
        </div>
    <!-- END: Content-->

@endsection

