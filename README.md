# SMTP-phpmailer

### install phpmailer
```php
Install phpmailer
```
### add this file
```php
require 'phpmailer/PHPMailerAutoload.php'; 
```
### declare variable 
```php
$to_id   = $_POST['toid'];                                // To Email
$subject = $_POST['subject'];                             // Subject
$message = $_POST['message'];                             // Message
```
### Call the method
```php
$mail = new PHPMailer;
```
### SMTP 
```php
$mail->Host       = 'smtp.gmail.com';
$mail->Port       = 587;
$mail->SMTPAuth   = true;
$mail->SMTPSecure = 'tls';
```
### Set Email address 
```php
$mail->Username = 'youremail@gmail.com';                  // Enter your email here 
$mail->Password = 'password';                             // Enter your password 
    
$mail->setFrom('youremail@gmail.com', 'Name');            // Eamil and Name
$mail->addAddress($to_id);                                // Add a recipient
$mail->addReplyTo('youremail@gmail.com');
```
#### Output
![Capture](https://user-images.githubusercontent.com/60460387/90241216-3b2c6c00-de48-11ea-8b72-a39771859ba7.JPG)


