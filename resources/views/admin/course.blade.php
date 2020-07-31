@extends('layout.master')
@section('title')
Admin Course || Ajayi Polytechnic LMS
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
                        <li class="breadcrumb-item active">Courses</li>
                        <button type="button" class="btn btn-info btn-sm m-l-15" data-toggle="modal" data-target="#myModal"><i class="icon-plus"></i> Add New Course</button>
                    </ol>
                </div>
            </div>
            <!-- sample modal content -->
            <div id="myModal" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="post" action="{{ route('savecourse') }}">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Add New Course</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Select Department</label>
                                    <select class="form-control" name="department_id">
                                        <option disabled selected>Select Department</option>
                                        @foreach($department as $dept)
                                        <option value="{{ $dept->id }}">{{ $dept->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Course Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Course Title">
                                </div>
                                <div class="form-group">
                                    <label>Course Code</label>
                                    <input type="text" class="form-control" name="code" placeholder="Enter Course Code">
                                </div>
                                <div class="form-group">
                                    <label>level</label>
                                    <select class="form-control" name="unit">
                                        <option selected disabled>Select Course Level</option>
                                        <option value="ND 1">ND 1</option>
                                        <option value="ND 2">ND 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success waves-effect">Add Course</button>
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
                        <h4 class="card-title">All Courses</h4>
                        <div class="table-responsive">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Department</th>
                                        <th>Title</th>
                                        <th>Code</th>
                                        <th>Level</th>
                                        <th>Created_at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($course as $course)
                                    <tr>
                                        <td>{{ $course->department->title }}</td>
                                        <td>{{ $course->title }}</td>
                                        <td>{{ $course->code }}</td>
                                        <td>{{ $course->unit }}</td>
                                        <td>{{ date('F d, Y', strtotime($course->created_at)) }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu lightSpeedIn">
                                                    <a class="dropdown-item" href="{{ route('coursedetails', $course->id) }}"><i class="icon-plus"></i> Course Topic</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal1{{ $course->id }}"><i class="icon-note"></i> Edit Course</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete{{ $course->id }}"><i class="icon-trash"></i> Delete Course</a>
                                                </div>
                                            </div>
                                            <!-- sample modal content -->
                                            <div id="myModal1{{ $course->id }}" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <form method="post" action="{{ route('updatecourse', $course->id) }}">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myModalLabel">Edit Course</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            </div>
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myModalLabel">Add New Course</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label>Select Department</label>
                                                                    <select class="form-control" name="department_id">
                                                                        <option  selected value="{{ $course->department->id }}">{{ $course->department->title }}</option>
                                                                        @foreach($department as $dept)
                                                                        <option value="{{ $dept->id }}">{{ $dept->title }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Course Title</label>
                                                                    <input type="text" class="form-control" name="title" value="{{ $course->title }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Course Code</label>
                                                                    <input type="text" class="form-control" name="code" value="{{ $course->code }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>level</label>
                                                                    <select class="form-control" name="unit">
                                                                        <option selected value="{{ $course->unit }}">{{ $course->unit }}</option><hr>
                                                                        <option value="ND 1">ND 1</option>
                                                                        <option value="ND 2">ND 2</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-success waves-effect">Update Department</button>
                                                            </div>
                                                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                                                        </form>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->

                                            <!-- sample modal content -->
                                            <div id="delete{{ $course->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4>Delete Course</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h4><strong>Confirm Deletion</strong></h4>
                                                            <p>Are you sure you want to Delete {{ $course->title }} Course</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Close</button>
                                                            <a href="{{ route('deletecourse',$course->id) }}" class="btn btn-success waves-effect waves-light">Yes</a>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                        </td>
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