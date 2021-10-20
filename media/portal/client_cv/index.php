<?php
    include('./include/header.php')
?>
  <title>Vui</title>
<script>
function displaySection(id) {
    for (var i = 1; i <= 3; i++) {
        if (i === id) {
            element = document.getElementById(`section${i}`)
            element.style.display = 'block'
            document.getElementById(`circle${i}`).classList.add("circle-active");
            window.scrollTo(0, 400);
            if (i === 1) {
                document.getElementById(`circle${i}`).style.background = "#FFCE2F";
                document.getElementById("textSlider").innerText = "PROOF IN PERFORMANCE";
                document.getElementById("homepagebg").style.backgroundImage = "url('Media/AboutPage/home-home.png')";
            } else if (i === 2) {
                document.getElementById(`circle${i}`).style.background = "#2694C0";
                document.getElementById("textSlider").innerText = "ELEVATING YOUR BUSINESS ";
                document.getElementById("homepagebg").style.backgroundImage =
                    "url('Media/AboutPage/business-home.png')";

            } else {
                document.getElementById(`circle${i}`).style.background = "#A1C53A";
                document.getElementById("textSlider").innerText = "YOU DREAM, WE BUILD";
                document.getElementById("homepagebg").style.backgroundImage = "url('Media/AboutPage/tech-home.png')";
            }
        } else {
            element = document.getElementById(`section${i}`)
            element.style.display = 'none'
            document.getElementById(`circle${i}`).style.background = "transparent";
            document.getElementById(`circle${i}`).classList.remove("circle-active");

        }
    }
}



window.onload = function() {
    document.getElementById(`circle1`).classList.add("circle-active");
    document.getElementById(`circle1`).style.background = "yellow";
}
</script>
<script>
//     $(document).ready(function() {
//     $(".owl-carousel").owlCarousel();
// });
$(function() {
  // Owl Carousel
  var owl = $(".owl-carousel");
  owl.owlCarousel({
    items: 4,
    margin: 10,
    loop: true,
  
    autoplay:true,
    autoplayTimeout:1500,
  });
});


</script>


<section>
    <section class="homepage " id="homepagebg">

        <?php include('./include/navbar.php') ?>
        <div class="home-overlayer">
            <!-- <img src="Media/HomePage/film.png" alt=""> -->
            <div class="container-fluid img-text-margin">
                <div class="row justify-content-between mt-5">
                    <div class="col-md-5">
                        <p class="image-text" id="textSlider">PROOF IN PERFORMANCE</p>
                    </div>


                    <div class="toggle-alignment">
                        <div class="col-md-1 ">
                            <div onclick="displaySection(1)" class="indent">
                                <p class="toggle-text">Social</p>
                                <button id="circle1" class="circle button-border"></button>
                            </div>


                        </div>
                        <div class="col-md-1">
                            <div onclick="displaySection(2)" class="indent">

                                <p class="toggle-text">Business</p>
                                <button id="circle2" class="circle button-border"></button>
                            </div>

                        </div>
                        <div class="col-md-1">
                            <div onclick="displaySection(3)" class="indent">

                                <p class="toggle-text">Technology</p>
                                <button id="circle3" class="circle button-border"></button>
                            </div>

                        </div>
                    </div>


                    <div class="col-md-1 icons-height p-0 ">
                        <div class="my-social-icons">
                            <div><a href=" https://www.linkedin.com/company/vui-live/" target="_blank"
                                    class="linkedin-icon"><i class="fab fa-linkedin-in linkedin-fa-icon"></i></a></div>
                            <div class="fb-icon"><a href="https://www.facebook.com/VUI-Live-103615778703504"
                                    target="_blank"><img src="./Media/HomePage/facebook.png"></a></div>
                            <div><a href=" https://www.instagram.com/vuilive/?hl=en" target=_blank><img
                                        src="./Media/HomePage/Insta.png"></a></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
</section>




