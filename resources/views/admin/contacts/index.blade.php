@extends('layouts.admin')
@section('content')
<div class="col-12 py-2 px-3 row">
	 <div class="col-12 px-2 pt-4 " style="background: #fff;min-height: 80vh">
	 	<div class="col-12 py-4 justify-content-between row d-flex">
	 		<div class="col-12 col-lg-4 px-2 mb-2">
	 			<form method="get" action="{{route('admin.contact.index')}}">
	 				<input type="" name="key" class="form-control" style="border-radius: 0px;border:1px solid #ddd" placeholder="بحث .. " autofocus="" value="{{request()->get('key')}}">
	 			</form> 
	 		</div>
	 	 

	 	</div> 
	 	<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">الاسم</th>
		      <th scope="col">الجوال</th>
		      <th scope="col">البريد</th>
		      <th scope="col">الرسالة</th>
		      <th scope="col">تحكم</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($contacts as $contact)
		    <tr>
		      <td scope="col">{{$contact->id}}</td>
		      <td scope="col">{{$contact->contact_name}}</td>
		      <td scope="col">{{$contact->contact_email}}</td>
		      <td scope="col">{{$contact->contact_phone}}</td>
		      <td scope="col">{{$contact->contact_message}}</td>
		      
		      <td class=" row d-flex">
		      	<form method="POST" action="{{route('admin.contact.destroy',$contact)}}" id="contact_delete_{{$contact->id}}">@csrf @method('DELETE')</form>
		 
		      	
		      	<a href="#" style="width: 30px;height: 30px;color: #fff;background: #c00;border-radius: 2px" class="d-flex align-items-center justify-content-center mx-1" onclick='var result = confirm("هل أنت متأكد من عملية الحذف");if (result) {$("#contact_delete_{{$contact->id}}").submit();}'>
		      		<span class="fal fa-trash"></span>
		      	</a>


		      </td>
		    </tr>
		    @endforeach
		  </tbody>
		</table> 
		<div class="col-12 px-0 py-2">
			{{$contacts->appends(request()->query())->render() }}
		</div>
	 </div> 
</div>
@endsection
