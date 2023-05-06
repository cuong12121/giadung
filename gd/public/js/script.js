$(function () {
    $('#menu').mmenu();
    $('.nav li').hover(function () {
        $('ul:first', this).stop().fadeIn();
    }, function () {
        $('ul', this).hide();
    });
    $('#searchformmobile').click(function () {
        $('.box-search-mobile').stop().slideToggle();
        return false;
    });
    $('.icon-cart').click(function () {
        window.location = '/addcart/';
    });
    $('.selectcat').click(function () {
        $('.categorypage').stop().slideToggle();
    });
    $('.btn-show-search-mobile').click(function () {
        $('.box-search-mobile-1').stop().slideToggle();
        return false;
    })
    $('.item-tab-detail-product').click(function () {
        $('.item-tab-detail-product').removeClass('active');
        $(this).addClass('active');
        $('.content-tab-pro').hide();
        $('#' + $(this).attr('data-tab')).stop().fadeIn();
    });
    $('.item-tab-product').click(function () {
        $('.item-tab-product').removeClass('active-tab');
        $(this).addClass('active-tab');
        $('.content-tab-pro').hide();
        $('#' + $(this).attr('data-tab')).stop().slideDown();
    });
    var divi = 0;
    $('.content-detail table').each(function () {
        var me = $(this);
        divi++;
        $('<div id ="div-scroll-' + divi + '" class="div-scroll" />').insertBefore(me);
        $("#div-scroll-" + divi).html(me);
    });
    $(".menu-click-down").click(function () {
        $(".nav").stop().slideToggle(0);
    });
    $("#button-btt").click(function () {
        $("html, body").animate({scrollTop: 0}, "slow");
        return false;
    });



    $(window).scroll(function (event) {
        if ($(this).scrollTop() > 500) {
            $("#button-btt").fadeIn();
        } else {
            $("#button-btt").fadeOut();
        }
    });

    $('.showreg').click(function () {
        $('.overlay').stop().fadeIn();
        $('.pop-reg').stop().fadeIn();
        return false;
    })
    $('.pop-reg .close').click(function () {
        $('.overlay').stop().fadeOut();
        $('.pop-reg').stop().fadeOut();
        return false;
    })

    var menubar = $('.menubar').position();

    $(window).scroll(function (event) {
        if ($(this).scrollTop() > (menubar.top + 100)) {
            $('.menubar').css({'position': 'fixed', 'top': '0px', 'z-index': '9999', 'left': '0px', 'width': '100%'});
        } else {
            $('.menubar').css({'position': 'relative', 'z-index': '999', 'top': '0px', 'border-bottom': 'none'});
        }
    });




    /*Disable full page*/
    /*
    $(".content-detail, .cat-content").on("contextmenu", function (e) {
        return false;
    });

    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
    */

});
$.fn.digits = function () {
    return this.each(function () {
        $(this).text($(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));
    });
};
$.fn.dinhdangso = function () {
    return this.each(function () {
        $(this).html($(this).html().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));
    });
};
(function ($) {
    $.fn.extend({
        checkNull: function () {
            var obj = this;
            var ok = true;
            $('.notNull', obj).each(function () {
                if ($(this).val() == '') {
                    $(this).addClass('error');
                    ok = false;
                }
            });
            return ok;
        },
        frmSubmit: function () {
            var obj = this;
            obj.submit(function () {
                var ok = $(this).checkNull();
                if (ok == false) {
                    alert(obj.attr('data-alert'));
                    obj.find(".modal-box, .modal-overlay").fadeOut(500, function () {
                        $(".modal-overlay").remove();
                    });


                } else {
						grecaptcha.ready(function() {
						  grecaptcha.execute('6LfjBJYUAAAAAI0asWRk5RqRNItb4l2H7jKR_YV9', {action: 'contact_request'}).then(function(token) {
						  
								obj.find("#token").val(token);
					
								obj.ajaxSubmit({
									beforeSubmit: function (a, f, o) {
										obj.fadeTo('fast', 0.3);
										o.dataType = 'html';
									},
									success: function (data) {
										obj.fadeTo('fast', 1);
										if (data == 1) {
											obj.find(".msgbox").removeClass("form-error");

											obj[0].reset();
											obj.find(".msgbox").html(obj.attr('data-success'));
											obj.find(".msgbox").addClass("form-success");
											obj.find(".captcha_message").fadeOut();

										} else if (data == -1) {
											obj.find(".msgbox").addClass("form-error");
											obj.find(".msgbox").html(obj.attr('data-captcha'));
										} else {

											obj.find(".msgbox").addClass("form-error");
											obj.find(".msgbox").html(data);
										}
										$('#imgCaptcha').attr("src", "/lib/imagesercurity.php");
									}
								});
					
							});
						});		
					
                }
                return false;
            });
        }
    });
    $(document).ready(function () {
        $('#regform').frmSubmit();
        $('#contactform').frmSubmit();
    });
})(jQuery);