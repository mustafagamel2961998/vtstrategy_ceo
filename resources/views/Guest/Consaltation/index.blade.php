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
                    <form action="{{route('guest.bookingconsaltaions.store')}}" method="POST" class="container">
                        @csrf
                    

                        <h3 class="mb-3">حجز استشارة</h3>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="الأسم" value="{{old('name')}}">
                                @error('name')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="البريد الإلكتروني" value="{{old('email')}}">
                                @error('email')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                                
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="phone" class="form-control" placeholder="رقم الهاتف" value="{{old('phone')}}">
                                @error('phone')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                            
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="whatsapp" class="form-control"  placeholder="رقم واتساب" value="{{old('whatsapp')}}">
                                @error('whatsapp')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <select name="service_id" id="service_id" class="form-control">
                                    <option disabled>الاقسام الخاص بالاستشارة</option>
                                    @foreach ($services as $service)
                                        <option value="{{$service->id}}" @if(old('service_id') == $service->id)  checked @endif> 
                                            {{$service->title}}
                                        </option>
                                    @endforeach
                                  
                                    <option value="">غير ذلك</option>
                                </select>
                                @error('service_id')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <select name="date_time" id="date_time" class="form-control" dir="ltr">
                                    {{-- <option value="غير محدد" disabled>موعد الإستشارة</option> --}}
                                        @foreach ($datetimes as $datetime)
                                            
                                        <option value="{{$datetime->date_time}}" data-text="{{$datetime->date_time->format('Y-m-d h:i a')}}">{{$datetime->date_time->format('Y-m-d h:i a')}}</option>
                                        @endforeach

                                </select>
                                @error('date_time')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <textarea name="note" class="form-control" id="" placeholder="ملاحظات">{{old('note')}}</textarea>
                                @error('note')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>
                                @enderror
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