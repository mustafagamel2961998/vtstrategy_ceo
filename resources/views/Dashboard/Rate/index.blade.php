<x-Dashboard.Layout.Layout title="آراء العملاء">

    <div class="d-flex align-items-center justify-content-between">
        <h3>آراء العملاء</h3>

        <a href="{{ route('rate.create') }}" class="btn light-btn">إضافة تقييم</a>
    </div>

    <div class="dash-card">
        <div class="row py-3 g-3 gy-5">
            <h5>التقييمات المضافة</h5>
            <div class="col-md-6 col-xl-4">
                <div class="test-card h-100">
                    <div class="card-body h-100">
                        <div class="icon">
                            <i class="fa-solid fa-quote-right"></i>
                        </div>
                        <p class="card-text">لقد ساعدنا فريق الاستشارات القانونية في الحصول على نتائج مذهلة لعملائنا.
                            كما أن تصميم الموقع يعكس الاحترافية والتميز، مما عزز من تواجدنا الرقمي بشكل كبير.</p>
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="{{ route('rate.edit') }}" class="btn btn-md btn-outline-warning d-flex align-items-center me-2"><i
                                    class="fa-solid fa-pen-nib"></i></a>
                            <a href="#" class="btn btn-md btn-outline-danger d-flex align-items-center"><i
                                    class="fa-solid fa-trash"></i></a>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="image">
                                <img src="{{asset('assets/images/person2.jpg')}}" alt="person name">
                            </div>
                            <div>
                                <h2 class="card-title">أحمد سعيد</h2>
                                <p class="mb-0">مستشار قانوني</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>

</x-Dashboard.Layout.Layout>