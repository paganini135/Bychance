@extends('layouts.admin')

@section('contents')
 

<div class="container">
    <div class="wrap">
       <div class="tit_box">
            <p class="tit">포트폴리오 등록</p>
        </div>
        <div class="cont">
            <div class="name-box">
               <div class="name"> <span>프로젝트 선택</span> </div>
               <div class="name-txt">
                    <select name="선택" class="select_box">
                        <option>프로젝트를 선택해주세요.</option>
                        <option>WEB</option>
                        <option>상세페이지</option>
                        <option>Broshure</option>
                        <option>영상</option>
                    </select>
                </div>
            </div>
            <div class="name-box">
                <div class="name"><span>프로젝트 시작일</span></div>
                <div class="name-txt"><input type="text" id="text" name="" placeholder="" required=""></div>
            </div>
            <div class="name-box">
                <div class="name"><span>프로젝트 종료일</span></div>
                <div class="name-txt"><input type="text" id="text" name="" placeholder="" required=""></div>
            </div>
            <div class="name-box">
                <div class="name"><span>업체명</span></div>
                <div class="name-txt"><input type="text" id="text" name="" placeholder="" required=""></div>
            </div>
            <div class="name-box">
                <div class="name"><span>담당자명</span></div>
                <div class="name-txt"><input type="text" id="text" name="" placeholder="" required=""></div>
            </div>
            <div class="name-box">
                <div class="name"><span>연락처</span></div>
                <div class="name-txt"><input type="text" id="text" name="" placeholder="" required=""></div>
            </div>
            <div class="name-box">
                <div class="name"><span>이메일</span></div>
                <div class="name-txt"><input type="text" id="text" name="" placeholder="" required=""></div>
            </div>
            <div class="name-box">
                <div class="name"><span>프로젝트 내용</span></div>
                <div class="name-txt"><input type="text" id="text" name="" placeholder="" required=""></div>
            </div>
            
            <div class="name-box">
                <div class="name"><span>첨부파일</span></div>
                <div class="name-txt"><input type="file" id="text" name="" placeholder="사진넣으셈" required=""></div>
            </div>
        </div>
        
    </div>
</div>



@endsection