<!-- nonvit -->
<?php
error_reporting(0);
require_once "../php/config.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nonvitsubmit'])) {
$inputName = $_POST['inputName'];
$inputEmail4 = $_POST['inputEmail4'];
$inputPhone = $_POST['inputPhone'];
$inputState = $_POST['inputState'];
$inputCity = $_POST['inputCity'];
$inputstud = $_POST['inputstud'];
$inputOname = $_POST['inputOname'];
$inputText = $_POST['inputText'];
$inputRef = $_POST['inputRef'];

if (!empty($inputName) || !empty($inputEmail4) || !empty($inputPhone) || !empty($inputState) || !empty($inputCity) || !empty($inputstud) || !empty($inputOname) || !empty($inputText) || !empty($inputRef)){

    if (mysqli_connect_error()){

        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());

    }elseif (strlen($inputPhone) < 10) {
        $phone_error = "Phone number requires 10 digits";
    }elseif (strlen($inputPhone) > 10) {
        $phone_error = "Phone number requires 10 digits";
    }else{

        $SELECT = "SELECT inputEmail4 FROM `user` WHERE inputEmail4 = ? LIMIT 1";
        $INSERT = "INSERT Into `user` (inputName, inputEmail4, inputPhone, inputState, inputCity, inputstud, inputOname, inputText, inputRef) values(?, ?, ?, ?, ?, ?, ?, ?, ?)";

        //Prepare statement

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $inputEmail4);
        $stmt->execute();
        $stmt->bind_result($inputEmail4);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum == 0){

            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssssissi" ,$inputName, $inputEmail4, $inputPhone, $inputState, $inputCity, $inputstud, $inputOname, $inputText, $inputRef);
            $stmt->execute();
            echo "New record inserted successfully";

        }else{

            echo "Someone already registered using this email";
        }
        $stmt->close();
        $conn->close();
    }
} else{
    echo "All fields are required";
    die();
}

// include('../html/aatmabodh_reg.php');
}
?>

<!-- participation -->
<?php
error_reporting(0);
require_once "../php/config.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['participantsubmit'])) {
$inputNameP = $_POST['inputNameP'];
$inputPhoneP = $_POST['inputPhoneP'];
$inputAddressP = $_POST['inputAddressP'];
$inputStateP = $_POST['inputStateP'];
$inputCityP = $_POST['inputCityP'];
$inputVNameP = $_POST['inputVNameP'];

