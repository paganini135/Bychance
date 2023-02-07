@extends('layouts.admin')

@section('contents')
 

<div class="container">
    <div class="wrap">
       <div class="tit_box">
            <p class="tit">포트폴리오 등록</p>
        </div>
        <div class="cont">
        @foreach($data as $item)
        @csrf
        @if(isset($item->project))
            <div class="name-box">
                <div class="name"><span>프로젝트 유형</span></div>
                <div class="name-txt">{{$item -> project}}</div>
            </div>
        @endif
        @if(isset($item->pro_start))           
            <div class="name-box">
                <div class="name"><span>프로젝트 시작일</span></div>
                <div class="name-txt">{{$item -> pro_start}}</div>
            </div>
        @endif
        @if(isset($item->pro_end))
            <div class="name-box">
                <div class="name"><span>프로젝트 종료일</span></div>
                <div class="name-txt">{{$item -> pro_end}}</div>
            </div>
        @endif
        @if(isset($item->cname))
            <div class="name-box">
                <div class="name"><span>업체명</span></div>
                <div class="name-txt">{{$item -> cname}}</div>
            </div>
        @endif
        @if(isset($item->name))
            <div class="name-box">
                <div class="name"><span>담당자명</span></div>
                <div class="name-txt">{{$item -> name}}</div>
            </div>
        @endif
        @if(isset($item->phone))
            <div class="name-box">
                <div class="name"><span>연락처</span></div>
                <div class="name-txt">{{$item -> phone}}</div>
            </div>
        @endif
        @if(isset($item->email))
            <div class="name-box">
                <div class="name"><span>이메일</span></div>
                <div class="name-txt">{{$item -> email}}</div>
            </div>
        @endif
        @if(isset($item->contents))
            <div class="name-box">
                <div class="name"><span>프로젝트 내용</span></div>
                <div class="name-txt">{{$item -> contents}}</div>
            </div>
        @endif
        @if(isset($item->file))    
            <div class="name-box">
                <div class="name"><span>첨부파일</span></div>
                <div class="name-txt">
               <a href="{{ route('download', ['id' => $item->id]) }}">Download</a>
                </div>
            </div>
        @endif
            @endforeach
        </div>
        
    </div>
</div>



@endsection