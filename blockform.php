<?php

if(isset($_POST['submit'])){

    $email = $_POST['Email Address'];

    $to = "imperiumcharge@gmail.com";
    $subject = "MVP 1 Submission";
    $message = "it works!";
    $echo_result = "sent";

    if ( mail($to, $subject, $message) ) {
        echo "Sent!";
    } else {
        echo "Did not send";
    }
    
}
?>