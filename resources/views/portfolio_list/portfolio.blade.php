@extends('layouts.app')

@section('contents')
<div class="content">
    <div class="sub_banner">
        <div class="sub_banner_tit_wrap">
            <h1>포트폴리오</h1>
            <p><i class="fas fa-home"></i><i class="fas fa-chevron-right"></i>Portfolio<i class="fas fa-chevron-right"></i>Web</p>
        </div>
    </div>
    <div class="sub_nav_container container">
        <div class="sub_nav_wrap">
            <ul>
                <li><a href="{!!route('portfolio')!!}" >웹</a></li>
                <li><a href="{!!route('portfolio_2')!!}" >상세페이지</a></li>
                <li><a href="{!!route('portfolio_3')!!}" >카달로그</a></li>
                <li><a href="{!!route('portfolio_4')!!}" >영상</a></li>
            </ul>
        </div>
    </div>
    <div class="inner_wrap container">
        <div class="about_box">
            <h2>ALL</h2>

            <div class="port_img_wrap">
                <!-- <div class="port_imgs_box"><img src="/imgs/portfolio/port1.png" alt="" class=""><div class="port_box_tit"><span class="port_tit">TEST</span><br><span class="port_cont">#WEB #반응형<span></div></div> -->
                <div class="port_imgs_box modal1"><img src="/imgs/portfolio/port2.png" alt="" class=""><div class="port_box_tit"><span class="port_tit">Wedding View</span><br><span class="port_cont">#WEB #반응형<span></div></div>
                <div class="port_imgs_box modal2"><img src="/imgs/portfolio/port3.png" alt="" class=""><div class="port_box_tit"><span class="port_tit">Emto</span><br><span class="port_cont">#WEB #반응형<span></div></div>
                <div class="port_imgs_box"><img src="/imgs/portfolio/port4.png" alt="" class=""><div class="port_box_tit"><span class="port_tit">대길부산의전</span><br><span class="port_cont">#WEB #반응형<span></div></div>
                <!-- <div class="port_imgs_box"><img src="/imgs/portfolio/port5.png" alt="" class=""><div class="port_box_tit"><span class="port_tit">WEB</span><br><span class="port_cont">#테스트 #반응형<span></div></div> -->
                <!-- <div class="port_imgs_box"><img src="/imgs/portfolio/bro_test.jpg" alt="" class=""><div class="port_box_tit"><span class="port_tit">TEST</span><br><span class="port_cont">#Brochure #반응형<span></div></div> -->
            </div>
        </div>
    </div>

    <div class="modal hidden">
        <div class="bg"></div>
        <div class="modalBox">           
            <img src="/imgs/portfolio/port2.png" alt="" class="">
            <p>프로젝트<span>반응형 웹</span></p>
            <p>업체명<span>Wedding View</span></p>
            <p>설명<span>웨딩뷰 반응형 웹 제작</span></p>
            <button class="closeBtn">X</button>
        </div>
    </div>

    <script>
  const open = () => {
    document.querySelector(".modal").classList.remove("hidden");
  }

  const close = () => {
    document.querySelector(".modal").classList.add("hidden");
  }
  

  document.querySelector(".port_imgs_box").addEventListener("click", open);
  document.querySelector(".closeBtn").addEventListener("click", close);
  document.querySelector(".bg").addEventListener("click", close);

</script>
</div>

@endsection