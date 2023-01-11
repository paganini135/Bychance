@extends('layouts.app')

@section('contents')
<div class="content">
    <div class="sub_banner">
        <div class="sub_banner_tit_wrap">
            <h1>서비스 소개</h1>
            <p><i class="fas fa-home"></i><i class="fas fa-chevron-right"></i>Service</p>
        </div>
    </div>
    <div class="sub_nav_container container">
        <div class="sub_nav_wrap">
            <ul>
                <li><a href="{!!route('service')!!}" >웹</a></li>
                <li><a href="{!!route('service')!!}" >상세페이지</a></li>
                <li><a href="{!!route('service_2')!!}" >카달로그</a></li>
                <li><a href="{!!route('service_4')!!}" >영상</a></li>
            </ul>
        </div>
    </div>
    <div class="inner_wrap container">
        <div class="img_center">
            <img src="imgs/process/process__4.png">
        </div>
    </div>
</div>

@endsection