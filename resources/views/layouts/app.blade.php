<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>바이챈스템</title>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('/css/variables.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/reset.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/responsive.css')}}">
    <link rel="shortcut icon" href="{{ asset('/img/web_icon.png')}}" type="image/x-icon">
    <!-- 스와이퍼 css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('/css/swiper.css')}}">
    <script src="https://kit.fontawesome.com/d9116c2cc1.js" crossorigin="anonymous"></script>
    {{-- 슬릭 --}}
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="{{ asset('/css/slick.css')}}"> -->
    
    <!-- 스와이퍼 -->
    

    <!-- js -->
    {{-- 제이쿼리 --}}
    
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script> -->

    <!-- 스와이퍼 js-->
    
    

    

    

</head>
<body>
    <!-- Header desktop start-->
    <header class="header" id="header">
            <nav class="nav container">
                <a href="/" class="nav__logo"><span class="active">B</span>y <span class="active">C</span>hance <span class="active">T</span>em<span class="active">.</span></a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="{!! route('about') !!}" class="nav__link_1" id="nav__1" data-replace="회사소개"></a>
                            <!-- <div class="nav__item_2">회사소개</div> -->
                            <ul class="nav__drop">
                                <li class="nav__drop_item drop_select_1"><a href="{!! route('about') !!}">회사소개</a></li>
                                <li class="nav__drop_item drop_select_1 drop__end"><a href="{!! route('location') !!}">오시는길</a></li>
                            </ul>
                        </li>
                        <li class="nav__item">
                            <a href="{!! route('service') !!}" class="nav__link_2" id="nav__2" data-replace="서비스 소개"></a>
                        </li>
                        <li class="nav__item">
                            <a href="{!! route('portfolio') !!}" class="nav__link_3" id="nav__3" data-replace="포트폴리오"></a>
                            <ul class="nav__drop">
                                <li class="nav__drop_item drop_select_3"><a href="{!! route('portfolio') !!}">웹</a></li>
                                <li class="nav__drop_item drop_select_3"><a href="{!! route('portfolio_2') !!}">상세페이지</a></li>
                                <li class="nav__drop_item drop_select_3"><a href="{!! route('portfolio_3') !!}">카달로그</a></li>
                                <li class="nav__drop_item drop_select_3 drop__end"><a href="{!! route('portfolio_4') !!}">영상</a></li>
                            </ul>
                        </li>
                        <li class="nav__item">
                            <a href="{!! route('contact') !!}" class="nav__link_4" id="nav__4" data-replace="고객센터"></a>
                            <ul class="nav__drop">
                                <!-- <li class="nav__drop_item drop_select_1"><a href="{!! route('qna') !!}">자주하는질문</a></li> -->
                                <li class="nav__drop_item drop_select_1 drop__end"><a href="{!! route('contact') !!}">견적문의</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li class="mo__nav"><a href="{!! route('about') !!}">회사소개</a></li>
                        <li class="mo__nav"><a href="{!! route('service') !!}">서비스 소개</a></li>
                        <li class="mo__nav"><a href="{!! route('portfolio') !!}">포트폴리오</a></li>
                        <li class="mo__nav"><a href="{!! route('contact') !!}">고객센터</a></li>
                    </ul>
                    <!-- <div class="nav__toggle" id="nav-toggle">
                    <i class="fas fa-th-large" id="nav-close"></i>
                    </div> -->
                    <i class="fas fa-window-close nav__close" id="nav-close"></i>
                    <!-- <i class="ri-close-line nav__close" id="nav-close"></i> -->
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <!-- <i class="ri-function-line"></i> -->
                    <i class="fas fa-th-large" id="nav-close"></i>
                </div>
            </nav>
        </header>
    <!-- Header desktop end-->
    <!-- Header mobile start-->
    <!-- Header mobile end-->
    <!-- top button start -->
    <div class="go-btn" id="go-top2">
        <i class="fas fa-mobile-alt" onclick="location.href='tel:051-710-6207'"></i>
    </div>
    <div class="go-btn2" id="go-top">
        <i class="fas fa-long-arrow-alt-up"></i>
    </div>
    <!-- top button end -->
    @yield('contents')
    <!-- Footer start-->
    <footer class="busandg_footer">
      <div class="dg__footer_wrap container">
        <div class="dg__footer_right">
        <div class="dg__footer__info">
          <p>소재지 : <span>부산광역시 동구 조방로 26번길 9 401호</span></p>
          <p>전화번호 : <span>051-710-6207</span><br>전자우편 : <span>leon981416@naver.com</span></p>
          <p>사업자등록번호 : <span>756-48-00411</span><br>통신판매업신고 : <span>제 2020-부산중구-0178호</span></p>
          <p><span class="dg__copy">Copyright © By chance tem. All rights reserved.</span></p>
        </div>
      </div>
      </div>
    </footer>

    <!-- Footer end -->
</body>
<!-- JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="{{ asset('/js/main.js')}}"></script>
</html>