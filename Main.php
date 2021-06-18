<?php include("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>PFN page</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="untitled.css">
  <link rel="stylesheet" href="mobile.css">
</head>
<body>
  <header>
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-align-right text-light"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mr-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a href="Main.php" class="nav-link" >HOME
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="section1.php" class="nav-link" >ABOUT</a>
            </li>
            <li class="nav-item">
              <a href="section2.php" class="nav-link" >ADVANTAGES</a>
            </li>
            <li class="nav-item dropdown">
              <div class="dropdown">
                <a href="section3.php" class="nav-link">CONTACTS</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="section4.php">OUR APP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="order2.php">ORDER</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="track.php">TRACK</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="section5.php">BONUSES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Profile.php">
              <?php 
              if(isset($loggedin_session)){
                echo "MY PROFILE - ".$loggedin_session;
              }
              else {
                echo "PROFILE";
              }
              ?>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="login.php">
              <?php 
              if(isset($loggedin_session)){
                echo $loggedin_session;
              }
              else {
                echo "LOGIN";
              }
              ?>
              </a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="logout.php">LOG OUT</a>
            </li>
          </ul>
        </div>
      </nav>
      
    </div>
    <div class="container text-center">
      <div class="row">
        <div class="col-md-7 col-sm-12  text-white">
       
          <h1>You have the right to send everything! <p>Mail of Kazakhstan</p> </h1>
     
          <a href="new_order.php" class="btn btn-primary" style="width: 40%;"><h2>Create Order</h2></a>
          <p></p>
          <div style="width: 50%; margin-left: 25%;" class="input-group mb-3">
          <div class="input-group-prepend">
            <form action="track_page.php" method="post">
              <span class="input-group-text" id="inputGroup-sizing-default">TRACK :</span>
          </div>
              <input  type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="track">
              <input type="submit" name="submit"> 
            </form>
          </div>
        </div>
        <div class="col-md-5 col-sm-12  h-25">
          <br>
          <br>
          <video autoplay muted loop  width="550" height="400">
            <source src="gifs/vid3.mp4" type="video/mp4" >
          </video>
        </div>
      </div>
    </div>
  </header>
  <main>
    <section class="section-1">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-6 col-12">
            <div class="pray">
              <video autoplay muted loop  width="550" height="400">
            <source src="gifs/vid2.mp4" type="video/mp4" >
          </video>
            </div>
          </div>
          <div class="col-md-6 col-12">
           
              <h1>About Company</h1>
              <p class="pt-4">
               <li>Express delivery of documents, parcels and cargo to any point of Kazakhstan at favorable rates and in the shortest possible time.</li>
               <li>Transportation of heavy and bulky cargo in Kazakhstan and the countries of the near and far abroad.</li>
               <li>A complete solution for the delivery of goods to customers for online stores and remote trading companies</li>
               <li>International delivery of documents, parcels, and cargo, including heavy, prefabricated, and oversized cargo.</li>
               <li>Special rates for corporate clients.</li>
              </p>
             
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-2 container-fluid p-0">
      <div class="cover">
        <div class="overlay"></div>
        <div class="content text-center">
          <h1 style="color: cyan">Our advantages</h1>
          <p>
            You choose the type of delivery and you can get additional bonuses
          </p>
        </div>
      </div>
      <div class="container-fluid text-center">
        <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
          <div class="rect">
            <h1>100</h1>
            <p>Department throughout the KZ</p>
          </div>
          <div class="rect">
            <h1>452</h1>
            <p>Already tried</p>
          </div>
          <div class="rect">
            <h1>74</h1>
            <p>Request transport</p>
          </div>
          <div class="rect">
            <h1>1023</h1>
            <p>Visitors</p>
          </div>
        </div>
      </div>


      <div class="purchase text-center">
        <h1>We are in all possible contacts</h1>
        <p>
         Choose anyone
        </p>
        <div class="cards">
          <div class="d-flex flex-row justify-content-center flex-wrap">
            <div class="card">
              <div class="card-body">
                <div class="title">
                  <h5 class="card-title">E-mail</h5>
                </div>
                <p class="card-text">
                 Write here on cooperation
                </p>
                <div class="pricing">
                  <img src="uploads/phone1.jpg" style="width: 100%; height: 100%">
                  <br><br>
                  <a href="#" class="btn btn-danger px-5 py-2 primary-btn mb-5">Get contact</a>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="title">
                  <h5 class="card-title">Single number</h5>
                </div>
                <p class="card-text">
                  Operators are always ready
                </p>
                <div class="pricing">
                  <img src="uploads/phone2.jpg" style="width: 100%; height: 100%">
                  <br><br>
                  <a href="#" class="btn btn-danger px-5 py-2 primary-btn mb-5">Get contact</a>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="title">
                  <h5 class="card-title">Social networks</h5>
                </div>
                <p class="card-text">
                  Follow us
                </p>
                <div class="pricing">
                  <img src="uploads/socialm.jpg" style="width: 100%; height: 100%">
                  <br><br>
                  <a href="#" class="btn btn-danger px-5 py-2 primary-btn mb-5">Get contact</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-3 container-fluid p-0 text-center">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <h1>Soon Download Our App </h1>
          <p>
            It's confortable to use
          </p>
        </div>
      </div>
      <div class="platform row">
        <div class="col-md-6 col-sm-12 text-right">
          <div class="desktop shadow-lg">
            <div class="d-flex flex-row justify-content-center">
              <i class="fas fa-desktop fa-3x py-2 pr-3"></i>
              <div class="text text-left">
                <h3 class="pt-1 m-0">Desktop</h3>
                <p class="p-0 m-0">On website</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 text-left">
          <div class="desktop shadow-lg">
            <div class="d-flex flex-row justify-content-center">
              <i class="fas fa-mobile-alt fa-3x py-2 pr-3"></i>
              <div class="text text-left">
                <h3 class="pt-1 m-0">On Mobile</h3>
                <p class="p-0 m-0">On Play Store</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 4 -->
    <section class="section-4">
      <div class="container text-center">
        <h1 class="text-dark">Our service also has various bonuses for certain achievements</h1>
        <p class="text-secondary">Bonuses! Bonuses! Bonuses!</p>
      </div>
      <div class="team row ">
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="../assets/UI-face-3.jpg" class="img-fluid border-radius p-4" alt="">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Own merch</h3>
                  <img src="uploads/logomini.jpg" style="width: 90%; height: 80%">
                  <a href="#" class="text-secondary text-decoration-none">PFN</a>
                  <p class="text-black-50">The best of the best</p>
                </div>
              </div>
        </div>
        <div class="col-md-4 col-12">
            <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                <div class="carousel-inner text-center">
                  <div class="carousel-item active">
                    <div class="card mr-2 d-inline-block shadow">
                      <div class="card-img-top">
                        <img src="../assets/UI-face-1.jpg" class="img-fluid rounded-circle w-50 p-4" alt="">
                      </div>
                      <div class="card-body">
                        <h3 class="card-title">T-shirt</h3>
                        <img src="uploads/t-shirt.jpg" style="width: 100%; height: 100%">
                        <a href="#" class="text-secondary text-decoration-none">PFN</a>
                        <p class="text-black-50">Always on style</p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card  d-inline-block mr-2 shadow">
                      <div class="card-img-top">
                        <img src="../assets/UI-face-2.jpg" class="img-fluid rounded-circle w-50 p-4" alt="">
                      </div>
                      <div class="card-body">
                        <h3 class="card-title">Different</h3>
                       <img src="uploads/bonus.jpg" style="width: 100%; height: 100%">
                        <a href="#" class="text-secondary text-decoration-none">PFN</a>
                        <p class="text-black-50">Easy to get</p>
                      </div>
                    </div>
                  </div>
              </div>
        </div>
        </div>
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="../assets/UI-face-4.jpg" class="img-fluid border-radius p-4" alt="">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Stickers</h3>
                  <img src="uploads/mail.jpg" style="width: 100%; height: 100%">
                        <a href="#" class="text-secondary text-decoration-none">PFN</a>
                        <p class="text-black-50">Give a friend</p>
                </div>
              </div>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <div class="container-fluid p-0">
      <div class="row text-left">
        <div class="col-md-5 col-sm-5">
          <h4 class="text-light">About us</h4>
          <p class="text-muted">We are working from 2021</p>
          <p class="pt-4 text-muted">Copyright ©2021 All rights reserved || This website is made by      
           <br> 
           <span> Sadykov Madikhan || Back-end develepor</span>
           <br>
           <span> Erkanat Abdul-Madi || Front-end develepor</span>
           <br>
           <span> Ayazhan Sydyk || Front-end develepor</span>
         </p>
        </div>
        <div class="col-md-5 col-sm-12">
          <h4 class="text-light">News</h4>
          <p class="text-muted">Stay Updated</p>
          <form class="form-inline">
            <div class="col pl-0">
              <div class="input-group pr-5">
                <input type="text" class="form-control bg-dark text-white" id="inlineFormInputGroupUsername2" placeholder="Email">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-2 col-sm-12">
          <h4 class="text-light">Follow Us</h4>
          <p class="text-muted">Contact us</p>
          <div class="column text-light">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
           
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="Untitled-1.js"></script>
</body>

</html>