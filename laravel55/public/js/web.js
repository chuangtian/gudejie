// JavaScript Document
$(document).ready(
    function() {
        $(window).scroll(function() {
            atTopDetect();
            caseDetect();
            adsDetect();
            spliterDetect();
            timelineDetect();
            navBlog();
        });
        //resize trigger
        $(window).resize(function() {
            resizeScreen();
        });
        $(document).mousemove(function(e) {
            $mouseX = e.pageX;
            $mouseY = e.pageY;
        });
        //
        $("#banners").hover(
            function() {
                addtarget();
            },
            function() {
                removetarget();
            }
        );


        //button

        $('button').click(function() {
            var link = $(this).attr('href');
            window.open(link,'_self');
        });
        //form
        ////input
        $("form .label").bind("focusin", function(){
            $(this).addClass('active');
        }).bind("focusout", function(){
            if(!$(this).find('input').val() && !$(this).find('textarea').val()){
                $(this).removeClass('active');
            }
        })
        $("form input").each(function(index) {
            if($(this).val()!=''){
                $(this).parent().addClass('active');
            }
        });
        $("form textarea").each(function(index) {
            if($(this).val()!=''){
                $(this).parent().addClass('active');
            }
        });
        $("#ad").val('');

        //ad picker
        if ($("#ads").length >= 1) {
            var $ads = $("#ads").find('.ad');
            $ads.click(function() {
                $(this).toggleClass('active');
                $('#ad').val('');
                for(var j=0;j<$ads.length;j++){
                    if($ads.eq(j).hasClass('active')){
                        var text = $ads.eq(j).html();
                        $('#ad').val($('#ad').val()+text+' / ');
                    }
                }
            })
        }


        ////textarea
        $("textarea.AutoHeight").css("overflow","hidden").bind("keydown keyup", function(){
            $(this).height('0px').height($(this).prop("scrollHeight")+"px");
        }).keydown();

        //city
        $cityset = '北京 上海 广东 '
        if ($("#city-drop").length >= 1) {
            var city_ay=$cityset.split(' ');
            for(var j=0;j<city_ay.length;j++){
                $("#city-drop").append('<option value='+city_ay[j]+'>'+city_ay[j]+'</option>');
            }
            $("#city-drop").append('<option value="other">其它</option>');
            pickCity();
        }

        //case
        if ($("#case-btn").length >= 1) {
            $("#case-btn").find('li').click(function() {
                $(this).addClass('active').siblings('.active').removeClass('active');
                $(".showcase").hide();
                $(".showcase").eq($(this).index()).fadeIn();
            }).eq(0).click();
            var swiper1 = new Hammer(document.getElementById('cases'));
            swiper1.on("swipeleft swiperight", function(ev) {
                //myElement.textContent = ev.type +" gesture detected.";
                //console.log(ev.type);
                if (ev.type == 'swipeleft') {
                    $("#case-btn").find('li.active').next().click();
                } else if (ev.type == 'swiperight') {
                    $("#case-btn").find('li.active').prev().click();
                }
            });
        }

        //filter
        if ($("#news").length >= 1) {
            $("#filter").find('div').click(function() {
                //reset
                $("#news").find('.new').hide();
                //
                $(this).addClass('active').siblings('.active').removeClass('active');
                var cat = $(this).attr('cat');
                $("#news").find('.new').each(function(index) {
                    var item_cat = $(this).attr('cat');
                    //console.log(item_cat);
                    if(cat == item_cat){
                        $(this).fadeIn();
                    }
                })
            }).siblings('.active').click();
        }

        //broadcast
        if ($("#broadcast").length >= 1) {
            var $curr = 0;
            var maxx = $("#broadcast").find('.bc').length;
            function broadcasting(){
                $("#broadcast").find('.bc').hide().eq($curr).fadeIn();
                $curr+=1;
                if($curr>=maxx){
                    $curr=0;
                }
            }
            broadcasting();
            setInterval(broadcasting,5000);
        }



        //sliders
        if ($("#about-btn").length >= 1) {
            $("#about-btn").find('li').click(function() {
                $(this).addClass('active').siblings('.active').removeClass('active');
                $("#items").css({ "left": "calc(50% - " + ($(this).index() * 300 + 150) + "px)" });
                //$("#items").css({"left":$(this).index()*100*-1+"%"});
                //$("#mobile-slider").animate({scrollLeft: $(this).index()*$("#mobile-slider").width()}, 500);
            }).eq(0).click();

            var swiper2 = new Hammer(document.getElementById('about'));
            swiper2.on("swipeleft swiperight", function(ev) {
                //myElement.textContent = ev.type +" gesture detected.";
                //console.log(ev.type);
                if (ev.type == 'swipeleft') {
                    $("#about-btn").find('li.active').next().click();
                } else if (ev.type == 'swiperight') {
                    $("#about-btn").find('li.active').prev().click();
                }
            });
        }

        //timeline
        if ($("#timeline").length >= 1) {
            var swiper3 = new Hammer(document.getElementById('timeline'));
            swiper3.on("swipeleft swiperight", function(ev) {
                //myElement.textContent = ev.type +" gesture detected.";
                //console.log(ev.type);
                if (ev.type == 'swipeleft') {
                    panTo(1);
                } else if (ev.type == 'swiperight') {
                    panTo(-1);
                }
            });
        }



        //
        $('#panprev').click(function() {
            panTo(-1);
        })
        $('#pannext').click(function() {
            panTo(1);
        })

        //
        $('#trig').click(function() {
            $('#mobile-menu').toggleClass('active');
        })
        $('#menu-area-bg').click(function() {
            $('#mobile-menu').toggleClass('active');
        })

        //
        $("div").click(function() {
            //$(this).hover();
        });

        resizeScreen();
        atTopDetect();
        caseDetect();
        adsDetect();
        spliterDetect();
        timelineDetect();
    }
);

