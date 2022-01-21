@extends('layouts.admin')
@section('content')
<div class="col-12 py-2 px-3 row">
	 <div class="col-12 px-2 pt-4 " style="background: #fff;min-height: 80vh">
	 	<div class="col-12 py-4 justify-content-between row d-flex">
	 		<div class="col-12 col-lg-4 px-2 mb-2">
	 			<form method="get" action="{{route('admin.portfolios.index')}}">
	 				<input type="" name="key" class="form-control" style="border-radius: 0px;border:1px solid #ddd" placeholder="بحث .. " autofocus="" value="{{request()->get('key')}}">
	 			</form> 
	 		</div>
	 		<div class="col-12 col-lg-4 px-2 justify-content-end d-flex mb-2">
	 			<a href="{{route('admin.portfolios.create')}}">
	 				<button class="btn btn-primary pb-2 rounded-0"><span class="fas fa-plus"></span> إضافة عمل</button>
	 			</a>
	 		</div>

	 	</div> 
	 	<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">الصورة</th>
		      <th scope="col">العنوان</th>
		      <th scope="col">الرابط</th>
		      <th scope="col">تحكم</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($portfolios as $portfolio)
		    <tr>
		      <td scope="col">{{$portfolio->id}}</td>
		      <td scope="col">
		      	<img src="{{$portfolio->main_image_url()}}" style="width:50px;max-height: 100px;"></td>
		      <td scope="col">{{$portfolio->title}}</td>
		      <td scope="col"><a href="{{$portfolio->link}}" target="_block">{{$portfolio->link}}</a></td>
		      <td class=" row d-flex">
		      	<form method="POST" action="{{route('admin.portfolios.destroy',$portfolio)}}" id="portfolio_delete_{{$portfolio->id}}">@csrf @method('DELETE')</form>
		      	<a href="{{route('admin.portfolios.edit',$portfolio)}}" style="width: 30px;height: 30px;color: #fff;background: #2381c6;border-radius: 2px" class="d-flex align-items-center justify-content-center mx-1">
		      		<span class="fal fa-edit"></span>
		      	</a> 
		      	
		      	<a href="#" style="width: 30px;height: 30px;color: #fff;background: #c00;border-radius: 2px" class="d-flex align-items-center justify-content-center mx-1" onclick='var result = confirm("هل أنت متأكد من عملية الحذف");if (result) {$("#portfolio_delete_{{$portfolio->id}}").submit();}'>
		      		<span class="fal fa-trash"></span>
		      	</a>


		      </td>
		    </tr>
		    @endforeach
		  </tbody>
		</table> 
		<div class="col-12 px-0 py-2">
			{{$portfolios->appends(request()->query())->render() }}
		</div>
	 </div> 
</div>
@endsection
