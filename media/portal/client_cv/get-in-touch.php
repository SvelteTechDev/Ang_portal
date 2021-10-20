<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./CSS/home.css">
    <!-- <link rel="stylesheet" href="./CSS/Carrers.css"> -->
    <link rel="stylesheet" href="./CSS/hover.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:ital,wght@0,300;1,100&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Contact</title>
    <?php
    include('./include/header.php')
?>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    <section>

        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-2"><a href="./index.php">
                        <img class="logo-margin-1" src="./Media/HomePage/logo-1.png" /></a>
                </div>
                <div class="col-4" style="z-index:1;">
                    <div class="mob-menu-div">
                        <button type="button" class="btn btn-dark mob-menu" onclick="openNav()"><i
                                class="fas fa-bars"></i></button>
                    </div>
                    <nav class="navbar navbar-expand-lg navbar-light nav-right-1 mob-navbar">
                        <div class="container-fluid" style="position: relative;">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation" onclick="myToggleImageMargin()">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 my-navbar">
                                    <li class="nav-item active hvr-underline-from-left">
                                        <a class="nav-link nav-text nav-text-1 my-nav-links" aria-current="page"
                                            href="./about.php">About</a>
                                    </li>
                                    <li class="nav-item hvr-underline-from-left">
                                        <a class="nav-link nav-text nav-text-1 my-nav-links"
                                            href="./service.php">Services</a>
                                    </li>
                                    <li class="nav-item hvr-underline-from-left">
                                        <a class="nav-link nav-text nav-text-1 my-nav-links"
                                            href="./carrersPage.php">Careers</a>
                                    </li>
                                    <li class="nav-item">
                                        <button type="submit" class="get-in-touch2">Get In Touch </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="about.php">About</a>
  <a href="service.php">Services</a>
  <a href="carrersPage.php">Careers</a>
  <a href="get-in-touch.php" class="get-in-touch-btn">Get In Touch</a>
</div>
    </section>

    <?php include('./include/contact.php') ?>

    <?php include('./include/footer.php') ?>

</body>

</html>