$(document).ready(() => {
    //Scroll animation for the mobile Projects layout
    $('#mobile-project1-container').waypoint(() => {
        $('#mobile-project1-container').addClass('animate__animated animate__fadeInUp');
    }, {offset: '50%'});

    $('#mobile-project2-container').waypoint(() => {
        $('#mobile-project2-container').addClass('animate__animated animate__fadeInUp');
    }, {offset: '80%'});

    $('#mobile-project3-container').waypoint(() => {
        $('#mobile-project3-container').addClass('animate__animated animate__fadeInUp');
    }, {offset: '80%'});

    $('#mobile-project4-container').waypoint(() => {
        $('#mobile-project4-container').addClass('animate__animated animate__fadeInUp');
    }, {offset: '80%'});

    $('#mobile-project5-container').waypoint(() => {
        $('#mobile-project5-container').addClass('animate__animated animate__fadeInUp');
    }, {offset: '80%'});

    $('#mobile-project6-container').waypoint(() => {
        $('#mobile-project6-container').addClass('animate__animated animate__fadeInUp');
    }, {offset: '80%'});

    /*
    const reveal = () => {
        const $reveals = $('.reveal');

        for (let i = 0; i < $reveals.length; i++) {
            const windowHeight = $(window).height();
            const elementTop = $reveals[i].getBoundingClientRect().top;
            const elementVisible = 150;

            if (elementTop < windowHeight - elementVisible) {
                $reveals[i].classList.add('animate__animated');
                $reveals[i].classList.add('animate__fadeInUp');
            } else {
                $reveals[i].classList.remove('animate__animated');
                $reveals[i].classList.remove('animate__fadeInUp')
            };
        };
    };

    $(window).on('scroll', reveal);
    */

    //Scroll animation for the desktop Projects layout
    $('#desktop-project1-container').waypoint(() => {
        $('#desktop-project1-container').addClass('animate__animated animate__fadeInLeft');
    }, {offset: '50%'});

    $('#desktop-project2-container').waypoint(() => {
        $('#desktop-project2-container').addClass('animate__animated animate__fadeInRight');
    }, {offset: '80%'});

    $('#desktop-project3-container').waypoint(() => {
        $('#desktop-project3-container').addClass('animate__animated animate__fadeInLeft');
    }, {offset: '80%'});

    $('#desktop-project4-container').waypoint(() => {
        $('#desktop-project4-container').addClass('animate__animated animate__fadeInRight');
    }, {offset: '80%'});

    $('#desktop-project5-container').waypoint(() => {
        $('#desktop-project5-container').addClass('animate__animated animate__fadeInLeft');
    }, {offset: '80%'});

    $('#desktop-project6-container').waypoint(() => {
        $('#desktop-project6-container').addClass('animate__animated animate__fadeInRight');
    }, {offset: '80%'});
});