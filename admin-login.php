<?php
// admin-login.php
session_start();

$adminID = "admin123";
$adminPass = "bsic@2025";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['admin_id'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($id === $adminID && $password === $adminPass) {
        $_SESSION['admin'] = true;
        header("Location: admin-dashboard.php");
        exit();
    } else {
        $error = "गलत आईडी या पासवर्ड";
    }
}
?>

<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="UTF-8">
  <title>Admin Login - बी एस इंटर कॉलेज</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: linear-gradient(to right, #004080, #0066cc);
      font-family: 'Segoe UI', sans-serif;
    }
    .login-box {
      background-color: white;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 400px;
    }
    .login-box h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #004080;
    }
    .login-box input[type="text"],
    .login-box input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .login-box button {
      width: 100%;
      padding: 10px;
      background-color: #004080;
      color: white;
      border: none;
      border-radius: 5px;
      font-weight: bold;
    }
    .error {
      color: red;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Admin Login</h2>
    <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
    <form method="post">
      <input type="text" name="admin_id" placeholder="Admin ID" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">लॉगिन करें</button>
    </form>
  </div>
</body>
</html>
