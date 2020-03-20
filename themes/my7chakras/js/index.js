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
    if ($(window).width() < 980) {
     
        $('.sub-menu-ul').on('click', function () {
            $(this).find('.sub-menu').slideToggle();
            $(this).toggleClass('close-icon');
        });
    }
    else {
        $('.sub-menu-ul').hover(function () {
            $(this).addClass('sub-menu-container');
            $(this).toggleClass('close-icon');
            $(this).find('.sub-menu').slideToggle();
            $(this).find('.icon-menu').toggleClass('border');
        });
    }
    // Burge menu animations
    $('.menu-toggle').on('click', function (event) {
     
        let menuBar = $('.main-manu-content');
        menuBar.slideToggle()
    });
    $('.burger-icon').on('click', function (event) {
     
        let closeIcon = $('.close-icon');
        closeIcon.toggleClass('hide');
        let burgeIcon = $('.burger-icon');
        burgeIcon.toggleClass('hide');
    });
    $('.close-icon').on('click', function (event) {
     
        let closeIcon = $('.close-icon');
        closeIcon.toggleClass('hide');
        let burgeIcon = $('.burger-icon');
        burgeIcon.toggleClass('hide');
    });
    $('.search-toggle').on('click', function (event) {
     
        let searchBar = $('.search-bar');
        searchBar.slideToggle()
    });
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