<?php 
//print_r($_POST);exit();
$error="";

if(!isset($_POST['name']) || $_POST['name']=="")
{
	$error .="\nName is required";
}

else
{
	if(!preg_match('/^[a-zA-Z\\s]*$/',$_POST['name']))
	{
		$error .="\nEnter valid Name";
	}
}

if(!isset($_POST['email']) || $_POST['email']=="")
{
	$error .=" \nEmail Id is required";
}
else
{
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
	{	
	
		$error .=" \nEnter valid Email Id";
	}
}

if(!isset($_POST['phone']) || $_POST['phone']=="")
{
    $error .="\nMobile Number is required";
}

else
{
    if(!preg_match('/\d{10}/',$_POST['phone']))
    {
        $error .="\nEnter valid Mobile Number";
    }
}

if($error=="")
{

    require 'PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $message_body="<html><body><table border=5px>";
        $message_body.="<tr><td colspan='2' style='color : #C50B33; font-size : 20px; '><b>Request For Contact</b></td></tr>";
        $message_body.="<tr><td>Contact's Full Name : </td><td>".$_POST['name']."</td></tr>";
        $message_body.="<tr><td>Contact's Email : </td><td>".$_POST['email']."</td></tr>";
        $message_body.="<tr><td>Contact's Mobile Number : </td><td>".$_POST['phone']."</td></tr>";
        $message_body.="</table></body></html>"; 
     
        $mail->addAddress('pavanalakecampinghelp@gmail.com');
       
        $mail->Subject  = 'pawanalakecamping.com';
        $mail->isHTML(true);
        $mail->Body = $message_body;
        $mail->send();
        if(!$mail->send())
         {
            echo "Sorry, error occured this time sending your Mail.Please send again..!";
        } 
        else 
        {
            echo "sent";
        }
        $mail->ClearAllRecipients();
        $mail->clearAttachments();
        $mail->addAddress($_POST['email']);
        $message_body="Thank You....We Will Back To You Soon..";
        $mail->Subject  = 'pavanalakecamping.com';
        $mail->Body = $message_body;
        $mail->send();
         


}
else
{	
	echo $error;
}
?>