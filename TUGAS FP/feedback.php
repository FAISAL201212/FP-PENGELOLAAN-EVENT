<?php
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    // Simpan data atau tampilkan pesan sukses
    $message = "Thank you for your feedback, $name!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Give Feedback</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Give Feedback on Sintetis Coffee Live Music Event</h1>
        </header>

        <form method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="comment">Feedback:</label>
            <textarea id="comment" name="comment" required></textarea>

            <button type="submit">Submit Feedback</button>
        </form>

        <p><?php echo $message; ?></p>
        <a href="index.php">Back to Home</a>
    </div>
</body>
</html>
