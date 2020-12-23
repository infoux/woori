$(document).ready(function() {

    $("button.menu").on("click", function(){

        if ($("aside").hasClass("on")) {
            $("aside").removeClass("on");
            $("html").removeClass("lock");
        } else {
            $("aside").addClass("on");
            $("html").addClass("lock");
        }

    });

    $("nav#main-menu li h3 a").on("click", function(event){
        if ($(window).width() < 1200 && $("nav#main-menu li").find("ul").length) {
            event.preventDefault();
        }
    });

    $('.main-equipment ul.list li p.image').each(function() {
        $(this).css("background", "url('" + $(this).find("img").attr("src") + "') no-repeat center / cover");
    });




    $("nav#main-menu h3 a").on("click mouseover", function(){

        $("nav#main-menu ul").removeClass("on");
        $(this).parent().parent().find("ul").addClass("on");
        
        if ($(window).width() > 1200 && $("header").hasClass("open") == false) {
            $("#header").addClass("open");
        }
    });




    $(document).mousemove(function(e){

        if ($(window).width() > 1200 && e.pageY > 260) {
            $("#header").removeClass("open");
            $("nav#main-menu ul").removeClass("on");
            
            $("aside").removeClass("on");
        }

	});








    $('.main-issue div.slider').slick({
        autoplay:true,
        speed: 1000,
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        
        nextArrow:$('.main-issue button.right'),
        prevArrow:$('.main-issue button.left')
    });



    $('.main-list div.slider').slick({  
        mobileFirst: true,
        autoplay:true,
        speed: 1000,
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        nextArrow:$('.main-list button.right'),
        prevArrow:$('.main-list button.left'),

        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    variableWidth:true
                }
            }
        ]

        
        
    });



});

