<?php
include_once("connect.php");
$sql = "SELECT * FROM sunhomme";
$result = $conn->query($sql);

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
</head>
<body>
  <style>
    h1 {
  text-align: center;
  font-size: 70px;
  background-color: rgb(155, 134, 134);
}       
p {
  text-align: center;
  font-size: 20px;
  color: #5e60f0;
}     
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
.footer-basic {
  padding:40px 0;
  background-color:#ffffff;
  color:hwb(213 62% 7% / 0.8);
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
  border:1px solid hwb(213 62% 7% / 0.8);
  margin:0 8px;
  color:inherit;
  opacity:0.75;
}

.footer-basic .social > a:hover {
  opacity:0.9;
}

.footer-basic .copyright {text-align:center;
  font-size:13px;
  color:hwb(213 62% 7% / 0.8);
  margin-bottom:0;
}


  </style>
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
    <?php 
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) { ?>
        <div class="responsive">
          <div class="gallery">
            <img src="<?php echo $row["img"] ?>" alt="Cinque Terre">
              <div class="desc">
                <p><?php echo $row["nom"] ?></p>
                <p><?php echo $row["prix"] ?>dt</p>
              </div>
          </div>
        </div>
        <?php    }
      } else {
        echo "0 results";
      }
      $conn->close();
    ?>

      <div class="clearfix"></div>
   
      <div class="clearfix"></div>
   
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



   




