<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GP2</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

    <style type="text/css">
        .card {
            display: inline-block;
            position: relative;
            width: 100%;
            margin-bottom: 30px;
            border-radius: 6px;
            color: rgba(0, 0, 0, 0.87);
            background: #fff;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
        }

        .card .card-image {
            height: 60%;
            position: relative;
            overflow: hidden;
            margin-left: 15px;
            margin-right: 15px;
            margin-top: -30px;
            border-radius: 6px;
            box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
        }

        .card .card-image img {
            width: 100%;
            height: 100%;
            border-radius: 6px;
            pointer-events: none;
        }

        .card .card-image .card-caption {
            position: absolute;
            bottom: 15px;
            left: 15px;
            color: #fff;
            font-size: 1.3em;
            text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5);
        }

        .card img {
            width: 100%;
            height: auto;
        }

        .img-raised {
            box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
        }



        /* ============ Card Blog ============ */

        .card-blog {
            margin-top: 30px;
        }

        .card-blog .card-caption {
            margin-top: 5px;
        }

        .card-raised {
            box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
        }

        .card .author .avatar {
            width: 36px;
            height: 36px;
            overflow: hidden;
            border-radius: 50%;
            margin-right: 5px;
        }

        .card .author a {
            color: #333;
            text-decoration: none;
        }

        .card .author a .ripple-cont {
            display: none;
        }


        /* ============ Card Product ============ */

        .card-description p {
            color: #888;
        }

        .card-caption,
        .card-caption a {
            color: #333;
            text-decoration: none;
        }

        .card-caption {
            font-weight: 700;
        }

        section.about-meal a {
            display: inline-block;
            padding: 0.35em 1.2em;
            border: 0.1em solid #FFFFFF;
            margin: 0 0.3em 0.3em 0;
            border-radius: 0.12em;
            box-sizing: border-box;
            text-decoration: none;
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
            color: #FFFFFF;
            text-align: center;
            transition: all 0.2s;
        }

        section.about-meal a:hover {
            color: #000000;
            background-color: #FFFFFF;
        }

        @media all and (max-width:30em) {
            section.about-meal a {
                display: block;
                margin: 0.4em auto;
            }
        }

        .col-md-12 {
            padding-right: 0px;
            padding-left: 0px;
        }

        /*testimonials*/
        .wrapper {
            max-width: 1200px;
            margin: auto;
            padding: 0 20px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }

        .wrapper .box {
            background: #fff;
            width: calc(25% - 10px);
            padding: 25px;
            border-radius: 3px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.15);
        }

        .wrapper .box i.quote {
            font-size: 20px;
            color: #234d20;
        }

        .wrapper .box .content {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            padding-top: 10px;
        }

        .box .info .name {
            font-weight: 600;
            font-size: 17px;
        }

        .box .info .job {
            font-size: 16px;
            font-weight: 500;
            color: #234d20;
        }

        @media (max-width: 1045px) {
            .wrapper .box {
                width: calc(50% - 10px);
                margin: 10px 0;
            }
        }

        @media (max-width: 702px) {
            .wrapper .box {
                width: 100%;
            }
        }

        /*COUNTER*/
        .counter-up {
            background: url("images/count.JPG") no-repeat;
            min-height: 50vh;
            width: 100%;
            background-size: cover;
            background-attachment: fixed;
            padding: 0 50px;
            position: relative;
            display: flex;
            align-items: center;
        }

        .counter-up::before {
            position: absolute;
            content: "";
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: rgba(0, 0, 0, 0.8);
        }

        .counter-up .contentc {
            z-index: 1;
            position: relative;
            display: flex;
            width: 100%;
            height: 100%;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }

        .counter-up .contentc .boxc {
            border: 1px dashed rgba(255, 255, 255, 0.6);
            width: calc(25% - 30px);
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            flex-direction: column;
            padding: 20px;
        }

        .contentc .boxc .iconc {
            font-size: 48px;
            color: #e6e6e6;
        }

        .contentc .boxc .counter {
            font-size: 50px;
            font-weight: 500;
            color: #f2f2f2;
            font-family: sans-serif;
        }

        .contentc .boxc .textc {
            font-weight: 400;
            color: #ccc;
        }

        @media screen and (max-width: 1036px) {
            .counter-up {
                padding: 50px 50px 0 50px;
            }

            .counter-up .contentc .boxc {
                width: calc(33% - 30px);
                margin-bottom: 50px;
            }
        }

        @media screen and (max-width: 580px) {
            .counter-up .contentc .boxc {
                width: 100%;
            }
        }

        @media screen and (max-width: 500px) {
            .counter-up {
                padding: 30px 20px 0 20px;
            }
        }

        /*FORM*/
        .modal input[type="text"],
        .modal input[type="tel"] {
            align: left;
            border: 0;
            background: none;
            display: block;
            margin: 10px auto;
            text-align: left;
            border: 1px solid #000;
            padding: 6px 10px;
            width: 200px;
            outline: none;
            color: black;
            border-radius: 4px;
            transition: 0.25s;
        }

        .modal input[type="text"]:focus,
        .modal input[type="tel"]:focus {
            width: 280px;
            border-color: #000;
        }

        .modal input[type="submit"] {
            border: 0;
            background: none;
            display: block;
            margin: 10px auto;
            text-align: center;
            border: 1px solid #000;
            padding: 7px 40px;
            outline: none;
            border-radius: 4px;
            transition: 0.25s;
            cursor: pointer;
        }

        .modal input[type="submit"]:hover {
            background: #000;
            color: #fff;
            border-color: #fff;
        }

        #sel {
            border: 0;
            background: none;
            display: block;
            margin: 10px auto;
            text-align: left;
            border: 1px solid #000;
            padding: 7px 10px;
            width: 200px;
            outline: none;
            color: gray;
            border-radius: 4px;
            transition: 0.25s;
        }

        #sel:focus {
            width: 350px;
            border-color: #000;
        }

        .modal-backdrop {
            z-index: 1;
        }

        .fade {
            z-index: 1;
        }

        .show {
            z-index: 1;
        }

        /* NAV */
        .burger {
            display: none;
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

        .footer2 {
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

        @media screen and (max-width:760px) {
            body {
                overflow-x: hidden;
            }

            .events {
                font-size: 2vw;
            }

            .footer2 {
                display: inline;
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

            .nav-events:hover {
                font-size: 2.2rem;
                transition: 0.3s;
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

        /* Footer */
        .footer-icon:hover {
            width: 37%;
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

        }
    </style>
</head>

<body oncontextmenu="return false" class="body" style="overflow-y: hidden;">

<!--     <?php
    // include 'register.php';


$host       = "sql303.epizy.com";
$dbUsername = "epiz_29618754";
$dbPassword = "U6MBVDjNxUe";
$dbname     = "epiz_29618754_registration";

//Create conn

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

$department = "select dept_name from department where 1";
$d_list     = $conn->query($department);

$activity = "select a_name from activity where 1";
$a_list   = $conn->query($activity);

?> -->
    <div class="main-wrapper">
        <div class="site-content-wrapper">
            <div class="site-content" style="overflow-x:hidden;">

                <nav class="navbar navbar-light" style="background-color: #fdfce9">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="img/swd.png" alt="" width="20" height="auto"
                                class="d-inline-block align-text-top">
                            <span class="align-middle"><b id="brandname">Social Welfare & Development</b></span>
                        </a>
                        <div class="d-flex">
                            <ul class="nav navs">
                                <li class="nav-item">
                                    <a class="nav-link active nav-events" aria-current="page" href="#"><b>GP2
                                            Activities</b></a>
                                    <div class="footer2 events">
                                        <ul class="nav flex-column" align="center">
                                            <li class="nav-item mb-2 nav-events"><a href="#"
                                                    class="nav-link p-0 text-muted fs">Utkarsh</a></li>
                                            <li class="nav-item mb-2 nav-events"><a href="#"
                                                    class="nav-link p-0 text-muted fs">Udaan</a></li>
                                            <li class="nav-item mb-2 nav-events"><a href="#"
                                                    class="nav-link p-0 text-muted fs">Matadhikar</a></li>
                                            <li class="nav-item mb-2 nav-events"><a href="#"
                                                    class="nav-link p-0 text-muted fs">Sarthi</a></li>
                                            <li class="nav-item mb-2 nav-events"><a href="#"
                                                    class="nav-link p-0 text-muted fs">Go-Green</a></li>
                                            <li class="nav-item mb-2 nav-events"><a href="#"
                                                    class="nav-link p-0 text-muted fs">Socio-Tech</a></li>
                                            <li class="nav-item mb-2 nav-events"><a href="#"
                                                    class="nav-link p-0 text-muted fs">Aavishkar</a></li>
                                            <li class="nav-item mb-2 nav-events"><a href="#"
                                                    class="nav-link p-0 text-muted fs">Saksham</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active nav-events" aria-current="page"
                                        href="../flagship/flagship.html"><b>Flagship</b></a>
                                </li>
                               <!--  <li class="nav-item">
                                    <a class="nav-link active nav-events" aria-current="page" href="#"><b>Our
                                            Team</b></a>
                                </li> -->
                            </ul>
                            <div class="burger">
                                <div class="line1"></div>
                                <div class="line2"></div>
                                <div class="line3"></div>
                            </div>
                            <img src="img/logo-vit-1.png" alt="" width="30" height="auto"
                                class="d-inline-block align-text-top">
                        </div>
                    </div>
                </nav>
                <section class="about-meal">
                    <div class="containers">
                        <div class="about-meal-wrap flex">
                            <div class="flex-1">
                                <img src="./images/muskan.jpg" alt="">
                            </div>
                            <div class="flex-1">
                                <h2
                                    style="color: #234d20; font-size:3.3rem; margin-bottom:0.5rem; line-height:1.3; padding-bottom: 3px;">
                                    EXPLORE GP2</h2>
                                <p style="color: #666; line-height: 1.7; margin-bottom:2rem;">The General Proficiency-2
                                    (GP2) program offers VIT students activities that meet societal needs. Volunteers
                                    join us on this journey to create dynamic changes that will lead to healthier, more
                                    productive lives. By providing sustainable engineering solutions in times of crisis,
                                    these programs foster the development of children's personalities, educate and honor
                                    women and people with disabilities, as well as strengthen families and communities
                                    as a result.</p>
                                <!-- <button data-bs-toggle="modal" href="#MuskaanModalToggle">REGISTER HERE</button> -->
                                <!--  -->
                                <div class="modal fade" id="MuskaanModalToggle" aria-hidden="true"
                                    aria-labelledby="MuskaanModalToggleLabel" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content" style="z-index: 4;">
                                            <form action="" method="POST">
                                                <!-- autocomplete="off" -->
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="MuskaanModalToggleLabel">GP2
                                                        Registration Form</h5>
                                                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button> -->

                                                    <a class="btn-close" data-bs-dismiss="modal" aria-label="close"
                                                        href="#MuskaanModalToggle" role="button"></a>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="text" name="u_fname" placeholder="Full Name">
                                                    <input type="text" name="u_email" placeholder="Institute Email Id"
                                                        pattern="[a-zA-Z0-9._%+-]+@vit.edu$">
                                                    <input type="tel" name="u_contact" placeholder="Contact Number"
                                                        maxlength="10" pattern="^[0-9]{10}$" );>
                                                    <input type="tel" maxlength="8" name="u_prn" placeholder="PRN">
                                                    <!-- <?php 
                                        if($r_set = $conn->query("SELECT * from department"))
                                        {
                                            echo "<select name='dept_id' id='sel'>";
                                            echo "<option value='' selected disabled hidden>Department</option>";
                                            while ($row = $r_set->fetch_assoc()) 
                                            {
                                                echo "<option value=". $row['dept_id'] . ">" . $row['dept_name'] . "</option>";
                                            }
                                            echo "</select>";
                                        }else
                                        {
                                            echo $conn->error;
                                        } 
                                    ?> -->
                                                    <select name="u_year" placeholder="Year" id="sel">
                                                        <option value="" selected disabled hidden>Academic Year</option>
                                                        <option value="First">First</option>
                                                        <option value="Second">Second</option>
                                                        <option value="Third">Third</option>
                                                        <option value="Fourth">Fourth</option>
                                                    </select>
                                                    <select name="u_div" placeholder="Division" id="sel">
                                                        <option value="" selected disabled hidden>Division</option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="F">F</option>
                                                    </select>
                                                    <input type="tel" maxlength="3" name="u_roll"
                                                        placeholder="Roll Number">
                                                    <textarea name="u_addr" placeholder="Current Address" rows="2"
                                                        cols="20" id="sel"></textarea>
                                                   <!--  <?php 
                                        if($r_set = $conn->query("SELECT * from activity"))
                                        {
                                            echo "<select name='a_id' id='sel'>";
                                            echo "<option value='' selected disabled hidden>Activity</option>";
                                            while ($row = $r_set->fetch_assoc()) 
                                            {
                                                echo "<option value=".$row['a_id'].">".$row['a_name']."</option>";
                                            }
                                            echo "</select>";
                                        }else
                                        {
                                            echo $conn->error;
                                        } 
                                        $conn->close();
                                    ?> -->
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="submit" name="submit" value="SUBMIT">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                                <!-- <div class="modal fade" aria-hidden="true" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </section>
                <section class="top-products">
                    <div class="containers">
                        <h1 class="section-heading">CONNECT WITH ACTIVITIES</h1>
                        <div class="slider">
                            <button class="slider-btn prev-btn"><img src="./icons/pre.svg" alt=""></button>
                            <button class="slider-btn next-btn"><img src="./icons/next.svg" alt=""></button>
                            <div class="food-slider">
                                <div class="food-card magic-shadow-sm">
                                    <div class="product-image flex items-center justify-center">
                                        <img src="./images/Utkarsh.jpg" alt="">
                                    </div>
                                    <hr>
                                    <div>
                                        <h2 class="text-center">UTKARSH</h2>
                                        <p class="text-center">Utkarsh aims to inculcate the qualities and skills
                                            required to compete in the current world, in school going underprivileged
                                            children. Volunteers teach different school students, various attributes
                                            apart from their normal curriculum like personality development, science
                                            experiments, career paths, self-defense with an attempt to ignite their
                                            minds and to fabricate unlimited possibilities for their bright future.</p>
                                    </div>
                                </div>
                                <div class="food-card magic-shadow-sm">
                                    <div class="product-image flex items-center justify-center">
                                        <img src="./images/udaan.png" alt="">
                                    </div>
                                    <hr>
                                    <div>
                                        <h2 class="text-center">UDAAN</h2>
                                        <p class="text-center">Udaan aims to help women discover their inner talents,
                                            teach them to learn new skills, and make them aware regarding several
                                            opportunities in the professional world such as ‘Sports as a Career’, ‘Yoga
                                            and Body language’, ‘Fashion’, ‘Night Schools and Child labor’, ‘Indian
                                            government Awards and famous Awards in a particular domain’ and
                                            ‘Entrepreneurship’, ‘Personal Counselling’ and many more!</p>
                                    </div>
                                </div>
                                <div class="food-card magic-shadow-sm">
                                    <div class="product-image flex items-center justify-center">
                                        <img src="./images/Matadhikar.png" alt="">
                                    </div>
                                    <hr>
                                    <div>
                                        <h2 class="text-center">MATADHIKAR</h2>
                                        <p class="text-center">The casting of Votes is the basis of democracy.
                                            Matadhikar helps to enroll new voters in our country and thus strengthening
                                            our democracy. Volunteers collect information about non-voters, explaining
                                            the importance of voting, helping them to get enrolled and much more
                                            exciting stuff. Being part of this activity, you will play the role of a
                                            responsible citizen of the country by helping people get their right to
                                            vote. </p>
                                    </div>
                                </div>
                                <div class="food-card magic-shadow-sm">
                                    <div class="product-image flex items-center justify-center">
                                        <img src="./images/GoGreen.png" alt="">
                                    </div>
                                    <hr>
                                    <div>
                                        <h2 class="text-center">GO GREEN</h2>
                                        <p class="text-center">Live life cleaner by making earth greener! Go green was a
                                            fusion of social activities, which includes paper-bags, mask, birdfeeder,
                                            advertisement, book making and also tree plantation where volunteers work to
                                            complete a defined task. The aim of this activity is to achieve goals that
                                            would benefit to the society in one form or other. This activity will ensure
                                            that many aspects of social work are covered effectively.</p>
                                    </div>
                                </div>
                                <div class="food-card magic-shadow-sm">
                                    <div class="product-image flex items-center justify-center">
                                        <img src="./images/Saarthi.png" alt="">
                                    </div>
                                    <hr>
                                    <div>
                                        <h2 class="text-center">SARTHI</h2>
                                        <p class="text-center">Saarthi a word for helping and assisting, describes our
                                            mission to achieve via this activity. Volunteers upgrade the working
                                            professionals like Teachers, Shop-Keepers and Farmers so that they can
                                            compete and keep themselves technologically updated in their particular
                                            domains. These professionals get immense exposure to the technological
                                            advances which didn’t reach the non-concrete places.</p>
                                    </div>
                                </div>
                                <div class="food-card magic-shadow-sm">
                                    <div class="product-image flex items-center justify-center">
                                        <img src="./images/Socio-tech.png" alt="">
                                    </div>
                                    <hr>
                                    <div>
                                        <h2 class="text-center">SOCIO-TECH</h2>
                                        <p class="text-center">Socio-tech aim to bring out good project ideas from
                                            students that can help human welfare. It makes volunteers socially as well
                                            as technically driven. Registered groups then present their ideas that has
                                            to be socially relevant i.e. the ideas must be helpful to human welfare or
                                            society in one or the other way. Depending on various factors like social
                                            relevance, innovation, impact, etc. the project is evaluated.</p>
                                    </div>
                                 </div>
<!--                                <div class="food-card magic-shadow-sm">
                                    <div class="product-image flex items-center justify-center">
                                        <img src="./images/i3.jpg" alt="">
                                    </div>
                                    <hr>
                                    <div>
                                        <h2 class="text-center">AVISHKAR</h2>
                                        <p class="text-center">Avishkar brings together all of the underprivileged
                                            sectors in order to help them feel more connected to society and to change
                                            the way they think about themselves. With the hope to bring a smooth route
                                            of higher education and meaningful employment to life, volunteers will
                                            assist youngsters from urban slums and visually challenged people in moving
                                            forward in life.</p>
                                    </div>
                                </div> -->
                                <div class="food-card magic-shadow-sm">
                                    <div class="product-image flex items-center justify-center">
                                        <img src="./images/SAKSHAM.png" alt="">
                                    </div>
                                    <hr>
                                    <div>
                                        <h2 class="text-center">SAKSHAM</h2>
                                        <p class="text-center">Concerns of hazardous incidents are often disappointing
                                            for our well being. Saksham aims to guide people for the severe conditions
                                            and prevent the same. This activity emphasizes to acknowledge the society of
                                            various safety measures that everyone should be aware of. It aims to provide
                                            the platforms, appropriate information and efficient remedials solutions for
                                            the happenings.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="subscribe">
                    <div class="containers flex items-center">
                        <div>
                            <img src="./images/vatsalya.jpg" alt="">
                        </div>
                        <div>
                            <h2 class="text-pure"
                                style="font-size:3.3rem; margin-bottom:0.5rem; line-height:1.3; padding-bottom: 3px;">
                                BRIDGE TO PLAYLIST</h2>
                            <p class="text-pure" style="line-height: 1.7; margin-bottom:2rem;">
                                General Proficiency-2 (GP2) is a compulsory audit course where Volunteeres join us on
                                this jorney to bring about the kinds of changes that will help people live healthier and
                                more productive lives. Watch our playlist to know more about it.</p>
                            <button
                                onclick="location.href='https://www.youtube.com/playlist?list=PL2pq_tvfOYAgFUkH3XX8Uz-JhHfPdUSXj'; ">WATCH
                                NOW</button>

                        </div>
                    </div>
                </section>
                <!--        <section>
        <div class="containers">
        <h1 class="section-heading">OTHER ACTIVITIES</h1>
        <div class="cards-2 section-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-image">
                                <a href="#"> <img class="img img-raised" src="./images/i1.jpg"> </a>
                                <div class="ripple-cont"></div>
                            </div>
                            <div class="table">
                                
                                <h4 class="text-center" style="padding-top: 1rem;">MI ATRE BOLTOY</h4>
                                <p class="text-center"> Lorem ipsum dolor sit amet, consectetur adipis cingelit. Etiam lacinia elit et placerat finibus. Praesent justo metus, pharetra vel nibh sit amet, tincidunt posuere nulla. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-image">
                                <a href="#"> <img class="img img-raised" src="./images/i1.jpg"> </a>
                            </div>
                            <div class="table">                                    
                                <h4 class="text-center" style="padding-top: 1rem;">SMP</h4>
                                <p class="text-center"> Lorem ipsum dolor sit amet, consectetur adipis cingelit. Etiam lacinia elit et placerat finibus. Praesent justo metus, pharetra vel nibh sit amet, tincidunt posuere nulla. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-image">
                                <a href="#"> <img class="img img-raised" src="./images/i1.jpg"> </a>
                            </div>
                            <div class="table">
                                
                                 <h4 class="text-center" style="padding-top: 1rem;">TEACHER'S ASSISTANCE</h4>
                                <p class="text-center"> Lorem ipsum dolor sit amet, consectetur adipis cingelit. Etiam lacinia elit et placerat finibus. Praesent justo metus, pharetra vel nibh sit amet, tincidunt posuere nulla. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
                <section>
                    <div class="containers">
                        <h1 class="section-heading">WHAT OUR PARTICIPANTS SAY</h1>
                        <div class="wrapper">
                            <div class="box">
                                <i class="fas fa-quote-left quote"></i>
                                <p>It was a great experience for us to get our concepts and doubts cleared from our
                                    elder brothers and sisters. Their methods of teaching were very simple and
                                    innovative. I'm sure it will help us in many ways. I Thank the whole SWD team for
                                    arranging such an activity for us!</p>
                                <div class="content">
                                    <div class="info">
                                        <div class="name">- Gauri Ingle</div>
                                        <div class="job">Umang's Ex-Participant</div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <i class="fas fa-quote-left quote"></i>
                                <p>The primary mission of social work is to enhance human well-being and help meet basic
                                    and complex needs of all people. Socio-Tech led me to understand the efficacy of
                                    various intervention methods aimed at alleviating the conditions of people suffering
                                    from social deprivation and offering my services to the community.</p>
                                <div class="content">
                                    <div class="info">
                                        <div class="name">- Shriraj Deepak Sonawane</div>
                                        <div class="job">Socio-Tech's Ex-Participant</div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <i class="fas fa-quote-left quote"></i>
                                <p>I found the sessions very useful and I understood the use of the apps so well. In
                                    this covid situation where meeting people was very difficult, the lectures helped me
                                    alot to teach students without any problem. And if I had any doubt then I was to get
                                    it clear through the volunteer.</p>
                                <div class="content">
                                    <div class="info">
                                        <div class="name">- Jayshree Sarode (Teacher)</div>
                                        <div class="job">Saarthi's Ex-Participant</div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <i class="fas fa-quote-left quote"></i>
                                <p>I am Anushka Gade from Zilha Parishad Rajegaon studying in class 7th. I was very
                                    excited to take part in Utkarsh Activity. As in this corona situation I was bored
                                    sitting at home all day. I found Utkarsh activity very informative and enjoyed it
                                    throughout.</p>
                                <div class="content">
                                    <div class="info">
                                        <div class="name">- Anushka Gade</div>
                                        <div class="job">Utkarsh's Ex-Participant</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
                <section>
                    <h1 class="section-heading">ACTIVITIES ROUND-UP</h1>
                    <div class="counter-up">
                        <div class="contentc">
                            <div class="boxc">
                                <div class="iconc"><i class="fas fa-users"></i></div>
                                <div class="counter">100+</div>
                                <div class="textc">Coordinators</div>
                            </div>
                            <div class="boxc">
                                <div class="iconc"><i class="fas fa-history"></i></div>
                                <div class="counter">900+</div>
                                <div class="textc">Volunteers</div>
                            </div>
                            <div class="boxc">
                                <div class="iconc"><i class="fas fa-users"></i></div>
                                <div class="counter">330+</div>
                                <div class="textc">Participants</div>
                            </div>
                        </div>
                    </div>
                </section>
                <section style="background:#c9df8a;">
                    <div class="containers">
                        <h1 class="section-heading">OFFLINE RECAP</h1>
                        <div class="cards-1 section-gray">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="card card-blog">
                                            <div class="card-image">
                                                <img class="img" src="./images/vatsalya1.jpg">
                                                <div class="card-caption">VATSALYA</div>
                                                <div class="ripple-cont"></div>
                                            </div>
                                            <div class="table">
                                                <p class="text-center" style="padding-top: 1rem;">Volunteers visit old
                                                    age homes and try to fulfill the uncherished wants of our elderly.
                                                    We built confidence and bring happiness on their faces and get a
                                                    chance to learn key life lessons from them. </p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="table table-info">
                                                <h4 class="text-center" style="padding-top: 1rem;">BUS CLEANING</h4>
                                                <p class="text-center">Busses are a staple and integral mode of
                                                    transport for most Punekars. We thus undertook the notion 'Our
                                                    Buses, Our Responsibility' to maintain the hygiene of our transport
                                                    commodities. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="table">
                                                <h4 class="text-center" style="padding-top: 1rem;">MAHITIDOOT</h4>
                                                <p class="text-center">Taking a step towards digital india, we spread
                                                    awareness about the government initiative. Students who visited at
                                                    least 50 homes were awarded with the certificate from the government
                                                    of Maharashtra.</p>
                                            </div>
                                        </div>
                                        <div class="card card-blog">
                                            <div class="card-image">
                                                <img class="img" src="./images/swach1.jpg">
                                                <div class="card-caption">SWACHH PUNE</div>
                                                <div class="ripple-cont"></div>
                                            </div>
                                            <div class="table">
                                                <p class="text-center" style="padding-top: 1rem;">Under the government
                                                    Swaccha Bharat Mission, our volunteers make their hands dirty to
                                                    maintain and beautify our surroundings. The major places cleaned
                                                    were Sutar dara hills, taljai and parvati hills. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card card-blog">
                                            <div class="card-image">
                                                <img class="img" src="./images/liliput.jpg">
                                                <div class="card-caption">LILIPUT</div>
                                                <div class="ripple-cont"></div>
                                            </div>
                                            <div class="table">
                                                <p class="text-center" style="padding-top: 1rem;">Red light kids
                                                    shouldn't bear the guilt, rather they deserve to be nurtured. We
                                                    help these children by giving them an outlook on the nicer version
                                                    of this world with a motto 'Let us grow together'.</p>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="table table-danger">
                                                <h4 class="text-center" style="padding-top: 1rem;">NIGHT PATROLLING</h4>
                                                <p class="text-center">There are our protectors of lives and laws
                                                    working throughout the night; The Police. Volunteers helped them not
                                                    only in external ground activities like naka bandi, crowd control
                                                    but also in internal activities like letter typing and
                                                    administration work. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="table">
                                                <h4 class="text-center" style="padding-top: 1rem;">POLICE MITRA</h4>
                                                <p class="text-center">The volunteers assist the police teams in their
                                                    work management during the extensively busy and demanding ten days
                                                    of Ganeshotsav. </p>
                                            </div>
                                        </div>
                                        <div class="card card-blog">
                                            <div class="card-image">
                                                <img class="img" src="./images/pradya1.jpg">
                                                <div class="card-caption">PRAYATNA</div>
                                                <div class="ripple-cont"></div>
                                            </div>
                                            <div class="table">
                                                <p class="text-center" style="padding-top: 1rem;">We cannot really step
                                                    into someone's shoes but we can at least ease their experience. The
                                                    necessity of this activity is to produce a learned individual who
                                                    can distinguish between what is wrong and what is right. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cards-1 section-gray">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card card-blog">
                                            <div class="card-image">
                                                <img class="img" src="./images/aashadeep.jpg">
                                                <div class="card-caption">AASHADEEP</div>
                                                <div class="ripple-cont"></div>
                                            </div>
                                            <div class="table">
                                                <p class="text-center" style="padding-top: 1rem;">Volunteers create
                                                    learning opportunities for unprivileged people who are willing to
                                                    learn but didn't get the chance. Thus proving that there is no
                                                    binding of age to learn. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="table">
                                                <h4 class="text-center" style="padding-top: 1rem;">RAIN WATER HARVESTING
                                                </h4>
                                                <p class="text-center"> Together we can save each drop of water.
                                                    Rainwater harvesting is the activity of the direct collection of
                                                    rainwater. </p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="table">
                                                <h4 class="text-center" style="padding-top: 1rem;">MUSKAAN</h4>
                                                <p class="text-center">Volunteers develop the children's personalities
                                                    while organizing competitions and playing games with them. The give
                                                    and take of a splash of happiness while cherishing and celebrating
                                                    small little things is what makes the cut!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-blog">
                                            <div class="card-image">
                                                <img class="img" src="./images/ecycle.jpg">
                                                <div class="card-caption">E-Recycle</div>
                                                <div class="ripple-cont"></div>
                                            </div>
                                            <div class="table">
                                                <p class="text-center" style="padding-top: 1rem;"> Reduce Reuse Recycle
                                                    is the mantra of protecting our mother earth. Along with collecting
                                                    E-Waste, volunteers travel across the city to spread the word about
                                                    E-Waste and E-recycling. </p>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <div class="container-fluid"
                    style="background-color: #fdfce9; border-radius: 25px; text-decoration-color: white; padding-bottom: 0px;">
                    <footer class="footer1" style="padding-top: 50px; padding-bottom: 0px">

                        <div class="row ">
                            <div class="col-6" style="width: 40%;" align="center">
                                <div class="container-fluid">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.442128793462!2d73.86601501484184!3d18.463621887442258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2ea950f616219%3A0x321bdae2cea9f064!2sVishwakarma%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1633011425624!5m2!1sen!2sin"
                                        height="310px" width="100%" style="border:0; border-radius: 20px;"
                                        allowfullscreen="" loading="lazy"></iframe>
                                </div>
                                <div class="py-5">
                                    <p>© 2021 Social Welfare & Development committee, VIT Pune.</p>
                                </div>
                            </div>

                            <div class="col-6" align="center" style="width: 60%;">
                                <div class="container">
                                    <img src="../img/SWD Youtube2.png" style="max-width: 75px; height: auto;">
                                </div>
                                <div class="row " style="padding-top: 20px; padding-left: 5%; padding-right: 5%;">
                                    <div class="col" align="center">
                                        <h5>Offline</h5>
                                        <ul class="nav flex-column">
                                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">E
                                                    recycle</a></li>
                                            <li class="nav-item mb-2"><a href="#"
                                                    class="nav-link p-0 text-muted">Liliput</a></li>
                                            <li class="nav-item mb-2"><a href="#"
                                                    class="nav-link p-0 text-muted">Mahidoot</a></li>
                                            <li class="nav-item mb-2"><a href="#"
                                                    class="nav-link p-0 text-muted">Prayatna</a></li>
                                            <li class="nav-item mb-2"><a href="#"
                                                    class="nav-link p-0 text-muted">Vatsalya</a></li>
                                        </ul>
                                    </div>

                                    <div class="col" align="center">
                                        <h5>GP2</h5>
                                        <ul class="nav flex-column">
                                            <li class="nav-item mb-2"><a href="#"
                                                    class="nav-link p-0 text-muted">Udaan</a></li>
                                            <li class="nav-item mb-2"><a href="#"
                                                    class="nav-link p-0 text-muted">Matadhikar</a>
                                            </li>
                                            <li class="nav-item mb-2"><a href="#"
                                                    class="nav-link p-0 text-muted">Sarthi</a></li>
                                            <li class="nav-item mb-2"><a href="#"
                                                    class="nav-link p-0 text-muted">Socip-tech</a>
                                            </li>
                                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Go
                                                    green</a></li>
                                        </ul>
                                    </div>

                                    <div class="col" align="center">
                                        <h5>Flagship</h5>
                                        <ul class="nav flex-column">
                                            <li class="nav-item mb-2"><a href="#"
                                                    class="nav-link p-0 text-muted">Aatmabodh</a></li>
                                            <li class="nav-item mb-2"><a href="#"
                                                    class="nav-link p-0 text-muted">Blood-D</a></li>
                                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Mi
                                                    atrey
                                                    boltay</a></li>
                                            <li class="nav-item mb-2"><a href="#"
                                                    class="nav-link p-0 text-muted">Utkarsh</a></li>
                                            <li class="nav-item mb-2"><a href="#"
                                                    class="nav-link p-0 text-muted">Rejuvenating
                                                    Rashtra</a></li>
                                        </ul>
                                    </div>

                                    <div class="col" align="center">
                                        <h5>Sub-Units</h5>
                                        <ul class="nav flex-column">
                                            <li class="nav-item mb-2"><a
                                                    href="https://instagram.com/connecting_nss?utm_medium=copy_link"
                                                    class="nav-link p-0 text-muted">NSS Camps</a></li>
                                            <li class="nav-item mb-2"><a
                                                    href="https://www.instagram.com/vit_official_divaclub/"
                                                    class="nav-link p-0 text-muted">Diva</a></li>
                                            <li class="nav-item mb-2"><a
                                                    href="https://instagram.com/rescue_vitsocials?utm_medium=copy_link"
                                                    class="nav-link p-0 text-muted">Rescue</a></li>
                                            <li class="nav-item mb-2"><a
                                                    href="https://instagram.com/team.eklavya.official?utm_medium=copy_link"
                                                    class="nav-link p-0 text-muted">Eklavya</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <hr style="height: 3px; background-color: white;">
                                <div class="d-flex" style="height: 20px;">
                                    <a href="mailto:vitswd@vit.edu" target="_blank"
                                        style="padding-left: 2%; padding-right: 2%; text-decoration: none;">
                                        <img class="footer-icon" width="30%" height="auto"
                                            src="https://image.flaticon.com/icons/png/512/888/888853.png"
                                            class="loaded">
                                    </a>
                                    <a href="https://www.instagram.com/vitsocials/" target="_blank"
                                        style="padding-left: 2%; padding-right: 2%; text-decoration: none;">
                                        <img src="https://image.flaticon.com/icons/png/512/1384/1384063.png"
                                            class="footer-icon" width="30%" height="auto"
                                            data-icon_src="https://www.flaticon.com/svg/vstatic/svg/1384/1384063.svg?token=exp=1630352769~hmac=a83516b21388b686df5b454e07ebfd8a">
                                    </a>
                                    <a href="https://www.facebook.com/vitsocials" target="_blank"
                                        style="padding-left: 2%; padding-right: 2%; text-decoration: none;">
                                        <img class="footer-icon" width="30%" height="auto"
                                            src="https://image.flaticon.com/icons/png/512/733/733547.png"
                                            class="loaded">
                                    </a>
                                    <a href="https://www.linkedin.com/company/vit-social-welfare-development/"
                                        target="_blank"
                                        style="padding-left: 2%; padding-right: 2%; text-decoration: none;">
                                        <img class="footer-icon" width="30%" height="auto"
                                            src="https://image.flaticon.com/icons/png/512/174/174857.png"
                                            class="loaded">
                                    </a>
                                    <a href="https://www.youtube.com/channel/UCJnaNm8Ns08rUIhsdFM2fhA" target="_blank"
                                        style="padding-left: 2%; padding-right: 2%; text-decoration: none;">
                                        <img class="footer-icon" width="30%" height="auto"
                                            src="https://image.flaticon.com/icons/png/512/1384/1384060.png"
                                            class="loaded">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <footer class="footer2" style="padding-bottom: 0px">
                        <div class="col-12" align="center">
                            <div class="container">
                                <img src="../img/SWD Youtube2.png" style="max-width: 75px; height: auto;">
                            </div>
                            <div class="row " style="padding-top: 20px;">
                                <div class="col" align="center">
                                    <h5>Offline</h5>
                                    <ul class="nav flex-column">
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">E
                                                recycle</a></li>
                                        <li class="nav-item mb-2"><a href="#"
                                                class="nav-link p-0 text-muted">Liliput</a></li>
                                        <li class="nav-item mb-2"><a href="#"
                                                class="nav-link p-0 text-muted">Mahidoot</a></li>
                                        <li class="nav-item mb-2"><a href="#"
                                                class="nav-link p-0 text-muted">Prayatna</a></li>
                                        <li class="nav-item mb-2"><a href="#"
                                                class="nav-link p-0 text-muted">Vatsalya</a></li>
                                    </ul>
                                </div>

                                <div class="col" align="center">
                                    <h5>GP2</h5>
                                    <ul class="nav flex-column">
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Udaan</a>
                                        </li>
                                        <li class="nav-item mb-2"><a href="#"
                                                class="nav-link p-0 text-muted">Matadhikar</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Sarthi</a>
                                        </li>
                                        <li class="nav-item mb-2"><a href="#"
                                                class="nav-link p-0 text-muted">Socip-tech</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Go
                                                green</a></li>
                                    </ul>
                                </div>

                                <div class="col" align="center">
                                    <h5>Flagship</h5>
                                    <ul class="nav flex-column">
                                        <li class="nav-item mb-2"><a href="#"
                                                class="nav-link p-0 text-muted">Aatmabodh</a></li>
                                        <li class="nav-item mb-2"><a href="#"
                                                class="nav-link p-0 text-muted">Blood-D</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Mi atrey
                                                boltay</a>
                                        </li>
                                        <li class="nav-item mb-2"><a href="#"
                                                class="nav-link p-0 text-muted">Utkarsh</a></li>
                                        <li class="nav-item mb-2"><a href="#"
                                                class="nav-link p-0 text-muted">Rejuvenating
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
                                    <img src="https://image.flaticon.com/icons/png/512/1384/1384063.png"
                                        class="footer-icon" width="30%" height="auto"
                                        data-icon_src="https://www.flaticon.com/svg/vstatic/svg/1384/1384063.svg?token=exp=1630352769~hmac=a83516b21388b686df5b454e07ebfd8a">
                                </a>
                                <a href="https://www.facebook.com/vitsocials" target="_blank"
                                    style="padding-left: 2%; padding-right: 2%; text-decoration: none;">
                                    <img class="footer-icon" width="30%" height="auto"
                                        src="https://image.flaticon.com/icons/png/512/733/733547.png" class="loaded">
                                </a>
                                <a href="https://www.linkedin.com/company/vit-social-welfare-development/"
                                    target="_blank" style="padding-left: 2%; padding-right: 2%; text-decoration: none;">
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
                                    height="310px" width="100%" style="border:0; border-radius: 20px;"
                                    allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <div class="py-5">
                                <p>© 2021 Social Welfare & Development committee, VIT Pune.</p>
                            </div>
                        </div>
                    </footer>
                </div>

            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/app.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
    <script type="text/javascript">
        function mousehandler(e) {
            var myevent = (isNS) ? e : event;
            var eventbutton = (isNS) ? myevent.which : myevent.button;
            if ((eventbutton == 2) || (eventbutton == 3)) return false;
        }
        document.oncontextmenu = mischandler;
        document.onmousedown = mousehandler;
        document.onmouseup = mousehandler;

        function disableCtrlKeyCombination(e) {
            var forbiddenKeys = new Array("a", "s", "c", "x", "u");
            var key;
            var isCtrl;
            if (window.event) {
                key = window.event.keyCode;
                //IE
                if (window.event.ctrlKey)
                    isCtrl = true;
                else
                    isCtrl = false;
            } else {
                key = e.which;
                //firefox
                if (e.ctrlKey)
                    isCtrl = true;
                else
                    isCtrl = false;
            }
            if (isCtrl) {
                for (i = 0; i < forbiddenKeys.length; i++) {
                    //case-insensitive comparation
                    if (forbiddenKeys[i].toLowerCase() == String.fromCharCode(key).toLowerCase()) {
                        return false;
                    }
                }
            }
            return true;
        }
        window.setTimeout(function () {
            $(".alert").fadeTo(500, 0).slideUp(500, function () {
                $(this).remove();
            });
        }, 4000);
    </script>

    <script>
        let navResize = () => {
            let navbrand = document.getElementById("brandname")
            if (window.innerWidth < 760) {
                navbrand.innerText = "SW&D"
            } else {
                navbrand.innerText = "Social Welfare & Development"
            }
        };
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
        navResize();
    </script>

<!--     <?php
include 'register.php';

?> -->

</body>

</html>