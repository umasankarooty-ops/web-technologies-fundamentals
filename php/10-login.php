<?php
session_start();
require __DIR__ . "/db.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"] ?? "");
    $password = $_POST["password"] ?? "";

    $stmt = $pdo->prepare(
        "SELECT id, username, password_hash FROM users WHERE username = ?"
    );
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user["password_hash"])) {
        session_regenerate_id(true);
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["username"] = $user["username"];

        echo "Login successful. Welcome, " .
            htmlspecialchars($user["username"], ENT_QUOTES, "UTF-8");
        exit;
    }

    $error = "Invalid username or password.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Demo</title>
</head>
<body>
    <h1>Login Demo</h1>
    <p><?= htmlspecialchars($error, ENT_QUOTES, "UTF-8") ?></p>

    <form method="POST">
        <label>Username:
            <input name="username" required autocomplete="username">
        </label>
        <br><br>

        <label>Password:
            <input type="password" name="password" required
                   autocomplete="current-password">
        </label>
        <br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
