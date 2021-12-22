<?php 

session_start();

$otp = $_SESSION['otp'];
$email = $_SESSION['email'];


if(isset($_POST['verify_otp']))
{
    $received_otp = $_POST['otp'];

    if($received_otp == $otp)
    {
        $sent = 1;
        $_SESSION['logged_in'] = "TRUE"; 
        echo "<script>" ;
       echo "alert('Welcome, Ashutosh')" ;
       echo "</script>" ;
        // api_log($received_otp, $sent);
        // exit;
      // header("location: profile.php");
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


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="/extra/otp.css"> 
</head>
<body>
  <section class="container-fluid bg">
    <section class="row justify-content-center">
      <section class="cont col-12 col-sm-6 col-md-3">
        <form class="form-container " method="POST">
          <div class="form-group mb-1">
            <label for="exampleInputEmail1" class="form-label">Enter OTP *</label>
            <input type="text" class="form-control mb-2" required id="exampleInputEmail1" name="otp" id="otp" aria-describedby="emailHelp">
          <div class="mb-1">
            <input type="submit" name="verify_otp" value="Verify OTP" class="btn btn-primary btn-block">
          </div>
        </form>
      </section>
    </section>
  </section>
</body>
</html>