var $mouseX = 0,
    $mouseY = 0;
var $xp = 0,
    $yp = 0;
var $targeting;

//timeline
var $panID=0;
function panTo(p){
    var dis=280+50;
    var max = $("#timeline").find('li').length;
    $panID+=p;
    if($panID<0){
        $panID = 0;
    }else if($panID>=max){
        $panID = max-1;
    }
    $( "#pan" ).css( {
        "margin-left": $panID*dis*-1-140
    });
}

function addtarget() {
    $("#target").fadeIn();
    $targeting = setInterval(function() {
        // change 12 to alter damping higher is slower
        //console.log($mouseY);
        $xp += (($mouseX - 50 - $xp) / 5);
        $yp += (($mouseY - 50 - $yp) / 5);
        $("#target").css({ left: $xp + 'px', top: $yp + 'px' });
    }, 50);
}

function removetarget() {
    $("#target").fadeOut();
    clearInterval($targeting);
}


var $mobile = false;

//timeline
function timelineDetect(){
    if ($("#pan").length >= 1) {
        var y = $("#pan").offset().top;
        var h = $("#pan").height();
        //console.log(window.innerHeight+":"+y);
        if ($(window).scrollTop() + window.innerHeight > y + h *2/3 ) {
            $("#pan").addClass("active");
        } else if($(window).scrollTop() + window.innerHeight < y){
            //$("#pan").removeClass("active");
        }
    }
}

//case
function caseDetect() {
    if ($("#cases").length >= 1) {
        var y = $("#cases").offset().top;
        var h = $("#cases").height();
        //console.log(window.innerHeight+":"+y);
        if ($(window).scrollTop() + window.innerHeight > y + h * 2 / 3) {
            $("#cases").addClass("insight");
        } else if($(window).scrollTop() + window.innerHeight < y){
            $("#cases").removeClass("insight");
        }
    }
}

//spliter
function spliterDetect(){
    if ($(".spliter").length >= 1) {
        $(".spliter").each(function(index) {
            var y = $(this).offset().top;
            var h = $(this).height();
            if ($(window).scrollTop() + window.innerHeight > y + h/2) {
                $(this).find(".icon").addClass("active");
            } else if ($(window).scrollTop() + window.innerHeight < y){
                $(this).find(".icon").removeClass("active");
            }

        });
    }
}

//ads
var counting = false;
var $counter;
var gogo = 0

function adsDetect() {
    var y = $("#ads").offset().top;
    var h = $("#ads").height();
    //console.log(window.innerHeight+":"+y);
    if ($(window).scrollTop() + window.innerHeight > y + h / 3) {
        if (!counting) {
            counting = true;
            gogo = 0;
            //
            $counter = setInterval(function() {
                $("#ads").find('h2').each(function(index) {
                    var max = parseInt($(this).attr('val'));
                    var curr = parseInt($(this).text());
                    if (curr < max) {
                        var addup = Math.ceil((max - curr) / 10);
                        //addup = 10;
                        if (max - curr <= 15) {
                            addup = 1;
                        }
                        curr += addup;
                        if (curr >= max) {
                            curr = max;
                            gogo += 1;
                            if (gogo >= 4) {
                                clearInterval($counter);
                            }
                        }
                        $(this).text(curr);
                    }

                });
            }, 60);

        }
    } else if ($(window).scrollTop() + window.innerHeight < y) {
        if(counting){
            $("#ads").find('h2').text('0');
            clearInterval($counter);
            counting = false;
        }
    }
}


//gotop
function atTopDetect() {
    if ($("#banners.index").length >= 1) {
        if ($(window).scrollTop() > 150) {
            //$("#nav").removeClass('index');
            $("#broadcast").removeClass('index');
        } else {
            //$("#nav").addClass('index');
            $("#broadcast").addClass('index');
        }
    }
}

function navBlog(){
    if ($("#blog-nav-fixed").length >= 1) {
        var y = $("#blog-nav").offset().top;
        var h = $("#blog-nav").height();
        //console.log(window.innerHeight+":"+y);
        if ($(window).scrollTop() + window.innerHeight > y + h*2) {
            //$("#blog-nav-fixed").fadeOut();
            $("#blog-nav-fixed").removeClass('active');
        } else {
            //$("#blog-nav-fixed").fadeIn();
            $("#blog-nav-fixed").addClass('active');
        }
    }
}

//city
function pickCity(){

    var tar = $("#city-drop > option:selected").val();
    if(tar == "other"){
        $("#other").show();
    }else{
        $("#other").hide();
    }
}

function resizeScreen() {
    $mobile = ($(window).width() > 900 ? false : true);
    atTopDetect();
}

//share
function shareFB(){
    var locate=encodeURIComponent(window.location.toString());
    //var locate = concat(encodeURIComponent(location.href));
    window.open('http://www.facebook.com/sharer/sharer.php?u='+locate);
    return false;
}

function shareGP(){
    var locate=encodeURIComponent(window.location.toString());
    //var locate = concat(encodeURIComponent(location.href));
    window.open('https://plus.google.com/share?url='+locate);
    return false;
}

function shareLINE(){
    var locate=encodeURIComponent(window.location.toString());
    //var locate = concat(encodeURIComponent(location.href));
    var title=encodeURIComponent(document.title);
    //href="http://line.me/R/msg/text/?<?php the_title(); ?>%0D%0A<?php the_permalink(); ?>"
    window.open('http://line.me/R/msg/text/?'+title+'%0D%0A'+locate);
    return false;
}



jQuery(window).load(function() {
    resizeScreen();
    initMap();
});