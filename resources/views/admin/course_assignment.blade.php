@extends('layout.master')
@section('title')
Admin Course Assignment || Ajayi Polytechnic LMS
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
                        <li class="breadcrumb-item active">Courses Assignment</li>
                        <button type="button" class="btn btn-info btn-sm m-l-15" data-toggle="modal" data-target="#myModal"><i class="icon-plus"></i> Add New Assignment</button>
                    </ol>
                </div>
            </div>
            <!-- sample modal content -->
            <div id="myModal" class="modal bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <form method="post" action="{{ route('saveassignment') }}" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Add New Assignment</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Course</label>
                                            <select class="form-control" name="course_id">
                                                <option disabled selected>Select Course</option>
                                                @foreach($course as $course)
                                                <option value="{{ $course->id }}">{{ $course->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Topic</label>
                                            <select class="form-control" name="course_topic_id">
                                                <option disabled selected>Select Topic</option>
                                                @foreach($coursetopic as $topic)
                                                <option value="{{ $topic->id }}">{{ $topic->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><span class="text-muted">Title</span></label>
                                            <input type="text" class="form-control" name="title" placeholder="Enter Assignment Title">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><span class="text-muted">Instructions (optional)</span></label>
                                            <input type="text" class="form-control" name="instruction" placeholder="Enter Assignment Instructions">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><span class="text-muted">Assignment Content</span></label>
                                            <textarea class="form-control" name="content"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><span class="text-muted">Attach File (optional)</span></label>
                                            <input type="file" class="form-control" name="attach">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success waves-effect">Add Assignment</button>
                                </div>
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
                        <h4 class="card-title">All Assignments</h4>
                        <div class="table-responsive">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Course</th>
                                        <th>Topic</th>
                                        <th>Title</th>
                                        <th>Instruction</th>
                                        <th>Content</th>
                                        <th>Attachment</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($courseassignment as $assignment)
                                    <tr>
                                        <td>{{ $assignment->course->title }}</td>
                                        <td>{{ $assignment->coursetopic->title }}</td>
                                        <td>{{ $assignment->title }}</td>
                                        <td>{{ $assignment->instruction }}</td>
                                        <td>{{ $assignment->content }}</td>
                                        <td><a href="../upload/coursetopic/{{ $assignment->attach }}" target="_blank">{{ $assignment->attach }}</a></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu lightSpeedIn">
                                                    <a class="dropdown-item" href="#"><i class="icon-note"></i> Edit Assignemnt</a>
                                                    <a class="dropdown-item" href="#"><i class="icon-trash"></i> Delete Assignment</a>
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