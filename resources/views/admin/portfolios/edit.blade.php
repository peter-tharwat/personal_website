@extends('layouts.admin')
@section('content')
<div class="col-12 py-0 px-3 row">
	 <div class="col-12  pt-4" style="background: #fff;min-height: 80vh">
	 	<div class="col-12 px-3">
	 		<h4 class="font-4">تعديل</h4>
	 	</div>
	 	<form class="col-12" method="POST" action="{{route('admin.portfolios.update',$portfolio)}}">
	 			@csrf 
	 			@method("PUT")
	 	<div class="col-12 p-2 row">
	 		<div class="col-12 col-lg-8 p-2">
		 		
		 		<div class="col-12 px-0 d-flex mb-3">
		 			<div class="col-3 px-2 text-end pt-1">
		 				وصف العمل
		 			</div>
		 			<div class="col-9 px-2" > 
		 				<textarea  class="form-control editor" name="description"   style="min-height: 250px;">{!!$portfolio->description!!}</textarea> 
		 			</div> 
		 		</div>
		 		<div class="col-12 px-0 d-flex mb-3">
		 			<div class="col-3 px-2 text-end pt-1">
		 				الصورة الرئيسية
		 			</div>
		 			<div class="col-9 px-2" > 
		 				<div class="col-12 px-0" id="file-uploader-main">
                                <input name="file" type="file" multiple class="file-uploader-files" data-fileuploader-files='@include('includes.uploaded-files-array',[
                                                        'files'=>$portfolio->images()->where('is_main',1)->get()])' style="opacity: 0" data-fileuploader-listInput="fileuploader-list-file-main" /> 
                                
                                                        {{-- {{dd($portfolio->main_image())}} --}}
                            </div> 
		 			</div> 
		 		</div>
		 		<div class="col-12 px-0 d-flex mb-3">
		 			<div class="col-3 px-2 text-end pt-1">
		 				صور العمل
		 			</div>
		 			<div class="col-9 px-2" > 
		 				 <div class="col-12 px-0" id="file-uploader-second"> 
                                <input type="hidden" name="uploaded_files" value="" class="file-uploader-uploaded-files">
                                <input name="file" type="file" multiple class="file-uploader-files" data-fileuploader-files='@include('includes.uploaded-files-array',[
                                'files'=>$portfolio->images()->where('is_main','<>',1)->get()])' style="opacity: 0" /> 

                                


                            </div> 
		 			</div> 
		 		</div>


 


	 		</div>
	 		<div class="col-12 col-lg-4 p-2">
	 			<div class="col-12 px-0 d-flex mb-3">
		 			<div class="col-3 px-2 text-end pt-1">
		 				عنوان العمل
		 			</div>
		 			<div class="col-9 px-2">
		 				<input type="" name="title" class="form-control" value="{{$portfolio->title}}" required="" min="3" max="255">
		 			</div> 
		 		</div>
	 			<div class="col-12 px-0 d-flex mb-3">
		 			<div class="col-3 px-2 text-end pt-1">
		 				رابط العمل
		 			</div>
		 			<div class="col-9 px-2">
		 				<input type="url" name="link" class="form-control" value="{{$portfolio->link}}"  >
		 			</div> 
		 		</div>
	 		</div>
	 		<div class="col-12  px-0 d-flex mb-3">
	 		 
	 			<div class="col-12 px-2">
	 				<button class="btn pb-2 px-4" id="submitEvaluation"  style="background: #ffa725;border-radius: 0px;color: #fff ">إعتماد</button>
	 			</div> 

	 		</div>

	 	</div>
	 	</form>
	 	 
	  
	 </div> 
</div>
@endsection
@section('scripts')
@include('includes.dropzone',[
'selector'=>'#file-uploader-main',
'url'=> route('admin.portfolio.image-store'),
'method'=>'POST',
'remove_url'=>route('admin.portfolio.image-delete'),
'remove_method'=>'POST',
'remove_selector'=>'#uploaded_main_image',
'enable_selector_after_upload'=>'#submitEvaluation',
'max_files'=>1,
'max_file_size'=>'50',
'accepted_files'=>"['image/*']",
])
@include('includes.dropzone',[
'selector'=>'#file-uploader-second',
'url'=> route('admin.portfolio.image-store'),
'method'=>'POST',
'remove_url'=>route('admin.portfolio.image-delete'),
'remove_method'=>'POST',
'remove_selector'=>'#uploaded_images',
'enable_selector_after_upload'=>'#submitEvaluation',
'max_files'=>100, 
'max_file_size'=>'50',
'accepted_files'=>"['image/*']",
])
@endsection
