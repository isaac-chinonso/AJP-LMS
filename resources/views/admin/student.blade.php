@extends('layout.master')
@section('title')
Admin Students || Ajayi Polytechnic LMS
@endsection

@section('content')

<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">
                    @if (date("H") < 12) <h1 style="font-size: 22px;">Good morning <i class="mdi mdi-brightness-6"></i>, Admin</h1>
                        @elseif (date("H") >= 12 && date("H") < 16) <h1 style="font-size: 22px;">Good afternoon <i class="mdi mdi-brightness-7"></i>, Admin</h1>
                            @elseif (date("H") >= 15)
                            <h1 style="font-size: 22px;">Good evening <i class="mdi mdi-brightness-2"></i>, Admin</h1>
                            @endif
                </h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                        <li class="breadcrumb-item active">Students</li>
                        <button type="button" class="btn btn-info btn-sm m-l-15" data-toggle="modal" data-target="#myModal"><i class="icon-plus"></i> Add New Student</button>
                    </ol>
                </div>
            </div>
            <!-- sample modal content -->
            <div id="myModal" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="post" action="{{ route('savestudent') }}">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Add New Student</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-body">
                                    <label>Matric Number</label>
                                    <input type="text" class="form-control" name="username" placeholder="Enter Matric Num">
                                </div><br>
                                <div class="form-body">
                                    <label>Fullname</label>
                                    <input type="text" class="form-control" name="fullname" placeholder="Enter Fullname">
                                </div><br>
                                <div class="form-group">
                                    <label>Select Department</label>
                                    <select class="form-control" name="department_id">
                                        <option disabled selected>Select Department</option>
                                        @foreach($department as $dept)
                                        <option value="{{ $dept->id }}">{{ $dept->title }}</option>
                                        @endforeach
                                    </select>
                                </div><br>
                                <div class="form-body">
                                    <label>Entry Year</label>
                                    <input type="text" class="form-control" name="entry_year" placeholder="Enter entry_year">
                                </div><br>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success waves-effect">Add User</button>
                            </div>
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-md-12">
                @include('include.success')
                @include('include.warning')
                @include('include.error')
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Student <button class="btn btn-danger btn-sm" style="float: right;"><a href="{{ route('adminstudentarchived') }}" class="text-white">All Archive Student</a></button></h4>
                        <div class="table-responsive">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Matric Number</th>
                                        <th>Fullname</th>
                                        <th>Department</th>
                                        <th>Entry Level</th>
                                        <th>Created_at</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($student as $users)
                                    <tr>
                                        <td>{{ $users->username }}</td>
                                        <td>{{ $users->profile->first()->fullname }}</td>
                                        <td>{{ $users->profile->first()->department->title }}</td>
                                        <td>{{ $users->profile->first()->entry_year }}</td>
                                        <td>{{ $users->created_at->diffForHumans() }}</td>
                                        <td>
                                            @if($users->status == 1 & $users->activated == 1) 
                                            <span class="alert alert-success alert-rounded" style="padding-top:5px;padding-bottom:5px;padding-left:5px;padding-right:5px;">Active & Portal Activated</span>
                                            @elseif($users->status == 1 & $users->activated == 0)
                                            <span class="alert alert-warning" style="padding-top:5px;padding-bottom:5px;padding-left:5px;padding-right:5px;">Active & Portal Not Activated</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu lightSpeedIn">
                                                    <a class="dropdown-item" href="javascript:void(0)">View Profile</a>
                                                    @if($users->activated == 0)
                                                    <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#activate{{ $users->id }}">Activate Login</a>
                                                    @elseif($users->activated == 1)
                                                    <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#deactivate{{ $users->id }}">Deactivate Login</a>
                                                    @endif
                                                    <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#archive{{ $users->id }}">Archive Student</a>
                                                </div>
                                            </div>
                                        </td>
                                        <!-- sample modal content -->
                                        <div id="activate{{ $users->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4>Activate Student Portal Login</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4><strong>Confirm Activation</strong></h4>
                                                        <p>Are you sure you want to Activate {{ $users->profile->first()->fullname }}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Close</button>
                                                        <a href="{{ route('activatestudent',$users->id) }}" class="btn btn-success waves-effect waves-light">Yes</a>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <!-- sample modal content -->
                                        <div id="deactivate{{ $users->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4>Deactivate Student Portal Login</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4><strong>Confirm Deactivation</strong></h4>
                                                        <p>Are you sure you want to Deactivate {{ $users->profile->first()->fullname }}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Close</button>
                                                        <a href="{{ route('deactivatestudent',$users->id) }}" class="btn btn-success waves-effect waves-light">Yes</a>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <!-- sample modal content -->
                                        <div id="archive{{ $users->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4>Archive Student</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are you sure you want to Archive {{ $users->profile->first()->fullname }}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Close</button>
                                                        <a href="{{ route('archivestudent',$users->id) }}" class="btn btn-success waves-effect waves-light">Yes</a>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->

@endsection