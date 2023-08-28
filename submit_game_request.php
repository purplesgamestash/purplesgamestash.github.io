<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gameName = $_POST["gameName"];
    $gameDescription = $_POST["gameLocation"];

    // Replace the following lines with your desired action (e.g., save to a database, send an email, etc.)
    // For this example, we'll send an email notification.
    $to = "jakearcher28@gmail.com"; // Change to your email address
    $subject = "New Game Request: $gameName";
    $message = "Game Name: $gameName\n\nDescription: $gameLocation;

    if (mail($to, $subject, $message, $headers)) {
        echo "<h2>Thank you for your game request!</h2>";
        echo "<p>We have received your request and will review it shortly.</p>";
    } else {
        echo "<h2>Error submitting request</h2>";
    }
} else {
    header("Location: request_game.html"); // Redirect users who access this page directly without submitting the form
    exit;
}
?>
