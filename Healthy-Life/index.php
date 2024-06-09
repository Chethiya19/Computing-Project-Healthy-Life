<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="Images/logo.png" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEALTHY LIFE</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_about.css">
    <link rel="stylesheet" href="css/key.css">
    <link rel="stylesheet" href="style_gallery">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="foodmeals.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="banner.css">

    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/carousel.rtl.css" rel="stylesheet">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/hero-slider-style.css">
    <!-- Hero slider style (https://codyhouse.co/gem/hero-slider/) -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
    <link rel="stylesheet" href="css/templatemo-style.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- <link rel="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


</head>

<body>

    <!-- Header section -->

    <header class="header" style="background-image:url(Images/nav33.jpg);">
        <div class="logo">HEALTHY <span>LIFE</span></div>

        <nav class="nav-links">
            <ul>
                <li><a href="#myCarousel" style="text-decoration:none; color:white;">Home</a></li>
                <li><a href="#about" style="text-decoration:none; color:white;">About</a></li>
                <li><a href="#services" style="text-decoration:none; color:white;">Services</a></li>
                <li><a href="#gallery" style="text-decoration:none; color:white;">Gallery</a></li>
                <li><a href="#foodmeals" style="text-decoration:none; color:white;">Meals</a></li>
                <li><a href="#contact" style="text-decoration:none; color:white;">Contact Us</a></li>
                <li><a href="admin/admin_login.php" target="_blank" style="text-decoration:none; color:white;" class="sign-up">Admin Login</a></li>           <!-- <li><a href="food-order"><i class="fas fa-shopping-cart"></i></a></li> -->
            </ul>
        </nav>


    </header>

    <!-- home -->

    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel" data-bs-theme="light">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>HEALTHY LIFE</h1>
                        <p class="parahome">You can evaluate healthy lifestyles by determining the BMI value.</p>
                        <p><a href="BMI.php"><button class="btnhome">BMI Value</button></a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Special Food Meals & Advices</h1>
                        <p>You need to Sign Up to get more informations.</p>
                        <p><a href="Login.php"><button class="btnhome">Sign Up</button></a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>Healthy Life Food Order</h1>
                        <p>For a Healthy, Illness-Free Life</p>
                        <p><a href="food_order"><button class="btnhome">Order Now</button></a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!--<section class="home" id="home">
        <div class="content">
            <h1>Healthy Lifestyle</h1>
            <p>Welcome to Healthy Life Online food schedulling platform. Our initiative to share <br> knowledge to healthy lifestyle. We don't teach only we make you understand also.</p>

            <a href="BMI.php"><button>BMI Value</button></a>
            <a href="Login.php"><button>Sign Up</button></a>
        </div>
        </div>

    </section>-->

    <!-- ======= About Us Section ======= -->
    <section id="about">
        <div class="about-1">
            <h1>ABOUT US</h1>
            <p style="font-size: 15px;">The philosophy of healthy life will be to promote a healthier, active lifestyle and <br>
                enjoyment of livable community which is essential for an enriched quality of life in life style </p>
        </div>

        <div id="about-2">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="about-item-1 text-center">
                                <i class="fa fa-book"></i>
                                <h3>MISSION</h3>
                                <hr>
                                <p style="font-size: 15px;">Take care of your body it's the only place you have to live in</p><br><br><br><br><br>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="about-item-2 text-center">
                                <i class="fa fa-globe"></i>
                                <h3>VISION</h3>
                                <hr>
                                <p style="font-size: 13px;">The Vision of this project is to launch an online web application based on food schedules,
                                    instructions, and advice especially for patients, bodybuilders, and small children who need a healthy life. The “Healthy Life”
                                    website is designed to provide all the necessary healthy tips to the various parties who are interested in their health.</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="about-item-3 text-center">
                                <i class="fa fa-pen"></i>
                                <h3>OBJECTIVES</h3>
                                <hr>
                                <ul style="font-size: 14px;">
                                    <li>To understand the physical, mental & social benefits of exercise.</li>
                                    <li>To be able to explain how physical activities relieve stress & tension</li>
                                    <li>To understand the concept of aesthetic appreciation</li><br>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= Key Features Section ======= -->
    <section id="services" class="key-features department">
        <div class="container">
            <div class="inner-title">

                <h1>Our Key Features</h1>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-clipboard-list"></i>
                        <h3>Providing Food schedules</h3>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-heartbeat"></i>
                        <h3>Providing Tips & Advices for Healthy Living</h3>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-utensils"></i>
                        <h3>Having Facilities to Order Foods Items</h3>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-credit-card"></i>
                        <h3>Ability to Pay Payments Online </h3>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-truck"></i>
                        <h3>Ability to Deliver the Order Home</h3>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-bars"></i>
                        <h3>Other Features</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  ************************* Gallery Starts Here ************************** -->
    <section class="gallery">
        <div id="gallery">
            <h1 style="font: bold; text-align:center; color: #4ba302;">Our Gallery</h1><br>
            <div class="container">
                <div class="row">
                    <div class="gallery-filter">
                        <span class="filter-item active" data-filter="all">SHOW ALL</span>
                        <span class="filter-item" data-filter="food">FOOD MEALS</span>
                        <span class="filter-item" data-filter="exercise">EXERCISES</span>
                        <span class="filter-item" data-filter="health">HEALTHY ROUTING</span>
                    </div>
                </div>

                <li>
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content  " data-page-no="3" data-page-type="gallery">
                            <div class="tm-img-gallery-container tm-img-gallery-container-2">
                                <div class="tm-img-gallery gallery-two">
                                    <!-- Gallery Two pop up connected with JS code below -->

                                    <div class="grid-item food">
                                        <figure class="effect-ruby">
                                            <img src="Images/child.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title" style="font-size: 30px;">Children & <span>Teenagers</span></h2>
                                                <p class="tm-figure-description">Suspendisse id placerat risus. Mauris quis luctus risus.</p>
                                                <a href="children.php">View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="grid-item food">
                                        <figure class="effect-ruby">
                                            <img src="Images/food7.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title" style="font-size: 30px;">Younger & <span>Middle Age</span></h2>
                                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                                <a href="younger.php">View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="grid-item food">
                                        <figure class="effect-ruby">
                                            <img src="Images/food6.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title" style="font-size: 30px;">Eldery <span>Person</span></h2>
                                                <p class="tm-figure-description">Suspendisse id placerat risus. Mauris quis luctus risus.</p>
                                                <a href="adults.php">View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="grid-item exercise">
                                        <figure class="effect-ruby">
                                            <img src="Images/yogaaa.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title" style="font-size: 30px;">Yoga <span></span></h2>
                                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                                <a href="yoga.php">View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="grid-item exercise">
                                        <figure class="effect-ruby">
                                            <img src="Images/gym1.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title" style="font-size: 30px;">Gym <span></span></h2>
                                                <p class="tm-figure-description">Suspendisse id placerat risus. Mauris quis luctus risus.</p>
                                                <a href="gym.php">View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="grid-item exercise">
                                        <figure class="effect-ruby">
                                            <img src="Images/cycle1.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title" style="font-size: 30px;">Cycling <span></span></h2>
                                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                                <a href="cycling.php">View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="grid-item health">
                                        <figure class="effect-ruby">
                                            <img src="Images/sleep1.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title" style="font-size: 30px;">Good Sleep for <span>Good Health</span></h2>
                                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                                <a href="sleep.php">View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="grid-item health">
                                        <figure class="effect-ruby">
                                            <img src="Images/life1.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title" style="font-size: 30px;">Work-Life <span>Balance</span></h2>
                                                <p class="tm-figure-description">Suspendisse id placerat risus. Mauris quis luctus risus.</p>
                                                <a href="worklife.php">View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="grid-item health">
                                        <figure class="effect-ruby">
                                            <img src="Images/mind.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title" style="font-size: 30px;">Relaxation & <span>Mindfullness</span></h2>
                                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                                <a href="relaxmind.php">View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
        </div>
    </section>

    <script>
        const filterItems = document.querySelectorAll('.filter-item');
        const galleryItems = document.querySelectorAll('.grid-item');

        filterItems.forEach(filterItem => {
            filterItem.addEventListener('click', function() {
                const filterValue = this.getAttribute('data-filter');

                galleryItems.forEach(galleryItem => {
                    galleryItem.style.display = 'none';
                });

                if (filterValue === 'all') {
                    galleryItems.forEach(galleryItem => {
                        galleryItem.style.display = 'block';
                    });
                } else {
                    const filteredItems = document.querySelectorAll(`.${filterValue}`);
                    filteredItems.forEach(filteredItem => {
                        filteredItem.style.display = 'block';
                    });
                }

                filterItems.forEach(item => {
                    item.classList.remove('active');
                });
                this.classList.add('active');
            });
        });
    </script>



    <!-- ######## Gallery End ####### -->

    <!--##########Food Meals ########-->

    <section id="foodmeals">
        <div class="food-1">
            <h1>Food Meals</h1>
        </div>

        <div id="food-2">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="food-item-1 text-center" style="background-image:url(Images/meal1.jpg);">
                                <i class="fa fa-disease"></i>
                                <h3>Diabetes</h3>
                                <hr>
                                <a href="Diabetic.php" class="learn">Learn More</a>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="food-item-2 text-center" style="background-image:url(Images/meal1.jpg);">
                                <i class="fa fa-disease"></i>
                                <h3>Cholostrol</h3>
                                <hr>
                                <a href="Cholesterol.php" class="learn">Learn More</a>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="food-item-3 text-center" style="background-image:url(Images/meal1.jpg);">
                                <i class="fa fa-disease"></i>
                                <h3>Himoglobin</h3>
                                <hr>
                                <a href="Hemoglobin.php" class="learn">Learn More</a>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="food-item-4 text-center" style="background-image:url(Images/meal1.jpg);">
                                
                                <i class="fa fa-weight"></i>
                                <h3>Weight Control</h3>
                                <hr>
                                <a href="Overweight.php" class="learn">Learn More</a>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="food-item-5 text-center" style="background-image:url(Images/meal1.jpg);">
                                <i class="fa fa-dumbbell"></i>
                                <h3>Gym</h3>
                                <hr>
                                <a href="Gym-1.php" class="learn">Learn More</a>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="food-item-6 text-center" style="background-image:url(Images/meal1.jpg);">
                                <i class="fa fa-child"></i>
                                <h3>Children</h3>
                                <hr>
                                <a href="Children(1-5).php" class="learn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--##########Food Meals End########-->



    <!-- ======= Team Section ======= -->
    <section id="team">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h1 style="font: bold; text-align:center; color: #4ba302;">Team</h1>
                <p style="font: bold; text-align:center; color: black; font-size:large;">A Project by CMU Batch - 03 of ICBT CAMPUS<br>(group-1)</p>
            </div><br>

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <img src="Images/team_members/chethiya.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Chethiya Senadheera</h4>
                                <span>Undergraduate Student</span>
                                <span>(Project Manager)</span>
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/chethiya.nimesha.5?mibextid=ZbWKwL"><i class="fab fa-facebook-square"></i></a>
                                    <a href="https://instagram.com/chethi__01?igshid=ZDc4ODBmNjlmNQ=="><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <img src="Images/team_members/tamasha.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Tamasha Kavindi</h4>
                                <span>Undergraduate Student</span>
                                <span>(System Anylist)</span>
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-square"></i></a>
                                    <a href="https://instagram.com/mashi.674?igshid=MmIzYWVlNDQ5Yg=="><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <img src="Images/team_members/wanshika.png" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Wanshika Yashmal</h4>
                                <span>Undergraduate Student</span>
                                <span>(Software Developer)</span>
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/professor.wrath?mibextid=ZbWKwL"><i class="fab fa-facebook-square"></i></a>
                                    <a href="https://instagram.com/consig.liere_?igshid=MmIzYWVlNDQ5Yg=="><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <img src="Images/team_members/yasara.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Yasara Nethmini</h4>
                                <span>Undergraduate Student</span>
                                <span>(UI Designer)</span>
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/profile.php?id=100093043778343&mibextid=ZbWKwL"><i class="fab fa-facebook-square"></i></a>
                                    <a href="https://instagram.com/yasara_16?igshid=MmIzYWVlNDQ5Yg=="><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <img src="Images/team_members/damidu.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Damidu Prasad</h4>
                                <span>Undergraduate Student</span>
                                <span>(Database Engineer)</span>
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/damidu.widhanage.5?mibextid=ZbWKwL"><i class="fab fa-facebook-square"></i></a>
                                    <a href="https://instagram.com/damidu17?igshid=MmIzYWVlNDQ5Yg=="><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->

    <!--<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>-->

    <!-- Template Main JS File -->
    <script src="js/main.js"></script>

    <!--############### Contact Us ################-->
    <section id="contact">
        <li>
            <div class="cd-full-width">
                <div class="container-fluid js-tm-page-content tm-page-pad" data-page-no="6">
                    <div class="tm-contact-page">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="tm-flex tm-contact-container">
                                    <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">

                                        <h1 style="font: bold; text-align:center; color: #4ba302;">Contact Us</h1>
                                        <p style="font: bold; color: black; font-size:15px;" class="tm-text">If You Have Any Questions Or Queries A Member Of Healthy Life Will Be Happy To Help. Feel Free To Contact Us By Telephone Or Email And We Will Be Sure To Get Back To You Soon As Possible. </p>

                                        <!-- contact form -->
                                        <form action="index.html" method="post" class="tm-contact-form">

                                            <div class="form-group">
                                                <input style="font-size: 20px;" type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name" required />
                                            </div>

                                            <div class="form-group">
                                                <input style="font-size: 20px;" type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email" required />
                                            </div>

                                            <div class="form-group">
                                                <textarea style="font-size: 20px;" id="contact_message" name="contact_message" class="form-control" rows="5" placeholder="Your message" required></textarea>
                                            </div>

                                            <button style="font-size: 20px; background-color:#4ba302;" type="submit" class="pull-xs-right tm-submit-btn">Send</button>

                                        </form>
                                    </div>

                                    <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                                        <h1 style="font: bold; text-align:center; color: #4ba302;">Healthy Life</h1>
                                        <!-- google map goes here -->
                                        <div>
                                            <img src="Images/pyramid3.jpg">
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div> <!-- .cd-full-width -->
        </li>
        </ul>
    </section>

    <!--############Banner##########-->
    <h1 style="font: bold; text-align:center; color: #4ba302;">Deals</h1>

    <section id="banner">
        <div class="bannerr">
            <h3>EXCLUSIVE OFFER</h3>
            <p> SPECIAL DISCOUNT FOR THE FOODS YOU ORDERED FROM US<br> UP TO 40% OFF</p>
            <a href="food_order" class="btnbanner" style="text-decoration: none;">BUY NOW</a>
    </section>


    <!--################Footer################-->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>About Us</h3>
                <p> The aim of this project is to launch an online<br> web application based on food schedules,<br> instructions, and advice especially for<br> patients, bodybuilders, and small children<br> who need a healthy life.
                    <br><br>The “Healthy Life” website is designed <br>to provide all the necessary <br> healthy tips to the various<br> parties who are interested in their health!!!
                </p>
            </div>

            <div class="box" style="padding-left:30px;">
                <h3>Contact Us</h3>
                <a href="#" class="links"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#" class="links"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#" class="links"> <i class="fas fa-envelope"></i> healthylife@gmail.com </a>
                <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Colombo, Sri Lanka - 400104 </a>
            </div>


            <div class="box">
                <div class="share">
                    <h3>Follow Us</h3>
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>

                <div class="box">
                    <h3>Other</h3>
                    <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Size Chart </a>
                    <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Terms & Conditions </a>
                    <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Privacy Policy </a>
                    <a href="#" class="links"> <i class="fas fa-arrow-right"></i> FAQ </a>
                </div>
            </div>
        </div>

        </div>

        <div class="credit"> created by <span> Healthy Life </span> | all rights reserved </div>

    </section>
    <!-- footer end -->

</body>

</html>