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
                <li><a href="{!!route('simple_contact')!!}">간편상담</a></li>
                <li><a href="{!!route('contact')!!}" class="active">상세등록</a></li>
            </ul>
        </div>
    </div>
    <div class="inner_wrap container">
        <div class="about_box pb-70">
            <h2>프로젝트 상세등록</h2>
            <div class="login-box">
  <h2>프로젝트 내용을 구체적으로 작성해주세요.</h2>
  <form action="{!! route('calls') !!}" method="post" enctype="multipart/form-data" name="frm" id="frm">
    @csrf
  <div class="user-box">
      <select name="project">
        <option>프로젝트를 선택해주세요.</option>
        <option value="웹">웹</option>
				<option value="상세페이지">상세페이지</option>
				<option value="카달로그">카달로그</option>
				<option value="영상">영상</option>
      </select>
      <label>프로젝트 선택</label>
    </div>
    <div class="user-box_2">
      <input type="date" name="pro_start" required="">
      <label class="label_up">예상 프로젝트 시작일</label>
    </div>
    <div class="user-box_2">
      <input type="date" name="pro_end" required="">
      <label>예상 프로젝트 종료일</label>
    </div>
    <div class="user-box">
      <input type="text" name="cname" required="">
      <label>업체명</label>
    </div>
    <div class="user-box">
      <input type="text" name="name" required="">
      <label>담당자명</label>
    </div>
    <div class="user-box">
      <input type="text" name="phone" required="">
      <label>연락처</label>
    </div>
    <div class="user-box">
      <input type="text" name="email" required="">
      <label>이메일</label>
    </div>
    <div class="user-box">
    <textarea name="contents" required="" class="cus" wrap="soft"></textarea>
      <!-- <input type="textarea" name="contents" required="" class="cus" wrap="soft"> -->
      <label>프로젝트 내용</label>
    </div>
    <div class="user-box_2">
      <input type="file" name="file" required="">
      <label>첨부파일</label>
    </div>
    <a href="#" onclick="return chk_form()">
    <input type="hidden" value="상세" name="type">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      등록
    </a>
  </form>
</div>
        </div>
    </div>
</div>

<script>
	function chk_form(){
		document.getElementById('frm').submit();
	}
</script>

@endsection