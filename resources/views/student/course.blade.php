@extends('layout.header2')
@section('title')
Student Courses || Ajayi Polytechnic LMS
@endsection
@section('content')
<!-- BEGIN: Content -->
<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            @if (date("H") < 12) 
                <span >Good Morning </sapn><i class="mdi mdi-brightness-6"></i><small> welcome</small>
            @elseif (date("H") >= 12 && date("H") < 16) 
                <span >Good afternoon  </sapn><i class="mdi mdi-brightness-7"></i><small> welcome</small>
            @elseif (date("H") >= 15)
                <span >Good evening </sapn><i class="mdi mdi-brightness-2"></i><small> welcome</small>
            @endif
        </h2>
        <a href="#">Courses</a>
    </div>
    <div class="intro-y tab-content mt-5">
        <div class="tab-content__pane active" id="dashboard">
            <div class="grid grid-cols-12 gap-6">
                @foreach( $course as $courses)
                <div class="intro-y box col-span-12 lg:col-span-4">
                    <div class="flex items-center px-5 py-5 sm:py-0 border-b border-gray-200">
                        <h2 class="font-medium text-base mr-auto">
                            <b>{{ $courses->code }}</b>
                        </h2>
                        <div class="nav-tabs ml-auto sm:flex"> <a href="{{ route('studentcoursetopics', $courses->id) }}" class="py-5 ml-6 btn btn-primary btn-sm">See Topics </a></div>
                    </div>
                    <div class="p-5">
                        <div class="flex flex-col sm:flex-row">
                            <h2 style="text-transform:uppercase;"><b>{{ $courses->title }}</b></h2>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- END: Content -->

@endsection