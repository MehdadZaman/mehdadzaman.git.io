<?php

if(isset($_POST)) {

    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if(empty($name) || mpty($mailFrom) || mpty($subject) || mpty($message)) {

        echo "Please fill in all of the fields";

    }
    else {
        
        $mailTo = "zaman.mehdad.227@gmail.com";
        $headers = "From: " .$mailFrom;

        $txt = "Personal website email: \nYou recieved an email from " .$name. ".\n\n" .$message;

        echo "<script type='text/javascript'>alert('BEFORE BEING SENT');
        </script>";

        // mail($mailTo, $subject, $txt, $headers);

        // header("Location: contact.html");

        echo "<script type='text/javascript'>alert('Your message was sent');
        </script>";
    }
}