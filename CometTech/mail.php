<?php 
if(isset($_POST['submit']))
{
    $to = "service@comettech.co"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    
    $subject = "Message from" . $name;
    $subject2 = "Copy of your form submission";
    $message = $name . " " . " wrote the following:" . "\n\n" . $_POST['message'];
    

    $headers = "From:" . $from;
    
    if(mail($to,$subject,$message,$headers))
    
    {
      echo "<script>alert('Your message was successfully sent!');</script>";
      echo "<script>document.location.href='index.html'</script>";
      }
      else
      {
      echo "<script>alert('Message was not sent. Please try again later');</script>";
      }
  }
?>