<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http - equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Title Page </title>
    <style>
    * {
        box-sizing: border-box;
    }

    body,
    html {
        margin: 0;
        padding: 0;
        font-size: 100%;
        font-size: 1.17em;
    }

    .wrapper {
        width: 85%;
        margin: 0 auto;
    }

    .friends--list {
        position: relative;
        border: 1px solid red;
        width: 100%;
        margin: 0 auto;
        padding: 0;
        overflow: hidden;
        z-index: 9;
    }

    .slide {
        list-style: none;
        padding: 0;
        margin: 0;
        width: 2250em;
    }

    .href--item {
        display: inline-block;
        margin: 0 4px;
    }

    .href--item img {
        display: inline-block;
        width: 100em;
        height: 10.66032210em;
        background-color: blueviolet;
        margin: 0;
    }

    .href--item img:nth-child(2n) {
        background-color: tomato;
    }





    .friends--list__right {
        content: '';
        position: absolute;
        border: 1px solid blue;
        background-color: rgba(255, 255, 255, 0.4);
        left: 0;
        top: 0;
        margin: 0;
        padding: 1.79em 1.79em;
        /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#fcfcfc+21,fcfcfc+69&1+33,0.14+100 */
        /* IE9 SVG, needs conditional override of 'filter' to 'none' */
        background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIyMSUiIHN0b3AtY29sb3I9IiNmY2ZjZmMiIHN0b3Atb3BhY2l0eT0iMSIvPgogICAgPHN0b3Agb2Zmc2V0PSIzMyUiIHN0b3AtY29sb3I9IiNmY2ZjZmMiIHN0b3Atb3BhY2l0eT0iMSIvPgogICAgPHN0b3Agb2Zmc2V0PSI2OSUiIHN0b3AtY29sb3I9IiNmY2ZjZmMiIHN0b3Atb3BhY2l0eT0iMC41NCIvPgogICAgPHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjZmNmY2ZjIiBzdG9wLW9wYWNpdHk9IjAuMTQiLz4KICA8L2xpbmVhckdyYWRpZW50PgogIDxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxIiBoZWlnaHQ9IjEiIGZpbGw9InVybCgjZ3JhZC11Y2dnLWdlbmVyYXRlZCkiIC8+Cjwvc3ZnPg==);
        background: -moz-linear-gradient(left, hsla(0, 0%, 99%, 1) 21%, hsla(0, 0%, 99%, 1) 33%, hsla(0, 0%, 99%, 0.54) 69%, hsla(0, 0%, 99%, 0.14) 100%);
        /* FF3.6-15 */
        background: -webkit-gradient(linear, left top, right top, color-stop(21%, hsla(0, 0%, 99%, 1)), color-stop(33%, hsla(0, 0%, 99%, 1)), color-stop(69%, hsla(0, 0%, 99%, 0.54)), color-stop(100%, hsla(0, 0%, 99%, 0.14)));
        /* Chrome4-9,Safari4-5 */
        background: -webkit-linear-gradient(left, hsla(0, 0%, 99%, 1) 21%, hsla(0, 0%, 99%, 1) 33%, hsla(0, 0%, 99%, 0.54) 69%, hsla(0, 0%, 99%, 0.14) 100%);
        /* Chrome10-25,Safari5.1-6 */
        background: -o-linear-gradient(left, hsla(0, 0%, 99%, 1) 21%, hsla(0, 0%, 99%, 1) 33%, hsla(0, 0%, 99%, 0.54) 69%, hsla(0, 0%, 99%, 0.14) 100%);
        /* Opera 11.10-11.50 */
        background: -ms-linear-gradient(left, hsla(0, 0%, 99%, 1) 21%, hsla(0, 0%, 99%, 1) 33%, hsla(0, 0%, 99%, 0.54) 69%, hsla(0, 0%, 99%, 0.14) 100%);
        /* IE10 preview */
        background: linear-gradient(to right, hsla(0, 0%, 99%, 1) 21%, hsla(0, 0%, 99%, 1) 33%, hsla(0, 0%, 99%, 0.54) 69%, hsla(0, 0%, 99%, 0.14) 100%);
        /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcfcfc', endColorstr='#24fcfcfc', GradientType=1);
        /* IE6-8 */
        z-index: 10;
    }

    .friends--list__left {
        display: inline-block;
        position: absolute;
        border: 1px solid blue;
        background-color: rgba(255, 255, 255, 0.4);
        right: 0;
        top: 0;
        margin: 0;
        padding: 1.79em 1.79em;
        /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#fcfcfc+23,fcfcfc+100&0.14+9,1+61 */
        /* IE9 SVG, needs conditional override of 'filter' to 'none' */
        background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMCUiPgogICAgPHN0b3Agb2Zmc2V0PSI5JSIgc3RvcC1jb2xvcj0iI2ZjZmNmYyIgc3RvcC1vcGFjaXR5PSIwLjE0Ii8+CiAgICA8c3RvcCBvZmZzZXQ9IjIzJSIgc3RvcC1jb2xvcj0iI2ZjZmNmYyIgc3RvcC1vcGFjaXR5PSIwLjM3Ii8+CiAgICA8c3RvcCBvZmZzZXQ9IjYxJSIgc3RvcC1jb2xvcj0iI2ZjZmNmYyIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmY2ZjZmMiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
        background: -moz-linear-gradient(left, hsla(0, 0%, 99%, 0.14) 9%, hsla(0, 0%, 99%, 0.37) 23%, hsla(0, 0%, 99%, 1) 61%, hsla(0, 0%, 99%, 1) 100%);
        /* FF3.6-15 */
        background: -webkit-gradient(linear, left top, right top, color-stop(9%, hsla(0, 0%, 99%, 0.14)), color-stop(23%, hsla(0, 0%, 99%, 0.37)), color-stop(61%, hsla(0, 0%, 99%, 1)), color-stop(100%, hsla(0, 0%, 99%, 1)));
        /* Chrome4-9,Safari4-5 */
        background: -webkit-linear-gradient(left, hsla(0, 0%, 99%, 0.14) 9%, hsla(0, 0%, 99%, 0.37) 23%, hsla(0, 0%, 99%, 1) 61%, hsla(0, 0%, 99%, 1) 100%);
        /* Chrome10-25,Safari5.1-6 */
        background: -o-linear-gradient(left, hsla(0, 0%, 99%, 0.14) 9%, hsla(0, 0%, 99%, 0.37) 23%, hsla(0, 0%, 99%, 1) 61%, hsla(0, 0%, 99%, 1) 100%);
        /* Opera 11.10-11.50 */
        background: -ms-linear-gradient(left, hsla(0, 0%, 99%, 0.14) 9%, hsla(0, 0%, 99%, 0.37) 23%, hsla(0, 0%, 99%, 1) 61%, hsla(0, 0%, 99%, 1) 100%);
        /* IE10 preview */
        background: linear-gradient(to right, hsla(0, 0%, 99%, 0.14) 9%, hsla(0, 0%, 99%, 0.37) 23%, hsla(0, 0%, 99%, 1) 61%, hsla(0, 0%, 99%, 1) 100%);
        /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#24fcfcfc', endColorstr='#fcfcfc', GradientType=1);
        /* IE6-8 */
        z-index: 10;
    }
    /* .left--side, .right--side{
  position:absolute;
   display:inline-block;
   padding:1em;
  background:silver;
 } */
    /*.left--side{
  left:0;
}
.right--side{
  right:0;
  left:10%;
} */

    .active {
        animation: fadein 0.3s 0 1 ease-in-out;
    }

    @keyframes fadein {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    ul>li {
        transition: 0.8s ease-in-out;
    }

    .zero {
        opacity: 0;
    }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="friends--list">
            <a href="javascript:;" class="friends--list__left"></a>
            <a href="javascript:;" class="friends--list__right"></a>
            <ul class="slide">
                <li class="href--item active"><a href=""><img src="http://www.designyourway.net/diverse/lanph/Return-to-Twilight.jpg" alt=""></a></li>
                <li class="href--item"><a href=""><img src="http://shoottheframe.com/wp-content/uploads/2017/01/Sander_Grefte_shoot_the_land_shoot_the_frame_3-500x500.jpg" alt=""></a></li>
                <li class="href--item"><a href=""><img src="http://www.sbk-japan.com/wp/wp-content/themes/sbk/images/landscape/keyvisual_landscape.jpg" alt=""></a></li>
                <li class="href--item"><a href=""><img src="https://img00.deviantart.net/c5ec/i/2014/289/f/5/fantasy_landscape_with_fog_on_the_water_by_eocdesigns-d833m8b.jpg" alt=""></a></li>
                <li class="href--item"><a href=""><img src="https://librestock.com/media/thumbs/landscape-seascape-dark-clouds-large.jpg" alt=""></a></li>
                <li class="href--item"><a href=""><img src="http://www.eastfab.com/images/joomgallery/thumbnails/fotografen_2/best_of_teddy_marks_4/landscape_36/landscape_14_20161219_1122688602.jpg" alt=""></a></li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
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
    </script>
</body>

</html>