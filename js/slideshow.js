var Slideshow = function() {
    var max_img_index = 9 ;

    this.start_cycling = function() {
        preload_images();
        switch_image();
        start_cycling();
    }

    function preload_images() {
        var tempImg = [];
        for (var i=1;i<= max_img_index;i++)
        {
            tempImg[i] = new Image();
            tempImg[i].src = 'css/lmb_"+i+".jpg';
        }
    }

    function start_cycling() {
        setInterval(function() {$('#img_container').fadeOut(350, function() {
            switch_image(max_img_index);
        });}, 5000);
    }

    function switch_image() {
        var img_index=Math.floor(Math.random()*max_img_index)+1;
        $('#img_container').css('background-image', "url('images/slideshow/lmb_"+img_index+".jpg')");
        $('#img_container').fadeIn(350);
    }
}

$(document).ready(function() {
    var slideshow = new Slideshow();
    slideshow.start_cycling();
});