if (!empty($inputVNameP) || !empty($inputPhoneP) || !empty($inputAddressP) || !empty($inputStateP) || !empty($inputCityP) || !empty($inputVNameP)){

    if (mysqli_connect_error()){

        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());

    }elseif (strlen($inputPhoneP) < 10) {
        $phone_error = "Phone number requires 10 digits";
    }elseif (strlen($inputPhoneP) > 10) {
        $phone_error = "Phone number requires 10 digits";
    }else{

        $SELECT = "SELECT inputPhoneP FROM `participation` WHERE inputPhoneP = ? LIMIT 1";
        $INSERT = "INSERT Into `participation` (inputNameP, inputPhoneP, inputAddressP, inputStateP, inputCityP, inputVNameP) values(?, ?, ?, ?, ?, ?)";

        //Prepare statement

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $inputPhoneP);
        $stmt->execute();
        $stmt->bind_result($inputPhoneP);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum == 0){

            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssssss" ,$inputNameP, $inputPhoneP, $inputAddressP, $inputStateP, $inputCityP, $inputVNameP);
            $stmt->execute();
            echo "New record inserted successfully";

        }else{

            echo "Someone already registered using this email";

        }

        $stmt->close();
        $conn->close();

    }

}else{
    echo "All fields are required";
    die();
}
}
?>
<!-- vit -->
<?php
error_reporting(0);
require_once "../php/config.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['vitsubmit'])) {
$inputName = $_POST['inputName'];
$inputEmail4 = $_POST['inputEmail4'];
$inputPhone = $_POST['inputPhone'];
$inputState = $_POST['inputState'];
$inputCity = $_POST['inputCity'];
$inputYear = $_POST['inputYear'];
$inputBrach = $_POST['inputBrach'];
$inputdivision = $_POST['inputdivision'];
$inputgrno = $_POST['inputgrno'];
$inputrollno = $_POST['inputrollno'];
if (!empty($inputName) && !empty($inputEmail4) && !empty($inputPhone) && !empty($inputState) && !empty($inputCity)&& !empty($inputYear) && !empty($inputBrach) && !empty($inputdivision) && !empty($inputgrno) && !empty($inputrollno)){

    if (mysqli_connect_error()){

        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());

    }elseif (strlen($inputPhone) < 10) {
        $phone_error = "Phone number requires 10 digits";
    }elseif (strlen($inputPhone) > 10) {
        $phone_error = "Phone number requires 10 digits";
    }else{
        $SELECT = "SELECT inputEmail4 FROM `vituser` WHERE inputEmail4 = ? LIMIT 1";
        $INSERT = "INSERT INTO `vituser` (inputName, inputEmail4, inputPhone, inputState, inputCity, inputYear, inputBrach, inputdivision, inputgrno, inputrollno) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        //Prepare statement

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $inputEmail4);
        $stmt->execute();
        $stmt->bind_result($inputEmail4);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum == 0){

            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssssssssss" ,$inputName, $inputEmail4, $inputPhone, $inputState, $inputCity, $inputYear, $inputBrach, $inputdivision, $inputgrno, $inputrollno);
            $stmt->execute();
            echo "New record inserted successfully";

        }else{

            echo "Someone already registered using this email";

        }

        $stmt->close();
        $conn->close();

    }

}
else{
    echo "All fields are required";
    die();
}
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   <meta name="HandheldFriendly" content="true">
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

    <!-- <link rel="stylesheet" type="text/css" href="css/responsive.css"> -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" ></script>



    <title>SWD</title>
    <link rel="stylesheet" type="text/css" href="../css/aatmabodh_reg.css">
            <link rel="stylesheet" href="../css/main.css" />
        <noscript><link rel="stylesheet" href="../css/noscript.css" /></noscript>
    <!-- <link rel=”stylesheet” href=”bootstrap.css”> -->
  </head> 
  <style type="text/css">

.counter-up{
  background: url("../img/counter.png") no-repeat;
  min-height: 50vh;
  background-size: cover;
  background-attachment: fixed;
  padding: 0 50px;
  position: relative;
  display: flex;
  align-items: center;
}
.counter-up::before{
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: rgba(0,0,0,0.8);
}
.counter-up .contentc{
  z-index: 1;
  position: relative;
  display: flex;
  width: 100%;
  height: 100%;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}
