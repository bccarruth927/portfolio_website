//Main JavaScript file
//Import the validation function from form-validation

$(document).ready(() => {
    //Mobile menu toggle functionality
    $('.toggle').on('click', () => {
        $('.item').slideToggle();

        if ($('.menu').hasClass('active')) {
            $('.menu').removeClass('active');

            //Add hamburger icon when menu is inactive
            $('.toggle').html('<a href="#"><i class="fas fa-bars"></i></a>');
        } else {
            $('.menu').addClass('active');

            //Add cross icon when menu is active
            $('.toggle').html('<a href="#"><i class="fas fa-times"></i></a>');
        };
    });

    /*
    const toggle = document.querySelector('.toggle');
    const menu = document.querySelector('.menu');

    const toggleMenu = () => {
        if (menu.classList.contains('active')) {
            menu.classList.remove('active');

            toggle.querySelector('a').innerHTML = '<i class="fas fa-bars"></i>';
        } else {
            menu.classList.add('active');

            toggle.querySelector('a').innerHTML = '<i class="fas fa-times"></i>'
        }
    };

    toggle.addEventListener('click', toggleMenu, false);
    */
});