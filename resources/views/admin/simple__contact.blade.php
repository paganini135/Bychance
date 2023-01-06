@extends('layouts.admin')

@section('contents')
 

<div class="container">
    <div class="wrap">
       <div class="tit_box">
            <p class="tit">간편상담</p>
        </div>
        <div class="cont">
            <div class="name-box">
                <div class="name-box">
                <div class="name"><span>프로젝트</span></div>
                <div class="name-txt"><input type="text" id="text" name="" required=""></div>
            </div>
            </div>
            <div class="name-box">
                <div class="name"><span>업체명</span></div>
                <div class="name-txt"><input type="text" id="text" name="" required=""></div>
            </div>
            <div class="name-box">
                <div class="name"><span>담당자명</span></div>
                <div class="name-txt"><input type="text" id="text" name="" required=""></div>
            </div>
            <div class="name-box">
                <div class="name"><span>연락처</span></div>
                <div class="name-txt"><input type="text" id="text" name="" required=""></div>
            </div>
            <div class="name-box">
                <div class="name"><span>이메일</span></div>
                <div class="name-txt"><input type="text" id="text" name="" required=""></div>
            </div>
            <div class="name-box">
                <div class="name"><span>첨부파일</span></div>
                <div class="name-txt"><input type="text" id="text" name="" required=""></div>
            </div>
        </div>
        
    </div>
</div>



@endsection