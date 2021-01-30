<!doctype html>

<html lang="en">

  	<head>

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSS -->
		<link rel="stylesheet" href="_css/bootstrap.css">
		<link rel="stylesheet" href="_css/_styles.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        
        <!-- browser tab data -->
		<title>ZIT</title>
		<link rel="shortcut icon" href="_images/favicon.png"/>

	</head>

	<body>
		
        <!-- navbar -->
		<?php
			require './navbar.php';
        ?>
        
        <!-- <div class="margin-header"></div> -->

        <!-- breadcrumb -->
		<!-- <nav aria-label="breadcrumb" class="breadcrumb-row">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">HOME</a></li>
				<li class="breadcrumb-item active"><a href="contactus.php">CONTACT US</a></li>
			</ol>
		</nav> -->
        <!-- /breadcrumb -->

        
        <div class="container">

            <!-- google map -->
            <div class="row" id="map">
                <div class="col-md-12">
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d507075.167697967!2d80.09898036031034!3d6.827503753793069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a082ec13591%3A0xae5d7cec4c69ff3f!2sParliament%20of%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1611750371296!5m2!1sen!2slk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    
                </div>
            </div>
            <!-- /google map -->

            <div class="row my-3">

                <!-- contact details -->
                <div class="col-sm-12 col-md-6 col-lg-6 px-5">

                    <div class="row mb-3">

                        <div class="col-sm-12 col-md-2 col-lg-2">
                            <b>Address : </b> <br>
                        </div>

                        <div class="col-sm-12 col-md-10 col-lg-10">
                            No 000, <br>
                            Main Street,<br>
                            Sample City,<br>
                            Sri Lanka.
                        </div>
                    
                    </div>
                    
                    <div class="row mb-3">

                        <div class="col-sm-12 col-md-2 col-lg-2">
                            <b>Hotline : </b>
                        </div>

                        <div class="col-sm-12 col-md-10 col-lg-10">
                            +94 112000000 / 2 / 3 <br>
                        </div>

                    </div>   
                    
                    <div class="row mb-3">

                        <div class="col-sm-12 col-md-2 col-lg-2">
                            <b>Mobile : </b>
                        </div>

                        <div class="col-sm-12 col-md-10 col-lg-10">
                            +94 777 000 000 OR 777 000 123  <br>
                        </div>

                    </div>

                    <div class="row mb-3">

                        <div class="col-sm-12 col-md-2 col-lg-2">
                            <b>E -Mail : </b>
                        </div>

                        <div class="col-sm-12 col-md-10 col-lg-10">
                            info@zit.com <br>
                        </div>

                    </div>

                </div>
                <!-- /contact details -->

                <!-- contact form -->
                <div class="col-sm-12 col-md-6 col-lg-6 px-5">
                    
                        <div class="card">

                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 py-3 px-5">

                                    <form id="contact-form" class="form" action="#" method="POST" role="form">

                                        <div class="mb-2">
                                            <label class="form-label" for="name">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" tabindex="1" required>
                                        </div>    

                                        <div class="mb-2">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" tabindex="2" required>
                                        </div>  

                                        <div class="mb-2">
                                            <label class="form-label" for="number">Number</label>
                                            <input type="tel" class="form-control" id="number" name="number" placeholder="Number" tabindex="3">
                                        </div>    

                                        <div class="mb-2">
                                            <label class="form-label" for="message">Message</label>
                                            <textarea rows="2" name="message" class="form-control" id="message" placeholder="Message..." tabindex="4" required></textarea>                                 
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-start-order">Submit</button>
                                        </div>

                                    </form>

                                </div>
                                
                            </div>

                        </div>
                    
                </div>
                <!-- /contact form -->

            </div>

        </div>
    
        <!-- footer -->
        <?php
            require './footer.php';
        ?>
        
	</body>

    <!-- scripts -->
    <script src="_js/jquery.min.js"></script>
	<script src="_js/bootstrap.bundle.js"></script>
    <script src="_js/_script.js"></script>

</html>