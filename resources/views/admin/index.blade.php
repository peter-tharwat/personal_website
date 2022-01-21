@php
$settings=\App\Models\User::first();
@endphp
@extends('layouts.admin')
@section('content')
<div class="col-12 py-2 px-3 row">

	

 
	
	<div class="col-6 col-sm-4 col-lg-3 col-xl-2 px-2 mb-3">
		<div class="col-12 px-0 py-2 d-flex " style="background: #fff;">
			<div style="width: 80px;" class="p-2">
				<div class="col-12 px-0 text-center d-flex align-items-center justify-content-center" style="background: #11233b;height: 64px;border-radius: 50%;">
					<span class="fas fa-users font-5" style="color: #fff"></span>
				</div>
			</div>
			<div style="width: calc(100% - 80px)" class="px-2 py-2">
				<h6 class="font-1">العملاء</h6>
				<h6 class="font-3">{{\App\Models\Client::count()}}</h6>
			</div>
		</div>
	</div>


	<div class="col-6 col-sm-4 col-lg-3 col-xl-2 px-2 mb-3">
		<div class="col-12 px-0 py-2 d-flex " style="background: #fff;">
			<div style="width: 80px;" class="p-2">
				<div class="col-12 px-0 text-center d-flex align-items-center justify-content-center" style="background: #11233b;height: 64px;border-radius: 50%;">
					<span class="fas fa-images font-5" style="color: #fff"></span>
				</div>
			</div>
			<div style="width: calc(100% - 80px)" class="px-2 py-2">
				<h6 class="font-1">الأعمال</h6>
				<h6 class="font-3">{{\App\Models\Portfolio::count()}}</h6>
			</div>
		</div>
	</div>
	<div class="col-6 col-sm-4 col-lg-3 col-xl-2 px-2 mb-3">
		<div class="col-12 px-0 py-2 d-flex " style="background: #fff;">
			<div style="width: 80px;" class="p-2">
				<div class="col-12 px-0 text-center d-flex align-items-center justify-content-center" style="background: #11233b;height: 64px;border-radius: 50%;">
					<span class="fas fa-phone font-5" style="color: #fff"></span>
				</div>
			</div>
			<div style="width: calc(100% - 80px)" class="px-2 py-2">
				<h6 class="font-1">طلبات الإتصال</h6>
				<h6 class="font-3">{{\App\Models\Contact::count()}}</h6>
			</div>
		</div>
	</div>
	<div class="col-6 col-sm-4 col-lg-3 col-xl-2 px-2 mb-3">
		<div class="col-12 px-0 py-2 d-flex " style="background: #fff;">
			<div style="width: 80px;" class="p-2">
				<div class="col-12 px-0 text-center d-flex align-items-center justify-content-center" style="background: #11233b;height: 64px;border-radius: 50%;">
					<span class="fas fa-book font-5" style="color: #fff"></span>
				</div>
			</div>
			<div style="width: calc(100% - 80px)" class="px-2 py-2">
				<h6 class="font-1">الكتابات</h6>
				<h6 class="font-3">{{\App\Models\Article::count()}}</h6>
			</div>
		</div>
	</div>

	<div class="col-12 px-0 row d-flex">
		<div class="col-12 col-lg-5 d-flex row" style="background: #fff">
			<div class="col-4 py-4 text-center">
				<span class="fas fa-images font-10" style="height: 65px"></span>
				<div class="col-12 text-center font-2 mt-2">
					الأعمال
				</div>
				<div class="col-12 text-center py-3">
					<a href="{{route('admin.portfolios.create')}}">
						<button class="btn pb-2 px-4 pt-1" style="border-radius: 50px;background: #03a9f4;color:#fff">إضافة</button>
					</a>
				</div>
			</div>
			<div class="col-4 py-4 text-center">
				<span class="fas fa-book font-10" style="height: 65px"></span>
				<div class="col-12 text-center font-2 mt-2">
					الكتابات 
				</div>
				<div class="col-12 text-center py-3">
					<a href="{{route('admin.articles.create')}}">
						<button class="btn pb-2 px-4 pt-1" style="border-radius: 50px;background: #03a9f4;color:#fff">إضافة</button>
					</a>
				</div>
			</div>
			<div class="col-4 py-4 text-center">
				<span class="fad fa-users font-10" style="height: 65px"></span>
				<div class="col-12 text-center font-2 mt-2">
					العملاء
				</div>
				<div class="col-12 text-center py-3">
					<a href="{{route('admin.clients.create')}}">
						<button class="btn pb-2 px-4 pt-1" style="border-radius: 50px;background: #03a9f4;color:#fff">إضافة</button>
					</a>
				</div>
			</div>
			

		</div>
	</div>
	 

</div>
@endsection