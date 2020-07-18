<?php

$firstName = $_POST['firstName'];
$birthday = new DateTimeImmutable($_POST['birthday']);

require_once 'AgeCalculator.php';

$c = new AgeCalculator(new DateTimeImmutable());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CodeCeption POC</title>
</head>
<body>
<h1>Hi <?php echo $firstName; ?>! Welcome to this POC :)</h1>

<h2>Today you are <?php echo $c->getAge($birthday); ?> years old</h2>
<a href="index.html">Try again!</a>
</html>
