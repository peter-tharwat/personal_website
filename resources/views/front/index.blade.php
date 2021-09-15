@php 
$settings=\App\Models\User::first();
$faqs =\App\Models\Faq::get();
@endphp
@extends('layouts.app',[
'page_title'=>$settings->name,
'page_description'=>strip_tags($settings->bio),
'page_image'=>$settings->website_logo()
])
@section('content')

<div class="col-12 p-0">
    <div style="width:650px;max-width: 100%;text-align: justify;" class="mx-auto p-3 font-2 optimize-fonts">
        {!!$settings->bio!!}
    </div>
</div>
<div class="col-12 p-0">
    <div style="width:650px;max-width: 100%;text-align: justify;" class="mx-auto p-3 font-2 naskh ">
        <div class="col-12 px-0">
 
            @foreach($faqs as $faq)
            <div class="card px-1  mb-2"  >
                <div class="card-header border-0 btn  px-2 py-1" id="headingOne{{$faq->id}}" style="background: var(--bg-second-bg);" data-bs-toggle="collapse" href="#collapseExample{{$faq->id}}" role="button" aria-expanded="false" aria-controls="collapseExample{{$faq->id}}" >
                    <h5 class="mb-0">
                        <span class="row d-flex col-12 kufi font-lg-2 font-1 p-2" style="color: var(--bg-color-0)!important">
                            <div class="col px-0 text-start" style="line-height:1.8">
                                {{$faq->question}}
                            </div>
                            <div class="col-1 px-0 d-flex align-items-center justify-content-end">
                                <span class="fas fa-angle-down font-3"></span>
                            </div>
                        </span>
                    </h5>
                </div>
                <div id="collapseExample{{$faq->id}}" class="collapse" aria-labelledby="headingOne{{$faq->id}}" style="">
                    <div class="card-body naskh border-top border-0 font-2 optimize-fonts" style="line-height:1.8;text-align:justify;">{!!$faq->answer!!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
