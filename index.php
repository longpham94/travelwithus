<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        p.solid {
            border-style: solid;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }
    </style>
    <style>
        iframe {
            width: 800px;
            /* It should not be 100% */
            height: 800px;
            margin-left: 0 auto;
            /* Automatic margin from left */
            margin-right: 0 auto;
            /* Automatic margin from right */
            z-index: -1;
        }

        div.center-a {
            text-align: center;
        }
    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Travel With Us</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!--User Edit-->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="css/customize.css" rel="stylesheet">
    <link href="css/table.css" rel="stylesheet">
    <link href="https://www.malot.fr/bootstrap-datetimepicker/bootstrap-datetimepicker/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <link href="./css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <link rel="icon" href="img/travel/beach.png">

    <!--User Edit-->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="css/customize.css" rel="stylesheet">
    <link href="css/table.css" rel="stylesheet">
    <link href="css/image.css" rel="stylesheet">
    <link href="https://www.malot.fr/bootstrap-datetimepicker/bootstrap-datetimepicker/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <link href="./css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">


</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Travel With Us</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1">
                        <?php session_start();
                        if (isset($_SESSION['username'])) {
                            echo '<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="./php/destroy.php">Sign
              Out</a>';
                            echo '<li class="nav-item mx-0 mx-lg-1">';
                            echo '<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-toggle="modal" data-target="#myTripModal" onClick="closeTripModal(); ">Create Trip</a>';
                            echo '</li>';
                        } else {
                            echo '<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-toggle="modal"
              data-target="#myModal">Sign
              In</a>';
                        }

                        ?>
                    </li>

                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
                    </li>
                    <?php 
                    if (isset($_SESSION['username'])) {
                        echo '<li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" style="font-size: 16px;">Welcome ' . $_SESSION["username"] . '</a>
                      </li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class=" bg-primary  text-center text-white">
        <div class="container-fluid" style="background-image: url('img/travel/background3.jpg');">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="img-fluid mb-5 d-block mx-auto" src="img/travel/phu_quoc.jpg" alt="Los Angeles" width="1100" height="500" style="margin-top: 160px;">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid mb-5 d-block mx-auto" src="img/travel/da_lat.jpg" alt="Chicago" width="1100" height="500" style="margin-top: 160px;">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid mb-5 d-block mx-auto" src="img/travel/nha_trang.jpg" alt="New York" width="1100" height="500" style="margin-top: 160px;">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
            <h1 class="text-uppercase mb-0">Travel With Us</h1>
            <hr class="star-light">
            <h2 class="font-weight-light mb-0" style="padding-bottom: 40px;">Create new trips - Enjoy with new friends</h2>
        </div>
    </header>

    <!-- My Trip Section -->
    <!-- Portfolio Grid Section -->
    <?php
    if (isset($_SESSION['username'])) {
        echo '<section class="mytrip" id="mytrip" style="display: block">';
    } else {
        echo '<section class="mytrip" id="mytrip" style="display: none">';
    }
    ?>
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">My Trips</h2>
        <hr class="star-dark mb-5">
        <div class="row">
            <!-- Trip Table-->
            <table class="table table-bordered my-trip-table">
                <thead>
                    <tr>
                        <th class="text-center">Trip Name</th>
                        <th class="text-center">Place</th>
                        <th class="text-center">Start Date</th>
                        <th class="text-center">End Date</th>
                        <th class="text-center">Members</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <?php 
                require_once('php/readData.php');
                if (isset($_SESSION['username'])) {
                    $trips_item = "<tbody>";
                    $dbc=mysqli_connect(readData("host"),readData("username"),readData("password"),readData("table")) or die("Cannot connect to Database ");
                    $query = "SELECT title,place,start_date,end_date,members,id FROM trips WHERE uid=" . $_SESSION['uid'];
                    $results = mysqli_query($dbc, $query);
                    if (mysqli_num_rows($results) != 0) {
                        while ($obj = $results->fetch_object()) {
                            $trips_item .= <<<EOT
                <tr>
                  <td>{$obj->title}</td>
                  <td class="text-center">{$obj->place}</td>
                  <td class="text-center">{$obj->start_date}</td>
                  <td class="text-center">{$obj->end_date}</td>
                  <td class="text-center">{$obj->members}</td>
                  <td class="text-center"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delTripModal" onClick="delTrip('{$obj->title}','{$obj->id}')" title="Delete"><img src="icon/x-2x.png"></button> 
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myTripModal" onClick="editTrip('{$obj->id}','{$obj->title}','{$obj->place}','{$obj->start_date}','{$obj->end_date}','{$obj->members}' )" title="Edit"><img src="icon/pencil-2x.png"></button>
                  <!-- Long add button to open iframe -->
                  <button class="btn btn-warning portfolio-item mx-auto" title="Todo List" id="addTodo" onclick="addTodo({$obj->id})" href="#iframeModal">
                      <img src="icon/info-2x.png">
                  </button>
                  <!-- Long add button to open iframe: END -->
                  </td>
                </tr>
EOT;
                        }
                        echo $trips_item;
                    } else {
                        echo '<tr>
              <td align="center" colspan="6">
                <a href="#" data-toggle="modal" data-target="#myTripModal" onClick="closeTripModal();">
                  <b>Create A New Trip</b>
                </a>
              </td>
            </tr>';
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio" style="background-image: url('img/travel/background2.jpg');">
        <div class="container">
            <h2 class="text-center text-uppercase text-secondary mb-0">WHERE TO GO?</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
                        <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                <p>ISLAND<p>
                                        <i class="fas fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class=" img-where" src="img/travel/phu_quoc.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
                        <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                <p>FLOWER FIELD<p>
                                        <i class="fas fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class=" img-where" src="img/travel/da_lat.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
                        <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                <p>BEACH<p>
                                        <i class="fas fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class=" img-where" src="img/travel/nha_trang.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4">
                        <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                <p>CULTRURE<p>
                                        <i class="fas fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class=" img-where" src="img/travel/tay_bac.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5">
                        <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                <p>MOUNTAIN<p>
                                        <i class="fas fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class=" img-where" src="img/travel/mountain.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-6">
                        <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                <p>ANIMAL<p>
                                        <i class="fas fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class=" img-where" src="img/travel/animal.jpg" alt="">
                    </a>
                </div>
            </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2 class="text-center text-uppercase text-secondary mb-0">Contact Me</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Name</label>
                                <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Email Address</label>
                                <input class="form-control" id="contactEmail" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Phone Number</label>
                                <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Message</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
                        </div>
                    </form>
                </div>
    </section>
    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>Copyright &copy; Your Website 2019</small>
        </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
        <div class="portfolio-modal-dialog bg-white">
            <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
            </a>
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
                        <hr class="star-dark mb-5">
                        <img class="img-fluid mb-5" src="img/travel/phu_quoc.jpg" alt="">
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam
                            nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit
                            soluta, eos quod consequuntur itaque. Nam.</p>
                        <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                            <i class="fa fa-close"></i>
                            Close Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
        <div class="portfolio-modal-dialog bg-white">
            <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
            </a>
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
                        <hr class="star-dark mb-5">
                        <img class="img-fluid mb-5" src="img/travel/da_lat.jpg" alt="">
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam
                            nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit
                            soluta, eos quod consequuntur itaque. Nam.</p>
                        <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                            <i class="fa fa-close"></i>
                            Close Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
        <div class="portfolio-modal-dialog bg-white">
            <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
            </a>
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
                        <hr class="star-dark mb-5">
                        <img class="img-fluid mb-5" src="img/travel/nha_trang.jpg" alt="">
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam
                            nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit
                            soluta, eos quod consequuntur itaque. Nam.</p>
                        <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                            <i class="fa fa-close"></i>
                            Close Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
        <div class="portfolio-modal-dialog bg-white">
            <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
            </a>
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
                        <hr class="star-dark mb-5">
                        <img class="img-fluid mb-5" src="img/travel/tay_bac.jpg" alt="">
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam
                            nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit
                            soluta, eos quod consequuntur itaque. Nam.</p>
                        <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                            <i class="fa fa-close"></i>
                            Close Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
        <div class="portfolio-modal-dialog bg-white">
            <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
            </a>
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
                        <hr class="star-dark mb-5">
                        <img class="img-fluid mb-5" src="img/travel/mountain.jpg" alt="">
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam
                            nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit
                            soluta, eos quod consequuntur itaque. Nam.</p>
                        <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                            <i class="fa fa-close"></i>
                            Close Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
        <div class="portfolio-modal-dialog bg-white">
            <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
            </a>
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
                        <hr class="star-dark mb-5">
                        <img class="img-fluid mb-5" src="img/travel/animal.jpg" alt="">
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam
                            nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit
                            soluta, eos quod consequuntur itaque. Nam.</p>
                        <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                            <i class="fa fa-close"></i>
                            Close Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Sign In Modal-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <form name="loginForm" method="post" action="./php/log.php">
                        <div class="form-group">
                            <label for="email"><b>Email</b></label>
                            <input required type="email" class="form-control" id="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" name="username">
                        </div>
                        <div class="form-group">
                            <label for="pwd"><b>Password</b></label>
                            <input required autocomplete="off" type="password" class="form-control" id="pwd" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter password'" name="password">
                        </div>
                        <button type="submit" class="btn btn-success" style="margin-bottom: 10px">Login</button>
                        <button type="button" class="btn btn-info" style="margin-bottom: 10px" data-target="#Popup" data-toggle="modal" data-dismiss="modal">Register</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin-bottom: 10px">Cancel</button>
                        <span class="psw" style="margin-bottom: 10px"><a href="#">Forgot password?</a></span>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Long add iframe Modal -->
    <!--iframe Modal-->
    <div class="portfolio-modal mfp-hide" style="margin:0px;padding:0px;overflow:hidden" id="iframeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="portfolio-modal-dialog bg-white">
            <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
            </a>
            <div class="container text-center">
                <div class="row">
                    <div class="mx-auto">
                        <iframe frameborder="0" style="overflow:hidden;overflow-x:hidden;overflow-y:hidden;height:100%;width:96%;position:absolute;top:0px;left:0px;right:0px;bottom:0px" class="img-fluid mb-5" id="forPostyouradd" data-src="https://www.google.com/webhp?igu=1" src="about:blank" style="background:#ffffff">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Long add iframe Modal: END -->

    <!--Delete Trip Modal-->
    <div class="modal fade" id="delTripModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Delete Trip</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <form name="loginForm" method="post" action="./php/del_trip.php">
                        <div class="form-group">
                            <p>You are going to delete the following trip, please confirm</p>
                            <div class="form-group">
                                <label for="pwd"><b>Trip title</b></label>
                                <input class="form-control" id="tripName" name="tripName" value="" readonly>
                                <input class="form-control" id="tripID" name="tripID" value="" readonly style="display: none">
                            </div>
                            <button type="submit" class="btn btn-success" style="margin-bottom: 10px">OK</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin-bottom: 10px">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--Trip Modal-->
    <div class="modal fade" id="myTripModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold" id="trip_modal_header">Create Trip</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="closeTripModal();">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <form name="tripForm" method="post" action="./php/create_trip.php">
                        <div class="form-group" style="margin-bottom: 10px">
                            <label for="place"><b>Title</b></label>
                            <input class="form-control" id="tripID1" name="tripID1" readonly style="display: none">
                            <input required type="text" class="form-control" id="title" placeholder="Title" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Title'" name="title">
                        </div>
                        <!--Place-->
                        <div class="form-group" style="margin-bottom: 10px">
                            <label for="place"><b>Place</b></label>
                            <input required type="place" class="form-control" id="place" placeholder="Place" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Place'" name="place">
                        </div>
                        <!--Time-->
                        <div class="form-group">
                            <b>Time</b>
                            <div class="form-inline row">
                                <div class="form-group">
                                    <!--Start-->
                                    <!-- <b>Start Date</b> -->
                                    <div class="input-append date form_datetime col-md-5" style="margin-bottom: 10px" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                        <input class="form-control" size="16" type="text" value="" id="start_date_val" readonly placeholder="Start Date">
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-calendar"></i></span>
                                    </div>
                                    <input type="hidden" id="dtp_input2" value="" name="start_date" /><br />
                                </div>
                                <div class="form-group">
                                    <!--End-->
                                    <!-- <b>End Date</b> -->
                                    <div class="input-append date form_datetime col-md-5" style="margin-bottom: 10px" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input3" data-link-format="yyyy-mm-dd">
                                        <input class="form-control" size="16" type="text" value="" id="end_date_val" readonly placeholder="End Date">
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-calendar"></i></span>
                                    </div>
                                    <input type="hidden" id="dtp_input3" value="" name="end_date" /><br />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <!--Member-->
                        <div class="btn-group" style="margin-bottom: 20px" data-link-field="dtp_input4">
                            <b>Members</b>&nbsp &nbsp
                            <select required style="margin-bottom: 10px width:auto" name="members" id="members" onfocus="this.size=5;" onblur="this.size=1;" onchange="this.size=1; this.blur();">
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <br>
                        <!--Submit-->
                        <button type="submit" class="btn btn-success" style="margin-bottom: 10px">Submit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin-bottom: 10px" onClick="closeTripModal();">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--Sign Up Modal-->

    <div class="modal fade" id="Popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold"><b>Sign Up</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <form name="signupForm" method="post" action="./php/register.php" id="signup" onsubmit="return ValidateFname() || ValidateLname() || ValidateEmail() || ValidateMobile() " oninput='confirm.setCustomValidity(confirm.value != password.value ? "Passwords do not match." : "")'>
                        <div class="form-group">
                            <label for="inputName" class="control-label"><b>First Name</b></label>
                            <input type="text" class="form-control" name="fname" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required>
                        </div>

                        <div class="form-group">
                            <label for="inputName" class="control-label"><b>Last Name</b></label>
                            <input type="text" class="form-control" name="lname" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required>
                        </div>

                        <!--Long adds radio buttons: START-->
                        <div class="form-group">
                            <label for="gender" class="control-label"><b>Gender</b></label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="male" value="male" checked>
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="female" value="female">
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                            </div>
                        </div>
                        <!--Long adds radio buttons: END-->

                        <div class="form-group">
                            <label for="inputEmail" class="control-label"><b>Email</b></label>
                            <input type="email" class="form-control" name="email" placeholder="Email" data-error="Bruh, that email address is invalid" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="inputName" class="control-label"><b>Contact Number</b></label>
                            <input type="text" class="form-control" name="phone" placeholder="Contact Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact Number'" required>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword" class="control-label" name="password"><b>Password</b></label>
                            <div class="form-inline row">
                                <div class="form-group col-sm-6">
                                    <input autocomplete="off" type="password" pattern=".{6,}" title="Password must be longer than 5 characters" class="form-control" id="inputPassword" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" name="password" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="password" autocomplete="off" pattern=".{6,}" class="form-control" id="inputPasswordConfirm" placeholder="Confirm Password" name="confirm" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>
    <script src="https://www.malot.fr/bootstrap-datetimepicker/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js?t=20130302"></script>
    <script type="text/javascript">
        $('.form_datetime').datetimepicker({
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0
        });
    </script>

    <script type="text/javascript">
        $(function() {
            $(".dropdown-menu li a").click(function() {
                $(".btn1:first-child").text($(this).text());
                $(".btn1:first-child").val($(this).text());
            });
        });
    </script>

    <script type="text/javascript">
        function delTrip(name, id) {
            console.log(name + "----" + id);
            $("#tripName").val(name);
            $("#tripID").val(id);
        };

        function editTrip(id, name, place, start_date, end_date, members) {
            console.log(name + "----" + id + "---" + place + "---" + start_date + "---" + end_date + "---" + members);
            $("#tripID1").val(id);
            $("#title").val(name);
            $("#start_date_val").val(start_date);
            $("#end_date_val").val(end_date);
            $("#place").val(place);
            $("#dtp_input2").val(start_date);
            $("#dtp_input3").val(end_date);
            $("#members").val(members);
            $("#trip_modal_header").text("Edit Trip");
        };

        function closeTripModal() {
            $("#tripID1").val("NONE");
            $("#title").val("");
            $("#start_date_val").val("");
            $("#end_date_val").val("");
            $("#place").val("");
            $("#dtp_input2").val("");
            $("#dtp_input3").val("");
            $("#members").val("");
            $("#trip_modal_header").text("Create Trip");
        }
    </script>

    <!-- Long add script to open iframe -->
    <script type="text/javascript">
        function addTodo(tripID) {
            var iframe = $("#forPostyouradd");
            iframe.attr("src", "http://11.11.254.57:4200/list/" + tripID);
        }
    </script>
    <!-- Long add script to open iframe: END -->


</body>

</html> 