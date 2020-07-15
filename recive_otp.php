<?php
    session_start();
?>
<html>
    <head>
        <title>Receive OTP</title>
    </head>
    <body>
        <form action = "recive_otp.php" method = "post">
            <input type = "number" name = "otp"><br>
            <input type = "submit" name = "verify" value = "verify"><br>
        </form>
    </body>
</html>
<?php
if(isset($_POST['verify']))
{
    $otp = $_POST['otp'];
    if($otp == $_SESSION['otp'])
        echo "<html><head><script>alert('Verified!');</script><head><html>";
    else
        echo "<html><head><script>alert('Invalid!');</script><head><html>";
    $_SESSION['otp'];
}
?>