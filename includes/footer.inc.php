<?php
echo "
  <!--Footer-->
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-12 col-xs-12\">
                    <div class=\"footer-widget\">
                        <h3>Bizface</h3>
                        <div class=\"widget-content\">
                            <div class=\"text\">Lorem ipsum dolor sit amet, consects adipiscing elit enean commodo ligula.</div>
                            <address>
                                <p><a href=\"#\"><i class=\"fa fa-map-marker\"></i></a> USA, America</p>
                                <p><a href=\"#\"><i class=\"fa fa-phone\"></i></a>+977-9746390089</p>
                                <p><a href=\"#\"><i class=\"fa fa-envelope\"></i></a> ripplethemes@gmail.com</p>
                            </address>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-5 col-sm-6 col-xs-12\">
                    <div class=\"footer-widget links-widget\">
                        <h3>Explore</h3>
                    
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-6 col-sm-12\">
                            <ul>
                                <li><a href=\"#\">home</a></li>
                                <li><a href=\"#\">about</a></li>
                                <li><a href=\"#\">services</a></li>
                                <li><a href=\"#\">projects</a></li>
                                <li><a href=\"#\">contact</a></li>
                                
                            </ul>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-sm-12\">
                            <ul>
                                <li><a href=\"#\">News</a></li>
                                <li><a href=\"#\">Trade</a></li>
                                <li><a href=\"#\">Investment</a></li>
                                <li><a href=\"#\">projects</a></li>
                                <li><a href=\"#\">contact</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>

                <div class=\"col-md-3 col-sm-6 col-xs-12\" id=\"newsletter\">
                    <div class=\"footer-widget subscribe-widget\">
                        <h3>Newsletter</h3>
                        <div class=\"widget-content\">
                            <div class=\"text\">Lorem ipsum dolor sit amet, adipiscing </div>
                            <div class=\"newsletter-form\">
                                <form action=\"includes/newsletter.inc.php\" method=\"post\">
                                    <div class=\"form-group\">
                                        <input type=\"hidden\" name=\"hidden\">
                                        <input type=\"hidden\" name=\"formLocation\" value=\"footer\">
                                        <input type=\"text\" name=\"email\" placeholder=\"Email Address...\" >
                                    </div>
                                    <div>
                                        <span>";
                                                if(isset($_GET['mail'])){
                                                    $mail = $_GET['mail'];
                                                    if($mail == 'error'){
                                                        echo "Error! Please fill in the field!";
                                                    }
                                                    if($mail == 'mail'){
                                                        echo "Please enter a valid email!";
                                                    }
                                                    if($mail == 'fatalError'){
                                                        echo "Oops something went wrong. Please try again!";
                                                    }
                                                    if($mail == 'success'){
                                                        echo "Thank you for sigin up to our newsletter";
                                                    }
                                                    if($mail == 'same'){
                                                        echo "You are already subscribed";
                                                    }
                                                }

                                            echo"</span>
                                    </div>
                                    <div class=\"form-group\">
                                        <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">suscribe now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
  </footer>
    <!--Footer Bottom-->
    <div class=\"footer-bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-6\">
                    <div class=\"text text-left\">Copyrights &copy; <a href=\"#\">ripplethemes</a>. All Rights Reserved</div>
                </div>
                <div class=\"col-md-6 col-sm-6\">
                    <ul class=\"social-links text-right\">
                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li class=\"active\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li><a href=\"https://www.youtube.com/channel/UCuj4wzw9FlD5nL3nf_DEb3A\"><i class=\"fa fa-youtube\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- scroll top -->
    <a class=\"scroll-top\" href=\"javascript:void(0)\"><i class=\"fa fa-angle-up\"></i></a>
    <!-- srolltop end -->


    <!-- js library start -->
    <script  src=\"js/jquery-3.2.1.min.js\"></script>
    <script  src=\"js/bootstrap.min.js\"></script>
    <script  src=\"js/owl.carousel.min.js\"></script>
    <script  src=js/jquery.mixitup.min.js></script>
    <script  src=\"js/jquery.magnific-popup.min.js\"></script>  
    <script  src=\"js/waypoints.min.js\"></script>
    <script  src=\"js/jquery.counterup.min.js\"></script>
    <script  src=js/wow.js></script>
    <script  src=\"js/script.js\"></script>
    <script src=\"js/scroll.js\"></script>
    <script src=\"js/booking.js\"></script>

    <!-- js library end -->
    

</body>

</html>
";