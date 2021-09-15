@extends('layouts.admin')
@section('content')
<div class="col-12 py-0 px-3 row">
	 <div class="col-12  pt-4" style="background: #fff;min-height: 80vh">
	 	<form class="col-12 row" method="POST" action="{{route('admin.settings.update')}}" enctype="multipart/form-data" >
	 			@csrf
	 	<div class="col-12 px-3">
	 		<h4 class="font-4">تعديل الموقع</h4>
	 	</div>
	 	<div class="col-12 col-lg-4 px-3 py-5">
	 		 
	 		
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				اسم الموقع
	 			</div>
	 			<div class="col-9 px-2">
	 				<input type="" name="name" class="form-control" value="{{$settings->name}}" required="" min="3" max="255">
	 			</div> 
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				بريد الدخول
	 			</div>
	 			<div class="col-9 px-2">
	 				<input type="email" name="email" class="form-control" value="{{$settings->email}}" required="" min="3" max="255">
	 			</div> 
	 		</div>
	 		
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				كلمة المرور
	 			</div>
	 			<div class="col-9 px-2 ">
	 				<input type="hidden" name="password" class="form-control"  >
	 				<input type="password" name="password" class="form-control" autocomplete="off" >
	 				<div class="font-1"><span class="fal fa-info-circle"></span> اتركها فارغة لعدم التغيير</div>
	 			</div> 
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<br>
	 			<hr>
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				الصورة الشخصية
	 			</div>
	 			<div class="col-9 px-2">
	 				<input type="file" name="avatar" class="form-control" >
	 				<div class="col-12 p-2">
	 					<img src="{{$settings->avatar()}}" style="width:100px;max-height: 100px;border-radius: 50%;">
	 				</div>
	 			</div> 
	 		</div>

	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				لوجو الموقع
	 			</div>
	 			<div class="col-9 px-2">
	 				<input type="file" name="website_logo" class="form-control" >
	 				<div class="col-12 p-2">
	 					<img src="{{$settings->website_logo()}}" style="width:100px;max-height: 100px;">
	 				</div>
	 			</div> 
	 		</div>

	 		<div class="col-12 px-0 d-flex mb-3">
	 			<br>
	 			<hr>
	 		</div>

	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				نوع القالب
	 			</div>
	 			<div class="col-9 px-2">
	 				<select class="form-control" name="default_view">
	 					<option value="front" selected="">الإفتراضي</option>
	 				</select>
	 			</div> 
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				اللون الرئيسي
	 			</div>
	 			<div class="col-9 px-2">
	 				<input type="color" name="main_color"  value="{{$settings->main_color}}" >
	 			</div> 
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				اللون الفرعي
	 			</div>
	 			<div class="col-9 px-2">
	 				<input type="color" name="hover_color"  value="{{$settings->hover_color}}" >
	 			</div> 
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<br>
	 			<hr>
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				رقم الهاتف
	 			</div>
	 			<div class="col-9 px-2">
	 				<input type="" name="phone" class="form-control" value="{{$settings->phone}}" >
	 			</div> 
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				رقم الهاتف 2
	 			</div>
	 			<div class="col-9 px-2">
	 				<input type="" name="phone2" class="form-control" value="{{$settings->phone2}}" >
	 			</div> 
	 		</div>

	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				بريد التواصل
	 			</div>
	 			<div class="col-9 px-2">
	 				<input type="email" name="contact_email" class="form-control" value="{{$settings->contact_email}}" >
	 			</div> 
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				رابط فيس بوك
	 			</div>
	 			<div class="col-9 px-2">
	 				<input type="url" name="facebook_link" class="form-control" value="{{$settings->facebook_link}}" >
	 			</div> 
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				رابط تويتر
	 			</div>
	 			<div class="col-9 px-2">
	 				<input type="url" name="twitter_link" class="form-control" value="{{$settings->twitter_link}}" >
	 			</div> 
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				رابط انستجرام
	 			</div>
	 			<div class="col-9 px-2">
	 				<input type="url" name="instagram_link" class="form-control" value="{{$settings->instagram_link}}" >
	 			</div> 
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				رابط يوتيوب
	 			</div>
	 			<div class="col-9 px-2">
	 				<input type="url" name="youtube_link" class="form-control" value="{{$settings->youtube_link}}" >
	 			</div> 
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				رابط تيلي جرام
	 			</div>
	 			<div class="col-9 px-2">
	 				<input type="url" name="telegram_link" class="form-control" value="{{$settings->telegram_link}}" >
	 			</div> 
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				رابط واتس أب
	 			</div>
	 			<div class="col-9 px-2">
	 				<input type="url" name="whatsapp_link" class="form-control" value="{{$settings->whatsapp_link}}" >
	 			</div> 
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				رابط تيك توك
	 			</div>
	 			<div class="col-9 px-2">
	 				<input type="url" name="tiktok_link" class="form-control" value="{{$settings->tiktok_link}}" >
	 			</div> 
	 		</div>

	 		<div class="col-12 px-0 d-flex mb-3">
	 			<br>
	 			<hr>
	 		</div>

	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				رابط اب وورك
	 			</div>
	 			<div class="col-9 px-2">
	 				<input type="url" name="upwork_link" class="form-control" value="{{$settings->upwork_link}}" >
	 			</div> 
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				رابط نفذلي
	 			</div>
	 			<div class="col-9 px-2">
	 				<input type="url" name="nafezly_link" class="form-control" value="{{$settings->nafezly_link}}" >
	 			</div> 
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				رابط لينكد ان
	 			</div>
	 			<div class="col-9 px-2">
	 				<input type="url" name="linkedin_link" class="form-control" value="{{$settings->linkedin_link}}" >
	 			</div> 
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				رابط جيت هب
	 			</div>
	 			<div class="col-9 px-2">
	 				<input type="url" name="github_link" class="form-control" value="{{$settings->github_link}}" >
	 			</div> 
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				رابط ستاك اوفر فلو
	 			</div>
	 			<div class="col-9 px-2">
	 				<input type="url" name="stackoverflow_link" class="form-control" value="{{$settings->stackoverflow_link}}" >
	 			</div> 
	 		</div>

	 		<div class="col-12 px-0 d-flex mb-3">
	 			<br>
	 			<hr>
	 		</div>

	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				رابط مخصص 1
	 			</div>
	 			<div class="col-9 px-2">
	 				<input type="url" name="another_link1" class="form-control" value="{{$settings->another_link1}}" >
	 			</div> 
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				رابط مخصص 2
	 			</div>
	 			<div class="col-9 px-2">
	 				<input type="url" name="another_link2" class="form-control" value="{{$settings->another_link2}}" >
	 			</div> 
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				رابط مخصص 3
	 			</div>
	 			<div class="col-9 px-2">
	 				<input type="url" name="another_link3" class="form-control" value="{{$settings->another_link3}}" >
	 			</div> 
	 		</div>


	 		<div class="col-12 px-0 d-flex mb-3">
	 			<br>
	 			<hr>
	 		</div>

	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				رابط باتريون
	 			</div>
	 			<div class="col-9 px-2">
	 				<input type="url" name="patreon_link" class="form-control" value="{{$settings->patreon_link}}" >
	 			</div> 
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				رابط باي بال
	 			</div>
	 			<div class="col-9 px-2">
	 				<input type="url" name="paypal_link" class="form-control" value="{{$settings->paypal_link}}" >
	 			</div> 
	 		</div>


	 		<div class="col-12 px-0 d-flex mb-3">
	 			<br>
	 			<hr>
	 		</div>

	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				كود ريكابشا
	 			</div>
	 			<div class="col-9 px-2">
	 				<input type="" name="google_recapcha" class="form-control" value="{{$settings->google_recapcha}}" >
	 			</div> 
	 		</div>
	 		
		 	 	

	 		

















	 		

	 		

	 	</div>
	 	<div class="col-12 col-lg-8 px-3 py-5">

	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				النبذة
	 			</div>
	 			<div class="col-9 px-2">
	 				<textarea  name="bio" class="form-control editor">{{$settings->bio}}</textarea>
	 			</div> 
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<br>
	 			<hr>
	 		</div>
			<div class="col-12 px-0 d-flex mb-3">
		 		 <div class="col-3 px-2 text-end pt-1">
	                تفعيل معرض الأعمال
	            </div>
	            <div class="col-9 px-2 pt-2">
	                <div class="form-check form-switch">
	                  <input name="show_portfolios" class="form-check-input" type="checkbox" id="show_portfolios" value="1" {{$settings->show_portfolios==1?'checked':''}} value="1">
	                </div>
	            </div>
	        </div>

	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				نص معرض الأعمال
	 			</div>
	 			<div class="col-9 px-2">
	 				<textarea name="portfolios_text" id="portfolios_text" class="form-control editor">{{$settings->portfolios_text}}</textarea>
	 			</div> 
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<br>
	 			<hr>
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
		 		 <div class="col-3 px-2 text-end pt-1">
	                تفعيل المقالات
	            </div>
	            <div class="col-9 px-2 pt-2">
	                <div class="form-check form-switch">
	                  <input name="show_articles" class="form-check-input" type="checkbox" id="show_articles" value="1" {{$settings->show_articles==1?'checked':''}}>
	                </div>
	            </div>
	        </div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				نص المقالات
	 			</div>
	 			<div class="col-9 px-2">
	 				<textarea name="articles_text" class="form-control editor">{{$settings->articles_text}}</textarea>
	 			</div> 
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<br>
	 			<hr>
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
		 		 <div class="col-3 px-2 text-end pt-1">
	                تفعيل العملاء
	            </div>
	            <div class="col-9 px-2 pt-2">
	                <div class="form-check form-switch">
	                  <input name="show_clients" class="form-check-input" type="checkbox" id="show_clients" value="1" {{$settings->show_clients==1?'checked':''}}>
	                </div>
	            </div>
	        </div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				نص العملاء
	 			</div>
	 			<div class="col-9 px-2">
	 				<textarea name="clients_text" class="form-control editor">{{$settings->clients_text}}</textarea>
	 			</div> 
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<br>
	 			<hr>
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
		 		 <div class="col-3 px-2 text-end pt-1">
	                تفعيل الدعم
	            </div>
	            <div class="col-9 px-2 pt-2">
	                <div class="form-check form-switch">
	                  <input name="show_donate" class="form-check-input" type="checkbox" id="show_donate" value="1" {{$settings->show_donate==1?'checked':''}}>
	                </div>
	            </div>
	        </div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				نص الدعم
	 			</div>
	 			<div class="col-9 px-2">
	 				<textarea name="donate_text" class="form-control editor">{{$settings->donate_text}}</textarea>
	 			</div> 
	 		</div>
	 		
	 		
	 		
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<br>
	 			<hr>
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
		 		 <div class="col-3 px-2 text-end pt-1">
	                تفعيل تواصل معنا
	            </div>
	            <div class="col-9 px-2 pt-2">
	                <div class="form-check form-switch">
	                  <input name="show_contact" class="form-check-input" type="checkbox" id="show_contact" value="1" {{$settings->show_contact==1?'checked':''}}>
	                </div>
	            </div>
	        </div>
	        <div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				نص تواصل معنا
	 			</div>
	 			<div class="col-9 px-2">
	 				<textarea name="contact_text" class="form-control editor">{{$settings->contact_text}}</textarea>
	 			</div> 
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<br>
	 			<hr>
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
		 		 <div class="col-3 px-2 text-end pt-1">
	                تفعيل وظفني
	            </div>
	            <div class="col-9 px-2 pt-2">
	                <div class="form-check form-switch">
	                  <input name="show_hire" class="form-check-input" type="checkbox" id="show_hire" value="1" {{$settings->show_hire==1?'checked':''}}>
	                </div>
	            </div>
	        </div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				نص وظفني
	 			</div>
	 			<div class="col-9 px-2">
	 				<textarea name="hire_text" class="form-control editor">{{$settings->hire_text}}</textarea>
	 			</div> 
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<br>
	 			<hr>
	 		</div>


	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				كود الهيدر
	 			</div>
	 			<div class="col-9 px-2">
	 				<textarea name="header_text" class="form-control" style="min-height: 200px;text-align: left;direction: ltr;">{{$settings->header_text}}</textarea>
	 			</div> 
	 		</div>
	 		<div class="col-12 px-0 d-flex mb-3">
	 			<div class="col-3 px-2 text-end pt-1">
	 				كود الفوتر
	 			</div>
	 			<div class="col-9 px-2">
	 				<textarea name="footer_text" class="form-control" style="min-height: 200px;text-align: left;direction: ltr;">{{$settings->footer_text}}</textarea>
	 			</div> 
	 		</div>
	 		
			
	 		







	 	</div>

	 	<div class="col-12 px-0 d-flex mb-3">
 		 
 			<div class="col-10 px-2">
 				<button class="btn pb-2 px-4" style="background: #ffa725;border-radius: 0px;color: #fff ">إعتماد</button>
 			</div> 

 		</div>

	  	</form>
	 </div> 
</div>
@endsection