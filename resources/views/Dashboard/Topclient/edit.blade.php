<x-Dashboard.Layout.Layout title="كبار العملاء">
    <h3>كبار العملاء</h3>
    <div class="dash-card">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5>تعديل بيانات عميل</h5>
        </div>

        <form action="">
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="logo">صورة الشعار</label>
                    <input type="file" id="logo" accept="image/*" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="officeNme">اسم المكتب</label>
                    <input type="text" id="officeNme" class="form-control">
                </div>
                <div class="col-12">
                    <label for="link">لينك الموقع</label>
                    <input type="text" id="link" class="form-control">
                </div>
                <div class="col-12">
                    <button class="btn main-btn">تعديل عميل</button>
                </div>


            </div>
        </form>
        
    </div>

</x-Dashboard.Layout.Layout>