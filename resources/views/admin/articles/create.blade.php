@extends('layouts.admin')
@section('content')
<div class="col-12 py-0 px-3 row">
    <div class="col-12  pt-4" style="background: #fff;min-height: 80vh">
        <div class="col-12 px-3">
            <h4 class="font-4">إضافة</h4>
        </div>
        <form class="col-12" method="POST" action="{{route('admin.articles.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="col-12 p-2 row">
                <div class="col-12 col-lg-8 p-2">
                    <div class="col-12 px-0 d-flex mb-3">
                        <div class="col-3 px-2 text-end pt-1">
                            عنوان المقال
                        </div>
                        <div class="col-9 px-2">
                            <input type="" name="title" class="form-control" value="{{old('title')}}" required="" min="3" max="255">
                        </div>
                    </div>
                    <div class="col-12 px-0 d-flex mb-3">
                        <div class="col-3 px-2 text-end pt-1">
                            وصف المقال
                        </div>
                        <div class="col-9 px-2">
                            <textarea class="form-control editor" name="description" style="min-height: 250px;">{!!old('description')!!}</textarea>
                        </div>
                    </div>
                    <div class="col-12 px-0 d-flex mb-3">
                        <div class="col-3 px-2 text-end pt-1">
                            صورة المقال
                        </div>
                        <div class="col-9 px-2">
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 px-0 d-flex mb-3">
                        <div class="col-3 px-2 text-end pt-1">
                            مقال مميز
                        </div>
                        <div class="col-9 px-2">
                            <div class="form-check form-switch">
                              <input name="featured" class="form-check-input" type="checkbox" id="featured" value="1">
                              <label class="form-check-label" for="featured"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12  px-0 d-flex mb-3">
                    <div class="col-12 px-2">
                        <button class="btn pb-2 px-4" id="submitEvaluation" style="background: #ffa725;border-radius: 0px;color: #fff ">إعتماد</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
