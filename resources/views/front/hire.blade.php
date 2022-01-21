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
    @if($settings->upwork_link!=null)
    <div class="col-12 col-md-6 p-2">
      <a href="{{$settings->upwork_link}}" class="border d-block" target="_blank">
        <div class="col-12 py-2 px-4 font-4">
          <img src="/icons/upwork.webp" style="width:40px" class="d-inline-block"> اب وورك
        </div>
      </a>
    </div>
    @endif
    @if($settings->nafezly_link!=null)
    <div class="col-12 col-md-6 p-2">
      <a href="{{$settings->nafezly_link}}" class="border d-block" target="_blank">
        <div class="col-12 py-2 px-4 font-4">
          <img src="/icons/nafezly.svg" style="width:40px" class="d-inline-block"> نفذلي
        </div>
      </a>
    </div>
    @endif
  </div>
</div>
@endsection