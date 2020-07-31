@extends('layout.header3')
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
        <a href="#">Course Topics</a>
    </div>
    <div class="intro-y box overflow-hidden mt-5">
        <div class="border-b border-gray-200 text-center sm:text-left">
            <div class="px-5 py-5">
                <div class="text-theme-1 font-semibold text-3xl"> </div>
                <div class="px-5 sm:px-16 py-5">
                    <div class="overflow-x-auto">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="border-b-2 whitespace-no-wrap">Course</th>
                                    <th class="border-b-2 whitespace-no-wrap">Topics </th>
                                    <th class="border-b-2 whitespace-no-wrap">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($coursetopic as $topic)
                                <tr>
                                    <td class="border-b">{{ $topic->course->title }}</td>
                                    <td class="border-b">{{ $topic->title }}</td>
                                    <td class="border-b"><button class="button _-24 inline-block mb-2 border ______-_____-12">Take Lesson </button></td>
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
<!-- END: Content -->

@endsection