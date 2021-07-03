<?php

if($_SERVER['REQUEST_METHOD'] === 'GET')
{ 
	if(isset($_GET['name']) && $_GET['name'] != null && $_GET['name'] != "" && $_GET['name'] != " "
	   && isset($_GET['mail']) && $_GET['mail'] != null && $_GET['mail'] != "" && $_GET['mail'] != " "
	   && isset($_GET['phone']) && $_GET['phone'] != null && $_GET['phone'] != "" && $_GET['phone'] != " "
	   && isset($_GET['subject']) && $_GET['subject'] != null && $_GET['subject'] != "" && $_GET['subject'] != " "
	   && isset($_GET['text']) && $_GET['text'] != null && $_GET['text'] != "" && $_GET['text'] != " "
	  )
	{
		 $email = $_GET['mail'];
		 $name = $_GET['name'];
		 $phone = $_GET['phone'];
		 $subject = $_GET['subject'];
		 $text = $_GET['text'];
		 
		 $to = "kh.darshan@gmail.com";
         $subject1 = " Enquiry by - ".$name;
         
         $message = nl2br ("Name : ".$name."\n\n"."Subject : ".$subject."\n\n"." Email ID : ".$email."\n\n"." Phone : ".$phone."\n\n"." Message : ".$text);
         
         $header = "From:enquiry@vasudhadairy.com \r\n";
        // $header .= "Cc:kh.darshan89@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         mail ($to,$subject1,$message,$header);
		 
		 echo "success";
	}
	else
	{
		echo "encore";
	}
}
else
	{
		echo "encore";
	}

?>