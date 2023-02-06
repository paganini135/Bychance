<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>바이챈스템-관리자</title>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('/css/admin.css')}}">
    
    
    

    

    

</head>
<body>
    <!-- Header desktop start-->
    <header>
        <div class="header__">
            <div class="h_logo"><a href="/admin" class="admin_home">By Chance Tem</a> <span>Manager</span></div>
            <div class="h_login">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ route('logout') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">로그아웃</a>
                    @else
                        <!-- <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">로그인</a> -->

                        <!-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">회원가입</a>
                        @endif -->
                    @endauth
                </div>
            @endif
            </div>
            
        </div>
        
    </header>
    <nav class="nav__">
        <div class="nav__tit">
            <p>BCT</p>
        </div>
        <div class="nav__cont">
            <a href="{!!route('user_portfolio')!!}">포트폴리오</a>
            <a href="{!!route('user_contact')!!}">상담신청현황</a>
        </div>
    </nav>
    <!-- Header desktop end-->
    <!-- Header mobile start-->
    <!-- Header mobile end-->
   
    @yield('contents')

    <!-- Footer end -->
</body>
<!-- JS -->

</html>