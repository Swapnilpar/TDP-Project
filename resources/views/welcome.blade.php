<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <title>Laravel</title>
    @vite(['resources/sass/welcome.scss'])
</head>

<body class="antialiased">
    <!-- ===================navbar and hero section==================== -->
    <main>
        <section class="desktop-nav container-fluid">
            <span class="desktop-logo">
                <img src="images/companylogo.png" alt="">
            </span>
            <span class="navbar-text navbar-nav ms-auto mb-2 mb-lg-0 fs-5 ">
                List your company
            </span>
            <span class="navbar-text navbar-nav ms-4 mt-1    ">
                <img src="images/search.svg" alt="Search" width="100%" height="18">
            </span>
            <span class="navbar-text navbar-nav ms-4 mt-1">
                <img src="images/navbar-profile.png" alt="Search" width="100%" height="34">
            </span>
            <!-- <hr> -->
        </section>
        <div class="container-fluid nav-links">
            <ul class="nav justify-content-center pe-4">
                <li class="nav-item">
                    <a class="nav-link pe-4" href="#">Companies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-4" href="#">Forums</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-4 href=" #">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-4 href=" #">Webinars</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-4 href=" #">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-4 href=" #">Jobs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-4 href=" #">NDT Trends</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-4 href=" #">Application Notes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-4 href=" #">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-4 active" href="#">Subscribe</a>
                </li>
            </ul>
        </div>

        <nav class="navbar p-3 navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="images/whitesvg.svg" alt="Logo" width="100%" height="38"
                        class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link pe-4" href="#companies">Companies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pe-4" href="#">Forums</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pe-4 href=" #">Articles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pe-4 href=" #">Webinars</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pe-4 href=" #">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pe-4 href=" #">Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pe-4 href=" #">NDT Trends</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pe-4 href=" #">Application Notes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pe-4 href=" #">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pe-4 active" href="#">Sbscribe</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid hero-section p-4 d-flex">
            <h1 class="heading">All your NDT need, in One Place</h1>
            <form class="search-bar" role="search">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>

        <section class="hero-images-section">
            <div class="hero-images">
                <img src="images/mobile/companies.png" alt="">
                <img src="images/mobile/companies.png" alt="">
                <img src="images/mobile/companies.png" alt="">
                <div class="show-img">
                    <img src="images/mobile/companies.png" alt="">
                    <img src="images/mobile/companies.png" alt="">
                    <img src="images/mobile/companies.png" alt="">
                </div>
            </div>
            <hr>
            <div class="hero-img-names">
                <p>Resources</p>
                <p>Resources</p>
                <p>Resources</p>
                <div class="show-img-name">
                    <p>Resources</p>
                    <p>Resources</p>
                    <p>Resources</p>
                </div>
            </div>
        </section>
    </main>


    <!-- =============articles section =============== -->
    <section class="article container">
        <section class="articles-section">
            <div class="article-section-align">
                <div id="carouselExampleCaptions" class="carousel slide m-2">
                    <div class="carousel-indicators ">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner rounded">
                        <div class="carousel-item active">
                            <img src="images/article-img.jpeg" class="d-block w-100" alt="...">
                            <div class="carousel-caption c-black d-md-block">
                                <p>How Rover is quick-change wheels made our sewer inspections easier.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/article-img.jpeg" class="d-block w-100" alt="...">
                            <div class="carousel-caption  d-md-block">
                                <p>How Rover is quick-change wheels made our sewer inspections easier.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="see-more-link">
                <p><a class="link-opacity-100 see-more" href="#">See more</a></p>
            </div>

            <hr>

        </section>

        <div class="article-content">
            <div class="article-content-container">
                <button type="button" class="btn btn-primary rounded-pill">Article</button>
                <h5>Business Tycoon Cyrus Mistry, Former Chairman Of Tata Sons, Dies In A Car Crash</h5>
                <p>by <b>Zara Mohammed</b>, Senior Engineer</p>
            </div>

            <hr>

            <div class="article-content-container">
                <button type="button" class="btn btn-primary rounded-pill">Article</button>
                <h5>LG’s $4.4B Battery Plant, Taming Volcanic Brine And More Fuel Cells For Trucks</h5>
                <p>by <b>Emma Whitford</b>, Contributor</p>
            </div>

            <hr>

            <div class="article-content-container">
                <button type="button" class="btn btn-primary rounded-pill">Article</button>
                <h5>Metaversity Is In Session As Meta And Iowa’s VictoryXR Open 10 Virtual Campuses</h5>
                <p>by <b>Matt Craig</b>, Engineer</p>
            </div>
        </div>
    </section>


    <!-- =================== bold desk section =============== -->
    <div class="bold-desk container">
        <img src="images/mobile/bolddesk.png" class="img-fluid" alt="...">
    </div>

    <div class="bold-desktop container">
        <img src="images/desktop/bold-desktop.png" class="img-fluid" alt="...">
    </div>


    <section class="resources-section container">
        <div class="resources container">
            <h3>Resources</h3>
            <div id="carouselExampleAutoplaying" class="new-carousel carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                        <img src="images/article-img.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/article-img.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/article-img.jpeg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="new-carousel-desktop container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img src="images/article-img.jpeg" class="img-fluid rounded" alt="no image ">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img src="images/article-img.jpeg" class="img-fluid rounded" alt="no image ">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img src="images/article-img.jpeg" class="img-fluid rounded" alt="no image ">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img src="images/article-img.jpeg" class="img-fluid rounded" alt="no image ">
                </div>
            </div>
        </div>
    </section>

    <section class="jobs container">
        <div class="heading container">
            <h3>Jobs</h3>
            <img src="images/job-arrow.png" alt="">
        </div>

        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- ================= first slide ================= -->
                    <div class="cards-info container">
                        <div class="inner-container container">
                            <h5 class="title">Technical Sales Manager</h5>
                            <p>By : Testia</p>
                            <div class="time-location">
                                <div class="location">
                                    <img src="images/Location.svg" alt="">
                                    <p>UK</p>
                                </div>
                                <div class="time">
                                    <img src="images/time.svg" alt="">
                                    <p>Apr 29, 2022</p>
                                </div>
                            </div>
                            <div class="fulltime">
                                <img src="images/Suitcase.svg" alt="">
                                <p>Full Time</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <!-- ================= second slide ================= -->
                    <div class="cards-info container">
                        <div class="inner-container container">
                            <h5 class="title">Technical Sales Manager</h5>
                            <p>By : Testia</p>
                            <div class="time-location">
                                <div class="location">
                                    <img src="images/Location.svg" alt="">
                                    <p>UK</p>
                                </div>
                                <div class="time">
                                    <img src="images/time.svg" alt="">
                                    <p>Apr 29, 2022</p>
                                </div>
                            </div>
                            <div class="fulltime">
                                <img src="images/Suitcase.svg" alt="">
                                <p>Full Time</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>



        <!-- <div class="show-jobs">
            <div class="cards-info container">
                <div class="inner-container container">
                    <h5 class="title">Technical Sales Manager</h5>
                    <p>By : Testia</p>
                    <div class="time-location">
                        <div class="location">
                            <img src="images/Location.svg" alt="">
                            <p>UK</p>
                        </div>
                        <div class="time">
                            <img src="images/time.svg" alt="">
                            <p>Apr 29, 2022</p>
                        </div>
                    </div>
                    <div class="fulltime">
                        <img src="images/Suitcase.svg" alt="">
                        <p>Full Time</p>
                    </div>
                </div>
            </div>
            <div class="cards-info container">
                <div class="inner-container container">
                    <h5 class="title">Technical Sales Manager</h5>
                    <p>By : Testia</p>
                    <div class="time-location">
                        <div class="location">
                            <img src="images/Location.svg" alt="">
                            <p>UK</p>
                        </div>
                        <div class="time">
                            <img src="images/time.svg" alt="">
                            <p>Apr 29, 2022</p>
                        </div>
                    </div>
                    <div class="fulltime">
                        <img src="images/Suitcase.svg" alt="">
                        <p>Full Time</p>
                    </div>
                </div>
            </div>
        </div> -->

        <section class="job-desktop container">
            <div class="row row1">
                <div class="col-lg-4">
                    <div class="cards-info container">
                        <div class="inner-container container">
                            <h5 class="title">Technical Sales Manager</h5>
                            <p>By : Testia</p>
                            <div class="time-location">
                                <div class="location">
                                    <img src="images/Location.svg" alt="">
                                    <p>UK</p>
                                </div>
                                <div class="time">
                                    <img src="images/time.svg" alt="">
                                    <p>Apr 29, 2022</p>
                                </div>
                            </div>
                            <div class="fulltime">
                                <img src="images/Suitcase.svg" alt="">
                                <p>Full Time</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cards-info container">
                        <div class="inner-container container">
                            <h5 class="title">Technical Sales Manager</h5>
                            <p>By : Testia</p>
                            <div class="time-location">
                                <div class="location">
                                    <img src="images/Location.svg" alt="">
                                    <p>UK</p>
                                </div>
                                <div class="time">
                                    <img src="images/time.svg" alt="">
                                    <p>Apr 29, 2022</p>
                                </div>
                            </div>
                            <div class="fulltime">
                                <img src="images/Suitcase.svg" alt="">
                                <p>Full Time</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cards-info container">
                        <div class="inner-container container">
                            <h5 class="title">Technical Sales Manager</h5>
                            <p>By : Testia</p>
                            <div class="time-location">
                                <div class="location">
                                    <img src="images/Location.svg" alt="">
                                    <p>UK</p>
                                </div>
                                <div class="time">
                                    <img src="images/time.svg" alt="">
                                    <p>Apr 29, 2022</p>
                                </div>
                            </div>
                            <div class="fulltime">
                                <img src="images/Suitcase.svg" alt="">
                                <p>Full Time</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row2">
                <div class="col-lg-4">
                    <div class="cards-info container">
                        <div class="inner-container container">
                            <h5 class="title">Technical Sales Manager</h5>
                            <p>By : Testia</p>
                            <div class="time-location">
                                <div class="location">
                                    <img src="images/Location.svg" alt="">
                                    <p>UK</p>
                                </div>
                                <div class="time">
                                    <img src="images/time.svg" alt="">
                                    <p>Apr 29, 2022</p>
                                </div>
                            </div>
                            <div class="fulltime">
                                <img src="images/Suitcase.svg" alt="">
                                <p>Full Time</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cards-info container">
                        <div class="inner-container container">
                            <h5 class="title">Technical Sales Manager</h5>
                            <p>By : Testia</p>
                            <div class="time-location">
                                <div class="location">
                                    <img src="images/Location.svg" alt="">
                                    <p>UK</p>
                                </div>
                                <div class="time">
                                    <img src="images/time.svg" alt="">
                                    <p>Apr 29, 2022</p>
                                </div>
                            </div>
                            <div class="fulltime">
                                <img src="images/Suitcase.svg" alt="">
                                <p>Full Time</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cards-info container">
                        <div class="inner-container container">
                            <h5 class="title">Technical Sales Manager</h5>
                            <p>By : Testia</p>
                            <div class="time-location">
                                <div class="location">
                                    <img src="images/Location.svg" alt="">
                                    <p>UK</p>
                                </div>
                                <div class="time">
                                    <img src="images/time.svg" alt="">
                                    <p>Apr 29, 2022</p>
                                </div>
                            </div>
                            <div class="fulltime">
                                <img src="images/Suitcase.svg" alt="">
                                <p>Full Time</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="trend-for-mobile">
        <section class="trend-img">
            <img src="images/mobile/mobile-trend.png" alt="">
        </section>

        <section class="trends container-fluid">
            <div class="trend-info container">
                <h3>Best NDT trends you can every see</h3>
                <p>Click on a provider to find out more about what they provide and how they get in touch.</p>
                <div class="btn-link">
                    <button type="button" class="btn btn-light rounded-pill">Get latest issue
                        <span>&#8594</span></button>
                    <a href="see/more">See More</a>
                </div>
            </div>
        </section>
    </section>

    <section class="trend-for-desktop">
        <section class="trend-container container">
            <img src="images/mobile/mobile-trend.png" alt="">
            <div class="trend-info-desktop">
                <h3 class="h-dsktp">Check out the top NDT trends of the month</h3>
                <p class="p-dsktp">Want to know the latest happenings in NDT industry? Downloaded the latest issue of
                    NDT trends now.</p>
                <div class="btn-link-dsktp">
                    <button type="button" class=" btn-dsktp btn btn-light rounded-pill">Get latest issue
                        <span>&#8594</span></button>
                    <a href="see/more">See More</a>
                </div>
            </div>
        </section>
    </section>



    <section class="discussion-section container ">
        <div class="discussion-heading">
            <h6>Trending Discussions</h6>
            <h5>Forums</h5>
            <img src="images/job-arrow.png" alt="">
        </div>
        <div class="topic-box">
            <p>Topic</p>
        </div>

        <div class="topic-info ">
            <div class="info-inner">
                <div class="topic-img">
                    <img src="images/mobile/jobs.png" alt="" class="image">
                </div>
                <div class="topic-content">
                    <h6>NDE 4.0 YouTube Channel</h6>
                    <p>Vrana Johannes | Apr 03,2020</p>
                </div>

            </div>

            <div class="likes-comments">
                <div class="comments">
                    <h6>45</h6>
                    <p>Comments</p>
                </div>
                <div class="likes">
                    <h6>45</h6>
                    <p>Comments</p>
                </div>
            </div>
        </div>
        <hr>

        <div class="topic-info-other">
            <div class="info-inner">
                <div class="topic-img">
                    <img src="images/mobile/jobs.png" alt="" class="image">
                </div>
                <div class="topic-content">
                    <h6>NDE 4.0 YouTube Channel</h6>
                    <p>Vrana Johannes | Apr 03,2020</p>
                </div>
            </div>

            <div class="likes-comments">
                <div class="comments">
                    <h6>45</h6>
                    <p>Comments</p>
                </div>
                <div class="likes">
                    <h6>45</h6>
                    <p>Comments</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="topic-info-other">
            <div class="info-inner">
                <div class="topic-img">
                    <img src="images/mobile/jobs.png" alt="" class="image">
                </div>
                <div class="topic-content">
                    <h6>NDE 4.0 YouTube Channel</h6>
                    <p>Vrana Johannes | Apr 03,2020</p>
                </div>
            </div>

            <div class="likes-comments">
                <div class="comments">
                    <h6>45</h6>
                    <p>Comments</p>
                </div>
                <div class="likes">
                    <h6>45</h6>
                    <p>Comments</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="topic-info-other">
            <div class="info-inner">
                <div class="topic-img">
                    <img src="images/mobile/jobs.png" alt="" class="image">
                </div>
                <div class="topic-content">
                    <h6>NDE 4.0 YouTube Channel</h6>
                    <p>Vrana Johannes | Apr 03,2020</p>
                </div>
            </div>

            <div class="likes-comments">
                <div class="comments">
                    <h6>45</h6>
                    <p>Comments</p>
                </div>
                <div class="likes">
                    <h6>45</h6>
                    <p>Comments</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="topic-info-other">
            <div class="info-inner">
                <div class="topic-img">
                    <img src="images/mobile/jobs.png" alt="" class="image">
                </div>
                <div class="topic-content">
                    <h6>NDE 4.0 YouTube Channel</h6>
                    <p>Vrana Johannes | Apr 03,2020</p>
                </div>
            </div>

            <div class="likes-comments">
                <div class="comments">
                    <h6>45</h6>
                    <p>Comments</p>
                </div>
                <div class="likes">
                    <h6>45</h6>
                    <p>Comments</p>
                </div>
            </div>
        </div>
        <hr>

    </section>




    <section class="nexis-ad container">
        <img src="images/mobile/nexis.png" class="img-fluid" alt="...">
    </section>
    <section class="nexis-ad-desktop container">
        <img src="images/desktop/nexis-dsktp.png" class="img-fluid" alt="...">
    </section>




    <section class="card-caraousel container">
        <div class="card-event-heading">
            <h5>Forums</h5>
            <img src="images/job-arrow.png" alt="">
        </div>

        <div class="wrap-card">
            <div class="card-container">
                <div class="card" style="width: 18rem;">
                    <img src="images/mobile/rect1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card" style="width: 18rem;">
                    <img src="images/mobile/rect1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mobile-eti container">
            <img src="images/ETI.png" alt="">
        </div>

        <div class="card-container-dsktp container">
            <div class="card" style="width: 20rem;">
                <img src="images/mobile/rect1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the
                        bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 20rem;">
                <img src="images/mobile/rect1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the
                        bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card" style="width: 18rem; height:100%">
                <img src="images/ETI.png" alt="">
            </div>
        </div>

    </section>


    <section class="sponsor">
        <img src="images/mobile-sponsor.png" class="img-fluid mobile" alt="">
        <div class="dsktp-sponsor container">
            <img src="images/dsktp-sponsor.png" class="img-fluid dsktp" alt="">
        </div>
    </section>


    <section class="T-grids container">
        <img src="images/mobile/12grids.png" alt="">
        <div class="T-grids-dsktp">
            <img src="images/desktop/12grids-dsktp.png" alt="">
        </div>
    </section>


    <div class="ad-stuff container">
        <div class="row row-cols-2">
            <div class="col">
                <img src="images/plane.png" alt="">
            </div>
            <div class="col">
                <img src="images/plane.png" alt="">
            </div>
            <div class="col">
                <img src="images/plane.png" alt="">
            </div>
            <div class="col">
                <img src="images/plane.png" alt="">
            </div>
            <div class="col">
                <img src="images/plane.png" alt="">
            </div>
            <div class="col">
                <img src="images/plane.png" alt="">
            </div>
        </div>
    </div>


    <div class="ad-stuff-dsktp container mt-4">
        <div class="row row-cols-6">
            <div class="plane-img">
                <img src="images/desktop/d-rect1.png" alt="">
            </div>
            <div class="plane-img">
                <img src="images/desktop/d-rect1.png" alt="">
            </div>
            <div class="plane-img">
                <img src="images/desktop/d-rect1.png" alt="">
            </div>
            <div class="plane-img">
                <img src="images/desktop/d-rect1.png" alt="">
            </div>
            <div class="plane-img">
                <img src="images/desktop/d-rect1.png" alt="">
            </div>
            <div class="plane-img">
                <img src="images/desktop/d-rect1.png" alt="">
            </div>
        </div>
    </div>





    <footer class="container-fluid">
        <div class="inner-footer container p-4">
        <div class="footer-logo ">
            <img src="images/white.png" alt="">
        </div>

    <div class="footer-menus">
        <hr style="color:white">
        <div class="explore-learn">
            <div class="dropdown">
                <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Explore
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item " href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
            <div class="dropdown-toggle" style="color:white;">
            </div>
        </div>

        <hr style="color:white">
        <div class="explore-learn">
            <div class="dropdown">
                <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    About
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item " href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
            <div class="dropdown-toggle" style="color:white;">
            </div>
        </div>

        <hr style="color:white">
        <div class="explore-learn">
            <div class="dropdown">
                <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    More
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item " href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
            <div class="dropdown-toggle" style="color:white;">
            </div>
        </div>

        <hr style="color:white">
        <div class="explore-learn">
            <div class="dropdown">
                <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Learn
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item " href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
            <div class="dropdown-toggle" style="color:white;">
            </div>
        </div>

        <hr style="color:white">
        <div class="explore-learn">
            <div class="dropdown">
                <button class="btn" type="button" aria-expanded="false">
                    Contact
                </button>
            </div>

        </div>
    </div>
        
        <hr style="color:white">

        <div class="about container">
            <h3>What is One Stop NDT?</h3>
            <p>A informative dais for NDT enthusiasts, One Stop NDT has everything related to Non-Destructive Testing in
                one place. Backed by professionals with unprecedented experience & presence of more than 20 years in NDT
                Market, One Stop NDT gives you a chance to freely communicate and interact with experts. NDT equipment
                manufacturers, service providers, plant operators, distributors, NDT professionals can check out the new
                developments, products and services available in the global market and have direct access for
                interactions with like-minded professionals. One Stop NDT users have access to NDT forums, jobs, blogs,
                events, courses, webinars and much more!</p>
        </div>


        <hr style="color:white">

        <div class="store container">
            <div class="app-container">
                <img src="images/mobile/appstore.png" alt="">
            </div>
            <div class="play-container">
                <img src="images/mobile/googleplay.png" alt="">
            </div>
        </div>


        <div class="social-media container">
            <img src="images/mobile/facebook.svg" alt="">
            <img src="images/mobile/insta.svg" alt="">
            <img src="images/mobile/twitter.svg" alt="">
            <img src="images/mobile/linkedin.svg" alt="">
            <img src="images/mobile/youtube.svg" alt="">
        </div>


        <hr style="color:white;">


        <div class="TC container">
            <p>Privacy Policy</p>
            <p>Terms and conditions</p>
            <p>Support</p>
        </div>

        <div class="copyrights container">
            <p>Copyrights @ 2022. OSNDT All Rights Reserved</p>
        </div>




        </div>
    </footer>




</body>

</html>