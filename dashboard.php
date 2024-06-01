<?php

session_start();
  if (!isset($_SESSION["username"]))
   {
      header("location: index.php");
   }

?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/dashboard.css" />
    <title>Dashboard</title>
</head>

<body>
    <?php if($_GET['logout']==1){ session_destroy(); 
    
        echo '<script>
                window.location.replace("./index.php");
				</script>';  } ?>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>SPORTIN360</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>EVENTS</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Analytics</a>
                <a href="./datadash.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paperclip me-2"></i>Reports</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>Store Mng</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-gift me-2"></i>Products</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-comment-dots me-2"></i>Chat</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2"></i>Outlet</a>
                <a href="https://s.currentechz.com/dashboard.php?logout=1" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0"><?php print_r($_SESSION['fname']);?>'s Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Player
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="https://s.currentechz.com/dashboard.php?logout=1">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">10</h3>
                                <p class="fs-5">Events</p>
                            </div>
                            <i class="fa fa-calendar fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">20</h3>
                                <p class="fs-5">WishList</p>
                            </div>
                            <i
                                class="fas fa-heart fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">20</h3>
                                <p class="fs-5">Trophies</p>
                            </div>
                            <i class="fas fa-trophy fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">5</h3>
                                <p class="fs-5">Clubs</p>
                            </div>
                            <i class="fas fa-home fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Ongoing Event</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Event</th>
                                    <th scope="col">Registered Player</th>
                                    <th scope="col">State</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Cricket</td>
                                    <td>Jonny</td>
                                    <td>Maharastra</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Football</td>
                                    <td>Kenny</td>
                                    <td>West Bengal</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Badminton</td>
                                    <td>Jenny</td>
                                    <td>Delhi</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Hockey</td>
                                    <td>Killy</td>
                                    <td>Odisha</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Tennis</td>
                                    <td>Filly</td>
                                    <td>UP</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Chess</td>
                                    <td>Bumbo</td>
                                    <td>Tamil Nadu</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Kabaddi</td>
                                    <td>Bilbo</td>
                                    <td>Bihar</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Volley Ball</td>
                                    <td>Frodo</td>
                                    <td>Gujarat</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Basket Ball</td>
                                    <td>Kimo</td>
                                    <td>Telengana</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>Javelin</td>
                                    <td>Zico</td>
                                    <td>Assam</td>
                               
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>