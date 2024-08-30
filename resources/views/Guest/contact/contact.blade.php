<x-Guest.Layout.Layout title="التواصل">

    @push('style')
    <link rel="stylesheet" href="{{asset('assets/css/guest/home/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/guest/home/owl.theme.default.min.css')}}">
    <!-- link  home style-->
    <link rel="stylesheet" href="{{asset('assets/css/guest/home/home.css')}}">
    @endpush

    <!-- start header -->
    <section class="header" id="header">
        <div class="head-img">
            <img src="{{asset('assets/images/contact.jpg')}}" class="img-fluid" alt="">

        </div>
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="image">
                        <img src="{{asset('assets/images/icon.png')}}" width="100" alt="">
                    </div>

                    <h1>تواصل معنا</h1>
                    <h2>نحن سعداء بمساعدتكم دائماً.</h2>
                    <p class="mt-4 w-lg-75">خدمتكم ومساعدتكم والرد على جميع الاستفسارات من خلال فريق عمل رائع</p>

                </div>
                <div class="d-none d-md-flex col-md-4 align-items-center justify-content-center">
                    <a href="{{ url('/bookconsaltation') }}"
                        class="bubble-icon cursor-pointer d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-gavel fa-2xl"></i>
                        <span class="tooltip">حجز استشارة</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end header -->

    <!-- start contact section -->
    <section class="contact py-5">
        <div class="container">
            <div class="heading-section text-center mb-5">
                <span class="subheading">التواصل</span>
                <h2>تواصل معنا الان</h2>
            </div>
            <div class="row g-md-5 align-items-center">
                <div class="col-lg-7">
                    <form action="{{route('contacts.store')}}"  method="POST" class="container">
                        @csrf
                        <div class="row g-4">
                            <div class="col-md-6">
                                @error('name')
                                    <p>{{$message}}</p>
                                @enderror
                                <input type="text" name="name" class="form-control" placeholder="الأسم" value="{{old('name')}}">
                            </div>
                            <div class="col-md-6">
                                @error('email')
                                    <p>{{$message}}</p>
                                @enderror
                                <input type="email" name="email" class="form-control" placeholder="البريد الإلكتروني" value="{{old('email')}}">
                            </div>
                            <div class="col-md-6">
                                @error('phone')
                                    <p>{{$message}}</p>
                                @enderror
                                <input type="text" name="phone" class="form-control" placeholder="رقم الهاتف" value="{{old('phone')}}">
                            </div>
                            <div class="col-md-6">
                                @error('whatsapp')
                                    <p>{{$message}}</p>
                                @enderror
                                <input type="text" name="whatsapp" class="form-control" placeholder="رقم واتساب" value="{{old('whatsapp')}}">
                            </div>
                            <div class="col-md-12">
                                @error('subject')
                                    <p>{{$message}}</p>
                                @enderror
                                <input type="text" class="form-control" name="subject" placeholder="عنوان الرسالة" value="{{old('subject')}}">
                            </div>
                            <div class="col-12">
                                @error('content')
                                    <p>{{$message}}</p>
                                @enderror
                                <textarea name="content" id="content"  class="form-control" placeholder="الرسالة" value="{{old('content')}}"></textarea>

                            </div>
                            <div class="col-12">
                                <button class="btn main-btn w-100 d-flex align-items-center justify-content-center"><i
                                        class="fa-solid fa-envelope me-2"></i>
                                         ارسال الرسالة
                               </button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-lg-5">
                    <h5>تواصل معنا</h5>
                    <p class="main-p">يمكنك ترك مقترحاتك او اى استفسار او تواصل معنا عن طريق احد طرق التواصل المتاحة نحن
                        سعداء دائما بمساعدتكم.</p>
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
                            <p><a href="" dir="ltr">974 257 336</a></p>
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