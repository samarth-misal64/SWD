<?php
error_reporting(0);
$inputNameP = $_POST['inputNameP'];
$inputPhoneP = $_POST['inputPhoneP'];
$inputAddressP = $_POST['inputAddressP'];
$inputStateP = $_POST['inputStateP'];
$inputCityP = $_POST['inputCityP'];
$inputVNameP = $_POST['inputVNameP'];

if (!empty($inputVNameP) || !empty($inputPhoneP) || !empty($inputAddressP) || !empty($inputStateP) || !empty($inputCityP) || !empty($inputVNameP)){

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "registration";

    //Create conn

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()){

        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());

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

?>