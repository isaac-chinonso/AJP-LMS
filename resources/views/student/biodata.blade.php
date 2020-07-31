@extends('layout.header2')
@section('title')
Student Biodata || Ajayi Polytechnic LMS
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
        <button class="button mb-2 bg-theme-1 text-white flex"> <i class="fa fa-user"></i> &nbsp Complete Profile</button>
    </div>
    <div class="flex items-center">
            <div class="border-l-2 border-theme-1 pl-4">
                <div class="text-theme-1 font-semibold text-3xl">BIODATA </div>
            </div>
        </div>
    <div class="intro-y box px-5 pt-5 mt-5">
        
        <div class="flex flex-col lg:flex-row border-b border-gray-200 pb-5 -mx-5">
            <div class="flex flex-1 px-5 items-center lg:justify-start">
                <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                    <img alt="passport photograph" class="rounded-md" src="../assets/images/1.jpg" />
                    <div class="absolute mb-1 mr-1 flex items-center justify-center bottom-0 right-0 bg-theme-1 rounded-full p-2"> <i class="w-4 h-4 text-white" data-feather="camera"></i> </div>
                </div>
                <div class="ml-5">
                    <div class="font-medium">{{ $profile->fullname }}</div>
                    <div class="text-gray-600">{{ Auth::user()->username }}</div>
                </div>
            </div>
            <div class="lex mt-6 lg:mt-0 i lg:items-start flex-1 flex-col j text-gray-600 px-5 border-l border-r border-gray-200 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="instagram" class="w-4 h-4 mr-2"></i> Academic session: <a class="ml-auto"> {{ $profile->entry_year }}</a></div>
                <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="twitter" class="w-4 h-4 mr-2"></i> Student status:
                <a class="ml-auto"> 
                @if (Auth::user()->status == 1)
                    ACTIVE
                @elseif (Auth::user()->status == 0)
                    Not Acive
                @endif
                </a>
            </div>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="table">
                <thead>
                    <tr >
                        <th class="border-b-2 font-medium"><i class="fa fa-arrow-circle-right text-theme-1"></i>&nbsp &nbsp Full Name:  </th>
                        <th class="border-b-2 font-medium">{{ $profile->fullname }}</th>
                    </tr>
                    <tr >
                        <th class="border-b-2 font-medium"><i class="fa fa-arrow-circle-right text-theme-1"></i>&nbsp &nbsp Matric number:</th>
                        <th class="border-b-2 font-medium">{{ Auth::user()->username }}</th>
                    </tr>
                    <tr >
                        <th class="border-b-2 font-medium"><i class="fa fa-arrow-circle-right text-theme-1"></i>&nbsp &nbsp Programme type:</th>
                        <th class="border-b-2 font-medium"> {{ $profile->program_type }}</th>
                    </tr>
                    <tr >
                        <th class="border-b-2 font-medium"><i class="fa fa-arrow-circle-right text-theme-1"></i>&nbsp &nbsp Session:</th>
                        <th class="border-b-2 font-medium"> {{ $profile->entry_year }}</th>
                    </tr>
                    <tr >
                        <th class="border-b-2 font-medium"><i class="fa fa-arrow-circle-right text-theme-1"></i>&nbsp &nbsp School:</th>
                        <th class="border-b-2 font-medium"> </th>
                    </tr>
                    <tr >
                        <th class="border-b-2 font-medium"><i class="fa fa-arrow-circle-right text-theme-1"></i>&nbsp &nbsp Department:</th>
                        <th class="border-b-2 font-medium"> {{ $profile->department->title }}</th>
                    </tr>
                    <tr >
                        <th class="border-b-2 font-medium"><i class="fa fa-arrow-circle-right text-theme-1"></i>&nbsp &nbsp Sex:</th>
                        <th class="border-b-2 font-medium"> {{ $profile->gender }}</th>
                    </tr>
                    <tr >
                        <th class="border-b-2 font-medium"><i class="fa fa-arrow-circle-right text-theme-1"></i>&nbsp &nbsp Date of Birth:</th>
                        <th class="border-b-2 font-medium">{{ $profile->dob }} </th>
                    </tr>
                    <tr >
                        <th class="border-b-2 font-medium"><i class="fa fa-arrow-circle-right text-theme-1"></i>&nbsp &nbsp Email:</th>
                        <th class="border-b-2 font-medium"> {{ $profile->email }}</th>
                    </tr>
                    <tr >
                        <th class="border-b-2 font-medium"><i class="fa fa-arrow-circle-right text-theme-1"></i>&nbsp &nbsp Phone:</th>
                        <th class="border-b-2 font-medium"> {{ $profile->phone }}</th>
                    </tr>
                    <tr >
                        <th class="border-b-2 font-medium"><i class="fa fa-arrow-circle-right text-theme-1"></i>&nbsp &nbsp Residential address:</th>
                        <th class="border-b-2 font-medium"> {{ $profile->address }}</th>
                    </tr>
                    <tr >
                        <th class="border-b-2 font-medium"><i class="fa fa-arrow-circle-right text-theme-1"></i>&nbsp &nbsp Nationality:</th>
                        <th class="border-b-2 font-medium"> {{ $profile->nationality }}</th>
                    </tr>
                    <tr >
                        <th class="border-b-2 font-medium"><i class="fa fa-arrow-circle-right text-theme-1"></i>&nbsp &nbsp State of Origin:</th>
                        <th class="border-b-2 font-medium"> {{ $profile->state }}</th>
                    </tr>
                    <tr >
                        <th class="border-b-2 font-medium"><i class="fa fa-arrow-circle-right text-theme-1"></i>&nbsp &nbsp Local Goverment Area (LGA):</th>
                        <th class="border-b-2 font-medium"> {{ $profile->lga }}</th>
                    </tr>
                    <tr >
                        <th class="border-b-2 font-medium"><i class="fa fa-arrow-circle-right text-theme-1"></i>&nbsp &nbsp  Parent / Guardian name:</th>
                        <th class="border-b-2 font-medium"> </th>
                    </tr>
                    <tr >
                        <th class="border-b-2 font-medium"><i class="fa fa-arrow-circle-right text-theme-1"></i>&nbsp &nbsp  Parent / Guardian address:</th>
                        <th class="border-b-2 font-medium"> </th>
                    </tr>
                    <tr >
                        <th class="border-b-2 font-medium"><i class="fa fa-arrow-circle-right text-theme-1"></i>&nbsp &nbsp  Parent / Guardian phone:</th>
                        <th class="border-b-2 font-medium"> </th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<!-- END: Content -->

@endsection