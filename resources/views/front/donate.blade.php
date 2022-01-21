@php 
$settings=\App\Models\User::first();
@endphp
@extends('layouts.app',[
  'page_title'=>"دعم - تبرع",
  'page_description'=>"دعم - تبرع ." .strip_tags($settings->donate_text)
])
@section('content')
<div class="col-12 p-0">
  <div style="width:650px;max-width: 100%;text-align: justify;" class="mx-auto p-3 font-2 optimize-fonts">
      {!!$settings->donate_text!!}
  </div>
  <div style="width:650px;max-width: 100%;text-align: justify;" class="mx-auto p-3 font-2  row" >
    @if($settings->paypal_link!=null)
    <div class="col-12 col-md-6 p-2">
      <a href="{{$settings->paypal_link}}" class="border d-block" target="_blank">
        <div class="col-12 py-2 px-4 font-4">
          <span class="fab fa-paypal" style="color:{{$settings->main_color}};"></span> باي بال
        </div>
      </a>
    </div>
    @endif
    @if($settings->patreon_link!=null)
    <div class="col-12 col-md-6 p-2">
      <a href="{{$settings->patreon_link}}" class="border d-block" target="_blank">
        <div class="col-12 py-2 px-4 font-4">
          <span class="fab fa-patreon" style="color:{{$settings->main_color}};"></span> باتريون
        </div>
      </a>
    </div>
    @endif
    
  </div>
</div>
@endsection