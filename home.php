<?php

// Use null coalescing (??) and sanitize output to prevent errors and XSS
$fullname  = htmlspecialchars($_POST['fullname'] ?? '');
$birthdate = htmlspecialchars($_POST['birthdate'] ?? '');
$number    = htmlspecialchars($_POST['number'] ?? '');
$gender    = htmlspecialchars($_POST['gender'] ?? '');
$email     = htmlspecialchars($_POST['myEmail'] ?? '');    // Matches name="myEmail"
$password  = htmlspecialchars($_POST['myPassword'] ?? ''); // Matches name="myPassword"
$status    = htmlspecialchars($_POST['status'] ?? '');
$terms     = isset($_POST['terms']) ? 'Accepted' : 'Not Accepted';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/sheenastyle.css">
</head>

<body>

    <div class="container">
        <h2 class="title">WELCOME!</h2>

        <p>Name: <?php echo $fullname; ?></p>
        <p>Birthdate: <?php echo $birthdate; ?></p>
        <p>Number: <?php echo $number; ?></p>
        <p>Gender: <?php echo $gender; ?></p>
        <p>Email: <?php echo $email; ?></p>
        <p>Password: <?php echo $password; ?></p>
        <p>Status: <?php echo $status; ?></p>
        <p>Terms: <?php echo $terms; ?></p>

        <a href="index.php">Back</a>
    </div>

</body>
</html>