<?php
ob_start();

?>
    <header id="header" id="home">
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
                        <div class="menu-social-icons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
                        <a class="btns" href="tel:+953 012 3654 896">+953 012 3654 896</a>
                        <a class="btns" href="mailto:support@colorlib.com">support@colorlib.com</a>
                        <a class="icons" href="tel:+953 012 3654 896">
                            <span class="lnr lnr-phone-handset"></span>
                        </a>
                        <a class="icons" href="mailto:support@colorlib.com">
                            <span class="lnr lnr-envelope"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="menu.html">Menu</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li class="menu-has-children"><a href="">Blog</a>
                            <ul>
                                <li><a href="blog-home.html">Blog Home</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                                <li class="menu-has-children"><a href="">Level 2</a>
                                    <ul>
                                        <li><a href="#">Item One</a></li>
                                        <li><a href="#">Item Two</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="elements.html">Elements</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->

    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row fullscreen d-flex justify-content-center align-items-center">
                <div class="banner-content col-lg-10 col-md-12 justify-content-center">
                    <h6 class="text-uppercase">Whenever we bake, bake with our heart</h6>
                    <h1>
                        Love with baking items
                    </h1>
                    <p class="text-white mx-auto">
                        Since Americans in the South began roasting pigs publicly, Barbecues have been a staple of North American living. For many, grilling becomes a routine mealtime activity.
                    </p>
                    <a href="#" class="primary-btn squire text-uppercase mt-10">Check Our Menu</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start home-about Area -->
    <section class="home-about-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h6 class="text-uppercase">Brand new app to blow your mind</h6>
                    <h1>
                        We’ve baked every item
                        from the core of our heart to serve you
                    </h1>
                    <p>
                        <span>We are here to listen from you deliver exellence by any means</span>
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
                    </p>
                    <a class="primary-btn squire mx-auto mt-20" href="#">Get Started Now</a>
                </div>
            </div>
        </div>
        <img class="about-img" src="../Contenu/img/about-img.png" alt="">
    </section>
    <!-- End home-about Area -->
<?php
$contenu = ob_get_clean();
require "gabarit.php";
