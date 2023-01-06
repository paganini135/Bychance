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
                <li><a href="{!!route('about')!!}" >WEB</a></li>
                <li><a href="{!!route('location')!!}" >WEB</a></li>
                <li><a href="{!!route('location')!!}" >Brochure</a></li>
                <li><a href="{!!route('location')!!}" >Etc design</a></li>
            </ul>
        </div>
    </div>
    <div class="inner_wrap container">
        <div class="about_box">
            <h2>WEB</h2>

            <div class="port_img_wrap">
                <div class="port_imgs_box"><img src="/imgs/portfolio/port1.png" alt="" class=""><div class="port_box_tit"><span class="port_tit">TEST</span><br><span class="port_cont">#WEB #반응형<span></div></div>
            </div>
        </div>
    </div>
</div>

@endsection