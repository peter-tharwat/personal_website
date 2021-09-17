@php
$settings  = \App\Models\User::first();
$articles = \App\Models\Article::orderBy('id','DESC')->paginate();
@endphp
@extends('layouts.app',[
  'page_title'=>"كتاباتي",
  'page_description'=>"كتاباتي ".$settings->name
])
@section('content')
<div class="col-12 p-0">
  <div style="width:650px;max-width: 100%;text-align: justify;" class="mx-auto p-3 font-2 optimize-fonts">
    {!!$settings->articles_text!!}
  </div>

  <div class="col-12 row p-2 d-flex justify-content-center">
    @foreach($articles as $article)
    <div class="col-12 col-12 col-md-6 col-lg-3 ">
      <a href="{{route('front.article.show',$article)}}" class="d-block">
        <div class="col-12 p-0 ">
          <img  src="{{$article->image()}}" style="width:100%" >
          <div class="col-12 p-2 text-center ">
            <h2 style="font-size:15px;line-height: 1.8;">{{$article->title}}</h2>
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
  <div class="col-12 p-3">
    {{$articles->links()}}
  </div>
</div>
@endsection