<!DOCTYPE html>
<link href="abc.css" rel="stylesheet">
<?php
include("head.php");
?>
<body>

<?php
include("header.php");
?>

<div class="main">
    <p class="signin" align="center">
        Sign in
    </p>
    <form class="form1">
        <input class="user" type="text" align="center" placeholder="Username">
        <input class="pass" type="password" align="center" placeholder="Password">
        <a class="submit" align="center">
            Sign in
        </a>
        <p class="forgot" align="center">
            Forgot Password? <a href="#">Click!</a>
        </p>
    </form>
</div>

<?php
include("footer.php");
?>

</body>
</html>