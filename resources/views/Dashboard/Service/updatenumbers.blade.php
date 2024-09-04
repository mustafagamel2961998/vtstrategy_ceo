<x-Dashboard.Layout.Layout title="الخدمات والمعلومات">
    <h3>الخدمات والمعلومات</h3>

    <div class="dash-card">
        <h5>تعديل ارقام العداد</h5>
 
        <form action="" class="row g-3">
            <div class="col-md-6">
                <label for="success">استشارات ناجحة</label>
                <input type="number" class="form-control" id="success">
            </div>

            <div class="col-md-6">
                <label for="happyclient">عميل راضِ</label>
                <input type="number" class="form-control" id="happyclient">
            </div>
            <div class="col-md-6">
                <label for="sites">موقع مُنشأ</label>
                <input type="number" class="form-control" id="sites">
            </div>
            <div class="col-md-6">
                <label for="lawer">مستشار خبير</label>
                <input type="number" class="form-control" id="lawer">
            </div>


            <div class="col-12">
            <button class="btn main-btn">حفظ البيانات</button>
            </div>
        </form>
    </div>

</x-Dashboard.Layout.Layout>