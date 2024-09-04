<x-Dashboard.Layout.Layout title="الخدمات والمعلومات">
    <h3>الخدمات والمعلومات</h3>


    <div class="dash-card">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5>المعلومات الرئيسية</h5>
            <a href="{{ route('services.maininfo') }}" class="btn light-btn ms-auto">تعديل المعلومات الرئيسية</a>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3 class="h5 fw-bold">
                    اسم الشركة
                </h3>
                <p class="h5">شركة رؤية للإستشارات والحوكمة</p>
            </div>
            <div class="col-md-6">
                <h3 class="h5 fw-bold">
                    عنوان الشركة
                </h3>
                <p class="h5">المملكة العربية السعودية</p>
            </div>
            <div class="col-md-6">
                <h3 class="h5 fw-bold">
                    رقم الهاتف
                </h3>
                <p dir="ltr" class="text-start h5">974 5265 688</p>
            </div>
            <div class="col-md-6">
                <h3 class="h5 fw-bold">
                    البريد الإلكتروني
                </h3>
                <p class="h5">info@vtstratgy.com</p>
            </div>
            <div class="col-12">
                <ul class="icons-social list-unstyled mt-2 text-center">
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-snapchat"></i></a></li>
                </ul>
            </div>
        </div>

    </div>



    <h3>الخدمات</h3>


    <div class="dash-card">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5>الخدمات المضافة</h5>
            <a href="{{ route('services.create') }}" class="btn light-btn ms-auto">إضافة خدمة</a>
        </div>

        <div class="row">
            <div class="col-xl-4 col-md-6 d-flex align-items-stretch">
                <div class="law text-center">
                    <div class="icon-wrap">
                        <div class="mini-icon d-flex align-items-center justify-content-center">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="icon d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-shop"></i>
                        </div>
                    </div>
                    <h2>القانون التجاري</h2>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="{{ route('services.edit',1) }}"
                            class="btn btn-md btn-outline-warning d-flex align-items-center me-2"><i
                                class="fa-solid fa-pen-nib"></i></a>
                        <a href="#" class="btn btn-md btn-outline-danger d-flex align-items-center"><i
                                class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <h3>عداد الخدمات</h3>


    <div class="dash-card">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5>ارقام احصائيات</h5>
            <a href="{{ route('services.updatenumbers') }}" class="btn light-btn ms-auto">تعديل البيانات</a>
        </div>
        <section id="counter" class="counter">
            <div class="position-relative">

                <div class="row g-3">
                    <div class="col-md-3 col-sm-6">
                        <div class="single_counter p-4">
                            <i class="fa-solid fa-handshake"></i>
                            <h2 class="statistic-counter">12</h2>
                            <p>استشارة ناجحة</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single_counter p-4">
                            <i class="fa-solid fa-hand-holding-heart"></i>
                            <h2 class="statistic-counter">25</h2>
                            <p>عميل راضٍ</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single_counter p-4">
                            <i class="fa fa-globe"></i>
                            <h2 class="statistic-counter">24</h2>
                            <p>موقع مُنشأ</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single_counter p-4">
                            <i class="fa fa-user-tie"></i>
                            <h2 class="statistic-counter">15</h2>
                            <p>مستشار خبير</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</x-Dashboard.Layout.Layout>