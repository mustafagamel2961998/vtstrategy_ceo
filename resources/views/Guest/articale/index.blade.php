<x-Guest.Layout.Layout title="المقالات">

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
            <img src="{{asset('assets/images/article.jpg')}}" class="img-fluid" alt="">

        </div>
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="image">
                        <img src="{{asset('assets/images/icon.png')}}" width="100" alt="">
                    </div>

                    <h1>المقالات</h1>
                    <h2 class="small">مقالات قانونية تفيدك.</h2>
                    <p class="mt-4 w-lg-75">بعض المقالات القانونية التي توضح بعض المشكلات التي قد تواجهها او تبحث عنها.
                    </p>

                </div>
                <div class="d-none d-md-flex col-md-4 align-items-center justify-content-center">
                    <a href="{{route('guest.bookingconsaltaions.index')}}"
                        class="bubble-icon cursor-pointer d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-gavel fa-2xl"></i>
                        <span class="tooltip">حجز استشارة</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end header -->






    <!-- هتضيف المقالا ب pagination كل 9 فى صفحة -->
    <!-- start last articales section -->
    <section class="last-articals sec-padding">
        <div class="container overflow-hidden  position-relative">
            <div class="heading-section text-center mb-5">
                <span class="subheading">المقالات</span>
                <h2>المقالات المضافة حديثاً</h2>
            </div>
            <div class="back-warpper">
                <img src="{{asset('assets/images/back-icons/scribble.png')}}"
                    class="back-ico-lg top-left shake-horizontal" alt="">
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
        </div>
    </section>
    <!-- end last articales section -->



    @push('script')
    <!-- link owl carosel -->
    <script src="{{asset('assets/js/guest/home/owl.carousel.min.js')}}"></script>
    <!-- link js -->
    <script src="{{asset('assets/js/guest/home/home.js')}}"></script>
    @endpush

</x-Guest.Layout.Layout>