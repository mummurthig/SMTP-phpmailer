<!DOCTYPE html>
<html>
<head>

<title>Send Email using SMTP</title>
 
 <!--StyleSheet-->
 <style>
 
 body {
	background-color: skyblue;
}

form {
	margin: 0 auto;
	width: 400px;
	height: 400px;
	padding: 1em;
	border: 2px solid black;
	border-radius: 1em;
}

ul {
	list-style: none;
	padding: 0;
	margin: 0;
}

form li+li {
	margin-top: 1em;
}

label {
	display: inline-block;
	width: 90px;
	text-align: right;
}

input,
textarea {
	font: 1em oblique;
	width: 300px;
	box-sizing: border-box;
	border: 1px solidgreen;
}

input:focus,
textarea:focus {
	border-color: #000;
}

textarea {
	vertical-align: top;
	height: 5em;
}

.button {
	padding-left: 90px;
}

button {
	background-color: tomato;
	margin-left: .5em;
}

 </style>

</head>

<body>
    
     
<!--php Code-->
<?php

require 'phpmailer/PHPMailerAutoload.php';                   //PHPMailerAutoload.php from phpmailer

if (isset($_POST['send'])) {
    
    $to_id   = $_POST['toid'];                                // To Email
    $subject = $_POST['subject'];                             // Subject
    $message = $_POST['message'];                             // Message

    $mail = new PHPMailer;
    
    $mail->Host       = 'smtp.gmail.com';
    $mail->Port       = 587;
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = 'tls';
    
    $mail->Username = 'youremail@gmail.com';                  // Enter your email here 
    $mail->Password = 'password';                             // Enter your password 
    
    $mail->setFrom('youremail@gmail.com', 'Name');            // Eamil and Name
    $mail->addAddress($to_id);                                // Add a recipient
    $mail->addReplyTo('youremail@gmail.com');
    
    $mail->isHTML(true);                                      // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    
    if (!$mail->send()) {

        echo '<script language="javascript">';
        echo 'alert("Message Could Not be sent!")';
        echo '</script>';
    } 
    else {
        
        echo '<script language="javascript">';
        echo 'alert("message successfully sent")';
        echo '</script>';
        
    }
    
} else {

    echo '<script language="javascript">';
    echo 'alert("Please Enter Valid Data")';
    echo '</script>';
}

?>
  
  <!--User inputs-->
   <form action="" method="post" enctype="multipart/form-data">
   <h2 align="center">SEND MAIL USING SMTP</h2>
   <ul>
      <li>
         <label for="name">To Email :</label>
         <input type="email" id="fname" name="toid" placeholder="Email">
      </li>
      <li>
         <label for="mail">Subject :</label>
         <input type="text" id="fname" name="subject" placeholder="Subject...">
      </li>
      <li>
         <label for="msg">Message :</label>
         <textarea id="msg" id="fname" name="message" placeholder="Message..."></textarea>
      </li>
      <li class="button">
         <button type="submit" name="send" >Send your message</button>
      </li>
   </ul>
</form>

</body>

</html>