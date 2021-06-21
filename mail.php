<?php
if (isset($_POST['submit'])){
    $mailto = "info@interhash.by";
    $from = $_POST["email"];
    $name = $_POST["name"];
    $subject = $_POST["telegram-whatsapp"];
    $subject2 = "Your message submitted Successfully"
    $message = "Client Name: ".$name. " send contact ".$subject." and email ".from
    $message2 = "Dear".$name." Thank You for contacting us! We`ll get back to you shortly;"
    $headers = "From:".$from;
    $headers2 = "From info@miningsoftware.solutions";
    $result = mail($mailto, $subject, $message, $headers);
    $result = mail($from, $subject2, $message2, $headers2);
    if ($result) {
        echo '<script type="text/javascript">alert("Message was send Successfully, We will contact you shortly!") </script>';
    } else {
        echo '<script type="text/javascript">alert("Submission had been failed! Try again Later") </script>';
    }
}
?>