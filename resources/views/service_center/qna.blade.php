@extends('layouts.app')

@section('contents')
<div class="content">
    <div class="sub_banner">
        <div class="sub_banner_tit_wrap">
            <h1>자주하는 질문</h1>
            <p><i class="fas fa-home"></i><i class="fas fa-chevron-right"></i>Contact<i class="fas fa-chevron-right"></i>자주묻는질문</p>
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
            <h2>FQA</h2>
            <div class="qna_box_wrap">
                <div class="qna_box_1"><div class="qna_box_q">Q</div><div class="qna_tit">계약절차는 어떻게 되나요?</div><div class="qna_up"><i class="fas fa-angle-up"></i></div>
                    <div class="qna_box__2"><div class="qna_box_a1">내용이 들어갈 곳<br><br>1.내용 내용<br>2.ㅇㅇㅇ<br><br>3.ㅇㅇㅇㅇ</div></div>
                </div>
                <div class="qna_box_2"><div class="qna_box_q">Q</div><div class="qna_tit">계약절차는 어떻게 되나요?</div><div class="qna_up"><i class="fas fa-angle-up"></i></div>
                    <div class="qna_box__2"><div class="qna_box_a2 Toggle" style="display: none;">내용</div></div>
                </div>
                <div class="qna_box_3"><div class="qna_box_q">Q</div><div class="qna_tit">계약절차는 어떻게 되나요?</div><div class="qna_up"><i class="fas fa-angle-up"></i></div>
                    <div class="qna_box__2"><div class="qna_box_a3 Toggle" style="display: none;">내용</div></div>
                </div>
                <div class="qna_box_4"><div class="qna_box_q">Q</div><div class="qna_tit">계약절차는 어떻게 되나요?</div><div class="qna_up"><i class="fas fa-angle-up"></i></div>
                    <div class="qna_box__2"><div class="qna_box_a4 Toggle" style="display: none;">내용</div></div>
                </div>
                <div class="qna_box_5"><div class="qna_box_q">Q</div><div class="qna_tit">계약절차는 어떻게 되나요?</div><div class="qna_up"><i class="fas fa-angle-up"></i></div>
                    <div class="qna_box__2"><div class="qna_box_a5 Toggle" style="display: none;">내용</div></div>
                </div>
            </div>
        <!-- <div class="qna_box_wrap">
            <div class="qna_box"><div class="qna_box_q">계약 절차는 어떻게 되나요?</div></div>
            <div class="qna_box mt-30"><div class="qna_box_a">1. 계약서 날인및 선급금 50% 결제, 전자세금계산서 발행
<br>
2. 기획요청서및 자료 전달
<br>
3. 1차시안 컨펌(불만족시 환불)
<br>
4. 수정및 제작
<br>
5. 제작완료 컨펌
<br>
6. 잔금 50% 결제 및 납품(도메인,호스팅,소유권 고객권한변경)</div></div>
        </div>
        <div class="qna_box mt-30"><div class="qna_box_q">계약 절차는 어떻게 되나요?</div></div>
            <div class="qna_box mt-30"><div class="qna_box_a">1. 계약서 날인및 선급금 50% 결제, 전자세금계산서 발행
<br>
2. 기획요청서및 자료 전달
<br>
3. 1차시안 컨펌(불만족시 환불)
<br>
4. 수정및 제작
<br>
5. 제작완료 컨펌
<br>
6. 잔금 50% 결제 및 납품(도메인,호스팅,소유권 고객권한변경)</div></div> -->
        </div>
        </div>
    </div>
</div>

@endsection