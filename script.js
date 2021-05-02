
//Back to top button
$(function(){
var btn = $('.top');
$(window).scroll(function(){
     if ($(window).scrollTop() < 100) {
       btn.addClass('hidden');
}    
     else {
       btn.removeClass('hidden');
}
});
});
