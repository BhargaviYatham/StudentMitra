<?php
           use PHPMailer\PHPMailer\PHPMailer;
           use PHPMailer\PHPMailer\SMTP;
           use PHPMailer\PHPMailer\Exception;
   
           require '../PHPMailer/src/Exception.php';
           require '../PHPMailer/src/PHPMailer.php';
           require '../PHPMailer/src/SMTP.php';
   
           if(isset($_POST['send'])){
               $mail=new PHPMailer(true);
   
               $mail->isSMTP();
               $mail->Host="smtp.gmail.com";
               $mail->SMTPAuth=true;
               $mail->Username=$_POST['email'];
               $mail->Password='ncglshxuxtmzbndx';
               $mail->SMTPSecure='ssl';
               $mail->Port=465;
   
               $mail->setFrom($_POST['email'],'Mailer');
               $mail->addAddress('n180750@rguktn.ac.in');
               $mail->isHtml(true);
               $mail->Subject=$_POST['subject'];
               $mail->Body=$_POST['msg'];
   
               $mail->send();
   
               echo"<div class='alert alert-success'>sent succefully</div>";
           }
        ?>