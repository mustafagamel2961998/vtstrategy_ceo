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

            <h1>إعادة تعيين كلمة السر</h1>
            <h3>اسم صاحب الحساب</h3>
            <div class="input-box">
                <input type="password" placeholder="كلمة السر الجديدة">
                <i class="fa-solid fa-lock"></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="تأكيد كلمة السر">
                <i class="fa-solid fa-lock-open"></i>
            </div>


            <button type="submit" class="d-block w-100 btn main-btn">تغيير كلمة السر</button>

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