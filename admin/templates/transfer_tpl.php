<html>
<head>
    <title>Thông báo chuyển trang</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="REFRESH" content="3; url=<?=$page_transfer?>">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
    <style type="text/css" media="screen">
        *{
            padding: 0;
            margin: 0;
        }
    div.page {
        background-image: linear-gradient(to right top, rgb(5, 25, 55), rgb(0, 77, 122), rgb(0, 135, 147), rgb(0, 191, 114), rgb(168, 235, 18));
        height: 100vh;
        position: relative;
        z-index: 1;
        background-position: bottom center;
        background-size: cover;
        overflow: hidden;
        clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 100% 45%, 50% 95%, 50% 95%, 0% 75%);
    }

    .page-center {
        max-width: 600px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        padding: 30px;
        font-family: 'Arial';
        margin: 100px auto;
        z-index: 2;
        position: relative;
    }

    div.noidung {
        width: 100%;
        text-align: center;
    }

    .noidung p.noidung {
        color: #FFF;
        font-size: 15px;
    }

    .noidung p.click_here a {
        color: #FF0;
        font-size: 15px;
    }

    .load-pre {
        position: relative;
        height: 70px;
    }

    .loader {
        margin: 0 auto;
        width: 60px;
        height: 50px;
        text-align: center;
        font-size: 10px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translateY(-50%) translateX(-50%);
    }

    .loader>div {
        height: 100%;
        width: 8px;
        display: inline-block;
        float: left;
        margin-left: 2px;
        -webkit-animation: delay 0.8s infinite ease-in-out;
        animation: delay 0.8s infinite ease-in-out;
    }

    .loader .bar1 {
        background-color: #754fa0;
    }

    .loader .bar2 {
        background-color: #09b7bf;
        -webkit-animation-delay: -0.7s;
        animation-delay: -0.7s;
    }

    .loader .bar3 {
        background-color: #90d36b;
        -webkit-animation-delay: -0.6s;
        animation-delay: -0.6s;
    }

    .loader .bar4 {
        background-color: #f2d40d;
        -webkit-animation-delay: -0.5s;
        animation-delay: -0.5s;
    }

    .loader .bar5 {
        background-color: #fcb12b;
        -webkit-animation-delay: -0.4s;
        animation-delay: -0.4s;
    }

    .loader .bar6 {
        background-color: #ed1b72;
        -webkit-animation-delay: -0.3s;
        animation-delay: -0.3s;
    }

    @-webkit-keyframes delay {

        0%,
        40%,
        100% {
            -webkit-transform: scaleY(0.05);
        }

        20% {
            -webkit-transform: scaleY(1);
        }

    }

    @keyframes delay {

        0%,
        40%,
        100% {
            transform: scaleY(0.05);
            -webkit-transform: scaleY(0.05);
        }

        20% {
            transform: scaleY(1);
            -webkit-transform: scaleY(1);
        }

    }

    #bubbles-bg {
     width: 100%;
     height: 100vh;
     position: relative;
     overflow: hidden;
     -webkit-animation: bgcolor 20s linear infinite;
     animation: bgcolor 20s linear infinite;
     top: 0px;
    position: absolute;
}
 #bubbles-bg span {
     position: absolute;
     width: 80px;
     height: 80px;
     display: block;
     background-color: #fff;
     -webkit-animation: animate 10s linear infinite;
     animation: animate 10s linear infinite;
}
 #bubbles-bg span:nth-child(3n + 1) {
     background-color: transparent;
     border: 2px solid #fff;
}
 #bubbles-bg span:nth-child(1) {
     top: 50%;
     left: 20%;
}
 #bubbles-bg span:nth-child(2) {
     top: 80%;
     left: 40%;
     -webkit-animation: animate 12s linear infinite;
     animation: animate 12s linear infinite;
}
 #bubbles-bg span:nth-child(3) {
     top: 10%;
     left: 65%;
     -webkit-animation: animate 15s linear infinite;
     animation: animate 15s linear infinite;
}
 #bubbles-bg span:nth-child(4) {
     top: 50%;
     left: 70%;
     -webkit-animation: animate 6s linear infinite;
     animation: animate 6s linear infinite;
}
 #bubbles-bg span:nth-child(5) {
     top: 10%;
     left: 30%;
     -webkit-animation: animate 9s linear infinite;
     animation: animate 9s linear infinite;
}
 #bubbles-bg span:nth-child(6) {
     top: 90%;
     left: 95%;
     -webkit-animation: animate 8s linear infinite;
     animation: animate 8s linear infinite;
}
 #bubbles-bg span:nth-child(7) {
     top: 80%;
     left: 5%;
     -webkit-animation: animate 5s linear infinite;
     animation: animate 5s linear infinite;
}
 #bubbles-bg span:nth-child(8) {
     top: 35%;
     left: 50%;
     -webkit-animation: animate 14s linear infinite;
     animation: animate 14s linear infinite;
}
 #bubbles-bg span:nth-child(9) {
     top: 5%;
     left: 5%;
     -webkit-animation: animate 11s linear infinite;
     animation: animate 11s linear infinite;
}
 #bubbles-bg span:nth-child(10) {
     top: 25%;
     left: 90%;
}
 @-webkit-keyframes animate {
     0% {
         -webkit-transform: scale(0) translateY(0) rotate(0deg);
         transform: scale(0) translateY(0) rotate(0deg);
         opacity: 1;
    }
     100% {
         -webkit-transform: scale(1) translateY(-100px) rotate(360deg);
         transform: scale(1) translateY(-100px) rotate(360deg);
         opacity: 0;
    }
}
 @keyframes animate {
     0% {
         -webkit-transform: scale(0) translateY(0) rotate(0deg);
         transform: scale(0) translateY(0) rotate(0deg);
         opacity: 1;
    }
     100% {
         -webkit-transform: scale(1) translateY(-100px) rotate(360deg);
         transform: scale(1) translateY(-100px) rotate(360deg);
         opacity: 0;
    }
}
 @-webkit-keyframes bgcolor {
     0% {
         background-color: #f44336;
    }
     25% {
         background-color: #03a9f4;
    }
     50% {
         background-color: #9c27b0;
    }
     75% {
         background-color: #00ff0a;
    }
     100% {
         background-color: #f44336;
    }
}
 @keyframes bgcolor {
     0% {
         background-color: #f44336;
    }
     25% {
         background-color: #03a9f4;
    }
     50% {
         background-color: #9c27b0;
    }
     75% {
         background-color: #00ff0a;
    }
     100% {
         background-color: #f44336;
    }
}
 
    </style>
</head>

<body>
    <div class="page">
        <div class="page-center">
            <div class="load-pre">
                <div class="loader">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                    <div class="bar4"></div>
                    <div class="bar5"></div>
                    <div class="bar6"></div>
                </div>
            </div>

            <div class="noidung">
                <p class="noidung">
                    <?=$showtext?>
                </p>
                <p>-----------------------------------------</p>
                <p class="click_here">
                    <a href="<?=$page_transfer?>">(Click vào đây nếu bạn không muốn đợi lâu)</a>
                </p>
            </div>
        </div>

        <div id="bubbles-bg">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</body>
</html>