//세로 메뉴

$(".nav > ul > li").hover(function(){
    $(this).find(".submenu").stop().slideDown();
}, function(){
    $(this).find(".submenu").stop().slideUp();
});

//이미지 슬라이드
$(".slideList").children("div:gt(0)").hide();

var currentIndex = 0;

setInterval(function(){
    var next = (currentIndex + 1) % 3;
    $(".slideList").find("div").eq(currentIndex).fadeOut();
    $(".slideList").find("div").eq(next).fadeIn();

    console.log("currentIndex=" + currentIndex);
    console.log("next=" + next);

    currentIndex = next;
},3000);