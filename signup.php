<?php
require "header.php";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Movie Library</title>
    <style>

    </style>
</head>
<body>
<div class="form">
    <form action="validateform.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="email" placeholder="Email address">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="password2" placeholder="Re-enter Password">
        <input type="submit" name="signup-button">
    </form>
</div>
</body>
</html>

<?php
require "footer.php";

?>