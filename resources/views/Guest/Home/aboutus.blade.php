<x-Guest.Layout.Layout title="من نحن">

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
            <img src="{{asset('assets/images/back.jpg')}}" class="img-fluid" alt="">

        </div>
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="image">
                        <img src="{{asset('assets/images/icon.png')}}" width="100" alt="">
                    </div>

                    <h1>من نحن</h1>
                    <h2 class="small">ما هي رؤية للإستشارات والحوكمة؟</h2>
                    <p class="mt-4 w-lg-75">تعرف اكثر عن خدماتنا وماذا نقدم
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

    <!-- start after header info  -->
    <section class="after-header">
        <div class="container-fluid">
            <div class="row">
                <div class="info col-md-6 col-lg-3 d-flex flex-column flex-xl-row">
                    <img src="{{asset('assets/images/lawyer.png')}}" alt="">
                    <div class="mt-3 mt-xl-0 ms-xl-3">
                        <h3>إستشارات قانونية والحوكمة</h3>
                        <p>نقدم استشارات قانونية شاملة وخدمات حوكمة متكاملة لضمان الامتثال وتنظيم الأعمال بفعالية وفقًا
                            لأعلى المعايير القانونية والمعايير المهنية.</p>
                    </div>
                </div>
                <div class="info col-md-6 col-lg-3 d-flex flex-column flex-xl-row">
                    <img src="{{asset('assets/images/page.png')}}" alt="">
                    <div class="mt-3 mt-xl-0 ms-xl-3">
                        <h3>مواقع الكترونية للاستشارات احترافية</h3>
                        <p>نطور مواقع إلكترونية مخصصة للمكاتب القانونية والاستشارية، مع تصميمات احترافية تعزز من تواجدك
                            الرقمي وتوفر تجربة مستخدم متميزة.</p>
                    </div>
                </div>
                <div class="info col-md-6 col-lg-3 d-flex flex-column flex-xl-row">
                    <img src="{{asset('assets/images/attorney.png')}}" alt="">
                    <div class="mt-3 mt-xl-0 ms-xl-3">
                        <h3>محامون وقانونيون خبراء</h3>
                        <p>فريقنا يتألف من محامين ومستشارين قانونيين ذوي خبرة عالية، يقدمون استشارات وحلول قانونية
                            متميزة لتلبية احتياجاتك القانونية بكل احترافية.</p>
                    </div>
                </div>
                <div class="info col-md-6 col-lg-3 d-flex flex-column flex-xl-row">
                    <img src="{{asset('assets/images/subscription.png')}}" alt="">
                    <div class="mt-3 mt-xl-0 ms-xl-3">
                        <h3>التخليص القانوني والتسجيلات</h3>
                        <p>نقدم خدمات التخليص القانوني وإجراءات التسجيل بكفاءة عالية، مما يسهل عليك استكمال الإجراءات
                            القانونية بسرعة وبدون تعقيد.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end after header info  -->

    <!-- start about section -->
    <section class="about sec-back" id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 p-0 position-relative">
                    <img src="{{asset('assets/images/about.jpg')}}" class="about-img" alt="">
                    <div class="buttons">
                        <a href="{{ url('/register') }}"
                            class="bubble-icon cursor-pointer d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-display fa-2xl"></i>
                            <span class="tooltip">إنشاء موقعك الان</span>
                        </a>
                        <a href="{{ url('/bookconsaltation') }}" class="bubble-icon cursor-pointer d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-calendar-days fa-2xl"></i>
                            <span class="tooltip">احجز استشارة</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-7 about-info">
                    <div class="back-warpper">
                        <img src="{{asset('assets/images/back-icons/dot-arrow.png')}}" class="back-ico-lg top-left shake-horizontal" alt="">
                        <img src="{{asset('assets/images/back-icons/blur.png')}}" class="back-ico-md bottom-right rotate" alt="">
                    </div>
                    <div class="heading">
                        <h2>من نحن</h2>
                        <span>ما هي رؤية للإستشارات والحوكمة وماذا تقدم؟</span>
                    </div>
                    <p class="main-p">تعتبر شركة رؤية هي شركة فانونية تقدم الخدمات والاستشارات القانونية - فى القانون
                        السعودي - كما
                        تقدم ايضا خدمة انشاء المواقع الالكترونية كاملة التحكم الخاصة بالمكاتب القانوينى التي تقدم من
                        خلالها مجموعة من الخدمات مثل حجز الاستشارات والمواعيد عن طريق الموقع وبيانات التواصل الخاصة
                        بالشركة وغيرها من الخدمات يمكنك التعرف عليها من موقعنا ، كما تتميز رؤية ببعض المميزات وهي:
                    </p>
                    <div class="row info-about g-2">
                        <div class="col-xl-6">
                            <div class="information">
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <div class="image">
                                            <i class="fa-solid fa-globe fa-xl"></i>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <h4>إنشاء المواقع القانونية</h4>
                                    </div>
                                    <div class="col-2"></div>
                                    <div class="col-10">
                                        <p>نقوم بتطوير مواقع إلكترونية متخصصة وجاهزة للمكاتب القانونية لتقديم خدماتهم
                                            وجذب المزيد من العملاء.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="information">
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <div class="image">
                                            <i class="fa-solid fa-headset fa-xl"></i>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <h4>الدعم الفني الدائم</h4>
                                    </div>
                                    <div class="col-2"></div>
                                    <div class="col-10">
                                        <p>نوفر دعمًا فنيًا مستمرًا لضمان تشغيل مواقعك القانونية بسلاسة وتقديم أفضل
                                            تجربة للمستخدمين.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="information">
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <div class="image">
                                            <i class="fa-solid fa-scale-balanced fa-xl"></i>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <h4>الخبرة القانونية الواسعة</h4>
                                    </div>
                                    <div class="col-2"></div>
                                    <div class="col-10">
                                        <p>فريقنا يتمتع بخبرة قانونية واسعة تساعدك في تقديم خدماتك القانونية بشكل أفضل
                                            ومتوافق مع المعايير.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="information">
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <div class="image">
                                            <i class="fa-solid fa-gavel fa-xl"></i>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <h4>الاستشارات والإجراءات القانونية</h4>
                                    </div>
                                    <div class="col-2"></div>
                                    <div class="col-10">
                                        <p>نقدم استشارات وإجراءات قانونية دقيقة لضمان تلبية كافة احتياجاتك القانونية
                                            بفعالية واحترافية.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->

    <!-- start law services section -->
    <section class="law-service sec-padding">
        <div class="container">
            <div class="heading-section text-center mb-5">
                <span class="subheading">الخبرات</span>
                <h2>الخدمات التي ندعمها</h2>
            </div>
        <div class="row  position-relative">
            <div class="back-warpper">
                        <img src="{{asset('assets/images/back-icons/scribble.png')}}" class="back-ico-lg top-left shake-horizontal" alt="">
                        <img src="{{asset('assets/images/back-icons/dot-arrow.png')}}" class="back-ico-md bottom-right shake-vertical rotate-180" alt="">
                    
                    </div>
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
                        <p>ينظم هذا القانون جميع الأنشطة التجارية في المملكة مثل قوانين الشركات، قوانين البنوك، وقوانين
                            حماية المستهلك. يهدف القانون التجاري إلى تنظيم بيئة الأعمال وضمان الاستقرار الاقتصادي.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 d-flex align-items-stretch">
                    <div class="law text-center">
                        <div class="icon-wrap">
                            <div class="mini-icon d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <div class="icon d-flex align-items-center justify-content-center">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                        </div>
                        <h2>القانون المدني</h2>
                        <p>يشمل القانون المدني في السعودية الأنظمة التي تنظم المعاملات التجارية والمدنية بين الأفراد
                            والشركات. تتضمن قوانين الملكية، العقود، الأضرار، وأحكام المسؤولية المدنية. يعتمد بشكل أساسي
                            على الفقه الإسلامي مع بعض الأنظمة الحديثة المكملة.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 d-flex align-items-stretch">
                    <div class="law text-center">
                        <div class="icon-wrap">
                            <div class="mini-icon d-flex align-items-center justify-content-center">
                                <i class="fas fa-gavel"></i>
                            </div>
                            <div class="icon d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-handcuffs"></i>
                            </div>
                        </div>
                        <h2>القانون الجنائي</h2>
                        <p>يركز القانون الجنائي في السعودية على الجرائم والعقوبات. يعتمد بشكل كبير على الشريعة الإسلامية
                            ويشمل تطبيق الحدود (مثل السرقة والزنا والقتل)، والقصاص (مثل العقوبات الجسدية)، بالإضافة إلى
                            التعزيرات التي تترك تقدير العقوبة للقضاة.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 d-flex align-items-stretch">
                    <div class="law text-center">
                        <div class="icon-wrap">
                            <div class="mini-icon d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-heart-pulse"></i>
                            </div>
                            <div class="icon d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-people-roof"></i>
                            </div>
                        </div>
                        <h2>القانون الأسري</h2>
                        <p>يتعامل مع مسائل الزواج، الطلاق، النفقة، وحضانة الأطفال. يعتمد هذا القانون بشكل كبير على
                            الشريعة الإسلامية ويطبق من خلال محاكم الأحوال الشخصية. يشمل القانون الأسري أيضًا جوانب مثل
                            حقوق الوالدين، الميراث، الوصاية، وتنظيم العلاقات داخل الأسرة بما يحقق العدالة والحماية
                            لأفرادها.</p>

                    </div>
                </div>
                <div class="col-xl-4 col-md-6 d-flex align-items-stretch">
                    <div class="law text-center">
                        <div class="icon-wrap">
                            <div class="mini-icon d-flex align-items-center justify-content-center">
                                <i class="fas fa-university"></i>
                            </div>
                            <div class="icon d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-user-tie"></i>
                            </div>
                        </div>
                        <h2>القانون الإداري</h2>
                        <p>ينظم هذا القانون العلاقة بين الجهات الحكومية والأفراد، بما في ذلك اللوائح والأنظمة المتعلقة
                            بالإجراءات الحكومية، وأمور مثل المناقصات العامة، والتوظيف في القطاع الحكومي. يهدف القانون
                            الإداري إلى تنظيم سير العمل في المؤسسات الحكومية وضمان العدالة والشفافية.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 d-flex align-items-stretch">
                    <div class="law text-center">
                        <div class="icon-wrap">
                            <div class="mini-icon d-flex align-items-center justify-content-center">
                                <i class="fas fa-building"></i>
                            </div>
                            <div class="icon d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-building-user"></i>
                            </div>
                        </div>
                        <h2>القانون العقاري</h2>
                        <p>ينظم القانون العقاري في السعودية جميع المسائل المتعلقة بتملك، تأجير، تطوير، وإدارة العقارات،
                            بما في ذلك تسجيل الملكية، عقود الإيجار، الرهن العقاري، وحقوق الأطراف المعنية. يهدف القانون
                            إلى ضمان حقوق الملاك والمستثمرين وتنظيم السوق العقارية بما يحقق الاستقرار والتنمية.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end law services section -->

    <!-- start counter section -->
    <section id="counter" class="counter mb-5">
        <div class="container position-relative">
      
            <div class="row g-3">
                <div class="col-md-3 col-sm-6">
                    <div class="single_counter p-4">
                        <i class="fa-solid fa-handshake"></i>
                        <h2 class="statistic-counter" data-count="14">0</h2>
                        <p>استشارة ناجحة</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single_counter p-4">
                        <i class="fa-solid fa-hand-holding-heart"></i>
                        <h2 class="statistic-counter" data-count="53">0</h2>
                        <p>عميل راضٍ</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single_counter p-4">
                        <i class="fa fa-globe"></i>
                        <h2 class="statistic-counter" data-count="24">0</h2>
                        <p>موقع مُنشأ</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single_counter p-4">
                        <i class="fa fa-user-tie"></i>
                        <h2 class="statistic-counter" data-count="12">0</h2>
                        <p>مستشار خبير</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end counter section -->

    <!-- start testmonials section -->
    <section class="testimonials">
        <div class="test-back">
            <div class="heading-section text-center mb-5">
                <span class="subheading">التقييمات</span>
                <h2>آراء العملاء</h2>
            </div>
            <div class="overlay"></div>
            <img src="{{asset('assets/images/test2.jpeg')}}" class="right-img" alt="testmonials background 2">
            <img src="{{asset('assets/images/test.jpeg')}}" class="left-img" alt="testmonials background">
        </div>
        <div class="container test-slider position-relative">
            <div class="owl-carousel">
                <div class="test-card h-100">
                    <div class="card-body h-100">
                        <div class="icon">
                            <i class="fa-solid fa-quote-right"></i>
                        </div>
                        <p class="card-text">لقد ساعدنا فريق الاستشارات القانونية في الحصول على نتائج مذهلة لعملائنا.
                            كما أن تصميم الموقع يعكس الاحترافية والتميز، مما عزز من تواجدنا الرقمي بشكل كبير.</p>
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
                <div class="test-card h-100">
                    <div class="card-body h-100">
                        <div class="icon">
                            <i class="fa-solid fa-quote-right"></i>
                        </div>
                        <p class="card-text">الدعم القانوني الذي تلقيناه كان دقيقاً واحترافياً. تصميم الموقع الجديد
                            لمكتبنا ساعدنا في الوصول لعملاء جدد، وأصبحنا نحظى بثقة أكبر من العملاء.</p>
                        <div class="d-flex align-items-center">
                            <div class="image">
                                <img src="{{asset('assets/images/person1.jpg')}}" alt="person name">
                            </div>
                            <div>
                                <h2 class="card-title">سارة عبد الرحمن</h2>
                                <p class="mb-0">محامية</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end testmonials section -->

    <!-- start top clients section -->
    <section class="top-clients py-5">
        <div class="heading-section text-center mb-5">
                <span class="subheading">شركائنـــا</span>
                <h2>كبار العملاء</h2>
        </div>
        <div class="container">
        <div class="row g-3">
        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <div class="logo p-4 h-100 d-flex flex-column align-items-center">
                <img src="{{asset('assets/images/logos/logo1.png')}}" class="w-100" alt="">
                <button class="btn light-btn mt-auto">زيارة الموقع</button>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <div class="logo p-4 h-100 d-flex flex-column align-items-center">
                <img src="{{asset('assets/images/logos/logo2.png')}}" class="w-100" alt="">
                <button class="btn light-btn mt-auto">زيارة الموقع</button>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <div class="logo p-4 h-100 d-flex flex-column align-items-center">
                <img src="{{asset('assets/images/logos/logo3.png')}}" class="w-100" alt="">
                <button class="btn light-btn mt-auto">زيارة الموقع</button>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <div class="logo p-4 h-100 d-flex flex-column align-items-center">
                <img src="{{asset('assets/images/logos/logo4.png')}}" class="w-100" alt="">
                <button class="btn light-btn mt-auto">زيارة الموقع</button>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <div class="logo p-4 h-100 d-flex flex-column align-items-center">
                <img src="{{asset('assets/images/logos/logo1.png')}}" class="w-100" alt="">
                <button class="btn light-btn mt-auto">زيارة الموقع</button>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <div class="logo p-4 h-100 d-flex flex-column align-items-center">
                <img src="{{asset('assets/images/logos/logo2.png')}}" class="w-100" alt="">
                <button class="btn light-btn mt-auto">زيارة الموقع</button>
            </div>
        </div>
    </div>
        </div>
    </section>
     <!-- end top clients section -->


    

    @push('script')
    <!-- link owl carosel -->
    <script src="{{asset('assets/js/guest/home/owl.carousel.min.js')}}"></script>
    <!-- link js -->
    <script src="{{asset('assets/js/guest/home/home.js')}}"></script>
    @endpush

</x-Guest.Layout.Layout>