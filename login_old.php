<?php 

include("navbar.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>Login</title>
</head>
<body>
    <div class="w3-container w3-padding">
        <div class="w3-card-2 w3-round w3-round-xxlarge" style="width: 50%; margin: auto; ">
            <form action="send_otp.php" name="otp_form" method="post" class="w3-form">
                <span class="w3-text" style="margin-left: 15px;  ">Email:</span>
                <input type="email" placeholder="Email" name="email" class="w3-input w3-border w3-round-xxlarge" style="width: 50%;">
                <br>
                <input type="submit" name="submit" value="Send OTP" class="w3-btn w3-padding w3-green w3-round" style="margin-left: 10px; margin-bottom:10px">
            </form>
        </div>
        
    </div>
</body>
</html>