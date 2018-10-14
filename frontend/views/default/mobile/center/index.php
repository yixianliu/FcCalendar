<?php
/**
 *
 * 首页
 *
 * Created by Yxl.
 * User: <zccem@163.com>.
 * Date: 2018/1/31
 * Time: 15:48
 */

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = '网站首页';

?>

<div class="all-elements">
    <div class="snap-drawers">
        <div class="snap-drawer snap-drawer-left">
            <div class="sidebar-header">
                <div class="sidebar-header-logo">
                    <a href="index.html"></a>
                </div>
                <div class="sidebar-header-icons">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-phone"></i></a>
                    <a href="#"><i class="fa fa-comments-o"></i></a>
                    <a href="#" class="close-sidebar"><i class="fa fa-times"></i></a>
                </div>
                <div class="overlay"></div>
            </div>

            <div class="sidebar-menu half-bottom">
                <div class="sidebar-divider">
                    Navigation
                </div>

                <div class="has-submenu">
                    <a class="menu-item show-submenu submenu-active" href="#">
                        <i class="bg-red-dark fa fa-home"></i>
                        <em>Homepages</em>
                        <strong>6</strong>
                    </a>
                    <div class="submenu submenu-active">
                        <a class="submenu-item submenu-item-active" href="index.html"> <i class="fa fa-angle-right"></i><em>
                                Classic Slider </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="index2.html"> <i class="fa fa-angle-right"></i><em> Material
                                Slider </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="index3.html"> <i class="fa fa-angle-right"></i><em> Circle
                                Slider </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="index4.html"> <i class="fa fa-angle-right"></i><em> Fullscreen
                                Slider </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="index5.html"> <i class="fa fa-angle-right"></i><em> Simple
                                Image </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="index6.html"> <i class="fa fa-angle-right"></i><em> Landing
                                Thumbs </em><i class="fa fa-circle"></i></a>
                    </div>
                </div>
                <div class="has-submenu">
                    <a class="menu-item show-submenu" href="#">
                        <i class="bg-green-dark fa fa-cog"></i>
                        <em>Features</em>
                        <strong>5</strong>
                    </a>
                    <div class="submenu">
                        <a class="submenu-item" href="features-typography.html"> <i class="fa fa-angle-right"></i><em>
                                Typography </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="features-jquery.html"> <i class="fa fa-angle-right"></i><em>
                                jQuery </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="features-others.html"> <i class="fa fa-angle-right"></i><em>
                                Others </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="features-sliders.html"> <i class="fa fa-angle-right"></i><em>
                                Sliders </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="features-interactive.html"> <i class="fa fa-angle-right"></i><em>
                                Interactive </em><i class="fa fa-circle"></i></a>
                    </div>
                </div>
                <div class="has-submenu">
                    <a class="menu-item show-submenu" href="#">
                        <i class="bg-blue-dark fa fa-navicon"></i>
                        <em>Menus</em>
                        <strong>5</strong>
                    </a>
                    <div class="submenu">
                        <a class="submenu-item" href="index-left.html"> <i class="fa fa-angle-right"></i><em> Left
                                Sidebar </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="index-right.html"> <i class="fa fa-angle-right"></i><em> Right
                                Sidebar </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="index-dual.html"> <i class="fa fa-angle-right"></i><em> Dual
                                Sidebar </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="index-thumbs.html"> <i class="fa fa-angle-right"></i><em>
                                Thumbnails Menu </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="index-material.html"> <i class="fa fa-angle-right"></i><em>
                                Material Menu </em><i class="fa fa-circle"></i></a>
                    </div>
                </div>
                <div class="has-submenu">
                    <a class="menu-item show-submenu" href="#">
                        <i class="bg-yellow-dark fa fa-camera-retro"></i>
                        <em>Galleries</em>
                        <strong>5</strong>
                    </a>
                    <div class="submenu">
                        <a class="submenu-item" href="gallery-round.html"> <i class="fa fa-angle-right"></i><em>
                                Round </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="gallery-square.html"> <i class="fa fa-angle-right"></i><em>
                                Square </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="gallery-adaptive.html"> <i class="fa fa-angle-right"></i><em>
                                Adaptive </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="gallery-masonry.html"> <i class="fa fa-angle-right"></i><em>
                                Masonry </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="gallery-filter.html"> <i class="fa fa-angle-right"></i><em>
                                Filterable </em><i class="fa fa-circle"></i></a>
                    </div>
                </div>
                <div class="has-submenu">
                    <a class="menu-item show-submenu" href="#">
                        <i class="bg-teal-light fa fa-picture-o"></i>
                        <em>Portfolios</em>
                        <strong>5</strong>
                    </a>
                    <div class="submenu">
                        <a class="submenu-item" href="portfolio-one.html"> <i class="fa fa-angle-right"></i><em> One
                                Item </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="portfolio-two.html"> <i class="fa fa-angle-right"></i><em> Two
                                Items </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="portfolio-filter.html"> <i class="fa fa-angle-right"></i><em>
                                Filterable </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="portfolio-wide.html"> <i class="fa fa-angle-right"></i><em>
                                Widescreen </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="portfolio-adaptive.html"> <i class="fa fa-angle-right"></i><em>
                                Adaptive </em><i class="fa fa-circle"></i></a>
                    </div>
                </div>
                <div>
                    <a class="menu-item show-submenu" href="#">
                        <i class="bg-gray-dark fa fa-file-o"></i>
                        <em>Pages</em>
                        <strong>8</strong>
                    </a>
                    <div class="submenu">
                        <a class="submenu-item" href="page-activity.html"> <i class="fa fa-angle-right"></i><em>
                                Activity </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="page-calendar.html"> <i class="fa fa-angle-right"></i><em>
                                Calendar </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="page-charts.html"> <i class="fa fa-angle-right"></i><em>
                                Charts </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="page-404.html"> <i class="fa fa-angle-right"></i><em> 404
                                Error </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="page-soon.html"> <i class="fa fa-angle-right"></i><em> Coming
                                Soon </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="page-profile.html"> <i class="fa fa-angle-right"></i><em> User
                                Profile </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="page-signup.html"> <i class="fa fa-angle-right"></i><em>
                                Signup </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="page-login.html"> <i class="fa fa-angle-right"></i><em> User
                                Login </em><i class="fa fa-circle"></i></a>
                    </div>
                </div>
                <div class="has-submenu">
                    <a class="menu-item show-submenu" href="#">
                        <i class="bg-night-dark fa fa-power-off"></i>
                        <em>App Styled</em>
                        <strong>9</strong>
                    </a>
                    <div class="submenu">
                        <a class="submenu-item" href="pageapp-bubbles.html"><i class="fa fa-angle-right"></i><em> Chat
                                Bubbles </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="pageapp-tasklist.html"><i class="fa fa-angle-right"></i><em>
                                Tasklists </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="pageapp-checklist.html"><i class="fa fa-angle-right"></i><em>
                                Checklists </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="pageapp-reminders.html"><i class="fa fa-angle-right"></i><em>
                                Reminders </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="pageapp-signup.html"><i class="fa fa-angle-right"></i><em> Signup
                                Screen </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="pageapp-login.html"><i class="fa fa-angle-right"></i><em> Login
                                Screen </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="pageapp-coverpage.html"><i class="fa fa-angle-right"></i><em>
                                Coverpage </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="pageapp-timeline.html"><i class="fa fa-angle-right"></i><em>
                                Timeline Left </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="pageapp-timeline2.html"><i class="fa fa-angle-right"></i><em>
                                Timeline Center </em><i class="fa fa-circle"></i></a>
                    </div>
                </div>
                <a class="menu-item" href="page-video.html">
                    <i class="bg-red-light fa fa-youtube-play"></i>
                    <em>Videos</em>
                    <i class="fa fa-circle"></i>
                </a>
                <a class="menu-item" href="page-blog.html">
                    <i class="bg-magenta-dark fa fa-pencil"></i>
                    <em>Blog</em>
                    <i class="fa fa-circle"></i>
                </a>
                <a class="menu-item" href="page-map.html">
                    <i class="bg-orange-dark fa fa-map-marker"></i>
                    <em>Map</em>
                    <i class="fa fa-circle"></i>
                </a>
                <a class="menu-item" href="contact.html">
                    <i class="bg-night-dark fa fa-envelope-o"></i>
                    <em>Contact</em>
                    <i class="fa fa-circle"></i>
                </a>
                <a class="menu-item close-sidebar" href="#">
                    <i class="bg-red-dark fa fa-times"></i>
                    <em>Close</em>
                    <i class="fa fa-circle"></i>
                </a>
            </div>

            <div class="sidebar-divider">
                Get social with us
            </div>

            <div class="sidebar-menu half-bottom">
                <a class="menu-item" href="https://www.facebook.com/enabled.labs">
                    <i class="facebook-color fa fa-facebook"></i>
                    <em>Facebook</em>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a class="menu-item" href="https://twitter.com/iEnabled">
                    <i class="twitter-color fa fa-twitter"></i>
                    <em>Twitter</em>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a class="menu-item" href="#">
                    <i class="google-color fa fa-google-plus"></i>
                    <em>Google Plus</em>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a class="menu-item" href="#">
                    <i class="youtube-color fa fa-youtube-play"></i>
                    <em>YouTube</em>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>

            <div class="sidebar-divider">
                Get in touch with us
            </div>

            <div class="sidebar-menu">
                <a class="menu-item" href="tel:+123 456 7890">
                    <i class="bg-green-dark fa fa-phone"></i>
                    <em>Call Us</em>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a class="menu-item" href="sms:+123 456 7890">
                    <i class="bg-blue-dark fa fa-comment-o"></i>
                    <em>Text Us</em>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a class="menu-item" href="mailto:someone@yoursite.com?subject=Message from ThemeForest">
                    <i class="bg-magenta-dark fa fa-envelope-o"></i>
                    <em>Mail Us</em>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a class="menu-item close-sidebar" href="#">
                    <i class="bg-red-dark fa fa-times"></i>
                    <em>Close</em>
                    <i class="fa fa-circle"></i>
                </a>
            </div>
            <p class="sidebar-footer">Copyright 2015. All rights reserved</p>
        </div>

        <!--Right Sidebar -->

        <div class="snap-drawer snap-drawer-right">
            <div class="sidebar-header">
                <div class="sidebar-header-logo">
                    <a href="index.html"></a>
                </div>
                <div class="sidebar-header-icons">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-phone"></i></a>
                    <a href="#"><i class="fa fa-comments-o"></i></a>
                    <a href="#" class="close-sidebar"><i class="fa fa-times"></i></a>
                </div>
                <div class="overlay"></div>
            </div>

            <div class="sidebar-divider">
                Get social with us
            </div>

            <div class="sidebar-menu half-bottom">
                <a class="menu-item" href="#">
                    <i class="facebook-color fa fa-facebook"></i>
                    <em>Facebook</em>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a class="menu-item" href="#">
                    <i class="twitter-color fa fa-twitter"></i>
                    <em>Twitter</em>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a class="menu-item" href="#">
                    <i class="google-color fa fa-google-plus"></i>
                    <em>Google Plus</em>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a class="menu-item" href="#">
                    <i class="youtube-color fa fa-youtube-play"></i>
                    <em>YouTube</em>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>

            <div class="sidebar-divider">
                Send us a message
            </div>

            <div class="container no-bottom">
                <div class="sidebar-form contact-form no-bottom">

                    <em>
                        Your message is important to us and we reply to all of them in less than 48 hours.
                    </em>

                    <div class="formSuccessMessageWrap" id="formSuccessMessageWrap">
                        Awesome! We'll get back to you!
                    </div>

                    <form action="php/contact.php" method="post" class="contactForm" id="contactForm">
                        <fieldset>
                            <div class="formValidationError" id="contactNameFieldError">Name is required!</div>
                            <div class="formValidationError" id="contactEmailFieldError">Mail address required!</div>
                            <div class="formValidationError" id="contactEmailFieldError2">Mail address must be valid!
                            </div>
                            <div class="formValidationError" id="contactMessageTextareaError">Message field is empty!
                            </div>
                            <div class="formFieldWrap">
                                <input onfocus="if (this.value=='Name') this.value = ''"
                                       onblur="if (this.value=='') this.value = 'Name'" type="text"
                                       name="contactNameField" value="Name" class="contactField requiredField"
                                       id="contactNameField"/>
                            </div>
                            <div class="formFieldWrap">
                                <input onfocus="if (this.value=='Email') this.value = ''"
                                       onblur="if (this.value=='') this.value = 'Email'" type="text"
                                       name="contactEmailField" value="Email"
                                       class="contactField requiredField requiredEmailField" id="contactEmailField"/>
                            </div>
                            <div class="formTextareaWrap">
                                <textarea onfocus="if (this.value=='Message') this.value = ''"
                                          onblur="if (this.value=='') this.value = 'Message'"
                                          name="contactMessageTextarea" class="contactTextarea requiredField"
                                          id="contactMessageTextarea">Message</textarea>
                            </div>
                            <div class="formSubmitButtonErrorsWrap">
                                <input type="submit" class="buttonWrap button button-green contactSubmitButton"
                                       id="contactSubmitButton" value="SUBMIT" data-formId="contactForm"/>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>

            <div class="sidebar-divider">
                get in touch with us
            </div>

            <div class="sidebar-menu">
                <a class="menu-item" href="tel:+123 456 7890">
                    <i class="bg-green-dark fa fa-phone"></i>
                    <em>Call Us</em>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a class="menu-item" href="sms:+123 456 7890">
                    <i class="bg-blue-light fa fa-comment-o"></i>
                    <em>Text Us</em>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a class="menu-item" href="mailto:someone@yoursite.com?subject=Message from ThemeForest">
                    <i class="bg-magenta-dark fa fa-envelope-o"></i>
                    <em>Mail Us</em>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a class="menu-item close-sidebar" href="#">
                    <i class="bg-red-dark fa fa-times"></i>
                    <em>Close</em>
                    <i class="fa fa-angle-circle"></i>
                </a>
            </div>
            <p class="sidebar-footer">Copyright 2015. All rights reserved</p>
        </div>

        <div id="content" class="snap-content">
            <div class="content">
                <div class="header-clear-large"></div>
                <!--Page content goes here, fixed elements go above the all elements class-->

                <div class="homepage-slider full-bottom">
                    <div class="homepage-slider-transition" data-snap-ignore="true">
                        <div class="homepage-slider-item">
                            <h5 class="left-text">Welcome, stranger</h5>
                            <p class="left-text">Swipe the image to begin.</p>
                            <img src="images/pictures/4.jpg" alt="img">
                            <div class="overlay bg-black"></div>
                        </div>
                        <div class="homepage-slider-item">
                            <h5 class="center-text">This slider has CSS3 transitions</h5>
                            <p class="center-text">And they are just awesome!</p>
                            <img src="images/pictures/5.jpg" alt="img">
                            <div class="overlay bg-black"></div>
                        </div>
                        <div class="homepage-slider-item">
                            <h5 class="right-text">Just add a simple class</h5>
                            <p class="right-text">And you got yourself transitions!</p>
                            <img src="images/pictures/6.jpg" alt="img">
                            <div class="overlay bg-black"></div>
                        </div>
                    </div>
                    <a href="#" class="next-home-slider"><i class="fa fa-angle-right"></i></a>
                    <a href="#" class="prev-home-slider"><i class="fa fa-angle-left"></i></a>
                </div>

                <div class="container material-container">
                    <h4>Welcome</h4>
                    <p class="no-bottom">
                        Experimenting with new designs is always fun, especially when new designs are built using
                        material properties to make it sexier!
                    </p>
                </div>
                <div class="material-more">
                    <a href="#"><i class="fa fa-link"></i>Read More</a>
                    <a class="show-share-bottom" href="#"><i class="fa fa-retweet"></i>Share</a>
                </div>

                <div class="clear"></div>

                <div class="decoration"></div>

                <div class="container material-slider material-container" data-snap-ignore="true">
                    <div class="material-slider-item">
                        <img src="images/pictures/3ww.jpg" alt="img">
                        <h4 class="center-text">Built with you in mind!</h4>
                        <em class="center-text small-heading color-red-dark">Easy, accessible, documented properly!</em>
                        <p class="center-text no-bottom">
                            Coded to make it easy to edit, easy to modify and easy to convert
                            to anything you want or just use it as a simple site template!
                        </p>
                    </div>
                    <div class="material-slider-item">
                        <img src="images/pictures/5ww.jpg" alt="img">
                        <h4 class="center-text">Mobile & Tablet</h4>
                        <em class="center-text small-heading color-red-dark">From mobiles to phablets to large
                            tablets!</em>
                        <p class="center-text no-bottom">
                            Our products are tested, designed, and built to make them look
                            gorgeous on all mobile devices without sacrificing features!
                        </p>
                    </div>
                    <div class="material-slider-item">
                        <img src="images/pictures/8ww.jpg" alt="img">
                        <h4 class="center-text">PhoneGap & Cordova</h4>
                        <em class="center-text small-heading color-red-dark">Conversting is up to you, we made it
                            easy!</em>
                        <p class="center-text no-bottom">
                            Our framewokr is ready built to be converted to PhoneGap and Cordova,
                            coded to the latest standards to make your conversion easy!
                        </p>
                    </div>
                </div>

                <div class="decoration"></div>

                <div class="container material-container">
                    <img src="images/demo_img.png" alt="img" class="responsive-image full-bottom">
                    <h4 class="center-text">Featured Project</h4>
                    <em class="small-heading color-red-dark center-text">Show off your featured work in style!</em>
                    <p class="center-text no-bottom">
                        All your mobile devices are compatible with material, and it will look gorgeous on your whatever
                        handheld you use!
                    </p>
                </div>

                <div class="material-more">
                    <a href="#"><i class="fa fa-link"></i>Portfolio Page</a>
                    <a class="show-share-bottom" href="#"><i class="fa fa-retweet"></i>Share</a>
                </div>

                <div class="clear"></div>

                <div class="decoration"></div>

                <div class="container material-container">
                    <h4 class="center-text">Most recent works!</h4>
                    <em class="small-heading color-red-dark center-text half-bottom">The latest items we've made,
                        filtered</em>
                    <div class="decoration"></div>
                    <div class="portfolio-filter">
                        <div class="portfolio-filter-categories">
                            <a href="#" class="filter-category selected-filter" data-rel="all-cat">All</a>
                            <a href="#" class="filter-category" data-rel="cat1">Websites</a>
                            <a href="#" class="filter-category" data-rel="cat2">Flyers</a>
                            <a href="#" class="filter-category" data-rel="cat3">Business</a>
                        </div>
                        <div class="clear"></div>
                        <div class="portfolio-filter-wrapper">
                            <div class="cat1 all-cat gallery-filter-item">
                                <a class="show-gallery-1" href="images/pictures/1.jpg">
                                    <img src="images/pictures/1s.jpg" class="responsive-image" alt="img">
                                </a>
                            </div>
                            <div class="cat2 all-cat gallery-filter-item">
                                <a class="show-gallery-2" href="images/pictures/2.jpg">
                                    <img src="images/pictures/2s.jpg" class="responsive-image" alt="img">
                                </a>
                            </div>
                            <div class="cat3 all-cat gallery-filter-item">
                                <a class="show-gallery-3" href="images/pictures/3.jpg">
                                    <img src="images/pictures/3s.jpg" class="responsive-image" alt="img">
                                </a>
                            </div>
                            <div class="cat1 all-cat gallery-filter-item">
                                <a class="show-gallery-1" href="images/pictures/4.jpg">
                                    <img src="images/pictures/4s.jpg" class="responsive-image" alt="img">
                                </a>
                            </div>
                            <div class="cat2 all-cat gallery-filter-item">
                                <a class="show-gallery-2" href="images/pictures/5.jpg">
                                    <img src="images/pictures/5s.jpg" class="responsive-image" alt="img">
                                </a>
                            </div>
                            <div class="cat3 all-cat gallery-filter-item">
                                <a class="show-gallery-3" href="images/pictures/6.jpg">
                                    <img src="images/pictures/6s.jpg" class="responsive-image" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="material-more">
                    <a href="#"><i class="fa fa-link"></i>Gallery Page</a>
                    <a class="show-share-bottom" href="#"><i class="fa fa-retweet"></i>Share</a>
                </div>
                <div class="clear"></div>

                <div class="decoration"></div>

                <div class="footer">
                    <p class="center-text">Copyright 2015. All rights reserved.</p>
                    <div class="footer-icons">
                        <a href="#" class="scale-hover facebook-color social-ball"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="scale-hover twitter-color social-ball"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="scale-hover google-color social-ball"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="scale-hover back-to-top bg-green-dark social-ball"><i
                                    class="fa fa-angle-up"></i></a>
                        <a href="#" class="scale-hover show-share-bottom bg-magenta-dark social-ball"><i
                                    class="fa fa-retweet"></i></a>
                    </div>
                </div>

                <!-- End of entire page content-->
            </div>
        </div>
    </div>
    <a href="#" class="back-to-top-badge"><i class="fa fa-caret-up"></i>Back to top</a>
