<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/SWD Youtube2.png" type = "image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" />

    <noscript>
        <link rel="stylesheet" href="css/noscript.css" />
    </noscript>
    <title>VIT SW&D</title>
    <style>
        .playlist {
            text-decoration: none;
            color: white;
            font-weight: bold;
            font-size: 20px;
            position: relative;
            padding: 10px;
        }

        a.playlist.five:after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            color: white;
            width: 0%;
            height: 100%;

            border-bottom: 2px solid white;

            transition: width 0.3s ease;
        }

        a.playlist.five:hover:after {
            left: 0;
            width: 100%;
            color: white;
            transition: width .3s ease;
        }

        .hover-img {
            background-color: #000;
            color: #fff;
            display: inline-block;
            margin: 8px;
            max-width: 95%;
            overflow: hidden;
            position: relative;
            text-align: center;
            width: 100%;
        }

        .hover-img * {
            box-sizing: border-box;
            transition: all 0.45s ease;
        }

        .hover-img:before,
        .hover-img:after {
            background-color: rgba(0, 0, 0, 0.5);
            border-top: 32px solid rgba(0, 0, 0, 0.5);
            border-bottom: 32px solid rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            content: '';
            transition: all 0.3s ease;
            z-index: 1;
            opacity: 0;
            transform: scaleY(2);
        }

        .hover-img img {
            vertical-align: top;
            max-width: 100%;
            backface-visibility: hidden;
        }

        .hover-img figcaption {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            align-items: center;
            z-index: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            line-height: 1.1em;
            opacity: 0;
            z-index: 2;
            transition-delay: 0.1s;
            /*font-size: 24px;*/
            font-weight: 400;
            letter-spacing: 1px;
            /*text-transform: uppercase;*/
        }

        .hover-img:hover:before,
        .hover-img:hover:after {
            transform: scale(1);
            opacity: 1;
        }

        .hover-img:hover>img {
            opacity: 0.7;
        }

        .hover-img:hover figcaption {
            opacity: 1;
        }

        .hover14 section::before {
            position: absolute;
            top: 0;
            left: -75%;
            z-index: 2;
            display: block;
            content: '';
            width: 50%;
            height: 100%;
            background: -webkit-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, .3) 100%);
            background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, .3) 100%);
            -webkit-transform: skewX(-25deg);
            transform: skewX(-25deg);
        }

        .hover14 section:hover::before {
            -webkit-animation: shine 1.5s;
            animation: shine 1.5s;
        }

        @-webkit-keyframes shine {
            100% {
                left: 125%;
            }
        }

        @keyframes shine {
            100% {
                left: 125%;
            }
        }

        .button1 {
            display: inline-block;
            position: relative;
        }

        .button1 span {
            -webkit-transition: 0.6s;
            -moz-transition: 0.6s;
            -o-transition: 0.6s;
            transition: 0.6s;
            -webkit-transition-delay: 0.2s;
            -moz-transition-delay: 0.2s;
            -o-transition-delay: 0.2s;
            transition-delay: 0.2s;
        }

        .button1:before,
        .button1:after {
            content: '';
            position: absolute;
            top: 0em;
            left: 0;
            width: 100%;
            text-align: center;
            opacity: 0;
            -webkit-transition: .4s, opacity .6s;
            -moz-transition: .4s, opacity .6s;
            -o-transition: .4s, opacity .6s;
            transition: .4s, opacity .6s;
        }

        /* :before */

        .button1:before {
            content: attr(data-hover);
            -webkit-transform: translate(-150%, 0);
            -moz-transform: translate(-150%, 0);
            -ms-transform: translate(-150%, 0);
            -o-transform: translate(-150%, 0);
            transform: translate(-150%, 0);
        }

        /* :after */

        .button1:after {
            content: attr(data-active);
            -webkit-transform: translate(150%, 0);
            -moz-transform: translate(150%, 0);
            -ms-transform: translate(150%, 0);
            -o-transform: translate(150%, 0);
            transform: translate(150%, 0);
        }

        /* Span on :hover and :active */

        .button1:hover span,
        .button1:active span {
            opacity: 0;
            -webkit-transform: scale(0.3);
            -moz-transform: scale(0.3);
            -ms-transform: scale(0.3);
            -o-transform: scale(0.3);
            transform: scale(0.3);
        }

        /*  
    We show :before pseudo-element on :hover 
    and :after pseudo-element on :active 
*/

        .button1:hover:before,
        .button1:active:after {
            opacity: 1;
            -webkit-transform: translate(0, 0);
            -moz-transform: translate(0, 0);
            -ms-transform: translate(0, 0);
            -o-transform: translate(0, 0);
            transform: translate(0, 0);
            -webkit-transition-delay: .4s;
            -moz-transition-delay: .4s;
            -o-transition-delay: .4s;
            transition-delay: .4s;
        }

        /* 
  We hide :before pseudo-element on :active
*/

        .button1:active:before {
            -webkit-transform: translate(-150%, 0);
            -moz-transform: translate(-150%, 0);
            -ms-transform: translate(-150%, 0);
            -o-transform: translate(-150%, 0);
            transform: translate(-150%, 0);
            -webkit-transition-delay: 0s;
            -moz-transition-delay: 0s;
            -o-transition-delay: 0s;
            transition-delay: 0s;
        }


                .burger {
            display: none;
        }

        .nav-events:hover {
            font-size: 1.1rem;
            transform: skew(-2deg) translateX(-5%);
            transition: 0.3s;
        }

        .fs{
            font-size:1.2rem;
        }

        .active {
            color: #234d20;
        }

        .burger div {
            width: 25px;
            height: 5px;
            background-color: black;
            margin: 5px;
            transition: all 0.3s ease;
        }

        @media screen and (max-width:760px) {
            body {
                overflow-x: hidden;
            }

            .events {
                font-size: 2vw;
            }

            .navs {
                position: absolute;
                right: 0px;
                left: opx;
                height: 96vh;
                top: 50px;
                background-color: #fdfce9;
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 100%;
                font-size: 5vw;
                z-index: 3;
                transition: transform 0.5s ease-in;
                transform: translateX(100%);
            }

            .navs li {
                opacity: 0;
            }

            .burger {
                display: block;
                cursor: pointer;
            }

            .hidden {
                overflow: hidden;
            }


        }

        .nav-active {
            transform: translateX(0%);
        }

        @keyframes navLinkFade {
            from {
                opacity: 0;
                transform: translateX(50px);
            }

            to {
                opacity: 1;
                transform: translateX(0px);
            }
        }

        .toggle .line1 {
            transform: rotate(-45deg) translate(-8px, 6px);
            background-color: #234d20;
        }

        .toggle .line2 {
            opacity: 0;
        }

        .toggle .line3 {
            transform: rotate(45deg) translate(-8px, -6px);
            background-color: #234d20;
        }

                .footer2 {
            display: none;
        }

        @media screen and (max-width:760px) {
            body {
                overflow-x: hidden;
            }

            .footer1 {
                display: none;
            }

            .footer2 {
                display: inline;
            }
            
            .nav-events:hover {
            font-size: 2.2rem;
            transition: 0.3s;
        }

        }
    </style>
