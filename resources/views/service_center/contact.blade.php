@extends('layouts.app')

@section('contents')
<div class="content">
    <div class="sub_banner">
        <div class="sub_banner_tit_wrap">
            <h1>견적문의</h1>
            <p><i class="fas fa-home"></i><i class="fas fa-chevron-right"></i>Contact<i class="fas fa-chevron-right"></i>견적문의</p>
        </div>
    </div>
    <div class="sub_nav_container container">
        <div class="sub_nav_wrap">
            <ul>
                <li><a href="{!!route('qna')!!}">자주하는 질문</a></li>
                <li><a href="{!!route('contact')!!}">견적문의</a></li>
            </ul>
        </div>
    </div>
    <div class="inner_wrap container">
        <div class="about_box">
            <h2>Contact</h2>
            <h1>의뢰방법 선택</h1>
            <div class="contact_wrap">
            <div class="contact__1">
                <a href="{!!route('simple_contact')!!}">
                <i class="fas fa-comment-dots"></i>
                <div class="contact_tit"><h3>간편상담</h3><p>기초정보 등록 후 상담</p></div>
                </a>
            </div>
            <div class="contact__2">
                <a href="{!!route('detail_contact')!!}">
                <i class="fas fa-comments"></i>
                <div class="contact_tit"><h3>상세등록</h3><p>구체적인 아이디어 보유</p></div>
                </a>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection