@extends('layout.master1')
@section('title')
Admin Departmental Courses || Ajayi Polytechnic LMS
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
                        <li class="breadcrumb-item active">Departmental Courses</li>
                    </ol>
                </div>
            </div>
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
                        <h4 class="card-title">Departmental Courses</h4>
                        <div class="table-responsive">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Department</th>
                                        <th>Course Title</th>
                                        <th>Created_at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($coursedetails as $course)
                                    <tr>
                                        <td>{{ $course->department->title }}</td>
                                        <td>{{ $course->title }}</td>
                                        <td>{{ date('F d, Y', strtotime($course->created_at)) }}</td>
                                        <td>
                                            
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