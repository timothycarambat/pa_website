<?php
$errors = '';
$myemail = 'rambat1010@gmail.com';//<-----Put Your email address here.
$res = false;


if(empty($_POST['name'])  ||
   empty($_POST['mail']) ||
   empty($_POST['msg']))
{
    $errors = "\n Error: all fields are required";
}

$name = $_POST['name'];
$email_address = $_POST['mail'];
$message = $_POST['msg'];


$subject = "PA Website Contact from $name";


if( empty($errors) )
{
	$to = $myemail;
	$email_subject = "$subject" ;
	$email_body = "$message\n\n"."Contact Info:\n$name\n$email_address\n";

	$headers = "From: $myemail \n";
	$headers .= "Reply-To: $name $email_address";


	$res = mail($to,$email_subject,$email_body,$headers);

}

if($res){
  header("Location: http://pawebdraft.timothycarambat.com/index.php?response=success");
}else{
  header("Location: http://pawebdraft.timothycarambat.com/index.php?response=failure");
}


?>