.counter-up .contentc .boxc{
  border: 1px dashed rgba(255,255,255,0.6);
  width: calc(25% - 30px);
  border-radius: 5px;
  display: flex;
  align-items: center;
  justify-content: space-evenly;
  flex-direction: column;
  padding: 20px;
}
.contentc .boxc .iconc{
  font-size: 48px;
  color: #e6e6e6;
}
.contentc .boxc .counter{
  font-size: 50px;
  font-weight: 500;
  color: #f2f2f2;
  font-family: sans-serif;
}
.contentc .boxc .textc{
  font-weight: 400;
  color: #ccc;
}
@media screen and (max-width: 1036px) {
  .counter-up{
    padding: 50px 50px 0 50px;
  }
  .counter-up .contentc .boxc{
    width: calc(50% - 30px);
    margin-bottom: 50px;
  }
}
@media screen and (max-width: 580px) {
  .counter-up .contentc .boxc{
    width: 100%;
  }
}
@media screen and (max-width: 500px) {
  .counter-up{
    padding: 30px 20px 0 20px;
  }
}



    
    .testimonials-clean {
      color:#313437;
      background-color:#eef4f7;
      margin-top: -45px;
    }
    
    .testimonials-clean p {
      color:#7d8285;
    }
    
    .testimonials-clean h2 {
      font-weight:bold;
      margin-bottom:40px;
      padding-top:40px;
      color:inherit;
    }
    
    @media (max-width:767px) {
      .testimonials-clean h2 {
        margin-bottom:25px;
        padding-top:25px;
        font-size:24px;
      }
    }
    
    .testimonials-clean .intro {
      font-size:16px;
      max-width:500px;
      margin:0 auto;
    }
    
    .testimonials-clean .intro p {
      margin-bottom:0;
    }
    
    .testimonials-clean .people {
      padding:50px 0 20px;
    }
    
    .testimonials-clean .item {
      margin-bottom:32px;
    }
    
    @media (min-width:768px) {
      .testimonials-clean .item {
        height:220px;
      }
    }
    
    .testimonials-clean .item .box {
      padding:30px;
      background-color:#fff;
      position:relative;
    }
    
    .testimonials-clean .item .box:after {
      content:'';
      position:absolute;
      left:30px;
      bottom:-24px;
      width:0;
      height:0;
      border:15px solid transparent;
      border-width:12px 15px;
      border-top-color:#fff;
    }
    
    .testimonials-clean .item .author {
      margin-top:28px;
      padding-left:25px;
    }
    
    .testimonials-clean .item .name {
      font-weight:bold;
      margin-bottom:2px;
      color:inherit;
    }
    
    .testimonials-clean .item .titlet {
      font-size:13px;
      color:#9da9ae;
    }
    
    .testimonials-clean .item .description {
      font-size:15px;
      margin-bottom:0;
    }
    
    .testimonials-clean .item img {
      max-width:40px;
      float:left;
      margin-right:12px;
      margin-top:-5px;
    }
    
    
  </style>


<body>
          <div class="container-fluid">
        <div class="row" style="padding: 2%;">
            <div class="col-3" style="line-height: 1.2vw;">
                <a class="text-end" href="../homepage.html" style="font-size: 2vw; text-decoration: none;">
                        <span style="margin-top: 100%; "><b style="color: #234d20;">SW&D</b></span><br>
                  
                    
                </a>
            </div>
            <div class="col-7" style="line-height: 1.2vw;">

            </div>
            <div class="col-2 justify-content-center">
                <img src="../img/logo-vit-1.png" align="center" class="rounded mx-auto d-block" alt="..." style="width: 100%;
                max-width: 40px;
            height: auto;">
            </div>
        </div>
    </div>
  <!-- Image -->
                      <div class="card mb-3">
                           <img class="card-img-top" src="../img/slider.jpg" alt="Card image cap">
                              <div class="card-body" style="width: 90%; height: 90%; border: solid white; position:absolute; left: 5%; top: 5%; bottom: 5%; right: 5%;">
                              </div>
                      </div>



            
             

                   
                      <div class="container">
                          <div class="row">
                                                
                               <!-- text and image -->
                               <div class="col-md-6">
                                    <div class="g-col-6">
                                      <div class="row featurette d-flex justify-content-center align-items-center">
                                        <div class="card-body">
                                          <div class="title">
                                              <h2 class="text-center"><b style="color: #d4322b;">AATMABODH</b></h2>
                                          </div>
                                          <p>Aatmabodh, an initiative by the social welfare and development committee to spread the knowledge of digital literacy among underprivileged, especially senior citizens and women. Started right from teaching people by physically visiting their house, moving on to digitally teaching in computer labs, and further with the amidst of pandemic, the event continued with the same excitement and enthusiasm in online mode with teaching initiative right from their home place.</p>
<!--                                           <div class="title">
                                             <h1 class="card-title text-uppercase" style=" color: #d4322b; text-align: center; "><b>AATMABHOD</b></h1>
                                          </div> -->

                                            
