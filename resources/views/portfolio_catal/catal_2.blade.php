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
            <h2>WeddingView</h2>
            <p class="port_detail_text">카달로그 제작</p>
            <div class="port_detail_wrap">
            <img src="/imgs/portfolio/catal/catal__002.png" alt="" class="">
            <p class="port_detail_text mt-10">웨딩뷰 카달로그 편집 디자인</p>
            <p class="port_detail_text">정리된 레이아웃으로 전문적인 정보를 가독성 있게 읽어나갈 수 있도록 의도하였습니다.</p>           
            </div>
        <div class="d_port_img_wrap">
            <img src="/imgs/portfolio/catal/d_catal_2__001.jpg" class="d_port_img">
            <img src="/imgs/portfolio/catal/d_catal_2__002.jpg" class="d_port_img">
        </div>
        </div>
    </div>

@endsection