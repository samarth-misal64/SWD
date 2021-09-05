<?php
error_reporting(0);
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

if (!empty($inputName) || !empty($inputEmail4) || !empty($inputPhone) || !empty($inputState) || !empty($inputCity)|| !empty($inputYear) || !empty($inputBrach) || !empty($inputdivision) || !empty($inputgrno) || !empty($inputrollno)){

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "registration";

    //Create conn

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()){

        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());

    }elseif (strlen($inputPhone) < 10) {
        $phone_error = "Phone number requires 10 digits";
    }elseif (strlen($inputPhone) > 10) {
        $phone_error = "Phone number requires 10 digits";
    }else{
        $SELECT = "SELECT inputEmail4 FROM `vituser` WHERE inputEmail4 = ? LIMIT 1";
        $INSERT = "INSERT Into `vituser` (inputName, inputEmail4, inputPhone, inputState, inputCity, inputYear, inputBrach, inputdivision, inputgrno, inputrollno) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

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
            alert("Added Succesfully!");

        }else{

            alert("Someone already registered using this email");

        }

        $stmt->close();
        $conn->close();

    }

}else{
    alert("All fields are required");
    die();
}
header('Location: ../html/aatmabodh_reg.php');
?>