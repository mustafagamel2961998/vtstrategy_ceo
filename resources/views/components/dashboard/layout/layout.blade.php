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
    <!-- jodit text editor -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jodit@3.18.2/build/jodit.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jodit@3.18.2/build/jodit.min.js"></script>
    <!-- link main style -->
    <link rel="stylesheet" href="{{asset('assets/css/guest/home/main.css')}}">
    <!-- link dashboard style -->
    <link rel="stylesheet" href="{{asset('assets/css/guest/dashboard/dashboard.css')}}">
    

    @stack('style')
    <link rel="icon" href="{{asset('assets/images/icon.png')}}">
    <title>{{$title}}</title>
</head>

<body>

    <div id="wrapper">

        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="{{ route('homes.index') }}"><img src="{{asset('assets/images/icon.png')}}" width="70" alt=""></a>
            </div>
            <ul class="sidebar-nav">
                <li class="{{ Route::is('homes*') ? 'active' : '' }}">
                    <a href="{{ route('homes.index') }}"><i class="fa-solid fa-chart-simple"></i>الإحصائيات</a>
                </li>
                <li class="{{ Route::is('services*') ? 'active' : '' }}">
                    <a href="{{ route('services.index') }}"><i class="fa-solid fa-list-ol"></i>الخدمات والمعلومات</a>
                </li>
                <li class="{{ Route::is('consaltaions*') ? 'active' : '' }}">
                    <a href="{{ route('consaltaions.index') }}"><i class="fa-solid fa-calendar-check"></i>استشارات محجوزة</a>
                </li>
                <li class="{{ Route::is('contacts.index') ? 'active' : '' }}">
                    <a href="{{ route('contacts.index') }}"><i class="fa-solid fa-comments"></i>الرسائل</a>
                </li>
                <li class="{{ Route::is('subscribers*') ? 'active' : '' }}">
                    <a href="{{ route('subscribers.index') }}"><i class="fa-solid fa-users"></i>المشتركين</a>
                </li>
                
                <li class="{{ Request::is('dashboard/articles*') ? 'active' : '' }}">
                    <a href="{{ route('articles.index') }}"><i class="fa-regular fa-newspaper"></i>المقالات</a>
                </li>
               
                <li class="{{ Route::is('questions*') ? 'active' : '' }}">
                    <a href="{{ route('questions.index') }}"><i class="fa-solid fa-clipboard-question"></i>الأسئلة الشائعة</a>
                </li>
                <li class="{{ Route::is('customers.*') ? 'active' : '' }}">
                    <a href="{{ route('customers.index') }}"><i class="fa-solid fa-user-tie"></i>كبار العملاء</a>
                </li>
                <li class="{{ Route::is('datetimes.*') ? 'active' : '' }}">
                    <a href="{{ route('datetimes.index') }}"><i class="fa-solid fa-calendar-plus"></i>إضافة مواعيد استشارات</a>
                </li>

                <li class="{{ Route::is('rates.*') ? 'active' : '' }}">
                    <a href="{{ route('rates.index') }}"><i class="fa-regular fa-star-half-stroke"></i>إضافة آراء عملاء</a>
                </li>

                <li class="{{ Route::is('policies.*') ? 'active' : '' }}">
                    <a href="{{ route('policies.index') }}"><i class="fa-solid fa-user-lock"></i>السياسة والخصوصية</a>
                </li>

                <li class="{{ Route::is('terms.*') ? 'active' : '' }}">
                    <a href="{{ route('terms.index') }}"><i class="fa-solid fa-scale-unbalanced-flip"></i>الشروط والأحكام</a>
                </li>

                <li class="{{ Route::is('returns*') ? 'active' : '' }}">
                    <a href="{{ route('returns.index') }}"><i class="fa-solid fa-handshake"></i>سياسة الإسترجاع</a>
                </li>
                
                <li class="mt-auto">
                    <form action="{{route('auth.logout')}}" method="POST">
                        @csrf
                        <button type="submit">
                            <i class="fa-solid fa-right-from-bracket"></i>تسجيل خروج
                        </button>
                    </form>
                </li>
            </ul>
        </aside>

        <div id="navbar-wrapper">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
            </nav>
        </div>

        <section id="content-wrapper">
          
            <div class="row g-3">
                @if (Session::has('success'))
                  <div class="alert alert-success">
                    {{Session::get('success')}}
                  </div>
                @endif
                {{$slot}}
            </div>
        </section>

    </div>




    <!-- link jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- link fontaawesome -->
    <script src="{{asset('assets/js/guest/home/all.min.js')}}"></script>
    <!-- link bootstrap js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{asset('assets/js/guest/home/bootstrap.bundle.min.js')}}"></script>
    <!-- link chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- dashboard js file -->
    <script src="{{asset('assets/js/guest/dashboard/dashboard.js')}}"></script>
    @stack('script')

</body>

</html>