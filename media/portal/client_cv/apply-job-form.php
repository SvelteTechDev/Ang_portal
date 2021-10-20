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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Apply Job</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./include/script.js"></script>
    <script>
        jQuery(document).ready(function() {
    jQuery("#contact_number").keypress(function(e) {
        var length = jQuery(this).val().length;
        if (length > 9) {
            return false;
        } else if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            return false;
        } else if ((length == 0) && (e.which == 48)) {
            return false;
        }
    });
});
    </script>
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
                <div class="col-4">
                    <nav class="navbar navbar-expand-lg navbar-light nav-right-1">
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
                                        <a href="./get-in-touch.php"><button type="submit" class="get-in-touch2">Get In
                                                Touch </button></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>



    <section class="service-bg-color">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 contact-margin">
                    <div class="contact-form1">
                        <p class="contact-heading">Apply Here</p>
                        
                        <form name="myForm" onsubmit="getData(event)">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name"  required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contactno">Contact No.</label>
                                <input type="number" class="form-control" id="contact_number" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group ">
                                    <label for="resume">Upload Resume</label>
                                    <input type="file" class="form-control-file upload-resume" id="upload_file" required>
                                </div>
                            </div>
                            <p>
                                <button type="submit" class="get-in-touch mt-4" id="submit">Submit </button>
                            </p>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <img class="img-fluid" src="./Media/HomePage/telephone-final.png" />
                </div>
            </div>
        </div>
    </section>


    <?php include('./include/footer.php') ?>

</body>

</html>