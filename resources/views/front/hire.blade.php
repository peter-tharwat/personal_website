@php 
$settings=\App\Models\User::first();
@endphp
@extends('layouts.app',[
  'page_title'=>"وظفني",
  'page_description'=>"توظيف ".strip_tags($settings->hire_text)
])
@section('content')
<div class="col-12 p-0">
  <div style="width:650px;max-width: 100%;text-align: justify;" class="mx-auto p-3 font-2 optimize-fonts">
      {!!$settings->hire_text!!}
  </div>
  <div style="width:650px;max-width: 100%;text-align: justify;" class="mx-auto p-3 font-2  row justify-content-center" >
    <div class="col-12 col-md-6 p-2">
      <a href="{{$settings->upwork_link}}" class="border d-block" target="_blank">
        <div class="col-12 py-2 px-4 font-4">
          <img src="/icons/upwork.webp" style="width:40px" class="d-inline-block"> اب وورك
        </div>
      </a>
    </div>
    <div class="col-12 col-md-6 p-2">
      <a href="{{$settings->nafezly_link}}" class="border d-block" target="_blank">
        <div class="col-12 py-2 px-4 font-4">
          <img src="/icons/nafezly.svg" style="width:40px" class="d-inline-block"> نفذلي
        </div>
      </a>
    </div>
    <div class="col-12 col-md-6 p-2">
      <a href="{{$settings->linkedin_link}}" class="border d-block" target="_blank">
        <div class="col-12 py-2 px-4 font-4">
         <span class="fab fa-linkedin-in" style="color:{{$settings->main_color}}"></span> لينكد ان
        </div>
      </a>
    </div>
    <div class="col-12 col-md-6 p-2">
      <a href="{{$settings->stackoverflow_link}}" class="border d-block" target="_blank">
        <div class="col-12 py-2 px-4 font-4">
         <span class="fab fa-stack-overflow" style="color:{{$settings->main_color}}"></span> ستاك اوفر فلو
        </div>
      </a>
    </div>
    <div class="col-12 col-md-6 p-2">
      <a href="{{$settings->github_link}}" class="border d-block" target="_blank">
        <div class="col-12 py-2 px-4 font-4">
         <span class="fab fa-github" style="color:{{$settings->main_color}}"></span> جيت هب
        </div>
      </a>
    </div>
  </div>
</div>
@endsection