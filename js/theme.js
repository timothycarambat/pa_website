$(function () {
    $(window).scroll(function() {
        if ($(".navbar").offset().top>30) {
            $(".navbar-inner").addClass("sticky");
        }
        else {
            $(".navbar-inner").removeClass("sticky");
        }
    });

    // Flex
    if ($(".flexslider").length) {
        $('.flexslider').flexslider();
    }

    servicesCircle.initialize();

    staticHeader.initialize();

    portfolioItem.initialize();
});

var portfolioItem = {
    initialize: function () {
        var $container = $("#portfolio_tem .left_box");
        var $bigPics = $container.find(".big img");
        var $thumbs = $container.find(".thumbs .thumb");

        $bigPics.hide().eq(0).show();

        $thumbs.click(function (e) {
            e.preventDefault();
            var index = $thumbs.index(this);
            $bigPics.fadeOut();
            $bigPics.eq(index).fadeIn();
        });
    }
}

var staticHeader = {
    initialize: function () {
        if ($(".navbar-static-top").length) {
            $("body").css("padding-top", 0);
        }
    }
}

var servicesCircle = {
    initialize: function () {
        var $container = $(".services_circles");
        var $texts = $container.find(".description .text");
        var $circles = $container.find(".areas .circle");

        $circles.click(function () {
            var index = $circles.index(this);
            $texts.fadeOut();
            $texts.eq(index).fadeIn();
            $circles.removeClass("active");
            $(this).addClass("active");
        });
    }
}

$('#ContFormLg').submit(function(){
    var name = $('input[name="name"]').val();
    var mail = $('input[name="mail"]').val();
    var phone = $('input[name="phone"]').val();
    var msg = $('textarea[name="msg"]').val();

    var data = [name,mail,phone,msg];

    $(data).each(function(i){

        if(/<(?:"[^"]*"['"]*|'[^']*'['"]*|[^'">])+>/g.test(data[i]) || data[i]=="" ){ 
            if( i == 3){
                    $('#ContFormLg').find('textarea').addClass('error').val('');

                }else{
                    $('#ContFormLg').find('input').eq(i).addClass('error').val('');
                }
        }else{
            if( i == 3){
                    $('#ContFormLg').find('textarea').removeClass('error');

                }else{
                    $('#ContFormLg').find('input').eq(i).removeClass('error');
                }
        }

        if(i == 0 && !(/[A-Za-z]/.test(data[i])) ){ //check name
            $('#ContFormLg').find('input').eq(i).addClass('error');
        }

        if(i == 1 && !(/^[^@]*@[^@]*/.test(data[i])) ){ //check email
            $('#ContFormLg').find('input').eq(i).addClass('error');
        }

        if(i == 2 && !(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im.test(data[i])) ){ //check phone number
            $('#ContFormLg').find('input').eq(i).addClass('error');
        }
    });

    var err = $('.error');
    if(err.length === 0){
        return true;
    }else{
        return false;
    }
});

$('#ContFormSm').submit(function(){
    var name = $('input[name="name"]').val();
    var mail = $('input[name="mail"]').val();
    var msg = $('textarea[name="msg"]').val();

    var data = [name,mail,msg];
    console.log(data);

    $(data).each(function(i){

        if(/<(?:"[^"]*"['"]*|'[^']*'['"]*|[^'">])+>/g.test(data[i]) || data[i]=="" ){ 
            if( i == 2){
                    $('#ContFormSm').find('textarea').addClass('error').val('');

                }else{
                    $('#ContFormSm').find('input').eq(i).addClass('error').val('');
                }
        }else{
            if( i == 2){
                    $('#ContFormSm').find('textarea').removeClass('error');

                }else{
                    $('#ContFormSm').find('input').eq(i).removeClass('error');
                }
        }

        if(i == 0 && !(/[A-Za-z]/.test(data[i])) ){ //check name
            $('#ContFormSm').find('input').eq(i).addClass('error');
        }

        if(i == 1 && !(/^[^@]*@[^@]*/.test(data[i])) ){ //check email
            $('#ContFormSm').find('input').eq(i).addClass('error');
        }
    });

    var err = $('.error');
    if(err.length === 0){
        return true;
    }else{
        return false;
    }
});


$('#closeModal').click(function(){
    $('#contactModal').hide();
})

