<div class="row g-3">
    <div class="col-md-6">
        <label for="mainImg">الصورة الرئيسيية للمقال</label>
        <input type="file" name="article" id="mainImg" accept="image/*" class="form-control">
        @error('article')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="service_id">القسم التابع له</label>
        <select name="service_id" id="service_id" class="form-control">
            @foreach ($services as $service)
                <option value="{{$service->id}}" @if(old('service_id',$service->id) == $article->service_id) checked @endif>
                    {{$service->title}}
                </option>
            @endforeach
        </select>
        @error('service_id')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="col-12">
        <label for="title">عنوان المقال</label>
        <input type="text" id="title" name="title" value="{{old('title',$article->title)}}" class="form-control">
        @error('title')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="col-12">

        <label for="editor">محتوي المقال</label>

        <textarea name="content" id="editor">{{old('content',$article->content)}}</textarea>


        <script>
        const editor = Jodit.make("#editor", {
            "useSearch": false,
            "spellcheck": true,
            "language": "ar",
            "direction": "rtl",
            "minHeight": 300,
            "buttons": "bold,italic,underline,strikethrough,eraser,ul,ol,font,fontsize,paragraph,lineHeight,superscript,subscript,classSpan,file,image,video,spellcheck,speechRecognize"
        });
        </script>
           @error('content')
               <div class="alert alert-danger">
                   {{$message}}
               </div>
           @enderror
    </div>

    <div class="col-12">
        <label for="status">
            <input type="checkbox" name="status"  @if(old('status',$article->status) =='active')  checked @endif id="status">
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


</div>