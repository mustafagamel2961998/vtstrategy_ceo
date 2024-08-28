<x-Guest.Layout.Layout title="حجز استشارة">

    @push('style')
    <link rel="stylesheet" href="{{asset('assets/css/guest/home/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/guest/home/owl.theme.default.min.css')}}">
    <!-- link  home style-->
    <link rel="stylesheet" href="{{asset('assets/css/guest/home/home.css')}}">
    <!-- this page style -->
    <link rel="stylesheet" href="{{asset('assets/css/guest/home/other.css')}}">
    @endpush

    <!-- start header -->
    <section class="header" id="header">
        <div class="head-img">
            <img src="{{asset('assets/images/consultation.jpg')}}" class="img-fluid" alt="">

        </div>
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="image">
                        <img src="{{asset('assets/images/icon.png')}}" width="100" alt="">
                    </div>

                    <h1>احجز استشارتك الان</h1>
                    <h2>استشارتك القانونية المثالية مع رؤية.</h2>
                    <p class="mt-4 w-lg-75">نحن نملك فريق قانوني محترف يمكنه مساعدتك بالاستراتيجيات المطلوبة واللازمة.
                    </p>

                </div>
                <div class="d-none d-md-flex col-md-4 align-items-center justify-content-center">
                    <a href="{{ url('/contact') }}"
                        class="bubble-icon cursor-pointer d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-phone-volume fa-2xl"></i>
                        <span class="tooltip">تواصل معنا</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end header -->

    <!-- start book consultation -->
    <section class="consultation py-5">
        <div class="container">
            <div class="heading-section text-center mb-5">
                <span class="subheading">الإستشارات</span>
                <h2>حجز استشارة الآن</h2>
            </div>
            <div class="row align-items-center g-md-5">
                <div class="col-lg-4">
                    <h2>نحن هنا لمساعدتك</h2>
                    <p class="main-p">رؤية للإستشارات والحوكمة هي شركة رائدة في مجال الاستشارات القانونية، تتميز بتقديم
                        خدمات استشارية متكاملة تلبي احتياجات العملاء بشكل احترافي وفعال. نحن ملتزمون بتقديم المشورة
                        القانونية المتخصصة والمبنية على أحدث المعايير العالمية لتحقيق أفضل النتائج لعملائنا.</p>
                    <div class="info">
                        <div class="icon">
                            <img src="{{asset('assets/images/icons/legal.png')}}" alt="خدمات قانونية متعددة">
                        </div>
                        <h4>تخصص في مجالات متعددة</h4>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <img src="{{asset('assets/images/icons/strategy.png')}}" alt="توجيه استراتيجي">

                        </div>
                        <h4>التوجيه الاستراتيجي</h4>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <img src="{{asset('assets/images/icons/aid.png')}}" alt="حلول قانونية مبتكرة">

                        </div>
                        <h4>حلول قانونية مبتكرة</h4>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <img src="{{asset('assets/images/icons/quality.png')}}" alt="خبرة واسعة">

                        </div>
                        <h4>خبرة واسعة وسجل حافل</h4>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <img src="{{asset('assets/images/icons/customer-service.png')}}" alt="خدمة عملاء مميزة">

                        </div>
                        <h4>خدمات دعم عملاء متميزة</h4>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form action="" class="container">
                        <h3 class="mb-3">حجز استشارة</h3>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="الأسم">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="البريد الإلكتروني">
                            </div>
                            <div class="col-md-6">
                                <input type="tel" class="form-control" placeholder="رقم الهاتف">
                            </div>
                            <div class="col-md-6">
                                <input type="tel" class="form-control" placeholder="رقم واتساب">
                            </div>

                            <div class="col-md-6">
                                <select name="" id="" class="form-control">
                                    <option value="قسم غير محدد">القسم الخاص بالاستشارة</option>
                                    <option value="القانون التجاري">القانون التجاري</option>
                                    <option value="القانون المدني">القانون المدني</option>
                                    <option value="القانون الجنائي">القانون الجنائي</option>
                                    <option value="القانون الأسري">القانون الأسري</option>
                                    <option value="القانون الإداري">القانون الإداري</option>
                                    <option value="القانون العقاري">القانون العقاري</option>
                                    <option value="غير محدد">غير ذلك</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <select name="" id="" class="form-control">
                                    <option value="غير محدد">موعد الإستشارة</option>
                                    <option value="24/10/2024 03:00pm" data-text="24/10/2024 - 03:00 pm">24/10/2024 -
                                        03:00 pm</option>

                                </select>
                            </div>
                            <div class="col-12">
                                <textarea name="" class="form-control" id="" placeholder="ملاحظات"></textarea>

                            </div>
                            <div class="col-12">
                                <button class="btn main-btn w-100"><i class="fa-solid fa-calendar-days"></i> حجز
                                    الإستشارة الآن</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end book consultation -->


    @push('script')
    <!-- link owl carosel -->
    <script src="{{asset('assets/js/guest/home/owl.carousel.min.js')}}"></script>
    <!-- link js -->
    <script src="{{asset('assets/js/guest/home/home.js')}}"></script>
    @endpush

</x-Guest.Layout.Layout>