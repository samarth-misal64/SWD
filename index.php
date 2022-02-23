<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/SWD Youtube2.png" type="image/x-icon">
    <!-- External CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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

        .fs {
            font-size: 1.2rem;
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

        /*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
        #footer {
            background: #234d20;
            padding: 0 0 25px 0;
            color: #eee;
            font-size: 14px;
        }

        #footer .footer-top {
            background: #040919;
            padding: 60px 0 30px 0;
        }

        #footer .footer-top .footer-info {
            margin-bottom: 30px;
        }

        #footer .footer-top .footer-info h3 {
            font-size: 26px;
            margin: 0 0 20px 0;
            padding: 2px 0 2px 0;
            line-height: 1;
            font-family: "Raleway", sans-serif;
            font-weight: 700;
            color: #fff;
        }

        #footer .footer-top .footer-info img {
            height: 40px;
            margin-bottom: 10px;
        }

        #footer .footer-top .footer-info p {
            font-size: 14px;
            line-height: 24px;
            margin-bottom: 0;
            font-family: "Raleway", sans-serif;
            color: #fff;
        }

        #footer .footer-top .social-links a {
            display: inline-block;
            background: #222636;
            color: #eee;
            line-height: 1;
            margin-right: 4px;
            border-radius: 50%;
            width: 36px;
            height: 36px;
            transition: 0.3s;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        #footer .footer-top .social-links a i {
            line-height: 0;
            font-size: 16px;
        }

        #footer .footer-top .social-links a:hover {
            background: #c9df8a;
            color: #fff;
        }

        #footer .footer-top h4 {
            font-size: 14px;
            font-weight: bold;
            color: #fff;
            text-transform: uppercase;
            position: relative;
            padding-bottom: 12px;
            border-bottom: 2px solid #c9df8a;
        }

        #footer .footer-top .footer-links {
            margin-bottom: 30px;
        }

        #footer .footer-top .footer-links ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        #footer .footer-top .footer-links ul i {
            padding-right: 5px;
            color: #c9df8a;
            font-size: 18px;
        }

        #footer .footer-top .footer-links ul li {
            border-bottom: 1px solid #262c44;
            padding: 10px 0;
        }

        #footer .footer-top .footer-links ul li:first-child {
            padding-top: 0;
        }

        #footer .footer-top .footer-links ul a {
            color: #eee;
        }

        #footer .footer-top .footer-links ul a:hover {
            color: #c9df8a;
        }

        #footer .footer-top .footer-contact {
            margin-bottom: 30px;
        }

        #footer .footer-top .footer-contact p {
            line-height: 26px;
        }

        #footer .footer-top .footer-newsletter {
            margin-bottom: 30px;
        }

        #footer .footer-top .footer-newsletter input[type=email] {
            border: 0;
            padding: 6px 8px;
            width: 65%;
        }

        #footer .footer-top .footer-newsletter input[type=submit] {
            background: #c9df8a;
            border: 0;
            width: 35%;
            padding: 6px 0;
            text-align: center;
            color: #fff;
            transition: 0.3s;
            cursor: pointer;
        }

        #footer .footer-top .footer-newsletter input[type=submit]:hover {
            background: #c9df8a;
        }

        #footer .copyright {
            background: #234d20;
            text-align: center;
            padding-top: 30px;
        }

        #footer .credits {
            text-align: center;
            font-size: 13px;
            color: #ddd;
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
    <section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
        <div class="content">
            <h2>WHO ARE WE</h2>
            <p class="major text">We at the Social Welfare & Development Committee, readily work with a motto to
                empower
                society and transform lives to bring out the positive changes in the society. We aim to be a helping
                hand towards everyone in society by organizing various events and activities throughout the year. Main
                strength of our committee lies in equality and unity amongst every member. We are always ready to do
                someone a good turn to be good for society with no expectations in return.</p>
            <div class="container-fluid my-4">
                <a class="button" href="team/index.html" role="button"><span style="text-transform: uppercase; font-weight: bold;">Meet the Team</span></a>
            </div>
        </div>
        <div class="image">
            <img src="img/who.png" alt="" />
        </div>
    </section>

    <section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="first" style="background-color: #234d20;">
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
    <section class="spotlight style1 orient-left content-align-left image-position-center onscroll-image-fade-in" style="background-color: #234d20;">
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
    <section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="first">
        <div class="content">
            <h2>EXPLORE GP2</h2>
            <p>At SW&D, we promise to create a safe-space where people, who share our objective, can express themselves
                freely and work together as a team. We promise to work with vigour and diligence to ameliorate society
                through a myriad of activities. We also vow to utilize our platform to inculcate social values and
                helpful nature amongst people and move one step closer to achieving our ultimate goal-sustainable
                development.</p>
            <div class="container-fluid my-4">
                <a class="button" href="GP2/index.php" role="button"><span style="text-transform: uppercase; font-weight: bold;">Click to Register</span></a>
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
                <a class="button" href="flagship/flagship.html" role="button"><span style="text-transform: uppercase; font-weight: bold;">Know More</span></a>
            </div>
        </div>

        <div class="image">
            <figure><img src="img/slider.jpg" alt="" /></figure>
        </div>
    </section>
    <br>
    <br>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <img src="img/swdlogo3.png" alt="Logo">
                        <p>Social Welfare and Development Committee with the motto of "Empowering Society, Transforming Lives" has
                            been helping society for several years and continues to do so in any circumstance.
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#" style="text-decoration: none;">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#" style="text-decoration: none;">Our Team</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#" style="text-decoration: none;">Event Schedule</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#" style="text-decoration: none;">Flagship Events</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#" style="text-decoration: none;">GP2 Activities</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Flagship</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#" style="text-decoration: none;">AATMABODH</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#" style="text-decoration: none;">REJUVENATING RASHTRA</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#" style="text-decoration: none;">UTKARSH</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#" style="text-decoration: none;">MI ATRE BOLTOY</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#" style="text-decoration: none;">BLOOD-D</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            <b style="color:white">Social Welfare & Development</b><br>
                            Vishwakarma Institute of Technology<br>
                            666, Upper Indiranagar, Bibwewadi, <br>
                            Pune - 411 037 <br>
                            <strong style="color:white">Phone:</strong> +91 73852 23242 / +91 93253 50665 <br>
                            <strong style="color:white">Email:</strong> vitswd@vit.edu<br>
                        </p>

                        <div class="social-links">
                            <a href="https://twitter.com/vit_socials" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="https://www.facebook.com/vitsocials" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/vitsocials/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCJnaNm8Ns08rUIhsdFM2fhA" target="_blank" class="google-plus"><i class="bi bi-youtube"></i></a>
                            <a href="https://www.linkedin.com/company/vit-social-welfare-development/" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                &copy; 2021-22 Social Welfare & Development Committee, VIT Pune.
            </div>
        </div>
    </footer><!-- End  Footer -->


    <!-- External JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
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
                    } else {
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