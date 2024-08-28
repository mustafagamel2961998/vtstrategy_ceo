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

    <title>رؤية للإستشارات - الإشتراك</title>
    <link rel="icon" href="{{asset('assets/images/icon.png')}}">

</head>

<body>
<div class="overlay"></div>
    <div class="wrapper my-5">

        <form action="">

            <h1>الإشتراك والتسجيل</h1>
            <p>انت الأن على بعد خطوات من إنشاء موقعك الإلكتروني</p>

            <div class="input-box url">
                <input type="text" placeholder="Company-Name">
                <span>.vtstratgy.com</span>
            </div>
            <div class="input-box">
                <input type="text" placeholder="اسم الشركة باللغة العربية">
                <i class="fa-solid fa-building"></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="اسم الشركة باللغة الإنجليزية">
                <i class="fa-regular fa-building"></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="الأسم">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="المسمي الوظيفي">
                <i class="fa-solid fa-user-tie"></i>
            </div>
            <div class="input-box">
                <input type="email" placeholder="البريد الإلكتروني">
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input-box">
                <input type="tel" placeholder="رقم الهاتف">
                <i class="fa-solid fa-phone"></i>
            </div>

            <div class="input-box">
                <input type="password" placeholder="كلمة السر">
                <i class="fa-solid fa-lock"></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="تأكيد كلمة السر">
                <i class="fa-solid fa-lock-open"></i>
            </div>

            
            <div class="remember-forget">
                <label class="d-flex align-itmes-center"><input type="checkbox">الموافقة على السياسات وقوانين الشركة</label>
            </div>

            <button type="submit" class="d-block w-100 btn main-btn">الإشتراك والتسجيل</button>

            <div class="register-link">
                <p>انت تملك حساب بالفعل<br>
                    <a href="{{ url('/login') }}">تسجيل الدخول</a>
                </p>
            </div>
            <a href="{{ url('/') }}" class="d-block text-center">العودة للصفحة الرئيسية</a>
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