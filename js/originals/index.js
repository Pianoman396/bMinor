"use strict"

function main() {
    document.querySelector('.subscribe__info iframe').addEventListener('load', function() {
        var load_page = document.querySelector('#loader--page');
        var loader = document.querySelector('#loader--page .loader');
        var out = setTimeout(function() {
            load_page.style.transition = '0.6s ease-in-out';
            loader.style.transition = '0.6s ease-in-out';
            load_page.style.opacity = '0';
            loader.style.opacity = '0';


            clearTimeout(out);
        }, 1150);

    });
    var timeout = setTimeout(function() {
        document.querySelector('#loader--page').style.display = 'none';
        clearTimeout(timeout);
    }, 1210);

    var slider = new Carousel({
        autoplay: true,
        speed: 1,
        duration: 1000
    });
    slider.start('hello');
    // slider.init();

    // slider.defaults.autoplay = true;

}
document.addEventListener('DOMContentLoaded', main());