<section id="section1" style="display: block;">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="who-we-are-heading text-center">WHO WE ARE</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <p class="who-we-are-text">In the sector of marketing technology, VUI Live has been rapidly
                        expanding. In this vast digital universe, our experts are making a difference every day. Our
                        advanced techniques, real-time projects, and approach towards all kinds of businesses are the
                        keys behind procurement.
                        We, at VUI Live, understand the value of web traffic and lead generation for your business. We
                        value your business goals and deliver the results using proven Digital and Social Media
                        Marketing strategies.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="service-bg-color">
        <div class="container">
            <div class="row  service-heading-padding">
                <div class="col-md-3 ms-2 service-heading mt-2">
                    SERVICES
                </div>
                <div class="col-md-7 mb-2 mt-2 service-text">
                    We Use data-driven methodology to come to concrete results to maintain long-term relationships, here
                    is how we do it.
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-4 col-sm-12 margin-small-1">
                    <a href="./serviceSocial.php"><img class="img-width zoom img-fluid"
                            src="./Media/HomePage/service1.png" /></a>
                    <a class="nav-link nav-text service-image-headline mt-3 " href="./serviceSocial.php">SOCIAL</a>
                </div>
                <div class="col-md-4 col-sm-12 margin-small-1">
                    <a href="./serviceBusiness.php"><img class="img-width zoom img-fluid"
                            src="./Media/HomePage/service2.png" /></a>
                    <a class="nav-link nav-text service-image-headline mt-3 " href="./serviceBusiness.php">BUSINESS</a>
                </div>
                <div class="col-md-4 col-sm-12 margin-small-1">
                    <a href="./serviceTech.php"><img class="img-width zoom img-fluid"
                            src="./Media/HomePage/service3.png" /></a>
                    <a class="nav-link nav-text service-image-headline mt-3 " href="./serviceTech.php">TECHNOLOGY</a>
                </div>
            </div>
        </div>
    </section>

    <section id="clients">
        <div class="container mob-clients">
            <div class="row">
                <div class="col-md-12 clientHeading">
                    OUR CLIENTS
                </div>
            </div>
            <div class="row ">
                <div class="owl-carousel owl-theme d-flex">

                <div class="col-md-3 w-100">
                    <div class="item active">

                        <img class="client-display  client-display-1" src="./Media/HomePage/client-1.png" />
                    </div>
                </div>
                <div class="col-md-3 w-100">
                    <div class="item">

                        <img class=" client-display client-display-1" src="./Media/HomePage/client-2.png" />
                    </div>
                </div>
                <div class="col-md-3 w-100">
                    <div class="item">

                        <img class=" client-display client-display-1" src="./Media/HomePage/jove.JPG" />
                    </div>
                </div>
                <div class="col-md-3 w-100">
                    <div class="item">

                        <img class=" client-display client-display-1 spring" src="./Media/HomePage/spring.png" />
                    </div>
                </div>
                <div class="col-md-3 w-100">
                    <div class="item">

                        <img class=" client-display client-display-1 spring" src="./Media/HomePage/knight.png" />
                    </div>
                </div>
                <div class="col-md-3 w-100">
                    <div class="item">

                        <img class=" client-display client-display-1 spring" src="./Media/HomePage/shoetree.png" />
                    </div>
                </div>
                <div class="col-md-3 w-100">
                    <div class="item">

                        <img class=" client-display client-display-1 spring" src="./Media/HomePage/ang.png" />
                    </div>
                </div>
                </div>
                
                
            </div>

        </div>
    </section>
    <?php include('./include/contact.php') ?>









</section>



<section id="section2" style="display: none;">

    <section>


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="who-we-are-heading">ABOUT US</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <p class="who-we-are-text"> We are an agile
                        team of developers who try to add value to your business, in any phase. We look under the hood
                        to find the gaps and make the entire product seamless. Our Out of the box problem-solving
                        approach provides the most cost and time-effective results.

                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="service-bg-color">
        <div class="container">
            <div class="row  service-heading-padding">
                <div class="col-md-3 ms-2 service-heading mt-2">
                    SERVICES
                </div>
                <div class="col-md-7 mb-2 mt-2 service-text">
                    We Use data-driven methodology to come to concrete results to maintain long-term relationships, here
                    is how we do it.
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-4 col-sm-12 margin-small-1">
                    <a href="./serviceSocial.php"><img class="img-width zoom" src="./Media/HomePage/service1.png" /></a>
                    <a class="nav-link nav-text service-image-headline mt-3 " href="./serviceSocial.php">SOCIAL</a>
                </div>
                <div class="col-md-4 col-sm-12 margin-small-1">
                    <a href="./serviceBusiness.php"><img class="img-width zoom"
                            src="./Media/HomePage/service2.png" /></a>
                    <a class="nav-link nav-text service-image-headline mt-3 " href="./serviceBusiness.php">BUSINESS</a>
                </div>
                <div class="col-md-4 col-sm-12 margin-small-1">
                    <a href="./serviceTech.php"><img class="img-width zoom" src="./Media/HomePage/service3.png" /></a>
                    <a class="nav-link nav-text service-image-headline mt-3 " href="./serviceTech.php">TECHNOLOGY</a>
                </div>
            </div>
        </div>
    </section>

    <section id="clients">
        <div class="container mob-clients">
            <div class="row">
                <div class="col-md-12 clientHeading">
                    OUR CLIENTS
                </div>
            </div>
            <div class="row ">
                <div class="owl-carousel owl-theme d-flex">

                <div class="col-md-3 w-100">
                    <div class="item active">

                        <img class="client-display  client-display-1" src="./Media/HomePage/client-1.png" />
                    </div>
                </div>
                <div class="col-md-3 w-100">
                    <div class="item">

                        <img class=" client-display client-display-1" src="./Media/HomePage/client-2.png" />
                    </div>
                </div>
                <div class="col-md-3 w-100">
                    <div class="item">

                        <img class=" client-display client-display-1" src="./Media/HomePage/jove.JPG" />
                    </div>
                </div>
                <div class="col-md-3 w-100">
                    <div class="item">

                        <img class=" client-display client-display-1 spring" src="./Media/HomePage/spring.png" />
                    </div>
                </div>
                <div class="col-md-3 w-100">
                    <div class="item">

                        <img class=" client-display client-display-1 spring" src="./Media/HomePage/knight.png" />
                    </div>
                </div>
                <div class="col-md-3 w-100">
                    <div class="item">

                        <img class=" client-display client-display-1 spring" src="./Media/HomePage/shoetree.png" />
                    </div>
                </div>
                <div class="col-md-3 w-100">
                    <div class="item">

                        <img class=" client-display client-display-1 spring" src="./Media/HomePage/ang.png" />
                    </div>
                </div>
                </div>
                
               
            </div>

        </div>
    </section>
    <?php include('./include/contact.php') ?>


</section>





<section id="section3" style="display: none;">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="who-we-are-heading">ABOUT US</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <p class="who-we-are-text">VUI LIVE is a global MarkTech firm that focuses on delivering versatile
                        marketing solutions. The company is a business unit within the prestigious firm, Sveltetech
                        Technologies.
                        <br />
                        Our experts work with your upcoming brand to assist you in getting the foremost out of the
                        software and platform that underlie your organization.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="service-bg-color">
        <div class="container">
            <div class="row  service-heading-padding">
                <div class="col-md-3 ms-2 service-heading mt-2">
                    SERVICES
                </div>
                <div class="col-md-7 mb-2 mt-2 service-text">
                    We Use data-driven methodology to come to concrete results to maintain long-term relationships, here
                    is how we do it.
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-4 col-sm-12 margin-small-1">
                    <a href="./serviceSocial.php"><img class="img-width zoom" src="./Media/HomePage/service1.png" /></a>
                    <a class="nav-link nav-text service-image-headline mt-3 " href="./serviceSocial.php">SOCIAL</a>
                </div>
                <div class="col-md-4 col-sm-12 margin-small-1">
                    <a href="./serviceBusiness.php"><img class="img-width zoom"
                            src="./Media/HomePage/service2.png" /></a>
                    <a class="nav-link nav-text service-image-headline mt-3 " href="./serviceBusiness.php">BUSINESS</a>
                </div>
                <div class="col-md-4 col-sm-12 margin-small-1">
                    <a href="./serviceTech.php"><img class="img-width zoom" src="./Media/HomePage/service3.png" /></a>
                    <a class="nav-link nav-text service-image-headline mt-3 " href="./serviceTech.php">TECHNOLOGY</a>
                </div>
            </div>
        </div>
    </section>

    <section id="clients">
        <div class="container mob-clients">
            <div class="row">
                <div class="col-md-12 clientHeading">
                    OUR CLIENTS
                </div>
            </div>
            <div class="row ">
                <div class="owl-carousel owl-theme d-flex">

                <div class="col-md-3 w-100">
                    <div class="item active">

                        <img class="client-display  client-display-1" src="./Media/HomePage/client-1.png" />
                    </div>
                </div>
                <div class="col-md-3 w-100">
                    <div class="item">

                        <img class=" client-display client-display-1" src="./Media/HomePage/client-2.png" />
                    </div>
                </div>
                <div class="col-md-3 w-100">
                    <div class="item">

                        <img class=" client-display client-display-1" src="./Media/HomePage/jove.JPG" />
                    </div>
                </div>
                <div class="col-md-3 w-100">
                    <div class="item">

                        <img class=" client-display client-display-1 spring" src="./Media/HomePage/spring.png" />
                    </div>
                </div>
                <div class="col-md-3 w-100">
                    <div class="item">

                        <img class=" client-display client-display-1 spring" src="./Media/HomePage/knight.png" />
                    </div>
                </div>
                <div class="col-md-3 w-100">
                    <div class="item">

                        <img class=" client-display client-display-1 spring" src="./Media/HomePage/shoetree.png" />
                    </div>
                </div>
                <div class="col-md-3 w-100">
                    <div class="item">

                        <img class=" client-display client-display-1 spring" src="./Media/HomePage/ang.png" />
                    </div>
                </div>
                </div>
                
               
            </div>

        </div>
    </section>
    <?php include('./include/contact.php') ?>


</section>
<?php include('./include/footer.php') ?>


</body>

</html>