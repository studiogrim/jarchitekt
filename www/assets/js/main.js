$(document).ready(function () {


   /* $(".a-cookies-bar button").click(function () {
        $(".a-cookies-bar").addClass("hidden");
        var d = new Date;
        d.setTime(d.getTime() + 30*24*60*60*1000);
        document.cookie = "cookiesBar=hidden;path=/;expires=" + d.toGMTString();
    });*/


    $(".u-scroll-to[data-target]").click(function (e) {
        e.preventDefault();
        if($($(this).attr("data-target")).length){
            scrollTo($($(this).attr("data-target")));
        }
        $(".o-header .m-nav").removeClass("opened");
    });

    $(".toggle-navbar").click(function () {
        if($(".main-nav").hasClass("opened")){
            $(".main-nav").removeClass("opened");
            $("body").removeClass("hidden-scroll").css("padding-right", 0);
        }else{
            $(".main-nav").addClass("opened");
            $("body").addClass("hidden-scroll").css("padding-right", getScrollBarWidth());
        }

    });

    if($(".project-content .a-thumbnail.image").length){
        $(".project-content .a-thumbnail.image").simpleLightbox({
            showCounter: false,
            loop: false,
            widthRatio: 0.75,
            heightRatio: 0.85,
            animationSpeed: 200,
            closeText: '',
            navText: ['','']
        });
    }
    if($(".o-masonry .masonry-item").length){
        $('.o-masonry').masonry({
            itemSelector: '.masonry-item'
        });
    }
    if($(".o-masonry").length){
        $(".o-masonry .grid-item img").not(".color").on("load", function(){
            $(this).parents(".o-masonry").masonry({
                itemSelector: '.masonry-item'
            });
        });
    }

    if($(".o-wall").length){
        $(".o-wall .wall-item").not(".item-logo").mouseenter(function () {
            $(".o-wall .wall-item").not(".item-logo").css("z-index", "1");
            $(this).css("z-index", "5");
        })
    }
    if($(".p-projekty").length){
        $(".o-masonry .grid-item").mouseenter(function () {
            $(".o-masonry .grid-item").css("z-index", "1");
            $(this).css("z-index", "5");
        });
    }

    if($(".a-thumbnail.image").length){
        $(".a-thumbnail.image").append('<span class="zoom"><i class="fas fa-search"></i></span>');
    }
    if($(".a-thumbnail.video").length){
        $(".a-thumbnail.video").append('<span class="video"><i class="fas fa-play"></i></span>');

        $(".a-thumbnail.video").click(function (e) {
            e.preventDefault();
            var videoSrc = $(this).attr("href");
            $("body").append('<div class="sl-overlay" id="video-lightbox"><div class="video-container"> ' +
                '<video class="a-video" controls>' +
                    '<source src="'+videoSrc+'" type="video/mp4">' +
                '</video>' +
                '<button class="sl-close" id="video-close"></button>' +
                '</div></div>');
            var vl = $("#video-lightbox");
            var vc = $("#video-close");
            var v = $("#video-lightbox video");

            $("body").addClass("hidden-scroll").css("padding-right", getScrollBarWidth());

            v.trigger("play");

            vl.click(function (e) {
                if($(e.target).hasClass("video-container")){
                    closeVideo();
                }
            });
            vc.click(function () {
                closeVideo();
            });
            function closeVideo(){
                vl.fadeOut(200);
                v.trigger('pause');
                setTimeout(function () {
                    $("body").removeClass("hidden-scroll").css("padding-right", 0);
                }, 180);
                setTimeout(function () {
                    vl.remove();
                }, 300);
            }

            vl.fadeIn(200);
        });
    }

    $('.o-masonry').masonry({
        itemSelector: '.grid-item'
    })

});

function scrollTo(target) {
    $("html, body").stop().animate({"scrollTop": target.offset().top}, 800);
    history.replaceState({}, document.title, ".");
}

function getScrollBarWidth () {
    var $outer = $('<div>').css({visibility: 'hidden', width: 100, overflow: 'scroll'}).appendTo('body'),
        widthWithScroll = $('<div>').css({width: '100%'}).appendTo($outer).outerWidth();
    $outer.remove();
    return 100 - widthWithScroll;
}