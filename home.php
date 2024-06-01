<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sportin360</title>
    <link rel="stylesheet" href="assets/css/home.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    
</head>

<body>
    <header>
        <div class="header-left">
            <!-- <div class="logo"> -->
            <img src="./assets/img/logo.jpg" width="40px" height="40px" style="border-radius: 5rem;" alt="">
            <!-- </div> -->
            <nav>
                <ul>
                    <li>
                        <a href="./home.php" class="active">Home</a>
                    </li>
                    <li>
                        <a href="./events.php">Events</a>
                    </li>
                    <li>
                        <a href="./disease.php">Services</a>
                    </li>
                    <li>
                        <a href="./about.php">About</a>
                    </li>

                </ul>  <div class="login-signup">
                  <?php
                  // Start a PHP session
                  session_start();

                  // Check if a session is active
                  if (isset($_SESSION['username'])) {
                      // If a session is active, show the "Dashboard" link
                      echo '<a href="./dashboard.php">Dashboard</a>';
                  } else {
                      // If no session is active, show the "Login" and "Signup" links
                      echo '<a href="./login.php">Login</a> or <a href="./signup.php">Signup</a>';
                  }
                  ?>
              </div>
            </nav>
        </div>
        <div class="header-right">
            <div class="login-signup">
              <div class="login-signup">
                <?php
                // Check if a session is active
                if (isset($_SESSION['username'])) {
                    // If a session is active, show the "Dashboard" link
                    echo '<a href="./dashboard.php">Dashboard</a>';
                } else {
                    // If no session is active, show the "Login" and "Signup" links
                    echo '<a href="./login.php">Login</a> or <a href="./signup.php">Signup</a>';
                }
                ?>            </div>
            <div class="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </header>
    <section>
      <div class="projcard-container">
    
        <div class="projcard projcard-blue">
          <div class="projcard-innerbox">
            <img class="projcard-img" src="https://dornsife.usc.edu/news/wp-content/uploads/sites/7/2023/04/story-3499-768x432.jpg" />
            <div class="projcard-textbox">
              <div class="projcard-title">Event Details</div>
              <div class="projcard-subtitle">Participate in the awesome events.</div>
              <div class="projcard-bar"></div>
              <div class="projcard-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
              
              <div class="button">
                <a href="./events.php"><div class="btn btn-outline ">Events</div></a>
                <svg class="button" viewBox="0 0 132 46">
                  <path d="M22,5C12.2,5.3,4,13.1,4,23s8.2,17.8,18,18c9.9,0.2,78.2,0.3,88,0c9.8-0.3,18-8.1,18-18s-8.1-17.8-18-18
                  C100.1,4.8,31.9,4.7,22,5z"/>
                </svg>
              </div>
            </div>
          </div>
        </div>
        
        <div class="projcard projcard-red">
          <div class="projcard-innerbox">
            <img class="projcard-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2wigi6iCNRGumkisK8_bxh_VyJEX7-PpPRxUCPTdauqXVnG3jwF8CFUFPeC0cM5qu_VY&usqp=CAU" />
            <div class="projcard-textbox">
              <div class="projcard-title">Sports Clubs</div>
              <div class="projcard-subtitle">Join your nearest club now</div>
              <div class="projcard-bar"></div>
              <div class="projcard-description">This provides oppprtunity to the people interested in joining any club , association and team. They can grow together in a competitive environment and provide a platform to improve and find opportunities</div>
              <!-- <div class="projcard-tagbox">
                <span class="projcard-tag">PHP</span>
                <span class="projcard-tag">SQL</span>
                <span class="projcard-tag">Database</span>
              </div> -->
              <div class="button">
                <a href="./clubs.php"><div class="btn btn-outline ">Clubs</div></a>
                <svg class="button" viewBox="0 0 132 46">
                  <path d="M22,5C12.2,5.3,4,13.1,4,23s8.2,17.8,18,18c9.9,0.2,78.2,0.3,88,0c9.8-0.3,18-8.1,18-18s-8.1-17.8-18-18
                  C100.1,4.8,31.9,4.7,22,5z"/>
                </svg>
              </div>
            </div>
          </div>
        </div>
        
        <div class="projcard projcard-green">
          <div class="projcard-innerbox">
            <img class="projcard-img" src="https://images.thequint.com/thequint/2019-05/68f6007a-fdff-401f-84b4-c94c3c4b5fed/Screen_Shot_2019_05_04_at_5_23_12_pm.png?auto=format,compress&fmt=webp&format=webp&w=1200&h=900&dpr=1.0" />
            <div class="projcard-textbox">
              <div class="projcard-title">Stay Updated</div>
              <div class="projcard-subtitle">You know what this is by now</div>
              <div class="projcard-bar"></div>
              <div class="projcard-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</div>
              <!-- <div class="projcard-tagbox">
                <span class="projcard-tag">Excel</span>
                <span class="projcard-tag">VBA</span>
              </div> -->
              <div class="button">
                <a href="./news.php"><div class="btn btn-outline ">Sports News</div></a>
                <svg class="button" viewBox="0 0 132 46">
                  <path d="M22,5C12.2,5.3,4,13.1,4,23s8.2,17.8,18,18c9.9,0.2,78.2,0.3,88,0c9.8-0.3,18-8.1,18-18s-8.1-17.8-18-18
                  C100.1,4.8,31.9,4.7,22,5z"/>
                </svg>
              </div>
            </div>
          </div>
        </div>
        
        <div class="projcard projcard-customcolor" style="--projcard-color: #F5AF41;">
          <div class="projcard-innerbox">
            <img class="projcard-img" src="https://images.news18.com/ibnlive/uploads/2022/02/don-bradman-records.jpg" />
            <div class="projcard-textbox">
              <div class="projcard-title">History of Your Favorite Sports</div>
              <div class="projcard-subtitle">That's the last one. Have a nice day!</div>
              <div class="projcard-bar"></div>
              <div class="projcard-description">It is important to have knowledge about history of any sport , the legends of the game and their achievements.We need to take a look of how the sport has evolved over the years and how it continues to grow</div>
              <!-- <div class="projcard-tagbox">
                <span class="projcard-tag">iOS</span>
                <span class="projcard-tag">Android</span>
                <span class="projcard-tag">Cordova</span>
              </div> -->
              <div class="button">
                <a href="./history.php"><div class="btn btn-outline">History</div></a>
                <svg class="button" viewBox="0 0 132 46">
                  <path d="M22,5C12.2,5.3,4,13.1,4,23s8.2,17.8,18,18c9.9,0.2,78.2,0.3,88,0c9.8-0.3,18-8.1,18-18s-8.1-17.8-18-18
                  C100.1,4.8,31.9,4.7,22,5z"/>
                </svg>
              </div>
            </div>
          </div>
        </div>
    </section>
    <footer class="footer">
        <!-- Footer -->
        <footer class="bg-dark text-center text-white">
            <!-- Grid container -->
            <div class="container p-4">
                <section class="">
                    <form action="">
                        <!--Grid row-->
                        <div class="row d-flex justify-content-center">
                            <!--Grid column-->
                            <div class="col-auto">
                                <p class="pt-2">
                                    <!-- <strong>Sign up for our newsletter</strong> -->
                                </p>
                            </div>

                            <div class="col-md-5 col-12">
                                <!-- Email input -->
                                <div class="form-outline form-white mb-4">
                                    <input type="email" id="form5Example21" class="form-control" />
                                    <label class="form-label" for="form5Example21">Sign up for our newsletter</label>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-auto">
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-outline-light mb-4">
                                    Subscribe
                                </button>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->
                    </form>
                </section>
                <!-- Section: Form -->

                <!-- Section: Text -->
                <section class="mb-4">

                </section>
                <!-- Section: Text -->
            </div>
            <!-- Grid container -->
            <section class="mb-4 social-icons">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-2" href="#!" role="button">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-2" href="#!" role="button">
                    <i class="fab fa-twitter"></i>
                </a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-2" href="#!" role="button">
                    <i class="fab fa-google"></i>
                </a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-2" href="#!" role="button">
                    <i class="fab fa-github"></i>
                </a>
            </section>

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2023 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">Sportin360.com</a>
            </div>

            <!-- Copyright -->
        </footer>
        <!-- Footer -->
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
    </footer>
</body>
<script>
    hamburger = document.querySelector(".hamburger");
    nav = document.querySelector("nav");
    hamburger.onclick = function () {
        nav.classList.toggle("active");
    }
</script>
</body>

</html>