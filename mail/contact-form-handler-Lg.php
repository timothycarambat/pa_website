<?php
$errors = '';
$myemail = 'rambat1010@gmail.com';//<-----Put Your email address here.


if(empty($_POST['name'])  ||
   empty($_POST['mail']) ||
   empty($_POST['msg'])   ||
   empty($_POST['phone']))
{
    $errors = "\n Error: all fields are required";
}

$name = $_POST['name'];
$email_address = $_POST['mail'];
$message = $_POST['msg'];
$phone = $_POST['phone'];
$res = false;



if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email_address))
{
    $errors .= "\n Error: Invalid email address";
	exit();
}

$subject = "PA Website Contact from $name";


if( empty($errors))
{
	$to = $myemail;
	$email_subject = "$subject" ;
	$email_body = "$message\n\n"."Contact Info:\n$name\nE-mail: $email_address\nPhone: $phone\n";

	$headers = "From: $myemail \n";
	$headers .= "Reply-To: $name $email_address";


	$res = mail($to,$email_subject,$email_body,$headers);

}

if($res){
  header("Location: http://pawebdraft.timothycarambat.com/contact.php?response=success");
}else{
  header("Location: http://pawebdraft.timothycarambat.com/contact.php?response=failure");
}


?>
