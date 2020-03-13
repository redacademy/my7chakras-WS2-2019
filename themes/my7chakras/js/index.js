

$(function () {
    $(function () { // if document is ready
        alert('jQuery is ready.')
    });

    $('.post__relatedList').flickity({
        // options
        cellAlign: 'left',
        contain: true
    });

    // Add position absolute to elements with sub-menu
    let menuItems = $('#primary-menu li');
    menuItems.each(function () {
        let classItem = $(this).hasClass('menu-item-has-children');
        if (classItem) {
            $(this).children(':first').addClass('icon-menu')
            $(this).addClass('sub-menu-ul');
            let link = $(this).children(':first').removeAttr('href');
            console.log(link)
        }
    });


    // Sub menu animation

    $('.sub-menu').hide()



    if ($(window).width() < 980) {

        console.log('phone');
        $('.sub-menu-ul').on('click', function () {
            $(this).find('.sub-menu').slideToggle();
            $(this).toggleClass('close-icon');

        });
    }
    else {
        console.log('desktop');
        $('.sub-menu-ul').hover(function () {
            $(this).addClass('sub-menu-container');
            $(this).toggleClass('close-icon');
            $(this).find('.sub-menu').slideToggle();
        });
    }






    // Burge menu animations

    $('.menu-toggle').on('click', function (event) {

        event.preventDefault()
        let menuBar = $('.main-manu-content');
        menuBar.slideToggle()
    });

    $('.burger-icon').on('click', function (event) {
        event.preventDefault()
        let closeIcon = $('.close-icon');
        closeIcon.toggleClass('hide');
        let burgeIcon = $('.burger-icon');
        burgeIcon.toggleClass('hide');
    });


    $('.close-icon').on('click', function (event) {
        event.preventDefault()
        let closeIcon = $('.close-icon');
        closeIcon.toggleClass('hide');
        let burgeIcon = $('.burger-icon');
        burgeIcon.toggleClass('hide');
    });


    $('.search-toggle').on('click', function (event) {

        event.preventDefault()
        let searchBar = $('.search-bar');
        searchBar.slideToggle()

    });





    // Show the correct form depending on the link

    $('#general-button').on('click', function () {
        $('.contact-aj').hide();
        $('.contact-gi').show();
        $('#aj-button').addClass('change-color');
        $('#general-button').removeClass('change-color');
    });


    $('#aj-button').on('click', function () {
        $('.contact-gi').hide();
        $('.contact-aj').show();
        $('#general-button').addClass('change-color');
        $('#aj-button').removeClass('change-color');
    });



});