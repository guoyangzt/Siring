// 轮播图
var mySwiper = new Swiper ('.swiper-container', {
    direction: 'horizontal',
    loop: true,
    autoplay: true,
    delay: 3000,
    // 如果需要分页器
    pagination: {
        el: '.swiper-pagination',
    },
    // 如果需要滚动条
    scrollbar: {
        el: '.swiper-scrollbar',
    },
}); 
var mySwiper2 = new Swiper ('.swiper-container2', {
    direction: 'horizontal',
    loop: true,
    autoplay: true,
    delay: 3000,
    // 如果需要分页器
    pagination: {
        el: '.swiper-pagination',
    },
    // 如果需要滚动条
    scrollbar: {
        el: '.swiper-scrollbar',
    },
    autoplay: {
        disableOnInteraction: false,
        delay: 3000,
    },
});   

// 意见反馈二维码
$('.handle_logo a').mouseenter(function(){
    var index = $(this).index();
    $(this).addClass('curr').siblings('a').removeClass('curr');
    $($('.code_box div')[index]).show().siblings('div').hide();
});

//弹窗插件初始化
(function(){
    layui.use('layer', function(){ //独立版的layer无需执行这一句
        var $ = layui.jquery, layer = layui.layer; //独立版的layer无需执行这一句
    });
})();

// aside 返回顶部
$(window).scroll(function () {
    if ($(document).scrollTop() >= 300) {
        $('.aside-item:last').css('opacity', '1');
    } else {
        $('.aside-item:last').css('opacity', '0');
    }
});
$('.aside-item:last').click(function () {
    $('html').animate({ scrollTop: 0 }, 500);
});
$('.aside-item:nth-last-child(2)').click(function(e){
    if(e.target.tagName == 'TEXTAREA') return;
    $(this).children('.float-container').toggle().children('textarea').val('');
})