<x-Dashboard.Layout.Layout title="آراء العملاء">

    <div class="d-flex align-items-center justify-content-between">
        <h3>آراء العملاء</h3>
    </div>

    <div class="dash-card">
        <h5>إضافة تعلييق عميل جديد</h5>


        <form action="">
            <div class="row g-3">
                <div class="col-12">
                    <!-- هتضيفله الصورة دي لو ما اختارش صورة تانية للعميل -->
                    <img src="{{asset('assets/images/noPerson.png')}}" class="img-prev" alt="">
                    <label for="mainImg" class="text-center d-block  cursor-pointer mt-1">تغيير صورة العميل</label>
                    <input type="file" id="mainImg" accept="image/*" class="form-control" hidden>
                </div>

                <div class="col-md-6">
                    <label for="name">اسم العميل</label>
                    <input type="text" id="name" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="job">المسمي الوظيفي</label>
                    <input type="text" id="job" class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="comment">التعليق</label>
                    <textarea name="" class="form-control" id="comment"></textarea>
                </div>
                <div class="col-12">
                    <button class="btn main-btn">حفظ التعليق</button>
                </div>
            </div>
        </form>
    </div>

</x-Dashboard.Layout.Layout>