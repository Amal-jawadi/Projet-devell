<?php
   
   if (isset($_POST) && $_POST){
    include_once("connect.php");
    
    $sql = "SELECT `email`,'password' FROM `user` WHERE `email` = '" . $_POST['email']. "' and `password` = '" . $_POST['password'] . "';";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) == 0){
        echo "User not found: Check your credentail";
    }else{
        $user = mysqli_fetch_assoc($result);

        session_start();
        // Set session variables
       
        $_SESSION["email"] = $user['email'];
        $_SESSION["password"] = $user['password'];

        header('Location: /Site-Opticien/index.php');
        die;
    }
    $conn->close();
}
        
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Jawadi Optique</title>
  <link rel="icon" href="logo22.png" type="image/icon type">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">

</head>
<style>
.footer-basic {
  padding:40px 0;
  background-color:#ffffff;
  color:#004AAD;
}

.footer-basic ul {
  padding:0;
  list-style:none;
  text-align:center;
  font-size:18px;
  line-height:1.6;
  margin-bottom:0;
}

.footer-basic li {
  padding:0 10px;
}

.footer-basic ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.8;
}

.footer-basic ul a:hover {
  opacity:1;
}

.footer-basic .social {
  text-align:center;
  padding-bottom:25px;
}

.footer-basic .social > a {
  font-size:24px;
  width:40px;
  height:40px;
  line-height:40px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  border:1px solid #004AAD;
  margin:0 8px;
  color:inherit;
  opacity:0.75;
}

.footer-basic .social > a:hover {
  opacity:0.9;
}

.footer-basic .copyright {text-align:center;
  font-size:13px;
  color:#004AAD;
  margin-bottom:0;
}
/* Bordered form */
form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 20px 0 9px 0;
}
</style>
<body> 
<nav class="navbar navbar-expand-sm bg-light grey navbar-light grey">
      <div class="container-fluid">
        <img src="logo22.png" alt="Logo" style="width:90px;">
       
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/Site-Opticien/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/Site-Opticien/log%20in.php">Log In</a>
            </li>
        
           <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown">Glasses</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="http://localhost/Site-Opticien/femme%20lunettes.php">Women</a></li>
                <li><a class="dropdown-item" href="http://localhost/Site-Opticien/homme%20lunettes.php">Man</a></li>
                <li><a class="dropdown-item" href="http://localhost/Site-Opticien/kids%20lunettes.php">Kids</a></li>
              </ul> 
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown">Sunglasses</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="http://localhost/Site-Opticien/sun%20femme.php#">women</a></li>
                  <li><a class="dropdown-item" href="http://localhost/Site-Opticien/sun%20homme.php#">Man</a></li>
                  <li><a class="dropdown-item" href="http://localhost/Site-Opticien/sun%20kids.php#">Kids</a></li>
                </ul> 
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/Site-Opticien/marque.php#">Marques</a>
                  </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
     <!-- Section: Design Block -->
     <form action="kk.php" method="post">
    <div class="imgcontainer">
    <img src="hh.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Enter email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
    
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

    </div>
                  </div>
                </div>

              <!-- Section: Design Block -->
              <div class="footer-basic">
                <footer>
                    <div class="social"><a href="https://www.snapchat.com/fr-FR"><i class="icon ion-social-snapchat"></i></a><a href="https://twitter.com/?lang=fr"><i class="icon ion-social-twitter"></i></a><a href="https://www.facebook.com/"><i class="icon ion-social-facebook"></i></a></div>
                    <ul class="list-inline">
                    <li class="list-inline-item"><a href="http://localhost/Site-Opticien/index.php">Home</a></li>
            <li class="list-inline-item"><a href="http://localhost/Site-Opticien/log%20in.php">Log In</a></li>
            <li class="list-inline-item"><a href="http://localhost/Site-Opticien/about.php">About</a></li>
                    </ul>
                    <p class="copyright">Jawadi EyeWear © 2023</p>
                </footer>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
            </body>
            </html>
            