<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations</title>
    <link rel="stylesheet" href="./bootstrap-5.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="design.css">
</head>

<body>
    <nav class="navbar">
        <div class="container-fluid justify-content-between align-items-center">
            <a class="navbar-brand" href="#"><img src="./images/svgs/navbar-logo.svg" class="navbar-logo" alt=""></a>
            <form class="d-flex" id="form-search" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn" type="submit"> <img src="./icons/icons8-search-50.png" class="search-icon" alt=""></button>
            </form>
            <button class="account-btn" type="submit"> <img src="./icons/icons8-account-96.png" class="account-icon" alt=""></button>
        </div>
    </nav>
    <div class="main-title">
        <div class="main-container">
            <img src="./images/svgs/japan.svg" class="country-name" alt="">
        </div>
    </div>
    <section class="first-page">
        <div class="container">
            <div class="row">
                <div class="col-md-5" id="title-container">
                    <div class="center-title">
                        <img src="./images/svgs/tokyo.svg" class="sub-title" alt="">
                    </div>
                    <div class="description">
                        <p>This is the short description for the destination,
                            "Crowded streets adorned with neon lights weave through Tokyo's diverse neighborhoods, where traditional temples stand in harmony with modern architecture, offering visitors a glimpse into both the past and future of this dynamic city."</p>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="icon-arrow">
                        <img src="./images/svgs/arrowright.svg" class="arrow-right" alt="">
                    </div>
                </div>
                <div class="col-md-6" id="carousel-height">
                    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./images/clay-banks-hwLAI5lRhdM-unsplash.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/jezael-melgoza-NiyRORf8d8I-unsplash.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/jezael-melgoza-layMbSJ3YOE-unsplash.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="second-half">
    </section>
</body>
<script src="./bootstrap-5.3.1-dist/js/bootstrap.js"></script>

</html>