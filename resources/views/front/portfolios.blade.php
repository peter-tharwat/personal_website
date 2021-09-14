@extends('layouts.app',[
  'page_title'=>"Peter Tharwat",
  'page_description'=>"Peter Tharwat",
  'page_image'=>"Image"
])
@section('content')
<div class="col-12 p-0">

  <div class="col-12 row p-2">
    <div class="col-12 col-12 col-md-6 col-lg-3 ">
      <div class="col-12 p-0 ">
        <img class="lazy" data-src="https://cdn.dribbble.com/users/1186261/screenshots/3718681/_______.gif" style="width:100%;" data-src="http://127.0.0.1:8000/images/avatar.jpg">
        <div class="col-12 p-2 border ">
          <h2 style="font-size:15px;line-height: 1.8;">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</h2>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection