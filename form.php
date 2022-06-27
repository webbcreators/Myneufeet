<?php
   if(isset($_POST['Submit'])){
   				$mailto = "princesshorhenderson@gmail.com" ;
   				$name = $_POST['name'] ;
   				$fromEmail = $_POST['email'];
   				$subject = $_POST['subject'] ;
   				$subject2 = "Confirmation: Message was submitted successfully/ Mynewfeet";
   				
   				$message = "Client Name: " . "\n". "Client Message : " ."\n". $_POST['message'] ;
   				
   				
   				$message2 ="Dear". $name. "\n". 
   				"Thanks you for contacting us. We will get back to you shortly!" . "\n\n" . "You submitted the following message: " ."\n". $_POST['Message']. "\n\n"."Regards, " . "\n". "Myneufeet" ;
   				
   				
   	$headers = "From: ". $fromEmail;
   	$headers2 = "From: ". $mailto;
   	
   	$result1 = mail($mailto, $subject, $message, $headers)	;
   	$result2 = mail($fromEmail, $subject2, $message2, $headers2);
   	
   	
   	if ($result1 && $result2){
   					$success = "Your message was sent successfully!";
   	}else{
   					$failure = "Sorry! Message was not sent. Try again later."
   	}
   				
   }
?>
no