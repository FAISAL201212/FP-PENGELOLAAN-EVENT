<?php
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Simpan data atau tampilkan pesan sukses
    $message = "Thank you for registering, $name!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for Event</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Register for Sintetis Coffee Live Music Event</h1>
        </header>

        <form method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <button type="submit">Register</button>
        </form>

        <p><?php echo $message; ?></p>
        <a href="index.php">Back to Home</a>
    </div>
</body>
</html>
