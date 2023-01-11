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
                <div class="port_imgs_box" OnClick="location.href ='product_detail_1'"><img src="/imgs/portfolio/product/product_1.png" alt="" class=""><div class="port_box_tit"><span class="port_tit">담쏙</span><br><span class="port_cont">#상세페이지<span></div></div>
                <div class="port_imgs_box" OnClick="location.href ='product_detail_2'"><img src="/imgs/portfolio/product/product_2.png" alt="" class=""><div class="port_box_tit"><span class="port_tit">러블리강정-오란다</span><br><span class="port_cont">#상세페이지<span></div></div>
                <div class="port_imgs_box" OnClick="location.href ='product_detail_3'"><img src="/imgs/portfolio/product/product_3.png" alt="" class=""><div class="port_box_tit"><span class="port_tit">러블리강정</span><br><span class="port_cont">#상세페이지<span></div></div>
                <div class="port_imgs_box" OnClick="location.href ='product_detail_4'"><img src="/imgs/portfolio/product/product_4.png" alt="" class=""><div class="port_box_tit"><span class="port_tit">웨딩라이브</span><br><span class="port_cont">#상세페이지<span></div></div>
            </div>
        </div>
    </div>

</div>

@endsection