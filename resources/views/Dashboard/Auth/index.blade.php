<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تسجيل الدخول</title>
</head>
<body>
    تسجيل الدخول
    @if(Session::has('faild'))
    <p>{{Session::get('faild')}}</p>
    @endif
    <form action="{{route('auth.login')}}" method="POST">
        @csrf
        <div>
            <input type="text" name="email" placeholder="البريد الالكتروني">
            @error('email')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            <input type="password" name="password" placeholder="كلمة المرور">
            @error('password')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            <button type="submit">
                تسجيل الدخول
            </button>
        </div>
    </form>
</body>
</html>