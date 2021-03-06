@extends('layout.header2')
@section('title')
Student Dashboard || Ajayi Polytechnic LMS
@endsection
@section('content')
<!-- BEGIN: Content -->
<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            @if (date("H") < 12) 
                <span style="font-size: 20px;">Good Morning </sapn><i class="mdi mdi-brightness-6"></i><small>welcome</small>
            @elseif (date("H") >= 12 && date("H") < 16) 
                <span style="font-size: 20px;">Good afternoon  </sapn><i class="mdi mdi-brightness-7"></i><small>welcome</small>
            @elseif (date("H") >= 15)
                <span style="font-size: 20px;">Good evening </sapn><i class="mdi mdi-brightness-2"></i><small>welcome</small>
            @endif
        </h2>
    </div>
    <!-- BEGIN: Profile Info -->
    <div class="intro-y box px-5 pt-5 mt-5">
        <div class="flex flex-col lg:flex-row border-b border-gray-200 pb-5 -mx-5">
            <div class="flex flex-1 px-5 items-center lg:justify-start">
                <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-md" src="../assets/images/1.jpg" />
                    <div class="absolute mb-1 mr-1 flex items-center justify-center bottom-0 right-0 bg-theme-1 rounded-full p-2"> <i class="w-4 h-4 text-white" data-feather="camera"></i> </div>
                </div>
                <div class="ml-5">
                    <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">{{ Auth::user()->profile->first()->fullname }}</div>
                    <div class="text-gray-600">{{ Auth::user()->username }}</div>
                </div>
            </div>
            <div class="lex mt-6 lg:mt-0 i lg:items-start flex-1 flex-col j text-gray-600 px-5 border-l border-r border-gray-200 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="instagram" class="w-4 h-4 mr-2"></i> Department: <a class="ml-auto">{{ $profile->department->title }}</a></div>
                <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="instagram" class="w-4 h-4 mr-2"></i> Programme: <a class="ml-auto"> {{ $profile->program }}</a></div>
                <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="twitter" class="w-4 h-4 mr-2"></i> Session: <a class="ml-auto">{{ $profile->entry_year }}</a></div>
            </div>
            <div class="lex mt-6 lg:mt-0 i lg:items-start flex-1 flex-col j text-gray-600 px-5 border-l border-r border-gray-200 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div class="truncate sm:whitespace-normal flex items-center mt-3"> 
                    <i data-feather="instagram" class="w-4 h-4 mr-2"></i> Courses: 
                    <a class="ml-auto">{{ $course }}</a>
                </div>
                <div class="truncate sm:whitespace-normal flex items-center mt-3"> 
                    <i data-feather="instagram" class="w-4 h-4 mr-2"></i> Upcoming Events: 
                    <a class="ml-auto">0</a>
                </div>
            </div>
        </div>

    </div>
    <!-- END: Profile Info -->
    <div class="intro-y tab-content mt-5">
        <div class="tab-content__pane active" id="dashboard">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Top Categories -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-0 border-b border-gray-200">
                        <h2 class="font-medium text-base mr-auto">
                           Notice Board
                        </h2>
                        <div class="nav-tabs ml-auto sm:flex"> <a href="#" class="py-5 ml-6 btn btn-primary btn-sm">View all </a></div>
                    </div>
                    <div class="p-5">
                        <div class="flex flex-col sm:flex-row">
                        </div>
                    </div>
                </div>
                <!-- END: Top Categories -->
                <!-- BEGIN: Work In Progress -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-0 border-b border-gray-200">
                        <h2 class="font-medium text-base mr-auto">
                           Upcoming Events
                        </h2>
                        <div class="nav-tabs ml-auto sm:flex"> <a href="#" class="py-5 ml-6 btn btn-primary btn-sm">View all </a></div>
                    </div>
                    <div class="p-5">
                        <div class="flex flex-col sm:flex-row">
                        </div>
                    </div>
                </div>
                <!-- END: Work In Progress -->
            </div>
        </div>
    </div>
</div>
<!-- END: Content -->

@endsection