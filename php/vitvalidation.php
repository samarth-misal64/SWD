<?php
error_reporting(0);
$namevit = $_POST['namevit'];
$emailid = $_POST['emailid'];
$phone_no = $_POST['phone_no'];
$addressvit = $_POST['addressvit'];
$yearvit = $_POST['yearvit'];
$branch_name = $_POST['branch_name'];
$division_name = $_POST['division_name'];
$grno = $_POST['grno'];
$rollno = $_POST['rollno'];

if (!empty($namevit) || !empty($emailid) || !empty($phone_no) || !empty($addressvit) || !empty($yearvit) || !empty($branch_name) || !empty($division_name) || !empty($grno) || !empty($rollno)){

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "registration";

    //Create conn

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()){

        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());

    }else{

        $SELECT = "SELECT emailid FROM `vituser` WHERE emailid = ? LIMIT 1";
        $INSERT = "INSERT Into `vituser` (namevit, emailid, phone_no, addressvit, yearvit, branch_name, division_name, grno, rollno) values(?, ?, ?, ?, ?, ?, ?, ?, ?)";

        //Prepare statement

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $emailid);
        $stmt->execute();
        $stmt->bind_result($emailid);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum == 0){

            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssssssss" ,$namevit, $emailid, $phone_no, $addressvit, $yearvit, $branch_name, $division_name, $grno, $rollno);
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