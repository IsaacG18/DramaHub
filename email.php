 <?php
include_once 'dbconnection.php';
    $min = 10000;
    $max = 99999;
    $unquie = false;
    do{
        $code = rand ( $min , $max );
        $query = $con->prepare(""
                    . "Select * FROM users WHERE CODE =?"
                    );
            $query -> execute([$code]);
            $enter = $query->fetch(PDO::FETCH_OBJ);
            
            if(!isset($enter->CODE)){
            $unquie = true;
            }
            
    }while($unquie == false);
    $email = $_POST['email'];
    $query = $con->prepare(""
                    . "Select * FROM users WHERE email =?"
                    );
            $query -> execute([$email]);
            $users = $query->fetch(PDO::FETCH_OBJ);
        if(isset($users)){
            $query = $con->prepare(""
                            . "UPDATE users SET CODE = :code"
                            . " WHERE email = :email");

                            $success = $query-> execute([
                           'code' => $code,
                           'email' => $email
                            ]);
        }
        $complete = false;
?>

<?php
    
    require 'PHPMailer/PHPMailerAutoload.php';
    
if (empty($errors)) {
    $mail = new PHPMailer(true); 
 
try {
     
    $mail->SMTPDebug = 4;                     
    $mail->isSMTP();                                   
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true;                           
    $mail->Username = "EmailForIsaacPHP@gmail.com";
    $mail->Password = 'Java>PhP>C++';                      
    $mail->SMTPSecure = 'tls';                          
    $mail->Port = 587;                                  
    $mail->From = 'emailforisaacphp@gmail.com';
    $mail->FromName = 'Forgotten Password';
    $mail ->addAddress($email);
    //$mail ->AddAddress('EmailForIsaacPHP@gmail.com');
    $mail->WordWrap = 50;                                
    $mail->isHTML(false);                                
    $mail->Subject = "Reset Email";
    $mail->Body    = "Enter this $code to the area this will allow you to reset the password.";
    if(!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        $complete = true;
        echo 'Message has been correctly sent';
    }
    $errors[] = "Send mail succsessfully";
} catch (phpmailerException $e) {
    $errors[] = $e->errorMessage(); 
} catch (Exception $e) {
    $errors[] = $e->getMessage(); 
}
}
?>

 