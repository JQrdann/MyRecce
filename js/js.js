$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    var buttons = $(".main-buttons").offset().top;

    if(buttons - 200 < scroll){
        $('header').fadeIn();
    }else if(buttons - 200 > scroll){
        $('header').fadeOut();
    }
});

$(document).ready(function(){
    $(".login-button").click(function(e){
        toggleModal(".login-form");
        e.preventDefault();
    })

    $(".register-button").click(function(e){
        toggleModal(".signup-form");
        e.preventDefault();
    })

    $(".close-modal-login").click(function(){
        toggleModal(".login-form");
    })

    $(".close-modal-signup").click(function(){
        toggleModal(".signup-form");
    })

    $(".login-change").click(function(){
        switchModal(".signup-form", ".login-form");
    })

    $(".register-change").click(function(){
        switchModal(".login-form", ".signup-form");
    })

    $('header').css('display','none')

    bModalToggled = false;

    function toggleModal(test){
        if(bModalToggled){
            $(test).fadeOut();

            //$(".login-button").delay(400).fadeIn();
            //$(".register-button").delay(400).fadeIn();

            $(".form-holder").fadeOut();
            //$("body").css("max-height", "1000");
        }else{
            //$(".login-button").fadeOut();
            //$(".register-button").fadeOut();

            $(test).delay(400).fadeIn();

            $(".form-holder").fadeIn();
            //$("body").css("max-height", "100vh");
        }
        bModalToggled = !bModalToggled;
    }

    function switchModal(modalOut, modalIn){
        $(modalOut).fadeOut(300);
        $(modalIn).delay(300).fadeIn();
    }

})
