
<script>
    /* wording of your error and thank you messages */
    var thankyou = "Thank you";

    function signup(thisform) {
        $("#submit, #myResponse").hide();	// Hide the buttom and the message
        $("#loading").show();				// show the loading image.
        params = $("#subform").serialize();
        $.post("optIn.php", params, function (response) {
            //alert(response); //may need to activate this line for debugging.
            $("#loading").hide();
            $("#myResponse").html(thankyou); //Writes the "Thank you" message that comes from optIn.php and styles it.
            $('#myResponse').css({display: 'inline', color: 'green'})
            $("#submit").show();
        }
        )
        return false;
    }
</script>

<section>

    <!-- footer -->
    <div id="footer-container">

        <div class="container-fluid">

            <div class="row gx-0">

                <div class="col-sm-12 col-md-3 col-lg-3">
                    <ul>
                        <li><a href="#">SAMPLE LINK</a></li>
                        <li><a href="#">SAMPLE LINK</a></li>
                        <li><a href="#">SAMPLE LINK</a></li>
                        <li><a href="#">SAMPLE LINK</a></li>
                        <li><a href="#">SAMPLE LINK</a></li>
                        <li><a href="#">SAMPLE LINK</a></li>
                    </ul>
                </div>

                <div class="col-sm-12 col-md-3 col-lg-3">

                    <ul>   
                        <li><a href="#">SAMPLE LINK</a></li>
                        <li><a href="#">SAMPLE LINK</a></li>
                        <li><a href="#">SAMPLE LINK</a></li>
                        <li><a href="#">SAMPLE LINK</a></li>
                    </ul>

                    <div id="social-media-icons-list">
                        <a href=""><i class="fa fa-facebook " aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-twitter " aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-linkedin " aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-google " aria-hidden="true"></i></a>
                        <a href="tel:+94770000000"><i class="fa fa-skype " aria-hidden="true"></i></a>
                        <a href="tel:+94770000000"><i class="fa fa-whatsapp " aria-hidden="true"></i></a>
                    </div>

                </div>

                <div class="col-sm-12 col-md-3 col-lg-3">
                    <ul>
                        <li><a href="careers.php">CAREERS</a></li>
                        <li><a href="contactus.php">SUPPORT</a></li>
                        <li><a href="aboutus.php">ABOUT</a></li>
                        <li><a href="aboutus.php">SAMPLE</a></li>
                        <li><a href="aboutus.php">SAMPLE</a></li>
                    </ul>
                </div>

                <div class="col-sm-12 col-md-3 col-lg-3">
                    <ul>
                        <li><a href="">SAMPLE LINK</a></li>
                        <li><a href="">SAMPLE LINK</a></li>
                        <li><a href="">SAMPLE LINK</a></li>
                        <li><a href="">SAMPLE LINK</a></li>
                    </ul>
                    <span>Member of</span>
                    <h5>Leaders</h5>
                    <!-- <img src="_images/memberof.png" class="img-fluid" alt="Member of"> -->

                </div>

            </div>

        </div>

    </div>
    <!-- footer -->

    <!-- footer-bottom-line -->
    <div class="container-fluid" id="bottom-line">

        <div class="row gx-0">

            <div class="w-100">
                <p class="m-0">
                    &copy; 2021 ZIT | <i>All rights reserved .</i>
                </p>
            </div>

        </div>

    </div>
    <!-- /footer-bottom-line -->

</section>


