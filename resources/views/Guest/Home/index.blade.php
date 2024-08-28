<x-Guest.Layout.Layout title="الرئيسية">

    @push('style')
    <link rel="stylesheet" href="{{asset('assets/css/guest/home/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/guest/home/owl.theme.default.min.css')}}">
    <!-- link  home style-->
    <link rel="stylesheet" href="{{asset('assets/css/guest/home/home.css')}}">
    @endpush

    <!-- start header -->
    <section class="header" id="header">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="image">
                        <img src="{{asset('assets/images/icon.png')}}" width="100" alt="">
                    </div>

                    <h1>رؤية للإستشارات والحوكمة</h1>
                    <h2>ومواقع الإستشارات القانونية.</h2>
                    <p class="mt-4 w-lg-75">قدم خدماتك باحترافية بمساعدتنا لتوفير موفع خاص بمكتبك لتفوز بثقة اكبر
                        لعملائك.</p>
                    <div class="btns mt-4">
                        <button class="btn main-btn">تواصل معنا</button>
                        <button class="btn light-btn">الأسئلة الشائعة</button>
                    </div>
                </div>
                <div class="d-none d-md-flex col-md-4 align-items-center justify-content-center">
                    <a href="{{ url('/bookconsaltation') }}" class="bubble-icon cursor-pointer d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-gavel fa-2xl"></i>
                        <span class="tooltip">حجز استشارة</span>
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
    
     <!-- start last articales section -->
    <section class="last-articals sec-padding sec-back">
        <div class="container overflow-hidden  position-relative">
            <div class="heading-section text-center mb-5">
                <span class="subheading">المقالات</span>
                <h2>المقالات المضافة حديثاً</h2>
            </div>
            <div class="back-warpper">
                        <img src="{{asset('assets/images/back-icons/scribble.png')}}" class="back-ico-lg top-left shake-horizontal" alt="">
                        <img src="{{asset('assets/images/back-icons/dot-arrow.png')}}" class="back-ico-md bottom-right rotate-180 shake-vertical " alt="">
                    </div>
            <div class="row g-4">
           
                <!-- اعرض اخر 6 مقالات -->
                <!-- articale card -->
                <div class="col-12 col-xl-4 col-md-6">
                    <article>
                        <div class="card border-0">
                            <figure class="card-img-top m-0 overflow-hidden bsb-overlay-hover">
                                <div class="img-contain">
                                    <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy"
                                        src="{{asset('assets/images/article.jpg')}}" alt="Business">
                                </div>
                            </figure>
                            <div class="card-body border bg-white p-3">
                                <div class="entry-header mb-3">
                                    <ul class="entry-meta list-unstyled d-flex mb-2">
                                        <li>
                                            <span>قانون تجاري</span>
                                        </li>
                                    </ul>
                                    <h2 class="card-title entry-title mb-0">
                                        <h2>أهمية القانون التجاري في تنظيم الأعمال التجارية وتعزيز الثقة
                                            الاقتصادية</h2>
                                    </h2>
                                </div>
                                <p class="card-text entry-summary text-secondary">
                                    يلعب القانون التجاري دورًا حيويًا في تنظيم العلاقات بين التجار وحماية حقوقهم
                                    في مختلف المعاملات التجارية. فهو يمثل الإطار القانوني الذي يضمن الشفافية
                                    والثقة في التعاملات التجارية، مما يسهم في استقرار الأسواق وتعزيز النمو ...
                                </p>
                            </div>
                            <div class="card-footer border border-top-0 bg-white p-4">
                                <ul class="list-unstyled d-flex align-items-center justify-content-between m-0">
                                    <li>
                                        <p class="text-decoration-none d-flex align-items-center mb-0" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                fill="currentColor" class="bi bi-calendar3" viewBox="0 0 18 18">
                                                <path
                                                    d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                                <path
                                                    d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                            </svg>
                                            <span class="ms-2">25 أغسطس 2024</span>
                                        </p>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-solid fa-book-open"></i> أقرأ المزيد</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- articale card -->
                <div class="col-12 col-xl-4 col-md-6">
                    <article>
                        <div class="card border-0">
                            <figure class="card-img-top m-0 overflow-hidden bsb-overlay-hover">
                                <div class="img-contain">
                                    <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy"
                                        src="{{asset('assets/images/article.jpg')}}" alt="Business">
                                </div>
                            </figure>
                            <div class="card-body border bg-white p-3">
                                <div class="entry-header mb-3">
                                    <ul class="entry-meta list-unstyled d-flex mb-2">
                                        <li>
                                            <span>قانون تجاري</span>
                                        </li>
                                    </ul>
                                    <h2 class="card-title entry-title mb-0">
                                        <h2>أهمية القانون التجاري في تنظيم الأعمال التجارية وتعزيز الثقة
                                            الاقتصادية</h2>
                                    </h2>
                                </div>
                                <p class="card-text entry-summary text-secondary">
                                    يلعب القانون التجاري دورًا حيويًا في تنظيم العلاقات بين التجار وحماية حقوقهم
                                    في مختلف المعاملات التجارية. فهو يمثل الإطار القانوني الذي يضمن الشفافية
                                    والثقة في التعاملات التجارية، مما يسهم في استقرار الأسواق وتعزيز النمو ...
                                </p>
                            </div>
                            <div class="card-footer border border-top-0 bg-white p-4">
                                <ul class="list-unstyled d-flex align-items-center justify-content-between m-0">
                                    <li>
                                        <p class="text-decoration-none d-flex align-items-center mb-0" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                fill="currentColor" class="bi bi-calendar3" viewBox="0 0 18 18">
                                                <path
                                                    d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                                <path
                                                    d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                            </svg>
                                            <span class="ms-2">25 أغسطس 2024</span>
                                        </p>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-solid fa-book-open"></i> أقرأ المزيد</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- articale card -->
                <div class="col-12 col-xl-4 col-md-6">
                    <article>
                        <div class="card border-0">
                            <figure class="card-img-top m-0 overflow-hidden bsb-overlay-hover">
                                <div class="img-contain">
                                    <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy"
                                        src="{{asset('assets/images/article.jpg')}}" alt="Business">
                                </div>
                            </figure>
                            <div class="card-body border bg-white p-3">
                                <div class="entry-header mb-3">
                                    <ul class="entry-meta list-unstyled d-flex mb-2">
                                        <li>
                                            <span>قانون تجاري</span>
                                        </li>
                                    </ul>
                                    <h2 class="card-title entry-title mb-0">
                                        <h2>أهمية القانون التجاري في تنظيم الأعمال التجارية وتعزيز الثقة
                                            الاقتصادية</h2>
                                    </h2>
                                </div>
                                <p class="card-text entry-summary text-secondary">
                                    يلعب القانون التجاري دورًا حيويًا في تنظيم العلاقات بين التجار وحماية حقوقهم
                                    في مختلف المعاملات التجارية. فهو يمثل الإطار القانوني الذي يضمن الشفافية
                                    والثقة في التعاملات التجارية، مما يسهم في استقرار الأسواق وتعزيز النمو ...
                                </p>
                            </div>
                            <div class="card-footer border border-top-0 bg-white p-4">
                                <ul class="list-unstyled d-flex align-items-center justify-content-between m-0">
                                    <li>
                                        <p class="text-decoration-none d-flex align-items-center mb-0" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                fill="currentColor" class="bi bi-calendar3" viewBox="0 0 18 18">
                                                <path
                                                    d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                                <path
                                                    d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                            </svg>
                                            <span class="ms-2">25 أغسطس 2024</span>
                                        </p>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-solid fa-book-open"></i> أقرأ المزيد</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- articale card -->
                <div class="col-12 col-xl-4 col-md-6">
                    <article>
                        <div class="card border-0">
                            <figure class="card-img-top m-0 overflow-hidden bsb-overlay-hover">
                                <div class="img-contain">
                                    <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy"
                                        src="{{asset('assets/images/article.jpg')}}" alt="Business">
                                </div>
                            </figure>
                            <div class="card-body border bg-white p-3">
                                <div class="entry-header mb-3">
                                    <ul class="entry-meta list-unstyled d-flex mb-2">
                                        <li>
                                            <span>قانون تجاري</span>
                                        </li>
                                    </ul>
                                    <h2 class="card-title entry-title mb-0">
                                        <h2>أهمية القانون التجاري في تنظيم الأعمال التجارية وتعزيز الثقة
                                            الاقتصادية</h2>
                                    </h2>
                                </div>
                                <p class="card-text entry-summary text-secondary">
                                    يلعب القانون التجاري دورًا حيويًا في تنظيم العلاقات بين التجار وحماية حقوقهم
                                    في مختلف المعاملات التجارية. فهو يمثل الإطار القانوني الذي يضمن الشفافية
                                    والثقة في التعاملات التجارية، مما يسهم في استقرار الأسواق وتعزيز النمو ...
                                </p>
                            </div>
                            <div class="card-footer border border-top-0 bg-white p-4">
                                <ul class="list-unstyled d-flex align-items-center justify-content-between m-0">
                                    <li>
                                        <p class="text-decoration-none d-flex align-items-center mb-0" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                fill="currentColor" class="bi bi-calendar3" viewBox="0 0 18 18">
                                                <path
                                                    d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                                <path
                                                    d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                            </svg>
                                            <span class="ms-2">25 أغسطس 2024</span>
                                        </p>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-solid fa-book-open"></i> أقرأ المزيد</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- articale card -->
                <div class="col-12 col-xl-4 col-md-6">
                    <article>
                        <div class="card border-0">
                            <figure class="card-img-top m-0 overflow-hidden bsb-overlay-hover">
                                <div class="img-contain">
                                    <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy"
                                        src="{{asset('assets/images/article.jpg')}}" alt="Business">
                                </div>
                            </figure>
                            <div class="card-body border bg-white p-3">
                                <div class="entry-header mb-3">
                                    <ul class="entry-meta list-unstyled d-flex mb-2">
                                        <li>
                                            <span>قانون تجاري</span>
                                        </li>
                                    </ul>
                                    <h2 class="card-title entry-title mb-0">
                                        <h2>أهمية القانون التجاري في تنظيم الأعمال التجارية وتعزيز الثقة
                                            الاقتصادية</h2>
                                    </h2>
                                </div>
                                <p class="card-text entry-summary text-secondary">
                                    يلعب القانون التجاري دورًا حيويًا في تنظيم العلاقات بين التجار وحماية حقوقهم
                                    في مختلف المعاملات التجارية. فهو يمثل الإطار القانوني الذي يضمن الشفافية
                                    والثقة في التعاملات التجارية، مما يسهم في استقرار الأسواق وتعزيز النمو ...
                                </p>
                            </div>
                            <div class="card-footer border border-top-0 bg-white p-4">
                                <ul class="list-unstyled d-flex align-items-center justify-content-between m-0">
                                    <li>
                                        <p class="text-decoration-none d-flex align-items-center mb-0" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                fill="currentColor" class="bi bi-calendar3" viewBox="0 0 18 18">
                                                <path
                                                    d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                                <path
                                                    d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                            </svg>
                                            <span class="ms-2">25 أغسطس 2024</span>
                                        </p>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-solid fa-book-open"></i> أقرأ المزيد</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- articale card -->
                <div class="col-12 col-xl-4 col-md-6">
                    <article>
                        <div class="card border-0">
                            <figure class="card-img-top m-0 overflow-hidden bsb-overlay-hover">
                                <div class="img-contain">
                                    <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy"
                                        src="{{asset('assets/images/article.jpg')}}" alt="Business">
                                </div>
                            </figure>
                            <div class="card-body border bg-white p-3">
                                <div class="entry-header mb-3">
                                    <ul class="entry-meta list-unstyled d-flex mb-2">
                                        <li>
                                            <span>قانون تجاري</span>
                                        </li>
                                    </ul>
                                    <h2 class="card-title entry-title mb-0">
                                        <h2>أهمية القانون التجاري في تنظيم الأعمال التجارية وتعزيز الثقة
                                            الاقتصادية</h2>
                                    </h2>
                                </div>
                                <p class="card-text entry-summary text-secondary">
                                    يلعب القانون التجاري دورًا حيويًا في تنظيم العلاقات بين التجار وحماية حقوقهم
                                    في مختلف المعاملات التجارية. فهو يمثل الإطار القانوني الذي يضمن الشفافية
                                    والثقة في التعاملات التجارية، مما يسهم في استقرار الأسواق وتعزيز النمو ...
                                </p>
                            </div>
                            <div class="card-footer border border-top-0 bg-white p-4">
                                <ul class="list-unstyled d-flex align-items-center justify-content-between m-0">
                                    <li>
                                        <p class="text-decoration-none d-flex align-items-center mb-0" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                fill="currentColor" class="bi bi-calendar3" viewBox="0 0 18 18">
                                                <path
                                                    d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                                <path
                                                    d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                            </svg>
                                            <span class="ms-2">25 أغسطس 2024</span>
                                        </p>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-solid fa-book-open"></i> أقرأ المزيد</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <!-- ظهر الديف ده لو المقالات اكتر من 6 -->
            <div class="last-footer text-center mt-4">
                <p>يمكنك قراءة كل المقالات الخاصة بنا</p>
                <a href="{{ url('/articals') }}" class="btn main-btn m-auto">كل المقالات</a>
            </div>
        </div>
    </section>
    <!-- end last articales section -->

    <!-- start faq section -->
    <section class="faq sec-padding">
    
        <div class="container">
            <div class="heading-section text-center mb-5">
                <span class="subheading">الأسئلة</span>
                <h2>الأسئلة الشائعة</h2>
            </div>
            <div class="accordion" id="regularAccordionRobots">

                <div class="accordion-item">
                    <h2 id="regularHeadingFirst" class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#regularCollapseFirst" aria-expanded="false"
                            aria-controls="regularCollapseFirst">
                            1. ما هي خدمات شركة رؤية للاستشارات والحوكمة؟
                        </button>
                    </h2>
                    <div id="regularCollapseFirst" class="accordion-collapse collapse"
                        aria-labelledby="regularHeadingFirst" data-bs-parent="#regularAccordionRobots">
                        <div class="accordion-body">
                            شركة رؤية للاستشارات والحوكمة تقدم مجموعة متنوعة من الخدمات القانونية والحكومية، بما في ذلك
                            الاستشارات القانونية للشركات والأفراد، وتطوير استراتيجيات الحوكمة الفعالة. نحن نساعد عملائنا
                            في فهم متطلبات الامتثال القانوني وتحسين العمليات الداخلية لضمان الالتزام بالقوانين واللوائح.
                            بالإضافة إلى ذلك، نقدم حلولاً تقنية تشمل تطوير مواقع إلكترونية للمكاتب القانونية
                            والمستشارين، مما يتيح لهم إدارة أعمالهم بفعالية عبر الإنترنت. كما نقدم خدمة الحجز الإلكتروني
                            للمواعيد، مما يسهل على العملاء تحديد المواعيد وإدارتها بكفاءة.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="regularHeadingSecond">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#regularCollapseSecond" aria-expanded="false"
                            aria-controls="regularCollapseSecond">
                            2. كيف يمكنني الاستفادة من خدمة الحجز الإلكتروني للمواعيد التي تقدمها شركتكم؟
                        </button>
                    </h2>
                    <div id="regularCollapseSecond" class="accordion-collapse collapse"
                        aria-labelledby="regularHeadingSecond" data-bs-parent="#regularAccordionRobots">
                        <div class="accordion-body">
                            خدمة الحجز الإلكتروني للمواعيد التي تقدمها شركة رؤية تتيح للعملاء تحديد مواعيد الاستشارات
                            القانونية بطريقة سهلة وسريعة عبر الإنترنت. من خلال نظامنا المتطور، يمكنك اختيار الوقت
                            المناسب لك من بين الأوقات المتاحة، وحجز استشارتك مع أحد مستشارينا القانونيين دون الحاجة إلى
                            الاتصال المباشر. هذه الخدمة مصممة لتوفير الوقت وتبسيط عملية تحديد المواعيد، مما يساعد على
                            تحسين تجربة العميل وضمان تنظيم أفضل للمواعيد. </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="regularHeadingThird">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#regularCollapseThird" aria-expanded="false"
                            aria-controls="regularCollapseThird">
                            3. ما هي الفوائد التي أحصل عليها عند تطوير موقع إلكتروني لمكتبي القانوني عبر شركتكم؟
                        </button>
                    </h2>
                    <div id="regularCollapseThird" class="accordion-collapse collapse"
                        aria-labelledby="regularHeadingThird" data-bs-parent="#regularAccordionRobots">
                        <div class="accordion-body">
                            تطوير موقع إلكتروني لمكتبك القانوني عبر شركة رؤية يقدم لك مجموعة من الفوائد التي تشمل تعزيز
                            حضورك الرقمي وجذب عملاء جدد. مواقعنا الإلكترونية مصممة لتكون مهنية وسهلة الاستخدام، مما يسهل
                            على العملاء العثور على المعلومات التي يحتاجونها حول خدماتك. بالإضافة إلى ذلك، نقدم ميزات
                            متقدمة مثل نماذج الحجز الإلكتروني والاستشارات عبر الإنترنت، مما يعزز من قدرة عملك على تقديم
                            خدمات مريحة وسريعة. نعمل أيضًا على تحسين تجربة المستخدم لضمان تفاعل سلس مع الموقع وزيادة
                            كفاءة إدارة المحتوى والتواصل مع العملاء. </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="regularHeadingForth">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#regularCollapseForth" aria-expanded="false"
                            aria-controls="regularCollapseForth">
                            4. كيف يمكن لشركتكم مساعدتي في تحسين استراتيجيات الحوكمة في شركتي؟
                        </button>
                    </h2>
                    <div id="regularCollapseForth" class="accordion-collapse collapse"
                        aria-labelledby="regularHeadingForth" data-bs-parent="#regularAccordionRobots">
                        <div class="accordion-body">
                            شركة رؤية تقدم استشارات شاملة لتحسين استراتيجيات الحوكمة في شركتك من خلال تقييم السياسات
                            والإجراءات الحالية وتقديم توصيات مخصصة. نعمل على تحليل هيكل الحوكمة لديك وتحديد المجالات
                            التي يمكن تحسينها لضمان الامتثال الكامل للقوانين واللوائح. كما نقدم تدريباً للموظفين
                            والإدارة العليا لرفع الوعي بممارسات الحوكمة الجيدة وتعزيز الثقافة المؤسسية. هدفنا هو مساعدتك
                            في بناء نظام حوكمة قوي يعزز الشفافية ويقلل من المخاطر القانونية ويزيد من فعالية الأداء
                            التنظيمي.</div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="regularHeadingFifth">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#regularCollapseFifth" aria-expanded="false"
                            aria-controls="regularCollapseFifth">
                            5. ما هي الخطوات التي يجب اتباعها للبدء في العمل مع شركة رؤية للاستشارات والحوكمة؟
                        </button>
                    </h2>
                    <div id="regularCollapseFifth" class="accordion-collapse collapse"
                        aria-labelledby="regularHeadingFifth" data-bs-parent="#regularAccordionRobots">
                        <div class="accordion-body">
                            للبدء في العمل مع شركة رؤية للاستشارات والحوكمة، يمكنك زيارة موقعنا الإلكتروني وملء نموذج
                            الاستفسار أو الاتصال بنا مباشرة عبر الهاتف أو البريد الإلكتروني. سنقوم بتحديد موعد للتحدث
                            معك لفهم احتياجاتك وأهدافك. بعد ذلك، سنقدم لك استشارة أولية لتحديد الخدمات التي تناسبك
                            وتزويدك بعرض شامل. بمجرد الاتفاق على نطاق العمل، سنبدأ في تنفيذ استراتيجياتنا وحلولنا وفقًا
                            لاحتياجاتك الخاصة، مع ضمان متابعة دورية وتقييم النتائج لتحقيق أقصى استفادة من خدماتنا.</div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="regularHeadingSixth">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#regularCollapseSixth" aria-expanded="false"
                            aria-controls="regularCollapseSixth">
                            6. هل تقدمون خدمات استشارية للشركات الصغيرة والمتوسطة؟
                        </button>
                    </h2>
                    <div id="regularCollapseSixth" class="accordion-collapse collapse"
                        aria-labelledby="regularHeadingSixth" data-bs-parent="#regularAccordionRobots">
                        <div class="accordion-body">
                            نعم، شركة رؤية للاستشارات والحوكمة تقدم خدمات استشارية مخصصة للشركات الصغيرة والمتوسطة. نحن
                            ندرك التحديات الفريدة التي تواجهها هذه الشركات ونوفر حلولاً قانونية وحكومية مصممة لدعم نموها
                            واستدامتها. تشمل خدماتنا التوجيه بشأن الالتزام بالقوانين، وتطوير استراتيجيات حوكمة،
                            والمساعدة في إدارة المخاطر. نحن هنا لدعم الشركات الصغيرة والمتوسطة في تحقيق أهدافها وضمان
                            الامتثال لأفضل الممارسات القانونية.</div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="regularHeadingSeventh">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#regularCollapseSeventh" aria-expanded="false"
                            aria-controls="regularCollapseSeventh">
                            7. هل يمكنني إنشاء موقع لمكتبي لديكم مجاناً او يمكنني التجربة؟
                        </button>
                    </h2>
                    <div id="regularCollapseSeventh" class="accordion-collapse collapse"
                        aria-labelledby="regularHeadingSeventh" data-bs-parent="#regularAccordionRobots">
                        <div class="accordion-body">
                            نعم، شركة رؤية للاستشارات تقدم لك تجربة مجانية للموقع لمدة شهر كامل يمكنك من خلالها تجربة
                            لوحة التحكم واعداد الموقع ورؤيته وطريقة الحجز للعملاء من خلالخ وخدمة عملائنا ستكون فى خدمتكم
                            دائماً.</div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="regularHeadingEighth">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#regularCollapseEighth" aria-expanded="false"
                            aria-controls="regularCollapseEighth">
                            8. خدمة الإستشارات ليست مجانية؟
                        </button>
                    </h2>
                    <div id="regularCollapseEighth" class="accordion-collapse collapse"
                        aria-labelledby="regularHeadingEighth" data-bs-parent="#regularAccordionRobots">
                        <div class="accordion-body">
                            نعم بالطبع خدمة الاستشارات القانوينة تكون مع كبار المستشاريين القانونيين وبالتالي نقوم بدفع
                            مبلغ رمزي للإستشارة.</div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="regularHeadingNineth">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#regularCollapseNineth" aria-expanded="false"
                            aria-controls="regularCollapseNineth">
                            9. ما هي الخدمات التي توقروها فى حالة انشاء موقع لديكم لمكتب استشارات قانونية؟
                        </button>
                    </h2>
                    <div id="regularCollapseNineth" class="accordion-collapse collapse"
                        aria-labelledby="regularHeadingNineth" data-bs-parent="#regularAccordionRobots">
                        <div class="accordion-body">
                            نوفر لك الخدمات التي تيسر لك طبيعة عملك وتحسن مظهر مكتبك من اهمها هي حجز المواعيد عن طريق
                            الموقع الالكتروني واستلام رسائل من العملاء وتقييمات كما انه يمكنك التحكم فى جميع اجزاء
                            الموقع فى اضافة اجزاء جديدة وبالاضافة الى قسم خاص بالمقالات يمكنك تفعيله وكتابة المقالات
                            الالكترونية القانوينة التي من الممكن ان تجلب لك من يبحث عن مثل هذه الامور كما اننا نوفر لك
                            الموقع بدون الحاجة الى شراء استضافة او اسم نطاق (Domain).</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end faq section -->

    <!-- start book consultation -->
    <section class="consultation py-5">
        <div class="overlay"></div>
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

    <!-- start contact section -->
    <section class="contact py-5">
        <div class="container">
            <div class="heading-section text-center mb-5">
                <span class="subheading">التواصل</span>
                <h2>تواصل معنا الان</h2>
            </div>
            <div class="row g-md-5 align-items-center">
                <div class="col-lg-7">
                <form action="" class="container">
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
                            <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="عنوان الرسالة">
                            </div>
                            <div class="col-12">
                                <textarea name="" class="form-control" id="" placeholder="الرسالة"></textarea>

                            </div>
                            <div class="col-12">
                                <button class="btn main-btn w-100 d-flex align-items-center justify-content-center"><i class="fa-solid fa-envelope me-2"></i> ارسال الرسالة</button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-lg-5">
                <h5>تواصل معنا</h5>
                    <p class="main-p">يمكنك ترك مقترحاتك او اى استفسار او تواصل معنا عن طريق احد طرق التواصل المتاحة نحن سعداء دائما بمساعدتكم.</p>
                    <div class="info">
                        <div class="icon">
                        <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <h4>العنوان</h4>
                            <p>جدة، المملكة العربية السعودية</p>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                        <i class="fa-solid fa-envelope-open-text"></i>
                        </div>
                        <div>
                            <h4>البريد الإلكتروني</h4>
                            <p>info@vtstratgy.com</p>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                        <i class="fa-solid fa-phone-volume"></i>
                        </div>
                        <div>
                            <h4>رقم الجوال</h4>
                            <p><a href="" dir="ltr">974 257 336</a></p>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                        <i class="fa-brands fa-whatsapp"></i>
                        </div>
                        <div>
                            <h4>الواتساب</h4>
                            <p><a href=""  dir="ltr">974 257 336</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->

    @push('script')
    <!-- link owl carosel -->
    <script src="{{asset('assets/js/guest/home/owl.carousel.min.js')}}"></script>
    <!-- link js -->
    <script src="{{asset('assets/js/guest/home/home.js')}}"></script>
    @endpush

</x-Guest.Layout.Layout>