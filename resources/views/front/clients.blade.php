@php
$settings  = \App\Models\User::first();
$clients = \App\Models\Client::orderBy('id','DESC')->paginate();
@endphp
@extends('layouts.app',[
  'page_title'=>"معرض العملاء",
  'page_description'=>"معرض عملاء ".$settings->name
])
@section('content')
<div class="col-12 p-0">

  <div style="width:650px;max-width: 100%;text-align: justify;" class="mx-auto p-3 font-2 optimize-fonts">
    {!!$settings->clients_text!!}
  </div>

  <div class="col-12 row p-2 d-flex justify-content-center">
    @foreach($clients as $client)
    <div class="col-12 col-12 col-md-6 col-lg-3 ">
      <a href="{{route('front.client.show',$client)}}" class="d-block">
        <div class="col-12 p-0 justify-content-center d-flex row">
          <div class="col-12 p-0 text-center">
            
          
          <img  src="{{$client->image()}}" style="max-width:100%;max-height: 200px;" class="d-inline-block p-3">
          <div class="col-12 p-2 text-center ">
            <h2 style="font-size:15px;line-height: 1.8;">{{$client->title}}</h2>
          </div>
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
  <div class="col-12 p-3">
    {{$clients->links()}}
  </div>
</div>
@endsection