<x-Dashboard.Layout.Layout title="السياسة والخصوصية">
    <h3>السياسة والخصوصية</h3>
    <div class="col-12">
        <div class="dash-card">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h5>اعدادت صفحة السياسة والخصوصية</h5>
            </div>


            <form action="{{route('policies.update',$policy->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                  @method('PUT')  
                <div class="row g-3">
                    <div class="col-12">
                         <!-- الصورة لازمة فى الصفحة والصورة دي ال defult -->
                        <label for="mainImg" class="text-center d-block  cursor-pointer mt-1">
                            <img src="{{$policy->getFirstMediaUrl('policy')}}" class="img-prev" alt="">

                            تغيير صورة الرئيسية
                        </label>
                        <input type="file" name="policy" id="mainImg" accept="image/*" class="form-control" hidden>
                    </div>

                    <div class="col-12">

                        <label for="editor">محتوي الصفحة</label>

                        <textarea id="editor" name="content">{{old('content',$policy->content)}}</textarea>
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
                    </div>
                    <div class="col-12">
                        <button type="submit"  class="btn main-btn">حفظ</button>
                    </div>
                </div>
            </form>


        </div>
    </div>


</x-Dashboard.Layout.Layout>