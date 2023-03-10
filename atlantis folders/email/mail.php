<?php
$to_email="shiva123.sp2@gmail.com";
$subject="php developer";
$body="hi this is swamy";
$headers="From:swamybittu649@gmail.com";

if(mail($to_email, $subject, $body, $headers)){
    echo "Email succesfully sent to the $to_email";
}else{
    echo "Email sending failed..";
}
?>