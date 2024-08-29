<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- link bootstrap rtl -->
    <link rel="stylesheet" href="{{asset('assets/css/guest/home/bootstrap.rtl.min.css')}}">
    <!-- link fontaweson=me free -->
    <link rel="stylesheet" href="{{asset('assets/css/guest/home/all.min.css')}}">
    <!-- link main style -->
    <link rel="stylesheet" href="{{asset('assets/css/guest/home/main.css')}}">
    @stack('style')
    <!-- <title>{{$title}}</title> -->
    <title>رؤية للإستشارات الإستراتيجية والحوكمة</title>
    <link rel="icon" href="{{asset('assets/images/icon.png')}}">

</head>

<body>
    <!-- start navbar and brenav -->
    <!-- start brenav -->
    <div class="brenav">
        <div class="container">
            <div class="row">
                <div class="col-8 d-flex align-items-center">
                    <div class="mail">
                        <a href="#" class="me-3"><i class="fa-solid fa-phone me-1"></i><span dir="ltr">+974 336
                                288</span></a>
                        <a href="#"><i class="fa-solid fa-paper-plane me-1"></i>info@vtstratgy.com</a>
                    </div>

                </div>
                <div class="col-4 d-flex justify-content-end">
                    <div class="social-media d-flex align-itmes-center">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-snapchat"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
        <div class="container d-flex align-items-center justify-content-between">
            <!-- Logo -->
            <a class="navbar-brand order-1" href="{{ url('/') }}"><img src="{{asset('assets/images/logo.png')}}"
                    width="150" alt="رؤية للإستشارات والحوكمة"></a>
            <!-- Navbar Toggler (for small screens) -->
            <button class="navbar-toggler order-3" type="button" data-bs-toggle="collapse" data-bs-target="#nav"
                aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars text-white"></i>
            </button>
            <!-- Buttons (for all screens, reordered for small screens) -->
            <div class="btns order-2 d-flex d-lg-none ms-auto me-3">
                <a href="{{route('register.view')}}" class="btn btn-sm main-btn me-2">الإشتراك</a>
                <a href="{{route('login.view')}}" class="btn btn-sm light-btn">الدخول</a>
            </div>
            <!-- Navbar Links (collapsible) -->
            <div class="collapse navbar-collapse order-lg-2 order-4" id="nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        <a href="{{ url('/') }}" class="nav-link">الرئيسية</a>
                    </li>
                    <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
                        <a href="{{ url('/about') }}" class="nav-link">من نحن</a>
                    </li>
                    <li class="nav-item {{ request()->is('articals') ? 'active' : '' }}">
                        <a href="{{route('articals.index')}}" class="nav-link">المقالات</a>
                    </li>
                    <li class="nav-item {{ request()->is('bookconsaltation') ? 'active' : '' }}">
                        <a href="{{ url('/bookconsaltation') }}" class="nav-link">حجز استشارة</a>
                    </li>
                    <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
                        <a href="{{ route('contacts.index') }}" class="nav-link">التواصل</a>
                    </li>
                </ul>

            </div>
            <!-- Buttons for large screens  -->
            <div class="btns d-none order-2 d-lg-flex ms-3">
                <a href="{{ url('/register') }}" class="btn main-btn me-2">الإشتراك</a>
                <a href="{{ url('/login') }}" class="btn light-btn">الدخول</a>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- start content -->
    {{$slot}}
    <!-- end content -->

    <!-- start footer -->
    <footer class="footer pt-5">
        <div class="container">
            <div class="row justify-content-between d-xl-flex">
                <div class="col-sm-6 col-xl-2">
                    <div class="footer-widget mb-4">
                        <h2 class="heading-2 logo"><a href="{{ url('/') }}"><img
                                    src="{{asset('assets/images/logo.png')}}" width="150"
                                    alt="رؤية للإستشارات والحوكمة"></a></h2>
                        <p>للإستشارات القانونية والمواقع الإلكترونية</p>
                        <ul class="footer-social list-unstyled mt-2">
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-snapchat"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-2">
                    <div class="footer-widget mb-4 ml-md-4">
                        <h2 class="heading-2">روابط سريعة</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/about') }}"><span class="fa fa-chevron-left me-2"></span>من نحن</a>
                            </li>
                            <li><a href="{{ url('/articals') }}"><span
                                        class="fa fa-chevron-left me-2"></span>المقالات</a></li>
                            <li><a href="{{ url('/bookconsaltation') }}"><span
                                        class="fa fa-chevron-left me-2"></span>حجز استشارة</a></li>
                            <li><a href="{{ url('/contact') }}"><span class="fa fa-chevron-left me-2"></span>التواصل</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-2">
                    <div class="footer-widget mb-4 ml-md-4">
                        <h2 class="heading-2">الإشتراكات</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/register') }}"><span class="fa fa-chevron-left me-2"></span>الإشتراك
                                    والتسجيل</a></li>
                            <li><a href="{{ url('/login') }}"><span class="fa fa-chevron-left me-2"></span>تسجيل
                                    الدهول</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-2">
                    <div class="footer-widget mb-4">
                        <h2 class="heading-2">السياسات والقوانين</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-left me-2"></span>السياسة والخصوصية</a></li>
                            <li><a href="#"><span class="fa fa-chevron-left me-2"></span>الشروط والأحكام</a></li>
                            <li><a href="#"><span class="fa fa-chevron-left me-2"></span>سياسة الإسترجاع</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-2">
                    <div class="footer-widget mb-4">
                        <h2 class="heading-2">معلومات التواصل</h2>
                        <div class="block-23 mb-3">
                            <ul class="list-unstyled">
                                <li><span class="icon fa fa-map marker me-2"></span><span class="text">جدة، المملكة
                                        العربية السعودية</span></li>
                                <li><a href="#"><span class="icon fa fa-phone me-2"></span><span class="text text-left"
                                            dir="ltr">+974 354 256</span></a></li>
                                <li><a href="#"><span class="icon fa fa-paper-plane me-2"></span><span
                                            class="text">info@vtstratgy.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid px-0 py-4 bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <p class="mb-0 text-center" style="color: rgba(255,255,255,.5);">
                            الحقوق محفوظة &copy;<script>
                            document.write(new Date().getFullYear());
                            </script> لشركة رؤية للإستشارات القانونية والحوكمة بواسطة <a
                                href="https://vision-things.com/" target="_blank">رؤية الأشياء للبرمجة</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!-- link jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- link fontaawesome -->
    <script src="{{asset('assets/js/guest/home/all.min.js')}}"></script>
    <!-- link bootstrap js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{asset('assets/js/guest/home/bootstrap.bundle.min.js')}}"></script>
    @stack('script')

</body>

</html>