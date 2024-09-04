<x-Guest.Layout.Layout title="عنوان المقالة">

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
            <!-- الصورة الرئيسية للمقال -->
            <img src="{{asset('assets/images/article.jpg')}}" class="img-fluid" alt="">

        </div>
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>عنوان المقالة</h1>
                    <h2 class="small">قسم المقالة</h2>

                </div>
            </div>
        </div>
    </section>
    <!-- end header -->

    <!-- start article -->
     <div class="artic py-5">
        <div class="container">
            <h3 class="h2">عنوان المقالة</h3>
            <div class="d-flex align-items-center justify-content-between">
            <p class="h6 text-muted"><i class="fa-solid fa-calendar-days me-2"></i><span>24/5/2024</span></p>
            <p class="h5 ">القسم التابع له</p>
            </div>
            <hr>
            <p class="mb-0">
                محتوي المقال هنا 
            </p>
        </div>
     </div>
    <!-- end article -->







    @push('script')
    <!-- link owl carosel -->
    <script src="{{asset('assets/js/guest/home/owl.carousel.min.js')}}"></script>
    <!-- link js -->
    <script src="{{asset('assets/js/guest/home/home.js')}}"></script>
    @endpush

</x-Guest.Layout.Layout>