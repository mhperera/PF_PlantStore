<!doctype html>

<html lang="en">

  	<head>

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSS -->
        <link rel="stylesheet" href="_css/bootstrap.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="_css/owlcarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="_css/owlcarousel/owl.theme.default.min.css">
		<link rel="stylesheet" href="_css/_styles.css">

        
        <!-- browser tab data -->
		<title>ZIT | WEB</title>
		<link rel="shortcut icon" href="_images/favicon.png"/>

	</head>

	<body>
		
        <!-- navbar -->
		<?php
			require './navbar.php';
        ?>
        
        <!-- section - carousal-->
		<section>

            <!-- container -->
			<div class="container-fluid w-100 p-0">
                
                <!-- carousel -->
                <div id="mycarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">

                    <!-- indcators -->
                    <ol class="carousel-indicators">
                        <li data-bs-target="#mycarousel" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#mycarousel" data-bs-slide-to="1"></li>
                        <li data-bs-target="#mycarousel" data-bs-slide-to="2"></li>
                    </ol>

                    <!-- carousel -->
                    <div class="carousel-inner">

                        <!-- slider 1 -->
                        <div class="carousel-item active" data-bs-interval="2000">

                            <img src="_images/carousel/slider_1.jpg" class="d-block w-100" alt="slider 1">

                            <div class="carousel-caption d-none d-md-block">

                                <h2>Slider #1</h2>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem, at sint repellendus, modi ducimus non aliquid 
                                    nobis excepturi saepe labore tempore totam, eius optio voluptates cum deserunt laborum provident nulla culpa reprehenderit 
                                    amet vel odit. Numquam explicabo, blanditiis corrupti ipsam inventore ea ab, hic error, deleniti delectus eius ipsa saepe?
                                </p>

                            </div>

                        </div>

                        <!-- slider 2 -->
                        <div class="carousel-item" data-bs-interval="2000">

                            <img src="_images/carousel/slider_2.jpg" class="d-block w-100" alt="slider 2">

                            <div class="carousel-caption d-none d-md-block">

                                <h2>Slider #2</h2>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem, at sint repellendus, modi ducimus non aliquid 
                                    nobis excepturi saepe labore tempore totam, eius optio voluptates cum deserunt laborum provident nulla culpa reprehenderit 
                                    amet vel odit. Numquam explicabo, blanditiis corrupti ipsam inventore ea ab, hic error, deleniti delectus eius ipsa saepe?
                                </p>

                            </div>

                        </div>

                        <!-- slider 3 -->
                        <div class="carousel-item" data-bs-interval="2000">

                            <img src="_images/carousel/slider_3.jpg" class="d-block w-100" alt="slider 3">

                            <div class="carousel-caption d-none d-md-block">

                                <h2>Slider #3</h2>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem, at sint repellendus, modi ducimus non aliquid 
                                    nobis excepturi saepe labore tempore totam, eius optio voluptates cum deserunt laborum provident nulla culpa reprehenderit 
                                    amet vel odit. Numquam explicabo, blanditiis corrupti ipsam inventore ea ab, hic error, deleniti delectus eius ipsa saepe?
                                </p>

                            </div>

                        </div>

                    </div>
                    <!-- /carousel -->

                    <!-- previous arrow -->
                    <a class="carousel-control-prev" href="#mycarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>

                    <!-- previous next -->
                    <a class="carousel-control-next" href="#mycarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>

                </div>
                <!-- /carousel -->

			</div>
            <!-- /container -->

		</section>
        <!-- /section - carousal -->

        <!-- breadcrumb -->
		<nav aria-label="breadcrumb active" class="breadcrumb-row">
            <div class="container p-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                </ol>
            </div>
		</nav>
        <!-- /breadcrumb -->

        <!-- #services-cards-->
        <section id="services-cards">

            <!-- container -->
            <div class="container">

                <div class="row">

                    <!-- card #1 -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-header p-0">
                                <img src="_images/services/service-1.jpg" class="card-img-top" alt="Service #1 Image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card Title #1</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dolores dolor ipsum cum impedit eligendi 
                                    voluptas iste eius quaerat aliquid id vero odio suscipit incidunt maxime consectetur, quia officiis commodi 
                                    pariatur excepturi totam veniam? Possimus asperiores consequuntur numquam officiis sint consequatur, labore 
                                    distinctio similique aliquid. Deleniti illum commodi exercitationem iste.
                                </p>
                            </div>
                            <div class="card-footer flex">
                                <a href="service_description_page.php" class="btn card-button read-more-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- card AIM -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-header p-0">    
                                <img src="_images/services/service-2.jpg" class="card-img-top" alt="Service #2 Image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card Title #2</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dolores dolor ipsum cum impedit eligendi 
                                    voluptas iste eius quaerat aliquid id vero odio suscipit incidunt maxime consectetur, quia officiis commodi 
                                    pariatur excepturi totam veniam? Possimus asperiores consequuntur numquam officiis sint consequatur, labore 
                                    distinctio similique aliquid. Deleniti illum commodi exercitationem iste.
                                </p>
                            </div>
                            <div class="card-footer flex">
                                <a href="service_description_page.php" class="btn card-button read-more-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- card POS -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-header p-0">    
                                <img src="_images/services/service-3.jpg" class="card-img-top" alt="Service #3 Image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card Title #3</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dolores dolor ipsum cum impedit eligendi 
                                    voluptas iste eius quaerat aliquid id vero odio suscipit incidunt maxime consectetur, quia officiis commodi 
                                    pariatur excepturi totam veniam? Possimus asperiores consequuntur numquam officiis sint consequatur, labore 
                                    distinctio similique aliquid. Deleniti illum commodi exercitationem iste.
                                </p>
                            </div>
                            <div class="card-footer flex">
                                <a href="service_description_page.php" class="btn card-button read-more-btn">Read More</a>
                            </div>

                        </div>
                    </div>

                    <!-- card HRM -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-header p-0">    
                                <img src="_images/services/service-4.jpg" class="card-img-top" alt="Service #4 Image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card Title #4</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dolores dolor ipsum cum impedit eligendi 
                                    voluptas iste eius quaerat aliquid id vero odio suscipit incidunt maxime consectetur, quia officiis commodi 
                                    pariatur excepturi totam veniam? Possimus asperiores consequuntur numquam officiis sint consequatur, labore 
                                    distinctio similique aliquid. Deleniti illum commodi exercitationem iste.
                                </p>
                            </div>
                            <div class="card-footer flex">
                                <a href="service_description_page.php" class="btn card-button read-more-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- card MFM -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card">

                            <div class="card-header p-0">    
                                <img src="_images/services/service-5.jpg" class="card-img-top" alt="Service #5 Image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card Title #5</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dolores dolor ipsum cum impedit eligendi 
                                    voluptas iste eius quaerat aliquid id vero odio suscipit incidunt maxime consectetur, quia officiis commodi 
                                    pariatur excepturi totam veniam? Possimus asperiores consequuntur numquam officiis sint consequatur, labore 
                                    distinctio similique aliquid. Deleniti illum commodi exercitationem iste.
                                </p>
                            </div>
                            <div class="card-footer flex">
                                <a href="service_description_page.php" class="btn card-button read-more-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- card FAM -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-header p-0">    
                                <img src="_images/services/service-6.jpg" class="card-img-top" alt="Service #6 Image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card Title #6</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dolores dolor ipsum cum impedit eligendi 
                                    voluptas iste eius quaerat aliquid id vero odio suscipit incidunt maxime consectetur, quia officiis commodi 
                                    pariatur excepturi totam veniam? Possimus asperiores consequuntur numquam officiis sint consequatur, labore 
                                    distinctio similique aliquid. Deleniti illum commodi exercitationem iste.
                                </p>
                            </div>
                            <div class="card-footer flex">
                                <a href="service_description_page.php" class="btn card-button read-more-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                
                </div>

            </div>
            <!-- /container -->

        </section>
        <!-- /section cards-->
        
        <!-- section- customers -->
        <section id="slider" class="my-3 w-100">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <!-- Set up your HTML -->
                        <div class="owl-carousel owl-theme">
                            <div><img src="./_images/sample_img_1.jpg" alt="Sample Img"></div>
                            <div><img src="./_images/sample_img_1.jpg" alt="Sample Img"></div>
                            <div><img src="./_images/sample_img_1.jpg" alt="Sample Img"></div>
                            <div><img src="./_images/sample_img_1.jpg" alt="Sample Img"></div>
                            <div><img src="./_images/sample_img_1.jpg" alt="Sample Img"></div>
                            <div><img src="./_images/sample_img_1.jpg" alt="Sample Img"></div>
                            <div><img src="./_images/sample_img_1.jpg" alt="Sample Img"></div>
                            <div><img src="./_images/sample_img_1.jpg" alt="Sample Img"></div>
                            <div><img src="./_images/sample_img_1.jpg" alt="Sample Img"></div>
                            <div><img src="./_images/sample_img_1.jpg" alt="Sample Img"></div>
                            <div><img src="./_images/sample_img_1.jpg" alt="Sample Img"></div>
                            <div><img src="./_images/sample_img_1.jpg" alt="Sample Img"></div>
                            <div><img src="./_images/sample_img_1.jpg" alt="Sample Img"></div>
                            <div><img src="./_images/sample_img_1.jpg" alt="Sample Img"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /section- customers -->

        <!-- footer -->
        <?php
            require './footer.php';
        ?>
        
        <!-- scripts -->
        <script type="text/javascript" src="_js/jquery.min.js"></script>
        <script type="text/javascript" src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
        <script src="_js/owlcarousel/owl.carousel.min.js"></script>

        <!-- customer slider script -->
        <script type="text/javascript">
            $(document).ready(function(){
                $('.owl-carousel').owlCarousel({
                    loop:true,
                    margin:10,
                    nav:false,
                    dots:true,
                    autoplay:true,
                    autoplayTimeout:1500,
                    autoplayHoverPause:true,
                    mouseDrag:true,
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:3
                        },
                        1000:{
                            items:5
                        }
                    }
                });
            });
        </script>
        <!-- /customer slider script -->

        <script src="_js/bootstrap.bundle.js"></script>
        <script src="_js/_script.js"></script>

	</body>

</html>