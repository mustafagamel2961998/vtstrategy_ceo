<x-Dashboard.Layout.Layout title="المقالات">


    <h3>المقالات</h3>

    <div class="dash-card">
        <h5>تعديل مقال</h5>
        <h2 class="h4">عنوان المقال بالكامل</h2>
        <form action="">
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="mainImg">الصورة الرئيسيية للمقال</label>
                    <input type="file" id="mainImg" accept="image/*" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="service">القسم التابع له</label>
                    <select name="" id="service" class="form-control">
                        <option value="قانون دولى">قانون دولي</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="head">عنوان المقال</label>
                    <input type="text" id="head" class="form-control">
                </div>
                <div class="col-12">

                    <label for="editor">محتوي المقال</label>

                    <textarea id="editor"></textarea>
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
                    <button class="btn main-btn">عدل المقال</button>
                </div>


            </div>
        </form>
    </div>
</x-Dashboard.Layout.Layout>