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
                                    Add Permissions
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
                                            Add Permissions
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
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <fieldset>
                                                        <h5>Role Name</h5>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="bx bx-spreadsheet"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Name" aria-describedby="basic-addon1" name="role_name" value="{{ $role->name }}" readonly>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="mt-2">
                                                        <h5>Role Description</h5>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="bx bxs-message"></i></span>
                                                            </div>
                                                            <textarea class="form-control" id="basicTextarea" rows="3" placeholder="Textarea" name="role_description" readonly>{{ $role->description }}</textarea>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 mt-2">
                                                    <h5>Permission</h5>
                                                    <table class="table table-bordered table-striped userrole-table table-middle">
                                                        <tbody>
                                                            <form action="{{ route('role.permissionToRole',$role->id) }}" method="post"> @csrf
                                                                <tr>
                                                                    <td>Dashboard</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="dashboard"
                                                                                value="dashboard"

                                                                            />
                                                                            <label class="custom-control-label" for="dashboard"
                                                                                >Dashboard</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="dashboardappointment"
                                                                                value="dashboard.appointment"
                                                                                
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="dashbaordappointment"
                                                                                >Calendar Appointment</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Patient</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="patient.list"
                                                                                value="patient.list"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="patient.list"
                                                                                >Patient List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="patient.create"
                                                                                value="patient.create"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="patient.create"
                                                                                >Patient Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="patient.edit"
                                                                                value="patient.edit"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="patient.edit"
                                                                                >Patient Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="patient.delete"
                                                                                value="patient.delete"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="patient.delete"
                                                                                >Patient Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="patient.view"
                                                                                value="patient.view"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="patient.view"
                                                                                >Patient View</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Patient Other</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="patient.clinical_notes"
                                                                                value="patient.clinical_notes"
                                                                            />
                                                                            <label class="custom-control-label" for="patient.clinical_notes"
                                                                                >Patient Clinical Notes</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="patient.print"
                                                                                value="patient.print"
                                                                            />
                                                                            <label class="custom-control-label" for="patient.print"
                                                                                >Patient Print</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="patients.documents"
                                                                                value="patients.documents"
                                                                                
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="patients.documents"
                                                                                >Paitent Documents</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="patient.sendmail"
                                                                                value="patient.sendmail"
                                                                                
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="patient.sendmail"
                                                                                >Patient Sendmail</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Appointment</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="appointment.list"
                                                                                value="appointment.list"
                                                                            />
                                                                            <label class="custom-control-label" for="appointment.list"
                                                                                >Appointment List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="appointment.create"
                                                                                value="appointment.create"
                                                                                
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="appointment.create"
                                                                                >Appointment Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="appointment.edit"
                                                                                value="appointment.edit"
                                                                                
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="appointment.edit"
                                                                                >Appointment Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="appointment.delete"
                                                                                value="appointment.delete"
                                                                                
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="appointment.delete"
                                                                                >Appointment Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="appointment.view"
                                                                                value="appointment.view"
                                                                                
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="appointment.view"
                                                                                >Appointment View</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Appointment Other</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="appointment.sendmail"
                                                                                value="appointment.sendmail"
                                                                               
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="appointment.sendmail"
                                                                                >Appointment Sendmail</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="appointment.print"
                                                                                value="appointment.print"
                                                                               
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="appointment.print"
                                                                                >Appointment Print</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="appointment.clinical_notes"
                                                                                value="appointment.clinical_notes"
                                                                                
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="appointment.clinical_notes"
                                                                                >Appointment Clinical Notes</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="appointment.documents"
                                                                                value="appointment.documents"
                                                                                
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="appointment.documents"
                                                                                >Appointment Documents</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="appointment.documents_upload"
                                                                                value="appointment.documents_upload"
                                                                                
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="appointment.documents_upload"
                                                                                >Document Upload</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="appointment.documents_delete"
                                                                                value="appointment.documents_delete"
                                                                                
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="appointment.documents_delete"
                                                                                >Document Remove</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Prescription</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="prescription.list"
                                                                                value="prescription.list"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="prescription.list"
                                                                                >Prescription List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="prescription.create"
                                                                                value="prescription.create"
                                                                                
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="prescription.create"
                                                                                >Prescription Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="prescription.edit"
                                                                                value="prescription.edit"
                                                                                
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="prescription.edit"
                                                                                >Prescription Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="prescription.delete"
                                                                                value="prescription.delete"
                                                                                
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="prescription.delete"
                                                                                >Prescription Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="prescription.view"
                                                                                value="prescription.view"
                                                                                
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="prescription.view"
                                                                                >Prescription View</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Prescription Other</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="prescription.print"
                                                                                value="prescription.print"
                                                                               
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="prescription.print"
                                                                                >Prescription Print</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Invoice</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="invoice.list"
                                                                                value="invoice.list"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="invoice.list"
                                                                                >Invoice List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="invoice.create"
                                                                                value="invoice.create"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="invoice.create"
                                                                                >Invoice Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="invoice.edit"
                                                                                value="invoice.edit"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="invoice.edit"
                                                                                >Invoice Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="invoice.delete"
                                                                                value="invoice.delete"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="invoice.delete"
                                                                                >Invoice Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="invoice.view"
                                                                                value="invoice.view"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="invoice.view"
                                                                                >Invoice View</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Invoice Other</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="invoice.print"
                                                                                value="invoice.print"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="invoice.print"
                                                                                >Invoice Print</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="invoice.sentmail"
                                                                                value="invoice.sentmail"
                                                                                
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="invoice.sentmail"
                                                                                >Invoice Sendmail</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="addpayment"
                                                                                value="addpayment"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="addpayment"
                                                                                >Add Payment</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                {{-- <tr>
                                                                    <td>Request</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="request"
                                                                                value="request"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="request"
                                                                                >Request List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="request/edit"
                                                                                value="request/edit"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="request/edit"
                                                                                >Request Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="request/delete"
                                                                                value="request/delete"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="request/delete"
                                                                                >Request Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="request/view"
                                                                                value="request/view"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="request/view"
                                                                                >Request View</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="request/mail"
                                                                                value="request/mail"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="request/mail"
                                                                                >Request Send Mail</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                </tr> --}}
                                                                {{-- <tr>
                                                                    <td>POS/Bill</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="medicine/billing"
                                                                                value="medicine/billing"
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="medicine/billing"
                                                                                >POS/Bill List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="medicine/billing/add"
                                                                                value="medicine/billing/add"
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="medicine/billing/add"
                                                                                >Bill Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="medicine/billing/edit"
                                                                                value="medicine/billing/edit"
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="medicine/billing/edit"
                                                                                >Bill Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="medicine/billing/delete"
                                                                                value="medicine/billing/delete"
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="medicine/billing/delete"
                                                                                >Bill Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="medicine/billing/view"
                                                                                value="medicine/billing/view"
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="medicine/billing/view"
                                                                                >Bill View</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                </tr> --}}
                                                                {{-- <tr>
                                                                    <td>POS/Bill Other</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="medicine/billing/pdf"
                                                                                value="medicine/billing/pdf"
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="medicine/billing/pdf"
                                                                                >Bill PDF/Print</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Purchase</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="medicine/purchase"
                                                                                value="medicine/purchase"
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="medicine/purchase"
                                                                                >Purchase List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="medicine/purchase/add"
                                                                                value="medicine/purchase/add"
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="medicine/purchase/add"
                                                                                >Purchase Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="medicine/purchase/edit"
                                                                                value="medicine/purchase/edit"
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="medicine/purchase/edit"
                                                                                >Purchase Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="medicine/purchase/delete"
                                                                                value="medicine/purchase/delete"
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="medicine/purchase/delete"
                                                                                >Purchase Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="medicine/purchase/view"
                                                                                value="medicine/purchase/view"
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="medicine/purchase/view"
                                                                                >Purchase View</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Purchase Other</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="medicine/purchase/pdf"
                                                                                value="medicine/purchase/pdf"
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="medicine/purchase/pdf"
                                                                                >Purchase PDF/Print</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr> --}}
                                                                {{-- <tr>
                                                                    <td>Stock adjustment</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="medicine/stock"
                                                                                value="medicine/stock"
                                                                            />
                                                                            <label class="custom-control-label" for="medicine/stock"
                                                                                >Stock List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="medicine/stock/delete"
                                                                                value="medicine/stock/delete"
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="medicine/stock/delete"
                                                                                >Stock Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Medicine</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="medicines"
                                                                                value="medicines"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="medicines"
                                                                                >Medicine List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="medicine/add"
                                                                                value="medicine/add"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="medicine/add"
                                                                                >Medicine Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="medicine/edit"
                                                                                value="medicine/edit"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="medicine/edit"
                                                                                >Medicine Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="medicine/delete"
                                                                                value="medicine/delete"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="medicine/delete"
                                                                                >Medicine Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="medicine/view"
                                                                                value="medicine/view"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="medicine/view"
                                                                                >Medicine View</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Medicine Other</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="medicine/upload"
                                                                                value="medicine/upload"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="medicine/upload"
                                                                                >Medicine Upload</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Medicine Category</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="medicine/category"
                                                                                value="medicine/category"
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="medicine/category"
                                                                                >Medicine Category List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="medicine/category/add"
                                                                                value="medicine/category/add"
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="medicine/category/add"
                                                                                >Medicine Category Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="medicine/category/edit"
                                                                                value="medicine/category/edit"
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="medicine/category/edit"
                                                                                >Medicine Category Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="medicine/category/delete"
                                                                                value="medicine/category/delete"
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="medicine/category/delete"
                                                                                >Medicine Category Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                </tr> --}}
                                                                <tr>
                                                                    <td>Department</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="department.list"
                                                                                value="department.list"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="department.list"
                                                                                >Department List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="department.create"
                                                                                value="department.create"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="department.create"
                                                                                >Department Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="department.edit"
                                                                                value="department.edit"
                                                                                
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="department.edit"
                                                                                >Department Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="department.delete"
                                                                                value="department.delete"
                                                                                
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="department.delete"
                                                                                >Department Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Doctor</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="doctor.list"
                                                                                value="doctor.list"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="doctor.list"
                                                                                >Doctor List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="doctor.create"
                                                                                value="doctor.create"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="doctor.create"
                                                                                >Doctor Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="doctor.edit"
                                                                                value="doctor.edit"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="doctor.edit"
                                                                                >Doctor Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="doctor.delete"
                                                                                value="doctor.delete"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="doctor.delete"
                                                                                >Doctor Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="doctor.view"
                                                                                value="doctor.view"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="doctor.view"
                                                                                >Doctor view</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                {{-- <tr>
                                                                    <td>Expenses</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="expenses"
                                                                                value="expenses"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="expenses"
                                                                                >Expense List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="expense/add"
                                                                                value="expense/add"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="expense/add"
                                                                                >Expense Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="expense/edit"
                                                                                value="expense/edit"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="expense/edit"
                                                                                >Expense Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="expense/delete"
                                                                                value="expense/delete"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="expense/delete"
                                                                                >Expense Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Expenses Type</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="expensetype"
                                                                                value="expensetype"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="expensetype"
                                                                                >Expenses Type List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="expensetype/add"
                                                                                value="expensetype/add"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="expensetype/add"
                                                                                >Expenses Type Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="expensetype/edit"
                                                                                value="expensetype/edit"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="expensetype/edit"
                                                                                >Expenses Type Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="expensetype/delete"
                                                                                value="expensetype/delete"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="expensetype/delete"
                                                                                >Expenses Type Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Attendance</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="staffattendance"
                                                                                value="staffattendance"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="staffattendance"
                                                                                >Attendance List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="staffattendance/add"
                                                                                value="staffattendance/add"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="staffattendance/add"
                                                                                >Attendance Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="staffattendance/view"
                                                                                value="staffattendance/view"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="staffattendance/view"
                                                                                >Attendance View</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Salarytemplate</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="salarytemplate"
                                                                                value="salarytemplate"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="salarytemplate"
                                                                                >Salary Template List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="salarytemplate/add"
                                                                                value="salarytemplate/add"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="salarytemplate/add"
                                                                                >Salary Template Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="salarytemplate/edit"
                                                                                value="salarytemplate/edit"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="salarytemplate/edit"
                                                                                >Salary Template Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="salarytemplate/delete"
                                                                                value="salarytemplate/delete"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="salarytemplate/delete"
                                                                                >Salary Template Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Manage Salary</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="managesalary"
                                                                                value="managesalary"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="managesalary"
                                                                                >Manage Salary List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="managesalary/add"
                                                                                value="managesalary/add"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="managesalary/add"
                                                                                >Manage Salary Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="managesalary/edit"
                                                                                value="managesalary/edit"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="managesalary/edit"
                                                                                >Manage Salary Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="managesalary/view"
                                                                                value="managesalary/view"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="managesalary/view"
                                                                                >Manage Salary View</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Payment history</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="managesalary/history"
                                                                                value="managesalary/history"
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="managesalary/history"
                                                                                >Payment history List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="managesalary/history/view"
                                                                                value="managesalary/history/view"
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="managesalary/history/view"
                                                                                >Payment View</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="managesalary/history/delete"
                                                                                value="managesalary/history/delete"
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="managesalary/history/delete"
                                                                                >Payment Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="managesalary/history/pdf"
                                                                                value="managesalary/history/pdf"
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="managesalary/history/pdf"
                                                                                >Payment PDF</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Make Payment</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="makepayment"
                                                                                value="makepayment"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="makepayment"
                                                                                >Make payment List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="makepayment/add"
                                                                                value="makepayment/add"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="makepayment/add"
                                                                                >Make Payment Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Birthrecords</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="birthrecords"
                                                                                value="birthrecords"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="birthrecords"
                                                                                >Birthrecords List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="birthrecord/add"
                                                                                value="birthrecord/add"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="birthrecord/add"
                                                                                >Birthrecord Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="birthrecord/edit"
                                                                                value="birthrecord/edit"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="birthrecord/edit"
                                                                                >Birthrecord Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="birthrecord/delete"
                                                                                value="birthrecord/delete"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="birthrecord/delete"
                                                                                >Birthrecord Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="birthrecord/view"
                                                                                value="birthrecord/view"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="birthrecord/view"
                                                                                >Birthrecord View</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Birthrecords Other</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="birthrecord/pdf"
                                                                                value="birthrecord/pdf"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="birthrecord/pdf"
                                                                                >Birthrecord PDF/Print</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Deathrecords</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="deathrecords"
                                                                                value="deathrecords"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="deathrecords"
                                                                                >Deathrecords List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="deathrecord/add"
                                                                                value="deathrecord/add"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="deathrecord/add"
                                                                                >Deathrecord Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="deathrecord/edit"
                                                                                value="deathrecord/edit"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="deathrecord/edit"
                                                                                >Deathrecord Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="deathrecord/delete"
                                                                                value="deathrecord/delete"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="deathrecord/delete"
                                                                                >Deathrecord Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="deathrecord/view"
                                                                                value="deathrecord/view"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="deathrecord/view"
                                                                                >Deathrecord View</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Deathrecords Other</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="deathrecord/pdf"
                                                                                value="deathrecord/pdf"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="deathrecord/pdf"
                                                                                >Deathrecords PDF/Print</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr> --}}
                                                                <tr>
                                                                    <td>Noticeboard</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="noticeboard.list"
                                                                                value="noticeboard.list"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="noticeboard.list"
                                                                                >Noticeboard List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="noticeboard.create"
                                                                                value="noticeboard.create"
                                                                                
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="noticeboard.create"
                                                                                >Noticeboard Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="noticeboard.edit"
                                                                                value="noticeboard.edit"
                                                                                
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="noticeboard.edit"
                                                                                >Noticeboard Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="noticeboard.delete"
                                                                                value="noticeboard.delete"
                                                                                
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="noticeboard.delete"
                                                                                >Noticeboard Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="noticeboard.view"
                                                                                value="noticeboard.view"
                                                                               
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="noticeboard.view"
                                                                                >Noticeboard View</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>User</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="user.list"
                                                                                value="user.list"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="user.list"
                                                                                >User List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="user.create"
                                                                                value="user.create"
                                                                              
                                                                            />
                                                                            <label class="custom-control-label" for="user.create"
                                                                                >User Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="user.edit"
                                                                                value="user.edit"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="user.edit"
                                                                                >User Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="user.delete"
                                                                                value="user.delete"
                                                                                
                                                                            />
                                                                            <label class="custom-control-label" for="user.delete"
                                                                                >User Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="user.view"
                                                                                value="user.view"
                                                                            />
                                                                            <label class="custom-control-label" for="user.view"
                                                                                >User View</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                {{-- <tr>
                                                                    <td>Subscriber</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="subscribers"
                                                                                value="subscribers"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="subscribers"
                                                                                >Subscriber List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="subscriber/add"
                                                                                value="subscriber/add"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="subscriber/add"
                                                                                >Subscriber Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="subscriber/edit"
                                                                                value="subscriber/edit"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="subscriber/edit"
                                                                                >Subscriber Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="subscriber/delete"
                                                                                value="subscriber/delete"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="subscriber/delete"
                                                                                >Subscriber Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Page</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="pages"
                                                                                value="pages"
                                                                            />
                                                                            <label class="custom-control-label" for="pages"
                                                                                >Page List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="page/add"
                                                                                value="page/add"
                                                                            />
                                                                            <label class="custom-control-label" for="page/add"
                                                                                >Page Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="page/edit"
                                                                                value="page/edit"
                                                                            />
                                                                            <label class="custom-control-label" for="page/edit"
                                                                                >Page Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="page/delete"
                                                                                value="page/delete"
                                                                            />
                                                                            <label class="custom-control-label" for="page/delete"
                                                                                >Page Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Other Pages</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="page/menu"
                                                                                value="page/menu"
                                                                            />
                                                                            <label class="custom-control-label" for="page/menu"
                                                                                >Web Menu</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="page/footer"
                                                                                value="page/footer"
                                                                            />
                                                                            <label class="custom-control-label" for="page/footer"
                                                                                >Web Footer</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="page/theme"
                                                                                value="page/theme"
                                                                            />
                                                                            <label class="custom-control-label" for="page/theme"
                                                                                >Web Theme</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="page/settings"
                                                                                value="page/settings"
                                                                            />
                                                                            <label class="custom-control-label" for="page/settings"
                                                                                >Web Settings</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Facility</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="facility"
                                                                                value="facility"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="facility"
                                                                                >Facility List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="facility/add"
                                                                                value="facility/add"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="facility/add"
                                                                                >Facility Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="facility/edit"
                                                                                value="facility/edit"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="facility/edit"
                                                                                >Facility Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="facility/delete"
                                                                                value="facility/delete"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="facility/delete"
                                                                                >Facility Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Service</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="services"
                                                                                value="services"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="services"
                                                                                >Service List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="service/add"
                                                                                value="service/add"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="service/add"
                                                                                >Service Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="service/edit"
                                                                                value="service/edit"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="service/edit"
                                                                                >Service Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="service/delete"
                                                                                value="service/delete"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="service/delete"
                                                                                >Service Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Review</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="reviews"
                                                                                value="reviews"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="reviews"
                                                                                >Review List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="review/edit"
                                                                                value="review/edit"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="review/edit"
                                                                                >Review Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="review/delete"
                                                                                value="review/delete"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="review/delete"
                                                                                >Review Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Testimonial</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="testimonials"
                                                                                value="testimonials"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="testimonials"
                                                                                >Testimonial List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="testimonial/add"
                                                                                value="testimonial/add"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="testimonial/add"
                                                                                >Testimonial Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="testimonial/edit"
                                                                                value="testimonial/edit"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="testimonial/edit"
                                                                                >Testimonial Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="testimonial/delete"
                                                                                value="testimonial/delete"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="testimonial/delete"
                                                                                >Testimonial Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Blog</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="blogs"
                                                                                value="blogs"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="blogs"
                                                                                >Blog List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="blog/add"
                                                                                value="blog/add"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="blog/add"
                                                                                >Blog Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="blog/edit"
                                                                                value="blog/edit"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="blog/edit"
                                                                                >Blog Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="blog/delete"
                                                                                value="blog/delete"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="blog/delete"
                                                                                >Blog Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Category</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="category"
                                                                                value="category"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="category"
                                                                                >Category List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="category/add"
                                                                                value="category/add"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="category/add"
                                                                                >Category Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="category/edit"
                                                                                value="category/edit"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="category/edit"
                                                                                >Category Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="category/delete"
                                                                                value="category/delete"
                                                                                checked=""
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="category/delete"
                                                                                >Category Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Comment</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="comment"
                                                                                value="comment"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="comment"
                                                                                >Comment List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="comment/edit"
                                                                                value="comment/edit"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="comment/edit"
                                                                                >Comment Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="comment/delete"
                                                                                value="comment/delete"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="comment/delete"
                                                                                >Comment Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>System Info</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="info"
                                                                                value="info"
                                                                            />
                                                                            <label class="custom-control-label" for="info"
                                                                                >System Info</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Taxes</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="tax"
                                                                                value="tax"
                                                                            />
                                                                            <label class="custom-control-label" for="tax"
                                                                                >Taxes List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="tax/add"
                                                                                value="tax/add"
                                                                            />
                                                                            <label class="custom-control-label" for="tax/add"
                                                                                >Taxes Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="tax/edit"
                                                                                value="tax/edit"
                                                                            />
                                                                            <label class="custom-control-label" for="tax/edit"
                                                                                >Taxes Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="tax/delete"
                                                                                value="tax/delete"
                                                                            />
                                                                            <label class="custom-control-label" for="tax/delete"
                                                                                >Taxes Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Payment Method</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="paymentmethod"
                                                                                value="paymentmethod"
                                                                            />
                                                                            <label class="custom-control-label" for="paymentmethod"
                                                                                >Payment Methods</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="paymentmethod/add"
                                                                                value="paymentmethod/add"
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="paymentmethod/add"
                                                                                >Payment Method Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="paymentmethod/edit"
                                                                                value="paymentmethod/edit"
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="paymentmethod/edit"
                                                                                >Payment Method Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="paymentmethod/delete"
                                                                                value="paymentmethod/delete"
                                                                            />
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="paymentmethod/delete"
                                                                                >Payment Method Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Payment Gateway</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="paymentgateway"
                                                                                value="paymentgateway"
                                                                            />
                                                                            <label class="custom-control-label" for="paymentgateway"
                                                                                >Payment Gateway</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Clinical Notes</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="notes"
                                                                                value="notes"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="notes"
                                                                                >Clinical Notes List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="note/add"
                                                                                value="note/add"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="note/add"
                                                                                >Clinical Note Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="note/edit"
                                                                                value="note/edit"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="note/edit"
                                                                                >Clinical Note Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="note/delete"
                                                                                value="note/delete"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="note/delete"
                                                                                >Clinical Note Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Invoice Items</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="items"
                                                                                value="items"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="items"
                                                                                >Items List</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="item/add"
                                                                                value="item/add"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="item/add"
                                                                                >Items Add</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="item/edit"
                                                                                value="item/edit"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="item/edit"
                                                                                >Items Edit</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="item/delete"
                                                                                value="item/delete"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="item/delete"
                                                                                >Items Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Mail</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="send/email"
                                                                                value="send/email"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="send/email"
                                                                                >Send Email</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="sendbulk/email"
                                                                                value="sendbulk/email"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="sendbulk/email"
                                                                                >Send Bulk Email</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="emaillogs"
                                                                                value="emaillogs"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="emaillogs"
                                                                                >Email Log</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="emailsetting"
                                                                                value="emailsetting"
                                                                            />
                                                                            <label class="custom-control-label" for="emailsetting"
                                                                                >Email Settings</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="emailtemplate"
                                                                                value="emailtemplate"
                                                                            />
                                                                            <label class="custom-control-label" for="emailtemplate"
                                                                                >Email Template</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Media</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="get/media"
                                                                                value="get/media"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="get/media"
                                                                                >Media on Modal</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="media/upload"
                                                                                value="media/upload"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="media/upload"
                                                                                >Media Upload</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="media/delete"
                                                                                value="media/delete"
                                                                                checked=""
                                                                            />
                                                                            <label class="custom-control-label" for="media/delete"
                                                                                >Media Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="upload/gallery"
                                                                                value="upload/gallery"
                                                                            />
                                                                            <label class="custom-control-label" for="upload/gallery"
                                                                                >Gallery Upload</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="role[]"
                                                                                id="gallery/delete"
                                                                                value="gallery/delete"
                                                                            />
                                                                            <label class="custom-control-label" for="gallery/delete"
                                                                                >Gallery Delete</label
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                </tr> --}}
                                                                <tr>
                                                                    <button class="btn btn-primary" type="submit">Save Permission</button>
                                                                </tr>
                                                            </form>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
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

