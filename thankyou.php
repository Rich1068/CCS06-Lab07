<?php

if (isset($_POST['complete_name'])):
    echo "<h1>Thank You!</h1>";
    echo "Received " . $_POST['type'] . " message from " . $_POST['complete_name'] . "(" . $_POST['email'] . ")". "<br><br>";
    echo $_POST['message'] . "<br><br>";
    echo "Satisfaction Level: " . $_POST['satisfaction_level']; 
else:
    endif; 
?>