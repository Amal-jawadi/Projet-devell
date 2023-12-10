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

/* CSS for main section */
.intro {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 520px;
  background: linear-gradient(to bottom, rgba(140, 160, 201, 0.5) 0%, rgba(140, 160, 201, 0.5) 100%), url("97802cd5d9ce67dc189d9d72ec1db7d3.jpg");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

.intro h1 {
  font-family: sans-serif;
  font-size: 60px;
  color: #fff;
  font-weight: bold;
  text-transform: uppercase;
  margin: 0;
}

.intro p {
  font-size: 20px;
  color:#5e60f0 ;
  text-transform: uppercase;
  margin: 20px 0;
}

.intro button {
  background-color: #5edaf0;
  color: #36188353;
  padding: 10px 25px;
  border: none;
  border-radius: 5px;
  font-size: 20px;
  font-weight: bold;
  cursor: pointer;
  box-shadow: 0px 0px 20px rgb(209, 201, 201)
}
.achievements {
  display: flex;
  justify-content: space-around;
  align-items: center;
  padding: 40px 80px;
}

.achievements .work {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 0 40px;
}
.achievements .work .work-heading {
  font-size: 20px;
  color:#44546a;
  text-transform: uppercase;
  margin: 5px 0;
}

.achievements .work .work-text {
  font-size: 25px;
  color: #968fe6;
  margin: 5px 0;
}
  </style>
  <body>
    <nav>
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
                    <a class="nav-link" href="#">Marques</a>
                  </li>
            </li>
          </ul>
        </div>
        </div>
    </nav>
    <main>
      <div class="intro">
        <h1>Jawadi Eyewear</h1>
        <p> Our optical center, we want to be close to you and best meet your needs. In all regions of Tunisia, we open the door of our stores to you  .</p>
        <button>Learn More</button>
      </div>
      <div class="achievements">
        <div class="work">
          <i class="fas fa-atom"></i>
          <p class="work-heading">Projects</p>
          <p class="work-text">We are working with a lots of successful partners like Chanel, Christian Dior,Gucci.</p>
        </div>
        <div class="work">
          <i class="fas fa-skiing"></i>
          <p class="work-heading">Skills</p>
          <p class="work-text">we have a lot of skills and we are very good at them.Like precise lens fitting and adjustments also prescription glasses and contact lenses.</p>
        </div>
      </div>
      </div>
    </main>
   
  <div class="footer-basic">
    <footer>
        <div class="social"><a href="https://www.snapchat.com/fr-FR"><i class="icon ion-social-snapchat"></i></a><a href="https://twitter.com/?lang=fr"><i class="icon ion-social-twitter"></i></a><a href="https://www.facebook.com/"><i class="icon ion-social-facebook"></i></a></div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="file:///C:/Users/lenovo/Desktop/Projet%20mini%20projet/HOME.html">Home</a></li>
            <li class="list-inline-item"><a href="file:///C:/Users/lenovo/Desktop/Projet%20mini%20projet/femme.html">Services</a></li>
            <li class="list-inline-item"><a href="file:///C:/Users/lenovo/Desktop/Projet%20mini%20projet/Log%20in1.html?">About</a></li>
        </ul>
        <p class="copyright">Jawadi EyeWear © 2023</p>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

</body>
</html>



   











