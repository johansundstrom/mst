<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--ico-->
    <link rel="apple-touch-icon" sizes="180x180" href="/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/icons/favicon-16x16.png">
    <link rel="manifest" href="/images/icons/site.webmanifest">
    <link rel="mask-icon" href="/images/icons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Font Awesome-->
    <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js"
        integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH"
        crossorigin="anonymous"></script>

    <!-- Private JS-->
    <script src="/js/javascript.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Private CSS-->
    <link rel="stylesheet" href="/css/style.css">
    <title>MDH Solar Team - Start Page</title>
</head>

<body class="body-bg bg-gradient-primary">
    
    <div include-html="/assets/header.html"></div>

    <div include-html="/assets/nav-v2.html"></div>

    <div class="container">
        <!--carousel-->
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/your-logo-here-16-10.jpg" height="300" class="d-block w-100 img-fluid"
                        alt="...">
                    <img class="check d-block w-100 img-fluid" alt="">
                    <div class="card-img-overlay text-dark">
                        <h1 class="card-title display-1 text-dark my-shadow-lg">Become a partner</h1>
                        <a class="btn btn-warning btn-lg" href="partner/" role="button">Contact information</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/images/axel-carbon-fiber-16-8.jpg" class="d-block w-100 img-fluid" alt="...">
                    <img src="" class="check d-block w-100 img-fluid" alt="...">
                    <div class="card-img-overlay text-dark">
                        <h1 class="card-title display-1 text-dark my-shadow-lg">Recent work</h1>
                        <p class="card-text display-5 text-dark my-shadow-sm">Read more about what we have
                            done last week</p>
                            <a class="btn btn-warning btn-lg" href="vehicle/carbon-fiber.html" role="button">Look inside</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/images/brake-pedal-prototype-16-8.jpg" class="d-block w-100 img-fluid" alt="...">
                    <img src="" class="check d-block w-100 img-fluid" alt="...">
                    <div class="card-img-overlay text-dark">
                        <h1 class="card-title display-1 text-dark my-shadow-lg">Brakes</h1>
                        <p class="card-text display-5 text-dark my-shadow-sm">Not that simple - They must do the job</p>
                            <a class="btn btn-warning btn-lg" href="vehicle/brake-system.php" role="button">Look inside</a>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--/carousel-->
                    

        <!--Header-->
        <div class="container-fluid mt-sm-4">
            <h1 class="h1 text-warning">We would like you to follow us</h1>

            <div class="container">
                <div class="row  mb-2">
                    <div class="col-sm pl-0 border-right">
                        <p>Malardalen Region makes this happens. A tremendous cooperation between Mälardalen Universtity
                            and various companies. We believe in this - now we are unstoppable.</p>
                    </div>
                    <div class="col-sm pr-0">
                        <div class="border countdown" id="myCountDown"></div>
                    </div>
                </div>
            </div>


            <div class="card-deck mycard-deck">
                <div class="card shadow p-1 mb-3 bg-white rounded">
                    <img class="card-img-top" src="images/test.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Vehicle</h5>
                        <p class="card-text p-0">
                            All the new features in MDH Solar car V.2.0
                        </p>
                        <a href="vehicle/" class="btn btn-warning">Check it out</a>
                    </div>
                </div>

                <div class="card shadow p-1 mb-3 bg-white rounded">
                    <img class="card-img-top" src="images/team-start.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Team</h5>
                        <p class="card-text">
                            Meet the people behind this monster
                        </p>
                        <a href="team/" class="btn btn-warning">If you dare</a>
                    </div>
                </div>

                <div class="card shadow p-1 mb-3 bg-white rounded">
                    <img class="card-img-top" src="images/press-picture.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Press</h5>
                        <p class="card-text">
                            Interesting fact's for media people
                        </p>
                        <a href="press/" class="btn btn-warning">Help yourself</a>
                    </div>
                </div>
            </div>

            <!--logos-->
            <?php require "assets/logos.php"; ?>
            <!--/logos-->

        </div>
        <!--/header-->

    </div>
    
    <div include-html="assets/footer.html"></div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <script>includeHTML();</script>
</body>

</html>