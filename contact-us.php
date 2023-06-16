<?php

$referer = $_SERVER['HTTP_REFERER'];

if (isset($_REQUEST['contactform'])) {

    $maillayout = " <b> Enquiry From Bookkeeping By Pros Website </b> <br />

 Name :  " . $_REQUEST['name'] . "  <br />

 E-Mail :  " . $_REQUEST['email'] . "  <br />

 Subject :  " . $_REQUEST['subject'] . "  <br />

 Message :  " . htmlspecialchars( $_REQUEST['message']) . "  <br />   ";



    $to = "aspiregraphicdesigner@gmail.com";

    $bcc="";

    $subject = " Enquiry -Bookkeepingbypros.com ";

    $headers = "MIME-Version: 1.0" . "\r\n";

    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $headers .= 'From: Bookkeeping By Pros <info@bookkeepingbypros.com>' . "\r\n";

    $mail = mail($to, $subject, $maillayout, $headers);

    if ($mail) {



        $maillayout1 = " Dear " . $_REQUEST['name'] . ", Thanks for sending your query. One of our representatives will soon be in touch with you for further details and proceedings.<br />

    Thanks and Regards <br />

    Bookkeeping By Pros";

        $to1 = "" . $_REQUEST['email'] . "";

        $subject1 = "Thank You " . $_REQUEST['name'] . "";

        $headers = "MIME-Version: 1.0" . "\r\n";

        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $headers .= 'From: Bookkeeping By Pros  <info@bookkeepingbypros.com>' . "\r\n";

        $mail1 = mail($to1, $subject1, $maillayout1, $headers);       

        header('location:thankyou.php?success=1');

    }

}
