@php
$settings=\App\Models\User::first();
@endphp
@extends('layouts.app',[
  'page_title'=>"راسلني",
  'page_description'=>"صندوق المراسلة ".strip_tags($settings->contact_text)
])
@section('content')
<div class="col-12 p-0">
  <div style="width:650px;max-width: 100%;text-align: justify;" class="mx-auto p-3 font-2 optimize-fonts">
    {!!$settings->contact_text!!}
  </div>
  <div style="width:650px;max-width: 100%;text-align: justify;" class="mx-auto p-3 font-2 naskh">
    <form class="" method="POST" action="{{route('front.contact.store')}}">
    @csrf
      <div class="col-12 py-3">
        <div class="col-12">
          <input type="text" name="contact_name" class="form-control rounded-0" placeholder="اﻹسم" required="" min="3" max="255" value="{{old('contact_name')}}">
        </div>
      </div>
      <div class="col-12 py-3">
        <div class="col-12">
          <input type="email" name="contact_email" class="form-control rounded-0" placeholder="البريد" required="" value="{{old('contact_email')}}">
        </div>
      </div>
      <div class="col-12 py-3">
        <div class="col-12">
          <input type="text" name="contact_phone" class="form-control rounded-0" placeholder="الهاتف" required="" min="99999999" max="9999999999999999" value="{{old('contact_phone')}}">
        </div>
      </div>
      <div class="col-12 py-3">
        <div class="col-12">
          <textarea class="form-control rounded-0" name="contact_message" style="min-height:200px" placeholder="الرسالة" required="" minlength="3" maxlength="1000">{{old('contact_message')}}</textarea>
        </div>
      </div>
      <div class="col-12 py-3">
        <div class="col-12">
          <button class="btn btn-success rounded-0" type="submit">إرسال الرسالة</button>
        </div>
      </div>
    </form>
    </div>
</div>
@endsection