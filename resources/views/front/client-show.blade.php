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
        <div style="width:650px;max-width: 100%;text-align: justify;" class="mx-auto p-3 font-2 optimize-fonts border">
          <h4 class="py-3 text-center">{{$client->title}}</h4>
          <img src="{{$client->image()}}" style="width: 100%;" data-fancybox="gallery">
          <br>
            {!!$client->description!!}

          <div class="col-12 p-3">
          @if($client->link!=null)
              <a href="{{$client->link}}" class="btn btn-success">الرابط</a>
          @endif
        </div>
        </div>
    </div>
  </div>
</div>
@endsection