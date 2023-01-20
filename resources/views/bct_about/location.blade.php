@extends('layouts.app')

@section('contents')
    <div class="content">
    <div class="sub_banner">
        <div class="sub_banner_tit_wrap">
            <h1>오시는길</h1>
            <p><i class="fas fa-home"></i><i class="fas fa-chevron-right"></i>About us<i class="fas fa-chevron-right"></i>오시는길</p>
        </div>
    </div>
    <div class="sub_nav_container container">
        <div class="sub_nav_wrap">
            <ul>
                <li><a href="{!!route('about')!!}" >회사소개</a></li>
                <li><a href="{!!route('location')!!}" class="active">오시는길</a></li>
            </ul>
        </div>
    </div>
    <div class="inner_wrap container">
        <div class="about_box pb-50">
        <h2>ADDRESS</h2>
        <div class="about_img_wrap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3262.6739770546965!2d129.0627931!3d35.139808599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3568eb837c50accb%3A0x12ef6ec95a5e8b66!2z67aA7IKw6rSR7Jet7IucIOuPmeq1rCDsobDrsKnroZwyNuuyiOq4uCA5!5e0!3m2!1sko!2skr!4v1667958347677!5m2!1sko!2skr" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="sub_tit_wrap">
                <div class="sub_tit_l"><div class="sub_tit_ch">회사명</div></div><div class="sub_tit_r"><div class="sub_tit_ch">By chance tem</div></div>
                <div class="sub_tit_l"><div class="sub_tit_ch">사업자등록번호</div></div><div class="sub_tit_r"><div class="sub_tit_ch">756-48-00411</div></div>
                <div class="sub_tit_l"><div class="sub_tit_ch">대표전화</div></div><div class="sub_tit_r"><div class="sub_tit_ch">051-710-6207</div></div>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection