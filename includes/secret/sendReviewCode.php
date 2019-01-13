<?php
require "../database.inc.php";
if(isset($_POST['submit'])) {
    $code = mysqli_real_escape_string ($connect,trim($_POST['code']));
    $email = mysqli_real_escape_string ($connect,trim($_POST['email']));
    $txt = $code;
    $txt .= "<br><a href=\"https://walkadog.secondsection.in.rs/review.php\">Leave a review here with that code</a>";
    $subject = "Review Code";
    $to = $email;
    $headers = "From:  walk·a·dog <walkadog@secondsection.in.rs>" . " \r\n" .
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    //sending reveiw code to the emial that was filed out in the admin panel
    if(!mail($to, $subject, $txt, $headers)){
        header ("Location: ../../admin.php?reviewCode=error");
        exit();
    }
    header ("Location: ../../admin.php?reviewCode=success");
    exit();
}else{
    header ("Location: ../../index.php");
    exit();
}