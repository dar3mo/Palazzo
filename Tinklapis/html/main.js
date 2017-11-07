$(document).ready(function () { //reiskia kad pradeda veikti kai uzkrauna puslapi;



    /*------CLICK ARROW TO SMOOTH SCROLL DOWN------*/
    $('#arrow-scroll-1').click(function () {
        $('html, body').animate({
            scrollTop: $('#brandtitle').offset().top
        }, 1500);
    });
    $('#arrow-scroll-2').click(function () {
        $('html, body').animate({
            scrollTop: $('.about-undertitle').offset().top
        }, 1500);
    });
    $('#arrow-scroll-3').click(function () {
        $('html, body').animate({
            scrollTop: $('.about-2-undertitle').offset().top
        }, 1500);
    });
    $('#arrow-scroll-4').click(function () {
        $('html, body').animate({
            scrollTop: $('#js-about-undertitle').offset().top
        }, 1500);
    });
    $('#arrow-scroll-5').click(function () {
        $('html, body').animate({
            scrollTop: $('.service-undertitle').offset().top
        }, 1500);
    });
    $('#arrow-scroll-6').click(function () {
        $('html, body').animate({
            scrollTop: $('#advisor-title').offset().top
        }, 1500);
    });
    $('#arrow-scroll-7').click(function () {
        $('html, body').animate({
            scrollTop: $('#slider').offset().top
        }, 1500);
    });
    $('#arrow-scroll-8').click(function () {
        $('html, body').animate({
            scrollTop: $('.faq-title').offset().top
        }, 1500);
    });
    $('#arrow-scroll-9').click(function () {
        $('html, body').animate({
            scrollTop: $('.scroll-to-faq').offset().top
        }, 1500);
    });
    $('#arrow-scroll-10').click(function () {
        $('html, body').animate({
            scrollTop: $('.contact').offset().top
        }, 1500);
    });
    $('#arrow-scroll-11').click(function () {
        $('html, body').animate({
            scrollTop: $('#contact-info').offset().top
        }, 1500);
    });
    $('#arrow-scroll-12').click(function () {
        $('html, body').animate({
            scrollTop: $('#form-title').offset().top
        }, 1500);
    });

/*--------MENU SCROLL---------*/
        $('#arrow-scroll-13').click(function () {
        $('html, body').animate({
            scrollTop: $('#home-top').offset().top
        }, 1500);
    });
        $('#arrow-scroll-14').click(function () {
        $('html, body').animate({
            scrollTop: $('#about-page').offset().top
        }, 1500);
    });
        $('#arrow-scroll-15').click(function () {
        $('html, body').animate({
            scrollTop: $('#legal-advisors').offset().top
        }, 1500);
    });
        $('#arrow-scroll-16').click(function () {
        $('html, body').animate({
            scrollTop: $('.faq-header').offset().top
        }, 1500);
    });
        $('#arrow-scroll-18').click(function () {
        $('html, body').animate({
            scrollTop: $('.contact-page').offset().top
        }, 1500);
    });
    /*--------------ADDITIONAL SCROLLS-----------*/

    $('#home-btn').click(function () {
        $('html, body').animate({
            scrollTop: $('#form-title').offset().top
        }, 2000);
    });

    /*-----------------NAVIGATION SCROLL------------*/

    /*----MAKING HEADER AND NAV MOVE WITH SCROLL----*/
    $(window).scroll(function () { //reiskia kai pajudinsim langa;


        if ($(window).scrollTop() > $('#invisiblediv').offset().top) {
            $('#brandtitle').addClass('header-fixed');
            $('#navigation').addClass('navbar-fixed');
            $('#invisiblediv').removeClass('invisible-div');
            $('#invisiblediv2').removeClass('invisible-div');
        }

        //jei scrollinam atgal:
        if ($(window).scrollTop() < $('#invisiblediv').offset().top) {
            $('#brandtitle').removeClass('header-fixed');
            $('#navigation').removeClass('navbar-fixed');
            $('#invisiblediv').addClass('invisible-div');
            $('#invisiblediv2').addClass('invisible-div');
        }
    });


    /*---------PICTURE-SLIDER-COPY-------*/
    // @codekit-prepend "/vendor/hammer-2.0.8.js";
    function workSlider() {

        $('.slider--prev, .slider--next').click(function () {

            var $this = $(this),
                curLeft = $('.slider').find('.slider--item-left'),
                curLeftPos = $('.slider').children().index(curLeft),
                curCenter = $('.slider').find('.slider--item-center'),
                curCenterPos = $('.slider').children().index(curCenter),
                curRight = $('.slider').find('.slider--item-right'),
                curRightPos = $('.slider').children().index(curRight),
                totalWorks = $('.slider').children().length,
                $left = $('.slider--item-left'),
                $center = $('.slider--item-center'),
                $right = $('.slider--item-right'),
                $item = $('.slider--item');

            $('.slider').animate({
                opacity: 0
            }, 400);

            setTimeout(function () {

                if ($this.hasClass('slider--next')) {
                    if (curLeftPos < totalWorks - 1 && curCenterPos < totalWorks - 1 && curRightPos < totalWorks - 1) {
                        $left.removeClass('slider--item-left').next().addClass('slider--item-left');
                        $center.removeClass('slider--item-center').next().addClass('slider--item-center');
                        $right.removeClass('slider--item-right').next().addClass('slider--item-right');
                    } else {
                        if (curLeftPos === totalWorks - 1) {
                            $item.removeClass('slider--item-left').first().addClass('slider--item-left');
                            $center.removeClass('slider--item-center').next().addClass('slider--item-center');
                            $right.removeClass('slider--item-right').next().addClass('slider--item-right');
                        } else if (curCenterPos === totalWorks - 1) {
                            $left.removeClass('slider--item-left').next().addClass('slider--item-left');
                            $item.removeClass('slider--item-center').first().addClass('slider--item-center');
                            $right.removeClass('slider--item-right').next().addClass('slider--item-right');
                        } else {
                            $left.removeClass('slider--item-left').next().addClass('slider--item-left');
                            $center.removeClass('slider--item-center').next().addClass('slider--item-center');
                            $item.removeClass('slider--item-right').first().addClass('slider--item-right');
                        }
                    }
                } else {
                    if (curLeftPos !== 0 && curCenterPos !== 0 && curRightPos !== 0) {
                        $left.removeClass('slider--item-left').prev().addClass('slider--item-left');
                        $center.removeClass('slider--item-center').prev().addClass('slider--item-center');
                        $right.removeClass('slider--item-right').prev().addClass('slider--item-right');
                    } else {
                        if (curLeftPos === 0) {
                            $item.removeClass('slider--item-left').last().addClass('slider--item-left');
                            $center.removeClass('slider--item-center').prev().addClass('slider--item-center');
                            $right.removeClass('slider--item-right').prev().addClass('slider--item-right');
                        } else if (curCenterPos === 0) {
                            $left.removeClass('slider--item-left').prev().addClass('slider--item-left');
                            $item.removeClass('slider--item-center').last().addClass('slider--item-center');
                            $right.removeClass('slider--item-right').prev().addClass('slider--item-right');
                        } else {
                            $left.removeClass('slider--item-left').prev().addClass('slider--item-left');
                            $center.removeClass('slider--item-center').prev().addClass('slider--item-center');
                            $item.removeClass('slider--item-right').last().addClass('slider--item-right');
                        }
                    }
                }

            }, 400);

            $('.slider').animate({
                opacity: 1
            }, 400);

        });

    }

    workSlider();


    /*-----------FORM-INLINE-VALIDATION-------------*/
    /*function validateForm (validationMethod, inputField, methodParameter) {
            var validatedObj = new LiveValidation(inputField, { validMessage: "Valid!"});
            validatedObj.add(validationMethod, methodParameter);
        }   
        function validateForm (validationMethod, inputField)
        {
            validateForm(validationMethod, inputField, null);    
        }
        */

    function validateForm() {

        var validateName = new LiveValidation('name-input', {
            validMessage: " "
        });
        validateName.add(Validate.Presence);

        var validateSurname = new LiveValidation('surname-input', {
            validMessage: " "
        });
        validateSurname.add(Validate.Presence);

        var validateEmail = new LiveValidation('email-input', {
            validMessage: " "
        });
        validateEmail.add(Validate.Presence);
        validateEmail.add(Validate.Email);

        var validateDescription = new LiveValidation('form-text-area', {
            validMessage: " "
        });
        validateDescription.add(Validate.Presence);
        validateDescription.add(Validate.Length, {
            minimum: 100
        });

    }

    validateForm();
    /*==============VERIFY FORM WITHOUT REDIRECTING=========*/
    $('#query-form').on('submit', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var name = $('#name-input').val();
        var surname = $('#surname-input').val();
        var email = $('#email-input').val();
        var area = $('#area-of-activity').val();
        var query = $('#form-text-area').val();
        if (name == null || name == "" || surname == null || surname == "" || email == null || email == "" || area == null || area == "" || query == null || query == "") {
            return;
        }
        var formData = "name=" + name + "&surname=" + surname + "&email=" + email + "&area=" + area + "&query=" + query;
        $.ajax({
            url: "./email.php",
            type: "POST",
            data: formData,
            success: function (data, textStatus, jqXHR) {
                $('#msg').text('Message sent!'); //data - response from server
                setTimeout(function () {
                    $('#msg').text('');
                }, 3000);
            },

        });
    });

});