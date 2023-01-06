@extends('layouts.admin')

@section('contents')
 

<div class="container">
    <div class="wrap">
        <div class="tit_box">
            <p class="tit">상담신청현황</p>
        </div>
        <div class="row-2">
            <div class="row-1-btn">
                <button type="button">삭제</button>
            </div>
        </div>
        <div class="cont">
            <table>
                <tbody>
                    <tr class="table-row-1">
                        <th class="check"><input type="checkbox"></th>
                        <th>상담유형</th>
                        <th>프로젝트</th>
                        <th>업체명</th>
                        <th>작성일</th>
                        <th>확인</th>
                    </tr>
                    @foreach($Contacts as $item)
                    <tr class="table-row-2">
                        <th class="check"><input type="checkbox"></th>
                        <th><a href="detail__contact">{{$item -> type}}</a></th>
                        <th>{{$item -> project}}</th>
                        <th>{{$item -> cname}}</th>
                        <th>{{$item -> created_at}}</th>
                        <th>{{$item -> confirm}}</th>
                    </tr>
                    @endforeach
                    <!-- <tr class="table-row-2">
                        <th class="check"><input type="checkbox"></th>
                        <th><a href="simple__contact">간편</a></th>
                        <th>Web</th>
                        <th>로떼</th>
                        <th>2022.02.02</th>
                        <th>미완료</th>
                    </tr>
                    <tr class="table-row-2">
                        <th class="check"><input type="checkbox"></th>
                        <th><a href="detail__contact">상세</th>
                        <th>Web</th>
                        <th>쌈썽</th>
                        <th>2022.02.02</th>
                        <th>미완료</th>
                    </tr>
                    <tr class="table-row-2">
                        <th class="check"><input type="checkbox"></th>
                        <th>상세</th>
                        <th>Web</th>
                        <th>테스트</th>
                        <th>2002.02.01</th>
                        <th>완료</th>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection