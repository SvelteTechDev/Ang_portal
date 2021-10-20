<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./CSS/home.css">
    <link rel="stylesheet" href="./CSS/hover.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,100&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:ital,wght@0,300;1,100&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Job Apply</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <section class="service-tech-page">
        <div class="container-fluid">
        <?php include('./include/navbar.php') ?>

            <div class="container-fluid image-text-margin-1">
                <div class="row justify-content-between">
                    <div class="col-md-8">
                        <p class="image-text">ADMINISTRATIVE ASSISTANT</p>
                    </div>
                    <div class="col-md-2 icons-height p-0 banner-icons">
                        <div><img src="./Media/HomePage/twitter.png"></div>
                        <div class="fb-icon my-fb-icon"><img src="./Media/HomePage/facebook.png"></div>
                        <div><img src="./Media/HomePage/Insta.png"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12">
                    <p class="sub-heading roles-heading-margin">Job Description</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- <p class="sub-heading-text"></p> -->
                    <ul class="sub-heading-text">
                        <li>Handle and coordinate active calendars</li>
                        <li>Schedule and confirm meetings</li>
                        <li>Ensure file organization based on office protocol</li>
                        <li> Provide ad hoc support around the office as needed</li>
                        
                        
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="sub-heading roles-heading-margin">QUALIFICATION</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- <p class="sub-heading-text"></p> -->
                    <ul class="sub-heading-text">
                        <li>Bachelor's degree or equivalent experience</li>
                        <li>Strong interpersonal, customer service and</li>
                        <li>communication skills</li>
                        <li> Ability to multitask</li>
                        <li>Proficient in Microsoft Office suite</li>
                        
                        
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="sub-heading service-heading-margin">Employment Type</p>
                </div>
            </div>

            <div class="row ">
                <div class="col-md-12">
                    <p class="sub-heading-text">Full Time</p>
                        
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12">
                     <a href="./apply-job-form.php"><button class="apply-button" type="button">Apply</button></a>
                </div>
            </div>
        </div>
    </section>

    <?php include('./include/contact.php') ?>

<?php include('./include/footer.php') ?>
</body>

</html>