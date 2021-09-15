@php
$settings  = \App\Models\User::first();
@endphp
@extends('layouts.app',[
  'page_title'=>$article->title,
  'page_description'=>strip_tags($article->description),
  'page_image'=>$article->image()
])
@section('content')
<div class="col-12 p-0">
  <div class="col-12 row p-2">
   <div class="col-12 p-0 ">
        <div style="width:650px;max-width: 100%;text-align: justify;" class="mx-auto p-3 font-2 optimize-fonts">
          <h4 class="py-3 text-center">{{$article->title}}</h4>
          <img src="{{$article->image()}}" style="max-width: 100%;" data-fancybox="gallery" class="d-inline-block">
          <br>
          <div class="col-12 p-2" style="overflow:hidden">
            {!!$article->description!!}
          </div>
        </div>
    </div>
  </div>
</div>
@endsection