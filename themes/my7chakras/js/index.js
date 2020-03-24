$(window).ready(function() {
$(function () {
    // Add position absolute to elements with sub-menu
    $('.sub-menu').hide()
    let menuItems = $('#primary-menu li');
    menuItems.each(function () {
        let classItem = $(this).hasClass('menu-item-has-children');
        if (classItem) {
            $(this).children(':first').addClass('icon-menu')
            $(this).addClass('sub-menu-ul');
            $(this).children(':first').removeAttr('href');
        }
    });

    
    // Sub menu animation
    if ($(window).width() < 768) {

        $('.sub-menu-ul').on('click', function () {
            $(this).find('.sub-menu').slideToggle();
            $(this).toggleClass('close-icon');

        });
    }
    else {
        $('.sub-menu-ul').find( ".icon-menu" ).append( '<i class="fas fa-chevron-down"></i>' );
        $('.sub-menu-ul').hover(function () {
            $(this).addClass('sub-menu-container');
            $(this).toggleClass('close-icon');
            $(this).find('.sub-menu').slideToggle();
            $(this).find('.icon-menu').toggleClass('border-hover');
        });



    }

// BURGER MENU
let button = $('.menu-toggle')

button.click(function(event) {
    let menuBar = $('.main-manu-content');
  $('.burger-menu').toggleClass('fa-times');
  $(".site-content").toggleClass('overlay-content');
  menuBar.slideToggle()
  $('.overlay-body').slideToggle();

})



  
//   Search bar

let buttonSearch = $('.search-toggle')
buttonSearch.click(function() {
  let menuBar = $('.search-bar');
  menuBar.slideToggle()
  $(".search-field").val("");
  $(".search-field").focus();
  $('.overlay-body').slideToggle();

  $(menuBar).focusout(function(){
  $('.overlay-body').hide();

    $(this).slideUp("fast");
  });
})





    // Show the correct form depending on the link
    $('#aj-button').addClass('change-color');
    $('.aj-text').hide();
    $('#general-button').on('click', function (event) {
     
        $('.contact-aj').hide();
        $('.contact-gi').show();
        $('#aj-button').addClass('change-color');
        $('#general-button').removeClass('change-color');
        if ($(window).width() < 980) {
            $('.aj-text').hide();
            $('.general-text').show();
        } else {
            $('.aj-text').hide();
        }
    });
    $('#aj-button').on('click', function (event) {
     
        $('.contact-gi').hide();
        $('.contact-aj').show();
        $('#general-button').addClass('change-color');
        $('#aj-button').removeClass('change-color');
        if ($(window).width() < 980) {
            $('.aj-text').show();
            $('.general-text').hide();
        } else {
            $('.aj-text').hide();
        }
    });
});

});



