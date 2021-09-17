@php
$settings  = \App\Models\User::first();
@endphp
@extends('layouts.app',[
  'page_title'=>$client->title,
  'page_description'=>strip_tags($client->description),
  'page_image'=>$client->image()
])
@section('content')
<div class="col-12 p-0">
  <div class="col-12 row p-2">
   <div class="col-12 p-0">
        <div style="width:650px;max-width: 100%;text-align: justify;" class="mx-auto p-3 font-2 optimize-fonts ">
          <h4 class="py-3 text-center">{{$client->title}}</h4>
          <img src="{{$client->image()}}" style="max-width: 100%;" data-fancybox="gallery" class="d-inline-block">
          <br>
          <div class="col-12 p-2" style="overflow:hidden">
            {!!$client->description!!}
          </div>
          <div class="col-12 p-3 d-flex justify-content-center">
          @if($client->link!=null)
              <a href="{{$client->link}}" class="btn btn-success px-4 rounded-pill py-1" style="font-family: 'kufi-arabic',sans-serif!important;">الرابط</a>
          @endif
        </div>
        </div>
    </div>
  </div>
</div>
@endsection