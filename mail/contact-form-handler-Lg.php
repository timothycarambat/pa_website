<?php 
$errors = '';
$myemail = 'rambat1010@gmail.com';//<-----Put Your email address here.


if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['msg']))  ||
   empty($_POST['phone'])
{
    $errors = "\n Error: all fields are required";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['msg']; 
$phone = $_POST['phone'];



if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
	exit();
}

$subject = "Website Contact from $name";
  

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "$subject" ;
	$email_body = "$message\n\n"."Contact Info:\n$name\n"."E-mail:"."$email_address\n"."Phone:"."$phone\n"; 
	
	$headers = "From: $myemail \n"; 
	$headers .= "Reply-To: $name $email_address";
	

	mail($to,$email_subject,$email_body,$headers);
	

} 
	header("Location: contact.html");
	
?>



