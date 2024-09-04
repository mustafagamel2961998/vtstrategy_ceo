<x-Dashboard.Layout.Layout title="الأسئلة الشائعة">
    <h3>الأسئلة الشائعة</h3>
    <div class="col-12">
        <div class="dash-card">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h5>إضافة سؤال جديد</h5>
            </div>

            <form action="">
                <div class="row g-3">

                    <div class="col-12">
                        <label for="question">السؤال</label>
                        <input type="text" id="question" placeholder="......؟" class="form-control">
                    </div>
                    <div class="col-12">

                        <label for="answer">إجابة السؤال</label>

                        <textarea id="answer" class="form-control" placeholder="إجابة السؤال"></textarea>

                    </div>
                    <div class="col-12">
                        <button class="btn main-btn">أضف سؤال جديد</button>
                    </div>


                </div>
            </form>

        </div>
    </div>


</x-Dashboard.Layout.Layout>