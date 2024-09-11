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

    <title>تسجيل الدخول - لوحة التحكم</title>
    <link rel="icon" href="{{asset('assets/images/icon.png')}}">

</head>

<body>
    <div class="overlay"></div>
    <div class="wrapper my-5">
        <h1>تسجيل الدخول - لوحة التـحكم</h1>
        @if(Session::has('faild'))
        <p>{{Session::get('faild')}}</p>
        @endif
        <form action="{{route('auth.login')}}" method="POST">
            @csrf
            <div class="input-box">
                <input type="text" name="email" placeholder="البريد الالكتروني">
                <i class="fa-solid fa-user"></i>
                @error('email')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="كلمة المرور">
                <i class="fa-solid fa-lock"></i>
                @error('password')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div>
                <button type="submit"  class="d-block w-100 btn main-btn mb-3">
                    تسجيل الدخول
                </button>
                <a href="{{ url('/') }}" class="d-block text-center">العودة للصفحة الرئيسية</a>
            </div>
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