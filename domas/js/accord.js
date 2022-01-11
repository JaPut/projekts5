
$(function() {
    $('#accordion > li').hover(
        function () {
            var $this = $(this);
            $this.stop().animate({'width':'28vw'},500);
            $('.heading',$this).stop(true,true).fadeOut();
            $('.bgDescription',$this).stop(true,true).slideDown(500);
            $('.description',$this).stop(true,true).fadeIn();
        },
        function () {
            var $this = $(this);
            $this.stop().animate({'width':'10vw'},1000);
            $('.heading',$this).stop(true,true).fadeIn();
            $('.description',$this).stop(true,true).fadeOut(500);
            $('.bgDescription',$this).stop(true,true).slideUp(700);
        }
    );
});

$(document).ready(function(){
    $("#eye").animate({
           left: '42.1vw',
           opacity: '0.1',
        }, 10000, 'linear').animate({
           left: '41.9vw',
           opacity: '1',
        }, 10000, 'linear');

});
