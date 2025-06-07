<?php 

if(isset($_POST['button']))
{
  $uname = $_POST['username'];
  $password = $_POST['password'];
  if($uname=="admin" && $password=="fantasy")
  {
    ?>
    <script type="text/javascript">
      alert("Redirected to Update Page");
      window.location.href="update_terms_conditions.php";
    </script>
    <?php
  }
  else
  {
    ?>
    <script type="text/javascript">
       alert("Invalid Username Or Password");
    </script>
    <?php
  }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - Fantasy Entertainment</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #b2fefa, #0ed2f7);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-card {
      background-color: #ffffff;
      padding: 40px 30px;
      border-radius: 12px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
      max-width: 360px;
      width: 100%;
      text-align: center;
    }

    .login-card h2 {
      margin-bottom: 25px;
      font-weight: 600;
      color: #222;
    }

    .login-card input[type="text"],
    .login-card input[type="password"] {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 16px;
      outline: none;
      transition: border 0.3s;
    }

    .login-card input:focus {
      border-color: #0ed2f7;
    }

    .login-card button {
      width: 100%;
      background-color: #0ed2f7;
      color: white;
      border: none;
      padding: 12px;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      margin-top: 10px;
    }

    .login-card button:hover {
      background-color: #00bfe7;
    }

    .footer {
      margin-top: 15px;
      font-size: 13px;
      color: #666;
    }
  </style>
</head>
<body>
  <div class="login-card">
    <h2>Login</h2>
    <form action="" method="POST">
      <input type="text" name="username" placeholder="Username" required />
      <input type="password" name="password" placeholder="Password" required />
      <button type="submit" name="button">Log In</button>
    </form>
    <div class="footer">
     &copy; <?php echo date("Y"); ?> Fantasy Entertainment. All rights reserved.
    </div>
  </div>
</body>
</html>