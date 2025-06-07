<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Terms & Conditions</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
  	* {
      box-sizing: border-box;
    }
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 40px;
      background: #f4f4f4;
      color: #333;
    }
      header {
      background-color: #343a40;
      color: white;
      padding: 15px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      font-size: 20px;
      font-weight: bold;
    }

    .social-icons a {
      color: white;
      text-decoration: none;
      margin-left: 15px;
      font-size: 20px;
      transition: color 0.3s ease;
    }

    .social-icons a:hover {
      color: #0d6efd;
    }

    .container {
      max-width: 800px;
      margin: auto;
      background: #fff;
      padding: 30px 40px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    h1 {
      font-size: 32px;
      color: #444;
      margin-bottom: 20px;
    }

    h2 {
      color: #555;
      margin-top: 30px;
    }

    p {
      line-height: 1.7;
      margin-bottom: 15px;
    }

    footer {
      margin-top: 40px;
      font-size: 14px;
      color: #777;
      text-align: center;
    }
    @media (max-width: 600px) {
    	header {
        flex-direction: column;
        align-items: flex-start;
      }

      .social-icons {
        margin-top: 10px;
      }

      .container {
        padding: 15px;
      }

      h1 {
        font-size: 24px;
      }

      h2 {
        font-size: 18px;
      }

      p {
        font-size: 15px;
      }
    }
  </style>
</head>
<body>

<header> 
    <div class="logo">Fantasy Entertainment</div>
    <div class="social-icons">
      <a href="https://www.facebook.com/p/Fantasy-Entertainment-Inc-100075431481508/" target="_blank"><i class="fab fa-facebook-f"></i></a>
      <a href="https://www.instagram.com/fantasy.entertainment.eg" target="_blank"><i class="fab fa-instagram"></i></a>
      <a href="https://www.linkedin.com/company/fantasy-entertainment/about/" target="_blank"><i class="fab fa-linkedin-in"></i></i></a>
    </div>
  </header> 
  <br>
 <div class="container">
   <center> <h1>Terms And Conditions</h1></center>
 <?php
    // Load JSON file
$json = file_get_contents('update.json');

// Decode to associative array
$data = json_decode($json, true);
foreach ($data['terms'] as $term) {
     echo "<li>" . htmlspecialchars($term) . "</li><br>";
}
?>
 <footer>
      &copy; <?php echo date("Y"); ?> Fantasy Entertainment. All rights reserved.
    </footer>
   
  </div>
 <center><caption><a href="login">Login Here...</a></caption></center>
</body>
</html>