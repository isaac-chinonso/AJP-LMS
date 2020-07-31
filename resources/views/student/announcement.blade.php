@extends('layout.header2')
@section('title')
Student Announcement || Ajayi Polytechnic LMS
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
        <a href="#">Course Announcement</a>
    </div>
    <!-- BEGIN: FAQ Content -->
    <div class="intro-y col-span-12 lg:col-span-8 xl:col-span-9">
                     <div class="intro-y box lg:mt-5">
                         <div class="flex items-center p-5 border-b border-gray-200">
                             <h2 class="font-medium text-base mr-auto">
                               Course Announcement
                             </h2>
                         </div>
                         <div class="accordion p-5">
                             <div class="accordion__pane active border border-gray-200 p-4">
                                 <a href="javascript:;" class="accordion__pane__toggle font-medium block">Admin &nbsp &nbsp <small class="text-gray-700">16:44</small></a> 
                                 <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply _____ text of the printing ___ typesetting industry. Lorem Ipsum ___ been the industry's standard _____ text ever since the 1500_, when an unknown printer ____ a galley of type ___ scrambled it to make _ type specimen book. It ___ survived not only five _________, but also the leap ____ electronic typesetting, remaining essentially _________. </div>
                             </div>
                            
                         </div>
                     </div>
                 </div>
                 <!-- END: FAQ Content -->
</div>
<!-- END: Content -->

@endsection