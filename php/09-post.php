<?php
header("Content-Type: text/html; charset=UTF-8");
$name = $_POST["username"] ?? "";
$email = $_POST["email"] ?? "";
$message = $_POST["message"] ?? "";
$course = $_POST["course"] ?? "";

echo "<h1>POST Request Demo</h1>";
echo "Name: " . htmlspecialchars($name, ENT_QUOTES, "UTF-8") . "<br>";
if ($email !== "") {
    echo "Email: " . htmlspecialchars($email, ENT_QUOTES, "UTF-8") . "<br>";
}
if ($course !== "") {
    echo "Course: " . htmlspecialchars($course, ENT_QUOTES, "UTF-8") . "<br>";
}
if ($message !== "") {
    echo "Message: " . nl2br(htmlspecialchars($message, ENT_QUOTES, "UTF-8"));
}
