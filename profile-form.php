<?php

if (isset($_POST['complete_name'])):
    echo "<hr />";
    echo "<h1>Your Profile</h1>";
    echo "Full name: " . $_POST['complete_name'] . "<br>";
    echo 'Birthdate: ' . $_POST['birthdate'] . "<br>";
    echo 'Email: ' . $_POST['email'] . "<br>";
    echo 'Program: ' . $_POST['program'] . "<br>";
    echo 'Favorite Color: ' . $_POST['favorite_color'] . "<br>";
    echo 'Power Level: ' . $_POST['superpower_level'];
    echo "<hr />";

else:
?>

<h1>Enter Data</h1>
<form method="POST" action="profile-form.php">
Name: <input type="text" name="complete_name" /><br /><br />
Birthdate: <input type="date" name="birthdate" /><br /><br />
Email Address: <input type="email" name="email" /><br /><br />
Program:
<select name="program">
<option value="BSCS">B.S. Computer Science</option>
<option value="BSIT">B.S. Information Technology</option>
<option value="BSIS">B.S. Information Systems</option>
</select>
<br /><br />
Favorite Color: <input type="color" name="favorite_color" /><br /><br />
Superpower Level: <input type="range" name="superpower_level" min="1" max="1000000" step="5000" /><br /><br />
<button>Submit</button>
</form>

<?php
endif;
?>