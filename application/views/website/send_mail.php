<?php


	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';
	require 'PHPMailer/src/Exception.php';
    
	$errors = array();

    if(!empty($_POST['name'])){

            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $comments = $_POST['comments'];
            
                $adminEmail = 'anoopbfcsofttech@gmail.com';
        
                $userMessage = "User details:\n";
                $userMessage .= "Name: $name\n";
                $userMessage .= "Mobile: $email\n";
                $userMessage .= "Subject: $subject\n";
                $userMessage .= "Message: $comments\n";
        
                $mail = new PHPMailer\PHPMailer\PHPMailer();
                $mail->isSMTP();
                $mail->Host = 'smtp-relay.brevo.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'anoopbfcsofttech@gmail.com';
                $mail->Password = '5qGx3vhEDHKfICa6';
                $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587; 
        
                $mail->setFrom($email, $name);
                $mail->addAddress($adminEmail);
                $mail->Subject = 'New Submission';
                $mail->Body = $userMessage;
        
                if ($mail->send()) {
                echo  '1';
                } else {
                    
                echo  '0';
                }
            
    }else{
	   	echo  '0';
	}

?>