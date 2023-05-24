<?php
  $email = "xamzabilal2003@gmail.com"
  $subject = "worked"
  $body = "hi"
  $header = "From : www.hamzaranar@gmailx.com"
  if (mail($email,$subject,$body,$header)) {
    echo "done";
  }else {
    echo "not done";
  }
?>
