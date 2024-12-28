<?php

    $to = "your.mail@gmail.com"; //Resived mail here
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $company = $_REQUEST['company'];
    $select = $_REQUEST['select'];
    $headers = "From: $from";
    $subject = "You have a message from your Mora Blog";

    $fields = array();
    $fields{"name"} = "Name";
    $fields{"email"} = "Email";
    $fields{"company"} = "Company";
    $fields{"select"} = "Select";
    $fields{"message"} = "Message";

    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