</head>

<body class="hover14 body" style="background-color: #f4f7f6">
    <!-- navbar -->
    <nav class="navbar navbar-light" style="background-color: #fdfce9">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/swd.png" alt="" width="20" height="auto" class="d-inline-block align-text-top">
                <span class="align-middle"><b>&nbsp &nbsp Social Welfare & Development</b></span>
            </a>
            <div class="d-flex">
                <ul class="nav navs">
                    <li class="nav-item">
                        <a class="nav-link active nav-events" aria-current="page" href="#"><b>GP2 Activities</b></a>
                        <div class="footer2 events">
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2 nav-events"><a href="#" class="nav-link p-0 text-muted fs">Utkarsh</a></li>
                                <li class="nav-item mb-2 nav-events"><a href="#" class="nav-link p-0 text-muted fs">Udaan</a></li>
                                <li class="nav-item mb-2 nav-events"><a href="#" class="nav-link p-0 text-muted fs">Matadhikar</a></li>
                                <li class="nav-item mb-2 nav-events"><a href="#" class="nav-link p-0 text-muted fs">Sarthi</a></li>
                                <li class="nav-item mb-2 nav-events"><a href="#" class="nav-link p-0 text-muted fs">Go-Green</a></li>
                                <li class="nav-item mb-2 nav-events"><a href="#" class="nav-link p-0 text-muted fs">Socio-Tech</a></li>
                                <li class="nav-item mb-2 nav-events"><a href="#" class="nav-link p-0 text-muted fs">Avishkar</a></li>
                                <li class="nav-item mb-2 nav-events"><a href="#" class="nav-link p-0 text-muted fs">Saksham</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active nav-events" aria-current="page" href="#"><b>Flagship</b></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link active nav-events" aria-current="page" href="#"><b>Our Team</b></a>
                    </li> -->
                </ul>
                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <img src="img/logo-vit-1.png" alt="" width="30" height="auto" class="d-inline-block align-text-top">
            </div>
        </div>
    </nav>


    <!-- who we are -->
    <section
        class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right" >
        <div class="content">
            <h2>WHO ARE WE</h2>
            <p class="major text">We at the Social Welfare & Development Committee, readily work with a motto to
                empower
                society and transform lives to bring out the positive changes in the society. We aim to be a helping
                hand towards everyone in society by organizing various events and activities throughout the year. Main
                strength of our committee lies in equality and unity amongst every member. We are always ready to do
                someone a good turn to be good for society with no expectations in return.</p>
                <div class="container-fluid my-4">
            <a class="button" href="team/index.html" role="button"><span
                    style="text-transform: uppercase; font-weight: bold;">Meet the Team</span></a>
        </div>
        </div>
        <div class="image">
            <img src="img/who.png" alt="" />
        </div>
    </section>

    <section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in"
        id="first" style="background-color: #234d20;" >
        <div class="content" style="color: white;">
            <h2 style="color: white;">OUR PROMISE</h2>
            <p>At SW&D, we promise to create a safe-space where people, who share our objective, can express themselves
                freely and work together as a team. We promise to work with vigour and diligence to ameliorate society
                through a myriad of activities. We also vow to utilize our platform to inculcate social values and
                helpful nature amongst people and move one step closer to achieving our ultimate goal-sustainable
                development.</p>
        </div>
        <div class="image">
            <figure><img src="img/pro.jpg" alt="" /></figure>
        </div>
    </section>
        
    <!-- Three -->
    <section class="spotlight style1 orient-left content-align-left image-position-center onscroll-image-fade-in"
        style="background-color: #234d20;">
        <div class="content" style="color: white;">
            <h2 style="color: white;">OUR MISSION</h2>
            <p>To formulate, implement, and coordinate policies and programs for the needs and welfare of poor and needy
                people, as well as to provide quality social services to help them in the face of challenges in life. We
                promote social and family responsibilities in order to develop individual potential, empower, and build
                a team that is innovative, cohesive, and professional.</p>
        </div>
        <div class="image">
            <figure><img src="img/garbage.jfif" alt="" /></figure>
        </div>
    </section>