<!--                     
                                              <p class="card-text text-center" style="font-size: small;" >
                    
                                              <span><b>means</b></span>
                                              <span class="text-uppercase" style="color: #d4322b; "><b>Self-realization</b></span> 
                     
                                              </p>
                  
                                             <p class="card-text text-center " style="font-size: small;"><b>become <span class="text-uppercase" style="color: #d4322b; font-size: small;">a change-maker</span> by volunteering and help the participants to realize their inner strength.</b></p>  -->

                                      </div>
                                        </div>
                                          <!--                <p class="card-title" style="font-size: 20vw; ">
                                           <div class="text-end" style="left: 30px; top: 50px; font-size: 50px; padding-bottom: 0px; margin-bottom: 0px;">
                                           <span style="color: #d4322b; padding-right: 10%;">AATMABHOD   
                                             </div>
                                                 </p> -->
                  
                                    </div>
                                    <div class="image">
                                          <img src="../img/i1.jpg" class="img-fluid" alt="image">
                                    </div>
                               </div>


                              <!-- Volunteer Application Form -->

                             
                                <div class="col-md-6 ">  
                                      <div class="flip-card">
                                            <div class="flip-card-inner" id="form1">
                                                <div class="flip-card-front">

                                                  <form method="POST" myForm="text-center" id="form" class="row g-3">
                                                        <h3>Volunteer Application Form for <span style="color: #d4322b;">Non-VITian Students</span>.</h3>
                                                        <h4>Spend Your Free Time Giving Back <br>The <span style="color: #d4322b;">Perfect</span> Volunteering Opportunity</h4>
              
                                                        <div class="text-center">
                                                              <h5 style="text-align: center;"> VIT student?</h5>
                                                              <button type="button" class="button small" onclick="flip()">CLICK HERE</button>
                                                        </div>


                                                        <div class="col-12">
                                                            <label for="inputName" class="form-label">Full Name</label>
                                                            <input type="text" class="form-control" name="inputName" placeholder="Shraddha Navnath Kanase" required>
                                                        </div> 

                                                        <div class="col-md-6">
                                                              <label for="inputEmail4" class="form-label">Email</label>
                                                              <input type="email" class="form-control" name="inputEmail4" placeholder="shraddha.kanase19@vit.edu" required>
                                                        </div>

                                                        <div class="col-md-6">
                                                              <label for="inputPhone" class="form-label">WhatsApp Number</label>
                                                              <input type="tel" class="form-control" name="inputPhone" placeholder="1234567890" required>
                                                              <?php if(isset($phone_error)) { ?>
                                                                <p><?php echo $phone_error ?></p>
                                                              <?php } ?>
                                                        </div>

                                                         <div class="col-6">
                                                              <label for="inputState" class="form-label">State</label>
                                                              <input type="text" class="form-control" name="inputState" placeholder="Maharashtra" required>
                                                         </div>

                                                         <div class="col-6">
                                                              <label for="inputCity" class="form-label">City</label>
                                                              <input type="text" class="form-control" name="inputCity" placeholder="Pune" required>
                                                         </div>

                                                         <div class="col-md-6">
                                                               <label for="inputYear" class="form-label">Are you a student?</label>
               

                                                               <select name="inputstud" class="form-select">
                                                                       <option selected>Yes</option>
                                                                       <option value="1">Yes</option>
                                                                       <option value="2">No</option>
                
                                                               </select>
                                                         </div>

                                                         <div class="col-md-6">
                                                                <label for="inputOname" class="form-label">Name of your Organization</label>
                                                                <input type="text" class="form-control" name="inputOname" placeholder="ABC....">
                                                         </div> 


                                                         <div class="col-12">
                                                               <label for="inputText" class="form-label">Is there anything else you would like us to know?</label>
                                                                <input type="text" class="form-control" name="inputText">
                                                         </div> 

                                                         <div class="col-md-12">
                                                                <label for="inputReferral" class="form-label">How did you hear about Aatmabhod?</label>

                                                                <select name="inputRef" class="form-select">
                                                                      <option selected>Whatsapp</option>
                                                                      <option value="1">Email</option>
                                                                      <option value="2">WhatsApp</option>
                                                                      <option value="3">Referral</option>
                                                                      <option value="4">Facebook</option>
                                                                      <option value="5">Instagram</option>
                                                                      <option value="6">YouTube</option>
                                                                      <option value="7">Linkedln</option>
                                                                      <option value="8">Other</option>
                
                                                                </select>
                                                         </div>



           
                                                          <div class="text-center">
                                                                <button type="submit" name="nonvitsubmit" class="button">SUBMIT</button>
                                                          </div>
                                                  </form>

                                                </div>
                                            
                                            <div class="flip-card-back">

                                                    <form method="post" myForm="text-center" id="form" class="row g-3">
                                                        <h3>Volunteer Application Form for <span style="color: #d4322b;">VITian Students</span>.</h3>
                                                        <h4>Spend Your Free Time Giving Back <br>The <span style="color: #d4322b;">Perfect</span> Volunteering Opportunity</h4>

                                                        <div class="text-center">
                                                            <h5 style="text-align: center;"> Non-VITian student?</h5>
                                                            <button type="button" class="button small" onclick="flip1()">CLICK HERE</button> 
                                                        </div>

                                                        <div class="col-12">
                                                            <label for="inputName" class="form-label">Name</label>
                                                            <input type="text" class="form-control" name="inputName" placeholder="Shraddha Navnath Kanase" required>
                                                        </div> 

                                                        <div class="col-md-6">
                                                            <label for="inputEmail4" class="form-label">Email</label>
                                                            <input type="email" class="form-control" name="inputEmail4" placeholder="shraddha.kanase19@vit.edu" required>
                                                        </div>

                                                         <div class="col-md-6">
                                                              <label for="inputPhone" class="form-label">WhatsApp Number</label>
                                                              <input type="tel" class="form-control" name="inputPhone" placeholder="1234567890" required>
                                            <?php if(isset($phone_error)) { ?>
                                              <p><?php echo $phone_error ?></p>
                                            <?php } ?>
                                                         </div>

           
                                                         <div class="col-6">
                                                              <label for="inputState" class="form-label">State</label>
                                                              <input type="text" class="form-control" name="inputState" placeholder="Maharashtra" required>
                                                         </div>

                                                         <div class="col-6">
                                                              <label for="inputCity" class="form-label">City</label>
                                                              <input type="text" class="form-control" name="inputCity" placeholder="Pune" required>
                                                         </div>
                                                          <div class="col-md-6">
                                                              <label for="inputYear" class="form-label">Academic Year</label>
                                                              <select name="inputYear" class="form-select">
                                                                    <option selected value="1">1 st year</option>
                
                                                                    <option value="2">2nd  year</option>
                                                                    <option value="3">3rd  year</option>
                                                                    <option value="4">4th  year</option>
                                                              </select>
                                                          </div>


                                                          <div class="col-md-6">
                                                              <label for="inputBranch" class="form-label">Branch</label>
                                                               <input type="text" class="form-control" name="inputBrach" placeholder="Electronics">
                                                          </div>


                                                           <div class="col-12">
                                                                <label for="inputdivision" class="form-label">Division</label>
                                                                <input type="text" class="form-control" name="inputdivision" placeholder="A">
                                                           </div>

                                                           <div class="col-md-6">
                                                                 <label for="inputgrno" class="form-label">PRN Number</label>
                                                                 <input type="text" class="form-control" name="inputgrno" placeholder="11919456">
                                                           </div>

                                                           <div class="col-md-6">
                                                                 <label for="inputrollno" class="form-label">Roll Number</label>
                                                                 <input type="text" class="form-control" name="inputrollno" placeholder="23">
                                                          </div>
                                                           <div class="text-center">
                                                                 <button type="submit" name="vitsubmit" class="button">SUBMIT</button>
                                                          </div>
                                                    </form>


                                            </div>
                                          </div> 

                                      </div>

                                </div> 

                      </div>
                   </div>
            





