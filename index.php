<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@300;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fauna+One&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/aae7ef59b3.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="icon" href="https://www.pngrepo.com/download/200170/dumbbell-gym.png" type="image/png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@300&family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@300&family=Oswald:wght@200;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@300&family=Ruda:wght@500&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Istok+Web&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="GYM.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/aae7ef59b3.js" crossorigin="anonymous"></script>
    <title>GYM</title>
    <style>
       html
        { position:relative;
            height:2500px;
        }
        body {
            overflow-x: hidden;
        }

        * {
            padding: 0;
            margin: 0;
        }

        #home {
            transform: translateY(100px);
            background-color: rgb(255, 255, 255);
            width: 100%;
            height: 600px;
            align-items: center;
            position: relative;
        }

        .navlinks {
            justify-content: center;
            align-items: center;
            text-decoration: none;
            display: block;
            position: absolute;
            margin-top: 30px;
            left: 780px;

        }

        .logo {
            position: absolute;
            width: 80px;
            height: 80px;
            float: left;
            top: 10%;
            left: 100px;
            z-index: 2;
        }

        .logo>img {
            width: 70%;
            height: 70%;
            object-fit: fill;
            z-index: 2;
        }


        .navlinks a {
            text-decoration: none;
            margin-left: 10px;
            font-family: 'Lexend', sans-serif;
            font-size: 13px;
            font-weight: 500;
            display: inline;
            color: rgb(255, 255, 255);
            transition: all ease-in-out 0.3s;
            letter-spacing: 3px;
            text-align: center;
            margin-left: 10px;
            margin-right: 10px;
        }

        .navbar {
            position: fixed;
            float: none;
            background-color: #161618;
            justify-content: center;
            width: 100%;
            min-height: 12vh;
            color: white;
            align-items: center;
            overflow: hidden;
            z-index: 100;
        }

        .enr {
            position: fixed;
            float: right;
            background: #e7f70c;
            background-image: -webkit-linear-gradient(top, #93a337, #9c9127);
            background-image: -moz-linear-gradient(top, #939453, #6c942b);
            background-image: -ms-linear-gradient(top, #7d8331, #58b82b);
            background-image: -o-linear-gradient(top, #bcc453, #44861e);
            background-image: linear-gradient(to bottom, #939e32, #96bb30);
            -webkit-border-radius: 28;
            -moz-border-radius: 28;
            border-radius: 28px;
            font-family: Arial;
            color: #ffffff;
            font-size: 12px;
            font-weight: 600;
            padding: 12px 20px 6px 20px;
            text-decoration: none;
            width: 80px;
            height: 18px;
            text-align: center;
            left: 180vh;
            top: 20px;
            z-index: 101;
        }

        .enr:hover {
            background: #3cb0fd;
            background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
            background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
            background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
            background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
            background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
            text-decoration: none;
            cursor: pointer;
        }

        .navlinks a:hover {
            cursor: pointer;

            border-radius: 8%;
            color: white;
            width: 120px;

            font-size: 15px;
        }

        .navbar.icon {
            display: none;

        }

        .hero {
            position: relative;
            width: 80%;
            left: 10%;
            right: 10%;
            background-color: rgb(255, 251, 251);
            display: flex;
            height: 600px;
        }

        .landimg {
            position: absolute;
            width: 420px;
            height: 300px;
            right: 10%;
            float: right;
            top: 20%;
            box-shadow: 0 2px 10px 0;
            border-radius: 5%;
        }

        .landimg>img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 5%;

        }

        .txs {
            position: absolute;
            width: 100%;
            text-align: justify;
            top: 30%;
            text-overflow: clip;
            left: 6%;
        }

        #head1 {
            letter-spacing: 6px;
            font-family: 'Bebas Neue', cursive;
            font-size: 50px;
        }

        .join {
            position: relative;
            width: 120px;
            background-color: rgba(243, 226, 236, 0.486);
            font-size: 15px;
            padding: 5px;
            border-color: rgba(145, 140, 140, 0.336);
            color: rgb(93, 93, 112);
            border-radius: 25px;
            padding: 3px;

            letter-spacing: 2px;
            height: 40px;
            top: 55%;
            left: 6%;
            border: 2px solid rgba(149, 222, 231, 0.452);
            box-shadow: 2px 3px 5px 0px rgba(2, 0, 0, 0.658);
        }

        .join:hover {
            border-radius: 25px;
            color: rgb(221, 221, 221);
            box-shadow: 0 0 0 0;
            transition: all ease-in-out 0.2s;
            background-color: rgb(0, 0, 0);

        }

        .plans {
            position: absolute;
            width: 120px;
            height: 40px;
            padding: 0 10px;
            border-radius: 25px;
            background-color: rgb(13, 167, 13);
            font-size: 14px;
            font-family: 'Istok Web', sans-serif;
            letter-spacing: 4px;
            color: white;
            top: 55%;
            left: 19%;
            font-weight: 700;
            box-shadow: 2px 3px 5px 0px rgba(2, 0, 0, 0.658);
            cursor: pointer;
        }

        .plans:hover {
            background-color: rgba(0, 0, 0, 0.377);
            transition: all ease-in-out 0.2s;
            color: white;
            border-radius: 25px;
            box-shadow: 0 0 0;
        }

        #about {
            margin-top: 30px;
            width: 100%;
            height: 650px;
            background-image: url(https://www.teahub.io/photos/full/66-662853_gym-hd.jpg);
            opacity: 1;
        }

        #about::before {
            content: '';
            position: absolute;
            background-color: black;
            width: 220vh;
            height: 89vh;
            top: 700px;
            opacity: 0.7;
        }

        .abin {
            position: absolute;
            left: 350px;
            top: 950px;
            font-size: 30px;
            display: block;
            color: white;
            font-family: 'Oswald', sans-serif;
            font-weight: 300;
            text-align: justify;
            transition: all ease-in-out 0.2s;
            width: 810px;
            visibility: hidden;
        }

        .animat {
            visibility: visible !important;
            animation-name: aos;
            animation-duration: 1s;
            animation-timing-function: ease-in-out;
        }

        @keyframes aos {

            0% {
                transform: translateX(-150%);
            }

            50% {
                transform: translateX(8%);
            }

            65% {
                transform: translateX(-4%);
            }

            80% {
                transform: translateX(4%);
            }

            95% {
                transform: translateX(-2%);
            }

            100% {
                transform: translateX(0%);
            }

        }

        #pricing {
            background-image: url(https://www.thezonegym.com/wp-content/uploads/2018/02/h3-slider-img-1.jpg);
            background-repeat: no-repeat;
            background-position: right;
            flex-wrap: nowrap;
            flex-direction: row;
            display: flex;
            justify-content: center;
            opacity: 0.9;
        }

        .circle2 {
            border-bottom: 1px solid white;
            width: 300px;
            height: 150px;
            background: linear-gradient(to bottom right, rgba(0, 0, 0, 0.459), rgb(0, 0, 0));
            transform: translate(0%, 0%);
            transition: all ease-in-out 0.1s;
            align-items: center;
        }

        #pricing>div {
            box-shadow: 1px 2px 20px 2px rgb(0, 0, 0);
            margin: 100px;
            width: 300px;
            height: 500px;

            background: linear-gradient(to bottom right, rgba(160, 133, 133, 0.459), rgb(0, 0, 0));
        }

        .circle {
            border-bottom: 1px solid white;
            width: 300px;
            height: 150px;
            background: linear-gradient(to bottom right, rgba(0, 0, 0, 0.459), rgb(0, 0, 0));
            transform: translate(0%);


            transition: all ease-in-out 0.1s;
        }

        h3 {
            font-family: 'Darker Grotesque', sans-serif;
            font-size: 70px;
            transform: translateY(-150%);
            text-align: center;
            color: rgb(255, 23, 35);
            letter-spacing: 4px;
        }

        .premium {
            padding-top: 20px;
            transform: translate(10%, -90%);
            display: block;
            width: 200px;
            transform: translate(25%, -40%);
            line-height: 40px;
            text-align: center;
        }

        .e1 {
            letter-spacing: 3px;
            font-family: 'Jost', sans-serif;
            color: rgb(255, 255, 255);
            font-weight: 600;
            font-size: 20px;
            display: block;
        }

        h5 {
            margin-top: 5px;
            font-family: 'Darker Grotesque', sans-serif;
            background-color: ORANGE;
            width: 60px;
            height: 20px;
            text-align: center;
            padding: 2px;
            transform: translate(180%, -620%);
            border-radius: 8%;
            letter-spacing: 1px;
            color: rgb(12, 12, 11);
            margin-right: 100px;
            font-weight: 1000;
        }

        .premium2 {
            display: block;
            width: 200px;
            transform: translate(25%, 3%);
            line-height: 50px;
            text-align: center;
        }

        .b1 {
            font-size: 20px;
            color: white;
            letter-spacing: 2px;

            width: 100px;
            height: 30px;
            font-family: 'Dela Gothic One', cursive;
            border-radius: 8px;
            transform: translate(50%, 0%);
            margin-bottom: 15px;
        }

        #prep {
            font-family: 'Darker Grotesque', sans-serif;
            font-size: 70px;
            transform: translateY(15%);
            text-align: center;
            color: rgb(255, 23, 35);
            letter-spacing: 4px;

        }

        #bs {
            width: 30px;
            height: 40px;
            background: #6e7c1c;
            border-radius: 25px;

            font-size: 15px;
            font-weight: 500;
            color: white;
            padding: 8px 30px 8px 30px;
            font-family: Arial;
            text-align: center;
            text-decoration: none;
        }

        #bs:hover {
            background: #fcd63c;
            background-image: -webkit-linear-gradient(top, #fcd63c, #b8375e);
            background-image: -moz-linear-gradient(top, #fcd63c, #b8375e);
            background-image: -ms-linear-gradient(top, #fcd63c, #b8375e);
            background-image: -o-linear-gradient(top, #fcd63c, #b8375e);
            background-image: linear-gradient(to bottom, #fcd63c, #b8375e);
            text-decoration: none;
            cursor: pointer;
        }

        #contact {
            width: 100%;
            background-color: white;
            height: 645px;
        }

        .loc {
            z-index: 50;
            transform: translate(20%, 30%);
            width: 400px;
            height: 380px;
            border-radius: 10px;
        }

        .loc>img {
            border-radius: 10px;
            width: 100%;
            object-fit: cover;
            height: 100%;

        }

        #cont {
            font-size: 4vw;
            text-align: center;
            transform: translateY(80%);
            font-family: 'Darker Grotesque', sans-serif;
            letter-spacing: 2px;
        }

        #faram {
            float: right;
            height: 400px;
            transform: translate(-20%, -70%);
            width: 40%;

        }

        input[type=text],
        select {
            font-size: 20px;
            letter-spacing: 3px;
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-family: 'Darker Grotesque', sans-serif;
        }

        input[type=submit] {
            font-size: 20px;
            font-weight: 600;
            width: 100%;
            letter-spacing: 3px;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: 'Darker Grotesque', sans-serif;
            color: rgb(255, 255, 255);
            box-sizing: border-box;
            background-color: rgb(0, 0, 0);
            cursor: pointer;
        }

        textarea {
            letter-spacing: 3px;
            font-weight: 600;
            font-family: 'Darker Grotesque', sans-serif;
            font-size: 15px;
            width: 100%;
            height: 150px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
            resize: none;
        }

        label {
            font-family: 'Darker Grotesque', sans-serif;
            font-size: 18px;
            font-weight: 700;
            letter-spacing: 3px;
        }

        footer {
            text-align: center;
            padding: 3px;
            background-color: rgb(34, 5, 5);
            color: white;
            display: block;
        }

        .last {
            height: 80px;
        }

        html {
            scroll-behavior: smooth;
        }

        footer>a {
            position: absolute;
            font-family: 'Archivo', sans-serif;
            font-size: 13px;
            font-weight: 300;
            text-decoration: none;
            bottom: -192px;
            left: 120px;
            color: rgb(255, 255, 255);
            cursor: pointer;
        }

        .fab fa-instagram:hover {
            cursor: pointer;
            color: yellow;

        }

        .linkna {
            font-size: 50px;
            position: absolute;
            color: #f8f8f8;
            z-index: 105;
            top: 10px;
            right: 40px;
            display: none;
        }

        @media only screen and (max-width: 412px) {
            .navbar {
                position: relative;
                background-color: rgb(34, 26, 26);
                height: 200px;
                width: 412px;
                margin: 0;
                padding: 0;
            }

            .linkna {
                font-size: 50px;
                position: absolute;
                color: #f8f8f8;
                z-index: 105;
                top: 10px;
                right: 40px;
                display: none;
            }

            .navlinks {
                display: grid;
                grid-template-columns: auto;
                background-color: red;
                position: absolute;
                top: 80px;
                margin: 0;
                width: 100%;
                left: -100%;
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <div class="navbar" target=".navlinks">
        <div class="logo">
            <img src="https://www.pngrepo.com/download/200170/dumbbell-gym.png">
        </div>

        <div class="navlinks" id="navi">
            <a href="#home">HOME</a>
            <a href="#about">ABOUT</a>
            <a href="#pricing">PRICING</a>
            <a href="#contact">CONTACT</a>
        </div>
    </div>
    <i class="fas fa-angle-down linkna"></i>
    <a class="enr" onclick="prompt('Enter Your Gmail ID'); prompt('Enter Your Phone Number');alert('Thank You For The Details,We Will Contact You Shortly');">ENROLL</a>


    <section class="HOME" id="home">
        <div class="hero">
            <div class="landimg">
                <img src="https://source.unsplash.com/420x300/?gym" alt="">
            </div>
            <div class="txs">
                <h1 id="head1">Exercise until the <br><span style="color: rgb(55, 58, 219);"> body obeys</span></h1>
            </div>
            <button class="join">Join</button>
            <button class="plans">Plans</button>
        </div>
    </section>
    <section class="ABOUT" id="about">

        <p class="abin">We want to help you live a fit and healthy lifestyle! We do this by helping you find the most suitable equipment for
            your home gym, studio or commercial gym, keeping your budget, lifestyle and fitness goals in mind. We stock a wide range
            of gym equipment, with strength equipment, cardio, cross training and so much more. Our awesome team is always keen to
            help, so please call us to discuss your needs.</p>
    </section>
    <section class="PRICING" id="pricing">
        <div>
            <div class="circle"></div>
            <h3>JUMBO</h3>
            <h5>POPULAR</h5>
            <ul class="premium">
                <li class="e1">Personal Trainer</li>
                <li class="e1">Diet Chart</li>
                <li class="e1">Pool Access</li>
                <li class="e1">Coupons</li>
                <li class="e1">Extra Perks</li>
                <div class="b1">$600</div>
                <a href="" id="bs">BUY</a>
            </ul>
        </div>
        <div>
            <div class="circle2">
                <h1 id="prep">MINI</h1>
            </div>
            <ul class="premium2">
                <li class="e1">Personal Trainer</li>
                <li class="e1">Free Vouchers</li>
                <li class="e1">Pool Access(Limited)</li>

                <div class="b1">$450</div>
                <a href="/" id="bs">BUY</a>
            </ul>
        </div>
    </section>
    <section class="CONTACT" id="contact">
        <h1 id="cont">CONTACT US</h1>
        <div class="loc">

            <img src="https://www.jaysgymusa.com/indeximages/jaysMAP.jpg">
        </div>
        <div id="faram">
            <form method="POST" action="https://send.pageclip.co/Rp5FwbYFKDEwnI0OYArwXvA33i8Qiby2">
                <label for="name">Name</label> <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
                <label for="Email">Email ID</label><input type="text" name="email" id="Email" placeholder="abc@gmail.com" required><br>
                <textarea name="views" id="write" cols="50" rows="10" placeholder="Write Your Feedback Here"></textarea>
                <input type="submit" value="Submit" onclick="alert('Feedback Submitted Successfully');">
            </form>
        </div>
    </section>
    <footer class="last">
        <i class="fab fa-instagram" style="font-size: 25px;transform: translate(2900%,100%); color: rgb(141, 110, 110);"></i>
        <i class="fab fa-twitter" style="font-size: 25px;transform: translate(3000%,100%);color: rgb(133, 112, 112);"></i>
        <i class="fab fa-facebook-f" style="font-size: 25px;transform: translate(5400%,100%);color: rgb(133, 112, 112); "></i>
        <i class="far fa-copyright" style="font-size: 15px;transform: translate(-1450%,150%); color: rgb(133, 112, 112);"> </i>
        <a href="/" style="left: 250px; ">Aman Agnihotri</a>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <script>
            $(window).scroll(function() {
                $('.abin').each(function() {
                    var imagePos = $(this).offset().top;
                    var imageHeight = $(this).height();
                    var topOfWindow = $(window).scrollTop();

                    if (imagePos < topOfWindow + imageHeight && imagePos + imageHeight > topOfWindow) {
                        $(this).addClass("animat");
                    } else {
                        $(this).removeClass("animat");
                    }
                });
            });
        </script>
    </footer>
</body>

</html>
