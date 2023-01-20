@extends('layouts.app')

@section('contents')
<div class="content">
    <div class="sub_banner">
        <div class="sub_banner_tit_wrap">
            <h1>포트폴리오</h1>
            <p><i class="fas fa-home"></i><i class="fas fa-chevron-right"></i>포트폴리오<i class="fas fa-chevron-right"></i>영상</p>
        </div>
    </div>
    <div class="sub_nav_container container">
        <div class="sub_nav_wrap">
            <ul>
                <li><a href="{!!route('portfolio')!!}" >웹</a></li>
                <li><a href="{!!route('portfolio_2')!!}" >상세페이지</a></li>
                <li><a href="{!!route('portfolio_3')!!}" >카달로그</a></li>
                <li><a href="{!!route('portfolio_4')!!}" class="active">영상</a></li>
            </ul>
        </div>
    </div>
    <div class="inner_wrap container">
        <div class="about_box pb-50">
            <h2>영상</h2>

            <div class="port_img_wrap">
                <div class="port_imgs_box" OnClick="location.href ='video_1'"><img src="/imgs/portfolio/video/video__001.png" alt="" class=""><div class="port_box_tit"><span class="port_tit">Wedding View</span><br><span class="port_cont">#영상<span></div></div>
                <div class="port_imgs_box" OnClick="location.href ='video_2'"><img src="/imgs/portfolio/video/video__002.png" alt="" class=""><div class="port_box_tit"><span class="port_tit">아시아드시티 웨딩홀</span><br><span class="port_cont">#영상<span></div></div>
                <div class="port_imgs_box" OnClick="location.href ='video_3'"><img src="/imgs/portfolio/video/video__003.png" alt="" class=""><div class="port_box_tit"><span class="port_tit">라온 웨딩홀</span><br><span class="port_cont">#영상<span></div></div>
                <div class="port_imgs_box" OnClick="location.href ='video_4'"><img src="/imgs/portfolio/video/video__004.png" alt="" class=""><div class="port_box_tit"><span class="port_tit">웨딩뷰 소개영상</span><br><span class="port_cont">#영상<span></div></div>
                <div class="port_imgs_box" OnClick="location.href ='video_5'"><img src="/imgs/portfolio/video/video__005.png" alt="" class=""><div class="port_box_tit"><span class="port_tit">비비엔다 스튜디오</span><br><span class="port_cont">#영상<span></div></div>
                <div class="port_imgs_box" OnClick="location.href ='video_6'"><img src="/imgs/portfolio/video/video__006.png" alt="" class=""><div class="port_box_tit"><span class="port_tit">웨딩뷰 드레스 추천영상</span><br><span class="port_cont">#영상<span></div></div>
            </div>
        </div>
    </div>

</div>

@endsection