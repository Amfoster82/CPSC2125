<?php
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$gender = htmlspecialchars($_POST['gender']);
$color = htmlspecialchars($_POST['color']);
$message = htmlspecialchars($_POST['message']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Submitted Data</title>
</head>
<body>
<h1>Submitted Data</h1>
<p><strong>Name:</strong> <?php echo $name; ?></p>
<p><strong>Email:</strong> <?php echo $email; ?></p>
<p><strong>Gender:</strong> <?php echo $gender; ?></p>
<p><strong>Favorite Color:</strong> <?php echo $color; ?></p>
<p><strong>Message:</strong> <?php echo nl2br($message); ?></p>
<a href="index.html">Go back</a>
</body>
</html>
