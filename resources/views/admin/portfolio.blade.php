@extends('layouts.admin')

@section('contents')
 

<div class="container">
    <div class="wrap">
       <div class="tit_box">
            <p class="tit">포트폴리오</p>
        </div>
        <div class="row-2">
            <div class="row-1-btn">
                <button type="button" onclick="location.href='port_add';">추가하기</button>
            </div>
            <div class="row-1-btn">
                <button type="button">삭제</button>
            </div>
        </div>
        <div class="cont">
            <table>
                <tbody>
                    <tr class="table-row-1">
                        <th class="check"><input type="checkbox"></th>
                        <th>프로젝트</th>
                        <th>업체명</th>
                        <th>작성일</th>
                        <th>수정</th>
                    </tr>
                    <tr class="table-row-2">
                        <th class="check"><input type="checkbox"></th>
                        <th>Web</th>
                        <th>엠토</th>
                        <th>2022.02.02</th>
                        <th>수정</th>
                    </tr>
                    <tr class="table-row-2">
                        <th class="check"><input type="checkbox"></th>
                        <th>Brochure</th>
                        <th>깡통시장</th>
                        <th>2022.01.11</th>
                        <th>수정</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection