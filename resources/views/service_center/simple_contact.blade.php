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
                <li><a href="{!!route('detail_contact')!!}">상세등록</a></li>
            </ul>
        </div>
    </div>
    <div class="inner_wrap container">
        <div class="about_box pb-70">
            <h2>프로젝트 간편상담</h2>
            <div class="login-box">
  <h2>업체정보와 첨부파일을 등록해주세요.</h2>
  <form>
  <div class="user-box">
      <select name="tq" style="background-color:transparent;">
        <option>프로젝트를 선택해주세요.</option>
        <option>Web</option>
        <option>Web2</option>
        <option>Web3</option>
      </select>
      <label>프로젝트 선택</label>
    </div>
    <div class="user-box">
      <input type="text" name="" required="">
      <label>업체명</label>
    </div>
    <div class="user-box">
      <input type="text" name="" required="">
      <label>담당자명</label>
    </div>
    <div class="user-box">
      <input type="number" name="" required="">
      <label>연락처</label>
    </div>
    <div class="user-box">
      <input type="email" name="" required="">
      <label>이메일</label>
    </div>
    <div class="user-box_2">
      <input type="file" name="" required="">
      <label>첨부파일</label>
    </div>
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </a>
  </form>
</div>
        </div>
    </div>
</div>

@endsection