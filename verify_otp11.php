<?php 

session_start();
// include("extra/connection.php");

$otp = $_SESSION['otp'];
$email = $_SESSION['email'];

if(isset($_POST['verify_otp']))
{
    $received_otp = $_POST['otp'];

    if($received_otp == $otp)
    {
        $sent = 1;
        $_SESSION['logged_in'] = "TRUE"; 
        api_log($received_otp, $sent);
        // exit;
      header("location: profile.php");
    }
    else
    {
        echo "<script>" ;
       echo "alert('Incorrect OTP')" ;
       echo "</script>" ;
       $sent = 0 ;
    //    api_log($received_otp, $sent);
    }
}

function api_log($otp, $status)
{
    // echo $sql = "INSERT into otp_log values ('', '$otp' , '$status', '$host', '$host') " ;
    // $host = $_SERVER['HTTP_HOST'];
    // $sql = mysqli_query($GLOBALS['db'], "INSERT into otp_log values ('', '$otp' , '$_SESSION['email']' ,'$status', '$host' ) ") ;
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
    <form action="" name="verify_otp" method="post" class="w3-form">
        <span class="w3-text">Enter OTP</span>
        <input type="text" name="otp" id="otp" class="w3-input">
        <br>
        <input type="text" name="mail" id="mail" value="<?php echo $_SESSION['email']; ?>" style="display: none;">
        <input type="submit" name="verify_otp" value="Verify" class="w3-btn">
    </form>
</body>
</html>