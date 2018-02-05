function Carousel(options) {

        var i, j, defaults, items, container, autoplay, speed, emitter_left, emitter_right;

        defaults = {
            autostart: true,
            speed: 500
        }
        this.options = !options ? defaults : options;
        // items = document.querySelector('.slide').childNodes.nodeName == 'img'
        //items = [].slice.call(document.querySelectorAll('.href--item'));
        emitter_left = document.querySelector('.friends--list__left');
        emitter_right = document.querySelector('.friends--list__right');
        container = document.querySelector('.slide');
        autoplay = this.options.autostart ? this.options.autostart : defaults.autostart;
        speed = this.options.speed ? this.options.speed : defaults.speed;



        //child = document.querySelectorAll('.href--item').childNodes;
        //active = document.querySelectorAll('.active');

        function leftMove() {
            i = true;

            function movingLeft(e) {
                e.preventDefault();
                if (i) {

                    i = false;
                    /* var current = items.filter(function(elem) { return elem.classList.contains('active'); })[0]; // choice 1*/
                    /*var current = document.querySelectorAll('.href--item.active')[0]; //choice 2*/
                    /*  var prev = current.previousElementSibling; /*i++;*/
                    // var next = current.nextElementSibling;
                    var active = document.querySelector('.href--item.active')[0];
                    active.style.marginLeft = '-' + active.offsetWidth + 'px';
                    active.classList.remove('active');
                    items = container.children; //var last_child = items[items.length - 1];
                    // console.log(last_child);

                    active.ontransitionend = function() {
                        i = true;
                        container.appendChild(active);
                        next.classList.add('active');
                        active.style.marginLeft = '0';

                    };
                    //kam karas anes setTimeout() - ov /* setTimeout(function() { container.appendCild(current); next.classList.add('active'); }, 800);*/
                }
            }
            emitter_left.addEventListener('click', movingLeft);
        }


        //           }
        function rightMove() {
            j = true;

            function movingRight(e) {
                e.preventDefault();
                j = false;
                var self, last_child, prev, active;

                active = document.querySelector('.href--item.active')[0];
                prev = active.previusElementSibling;
                console.log(prev);

                // last_child = active[active.length - 1];

                active.style.marginLeft = active.offsetWidth + 'px';
                active.classList.remove('active');

                active.ontransitionend = function() {
                    j = true;
                    console.log('works too');
                    container.appendChild(active);
                    prev.classList.add('active');
                    last_child.marginRight = '0';
                };
            }
            emitter_right.addEventListener('click', movingRight);



        }

        this.start = function() {
            if (autoplay == defaults.autostart) {
                console.log('work autoplay');
                var active = document.querySelector('.href--item.active')[0];
                console.log(active);
                var prev = active.previousElementSibling;
                console.log(prev);
                setInterval(function() {
                    active.style.marginLeft = '-' + active.offsetWidth + 'px';
                    active.classList.remove('active');

                    container.appendChild(active);
                    next.classList.add('active');

                    active.style.marginLeft = '0';

                }, 800);

                leftMove();
                rightMove();
            } else {
                console.log('somting wrong');
                leftMove();
                rightMove();
            }

        }
    }


    var slider = new Carousel({
        autoplay: true,
        speed: 1
    });
    slider.start();



    /*
        function Abc(params) {
            var defaults = { width: 400, height: 500 };
            this.params = !params ? defaults : params;
            this.square = function() {
                console.log(this);
                var width = this.params.width ? this.params.width : defaults.width;
                var height = this.params.height ? this.params.height : defaults.height;
                document.write(width * height);
            }
        }
        var sum = new Abc();
        sum.square();*/






    /*function Carousel(usrinp) {
        var i, j, defaults, items, child, autoplay, speed, left, right, active;
        defaults = {
            autostart: true,
            speed: 1000
        }

        this.usrinp = !usrinp ? defaults : usrinp;
        autoplay = usrinp ? usrinp.autoplay : defaults.autoplay;
        speed = usrinp ? usrinp.speed : defaults.speed;
        items = document.querySelector('.slide').childNodes.nodeName == 'img'
        items = document.querySelectorAll('.href--item');
        child = document.querySelectorAll('.href--item').childNodes;
        active = document.querySelectorAll('.active');

        function leftMove() {
            left = document.querySelector('.friends--list__left');
            left.addEventListener('click', function(e) {
                e.preventDefault();
                if (items.children.nodeName.tolowerCase() == 'img') {
                    console.log('works');
                    items.className == 'active' ? console.log('ok') : console.log('wrong');
                    items.classlist.remove('active');
                    items.nextSibling.classlist.add('active');
                    items.previusSibling.child.style.left = child.offsetWidth;
                    cosnole.log('some');
                } else { console.error('somting wrong'); }
            });
        }
        for (i = 0; i < ) {}

        function rightMove() {} this.start = function() { leftMove(); }
    }
    var slider = n ew Carousel();
    slider.start();*/