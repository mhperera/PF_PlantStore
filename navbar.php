<!-- <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light"> -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <!-- container -->
    <div class="container-fluid">

        <!-- branding -->
        <a class="navbar-brand" href="index.php">
            <!-- <img src="_images/logo_transparent.png" alt="" width="60" height="60"> -->
            <b>ZIT</b>
        </a>

        <!-- toggle button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            
            <span class="navbar-toggler-icon"></span>

        </button>

        
        <!-- menu -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- menu items -->
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">

                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="services.php">services</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="aboutus.php">About</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="contactus.php">Contact</a>

                </li>

            </ul>
            <!-- /menu items -->

            <!-- right side items -->
            <ul class="navbar-nav ml-auto navbar-right">

                <li class="nav-item">

                    <!-- nav text -->
                    <span class="navbar-text w-auto nav-text-contacts">

                        <i class="fa fa-phone" aria-hidden="true"></i>  +94 77 000 0000 <br>

                    </span>

                    <span class="navbar-text w-auto nav-text-contacts">

                        <i class="fa fa-envelope-o mb-2" aria-hidden="true"></i> : info@zit.com<br>

                    </span>
                    <!-- /nav text -->

                    <!-- nav text -->
                    <span class="navbar-text" style="width:250px;">

                        <div class="bg-white p-2">
                            <div id="fb-root"></div>

                            <script>
                                (function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s); js.id = id;
                                    js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));
                            </script>

                            <!-- <div class="fb-like" data-href="https://www.facebook.com/ZIT/" data-layout="standard" data-action="like" data-show-faces="false" data-share="false" data-width="180"></div> -->
                            <div class="fb-like" data-href="#" data-layout="standard" data-action="like" data-show-faces="false" data-share="false" data-width="180"></div>
                        
                        </div>

                    </span>
                    <!-- /nav text -->

                </li>

            </ul>
            <!-- /right side items -->

        </div>
        <!-- /menu -->

    </div>
    <!-- /container -->

</nav>