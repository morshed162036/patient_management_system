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
                                    UserTable
                                </h5>
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb p-0 mb-0">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('admin.dashboard') }}"
                                                ><i class="bx bx-home-alt"></i
                                            ></a>
                                        </li>
                                        <li class="breadcrumb-item active">
                                            UserList
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-body">
                    {{-- <div class="row">
                        <div class="col-12">
                            <p>
                                Read full documnetation
                                <a
                                    href="https://datatables.net/"
                                    target="_blank"
                                    >here</a
                                >
                            </p>
                        </div>
                    </div> --}}
                    <!-- Zero configuration table -->
                    <section id='column-selectors'>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <h4 class="card-title">
                                            
                                        </h4>
                                        <a href="{{ route('user.create') }}" class="btn btn-primary">+ Add User</a>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body card-dashboard">
                                            <div class="table-responsive">
                                                <table class="table table-striped dataex-html5-selectors" >
                                                    <thead>
                                                        <tr>
                                                            <th>Person Info</th>
                                                            <th>User Type</th>
                                                            <th>User Role</th>
                                                            <th>Status</th>
                                                            <th>Created Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <td>
                                                                System Architect
                                                            </td>
                                                            <td>Edinburgh</td>
                                                            <td>61</td>
                                                            <td>2011/04/25</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></span>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Garrett Winters
                                                            </td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>63</td>
                                                            <td>2011/07/25</td>
                                                            <td>$170,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ashton Cox</td>
                                                            <td>
                                                                Junior Technical
                                                                Author
                                                            </td>
                                                            <td>
                                                                San Francisco
                                                            </td>
                                                            <td>66</td>
                                                            <td>2009/01/12</td>
                                                            <td>$86,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Cedric Kelly
                                                            </td>
                                                            <td>
                                                                Senior
                                                                Javascript
                                                                Developer
                                                            </td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2012/03/29</td>
                                                            <td>$433,060</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>33</td>
                                                            <td>2008/11/28</td>
                                                            <td>$162,700</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Brielle
                                                                Williamson
                                                            </td>
                                                            <td>
                                                                Integration
                                                                Specialist
                                                            </td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2012/12/02</td>
                                                            <td>$372,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Herrod Chandler
                                                            </td>
                                                            <td>
                                                                Sales Assistant
                                                            </td>
                                                            <td>
                                                                San Francisco
                                                            </td>
                                                            <td>59</td>
                                                            <td>2012/08/06</td>
                                                            <td>$137,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Rhona Davidson
                                                            </td>
                                                            <td>
                                                                Integration
                                                                Specialist
                                                            </td>
                                                            <td>Tokyo</td>
                                                            <td>55</td>
                                                            <td>2010/10/14</td>
                                                            <td>$327,900</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Colleen Hurst
                                                            </td>
                                                            <td>
                                                                Javascript
                                                                Developer
                                                            </td>
                                                            <td>
                                                                San Francisco
                                                            </td>
                                                            <td>39</td>
                                                            <td>2009/09/15</td>
                                                            <td>$205,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sonya Frost</td>
                                                            <td>
                                                                Software
                                                                Engineer
                                                            </td>
                                                            <td>Edinburgh</td>
                                                            <td>23</td>
                                                            <td>2008/12/13</td>
                                                            <td>$103,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jena Gaines</td>
                                                            <td>
                                                                Office Manager
                                                            </td>
                                                            <td>London</td>
                                                            <td>30</td>
                                                            <td>2008/12/19</td>
                                                            <td>$90,560</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Quinn Flynn</td>
                                                            <td>
                                                                Support Lead
                                                            </td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2013/03/03</td>
                                                            <td>$342,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Charde Marshall
                                                            </td>
                                                            <td>
                                                                Regional
                                                                Director
                                                            </td>
                                                            <td>
                                                                San Francisco
                                                            </td>
                                                            <td>36</td>
                                                            <td>2008/10/16</td>
                                                            <td>$470,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Haley Kennedy
                                                            </td>
                                                            <td>
                                                                Senior Marketing
                                                                Designer
                                                            </td>
                                                            <td>London</td>
                                                            <td>43</td>
                                                            <td>2012/12/18</td>
                                                            <td>$313,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Tatyana
                                                                Fitzpatrick
                                                            </td>
                                                            <td>
                                                                Regional
                                                                Director
                                                            </td>
                                                            <td>London</td>
                                                            <td>19</td>
                                                            <td>2010/03/17</td>
                                                            <td>$385,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Michael Silva
                                                            </td>
                                                            <td>
                                                                Marketing
                                                                Designer
                                                            </td>
                                                            <td>London</td>
                                                            <td>66</td>
                                                            <td>2012/11/27</td>
                                                            <td>$198,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Paul Byrd</td>
                                                            <td>
                                                                Chief Financial
                                                                Officer (CFO)
                                                            </td>
                                                            <td>New York</td>
                                                            <td>64</td>
                                                            <td>2010/06/09</td>
                                                            <td>$725,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Gloria Little
                                                            </td>
                                                            <td>
                                                                Systems
                                                                Administrator
                                                            </td>
                                                            <td>New York</td>
                                                            <td>59</td>
                                                            <td>2009/04/10</td>
                                                            <td>$237,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Bradley Greer
                                                            </td>
                                                            <td>
                                                                Software
                                                                Engineer
                                                            </td>
                                                            <td>London</td>
                                                            <td>41</td>
                                                            <td>2012/10/13</td>
                                                            <td>$132,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dai Rios</td>
                                                            <td>
                                                                Personnel Lead
                                                            </td>
                                                            <td>Edinburgh</td>
                                                            <td>35</td>
                                                            <td>2012/09/26</td>
                                                            <td>$217,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Jenette Caldwell
                                                            </td>
                                                            <td>
                                                                Development Lead
                                                            </td>
                                                            <td>New York</td>
                                                            <td>30</td>
                                                            <td>2011/09/03</td>
                                                            <td>$345,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Yuri Berry</td>
                                                            <td>
                                                                Chief Marketing
                                                                Officer (CMO)
                                                            </td>
                                                            <td>New York</td>
                                                            <td>40</td>
                                                            <td>2009/06/25</td>
                                                            <td>$675,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Cara Stevens
                                                            </td>
                                                            <td>
                                                                Sales Assistant
                                                            </td>
                                                            <td>New York</td>
                                                            <td>46</td>
                                                            <td>2011/12/06</td>
                                                            <td>$145,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Hermione Butler
                                                            </td>
                                                            <td>
                                                                Regional
                                                                Director
                                                            </td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2011/03/21</td>
                                                            <td>$356,250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lael Greer</td>
                                                            <td>
                                                                Systems
                                                                Administrator
                                                            </td>
                                                            <td>London</td>
                                                            <td>21</td>
                                                            <td>2009/02/27</td>
                                                            <td>$103,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Jonas Alexander
                                                            </td>
                                                            <td>Developer</td>
                                                            <td>
                                                                San Francisco
                                                            </td>
                                                            <td>30</td>
                                                            <td>2010/07/14</td>
                                                            <td>$86,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shad Decker</td>
                                                            <td>
                                                                Regional
                                                                Director
                                                            </td>
                                                            <td>Edinburgh</td>
                                                            <td>51</td>
                                                            <td>2008/11/13</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Michael Bruce
                                                            </td>
                                                            <td>
                                                                Javascript
                                                                Developer
                                                            </td>
                                                            <td>Singapore</td>
                                                            <td>29</td>
                                                            <td>2011/06/27</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Donna Snider
                                                            </td>
                                                            <td>
                                                                Customer Support
                                                            </td>
                                                            <td>New York</td>
                                                            <td>27</td>
                                                            <td>2011/01/25</td>
                                                            <td>$112,000</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Person Info</th>
                                                            <th>User Type</th>
                                                            <th>User Role</th>
                                                            <th>Status</th>
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

