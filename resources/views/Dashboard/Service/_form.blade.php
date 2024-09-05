<div class="col-md-6">
    <label for="largeicon">ايكون كبيرة للخدمة باستخدام fontAwesome</label>
    <input type="text" name="big_icon_class"  placeholder="<i> ... </i>" class="form-control" id="largeicon" value="{{old('big_icon_class',$service->big_icon_class)}}">
    @error('big_icon_class')
        <div class="alert alert-danger">
            {{$message}}
        </div>
    @enderror
</div>

<div class="col-md-6">
    <label for="smallicon">ايكون صغيرة للخدمة باستخدام fontAwesome</label>
    <input type="text" name="small_icon_class" placeholder="<i> ... </i>" class="form-control" id="smallicon" value="{{old('small_icon_class',$service->small_icon_class)}}">
    @error('small_icon_class')
        <div class="alert alert-danger">
            {{$message}}
        </div>
    @enderror
</div>
<div class="col-12">
    <label for="title">عنوان الخدمة</label>
    <input type="text" name="title" id="title" class="form-control" placeholder="مثل قانون جنائي، قانون اداري ،.." value="{{old('title',$service->title)}}">
    @error('title')
        <div class="alert alert-danger">
            {{$message}}
        </div>
    @enderror
</div>
<div class="col-12">
    <label for="description">تعريف الخدمة</label>
    <textarea name="content" id="description" class="form-control" placeholder="تعريف مختصر للخدمة">{{old('content',$service->content)}}</textarea>
    @error('content')
        <div class="alert alert-danger">
            {{$message}}
        </div>
    @enderror
</div>
<div class="col-12">
    <label for="status">
        <input type="checkbox" name="status" id="status" @if($service->status =='active') checked @endif>
         الحالة 
    </label>
    
    @error('status')
        <div class="alert alert-danger">
            {{$message}}
        </div>
    @enderror
</div>

<div class="col-12">
    <button class="btn main-btn">
        {{$btn_text}}
    </button>
</div>