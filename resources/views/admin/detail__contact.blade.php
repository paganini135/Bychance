@extends('layouts.admin')

@section('contents')
 

<div class="container">
    <div class="wrap">
       <div class="tit_box">
            <p class="tit">포트폴리오 등록</p>
        </div>
        <div class="cont">
        @foreach($data as $item)
            <div class="name-box">
                <div class="name"><span>프로젝트 유형</span></div>
                <div class="name-txt">{{$item -> project}}</div>
            </div>           
            <div class="name-box">
                <div class="name"><span>프로젝트 시작일</span></div>
                <div class="name-txt">{{$item -> pro_start}}</div>
            </div>
            <div class="name-box">
                <div class="name"><span>프로젝트 종료일</span></div>
                <div class="name-txt">{{$item -> pro_end}}</div>
            </div>
            <div class="name-box">
                <div class="name"><span>업체명</span></div>
                <div class="name-txt">{{$item -> cname}}</div>
            </div>
            <div class="name-box">
                <div class="name"><span>담당자명</span></div>
                <div class="name-txt">{{$item -> name}}</div>
            </div>
            <div class="name-box">
                <div class="name"><span>연락처</span></div>
                <div class="name-txt">{{$item -> phone}}</div>
            </div>
            <div class="name-box">
                <div class="name"><span>이메일</span></div>
                <div class="name-txt">{{$item -> email}}</div>
            </div>
            <div class="name-box">
                <div class="name"><span>프로젝트 내용</span></div>
                <div class="name-txt">{{$item -> contents}}</div>
            </div>
            
            <div class="name-box">
                <div class="name"><span>첨부파일</span></div>
                <div class="name-txt">
                {{$item -> file}}
                    <!-- <input type="file" id="text" name="" placeholder="사진넣으셈" required=""> -->
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
</div>



@endsection