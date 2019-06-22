<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!--ico-->
    <link rel="apple-touch-icon" sizes="180x180" href="/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/icons/favicon-16x16.png">
    <link rel="manifest" href="/images/icons/site.webmanifest">
    <link rel="mask-icon" href="/images/icons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    
    <!-- Private JS-->
    <script src="/js/javascript.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Private CSS-->
    <link rel="stylesheet" href="/css/style.css">
    <title>MDH Solar Team - Vehicle</title>
</head>

<body class="body-bg bg-gradient-primary">

    <div include-html="/assets/header.html"></div>

    <div include-html="/assets/nav-v2.html"></div>

    <div class="container">

        <h1 class="h2">All about the vehicle</h1>
        

        <!--card-->
        <div class="card-deck mycard-deck">

                <div class="card shadow p-1 mb-3 bg-white rounded" style="width: 25rem;">
                    <img class="card-img-top" src="/images/carbon-fiber-producton.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Carbon fiber</h5>
                        <p class="card-text p-0">
                                Make it yourself. It’s fun!
                        </p>
                        <a href="carbon-fiber.php" class="btn btn-warning">See Johan in action</a>
                    </div>
                </div>

                <div class="card shadow p-1 mb-3 bg-white rounded" style="width: 25rem;">
                    <img class="card-img-top" src="/images/brake-pedal-prototype-01.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Brake pedal</h5>
                        <p class="card-text">
                                How we make a safe car 
                        </p>
                        <a href="brake-system.php" class="btn btn-warning">The brake-through</a>
                    </div>
                </div>

                <div class="card shadow p-1 mb-3 bg-white rounded" style="width: 25rem;">
                    <img class="card-img-top" src="/images/roll-cage-prototype-01.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Roll cage</h5>
                        <p class="card-text">
                                Collision safe car 
                        </p>
                        <a href="roll-cage.php" class="btn btn-warning">Inspect the process</a>
                    </div>
                </div>
            </div>
            <!--/cards-->


            <div class="container">
                <?php require "../assets/logos.php"; ?>
            </div>
        </div>


    <div include-html="../assets/footer.html"></div>

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