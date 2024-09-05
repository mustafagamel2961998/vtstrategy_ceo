<x-Dashboard.Layout.Layout title="الخدمات والمعلومات">
    <h3>الخدمات والمعلومات</h3>


    <div class="dash-card">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5>المعلومات الرئيسية</h5>
            <a href="{{ route('settings.edit',$setting->id) }}" class="btn light-btn ms-auto">تعديل المعلومات الرئيسية</a>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3 class="h5 fw-bold">
                    اسم الشركة
                </h3>
                <p class="h5">
                    {{$setting->company_name}}
                </p>
            </div>
            <div class="col-md-6">
                <h3 class="h5 fw-bold">
                    عنوان الشركة
                </h3>
                <p class="h5">
                    {{$setting->address}}
                </p>
            </div>
            <div class="col-md-6">
                <h3 class="h5 fw-bold">
                    رقم الهاتف
                </h3>
                <p dir="ltr" class="text-start h5">
                    {{$setting->phone}}
                </p>
            </div>
            <div class="col-md-6">
                <h3 class="h5 fw-bold">
                    البريد الإلكتروني
                </h3>
                <p class="h5">
                    {{$setting->email}}
                </p>
            </div>
            <div class="col-12">
                <ul class="icons-social list-unstyled mt-2 text-center">
                    <li>
                        <a href="{{$setting->facebook}}">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{$setting->instagram}}">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{$setting->snapchat}}">
                            <i class="fa-brands fa-snapchat"></i>
                        </a>
                    </li>
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

            @forelse ($services as $service)
                <div class="col-xl-4 col-md-6 d-flex align-items-stretch">
                    <div class="law text-center">
                        <div class="icon-wrap">
                            <div class="mini-icon d-flex align-items-center justify-content-center">
                                @if($service->small_icon_class)
                                    <i class="{{$service->small_icon_class}}"></i>
                                @else
                                    <i class="fas fa-briefcase"></i>
                                @endif
                            </div>
                            <div class="icon d-flex align-items-center justify-content-center">
                                @if($service->big_icon_class)
                                    <i class="{{$service->big_icon_class}}"></i>
                                @else
                                    <i class="fa-solid fa-shop"></i>
                                @endif
                            </div>
                        </div>
                        <h2>{{$service->title}}</h2>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="{{ route('services.edit',$service->id) }}"
                                class="btn btn-md btn-outline-warning d-flex align-items-center me-2"><i
                                    class="fa-solid fa-pen-nib"></i></a>
                                    <form action="{{route('services.destroy',$service->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-md btn-outline-danger d-flex align-items-center">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                          
                        </div>
                    </div>
                </div>
            @empty
                <div>
                    لا يوجد بيانات
                </div>
            @endforelse
        

        </div>
    </div>




    <h3>عداد الخدمات</h3>


    <div class="dash-card">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5>ارقام احصائيات</h5>
            <a href="{{ route('services.update.counter.of.numbers.view') }}" class="btn light-btn ms-auto">تعديل البيانات</a>
        </div>
        <section id="counter" class="counter">
            <div class="position-relative">

                <div class="row g-3">
                    <div class="col-md-3 col-sm-6">
                        <div class="single_counter p-4">
                            <i class="fa-solid fa-handshake"></i>
                            <h2 class="statistic-counter">{{$counterofnumber->successful_consultation_count ?? 0}}</h2>
                            <p>استشارة ناجحة</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single_counter p-4">
                            <i class="fa-solid fa-hand-holding-heart"></i>
                            <h2 class="statistic-counter">{{$counterofnumber->satisfied_customer_count ?? 0}}</h2>
                            <p>عميل راضٍ</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single_counter p-4">
                            <i class="fa fa-globe"></i>
                            <h2 class="statistic-counter">{{$counterofnumber->created_website_count ?? 0}}</h2>
                            <p>موقع مُنشأ</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single_counter p-4">
                            <i class="fa fa-user-tie"></i>
                            <h2 class="statistic-counter">{{$counterofnumber->expert_advisor_count ?? 0}}</h2>
                            <p>مستشار خبير</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</x-Dashboard.Layout.Layout>