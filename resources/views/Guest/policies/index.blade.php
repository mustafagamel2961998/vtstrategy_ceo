<x-Guest.Layout.Layout title="السياسة والخصوصية">

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
            <img src="{{asset('assets/images/back.jpg')}}" class="img-fluid" alt="">

        </div>
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>السياسة والخصوصية</h1>
                    <h2 class="small">بياناتك فى امان.</h2>

                </div>
            </div>
        </div>
    </section>
    <!-- end header -->

    <!-- start policy -->
     <div class="artic py-5">
        <div class="container">
            <h3 class="h2">السياسة والخصوصية</h3>
            <p class="mb-0">
                {!! $policy->content !!}
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