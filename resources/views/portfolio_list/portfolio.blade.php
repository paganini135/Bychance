@extends('layouts.app')

@section('contents')
<div class="content">
    <div class="sub_banner">
        <div class="sub_banner_tit_wrap">
            <h1>포트폴리오</h1>
            <p><i class="fas fa-home"></i><i class="fas fa-chevron-right"></i>포트폴리오<i class="fas fa-chevron-right"></i>웹</p>
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
            <h2>반응형 웹</h2>

            <div class="port_img_wrap">
                <div class="port_imgs_box" OnClick="location.href ='web_1'"><img src="/imgs/portfolio/port2.png" alt="" class=""><div class="port_box_tit"><span class="port_tit">Wedding View</span><br><span class="port_cont">#WEB #반응형<span></div></div>
                <div class="port_imgs_box" OnClick="location.href ='web_2'"><img src="/imgs/portfolio/port3.png" alt="" class=""><div class="port_box_tit"><span class="port_tit">Emto</span><br><span class="port_cont">#WEB #반응형<span></div></div>
                <div class="port_imgs_box" OnClick="location.href ='web_3'"><img src="/imgs/portfolio/port4.png" alt="" class=""><div class="port_box_tit"><span class="port_tit">대길부산의전</span><br><span class="port_cont">#WEB #반응형<span></div></div>
            </div>
        </div>
    </div>

    
</div>

@endsection