<x-Guest.Layout.Layout title="سياسة الإسترجاع">

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
            <!-- الصورة الرئيسية  -->
            <img src="{{asset('assets/images/return.jpg')}}" class="img-fluid" alt="">

        </div>
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>سياسة الإسترجاع</h1>
                    <h2 class="small">قوانين الدفع والإسترجاع الخاصة بنا.</h2>

                </div>
            </div>
        </div>
    </section>
    <!-- end header -->

    <!-- start policy -->
     <div class="artic py-5">
        <div class="container">
            <h3 class="h2">سياسة الإسترجاع</h3>
            <p class="mb-0">
                {!! $return->content !!}
            </p>
        </div>
     </div>
    <!-- end policy -->







    @push('script')
    <!-- link owl carosel -->
    <script src="{{asset('assets/js/guest/home/owl.carousel.min.js')}}"></script>
    <!-- link js -->
    <script src="{{asset('assets/js/guest/home/home.js')}}"></script>
    @endpush

</x-Guest.Layout.Layout>