let burger = $(".menu-toggle");

console.log(burger);

$('.menu-toggle').on('click', function(event) {

    event.preventDefault()
    let menuBar = $('.main-manu-content');
    menuBar.slideToggle()
});