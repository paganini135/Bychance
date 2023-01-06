// 헤더 
const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close')
        // 아이콘 클릭 시 메뉴바
        if(navToggle){
            navToggle.addEventListener('click', () =>{
            navMenu.classList.add('show-menu')
            })
        }

        if(navClose){
            navClose.addEventListener('click', () =>{
                navMenu.classList.remove('show-menu')
            })
          }
    

// 포트폴리오 메뉴 선택
$(document).ready(function(){
    var tabAnchor = $('.select__portfolio a'),
        tabPanel = $('.portfolio__area');

        tabAnchor.click(function(e){
            e.preventDefault();

            tabAnchor.removeClass('active');            
            $(this).addClass('active');
            

            tabPanel.hide();

            var $target = $(this).attr('href');

            
            $($target).slideDown(1000);
            
        });
});
// 페이드인 페이드아웃 
$('#slide3>ul>li').hide();
$('#slide3>ul>li:first-child').show();

setInterval(function(){
    $('#slide3>ul>li:first-child').fadeOut()
    .next().fadeIn().end(1000)
    .appendTo('#slide3>ul');
},3000);



// 포트폴리오 메뉴 선택

// 스크롤헤더
/*==================== CHANGE BACKGROUND HEADER. 스크롤 할 때 어느순간 navbar 배경이 흰색으로 변경 ====================*/
function scrollHeader(){
    const header = document.getElementById('header')
    // When the scroll is greater than 100 viewport height, add the scroll-header class to the header tag
    if(this.scrollY >= 100){ 
      header.classList.add('scroll-header');
     } else { 
       header.classList.remove('scroll-header')
     }
  }
  window.addEventListener('scroll', scrollHeader)

//   날짜

$('#slide > div:gt(0)').hide();

setInterval(function(){
    $('#slide > div:first')
        .fadeOut(2000)
        .next()
        .fadeIn(2000)
        .end()
        .appendTo('#slide');
},6000);

// 버튼

$(function (){
	$(".qna_box_1").click(function (){
  	$(".qna_box_a1").toggle();
      this.toggle();
  });
  $(".qna_box_2").click(function (){
    $(".qna_box_a2").toggle();
    this.toggle();
});
$(".qna_box_3").click(function (){
    $(".qna_box_a3").toggle();
    this.toggle();
});
$(".qna_box_4").click(function (){
    $(".qna_box_a4").toggle();
    this.toggle();
});
$(".qna_box_5").click(function (){
    $(".qna_box_a5").toggle();
    this.toggle();
});
});