// 메인 슬릭슬라이드
var swiper = new Swiper(".mySwiper", {
    loop: true,
    spaceBetween: 30,
    centeredSlides: true,
    speed : 1500,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

// 포트폴리오 슬라이드
var bullet = ['Step1','Step2','Step3','Step4'];

		new Swiper( '.myswiper2', {

		// 큐브 효과 사용
		effect : 'cube',
		// 드래그 막기
		touchRatio: 0,

    // 높이고정
    autoHeighit: false,

		// 슬라이드 반복
		loop : true,
		// 
		speed : 1500,

		// 페이징 설정
		pagination : {

		// 페이징 요소의 클래스명
		el : '.swiper-pagination-port',

		// 페이징을 클릭하면 해당 영역으로 이동, 필요시 지정해 줘야 기능 작동
		clickable : true,
		// 페이지네이션 커스텀
		renderBullet: function (index, className) {
      return '<div class="' + className + '"><span class="process__button">' + (bullet[index]) + '</span></div>';
    }

	},

});


var swiper1 = new Swiper(".discover__container", {
  effect: "coverflow",
  slidesPerView: 1,
  slidesPerGroup: 1,
  grabCursor: true,
  centeredSlides: true,
  initialSlide: 1,
  slideShadows: false,
  slideToClickedSlide : true,
  speed : 1500,
  //  slidesPerView: "auto",
  loop: true,
  spaceBetween: 10,
  coverflowEffect: {
    rotate: 30
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    768:{
      slidesPerView: 2,
      spaceBetween: 30,
      coverflowEffect: {
        rotate: 0
      }
    },
    1024:{
      slidesPerView: 3,
      spaceBetween: 200,
      coverflowEffect: {
        rotate: 15
      }
    }
    
  }
});