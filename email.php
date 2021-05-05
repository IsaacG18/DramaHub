 <?php
include_once 'dbconnection.php';//Adds access to the database
    $min = 10000;//minimum value of code
    $max = 99999;//maximum value of code
    $unquie = false;//Used to resent if the code is unqiue
    do{
        $code = rand ( $min , $max );//get a random code
        try{
            $query = $con->prepare(""
                    . "Select * FROM users WHERE CODE =?"//check if the code already exists
                    );
            $query -> execute([$code]);
            $enter = $query->fetch(PDO::FETCH_OBJ);
            
            if(!isset($enter->CODE)){
                $unquie = true;//Set the unqiue to true if code does not exist
            }
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }    
            
    }while($unquie == false);//check if unquie is true to continue else loops back
    $email = $_POST['email'];//Get the users entered email address
        try{
            $query = $con->prepare(""
                    . "Select * FROM users WHERE email =?"//Check the database for the email
                    );
            $query -> execute([$email]);
            $users = $query->fetch(PDO::FETCH_OBJ);
        if(isset($users)){//Check if the user is found
            $query = $con->prepare(""
                            . "UPDATE users SET CODE = :code"
                            . " WHERE email = :email");//Adds the code to the email address

                            $success = $query-> execute([
                           'code' => $code,
                           'email' => $email
                            ]);
        }
        $complete = false;
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
?>

<?php
    
    require 'PHPMailer/PHPMailerAutoload.php';//Add PHPMailer libary to the document
    
if (empty($errors)) {
    $mail = new PHPMailer(true); //Adds a new object mail
 
try {
    $mail->SMTPDebug = 4;                     
    $mail->isSMTP();                                   
    $mail->Host = 'smtp.gmail.com'; //What host is used
    $mail->SMTPAuth = true;                           
    $mail->Username = "EmailForIsaacPHP@gmail.com";
    $mail->Password = 'Java>PhP>C++';                      
    $mail->SMTPSecure = 'tls';                          
    $mail->Port = 587;//Port number used                                  
    $mail->From = 'emailforisaacphp@gmail.com';//Sender email
    $mail->FromName = 'Forgotten Password';//Name Displayed
    $mail ->addAddress($email);//Recipents email
    $mail->WordWrap = 50;//Formating the data line width in the email                                
    $mail->isHTML(false);// This select if the email will be sent with HTML                                
    $mail->Subject = "Reset Email";//Subject of the email
    $mail->Body    = "Enter this $code to the area this will allow you to reset the password.";//Content of the emailer
    if(!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;//If they is an error
    } else {
        $complete = true;
        echo 'Message has been correctly sent';//Confirms the email has be sent 
    }
    $errors[] = "Send mail succsessfully";//Confirms the email has be sent 
} catch (phpmailerException $e) {
    $errors[] = $e->errorMessage(); //If they is an error
} catch (Exception $e) {
    $errors[] = $e->getMessage(); //If they is an error
}
}
?>

 