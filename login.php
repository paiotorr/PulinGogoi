<?php
session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // CHANGE THESE TO YOUR OWN
    $correct_user = "owner";
    $correct_pass = "1234";

    if ($username === $correct_user && $password === $correct_pass) {
        $_SESSION["owner_logged_in"] = true;
        header("Location: owner.php");
        exit();
    } else {
        $error = "Wrong username or password";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Owner Login</title>
<style>
body { font-family: Arial; background:#f2f2f2; display:flex; height:100vh; justify-content:center; align-items:center; }
.box { background:white; padding:30px; border-radius:8px; width:300px; box-shadow:0 0 10px rgba(0,0,0,0.1); }
input, button { width:100%; padding:10px; margin-top:10px; }
button { background:#007bff; color:white; border:none; cursor:pointer; }
.error { color:red; margin-top:10px; }
</style>
</head>
<body>

<div class="box">
<h2>Owner Login</h2>

<form method="post">
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit">Login</button>
</form>

<?php if ($error): ?>
<div class="error"><?php echo $error; ?></div>
<?php endif; ?>

</div>

</body>
</html>
