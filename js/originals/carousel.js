// !(function(){
// function slider(){
//  this.slideLeft = function(step = function(){ return  },time, endTime){
//            this.step = step;
//            this.time= time;
//            this.endTime = endTime;
//            let moveLeft = setInterval(step,time);

//            setTimeout(function(){
//              clearInterval(moveLeft);
//            }, endTime);
//  };
//  this.slideRight = function(step,time){

//  };
// }

// });

(function(dom, wnd) {
    "use strict"
        wnd.Carousel = function(options) {

        var indent, options, container, emit_left, emit_right, autoplay, speed, duration, active;

        defaults = {
            autoplay: true,
            speed: 0,
            duration: 800
        };

        //actions
        this.options = !options ? defaults : options;
        autoplay = this.options.autoplay ? this.options.autoplay : defaults.autoplay;
        speed = this.options.speed ? this.options.speed : defaults.speed;
        duration = this.options.duration ? this.options.duration : defaults.duration;

        container = dom.querySelector('.slide');
        active = dom.querySelector('.item.active');

        emit_left = dom.querySelector('.left');
        emit_right = dom.querySelector('.right');

        function slideLeft() {
            indent = true;

            function emit(e) {

                e.preventDefault();
                if (indent) {
                    //declare
                    var first, last, timeout;
                    indent = false;
                    last = container.lastElementChild;
                    first = container.firstElementChild;

                    //actions
                    first.style.transitionDuration = duration / 1000 + 's';
                    first.style.marginLeft = '0';

                    timeout = setTimeout(function() {
                        last.style.marginLeft = '-' + last.offsetWidth + 'px';
                        container.prepend(last);
                        active.classList.remove('active');
                        first.classList.add('active');
                        first = last;
                        indent = true;
                        clearTimeout(timeout);
                    }, duration);
                }
            }
            emit_left.addEventListener('click', emit);
        }

        function slideRight() {
            indent = true;

            function emit(e) {
                e.preventDefault();

                var next, first;
                indent = false;

                first = container.firstElementChild;
                next = active.nextElementSibling;

                active.style.transitionDuration = duration / 1000 + 's';
                active.style.marginLeft = `-${active.offsetWidth}px`;

                var timeout = setTimeout(function() {
                    console.log('works');
                    first.style.marginLeft = '0';
                    container.appendChild(first);
                    container.prepend(next);
                    first.classList.remove('active');
                    active.classList.remove('active');
                    next.classList.add('active');
                    first = active;
                    indent = true;

                    clearTimeout(timeout);
                }, duration);

            }
            emit_right.addEventListener('click', emit);
        }

        this.start = function(attr) {
            var first = container.firstElementChild;
            first.style.marginLeft = '-' + first.offsetWidth + 'px';
            alert(attr);
            function autoMove() {
                setTimeout(function() {
                    autoMove();
                }, duration);
            }

            autoMove();
            slideLeft();
            slideRight();
        };

    }
})(document, window);

// document.addEventListener('DOMContentLoaded', main());
 //  *****************  select all childs *************************
            // var nodes = document.getElementById('ID_of_parent').childNodes;
            // for(var i=0; i<nodes.length; i++) {
            //     if (nodes[i].nodeName.toLowerCase() == 'div') {
            //          nodes[i].style.background = color;
            //      }
            // }

            // window.getComputedStyle(document.querySelector('p')[0], ':before').onclick = function(){
            // }