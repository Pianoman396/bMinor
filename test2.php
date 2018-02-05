<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        /*.warning{
            width:45%;
            height:100px;
            margin:20% auto;
            border:3px dotted blueviolet;
            font-size:1.6em;
            font-weight:bolder;
            color:red;
            text-align:center;
            line-height:100px;
            -webkit-transform:scale(1);
               -moz-transform:scale(1);
                -ms-transform:scale(1);
                 -o-transform:scale(1);
                    transform:scale(1);
            -webkit-transition:0.4s ease-in-out;
            -o-transition:0.4s ease-in-out;
            -moz-transition:0.4s ease-in-out;
            transition:0.4s ease-in-out;
            -webkit-animation:warn 1s 0s infinite ease-in-out;
               -moz-animation:warn 1s 0s infinite ease-in-out;
                 -o-animation:warn 1s 0s infinite ease-in-out;
                    animation:warn 1s 0s infinite ease-in-out;
            -webkit-animation:warning 1s 0s infinite ease-in-out;
               -moz-animation:warning 1s 0s infinite ease-in-out;
                 -o-animation:warning 1s 0s infinite ease-in-out;
                    animation:warning 1s 0s infinite ease-in-out;
        }

            @-webkit-keyframes warn{ 0%{-webkit-transform:scale(0);transform:scale(0);}100%{-webkit-transform:scale(1);transform:scale(1);}}

            @-moz-keyframes warn{ 0%{-moz-transform:scale(0);transform:scale(0);}100%{-moz-transform:scale(1);transform:scale(1);}}

            @-o-keyframes warn{ 0%{-o-transform:scale(0);transform:scale(0);}100%{-o-transform:scale(1);transform:scale(1);}}

            @keyframes warn{ 0%{-webkit-transform:scale(0);-moz-transform:scale(0);-o-transform:scale(0);transform:scale(0);}100%{-webkit-transform:scale(1);-moz-transform:scale(1);-o-transform:scale(1);transform:scale(1);}}

            @-webkit-keyframes warning{ 0%{-webkit-transform:scale(0);transform:scale(0);}100%{-webkit-transform:scale(1);transform:scale(1);}}

            @-moz-keyframes warning{ 0%{-moz-transform:scale(0);transform:scale(0);}100%{-moz-transform:scale(1);transform:scale(1);}}

            @-o-keyframes warning{ 0%{-o-transform:scale(0);transform:scale(0);}100%{-o-transform:scale(1);transform:scale(1);}}

            @keyframes warning{ 0%{-webkit-transform:scale(0);-moz-transform:scale(0);-o-transform:scale(0);transform:scale(0);}100%{-webkit-transform:scale(1);-moz-transform:scale(1);-o-transform:scale(1);transform:scale(1);}}

*/
    </style>
</head>

<body>
     <div class="warning">
        Works
     </div>
    <input type="text" class="val" />
    <script type="text/javascript">
    var v = document.querySelector('.val');

    // document.querySelector('.val').onchange = function() {
    //     var url = v;
    //     var request = new XMLHttpRequest();

    //     request.open('POST', url, true);

    //     if (window.XMLHttpRequest) {
    //         request = new XMLHttpRequest();
    //     } else {
    //         request = new ActiveXObject("Microsoft.XMLHTTP");
    //     }
    //     request.onreadystatechange = function() {
    //         if (this.readyState == 4 && this.status == 200) {
    //             // v.innerHTML = this.responseText;
    //         }

    //         request.send();
    //     }
    // }

    function Ajax(){
        this.request = new XMLHttpRequest();

        this.cross_platform_request = function() {
            this.request.open('GET', window.location ,true);

            if (window.XMLHttpRequest) {
                type = new XMLHttpRequest();
            } else {
                type = new ActiveXObject("Microsoft.XMLHTTP");
            }


        };

        this.sending = function(data){
            this.cross_platform_request();
            this.request.readystatechange = function(){
                if(this.request.readyState < 4){
                    document.querySelector('.wraning').innerHTML = 'Loading...';
                }
                if(this.request.readyState == 4 && this.request.status == 200){
                    v.innerHTML = this.request.responseText;
            }

            send(data);
        };
    }

    var dataSend = new Ajax();
    dataSend.constructor.prototype.transfer = function(){
        console.log('works');
    }
    transfer.sending('')

    </script>
</body>

</html>
<?= $_SERVER['PHP_SELF'];?>
<?= $_SERVER['REQUEST_METHOD'] == 'POST' ? $_POST[val] : $_POST[val] ; ?>