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

    <!-- link main style -->
    <link rel="stylesheet" href="{{asset('assets/css/guest/home/auth.css')}}">

    <title>رؤية للإستشارات - تسجيل الدخول</title>
    <link rel="icon" href="{{asset('assets/images/icon.png')}}">

</head>

<body>
    <div class="overlay"></div>
    <div class="wrapper my-5">

        <form action="">

            <h1>رمز التحقق</h1>
            <p>تم ارسال رمز تحقق على بريدك الالكتروني</p>
            <div class="input-box">
                <input type="text" placeholder="رمز التحقق">
                <i class="fa-solid fa-user-check"></i>
            </div>


            <div class="remember-forget">
                <a href="#">لم تستقبل الرمز</a>
            </div>

            <button type="submit" class="d-block w-100 btn main-btn">التحقق والإشتراك</button>

            <a href="{{ url('/') }}" class="d-block text-center mt-3">العودة للصفحة الرئيسية</a>
        </form>

    </div>

    <!-- link jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- link owl carosel -->
    <script src="{{asset('assets/js/guest/home/owl.carousel.min.js')}}"></script>
    <!-- link fontaawesome -->
    <script src="{{asset('assets/js/guest/home/all.min.js')}}"></script>
    <!-- link bootstrap js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{asset('assets/js/guest/home/bootstrap.bundle.min.js')}}"></script>

</body>

</html>