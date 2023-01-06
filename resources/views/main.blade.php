@extends('layouts.app')

@section('contents')
 
<div class="content">
	<!-- 스와이퍼 테스트 -->
	<!-- Slider main container -->
	<div class="main">
		<div id="slide">
			<div><img src="/imgs/visual1.jpg" alt=""><div class="sw_text__box"><h1>슬라이드1</h1></div></div>
			<div><img src="/imgs/banner2.jpg" alt=""><div class="sw_text__box"><h1>슬라이드2</h1></div></div>
			<div><img src="/imgs/banner3.jpg" alt=""><div class="sw_text__box"><h1>슬라이드3</h1></div></div>
		</div>
	</div>
	<!-- <div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="/imgs/visual1.jpg"><div class="sw_text__box"><h1>슬라이드1</h1></div></div>
        <div class="swiper-slide"><img src="/imgs/visual2.png"><div class="sw_text__box"><h1>슬라이드2</h1></div></div>
        <div class="swiper-slide"><img src="/imgs/visual1.jpg"><div class="sw_text__box"><h1>슬라이드3</h1></div></div>
      </div>
      <div class="swiper-button-next swiper-button-color"></div>
      <div class="swiper-button-prev swiper-button-color"></div>
      <div class="swiper-pagination swiper-button-color"></div>
    </div> -->
