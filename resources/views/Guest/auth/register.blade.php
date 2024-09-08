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

        <form action="{{route('guest.register.store')}}" method="POST">
            @csrf
            <h1>الإشتراك والتسجيل</h1>
            <p>انت الأن على بعد خطوات من إنشاء موقعك الإلكتروني</p>

            <div class="input-box url">
                <input type="text" name="domain" placeholder="Company-Domain">
                <span>.vtstratgy.com</span>
                @error('domain')
                    <p>{{$message}}</p>
                @enderror
            </div>
            <div class="input-box">
                <input type="text" name="company_name_ar" placeholder="اسم الشركة باللغة العربية">
                <i class="fa-solid fa-building"></i>
                @error('company_name_ar')
                    <p>{{$message}}</p>
                @enderror
            </div>
            <div class="input-box">
                <input type="text" name="company_name_en" placeholder="اسم الشركة باللغة الإنجليزية">
                <i class="fa-regular fa-building"></i>
                @error('company_name_en')
                    <p>{{$message}}</p>
                @enderror
            </div>
            <div class="input-box">
                <input type="text" name="name" placeholder="الأسم">
                <i class="fa-solid fa-user"></i>
                @error('name')
                   <p>{{$message}}</p>
                @enderror
            </div>
            <div class="input-box">
                <input type="text" name="job_title" placeholder="المسمي الوظيفي">
                <i class="fa-solid fa-user-tie"></i>
                @error('job_title')
                    <p>{{$message}}</p>
                @enderror
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="البريد الإلكتروني">
                <i class="fa-solid fa-envelope"></i>
                @error('email')
                    <p>{{$message}}</p>
                @enderror
            </div>
            <div class="input-box">
                <input type="tel" name="mobile" placeholder="رقم الهاتف">
                <i class="fa-solid fa-phone"></i>
                @error('mobile')
                    <p>{{$message}}</p>
                @enderror
            </div>

            <div class="input-box">
                <input type="password" name="password" placeholder="كلمة السر">
                <i class="fa-solid fa-lock"></i>
                @error('password')
                    <p>{{$message}}</p>
                @enderror
            </div>
            <div class="input-box">
                <input type="password" name="password_confirmation" placeholder="تأكيد كلمة السر">
                <i class="fa-solid fa-lock-open"></i>
                @error('password_confirmation')
                    <p>{{$message}}</p>
                @enderror
            </div>

            
            <div class="remember-forget">
                <label class="d-flex align-itmes-center">
                    <input type="checkbox" name="politics_status">
                    الموافقة على السياسات وقوانين الشركة
                </label>
                @error('politics_status')
                    <p>{{$message}}</p>
                @enderror
            </div>

            <button type="submit" class="d-block w-100 btn main-btn">الإشتراك والتسجيل</button>

            <div class="register-link">
                <p>انت تملك حساب بالفعل<br>
                    <a href="{{ route('guest.login.view') }}">تسجيل الدخول</a>
                </p>
            </div>
            <a href="{{ route('guest.home.view') }}" class="d-block text-center">العودة للصفحة الرئيسية</a>
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