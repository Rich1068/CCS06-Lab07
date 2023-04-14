<?php
require "vendor/autoload.php";
require "download.php";
// 4.

use App\QuestionManager;

$score = null;
$Ans = null;
try {
    $manager = new QuestionManager;
    $manager->initialize();
    if (!isset($_SESSION['answers'])) {
        throw new Exception('Missing answers');
    }
    $score = $manager->computeScore($_SESSION['answers']);
    $_SESSION['fanswer'] = [];
    $_SESSION['Score'] = $score;
    $_SESSION['Qnumber'] = $manager->getQuestionSize();
} catch (Exception $e) {
    
    echo '<h1>An error occurred:</h1>';
    echo '<p>' . $e->getMessage() . '</p>';
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz</title>
</head>
<body>

<h1>Thank You!</h1>

<h3>
    Congratulations <?php echo  $_SESSION['user_fullname'] . " (" . $_SESSION['user_email'] . ")"; ?>! <br>
    Score: <?php echo '<span style="color:blue;">' . $score . '</span>';?> out of <?php echo $manager->getQuestionSize();?> items<br>Your Answers: <br>
    <?php $Ans = $manager->showAnswer($_SESSION['answers']);?></h3><br>
    
    <form action = "result.php" method = "POST">
    <input type="submit" value="Click here to download the results." name="download">
    </form>
    
</body>
</html>

<!-- DEBUG MODE -->
<pre>
<?php
var_dump($_SESSION);
?>
</pre>