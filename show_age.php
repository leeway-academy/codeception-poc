<?php

$name = $_POST['name'];
$birthday = new DateTimeImmutable($_POST['birthday']);
$today = new DateTimeImmutable();

$age = $today->diff($birthday)->y;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CodeCeption POC</title>
</head>
<body>
<h1>Hi <?php echo $name; ?>! Welcome to this POC :)</h1>

<h2>Today you are <?php echo $age; ?> years old</h2>
<a href="index.html">Try again!</a>
</html>
