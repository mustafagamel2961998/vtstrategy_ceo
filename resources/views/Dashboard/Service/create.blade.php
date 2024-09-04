<x-Dashboard.Layout.Layout title="الخدمات والمعلومات">
    <h3>الخدمات والمعلومات</h3>

    <div class="dash-card">
        <h5>إضافة خدمة</h5>
        <form action="" class="row g-3">
        <div class="col-md-6">
                <label for="largeicon">ايكون كبيرة للخدمة باستخدام fontAwesome</label>
                <input type="text" placeholder="<i> ... </i>" class="form-control" id="largeicon">
            </div>

            <div class="col-md-6">
                <label for="smallicon">ايكون صغيرة للخدمة باستخدام fontAwesome</label>
                <input type="text" placeholder="<i> ... </i>" class="form-control" id="smallicon">
            </div>
            <div class="col-12">
                <label for="title">عنوان الخدمة</label>
                <input type="text" id="title" class="form-control" placeholder="مثل قانون جنائي، قانون اداري ،..">
            </div>
            <div class="col-12">
                <label for="description">تعريف الخدمة</label>
                <textarea name="" id="description" class="form-control" placeholder="تعريف مختصر للخدمة"></textarea>
            </div>
            <div class="col-12">
            <button class="btn main-btn">حفظ الخدمة</button>
            </div>
        </form>
    </div>

</x-Dashboard.Layout.Layout>