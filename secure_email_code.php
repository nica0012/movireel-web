<?php

$subject = "Message from the Website";
//$message = "Message From The Site";
//if(["vname"]==""&&["vemail"]==""&&["msg"]==""){



if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["vname"]==""||$_POST["vemail"]==""){
        echo '<h3 style="color:#ff0000;">Email error. All fields required.</span>';

//echo "All Fields Required.";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['vemail'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
        echo '<h3 style="color:#ff0000;">Invalid Email. Please try again.</span>';

//echo "Sorry, invalid Email.";
}
else{
$message = $_POST['msg'];
$headers = 'From:'. $email . "\r\n"; // Sender's Email
$headers .= 'Cc:'. $email . "\r\n"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail("movireelapp@gmail.com", $headers, $subject, $message);
//mail("hugonicastro@hotmail.ca", $headers, $subject, $message);
//echo "Thanks! Email Sent. ";
    echo '<h3 style="color:#00a331;">Email sent.</span>';

}
}
}

//$name = $_POST['name'];
//$email = $_POST['email'];
//$message = $_POST['message'];
//$formcontent="From: $name \n Message: $message";
//$recipient = "hugonicastro@hotmail.ca";
//$subject = "Website Message";
//$mailheader = "From: $email \r\n";
//mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

?>
