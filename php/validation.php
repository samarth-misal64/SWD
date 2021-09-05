<?php
error_reporting(0);
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

include('../html/aatmabodh_reg.php');

?>