<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login_form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="/extra/login.css"> 
</head>
<body>
  <section class="container-fluid bg" id="form">
    <section class="justify-content-center">
        <form class="form-container" method="POST" name="otp_form" action="send_otp.php">
          <div class="form-group mb-1">
            <label  class="form-label">Email address *</label>
            <input type="email" class="form-control" required name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
          <div class="mb-1">
            <input type="submit" class="btn btn-primary btn-block" name="submit" value="Send OTP">
          </div>
        </form>
    </section>
  </section>
</body>
</html>