</div>
	
	

	<!-- <div class="container"> -->
		<div class="container">
		<div class="icon_box_wrap mt-100">
			<h1>Main service</h1>
			<h2 class="mt-20">subtitle</h2>

			<div class="f__box mt-50">
				<section>
				<div class="ms_back">
				<div class="ms__"><h1>WEB</h1><span class="ms_detail_1">기업 홈페이지<br>쇼핑몰 | 상세페이지</span><span class="ms_detail" onclick="location.href='service'">VIEW</span></div>
				<div class="ms__"><h1>상세페이지</h1><span class="ms_detail_1">상세페이지 제작</span><span class="ms_detail" onclick="location.href='service'">VIEW</span></div>
				<div class="ms__"><h1>시각 디자인</h1><span class="ms_detail_1">종이카달로그 | 전자카달로그 | 회사소개서<br>광고디자인 | 제품디자인</span><span class="ms_detail" onclick="location.href='service'">VIEW</span></div>
				<div class="ms__"><h1>홍보 동영상</h1><span class="ms_detail_1">CF | 브랜드<br>제품 | 유튜브</span><span class="ms_detail" onclick="location.href='service'">VIEW</span></div>
				</div>
				<section>
			</div>
		</div>
		</div>		
		<div class="container">
		<div class="icon_box_wrap mt-100">
			<h1>Portfolio</h1>
			<h2 class="mt-20">subtitle</h2>
			<div class="select__portfolio_wrap mt-30">
				<!-- <div class="select__portfolio"><a href="#portfolio1">All</a></div> -->
				<div class="select__portfolio"><a href="#portfolio2">반응형 웹</a></div>
				<div class="select__portfolio"><a href="#portfolio3">상세페이지</a></div>
				<div class="select__portfolio"><a href="#portfolio4">카달로그</a></div>
				<div class="select__portfolio"><a href="#portfolio5">영      상</a></div>
			</div>

			<div class="f__box mt-50">
				<!-- 다중 슬라이드 테스트 -->
				<div class="discover__container container portfolio-container portfolio__area" id="portfolio1">
					<div class="swiper-wrapper">
					  <!--==================== DISCOVER 1 ====================-->
					  <div class="portfolio__card swiper-slide">
						<img src="/imgs/portfolio/port1.png" alt="" class="discover__img mt-0">
						<div class="portfolio__data">
						  <h2 class="portfolio__title">테스트-All</h2>
						  <span class="portfolio__description">#Web #반응형</span>
						</div>
					  </div>
				   <!-- ...-->
				   <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/port2.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">웨딩뷰</h2>
					  <span class="portfolio__description">#Web #반응형</span>
					</div>
				  </div>
				  <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/port3.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">엠토</h2>
					  <span class="portfolio__description">#Web #반응형</span>
					</div>
				  </div>
				  <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/port4.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">대길부산의전</h2>
					  <span class="portfolio__description">#Web #반응형</span>
					</div>
				  </div>
				  <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/port5.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">테스트</h2>
					  <span class="portfolio__description">#Web #반응형</span>
					</div>
				  </div>
					</div>
					<div class="swiper-button-next"></div>
      				<div class="swiper-button-prev"></div>
				  </div>
				  <div class="discover__container container portfolio-container portfolio__area" id="portfolio2">
					<div class="swiper-wrapper">
					  <!--==================== DISCOVER 1 ====================-->
					  <div class="portfolio__card swiper-slide">
						<img src="/imgs/portfolio/port1.png" alt="" class="discover__img mt-0">
						<div class="portfolio__data">
						  <h2 class="portfolio__title">테스트-포트1</h2>
						  <span class="portfolio__description">#Web #반응형</span>
						</div>
					  </div>
				   <!-- ...-->
				   <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/port2.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">웨딩뷰</h2>
					  <span class="portfolio__description">#Web #반응형</span>
					</div>
				  </div>
				  <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/port3.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">엠토</h2>
					  <span class="portfolio__description">#Web #반응형</span>
					</div>
				  </div>
				  <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/port4.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">대길부산의전</h2>
					  <span class="portfolio__description">#Web #반응형</span>
					</div>
				  </div>
				  <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/port5.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">테스트</h2>
					  <span class="portfolio__description">#Web #반응형</span>
					</div>
				  </div>
					</div>
					<div class="swiper-button-next"></div>
      				<div class="swiper-button-prev"></div>
				  </div>
				  <div class="discover__container container portfolio-container portfolio__area" id="portfolio3">
					<div class="swiper-wrapper">
					  <!--==================== DISCOVER 1 ====================-->
					  <div class="portfolio__card swiper-slide">
						<img src="/imgs/portfolio/bro_test.jpg" alt="" class="discover__img mt-0">
						<div class="portfolio__data">
						  <h2 class="portfolio__title">테스트</h2>
						  <span class="portfolio__description">#Brochure #Test_img</span>
						</div>
					  </div>
				   <!-- ...-->
				   <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/bro_test.jpg" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">테스트</h2>
					  <span class="portfolio__description">#Brochure #Test_img</span>
					</div>
				  </div>
				  <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/bro_test.jpg" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">테스트</h2>
					  <span class="portfolio__description">#Brochure #Test_img</span>
					</div>
				  </div>
				  <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/bro_test.jpg" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">테스트</h2>
					  <span class="portfolio__description">#Brochure #Test_img</span>
					</div>
				  </div>
				  <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/bro_test.jpg" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">테스트</h2>
					  <span class="portfolio__description">#Brochure #Test_img</span>
					</div>
				  </div>
					</div>
					<div class="swiper-button-next"></div>
      				<div class="swiper-button-prev"></div>
				  </div>
				  <div class="discover__container container portfolio-container portfolio__area" id="portfolio4">
					<div class="swiper-wrapper">
					  <!--==================== DISCOVER 1 ====================-->
					  <div class="portfolio__card swiper-slide">
						<img src="/imgs/portfolio/catal/catal__001.png" alt="" class="discover__img mt-0">
						<div class="portfolio__data">
						  <h2 class="portfolio__title">비비에프</h2>
						  <span class="portfolio__description">#카달로그</span>
						</div>
					  </div>
				   <!-- ...-->
				   <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/catal/catal__002.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">WeddingView</h2>
					  <span class="portfolio__description">#카달로그</span>
					</div>
				  </div>
				  <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/catal/catal__003.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">서대신동 골목시장</h2>
					  <span class="portfolio__description">#카달로그</span>
					</div>
				  </div>
					</div>
					<div class="swiper-button-next"></div>
      				<div class="swiper-button-prev"></div>
				  </div>
				  <div class="discover__container container portfolio-container portfolio__area" id="portfolio5">
					<div class="swiper-wrapper">
					  <!--==================== DISCOVER 1 ====================-->
					  <div class="portfolio__card swiper-slide">
						<img src="/imgs/portfolio/video/video__001.png" alt="" class="discover__img mt-0">
						<div class="portfolio__data">
						  <h2 class="portfolio__title">WeddingView</h2>
						  <span class="portfolio__description">#영상</span>
						</div>
					  </div>
				   <!-- ...-->
				   <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/video/video__002.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">아시아드시티 웨딩홀</h2>
					  <span class="portfolio__description">#영상</span>
					</div>
				  </div>
				  <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/video/video__003.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">라온 웨딩홀</h2>
					  <span class="portfolio__description">#영상</span>
					</div>
				  </div>
				  <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/video/video__004.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">웨딩뷰 소개영상</h2>
					  <span class="portfolio__description">#영상</span>
					</div>
				  </div>
				  <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/video/video__005.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">비비엔다 스튜디오</h2>
					  <span class="portfolio__description">#영상</span>
					</div>
				  </div>
					</div>
					<div class="swiper-button-next"></div>
      				<div class="swiper-button-prev"></div>
				  </div>
				  <!-- 다중 슬라이드 테스트 -->
			</div>
			
		</div>
		</div>
		<!-- 포폴 박스 완 -->
		<!-- Process box Start -->
		<!-- 문의, 기획, 시안제작, 프로젝트 -->
		<div class="process__wrap">
		<div class="icon_box_wrap mt-50 pt-50 pb-50 container">
			<h1 class="bg-color-1">Process</h1>
			<h2 class="bg-color-2 mt-20">subtitle</h2>
			<div class="portfolio_container process_box_wrap myswiper2 mt-50">
			<div class="swiper-pagination-port"></div>
			<div class="swiper-wrapper  mt-30">
				<div class="swiper-slide process_slide"><img src="/imgs/process/process_1.jpg"><div class="process__data"><h2>견적문의</h2><div class="process__data_cont"><p>1. 문의, 의뢰</p><p>2. 컨셉 미팅</p><p>3. 완료일정 협의</p><p>4. 견적후 계약</p></div></div></div>
				<div class="swiper-slide process_slide"><img src="/imgs/process/process_2.jpg"><div class="process__data"><h2>기획 및 시안제작</h2><div class="process__data_cont"><p>1. 벤치마킹 시장조사</p><p>2. 기획</p><p>3. 시안 2~3가지</p><p>4. 피드백</p></div></div></div>
				<div class="swiper-slide process_slide"><img src="/imgs/process/process_3.jpg"><div class="process__data"><h2>디자인 수정</h2><div class="process__data_cont"><p>1. 전체시안 발송</p><p>2. 피드백</p><p>3. 수정, 교정</p><p>4. OK 발주서</p></div></div></div>
				<div class="swiper-slide process_slide"><img src="/imgs/process/process_4.jpg"><div class="process__data"><h2>프로젝트 배포</h2><div class="process__data_cont"><p>1. 납품 및 업로드</p><p>2. 웹 제작시 오류체크</p><p>3. 수정, 오류 반영</p><p>4. 계약기간동안 관리</p></div></div></div>
			</div>
			</div>
			
		</div>
		</div>
		<!-- Process box End -->
	<div class="container">
		<div class="icon_box_f_wrap">
		<div class="icon_box_wrap_1 mt-100">
			<h1 class="welcome pb-50">Contact</h1>

			<div class="f__box contact__wrap">
				
				<div style="width:100%;">
				<div class="text__area_box-1">
					<div class ="text__cont mt-10">간편상담</div>
					<div class ="text__cont mt-10" style="width:100%;">상담신청 후 3~7일 이내에 연락드립니다.</div>
				</div>
				
				
				<div class="cont-box-wrap">
				<div class="cont-box">
					<select name="">
						<option>프로젝트를 선택해주세요.</option>
						<option>웹</option>
						<option>상세페이지</option>
						<option>카달로그</option>
						<option>영상</option>
					</select>
					<label>프로젝트 선택</label>
				</div>
				<div class="cont-box-2">
					<input type="text" name="" required="">
					<label>업체명</label>
				</div>
				<div class="cont-box-2">
					<input type="text" name="" required="">
					<label>담당자명</label>
				</div>
				<div class="cont-box-2">
					<input type="text" name="" required="">
					<label>연락처</label>
				</div>
				<div class="cont-box-2">
					<input type="text" name="" required="">
					<label>이메일</label>
				</div>
				<div class="cont-box-2">
					<input type="file">
					<label>첨부파일</label>
				</div>
				<a href="#">
     			 <span></span>
     			 <span></span>
     			 <span></span>
     			 <span></span>
     			 상담신청
    			</a>
				</div>
					<!-- <table class="contact__table">
						<tr>
							<td colspan="2">
							<select name="project" style="background-color:transparent;" class="bct-input-select">
        						<option>프로젝트를 선택하세요.</option>
        						<option>Web</option>
        						<option>Web2</option>
        						<option>Web3</option>
      						</select>
							<label>ㅇㅇㅇ</label>
							</td>
						</tr>
						<tr>
							<td>
      							<input type="email" id="bct-input-text" placeholder="업체명" name="cname">
							</td>
							<td>
      							<input type="email" id="bct-input-text" placeholder="담당자명" name="name">
							</td>
						</tr>
						<tr>
							<td>
      							<input type="email" id="bct-input-text" placeholder="연락처" name="phone">
							</td>
							<td>
      							<input type="email" id="bct-input-text" class="contact__text" placeholder="이메일" name="email">
							</td>
						</tr>
						<tr>
							<td>
      							<input type="file" id="bct-input-text" placeholder="" name="file">
							</td>
							<td>
      							<input type="submit" id="bct-input-text" placeholder="">
							</td>
						</tr>
					</table> -->
				</div>
			</div>
		</div>

		<div class="icon_box_wrap_2 mt-100">
			<h1 class="welcome pb-50">way to come</h1>
			<div class="text__area_box">
				<!-- <h2 class="text__area"><span class="text__area__cont">1</span><span class="text__area__cont">2</span></h2> -->
			
			<div class="text__area mt-10">	
			<div class="text__cont">주소 : 부산광역시 동구 조방로 26번길 9 401호</div>
			</div>
			<div class="text__area_2 mt-10">
			<div class="text__cont half">전화번호 : 051-710-6207</div><div class="text__cont half half_mt">이메일 : weddingview20@gmail.com</div>
			</div>				
			</div>

			<div class="f__box mt-10">
				
				<div class="map_wrap">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3262.6739770546965!2d129.0627931!3d35.139808599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3568eb837c50accb%3A0x12ef6ec95a5e8b66!2z67aA7IKw6rSR7Jet7IucIOuPmeq1rCDsobDrsKnroZwyNuuyiOq4uCA5!5e0!3m2!1sko!2skr!4v1667958347677!5m2!1sko!2skr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
		</div>
	</div>
	<!-- </div> -->
</div>


<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script type="text/javascript" src="/js/swiper.js"></script>



@endsection