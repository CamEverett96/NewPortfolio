<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Cameron Eveett Portfolio</title>
    <meta name="description" content="">
    <meta name="author" content="">

 <?php require('../includes/head.php');?>

</head>

<body id="top" class="home__page">


   <?php require('../includes/preloader.php');?>
   <?php require('../includes/header.php');?>

 <!-- about
    ================================================== -->
    <section id="about" class="s-about target-section">

        <div class="s-about__section s-about__section--profile">

            <div class="right-vert-line"></div>

            <div class="row">
                <div class="column large-6 medium-8 tab-full">

                    <div class="section-intro" data-num="01" data-aos="fade-up">
                        <h3 class="subhead">About Me</h3>
                        <h1 class="display-1">I'm the kind of person who isn't afraid of challenges.</h1>
                    </div>

                    <div class="profile-pic" data-aos="fade-up">
                        <img src="/images/me.png" 
                             srcset="/images/me.png" alt="">
                    </div>

                    <h3 data-aos="fade-up">Profile</h3>

                    <p data-aos="fade-up">
                        I have a variety of skills within my expertise I posses such as Html, Css, and Javascipt and also PHP. I have expeience building out eye-gazing e-commerce themes and email templates for business and also local clients as well.
                    </p>

                </div>
            </div>

        </div> <!-- end s-about__section--profile -->

    </section> <!-- end s-about -->
  


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->

    <?php require("../includes/scripts.php");?>
   

</body>