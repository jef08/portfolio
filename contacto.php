<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $mailto = "myemail@myemail.com";
        $subject = "New form submission from " . $name;
        $headers = "From: " . $email;
        $txt = "Name: $name\nEmail: $email\nMessage: $message";
        
        if (mail($mailto, $subject, $txt, $headers)) {
            echo "Thank you!";
            header("Location: index.html?MessageSent");
            exit();
        } else {
            echo "Something went wrong, please try again.";
        };

        
    }
?>