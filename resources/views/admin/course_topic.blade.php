@extends('layout.master')
@section('title')
Admin Course Topics || Ajayi Polytechnic LMS
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
                        <li class="breadcrumb-item active">Courses Topics</li>
                        <button type="button" class="btn btn-info btn-sm m-l-15" data-toggle="modal" data-target="#myModal"><i class="icon-plus"></i> Add New Course Topic</button>
                    </ol>
                </div>
            </div>
            <!-- sample modal content -->
            <div id="myModal" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="post" action="{{ route('savecoursetopic') }}" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Add New Course Topic</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Select Course</label>
                                    <select class="form-control" name="course_id">
                                        <option disabled selected>Select Course</option>
                                        @foreach($course as $course)
                                        <option value="{{ $course->id }}">{{ $course->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Course Topic</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Course Title">
                                </div>
                                <div class="form-group">
                                    <label>Abstract</label>
                                    <textarea class="form-control" name="abstract"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Attach Content</label>
                                    <input type="file" class="form-control" name="content">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success waves-effect">Add Topic</button>
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
                                        <th>Course</th>
                                        <th>Topic</th>
                                        <th>Abstract</th>
                                        <th>Content</th>
                                        <th>Created_at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($coursetopic as $topic)
                                    <tr>
                                        <td>{{ $topic->course->title }}</td>
                                        <td>{{ $topic->title }}</td>
                                        <td>{{ $topic->abstract }}</td>
                                        <td><a href="../upload/coursetopic/{{ $topic->content }}" target="_blank">{{ $topic->content }}</a></td>
                                        <td>{{ date('F d, Y', strtotime($course->created_at)) }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu lightSpeedIn">
                                                    <a class="dropdown-item" href="#"><i class="icon-note"></i> Edit Topic</a>
                                                    <a class="dropdown-item" href="#"><i class="icon-trash"></i> Delete Topic</a>
                                                </div>
                                            </div>
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
</div>

@endsection