</div>

<!--Fly up share box and notifications go here -->
<!--These are the only features that should be placed outside the all-elements class-->
<div class="share-bottom">
    <h3>Let's get social!</h3>
    <div class="share-socials-bottom">
        <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.themeforest.net/">
            <i class="fa fa-facebook facebook-color"></i>
            Facebook
        </a>
        <a href="https://twitter.com/home?status=Check%20out%20ThemeForest%20http://www.themeforest.net">
            <i class="fa fa-twitter twitter-color"></i>
            Twitter
        </a>
        <a href="https://plus.google.com/share?url=http://www.themeforest.net">
            <i class="fa fa-google-plus google-color"></i>
            Google
        </a>

        <a href="https://pinterest.com/pin/create/button/?url=http://www.themeforest.net/&media=https://0.s3.envato.com/files/63790821/profile-image.jpg&description=Themes%20and%20Templates">
            <i class="fa fa-pinterest-p pinterest-color"></i>
            Pinterest
        </a>
        <a href="sms:+1234567890">
            <i class="fa fa-comment-o sms-color"></i>
            Text
        </a>
        <a href="mailto:?&subject=Check this page out!&body=http://www.themeforest.net">
            <i class="fa fa-envelope-o mail-color"></i>
            Email
        </a>
        <div class="clear"></div>
    </div>
    <a href="#" class="close-share-bottom">Close</a>
</div>

<div class="top-notification-1 top-notification bg-blue-dark">
    <h4>Did you know?</h4>
    <p>
        Easy way to make sure your messages get read!
    </p>
    <a href="#" class="close-top-notification"><i class="fa fa-times"></i></a>
</div>
<div class="bottom-notification-1 bottom-notification bg-green-dark">
    <h4>Did you know?</h4>
    <p>
        Easy way to make sure your messages get read!
    </p>
    <a href="#" class="close-bottom-notification"><i class="fa fa-times"></i></a>
</div>
<div class="bottom-notification-2 bottom-notification bg-orange-dark timeout-notification">
    <h4>Timeout: 5 Seconds</h4>
    <p>
        I'll go away on my own after a few seconds!
    </p>
</div>
<div class="top-notification-2 top-notification bg-red-dark timeout-notification">
    <h4>Timeout: 5 Seconds</h4>
    <p>
        I'll go away on my own after a few seconds!
    </p>
</div>