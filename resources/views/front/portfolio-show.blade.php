@php
$settings  = \App\Models\User::first();
@endphp
@extends('layouts.app',[
  'page_title'=>$portfolio->title,
  'page_description'=>strip_tags($portfolio->description),
  'page_image'=>$portfolio->main_image_url()
])
@section('content')
<div class="col-12 p-0">
  <div class="col-12 row p-2">
   <div class="col-12 p-0">
      <div style="width:650px;max-width: 100%;text-align: justify;" class="mx-auto p-3 font-2 optimize-fonts ">
        <h4 class="py-3">{{$portfolio->title}}</h4>
        @php
        $images = $portfolio->images()->orderBy('is_main','DESC')->orderBy('id','DESC')->get();
        @endphp
        @foreach($images as $image)
        <img src="{{env("STORAGE_URL").$image->path.$image->name}}" style="width: 100%;" data-fancybox="gallery">
        @endforeach
        <br>
        <div class="col-12 p-2" style="overflow:hidden">
          {!!$portfolio->description!!}
        </div>
          
        <div class="col-12 p-3">
          @if($portfolio->link!=null)
              <a href="{{$portfolio->link}}" class="btn btn-success">الرابط</a>
          @endif
        </div>
        

      </div>
  </div>
  </div>
</div>
@endsection