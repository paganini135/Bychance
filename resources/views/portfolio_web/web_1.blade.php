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
                <li><a href="{!!route('portfolio')!!}" class="active">웹</a></li>
                <li><a href="{!!route('portfolio_2')!!}" >상세페이지</a></li>
                <li><a href="{!!route('portfolio_3')!!}" >카달로그</a></li>
                <li><a href="{!!route('portfolio_4')!!}" >영상</a></li>
            </ul>
        </div>
    </div>
    <div class="inner_wrap container">
        <div class="about_box">
            <h2>Wedding View</h2>
            <p class="port_detail_text">반응형 웹 제작</p>
            <div class="port_detail_wrap">
            <img src="/imgs/portfolio/port2.png" alt="" class="">
            <p class="port_detail_text mt-10">Wedding View 반응형 웹 사이트 제작</p>
            <p class="port_detail_text">정리된 레이아웃으로 전문적인 정보를 가독성 있게 읽어나갈 수 있도록 의도하였습니다.</p>           
            </div>
        <div class="d_port_img_wrap">
            <img src="/imgs/portfolio/web/d_web_1.png" class="d_port_img">
        </div>
        </div>
    </div>

@endsection