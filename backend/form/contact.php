<?php
  
  include ('../backend/form/conn.php');
  
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_POST['submit']));{
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$sql = "INSERT INTO contact_tbl (name, mail, subject, message) VALUES ('$name', '$email', '$subject', '$message' )";
  if(mysqli_query($link, $sql)){
    echo "Records Inserted Successfully.";
} else{
  echo " Could not able to execute $sql. " . mysqli_error($link);
}
}
      // // if(isset($_POST['submit'])){

      //   use PHPMailer\PHPMailer\PHPMailer;
      //   use PHPMailer\PHPMailer\Exception;

      //   $mail = new PHPMailer(true);

      // try{
      //   $mail->SMTPDebug = 2;
      //   $mail->isSMTP();
      //   $mail->Host='smtp.example.com';
      //   $mail->Port=587;
      //   $mail->SMTPAuth=true;
      //   $mail->SMTPSecure='tls';
      //   $mail->Username='ayazali6869@gmail.com';
      //   $mail->Password='03066167016';
        
      //   $mail->setFrom($_POST['email'],$_POST['name']);
      //   $mail->addAddress('usmanhaiderkhan4@gmail.com');
      //   // $mail->addReply($_POST['email'],$_POST['name']);
      
      //   $mail->isHTML(true);
      //   $mail->Subject = 'Form Submission';
      //   $mail->Body = 'HTML message body in <b>bold</b>';
      //   $mail->AltBody = 'Body in plain text for non-HTML mail client';
      //   $mail->send();
      //   echo"Mail Has Send Successfully";

      
      //   // if(!$mail->send()){
      //   //   $result='Something Went Wrong Please Try Again';
      //   // }
      //   //   else{
      //   //     $result="Thanks".$_POST['name']."For Connecting Us.";
      //   //   }
      // }catch(Exception $e){
      //   echo"Message Has Not Be Send. Mailer Error: {$mail->ErrorInfo}";
      // }
    // }

  // $receiving_email_address = 'ayazali6869@gmail.com';
  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];


  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // $conn = devonsite_connect()

  // echo $contact->send();
?>
