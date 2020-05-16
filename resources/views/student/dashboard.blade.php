@extends('layout.header1')
@section('title')
Student Dashboard || Ajayi Polytechnic LMS
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
                    @if (date("H") < 12) <h1 style="font-size: 22px;">Good morning <i class="mdi mdi-brightness-6"></i> </h1>
                        @elseif (date("H") >= 12 && date("H") < 16) <h1 style="font-size: 22px;">Good afternoon <i class="mdi mdi-brightness-7"></i></h1>
                            @elseif (date("H") >= 15)
                            <h1 style="font-size: 22px;">Good evening <i class="mdi mdi-brightness-2"></i></h1>
                            @endif
                </h4>

            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">You are logged in as {{ Auth::user()->profile->first()->fullname }} ({{ Auth::user()->username }})</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!--Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">PERSONAL DATA</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <strong>MATRIC NUMBER:</strong>
                            </div>
                            <div class="col-md-7">
                                <strong>{{ Auth::user()->username }}</strong>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-4">
                                <strong>FULLNAME:</strong>
                            </div>
                            <div class="col-md-7">
                                <strong style="text-transform: uppercase;">{{ Auth::user()->profile->first()->fullname }}</strong>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-4">
                                <strong>PROGRAMME:</strong>
                            </div>
                            <div class="col-md-7">
                                <strong style="text-transform: uppercase;"></strong>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-4">
                                <strong>SESSION:</strong>
                            </div>
                            <div class="col-md-7">
                                <strong style="text-transform: uppercase;"></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

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