
<?php

if (isset($_POST["submit"])) {
    $name = $_POST['InputName'];
    $to = "kimiatuzzaman@gmail.com,kimia.tuz@northsouth.edu";
    $subject = $_POST['InputSubject'];
    $txt = $_POST['InputMessage'];
    $mail = $_POST['InputEmail'];
    $headers = "From:$name <$mail> ". "\r\n";
    
  $mailcheck=  mail($to,$subject,$txt,$headers);

  if($mailcheck)
  {
    echo '<script>alert("Message has been send. Thank you");window.location="index.html";</script>'; 

  }
  else{
    echo '<script>alert("Oops! Something Error!!");window.location="index.html";</script>'; 
  }
} 



?>