<!-- participants Application Form -->
                
                  <div class="container">
      
                      <div class="row temp-row">
                           
                           <div class="col-md-6">
                              
                                <div class="flip-card" >
                                  <div class="flip-card-inner" id="form3">
                                    <div class="flip-card-front">

                                   <form method="POST" myForm="text-center" id="form2" class="row g-3">
                                      <!-- <h3>Interested in Volunteering?</h3> -->
             

                                       <h2>Participants Application Form</h2>
                                       <div class="text-center">
                                                            <h5 style="text-align: center;">मराठी साठी</h5>
                                                            <button type="button" class="button small" onclick="flip2()">इथे क्लिक करा</button> 
                                                        </div>


                                     <!--   <h5>मराठी साठी</h5> -->
           

                                       <div class="col-12">
                                            <label for="inputName" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" name="inputNameP" placeholder="Type Your Full Name" required>
                                      </div> 

         

                                       <div class="col-md-12">
                                            <label for="inputPhone" class="form-label">WhatsApp Number</label>
                                            <input type="tel" class="form-control" name="inputPhoneP" placeholder="Your Phone Number" required>
                                            <?php if(isset($phone_error)) { ?>
                                              <p><?php echo $phone_error ?></p>
                                            <?php } ?>
                                      </div>
                                       <div class="col-12">
                                           <label for="inputAddress" class="form-label">Address</label>
                                           <input type="text" class="form-control" name="inputAddressP" placeholder="1234 Main St" required>
                                       </div>
                                       <div class="col-md-6">
                                            <label for="inputState" class="form-label">State</label>
                                            <input type="text" class="form-control" name="inputStateP">
                                       </div>
                                        <div class="col-md-6">
                                             <label for="inputCity" class="form-label">City</label>
                                             <input type="text" class="form-control" name="inputCityP">
                                        </div>
 

                                         <div class="col-12">
                                              <label for="inputVName" class="form-label">Volunteer Name</label>
                                              <input type="text" class="form-control" name="inputVNameP" placeholder="Type Volunteer Name">
                                         </div> 
                                          <div class="text-center">
                                              <button type="submit" name="participantsubmit" class="button">SUBMIT</button>
                                          </div>
                                   </form>
                                </div>
                                <div class="flip-card-back">

                                   <form method="POST" myForm="text-center" id="form2" class="row g-3">
                                      <!-- <h3>Interested in Volunteering?</h3> -->
             

                                       <h2>सहभागी अर्ज</h2>
                                       <div class="text-center">
                                                            <h5 style="text-align: center;">For English</h5>
                                                            <button type="button" class="button small" onclick="flip3()">CLICK HERE</button> 
                                                        </div>

                                      <!--  <h5>मराठी साठी</h5> -->
           

                                       <div class="col-12">
                                            <label for="inputName" class="form-label">पूर्ण नाव</label>
                                            <input type="text" class="form-control" name="inputNameP" placeholder="तुमचे पूर्ण नाव टाईप करा" required>
                                      </div> 

         

                                       <div class="col-md-12">
                                            <label for="inputPhone" class="form-label">फोन नंबर</label>
                                            <input type="tel" class="form-control" name="inputPhoneP" placeholder="तुमचा फोन नंबर टाईप करा" required>
                                            <?php if(isset($phone_error)) { ?>
                                              <p><?php echo $phone_error ?></p>
                                            <?php } ?>
                                      </div>

           

                                       <div class="col-12">
                                           <label for="inputAddress" class="form-label">पत्ता</label>
                                           <input type="text" class="form-control" name="inputAddressP" placeholder="तुमचा पत्ता टाईप करा" required>
                                       </div>
                                       <div class="col-md-6">
                                            <label for="inputState" class="form-label">राज्य</label>
                                            <input type="text" class="form-control" name="inputStateP" placeholder="आपल्या राज्याचे नाव टाईप करा" required="">
                                       </div>
                                        <div class="col-md-6">
                                             <label for="inputCity" class="form-label">शहर</label>
                                             <input type="text" class="form-control" name="inputCityP" placeholder="तुमच्या शहराचे नाव टाईप करा" required>
                                        </div>
 

                                         <div class="col-12">
                                              <label for="inputVName" class="form-label">स्वयंसेवकाचे नाव</label>
                                              <input type="text" class="form-control" name="inputVNameP" placeholder="तुमचे स्वयंसेवक नाव टाईप करा">
                                         </div> 

                                          <div class="text-center">
                                              <button type="submit" name="participantsubmit" class="button">फॉर्म सबमिट करण्यासाठी येथे क्लिक करा</button>
                                          </div>
                                   </form>
                                </div>
                            </div>
                          </div>
                      </div>
                            <div class="col-md-6"> 
                                   <div class="image2 image">
                                       <img src="../img/i3.jpg" class="img-fluid" alt="image2">
                                   </div>
                                   <div class="card-body">
                                             <h2 class="text-center text-uppercase" style="font-size: 5vw; "><b>questions?</b>
                                             </h2>
                    
                                             <p class="text-center">
                    
                                                    <span><b>E-mail us at <span style="color: #d4322b;">vitswd@vit.edu</span></b></span><br>
                                                    <span><b>or Contact us: <span style="color: #d4322b;">+91 60054 87084 / +91 77965 64982</span></b></span> 
                                            </p>
                                   </div>
                            </div>
                        </div>
                   </div>
