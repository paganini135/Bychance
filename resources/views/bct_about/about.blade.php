@extends('layouts.app')

@section('contents')
<div class="content">
    <div class="sub_banner">
        <div class="sub_banner_tit_wrap">
            <h1>회사소개</h1>
            <p><i class="fas fa-home"></i><i class="fas fa-chevron-right"></i>About us<i class="fas fa-chevron-right"></i>회사소개</p>
        </div>        
    </div>
    <div class="sub_nav_container container">
        <div class="sub_nav_wrap">
            <ul>
                <li><a href="{!!route('about')!!}" >회사소개</a></li>
                <li><a href="{!!route('location')!!}" >오시는길</a></li>
            </ul>
        </div>
    </div>
    <div class="inner_wrap container">
        <div class="about_box">
        <h2>GREETING</h2>
        <h1>By chance:tem<span>은 취향이 될 수 있는 디자인을 연구합니다.</span></h1>
        <div class="about_img_wrap">
            <img src="/imgs/banner/banner.jpg">
            <div class="sub_tit_wrap">
                <h2>여러분의 변함없는 관심과 사랑에 감사드립니다.</h2>
                <p>By chance tem은 16년의 제작 노하우와 </p>
                <P>연구인력/ 제작인력/ 행정인력 등 전문 인력 보유</P>
                <p>및 최적의 작업시스템 구축으로 고객사에 보다 간편하고</p>
                <p>효율적인 전문 제작 시스템을 제공하고있습니다.</p>
                <p>감사합니다.</p>
                <p><span class="sign__">바이챈 일동</span></p>
            </div>
        </div>
        </div>
    </div>
    
</div>

@endsection