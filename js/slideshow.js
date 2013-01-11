var Slideshow = function() {
    var max_img_index = 12;
    
    this.run = function() {
        switch_image(max_img_index);
        $preload_div = get_preload_div();
        $($preload_div).waitForImages(function() {
            start_cycling();
        });
    }

    function start_cycling() {
        setInterval(function() {
            $('#header_container').css('background-image', $('#img_container').css('background-image'));
            $('#img_container').fadeOut(800, function() {
                switch_image(max_img_index);
                $('#img_container').fadeIn(800);
            });
        }, 5000);
    }

    function switch_image() {
        var img_index=Math.floor(Math.random()*max_img_index)+1;
        //var img_index = 4;
        $('#img_container').css('background-image', "url('images/slideshow/lmb_"+img_index+".jpg')");
    }
    
    function get_preload_div() {
        $div = $('<div />');
        for (var i=1;i<=max_img_index;i++)
        {
            $('<img />').attr('src', 'images/slideshow/lmb_'+i+'.jpg').appendTo($div).css('display','none');
        }
        return $div;
    }
}

$(document).ready(function() {
    var slideshow = new Slideshow();
    slideshow.run();
});
