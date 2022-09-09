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
        Sign Up
    </p>
    <form class="form1">
        <input class="user" type="text" align="center" placeholder="Username">
        <input class="pass" type="password" align="center" placeholder="Password">
        <a class="submit" align="center">
            Sign Up
        </a>
        <p class="forgot" align="center">
            Already have an <a href="login.php">account?</a>
        </p>
    </form>
</div>

<?php
include("footer.php");
?>

</body>
</html>