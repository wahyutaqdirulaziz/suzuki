$(document).ready(()=>{
    zomImage()
    setAutoHightPage()
    setAutoHightPageOnResize()

    $('.action').on('click',function(e){
        var dest = $(this).attr('href')
        var elDest = $(dest)
        var body = $("html, body");
        body.animate({scrollTop:elDest.offset().top}, 500, 'swing', function() { 
            zomImage()         
        });
        e.preventDefault()
    })

    $(window).scroll(function(){
        if($(window).scrollTop() >= $(window).height()){
            $('.btn-top-section').css({'display' : 'inline-block'})
        }else{
            $('.btn-top-section').css({'display' : 'none'})
        }
    })
    $(window).scroll(function(){
        if($(window).scrollTop() > 20){
            $('#navbarSupportedContent').css({'position' : 'relative', 'top' : '-50px', 'tansition' : '1s'})
        }else{
            $('#navbarSupportedContent').css({'position' : 'relative', 'top' : '0px'})
        }
    })
})

function zomImage(){
    if($(window).scrollTop() == 0){
        $('.sld').removeClass('active')
        $('.carousel-item').removeClass('active')
        $('#carousel-item-2').addClass('active')
        $('#slide-1').addClass('active')
        $('#carousel-2').css({'background-size' : '100%', 'backgroundRepeat' : 'no-repeat'})
        $('#carousel-2').animate({
            backgroundSize: '210%'
        },1000, 'swing')
    }else{
        $('.carousel-item').removeClass('active')
        $('.sld').removeClass('active')
        $('#carousel-item-2').addClass('active')
        $('#slide-1').addClass('active')
        $('#carousel-2').css({'background-size' : 'cover'})
    }
}

function setAutoHightPage(){
    var windowH = $(window).height();
    var sectionH = $('.section').height();
    if(windowH != sectionH) {                            
        $('.section').css({'height':($(window).height())+'px'});
    } 
}

function setAutoHightPageOnResize(){
    $(window).resize(function(){
        let windowH = $(window).height();
        var sectionH = $('section').height();
        if(windowH != sectionH) {
            $('.section').css({'height':($(window).height())+'px'});
        }
    })  
}
function setBgColorNavbar(){
    let ariaex = $('#navbar-toggler').attr('aria-expanded')
    if(ariaex === 'true'){
        $('.navbar').removeClass('bg-dark')
    }else{
        $('.navbar').addClass('bg-dark')
        
    }

}