<!-- GP2-->
    <section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in"
        id="first" >
        <div class="content">
            <h2>EXPLORE GP2</h2>
            <p>At SW&D, we promise to create a safe-space where people, who share our objective, can express themselves
                freely and work together as a team. We promise to work with vigour and diligence to ameliorate society
                through a myriad of activities. We also vow to utilize our platform to inculcate social values and
                helpful nature amongst people and move one step closer to achieving our ultimate goal-sustainable
                development.</p>
                    <div class="container-fluid my-4">
            <a class="button" href="GP2/index.php" role="button"><span
                    style="text-transform: uppercase; font-weight: bold;">Click to Register</span></a>
        </div>
        </div>
        <div class="image">
            <figure><img src="img/gp2.jpg" alt="" /></figure>
        </div>
    </section>
        
   <!-- Flagship-->
    <section class="spotlight style1 orient-left content-align-left image-position-center onscroll-image-fade-in">
        <div class="content">
            <h2>CONNECT WITH FLAGSHIP EVENTS</h2>
            <p>To formulate, implement, and coordinate policies and programs for the needs and welfare of poor and needy
                people, as well as to provide quality social services to help them in the face of challenges in life. We
                promote social and family responsibilities in order to develop individual potential, empower, and build
                a team that is innovative, cohesive, and professional.</p>
                    <div class="container-fluid my-4">
            <a class="button" href="flagship/flagship.html" role="button"><span
                    style="text-transform: uppercase; font-weight: bold;">Know More</span></a>
        </div>  
        </div>

        <div class="image">
            <figure><img src="img/slider.jpg" alt="" /></figure>
        </div>
    </section>
    <br>
    <br>

    <!-- footer -->
    <div class="container-fluid" style="background-color: #fdfce9; border-radius: 25px; text-decoration-color: white; padding-bottom: 0px;">
        <footer class="footer1" style="padding-top: 50px; padding-bottom: 0px">

            <div class="row ">
                <div class="col-6" style="width: 40%;" align="center">
                    <div class="container-fluid">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.442128793462!2d73.86601501484184!3d18.463621887442258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2ea950f616219%3A0x321bdae2cea9f064!2sVishwakarma%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1633011425624!5m2!1sen!2sin"
                            height="310px" width="100%" style="border:0; border-radius: 20px;" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>
                    <div class="py-5">
                        <p>© 2021 Social Welfare & Development committee, VIT Pune.</p>
                    </div>
                </div>

                <div class="col-6" align="center" style="width: 60%;">
                    <div class="container">
                        <img src="img/SWD Youtube2.png" style="max-width: 75px; height: auto;">
                    </div>
                    <div class="row " style="padding-top: 20px; padding-left: 5%; padding-right: 5%;">
                        <div class="col" align="center">
                            <h5>Offline</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">E recycle</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Liliput</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Mahidoot</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Prayatna</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Vatsalya</a></li>
                            </ul>
                        </div>

                        <div class="col" align="center">
                            <h5>GP2</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Udaan</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Matadhikar</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Sarthi</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Socip-tech</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Go green</a></li>
                            </ul>
                        </div>

                        <div class="col" align="center">
                            <h5>Flagship</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Aatmabodh</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Blood-D</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Mi atrey
                                        boltay</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Utkarsh</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Rejuvenating
                                        Rashtra</a></li>
                            </ul>
                        </div>

                        <div class="col" align="center">
                            <h5>Sub-Units</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="https://instagram.com/connecting_nss?utm_medium=copy_link" class="nav-link p-0 text-muted">NSS Camps</a></li>
                                <li class="nav-item mb-2"><a href="https://www.instagram.com/vit_official_divaclub/" class="nav-link p-0 text-muted">Diva</a></li>
                                <li class="nav-item mb-2"><a href="https://instagram.com/rescue_vitsocials?utm_medium=copy_link" class="nav-link p-0 text-muted">Rescue</a></li>
                                <li class="nav-item mb-2"><a href="https://instagram.com/team.eklavya.official?utm_medium=copy_link" class="nav-link p-0 text-muted">Eklavya</a></li>
                            </ul>
                        </div>
                    </div>
                    <hr style="height: 3px; background-color: white;">
                    <div class="d-flex" style="height: 20px;">
                        <a href="mailto:vitswd@vit.edu" target="_blank"
                            style="padding-left: 2%; padding-right: 2%; text-decoration: none;">
                            <img class="footer-icon" width="30%" height="auto"
                                src="https://image.flaticon.com/icons/png/512/888/888853.png" class="loaded">
                        </a>
                        <a href="https://www.instagram.com/vitsocials/" target="_blank"
                            style="padding-left: 2%; padding-right: 2%; text-decoration: none;">
                            <img src="https://image.flaticon.com/icons/png/512/1384/1384063.png" class="footer-icon"
                                width="30%" height="auto"
                                data-icon_src="https://www.flaticon.com/svg/vstatic/svg/1384/1384063.svg?token=exp=1630352769~hmac=a83516b21388b686df5b454e07ebfd8a">
                        </a>
                        <a href="https://www.facebook.com/vitsocials" target="_blank"
                            style="padding-left: 2%; padding-right: 2%; text-decoration: none;">
                            <img class="footer-icon" width="30%" height="auto"
                                src="https://image.flaticon.com/icons/png/512/733/733547.png" class="loaded">
                        </a>
                        <a href="https://www.linkedin.com/company/vit-social-welfare-development/" target="_blank"
                            style="padding-left: 2%; padding-right: 2%; text-decoration: none;">
                            <img class="footer-icon" width="30%" height="auto"
                                src="https://image.flaticon.com/icons/png/512/174/174857.png" class="loaded">
                        </a>
                        <a href="https://www.youtube.com/channel/UCJnaNm8Ns08rUIhsdFM2fhA" target="_blank"
                            style="padding-left: 2%; padding-right: 2%; text-decoration: none;">
                            <img class="footer-icon" width="30%" height="auto"
                                src="https://image.flaticon.com/icons/png/512/1384/1384060.png" class="loaded">
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        <footer class="footer2" style="padding-bottom: 0px">
            <div class="col-12" align="center">
                <div class="container">
                    <img src="img/SWD Youtube2.png" style="max-width: 75px; height: auto;">
                </div>
                <div class="row " style="padding-top: 20px;">
                    <div class="col" align="center">
                        <h5>Offline</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">E recycle</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Liliput</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Mahidoot</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Prayatna</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Vatsalya</a></li>
                        </ul>
                    </div>

                    <div class="col" align="center">
                        <h5>GP2</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Udaan</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Matadhikar</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Sarthi</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Socip-tech</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Go green</a></li>
                        </ul>
                    </div>

                    <div class="col" align="center">
                        <h5>Flagship</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Aatmabodh</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Blood-D</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Mi atrey boltay</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Utkarsh</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Rejuvenating
                                    Rashtra</a></li>
                        </ul>
                    </div>
                </div>
                <hr style="height: 3px; background-color: white;">
                <div class="d-flex" style="height: 20px;">
                    <a href="mailto:vitswd@vit.edu" target="_blank"
                        style="padding-left: 2%; padding-right: 2%; text-decoration: none;">
                        <img class="footer-icon" width="30%" height="auto"
                            src="https://image.flaticon.com/icons/png/512/888/888853.png" class="loaded">
                    </a>
                    <a href="https://www.instagram.com/vitsocials/" target="_blank"
                        style="padding-left: 2%; padding-right: 2%; text-decoration: none;">
                        <img src="https://image.flaticon.com/icons/png/512/1384/1384063.png" class="footer-icon"
                            width="30%" height="auto"
                            data-icon_src="https://www.flaticon.com/svg/vstatic/svg/1384/1384063.svg?token=exp=1630352769~hmac=a83516b21388b686df5b454e07ebfd8a">
                    </a>
                    <a href="https://www.facebook.com/vitsocials" target="_blank"
                        style="padding-left: 2%; padding-right: 2%; text-decoration: none;">
                        <img class="footer-icon" width="30%" height="auto"
                            src="https://image.flaticon.com/icons/png/512/733/733547.png" class="loaded">
                    </a>
                    <a href="https://www.linkedin.com/company/vit-social-welfare-development/" target="_blank"
                        style="padding-left: 2%; padding-right: 2%; text-decoration: none;">
                        <img class="footer-icon" width="30%" height="auto"
                            src="https://image.flaticon.com/icons/png/512/174/174857.png" class="loaded">
                    </a>
                    <a href="https://www.youtube.com/channel/UCJnaNm8Ns08rUIhsdFM2fhA" target="_blank"
                        style="padding-left: 2%; padding-right: 2%; text-decoration: none;">
                        <img class="footer-icon" width="30%" height="auto"
                            src="https://image.flaticon.com/icons/png/512/1384/1384060.png" class="loaded">
                    </a>
                </div>
            </div>
            <div class="col-12 py-5" align="center">
                <div class="container-fluid">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.442128793462!2d73.86601501484184!3d18.463621887442258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2ea950f616219%3A0x321bdae2cea9f064!2sVishwakarma%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1633011425624!5m2!1sen!2sin"
                        height="310px" width="100%" style="border:0; border-radius: 20px;" allowfullscreen=""
                        loading="lazy"></iframe>
                </div>
                <div class="py-5">
                    <p>© 2021 Social Welfare & Development committee, VIT Pune.</p>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
    <script src="../js/homepage.js"></script>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.scrollex.min.js"></script>
    <script src="js/jquery.scrolly.min.js"></script>
    <script src="js/browser.min.js"></script>
    <script src="js/breakpoints.min.js"></script>
    <script src="js/util.js"></script>
    <script src="js/main.js"></script>
    
   <script>
        let navSlide = () => {
            const burger = document.querySelector('.burger');
            const body = document.querySelector('.body');
            const nav = document.querySelector('.navs');
            const navlinks = document.querySelectorAll('.navs li')

            burger.addEventListener("click", () => {
                nav.classList.toggle("nav-active");
                body.classList.toggle("hidden");

                navlinks.forEach((links, index) => {
                    if (links.style.animation) {
                        links.style.animation = ``
                    }
                    else {
                        links.style.animation = `navLinkFade 0.5s ease forwards ${index / 3 + 0.8}s`
                    }
                });

                burger.classList.toggle("toggle");
            });


        };
        navSlide();
    </script>
</body>

</html>
