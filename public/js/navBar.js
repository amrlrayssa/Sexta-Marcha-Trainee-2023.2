document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.querySelector('.hamburger');
    const navBar = document.querySelector('.nav_NavBar');

    hamburger.addEventListener('click', function () {
        navBar.classList.toggle('active');
        hamburger.classList.toggle('active');
    });
    $(document).ready(function () {
        $('.hamburger').click(function () {
            $('.nav_NavBar').toggleClass('active');
        });
    });
});
