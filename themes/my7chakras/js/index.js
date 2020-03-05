let burger = $(".menu-toggle");

console.log(burger);

$('.menu-toggle').on('click', function(event) {

    event.preventDefault()
    let menuBar = $('.main-manu-content');
    menuBar.slideToggle()
});

$('.burger-icon').on('click', function(event) {
    event.preventDefault()
    let closeIcon = $('.close-icon');
    closeIcon.toggleClass('hide');
    let burgeIcon = $('.burger-icon');
    burgeIcon.toggleClass('hide');
});


$('.close-icon').on('click', function(event) {
    event.preventDefault()
    let closeIcon = $('.close-icon');
    closeIcon.toggleClass('hide');
    let burgeIcon = $('.burger-icon');
    burgeIcon.toggleClass('hide');
});


$('.search-toggle').on('click', function(event) {
    event.preventDefault();
    
});