<br>
<br>
<br>
<br>
<!-- Counter -->
  <section class="wrapper style1 align-center">
            <div class="inner">
              <h2>Previous Stat</h2>
              <p>Aatmabodh, an initiative by the social welfare and development committee to spread the knowledge of digital literacy among underprivileged, especially senior citizens and women. Started right from teaching people by physically visiting their house, moving on to digitally teaching in computer labs, and further with the amidst of pandemic, the event continued with the same excitement and enthusiasm in online mode with teaching initiative right from their home place.</p>
            </div>
  </section>
  <div class="counter-up" > 
    <div class="contentc">
      <div class="boxc">
        <div class="iconc"><i class="fas fa-history"></i></div>
        <div class="counter">724</div>
        <div class="textc">Working Hours</div>
      </div>
      <div class="boxc">
        <div class="iconc"><i class="fas fa-gift"></i></div>
        <div class="counter">508</div>
        <div class="textc">Completed Projects</div>
      </div>
      <div class="boxc">
        <div class="iconc"><i class="fas fa-users"></i></div>
        <div class="counter">436</div>
        <div class="textc">Happy Clients</div>
      </div>

    </div>
  </div>


<!-- testimonial -->

    <div class="testimonials-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Testimonials </h2>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">I never thought of learning how to use smartphones as it looked complicated. The volunteers made it an easy to learn experience for me.</p>
                    </div>
                    <div class="author">
                        <h5 class="name">Vijaya Velhal</h5>
                        <p class="titlet">(Participant)</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">सीखने की कोई उम्र नहीं होती! मैंने इन १० दिनों में ना केवल मोबाइल सीखा बल्कि इसके अलावा भी बहोत कुछ पाया | आज मैं मोबाइल से पत्र व्यवहार कर सकता हूॅं, यह मेरी उपलब्धि है |</p>
                    </div>
                    <div class="author">
                        <h5 class="name">श्री करंदीकर </h5>
                        <p class="titlet">( Ex- Participant)</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">As a volunteer, I found working with the team a great experience, interacted with a lot of participants and loved helping them out.</p>
                    </div>
                    <div class="author">
                        <h5 class="name">Anushka Ahire </h5>
                        <p class="titlet">(ex-best volunteer)</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
              <section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="first">
            <div class="content">
              <h2>Online Aatmabodh Syllabus</h2>
              <ul class="actions stacked">
                <li><a href="https://drive.google.com/file/d/14yk8v-JdvrfJp1Y0SYIcoTbRBUm6DTvi/view?usp=sharing" target="_blank" class="button">Check Here</a></li>
              </ul>
            </div>
            <div class="image">
              <img src="../img/syllabus.jpg" alt="" />
            </div>
          </section>

<script>
  $(document).ready(function(){
    $(".counter").counterUp({
      delay: 60,
      time:1200
    })
  });
</script>

   <script type="text/javascript">
            function flip(){
              document.getElementById("form1").style.
                 transform='rotateY(180deg)';
            }

            function flip1(){
              document.getElementById("form1").style.
                 transform='rotateY(0deg)';
            }

            function flip2(){
              document.getElementById("form3").style.
                 transform='rotateY(180deg)';
            }

            function flip3(){
              document.getElementById("form3").style.
                 transform='rotateY(0deg)';
            }
          </script>



  
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>

     
  </body>
</html>