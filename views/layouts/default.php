<?php

/**
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <head>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="SemiColonWeb" />

        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" href="css/dark.css" type="text/css" />
        <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
        <link rel="stylesheet" href="one-page/css/et-line.css" type="text/css" />
        <link rel="stylesheet" href="css/animate.css" type="text/css" />
        <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

        <link rel="stylesheet" href="css/responsive.css" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lt IE 9]>
                <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->

        <link rel="stylesheet" href="css/intro-fonts.css" type="text/css" />
        <link rel="stylesheet" href="css/colors.php?color=267DF4" type="text/css" />

        <!-- Document Title
        ============================================= -->
        <title>Canvas | The Multi-Purpose HTML5 Template</title>

        <style>
            .iportfolio .portfolio-image { overflow: visible; }

            .iportfolio img {
                opacity: 1;
                -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.1), 0 5px 17px rgba(0, 0, 0, 0.15);
                box-shadow: 0 0 1px rgba(0, 0, 0, 0.1), 0 5px 17px rgba(0, 0, 0, 0.15);
                -webkit-transition: opacity .4s ease;
                -o-transition: opacity .4s ease;
                transition: opacity .4s ease;
            }

            .iportfolio img:hover { opacity: 0.85; }

            .iportfolio .portfolio-desc h3 {
                font-weight: 400;
                font-size: 14px;
                text-transform: uppercase;
                letter-spacing: 1px;
                margin-top: 15px;
            }

            .iportfolio .portfolio-desc h3 a:hover { color: #777; }

            .iportfolio .portfolio-desc h3 a span {
                display: inline-block;
                position: relative;
                top: -1px;
                vertical-align: middle;
                margin: 0 0 0 3px;
                font-size: 11px !important;
                padding: 5px 7px;
                font-weight: 400;
                color: #FFF;
                letter-spacing: 0;
                text-transform: none;
            }

            .testimonials-rating {
                margin-top: 15px;
                color: #FFD700;
                font-size: 18px;
                line-height: 1;
            }

            .testi-content p {
                font-size: 18px;
                color: #666;
            }

            .testi-content p:before,
            .testi-content p:after { display: none; }

            .testi-meta:before { display: none; }
            .testi-meta span { padding-left: 0; }

            .intro-support-block {
                border-top: 1px solid #EEE;
                overflow: hidden;
            }

            .intro-support-block > div:before {
                position: absolute;
                content: '';
                top: 0;
                left: -1px;
                width: 0;
                height: 100%;
                border-left: 1px solid #EEE;
            }

            .intro-support-block a.col-padding {
                display: block;
                -webkit-transition: all .3s ease;
                -o-transition: all .3s ease;
                transition: all .3s ease;
            }

            .intro-support-block a.col-padding:hover { background-color: #F5F5F5; }

            .intro-support-block span {
                display: block;
                font-size: 20px;
                color: #444;
                margin-top: 15px;
            }

            .device-xs .intro-support-block > div:before,
            .device-xxs .intro-support-block > div:before {
                top: -1px;
                left: 0;
                width: 100%;
                height: 0;
                border-left: 0;
                border-top: 1px solid #EEE;
            }

            #page-menu {
                height: 0;
                overflow: hidden;
                -webkit-backface-visibility: hidden;
            }

            #page-menu #page-menu-wrap {
                opacity: 0;
                pointer-events: none;
                -webkit-transition: all .4s ease;
                -o-transition: all .4s ease;
                transition: all .4s ease;
                -webkit-transform: translate3d(0,-44px,0);
                -o-transform: translate3d(0,-44px,0);
                transform: translate3d(0,-44px,0);
                transform-style: preserve-3d;
                -webkit-backface-visibility: hidden;
            }

            #page-menu.sticky-page-menu { overflow: visible; }

            #page-menu.sticky-page-menu #page-menu-wrap {
                opacity: 1;
                pointer-events: auto;
                -webkit-transform: translate3d(0,0,0);
                -o-transform: translate3d(0,0,0);
                transform: translate3d(0,0,0);
            }
        </style>

    </head>

    <body class="stretched">

        <!-- Document Wrapper
        ============================================= -->
        <div id="wrapper" class="clearfix">

            <!-- Header
            ============================================= -->
            <header id="header" class="full-header">

                <div id="header-wrap">

                    <div class="container clearfix">

                        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                        <!-- Logo
                        ============================================= -->
                        <div id="logo">
                            <a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Canvas Logo"></a>
                            <a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
                        </div><!-- #logo end -->

                        <!-- Primary Navigation
                        ============================================= -->
                        <nav id="primary-menu" class="mobile-menu-off-canvas dark">

                            <ul>
                                <li><a href="index.html"><div>Home</div></a>
                                    <ul>
                                        <li><a href="index-corporate.html"><div>Home - Corporate</div></a>
                                            <ul>
                                                <li><a href="index-corporate.html"><div>Corporate - Layout 1</div></a></li>
                                                <li><a href="index-corporate-2.html"><div>Corporate - Layout 2</div></a></li>
                                                <li><a href="index-corporate-3.html"><div>Corporate - Layout 3</div></a></li>
                                                <li><a href="index-corporate-4.html"><div>Corporate - Layout 4</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index-portfolio.html"><div>Home - Portfolio</div></a>
                                            <ul>
                                                <li><a href="index-portfolio.html"><div>Portfolio - Layout 1</div></a></li>
                                                <li><a href="index-portfolio-2.html"><div>Portfolio - Layout 2</div></a></li>
                                                <li><a href="index-portfolio-3.html"><div>Portfolio - Masonry</div></a></li>
                                                <li><a href="index-portfolio-4.html"><div>Portfolio - AJAX</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index-blog.html"><div>Home - Blog</div></a>
                                            <ul>
                                                <li><a href="index-blog.html"><div>Blog - Layout 1</div></a></li>
                                                <li><a href="index-blog-2.html"><div>Blog - Layout 2</div></a></li>
                                                <li><a href="index-blog-3.html"><div>Blog - Layout 3</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index-shop.html"><div>Home - Shop</div></a>
                                            <ul>
                                                <li><a href="index-shop.html"><div>Shop - Layout 1</div></a></li>
                                                <li><a href="index-shop-2.html"><div>Shop - Layout 2</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index-magazine.html"><div>Home - Magazine</div></a>
                                            <ul>
                                                <li><a href="index-magazine.html"><div>Magazine - Layout 1</div></a></li>
                                                <li><a href="index-magazine-2.html"><div>Magazine - Layout 2</div></a></li>
                                                <li><a href="index-magazine-3.html"><div>Magazine - Layout 3</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="landing.html"><div>Home - Landing Page</div></a>
                                            <ul>
                                                <li><a href="landing.html"><div>Landing Page - Layout 1</div></a></li>
                                                <li><a href="landing-2.html"><div>Landing Page - Layout 2</div></a></li>
                                                <li><a href="landing-3.html"><div>Landing Page - Layout 3</div></a></li>
                                                <li><a href="landing-4.html"><div>Landing Page - Layout 4</div></a></li>
                                                <li><a href="landing-5.html"><div>Landing Page - Layout 5</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index-fullscreen-image.html"><div>Home - Full Screen</div></a>
                                            <ul>
                                                <li><a href="index-fullscreen-image.html"><div>Full Screen - Image</div></a></li>
                                                <li><a href="index-fullscreen-slider.html"><div>Full Screen - Slider</div></a></li>
                                                <li><a href="index-fullscreen-video.html"><div>Full Screen - Video</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index-onepage.html"><div>Home - One Page</div></a>
                                            <ul>
                                                <li><a href="index-onepage.html"><div>One Page - Default</div></a></li>
                                                <li><a href="index-onepage-2.html"><div>One Page - Submenu</div></a></li>
                                                <li><a href="index-onepage-3.html"><div>One Page - Dots Style</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index-wedding.html"><div>Home - Wedding</div></a></li>
                                        <li><a href="index-restaurant.html"><div>Home - Restaurant</div></a></li>
                                        <li><a href="index-events.html"><div>Home - Events</div></a></li>
                                        <li><a href="index-parallax.html"><div>Home - Parallax</div></a></li>
                                        <li><a href="index-app-showcase.html"><div>Home - App Showcase</div></a></li>
                                        <li><a href="index-boxed.html"><div>Home - Boxed Layout</div></a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><div>Features</div></a>
                                    <ul>
                                        <li><a href="#"><div><i class="icon-stack"></i>Sliders</div></a>
                                            <ul>
                                                <li><a href="slider-revolution.html"><div>Revolution Slider</div></a>
                                                    <ul>
                                                        <li><a href="rs-demo-premium-concept.html"><div>Premium Templates</div></a></li>
                                                        <li><a href="slider-revolution.html"><div>Full Screen</div></a></li>
                                                        <li><a href="slider-revolution-fullwidth.html"><div>Full Width</div></a></li>
                                                        <li><a href="slider-revolution-kenburns.html"><div>Kenburns Effect</div></a></li>
                                                        <li><a href="slider-revolution-html5-videos.html"><div>HTML5 Video</div></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="slider-canvas.html"><div>Canvas Slider</div></a>
                                                    <ul>
                                                        <li><a href="slider-canvas.html"><div>Full Width</div></a></li>
                                                        <li><a href="slider-canvas-fade.html"><div>Fade Transition</div></a></li>
                                                        <li><a href="slider-canvas-autoplay.html"><div>Autoplay Feature</div></a></li>
                                                        <li><a href="slider-canvas-video-event.html"><div>Custom Video Event</div></a></li>
                                                        <li><a href="slider-canvas-pagination.html"><div>Pagination Navigation</div></a></li>
                                                        <li><a href="slider-canvas-3.html"><div>3 Columns</div></a></li>
                                                        <li><a href="slider-canvas-4.html"><div>4 Columns</div></a></li>
                                                        <li><a href="slider-canvas-5.html"><div>5 Columns</div></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="slider-flex.html"><div>Flex Slider</div></a>
                                                    <ul>
                                                        <li><a href="slider-flex.html"><div>Default Layout</div></a></li>
                                                        <li><a href="slider-flex-thumbs.html"><div>with Thumbs</div></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="slider-owl.html"><div>Owl Slider</div></a>
                                                    <ul>
                                                        <li><a href="slider-owl-full.html"><div>Full Width</div></a></li>
                                                        <li><a href="slider-owl.html"><div>Boxed Width</div></a></li>
                                                        <li><a href="slider-owl-videos.html"><div>Video Slider</div></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="static-parallax.html"><div>Static Media</div></a>
                                                    <ul>
                                                        <li><a href="static-parallax.html"><div>Static - Parallax</div></a></li>
                                                        <li><a href="static-image.html"><div>Static - Image</div></a></li>
                                                        <li><a href="static-thumbs-grid.html"><div>Static - Thumb Gallery</div></a></li>
                                                        <li><a href="static-html5-video.html"><div>Static - HTML5 Video</div></a></li>
                                                        <li><a href="static-embed-video.html"><div>Static - Embedded Video</div></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="slider-camera.html"><div>Camera Slider</div></a></li>
                                                <li><a href="slider-elastic.html"><div>Elastic Slider</div></a></li>
                                                <li><a href="slider-nivo.html"><div>Nivo Slider</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="widgets.html"><div><i class="icon-gift"></i>Widgets</div></a>
                                            <ul>
                                                <li><a href="widgets.html"><div>Links</div></a></li>
                                                <li><a href="widgets.html"><div>Flickr Photostream</div></a></li>
                                                <li><a href="widgets.html"><div>Dribbble Shots</div></a></li>
                                                <li><a href="widgets.html"><div>Instagram Feed</div></a></li>
                                                <li><a href="widgets.html"><div>Posts List</div></a></li>
                                                <li><a href="widgets.html"><div>Twitter Feed</div></a></li>
                                                <li><a href="widgets.html"><div>Tabbed Widgets</div></a></li>
                                                <li><a href="widgets.html"><div>Carousel</div></a></li>
                                                <li><a href="widgets.html"><div>Subscribers</div></a></li>
                                                <li><a href="widgets.html"><div>Social Icons</div></a></li>
                                                <li><a href="widgets.html"><div>Testimonials</div></a></li>
                                                <li><a href="widgets.html"><div>Quick Contact</div></a></li>
                                                <li><a href="widgets.html"><div>Tags Cloud</div></a></li>
                                                <li><a href="widgets.html"><div>Video Embeds</div></a></li>
                                                <li><a href="widgets.html"><div>Raw Text/HTML</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><div><i class="icon-umbrella"></i>Headers</div></a>
                                            <ul>
                                                <li><a href="header-light.html"><div>Light Version</div></a></li>
                                                <li><a href="header-dark.html"><div>Dark Version</div></a></li>
                                                <li><a href="header-transparent.html"><div>Transparent</div></a></li>
                                                <li><a href="header-semi-transparent.html"><div>Semi Transparent</div></a>
                                                    <ul>
                                                        <li><a href="header-semi-transparent.html"><div>Light Version</div></a></li>
                                                        <li><a href="header-semi-transparent-dark.html"><div>Dark Version</div></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="header-side-left.html"><div>Left Side Header</div></a>
                                                    <ul>
                                                        <li><a href="header-side-left.html"><div>Fixed Position</div></a></li>
                                                        <li><a href="header-side-left-open.html"><div>OnClick Open</div></a></li>
                                                        <li><a href="header-side-left-open-push.html"><div>Push Content</div></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="header-side-right.html"><div>Right Side Header</div></a>
                                                    <ul>
                                                        <li><a href="header-side-right.html"><div>Fixed Position</div></a></li>
                                                        <li><a href="header-side-right-open.html"><div>OnClick Open</div></a></li>
                                                        <li><a href="header-side-right-open-push.html"><div>Push Content</div></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="header-floating.html"><div>Floating Version</div></a></li>
                                                <li><a href="static-sticky.html"><div>Static Sticky</div></a></li>
                                                <li><a href="responsive-sticky.html"><div>Responsive Sticky</div></a></li>
                                                <li><a href="logo-changer.html"><div>Alternate Logos</div></a></li>
                                                <li><a href="alternate-mobile-menu.html"><div>Alternate Mobile Menu</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="side-panel.html"><div><i class="icon-line-layout"></i>Side Panel</div></a>
                                            <ul>
                                                <li><a href="side-panel-left-overlay.html"><div>Left Overlay</div></a></li>
                                                <li><a href="side-panel-left-push.html"><div>Left Push</div></a></li>
                                                <li><a href="side-panel-right-overlay.html"><div>Right Overlay</div></a></li>
                                                <li><a href="side-panel.html"><div>Right Push</div></a></li>
                                                <li><a href="side-panel-light.html"><div>Light Background</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="mega-menu.html"><div><i class="icon-line-columns"></i>Mega Menu</div></a></li>
                                        <li><a href="#"><div><i class="icon-align-justify2"></i>Menu Styles</div></a>
                                            <ul>
                                                <li><a href="header-light.html"><div>Menu - Style 1</div></a></li>
                                                <li><a href="menu-2.html"><div>Menu - Style 2</div></a></li>
                                                <li><a href="menu-3.html"><div>Menu - Style 3</div></a></li>
                                                <li><a href="menu-4.html"><div>Menu - Style 4</div></a></li>
                                                <li><a href="menu-5.html"><div>Menu - Style 5</div></a></li>
                                                <li><a href="menu-6.html"><div>Menu - Style 6</div></a></li>
                                                <li><a href="menu-7.html"><div>Menu - Style 7</div></a></li>
                                                <li><a href="menu-8.html"><div>Menu - Style 8</div></a></li>
                                                <li><a href="menu-9.html"><div>Menu - Style 9</div></a></li>
                                                <li><a href="menu-10.html"><div>Menu - Overlay</div></a></li>
                                                <li><a href="split-menu.html"><div>Menu - Split Layout</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><div><i class="icon-ok-sign"></i>Page Titles</div></a>
                                            <ul>
                                                <li><a href="page.html"><div>Left Align</div></a></li>
                                                <li><a href="page-title-right.html"><div>Right Align</div></a></li>
                                                <li><a href="page-title-center.html"><div>Center Align</div></a></li>
                                                <li><a href="page-titledark.html"><div>Dark Style</div></a></li>
                                                <li><a href="page-title-pattern.html"><div>Pattern Background</div></a></li>
                                                <li><a href="page-title-parallax.html"><div>Parallax Background</div></a>
                                                    <ul>
                                                        <li><a href="page-title-parallax.html"><div>Default Header</div></a></li>
                                                        <li><a href="page-title-parallax-header.html"><div>Transparent Header</div></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="page-title-video.html"><div>HTML5 Video</div></a></li>
                                                <li><a href="page-title-nobg.html"><div>No Background</div></a></li>
                                                <li><a href="page-title-mini.html"><div>Mini Version</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html"><div><i class="icon-envelope-alt"></i>Contact Pages</div></a>
                                            <ul>
                                                <li><a href="contact.html">Contact 1</a></li>
                                                <li><a href="contact-2.html">Contact 2</a></li>
                                                <li><a href="contact-3.html">Contact 3</a></li>
                                                <li><a href="contact-4.html">Contact 4</a></li>
                                                <li><a href="contact-5.html">Contact 5</a></li>
                                                <li><a href="contact-6.html">Contact 6</a></li>
                                                <li><a href="contact-7.html">Contact 7</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#footer" data-scrollto="#footer"><div><i class="icon-th"></i>Footers</div></a>
                                            <ul>
                                                <li><a href="sticky-footer.html"><div>Sticky Footer</div></a></li>
                                                <li><a href="#footer" data-scrollto="#footer"><div>Footer - Layout 1</div></a></li>
                                                <li><a href="footer-2.html#footer"><div>Footer - Layout 2</div></a></li>
                                                <li><a href="footer-3.html#footer"><div>Footer - Layout 3</div></a></li>
                                                <li><a href="footer-4.html#footer"><div>Footer - Layout 4</div></a></li>
                                                <li><a href="footer-5.html#footer"><div>Footer - Layout 5</div></a></li>
                                                <li><a href="footer-6.html#footer"><div>Footer - Layout 6</div></a></li>
                                                <li><a href="footer-7.html#footer"><div>Footer - Layout 7</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><div><i class="icon-calendar3"></i>Events</div></a>
                                            <ul>
                                                <li><a href="events-calendar.html"><div>Full Width Calendar</div></a></li>
                                                <li><a href="events-list.html"><div>Events List</div></a>
                                                    <ul>
                                                        <li><a href="events-list.html"><div>Right Sidebar</div></a></li>
                                                        <li><a href="events-list-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                                        <li><a href="events-list-both-sidebar.html"><div>Both Sidebar</div></a></li>
                                                        <li><a href="events-list-fullwidth.html"><div>Full Width</div></a></li>
                                                        <li><a href="events-list-parallax.html"><div>Parallax List</div></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="event-single.html"><div>Single Event</div></a>
                                                    <ul>
                                                        <li><a href="event-single-right-sidebar.html"><div>Right Sidebar</div></a></li>
                                                        <li><a href="event-single-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                                        <li><a href="event-single-both-sidebar.html"><div>Both Sidebar</div></a></li>
                                                        <li><a href="event-single.html"><div>Full Width</div></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="event-single-full-width-image.html"><div>Single Event - Full</div></a>
                                                    <ul>
                                                        <li><a href="event-single-full-width-image.html"><div>Parallax Image</div></a></li>
                                                        <li><a href="event-single-full-width-map.html"><div>Google Map</div></a></li>
                                                        <li><a href="event-single-full-width-slider.html"><div>Slider Gallery</div></a></li>
                                                        <li><a href="event-single-full-width-video.html"><div>HTML5 Video</div></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="modal-onload.html"><div><i class="icon-line-expand"></i>Modal OnLoad</div></a>
                                            <ul>
                                                <li><a href="modal-onload.html"><div>Simple Layout</div></a></li>
                                                <li><a href="modal-onload-iframe.html"><div>Video iFrame</div></a></li>
                                                <li><a href="modal-onload-subscribe.html"><div>Subscription Form</div></a></li>
                                                <li><a href="modal-onload-common-height.html"><div>Common Height</div></a></li>
                                                <li><a href="modal-onload-cookie.html"><div>Cookies Enabled</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="coming-soon.html"><div><i class="icon-time"></i>Coming Soon</div></a>
                                            <ul>
                                                <li><a href="coming-soon.html"><div>Simple Layout</div></a></li>
                                                <li><a href="coming-soon-2.html"><div>Parallax Image</div></a></li>
                                                <li><a href="coming-soon-3.html"><div>HTML5 Video</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="profile.html"><div><i class="icon-user"></i>User Profile</div></a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu"><a href="#"><div>Pages</div></a>
                                    <div class="mega-menu-content style-2 clearfix">
                                        <ul class="mega-menu-column col-md-3">
                                            <li class="mega-menu-title"><a href="#"><div>Introduction</div></a>
                                                <ul>
                                                    <li><a href="about.html"><div>About Us</div></a></li>
                                                    <li><a href="about-2.html"><div>About Us - Layout 2</div></a></li>
                                                    <li><a href="about-me.html"><div>About Me</div></a></li>
                                                    <li><a href="team.html"><div>Team Members</div></a></li>
                                                    <li><a href="jobs.html"><div>Careers</div></a></li>
                                                    <li><a href="side-navigation.html"><div>Side Navigation</div></a></li>
                                                    <li><a href="page-submenu.html"><div>Page Submenu</div></a></li>
                                                    <li><a href="sitemap.html"><div>Sitemap</div></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="mega-menu-column col-md-3">
                                            <li class="mega-menu-title"><a href="#"><div>Utility</div></a>
                                                <ul>
                                                    <li><a href="services.html"><div>Services - Layout 1</div></a></li>
                                                    <li><a href="services-2.html"><div>Services - Layout 2</div></a></li>
                                                    <li><a href="services-3.html"><div>Services - Layout 3</div></a></li>
                                                    <li><a href="faqs.html"><div>FAQs - Layout 1</div></a></li>
                                                    <li><a href="faqs-2.html"><div>FAQs - Layout 2</div></a></li>
                                                    <li><a href="faqs-3.html"><div>FAQs - Layout 3</div></a></li>
                                                    <li><a href="faqs-4.html"><div>FAQs - Layout 4</div></a></li>
                                                    <li><a href="maintenance.html"><div>Maintenance Page</div></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="mega-menu-column col-md-3">
                                            <li class="mega-menu-title"><a href="#"><div>Layout Grids</div></a>
                                                <ul>
                                                    <li><a href="full-width.html"><div>Full Width</div></a></li>
                                                    <li><a href="full-width-wide.html"><div>Full Width - Wide</div></a></li>
                                                    <li><a href="right-sidebar.html"><div>Right Sidebar</div></a></li>
                                                    <li><a href="left-sidebar.html"><div>Left Sidebar</div></a></li>
                                                    <li><a href="both-sidebar.html"><div>Both Sidebar</div></a></li>
                                                    <li><a href="both-right-sidebar.html"><div>Both Right Sidebar</div></a></li>
                                                    <li><a href="both-left-sidebar.html"><div>Both Left Sidebar</div></a></li>
                                                    <li><a href="blank-page.html"><div>Blank Page</div></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="mega-menu-column col-md-3">
                                            <li class="mega-menu-title"><a href="#"><div>Miscellaneous</div></a>
                                                <ul>
                                                    <li><a href="login-register.html"><div>Login/Register</div></a></li>
                                                    <li><a href="login-register-2.html"><div>Login/Register - Style 2</div></a></li>
                                                    <li><a href="login-register-3.html"><div>Login/Register - Style 3</div></a></li>
                                                    <li><a href="login-1.html"><div>Login - Style 1</div></a></li>
                                                    <li><a href="login-2.html"><div>Login - Style 2</div></a></li>
                                                    <li><a href="404.html"><div>404 - Simple Layout</div></a></li>
                                                    <li><a href="404-2.html"><div>404 - Parallax Image</div></a></li>
                                                    <li><a href="404-3.html"><div>404 - HTML5 Video</div></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mega-menu"><a href="#"><div>Portfolio</div></a>
                                    <div class="mega-menu-content style-2 clearfix">
                                        <ul class="mega-menu-column col-5">
                                            <li class="mega-menu-title"><a href="#"><div>Grids</div></a>
                                                <ul>
                                                    <li><a href="portfolio-1.html"><div>1 Column</div></a></li>
                                                    <li><a href="portfolio-2.html"><div>2 Columns</div></a></li>
                                                    <li><a href="portfolio-3.html"><div>3 Columns</div></a></li>
                                                    <li><a href="portfolio.html"><div>4 Columns</div></a></li>
                                                    <li><a href="portfolio-5.html"><div>5 Columns</div></a></li>
                                                    <li><a href="portfolio-6.html"><div>6 Columns</div></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="mega-menu-column col-5">
                                            <li class="mega-menu-title"><a href="#"><div>Masonry</div></a>
                                                <ul>
                                                    <li><a href="portfolio-mixed-masonry.html"><div>Mixed Columns</div></a></li>
                                                    <li><a href="portfolio-2-masonry.html"><div>2 Columns</div></a></li>
                                                    <li><a href="portfolio-3-masonry.html"><div>3 Columns</div></a></li>
                                                    <li><a href="portfolio-masonry.html"><div>4 Columns</div></a></li>
                                                    <li><a href="portfolio-5-masonry.html"><div>5 Columns</div></a></li>
                                                    <li><a href="portfolio-6-masonry.html"><div>6 Columns</div></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="mega-menu-column col-5">
                                            <li class="mega-menu-title"><a href="#"><div>Loading Styles</div></a>
                                                <ul>
                                                    <li><a href="portfolio.html"><div>jQuery Filter</div></a></li>
                                                    <li><a href="portfolio-jpagination.html"><div>jQuery Pagination</div></a></li>
                                                    <li><a href="portfolio-infinity-scroll.html"><div>Infinity Scroll</div></a></li>
                                                    <li><a href="portfolio-ajax.html"><div>AJAX In Page</div></a></li>
                                                    <li><a href="portfolio-ajax-in-modal.html"><div>AJAX In Modal</div></a></li>
                                                    <li><a href="portfolio-filter-styles.html"><div>Filter Styles</div></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="mega-menu-column col-5">
                                            <li class="mega-menu-title"><a href="#"><div>Single Project</div></a>
                                                <ul>
                                                    <li><a href="portfolio-single-extended.html"><div>Extended Item</div></a></li>
                                                    <li><a href="portfolio-single-fullwidth.html"><div>Parallax Image</div></a></li>
                                                    <li><a href="portfolio-single-gallery-full.html"><div>Slider Gallery</div></a></li>
                                                    <li><a href="portfolio-single-video-fullwidth-left-sidebar.html"><div>HTML5 Video</div></a></li>
                                                    <li><a href="portfolio-single-thumbs-right-sidebar.html"><div>Masonry Thumbs</div></a></li>
                                                    <li><a href="portfolio-single-video-both-sidebar.html"><div>Embed Video</div></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="mega-menu-column col-5">
                                            <li class="mega-menu-title"><a href="#"><div>Layouts</div></a>
                                                <ul>
                                                    <li><a href="portfolio-nomargin.html"><div>Default</div></a></li>
                                                    <li><a href="portfolio-1-alt-right-sidebar.html"><div>Right Sidebar</div></a></li>
                                                    <li><a href="portfolio-3-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                                    <li><a href="portfolio-2-both-sidebar.html"><div>Both Sidebar</div></a></li>
                                                    <li><a href="portfolio-fullwidth-notitle.html"><div>100% Width</div></a></li>
                                                    <li><a href="portfolio-parallax.html"><div>Parallax</div></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mega-menu"><a href="#"><div>Blog</div></a>
                                    <div class="mega-menu-content style-2 clearfix">
                                        <ul class="mega-menu-column col-md-3">
                                            <li class="mega-menu-title"><a href="#"><div>Default</div></a>
                                                <ul>
                                                    <li><a href="blog.html"><div>Right Sidebar</div></a></li>
                                                    <li><a href="blog-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                                    <li><a href="blog-both-sidebar.html"><div>Both Sidebar</div></a></li>
                                                    <li><a href="blog-full-width.html"><div>Full Width</div></a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-title"><a href="#"><div>Timeline</div></a>
                                                <ul>
                                                    <li><a href="blog-timeline-right-sidebar.html"><div>Right Sidebar</div></a></li>
                                                    <li><a href="blog-timeline-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                                    <li><a href="blog-timeline.html"><div>Full Width</div></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="mega-menu-column col-md-3">
                                            <li class="mega-menu-title"><a href="#"><div>Masonry</div></a>
                                                <ul>
                                                    <li><a href="blog-masonry.html"><div>4 Columns</div></a></li>
                                                    <li><a href="blog-masonry-3.html"><div>3 Columns</div></a></li>
                                                    <li><a href="blog-masonry-2.html"><div>2 Columns</div></a></li>
                                                    <li><a href="blog-masonry-full.html"><div>100% Width</div></a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-title"><a href="#"><div>Grid</div></a>
                                                <ul>
                                                    <li><a href="blog-grid.html"><div>4 Columns</div></a></li>
                                                    <li><a href="blog-grid-3.html"><div>3 Columns</div></a></li>
                                                    <li><a href="blog-grid-2.html"><div>2 Columns</div></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="mega-menu-column col-md-3">
                                            <li class="mega-menu-title"><a href="#"><div>Small Thumbs</div></a>
                                                <ul>
                                                    <li><a href="blog-small-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                                    <li><a href="blog-small.html"><div>Right Sidebar</div></a></li>
                                                    <li><a href="blog-small-both-sidebar.html"><div>Both Sidebar</div></a></li>
                                                    <li><a href="blog-small-full-width.html"><div>Full Width</div></a></li>
                                                    <li><a href="blog-small-alt.html"><div>Alternate Layout</div></a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-title"><a href="#"><div>Item Splitting</div></a>
                                                <ul>
                                                    <li><a href="blog-grid.html"><div>Pagination</div></a></li>
                                                    <li><a href="blog-masonry.html"><div>Infinite Scroll</div></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="mega-menu-column col-md-3">
                                            <li class="mega-menu-title"><a href="#"><div>Single</div></a>
                                                <ul>
                                                    <li><a href="blog-single.html"><div>Default Layout</div></a></li>
                                                    <li><a href="blog-single-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                                    <li><a href="blog-single-full.html"><div>Full Width</div></a></li>
                                                    <li><a href="blog-single-small.html"><div>Small Image</div></a></li>
                                                    <li><a href="blog-single-split-right-sidebar.html"><div>Split Layout</div></a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-title"><a href="#"><div>Comments Module</div></a>
                                                <ul>
                                                    <li><a href="blog-single-left-sidebar.html#comments"><div>Facebook Comments</div></a></li>
                                                    <li><a href="blog-single-small.html#comments"><div>Disqus Comments</div></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="shop.html"><div>Shop</div></a>
                                    <ul>
                                        <li><a href="shop.html"><div>4 Columns</div></a></li>
                                        <li><a href="shop-3.html"><div>3 Columns</div></a>
                                            <ul>
                                                <li><a href="shop-3.html"><div>Full Width</div></a></li>
                                                <li><a href="shop-3-right-sidebar.html"><div>Right Sidebar</div></a></li>
                                                <li><a href="shop-3-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-2.html"><div>2 Columns</div></a>
                                            <ul>
                                                <li><a href="shop-2-right-sidebar.html"><div>Right Sidebar</div></a></li>
                                                <li><a href="shop-2-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                                <li><a href="shop-2-both-sidebar.html"><div>Both Sidebar</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-1.html"><div>1 Columns</div></a>
                                            <ul>
                                                <li><a href="shop-1.html"><div>Full Width</div></a></li>
                                                <li><a href="shop-1-right-sidebar.html"><div>Right Sidebar</div></a></li>
                                                <li><a href="shop-1-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                                <li><a href="shop-1-both-sidebar.html"><div>Both Sidebar</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-category-parallax.html"><div>Categories - Parallax</div></a></li>
                                        <li><a href="shop-combination-filter.html"><div>Combination Filter</div></a></li>
                                        <li><a href="shop-single.html"><div>Single Product</div></a>
                                            <ul>
                                                <li><a href="shop-single.html"><div>Full Width</div></a></li>
                                                <li><a href="shop-single-right-sidebar.html"><div>Right Sidebar</div></a></li>
                                                <li><a href="shop-single-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                                <li><a href="shop-single-both-sidebar.html"><div>Both Sidebar</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="cart.html"><div>Cart</div></a></li>
                                        <li><a href="checkout.html"><div>Checkout</div></a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu"><a href="#"><div>Shortcodes</div></a>
                                    <div class="mega-menu-content clearfix">
                                        <ul class="mega-menu-column col-5">
                                            <li><a href="animations.html"><div><i class="icon-magic"></i>Animations</div></a></li>
                                            <li><a href="buttons.html"><div><i class="icon-link"></i>Buttons</div></a></li>
                                            <li><a href="carousel.html"><div><i class="icon-heart3"></i>Carousel</div></a></li>
                                            <li><a href="charts.html"><div><i class="icon-bar-chart"></i>Charts</div></a></li>
                                            <li><a href="clients.html"><div><i class="icon-apple"></i>Clients</div></a></li>
                                            <li><a href="columns-grids.html"><div><i class="icon-th-large"></i>Columns</div></a></li>
                                            <li><a href="counters.html"><div><i class="icon-time"></i>Counters</div></a></li>
                                            <li><a href="component-datatable.html"><div><i class="icon-table"></i>Data Tables</div></a></li>
                                            <li><a href="component-datepicker.html"><div><i class="icon-calendar3"></i>Date &amp; Time Pickers</div></a></li>
                                        </ul>
                                        <ul class="mega-menu-column col-5">
                                            <li><a href="dividers.html"><div><i class="icon-indent-right"></i>Dividers</div></a></li>
                                            <li><a href="featured-boxes.html"><div><i class="icon-lightbulb"></i>Icon Boxes</div></a></li>
                                            <li><a href="gallery.html"><div><i class="icon-picture"></i>Galleries</div></a></li>
                                            <li><a href="headings-dropcaps.html"><div><i class="icon-pencil2"></i>Heading Styles</div></a></li>
                                            <li><a href="icon-lists.html"><div><i class="icon-list-alt"></i>Icon Lists</div></a></li>
                                            <li><a href="labels-badges.html"><div><i class="icon-plus-sign"></i>Labels</div></a></li>
                                            <li><a href="lightbox.html"><div><i class="icon-resize-full"></i>Lightbox</div></a></li>
                                            <li><a href="component-editable.html"><div><i class="icon-edit"></i>Editable Fields</div></a></li>
                                            <li><a href="component-uploads.html"><div><i class="icon-line-upload"></i>File Uploads</div></a></li>
                                        </ul>
                                        <ul class="mega-menu-column col-5">
                                            <li><a href="lists-panels.html"><div><i class="icon-th-list"></i>Lists &amp; Panels</div></a></li>
                                            <li><a href="maps.html"><div><i class="icon-map-marker2"></i>Maps</div></a></li>
                                            <li><a href="media-embeds.html"><div><i class="icon-play"></i>Media Embeds</div></a></li>
                                            <li><a href="modal-popovers.html"><div><i class="icon-move"></i>Modal Boxes</div></a></li>
                                            <li><a href="navigation.html"><div><i class="icon-align-justify2"></i>Navigations</div></a></li>
                                            <li><a href="pagination-progress.html"><div><i class="icon-cogs"></i>Pagination</div></a></li>
                                            <li><a href="pie-skills.html"><div><i class="icon-tasks"></i>Pies &amp; Skills</div></a></li>
                                            <li><a href="component-range-slider.html"><div><i class="icon-line-move"></i>Range Slider</div></a></li>
                                            <li><a href="component-ratings.html"><div><i class="icon-star3"></i>Star Ratings</div></a></li>
                                        </ul>
                                        <ul class="mega-menu-column col-5">
                                            <li><a href="pricing.html"><div><i class="icon-dollar"></i>Pricing Boxes</div></a></li>
                                            <li><a href="process-steps.html"><div><i class="icon-thumbs-up"></i>Process Steps</div></a></li>
                                            <li><a href="promo-boxes.html"><div><i class="icon-rocket"></i>Promo Boxes</div></a></li>
                                            <li><a href="quotes-blockquotes.html"><div><i class="icon-quote-left"></i>Blockquotes</div></a></li>
                                            <li><a href="responsive.html"><div><i class="icon-laptop2"></i>Responsive</div></a></li>
                                            <li><a href="sections.html"><div><i class="icon-folder-open"></i>Sections</div></a></li>
                                            <li><a href="social-icons.html"><div><i class="icon-facebook2"></i>Social Icons</div></a></li>
                                            <li><a href="component-select-picker.html"><div><i class="icon-select"></i>Select Picker</div></a></li>
                                            <li><a href="component-select-box.html"><div><i class="icon-line-columns"></i>Select Boxes</div></a></li>
                                        </ul>
                                        <ul class="mega-menu-column col-5">
                                            <li><a href="style-boxes.html"><div><i class="icon-exclamation-sign"></i>Alert Boxes</div></a></li>
                                            <li><a href="styled-icons.html"><div><i class="icon-flag2"></i>Styled Icons</div></a></li>
                                            <li><a href="tables.html"><div><i class="icon-table"></i>Tables</div></a></li>
                                            <li><a href="tabs.html"><div><i class="icon-star3"></i>Tabs</div></a></li>
                                            <li><a href="testimonials-twitter.html"><div><i class="icon-user4"></i>Testimonials</div></a></li>
                                            <li><a href="thumbnails-slider.html"><div><i class="icon-camera3"></i>Thumbnails</div></a></li>
                                            <li><a href="toggles-accordions.html"><div><i class="icon-ok-circle"></i>Toggles</div></a></li>
                                            <li><a href="component-radios-switches.html"><div><i class="icon-line-square-check"></i>Radios &amp; Switches</div></a></li>
                                            <li><a href="component-typeahead.html"><div><i class="icon-type"></i>Input Typeahead</div></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>

                            <!-- Top Cart
                            ============================================= -->
                            <div id="top-cart">
                                <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
                                <div class="top-cart-content">
                                    <div class="top-cart-title">
                                        <h4>Shopping Cart</h4>
                                    </div>
                                    <div class="top-cart-items">
                                        <div class="top-cart-item clearfix">
                                            <div class="top-cart-item-image">
                                                <a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
                                            </div>
                                            <div class="top-cart-item-desc">
                                                <a href="#">Blue Round-Neck Tshirt</a>
                                                <span class="top-cart-item-price">$19.99</span>
                                                <span class="top-cart-item-quantity">x 2</span>
                                            </div>
                                        </div>
                                        <div class="top-cart-item clearfix">
                                            <div class="top-cart-item-image">
                                                <a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
                                            </div>
                                            <div class="top-cart-item-desc">
                                                <a href="#">Light Blue Denim Dress</a>
                                                <span class="top-cart-item-price">$24.99</span>
                                                <span class="top-cart-item-quantity">x 3</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="top-cart-action clearfix">
                                        <span class="fleft top-checkout-price">$114.95</span>
                                        <button class="button button-3d button-small nomargin fright">View Cart</button>
                                    </div>
                                </div>
                            </div><!-- #top-cart end -->

                            <!-- Top Search
                            ============================================= -->
                            <div id="top-search">
                                <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                                <form action="search.html" method="get">
                                    <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                                </form>
                            </div><!-- #top-search end -->

                        </nav><!-- #primary-menu end -->

                    </div>

                </div>

            </header><!-- #header end -->

            <!-- Content
            ============================================= -->
            <section id="content">

                <div class="content-wrap nopadding">

                    <div class="section nobg nomargin center clearfix" style="padding: 150px 0;">
                        <div class="container clearfix">

                            <div class="emphasis-title bottommargin">
                                <h1>Create Powerful Websites <span class="font-secondary ls1"><em>Beautifully</em></span></h1>
                            </div>

                            <p class="lead center divcenter bottommargin-lg" style="max-width: 900px; font-size: 24px;">Truly Multi-Purpose <span class="font-secondary">&amp;</span> Powerful Bootstrap based Template with <span class="color t500">700+</span> Niche, Multi-Page <span class="font-secondary">&amp;</span> One-Page Layouts with <span class="color t500">1000+</span> of UI Features.</p>

                            <a href="#" class="button button-3d" data-scrollto="#section-niche" data-easing="easeInOutExpo" data-speed="1250">Niche Demos</a>

                            <span class="hidden-xs rightmargin-sm"></span>

                            <a href="#" class="button button-3d button-black" data-scrollto="#section-multipage" data-easing="easeInOutExpo" data-speed="1250">Multi-Page Demos</a>

                            <span class="hidden-xs rightmargin-sm"></span>

                            <a href="#" class="button button-3d button-white button-light" data-scrollto="#section-onepage" data-easing="easeInOutExpo" data-speed="1250">One-Page Demos</a>

                        </div>
                    </div>

                    <div class="section notopmargin nobottommargin clearfix">
                        <div class="container clearfix">
                            <div class="heading-block center nobottomborder nobottommargin">
                                <h2 class="t500 nott" style="font-size: 36px;">Best-Selling <span class="nocolor font-secondary">&amp;</span> Most Trusted HTML5 Template</h2>
                                <span style="color: #BBB;">Experience the Ever-Growing Feature Rich Template since <span class="t400">2014</span></span>
                            </div>
                        </div>
                    </div>

                    <!-- Page Sub Menu
                    ============================================= -->
                    <div id="page-menu">
                        <div id="page-menu-wrap">
                            <div class="container-fullwidth clearfix">

                                <div class="menu-title">Explore <span>CANVAS</span></div>

                                <nav class="one-page-menu">
                                    <ul>
                                        <li><a href="#" data-href="#section-niche"><div>Niche Demos</div></a></li>
                                        <li><a href="#" data-href="#section-multipage"><div>Multi-Page</div></a></li>
                                        <li><a href="#" data-href="#section-onepage"><div>One-Page</div></a></li>
                                        <li><a href="#" data-href="#section-hero" data-offset="103"><div>Hero Templates</div></a></li>
                                        <li><a href="#" data-href="#section-testimonials"><div>Reviews</div></a></li>
                                        <li><a href="#" data-href="#section-purchase" data-offset="103"><div>Purchase</div></a></li>
                                    </ul>
                                </nav>

                                <div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

                            </div>
                        </div>
                    </div><!-- #page-menu end -->

                    <div class="container topmargin clearfix">

                        <div id="section-niche" class="page-section">
                            <div class="heading-block topmargin noborder">
                                <h2 class="center">Niche Demos</h2>
                            </div>

                            <div class="row common-height topmargin-lg clearfix">

                                <div class="col-md-3 col-sm-6 col-xs-12 bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="index.html" target="_blank">
                                                <img src="images/intro/multipage/homepage1.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="index.html" target="_blank">Classic</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="demo-construction.html" target="_blank">
                                                <img src="images/intro/niche/construction.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="demo-construction.html" target="_blank">Construction</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="demo-travel.html" target="_blank">
                                                <img src="images/intro/niche/travel.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="demo-travel.html" target="_blank">Travel</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="demo-medical.html" target="_blank">
                                                <img src="images/intro/niche/medical.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="demo-medical.html" target="_blank">Medical</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="demo-app-landing.html" target="_blank">
                                                <img src="images/intro/niche/app-landing.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="demo-app-landing.html" target="_blank">APP Landing <span class="label bgcolor">New</span></a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="demo-cafe.html" target="_blank">
                                                <img src="images/intro/niche/coffee.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="demo-cafe.html" target="_blank">Cafe <span class="label bgcolor">New</span></a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="demo-spa.html" target="_blank">
                                                <img src="images/intro/niche/spa.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="demo-spa.html" target="_blank">Spa <span class="label bgcolor">New</span></a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="demo-media-agency.html" target="_blank">
                                                <img src="images/intro/niche/media-agency.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="demo-media-agency.html" target="_blank">Media Agency</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="demo-agency.html" target="_blank">
                                                <img src="images/intro/niche/agency.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="demo-agency.html" target="_blank">Agency</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="demo-xmas.html" target="_blank">
                                                <img src="images/intro/niche/xmas.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="demo-xmas.html" target="_blank">Christmas</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="#">
                                                <img src="images/intro/niche/coming-soon.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="#">Coming Soon!</a></h3>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="section clearfix">
                        <div class="heading-block center nobottomborder nobottommargin">
                            <h2 class="t500 nott" style="font-size: 36px;">Loved by <span>18000+</span> Happy Customers</h2>
                            <span>Powered by Top-Notch Support <span class="font-secondary">&amp;</span> Stellar <a href="#" data-scrollto="#section-testimonials" data-easing="easeInOutExpo" data-speed="1250">Customer Reviews <i class="icon-angle-right" style="position: relative; top: 2px; margin-left: 2px;"></i></a></span>
                        </div>
                    </div>

                    <div class="container clearfix">

                        <div id="section-multipage" class="page-section">
                            <div class="heading-block topmargin bottommargin noborder">
                                <h2 class="center">Multi-Page Layouts</h2>
                            </div>

                            <!-- Portfolio Filter
                            ============================================= -->
                            <ul class="portfolio-filter center divcenter style-4 clearfix" data-container="#multipage-demos">

                                <li class="activeFilter"><a href="#" data-filter="*">All Demos</a></li>
                                <li><a href="#" data-filter=".demofilter-corporate">Corporate</a></li>
                                <li><a href="#" data-filter=".demofilter-portfolio">Portfolio</a></li>
                                <li><a href="#" data-filter=".demofilter-blog">Blog</a></li>
                                <li><a href="#" data-filter=".demofilter-shop">Shop</a></li>
                                <li><a href="#" data-filter=".demofilter-magazine">Magazine</a></li>
                                <li><a href="#" data-filter=".demofilter-landing">Landing</a></li>
                                <li><a href="#" data-filter=".demofilter-onepage">One-Page</a></li>
                                <li><a href="#" data-filter=".demofilter-misc">Others</a></li>

                            </ul><!-- #portfolio-filter end -->

                            <div class="clear"></div>

                            <div id="multipage-demos" class="row topmargin-sm grid-container bottommargin clearfix" data-layout="fitRows">

                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-corporate bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="index-corporate.html" target="_blank">
                                                <img src="images/intro/multipage/homepage2.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="index-corporate.html" target="_blank">Corporate 1</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-corporate bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="index-corporate-2.html" target="_blank">
                                                <img src="images/intro/multipage/homepage3.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="index-corporate-2.html" target="_blank">Corporate 2</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-corporate bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="index-corporate-3.html" target="_blank">
                                                <img src="images/intro/multipage/homepage30.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="index-corporate-3.html" target="_blank">Corporate 3</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-corporate bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="index-corporate-4.html" target="_blank">
                                                <img src="images/intro/multipage/homepage4.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="index-corporate-4.html" target="_blank">Corporate 4</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-portfolio bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="index-portfolio-2.html" target="_blank">
                                                <img src="images/intro/multipage/homepage5.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="index-portfolio-2.html" target="_blank">Portfolio 1</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-portfolio bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="index-portfolio-3.html" target="_blank">
                                                <img src="images/intro/multipage/homepage6.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="index-portfolio-3.html" target="_blank">Portfolio 2</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-portfolio bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="index-portfolio-4.html" target="_blank">
                                                <img src="images/intro/multipage/homepage7.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="index-portfolio-4.html" target="_blank">Portfolio 3</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-blog bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="index-blog.html" target="_blank">
                                                <img src="images/intro/multipage/homepage8.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="index-blog.html" target="_blank">Home Blog</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-shop bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="index-shop.html" target="_blank">
                                                <img src="images/intro/multipage/homepage9.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="index-shop.html" target="_blank">eCommerce 1</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-shop bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="index-shop-2.html" target="_blank">
                                                <img src="images/intro/multipage/homepage10.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="index-shop-2.html" target="_blank">eCommerce 2</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-magazine bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="index-magazine-3.html" target="_blank">
                                                <img src="images/intro/multipage/homepage11.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="index-magazine-3.html" target="_blank">Magazine 1</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-magazine bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="index-magazine.html" target="_blank">
                                                <img src="images/intro/multipage/homepage12.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="index-magazine.html" target="_blank">Magazine 2</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-magazine bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="index-magazine-2.html" target="_blank">
                                                <img src="images/intro/multipage/homepage13.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="index-magazine-2.html" target="_blank">Magazine 3</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-onepage bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="index-onepage.html" target="_blank">
                                                <img src="images/intro/multipage/homepage18.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="index-onepage.html" target="_blank">OnePage Default</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-onepage bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="index-onepage-2.html" target="_blank">
                                                <img src="images/intro/multipage/homepage19.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="index-onepage-2.html" target="_blank">OnePage SubMenu</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-onepage bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="index-onepage-3.html" target="_blank">
                                                <img src="images/intro/multipage/homepage20.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="index-onepage-3.html" target="_blank">OnePage Dots Menu</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-misc bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="index-wedding.html" target="_blank">
                                                <img src="images/intro/multipage/homepage21.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="index-wedding.html" target="_blank">Wedding</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-misc bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="index-restaurant.html" target="_blank">
                                                <img src="images/intro/multipage/homepage22.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="index-restaurant.html" target="_blank">Restaurant</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-misc bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="index-events.html" target="_blank">
                                                <img src="images/intro/multipage/homepage23.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="index-events.html" target="_blank">Events</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-misc bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="index-parallax.html" target="_blank">
                                                <img src="images/intro/multipage/homepage24.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="index-parallax.html" target="_blank">Parallax</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-misc bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="index-app-showcase.html" target="_blank">
                                                <img src="images/intro/multipage/homepage25.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="index-app-showcase.html" target="_blank">App Showcase</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-landing bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="landing.html" target="_blank">
                                                <img src="images/intro/multipage/homepage14.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="landing.html" target="_blank">Landing 1</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-landing bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="landing-2.html" target="_blank">
                                                <img src="images/intro/multipage/homepage15.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="landing-2.html" target="_blank">Landing 2</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-landing bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="landing-4.html" target="_blank">
                                                <img src="images/intro/multipage/homepage16.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="landing-4.html" target="_blank">Landing 3</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-landing bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="landing-5.html" target="_blank">
                                                <img src="images/intro/multipage/homepage17.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="landing-5.html" target="_blank">Landing 4</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-misc bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="header-floating.html" target="_blank">
                                                <img src="images/intro/multipage/homepage26.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="header-floating.html" target="_blank">Floating Header</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-misc bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="coming-soon-2.html" target="_blank">
                                                <img src="images/intro/multipage/homepage27.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="coming-soon-2.html" target="_blank">Coming Soon 1</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-misc bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="coming-soon.html" target="_blank">
                                                <img src="images/intro/multipage/homepage28.jpg" alt="Live Preview">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="coming-soon.html" target="_blank">Coming Soon 2</a></h3>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="clearfix common-height">
                        <div class="col-md-3 col-sm-6 center col-padding" style="background-color: #E2E2E2;">
                            <div>
                                <i class="i-plain i-xlarge divcenter bottommargin-sm icon-et-pictures"></i>
                                <div class="counter"><span data-from="10" data-to="165" data-refresh-interval="50" data-speed="2000"></span>+</div>
                                <h5>Portfolio Layouts</h5>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 center col-padding" style="background-color: #E9E9E9;">
                            <div>
                                <i class="i-plain i-xlarge divcenter bottommargin-sm icon-et-pencil"></i>
                                <div class="counter"><span data-from="10" data-to="45" data-refresh-interval="50" data-speed="2500"></span>+</div>
                                <h5>Blog Templates</h5>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 center col-padding" style="background-color: #EEE;">
                            <div>
                                <i class="i-plain i-xlarge divcenter bottommargin-sm icon-et-puzzle"></i>
                                <div class="counter"><span data-from="10" data-to="50" data-refresh-interval="25" data-speed="3000"></span>+</div>
                                <h5>Shortcodes</h5>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 center col-padding" style="background-color: #F2F2F2;">
                            <div>
                                <i class="i-plain i-xlarge divcenter bottommargin-sm icon-et-document"></i>
                                <div class="counter"><span data-from="10" data-to="100" data-refresh-interval="30" data-speed="2700"></span>+</div>
                                <h5>PSD Files</h5>
                            </div>
                        </div>
                    </div>

                    <div class="section dark notopmargin nobottommargin clearfix">
                        <div class="container clearfix">
                            <div class="heading-block center nobottomborder nobottommargin">
                                <h2 class="t300 nott" style="font-size: 32px;">More than <span class="t500 nocolor">700+</span> Templates to minimize your Development Time!</h2>
                            </div>
                        </div>
                    </div>

                    <div class="container topmargin clearfix">

                        <div id="section-onepage" class="page-section">
                            <div class="heading-block topmargin-lg bottommargin noborder">
                                <h2 class="center">One-Page Layouts</h2>
                            </div>

                            <!-- Portfolio Filter
                            ============================================= -->
                            <ul class="portfolio-filter center divcenter style-4 clearfix" data-container="#onepage-demos">

                                <li class="activeFilter"><a href="#" data-filter="*">All Demos</a></li>
                                <li><a href="#" data-filter=".demofilter-op-image">Image</a></li>
                                <li><a href="#" data-filter=".demofilter-op-video">Video</a></li>
                                <li><a href="#" data-filter=".demofilter-op-slider">Slider</a></li>
                                <li><a href="#" data-filter=".demofilter-op-text-rotator">Text Rotator</a></li>
                                <li><a href="#" data-filter=".demofilter-op-carousel">Carousel</a></li>
                                <li><a href="#" data-filter=".demofilter-op-forms">Forms</a></li>
                                <li><a href="#" data-filter=".demofilter-op-parallax">Parallax</a></li>
                                <li><a href="#" data-filter=".demofilter-op-sideheader">Side Header</a></li>
                                <li><a href="#" data-filter=".demofilter-op-misc">Others</a></li>

                            </ul><!-- #portfolio-filter end -->

                            <div class="clear"></div>

                            <div id="onepage-demos" class="row topmargin-sm grid-container bottommargin clearfix" data-layout="fitRows">

                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-image demofilter-op-text-rotator bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/index.html" target="_blank">
                                                <img src="images/intro/onepage/homepage1.jpg" alt="Default">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/index.html" target="_blank">Default</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-image demofilter-op-misc demofilter-op-text-rotator bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-holiday.html" target="_blank">
                                                <img src="images/intro/onepage/homepage42.jpg" alt="Holiday">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-holiday.html" target="_blank">Holiday</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-misc bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-personal.html" target="_blank">
                                                <img src="images/intro/onepage/homepage44.jpg" alt="Personal">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-personal.html" target="_blank">Personal</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-carousel bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-carousel.html" target="_blank">
                                                <img src="images/intro/onepage/homepage43.jpg" alt="Services">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-carousel.html" target="_blank">Services</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-misc bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-pricing.html" target="_blank">
                                                <img src="images/intro/onepage/homepage45.jpg" alt="Pricing">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-pricing.html" target="_blank">Pricing</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-forms bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-subscription.html" target="_blank">
                                                <img src="images/intro/onepage/homepage31.jpg" alt="Simple Subscription">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-subscription.html" target="_blank">Subscription Page</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-forms bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-register.html" target="_blank">
                                                <img src="images/intro/onepage/homepage32.jpg" alt="Register Form">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-register.html" target="_blank">Register Form</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-forms bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-register-2.html" target="_blank">
                                                <img src="images/intro/onepage/homepage33.jpg" alt="Register Form 2">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-register-2.html" target="_blank">Register Form 2</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-parallax bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-device.html" target="_blank">
                                                <img src="images/intro/onepage/homepage34.jpg" alt="Landing Page">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-device.html" target="_blank">Landing Page</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-misc bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-browser.html" target="_blank">
                                                <img src="images/intro/onepage/homepage35.jpg" alt="Browser Slide">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-browser.html" target="_blank">Browser Slide</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-forms bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-register-testimonials.html" target="_blank">
                                                <img src="images/intro/onepage/homepage36.jpg" alt="Testimonials Register Form">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-register-testimonials.html" target="_blank">Testimonials Form</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-misc bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-event.html" target="_blank">
                                                <img src="images/intro/onepage/homepage37.jpg" alt="Event Slider">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-event.html" target="_blank">Event Slide</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-forms demofilter-op-video bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-video-event-form.html" target="_blank">
                                                <img src="images/intro/onepage/homepage38.jpg" alt="Video Event">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-video-event-form.html" target="_blank">Video Event</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-misc bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-chart.html" target="_blank">
                                                <img src="images/intro/onepage/homepage39.jpg" alt="Chart">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-chart.html" target="_blank">Chart Slide</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-forms demofilter-op-slider bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-section-2.html" target="_blank">
                                                <img src="images/intro/onepage/homepage40.jpg" alt="Slider Section">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-section-2.html" target="_blank">Slider Section</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-forms demofilter-op-text-rotator bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-section.html" target="_blank">
                                                <img src="images/intro/onepage/homepage41.jpg" alt="Text Rotator Section">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/index-section.html" target="_blank">Text Rotator Section</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-text-rotator demofilter-op-video bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/index-dark.html" target="_blank">
                                                <img src="images/intro/onepage/homepage2.jpg" alt="Dark Scheme">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/index-dark.html" target="_blank">Dark Scheme</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-slider demofilter-op-video bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-big-text.html" target="_blank">
                                                <img src="images/intro/onepage/homepage3.jpg" alt="Big Text Slider">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-big-text.html" target="_blank">Big Text Slider</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-slider bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-canvas-slider.html" target="_blank">
                                                <img src="images/intro/onepage/homepage4.jpg" alt="Canvas Slider">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-canvas-slider.html" target="_blank">Canvas Slider</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-slider bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-canvas-fade-slider.html" target="_blank">
                                                <img src="images/intro/onepage/homepage5.jpg" alt="Canvas Fade Slider">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-canvas-fade-slider.html" target="_blank">Canvas Fade Slider</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-video bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-video-event.html" target="_blank">
                                                <img src="images/intro/onepage/homepage28.jpg" alt="HTML5 Video Play Event">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-video-event.html" target="_blank">HTML5 Video Play Event</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-misc bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-counter.html" target="_blank">
                                                <img src="images/intro/onepage/homepage7.jpg" alt="Hero Counter">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-counter.html" target="_blank">Hero Counter</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-misc bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-counter-2.html" target="_blank">
                                                <img src="images/intro/onepage/homepage6.jpg" alt="Hero Counter 2">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-counter-2.html" target="_blank">Hero Counter 2</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-image bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-dots.html" target="_blank">
                                                <img src="images/intro/onepage/homepage8.jpg" alt="Dots Menu">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-dots.html" target="_blank">Dots Menu</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-video bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-html5-video-dark.html" target="_blank">
                                                <img src="images/intro/onepage/homepage9.jpg" alt="HTML5 Video Dark">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-html5-video-dark.html" target="_blank">HTML5 Video Dark</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-video bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-html5-video-light.html" target="_blank">
                                                <img src="images/intro/onepage/homepage10.jpg" alt="HTML5 Video Light">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-html5-video-light.html" target="_blank">HTML5 Video Light</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-video bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-image-grid-video-lightbox.html" target="_blank">
                                                <img src="images/intro/onepage/homepage11.jpg" alt="Split Grid Video Lightbox">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-image-grid-video-lightbox.html" target="_blank">Split Grid Video Lightbox</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-video bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-lightbox-video.html" target="_blank">
                                                <img src="images/intro/onepage/homepage12.jpg" alt="Video Lightbox Button">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-lightbox-video.html" target="_blank">Video Lightbox Button</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-video demofilter-op-carousel bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-owl-slider-video.html" target="_blank">
                                                <img src="images/intro/onepage/homepage13.jpg" alt="Video Carousel">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-owl-slider-video.html" target="_blank">Video Carousel</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-carousel bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-owl-slider.html" target="_blank">
                                                <img src="images/intro/onepage/homepage14.jpg" alt="Image Carousel">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-owl-slider.html" target="_blank">Image Carousel</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-parallax bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-parallax-dark-image-full.html" target="_blank">
                                                <img src="images/intro/onepage/homepage15.jpg" alt="Fullscreen Parallax Dark">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-parallax-dark-image-full.html" target="_blank">Fullscreen Parallax Dark</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-parallax bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-parallax-dark-image-fullwidth.html" target="_blank">
                                                <img src="images/intro/onepage/homepage16.jpg" alt="Fullwidth Parallax Dark">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-parallax-dark-image-fullwidth.html" target="_blank">Fullwidth Parallax Dark</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-parallax bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-parallax-light-image-full.html" target="_blank">
                                                <img src="images/intro/onepage/homepage17.jpg" alt="Fullscreen Parallax Light">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-parallax-dark-image-full.html" target="_blank">Fullscreen Parallax Light</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-parallax bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-parallax-light-image-fullwidth.html" target="_blank">
                                                <img src="images/intro/onepage/homepage18.jpg" alt="Fullwidth Parallax Light">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-parallax-light-image-fullwidth.html" target="_blank">Fullwidth Parallax Light</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-misc bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-portfolio.html" target="_blank">
                                                <img src="images/intro/onepage/homepage20.jpg" alt="Portfolio Agency">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-portfolio.html" target="_blank">Portfolio Agency</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-sideheader bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-portfolio-side-header.html" target="_blank">
                                                <img src="images/intro/onepage/homepage19.jpg" alt="Portfolio Side Header">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-portfolio-side-header.html" target="_blank">Portfolio Side Header</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-slider bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-revolution-fullscreen.html" target="_blank">
                                                <img src="images/intro/onepage/homepage21.jpg" alt="Fullscreen Revolution">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-revolution-fullscreen.html" target="_blank">Fullscreen Revolution</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-slider bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-revolution-fullwidth.html" target="_blank">
                                                <img src="images/intro/onepage/homepage22.jpg" alt="Fullwidth Revolution">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-revolution-fullwidth.html" target="_blank">Fullwidth Revolution</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-sideheader demofilter-op-video bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-side-header.html" target="_blank">
                                                <img src="images/intro/onepage/homepage23.jpg" alt="Side Header Menu">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-side-header.html" target="_blank">Side Header Menu</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-text-rotator bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-tr-blank-dark.html" target="_blank">
                                                <img src="images/intro/onepage/homepage24.jpg" alt="Text Rotator Dark">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-tr-blank-dark.html" target="_blank">Text Rotator Dark</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-text-rotator bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-tr-blank.html" target="_blank">
                                                <img src="images/intro/onepage/homepage25.jpg" alt="Text Rotator Light">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-tr-blank.html" target="_blank">Text Rotator Light</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-text-rotator demofilter-op-image bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-tr-image-dark.html" target="_blank">
                                                <img src="images/intro/onepage/homepage26.jpg" alt="Text Rotator Image Dark">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-tr-image-dark.html" target="_blank">Text Rotator Image Dark</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-text-rotator demofilter-op-image bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-tr-image-light.html" target="_blank">
                                                <img src="images/intro/onepage/homepage27.jpg" alt="Text Rotator Image Light">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-tr-image-light.html" target="_blank">Text Rotator Image Light</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-video bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-video-grid-2.html" target="_blank">
                                                <img src="images/intro/onepage/homepage29.jpg" alt="Video Grid Hover Play">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-video-grid-2.html" target="_blank">Video Grid Hover Play</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 demofilter-op-video bottommargin-lg">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="one-page/op-video-grid.html" target="_blank">
                                                <img src="images/intro/onepage/homepage30.jpg" alt="Video Grid 2 Hover Play">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="one-page/op-video-grid.html" target="_blank">Video Grid 2 Hover Play</a></h3>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div id="section-hero" class="section parallax page-section nomargin" style="padding: 150px 0; background-color: #F9F9F9; background-image: url('preview/images/rev-intro.jpg');" data-stellar-background-ratio="0.6">
                        <div class="container clearfix">
                            <div class="row clearfix">
                                <div class="col-sm-5 col-sm-offset-7">
                                    <div class="emphasis-title">
                                        <span class="before-heading" style="font-size: 24px;"><em>Get Started with</em></span>
                                        <h2 class="capitalize t600" style="font-size: 54px;">60+ Revolution Slider Hero Templates.</h2>
                                    </div>
                                    <a href="rs-demos.html" target="_blank" class="button button-circle button-border button-large button-black button-fill nomargin tright"><span>Browse Now <i class="icon-line-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container topmargin-lg clearfix">

                        <div id="section-testimonials" class="page-section">
                            <div class="heading-block topmargin bottommargin-lg center nobottomborder">
                                <h3 class="capitalize t600" style="font-size: 32px;">Customer Ratings <span class="font-secondary">&amp;</span> Reviews</h3>
                            </div>

                            <div class="row grid-container clearfix">

                                <div class="col-md-4 col-sm-6 col-xs-12 bottommargin-sm">
                                    <div class="testimonial" style="padding: 40px;">
                                        <div class="testi-content">
                                            <p class="bottommargin-sm font-secondary">Great support, great documentation and you guys done a fantastic job in commenting everything, makes it very easy to customize, so thank you.</p>
                                            <div class="testi-meta">
                                                SmileyDot
                                                <span>ThemeForest user</span>
                                                <div class="testimonials-rating">
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 bottommargin-sm">
                                    <div class="testimonial" style="padding: 40px;">
                                        <div class="testi-content">
                                            <p class="bottommargin-sm font-secondary">I wish that I could choose more than one reason for my 5-star rating! The Design is great, the features are fantastic, the documentation top-notch, and from what I've read in the support forum the customer support is great. This is a great template.</p>
                                            <div class="testi-meta">
                                                georgewhoffman
                                                <span>ThemeForest user</span>
                                                <div class="testimonials-rating">
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 bottommargin-sm">
                                    <div class="testimonial" style="padding: 40px;">
                                        <div class="testi-content">
                                            <p class="bottommargin-sm font-secondary">Excellent Template really versatile and well documented. Makes anyone look like a design professional.</p>
                                            <div class="testi-meta">
                                                georgeuser077
                                                <span>ThemeForest user</span>
                                                <div class="testimonials-rating">
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 bottommargin-sm">
                                    <div class="testimonial" style="padding: 40px;">
                                        <div class="testi-content">
                                            <p class="bottommargin-sm font-secondary">This is the most robust template I've ever worked with. So much can be done with this multi-purpose package. Regular updates and enhancements add tremendous value.</p>
                                            <div class="testi-meta">
                                                rmandaro
                                                <span>ThemeForest user</span>
                                                <div class="testimonials-rating">
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 bottommargin-sm">
                                    <div class="testimonial" style="padding: 40px;">
                                        <div class="testi-content">
                                            <p class="bottommargin-sm font-secondary">I've been using Canvas for months now and it has exceeded my expectations. Their support has been great too.</p>
                                            <div class="testi-meta">
                                                kwelch2
                                                <span>ThemeForest user</span>
                                                <div class="testimonials-rating">
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 bottommargin-sm">
                                    <div class="testimonial" style="padding: 40px;">
                                        <div class="testi-content">
                                            <p class="bottommargin-sm font-secondary">I like Canvas because of all the features and their variations, such as the Portfolio. I can do so many different things with this theme, and I am already using it for my fourth website.</p>
                                            <div class="testi-meta">
                                                vanhove
                                                <span>ThemeForest user</span>
                                                <div class="testimonials-rating">
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 bottommargin-sm">
                                    <div class="testimonial" style="padding: 40px;">
                                        <div class="testi-content">
                                            <p class="bottommargin-sm font-secondary">It has almost everything. Have a feature in mind? Just search for it in this theme, you will definitely find it. Amazing support as well.</p>
                                            <div class="testi-meta">
                                                varunD
                                                <span>ThemeForest user</span>
                                                <div class="testimonials-rating">
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 bottommargin-sm">
                                    <div class="testimonial" style="padding: 40px;">
                                        <div class="testi-content">
                                            <p class="bottommargin-sm font-secondary">Great customer support. It is amazing to be on top of these many comments and they are doing it very well. It is a great addon on top of their amazing template. Thank you.</p>
                                            <div class="testi-meta">
                                                PrintAndWeb
                                                <span>ThemeForest user</span>
                                                <div class="testimonials-rating">
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 bottommargin-sm">
                                    <div class="testimonial" style="padding: 40px;">
                                        <div class="testi-content">
                                            <p class="bottommargin-sm font-secondary">WOW! Unbelievable amount of features. Extremely well documented. SUPER easy to customize... there's just so much to say... it's awesome!!!!!!!</p>
                                            <div class="testi-meta">
                                                ktpher
                                                <span>ThemeForest user</span>
                                                <div class="testimonials-rating">
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 bottommargin-sm">
                                    <div class="testimonial" style="padding: 40px;">
                                        <div class="testi-content">
                                            <p class="bottommargin-sm font-secondary">It is very convenient that i can make a lot of pages from my site with uniform design. Code perfectly described in the documentation. Excellent professional and modern design.</p>
                                            <div class="testi-meta">
                                                MoshkovEV
                                                <span>ThemeForest user</span>
                                                <div class="testimonials-rating">
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 bottommargin-sm">
                                    <div class="testimonial" style="padding: 40px;">
                                        <div class="testi-content">
                                            <p class="bottommargin-sm font-secondary">The template is very useful if you want to work on Prototyping of any project before you start!!</p>
                                            <div class="testi-meta">
                                                creintech
                                                <span>ThemeForest user</span>
                                                <div class="testimonials-rating">
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 bottommargin-sm">
                                    <div class="testimonial" style="padding: 40px;">
                                        <div class="testi-content">
                                            <p class="bottommargin-sm font-secondary">Great Design, Features and Latest Update is Fantastic!</p>
                                            <div class="testi-meta">
                                                pauldowling
                                                <span>ThemeForest user</span>
                                                <div class="testimonials-rating">
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 bottommargin-sm">
                                    <div class="testimonial" style="padding: 40px;">
                                        <div class="testi-content">
                                            <p class="bottommargin-sm font-secondary">Fast response, whole lot of features, updates are always there. Keep up the good work! Really glad I bought it.</p>
                                            <div class="testi-meta">
                                                gunpla
                                                <span>ThemeForest user</span>
                                                <div class="testimonials-rating">
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 bottommargin-sm">
                                    <div class="testimonial" style="padding: 40px;">
                                        <div class="testi-content">
                                            <p class="bottommargin-sm font-secondary">This template lives up to its name, truly a 'Canvas' for your ideas. The versatility and design are truly exceptional, not to mention the great Support SemiColonWeb provides on its comments section. Keep up the great work!</p>
                                            <div class="testi-meta">
                                                ModularCollective
                                                <span>ThemeForest user</span>
                                                <div class="testimonials-rating">
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 bottommargin-sm">
                                    <div class="testimonial" style="padding: 40px;">
                                        <div class="testi-content">
                                            <p class="bottommargin-sm font-secondary">This is excellent! A most amazing suite of fully customisable options which at times almost presents too much choice! Ace!</p>
                                            <div class="testi-meta">
                                                jcarlisle1966
                                                <span>ThemeForest user</span>
                                                <div class="testimonials-rating">
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="row common-height noleftmargin norightmargin intro-support-block topmargin-lg clearfix">
                        <div class="col-sm-4 nopadding center">
                            <div class="clearfix">
                                <a href="http://support.semicolonweb.com/forums/forum/canvas-html/" class="col-padding" target="_blank">
                                    <i class="icon-et-happy i-plain i-large nomargin inline-block"></i>
                                    <span class="t500">Dedicated Support</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4 nopadding center">
                            <div class="clearfix">
                                <a href="http://support.semicolonweb.com/canvas-html-documentation/" class="col-padding" target="_blank">
                                    <i class="icon-et-book-open i-plain i-large nomargin inline-block"></i>
                                    <span class="t500">Extensive Documentation</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4 nopadding center">
                            <div class="clearfix">
                                <a href="http://themes.semicolonweb.com/html/canvas/walkthrough-videos.php" class="col-padding" target="_blank">
                                    <i class="icon-et-video i-plain i-large nomargin inline-block"></i>
                                    <span class="t500">Walkthrough Videos</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div id="section-purchase" class="section nomargin center dark page-section" style="padding: 150px 0; background: url('images/intro/bg1.jpg') no-repeat center center; background-size: cover;">
                        <div class="container clearfix">
                            <div class="emphasis-title bottommargin-lg">
                                <h2 class="ls1 font-secondary t700" style="font-style: italic; font-size: 56px; line-height: 1.7;">Start Creating Beautiful Websites<br>Purchase <span style="border-bottom: 3px solid #EEE; color: #FFF;">Canvas</span> for $18 only!</h2>
                            </div>
                            <a href="http://themeforest.net/item/canvas-the-multipurpose-html5-template/9228123?ref=SemiColonWeb&license=regular&open_purchase_for_item_id=9228123&purchasable=source" class="button button-circle button-xlarge button-reveal tright ls0 nomargin" style="padding-left: 60px;padding-right: 60px;"><span>Purchase License</span><i class="icon-line-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

            </section><!-- #content end -->

            <!-- Footer
            ============================================= -->
            <footer id="footer" class="dark">

                <!-- Copyrights
                ============================================= -->
                <div id="copyrights">

                    <div class="container center clearfix">

                        Copyrights &copy; 2016 All Rights Reserved by SemiColonWeb<br>
                        <div class="copyright-links"><a href="http://themeforest.net/user/semicolonweb/portfolio?ref=SemiColonWeb" target="_blank">Portfolio</a> / <a href="http://support.semicolonweb.com" target="_blank">Support</a></div>

                    </div>

                </div><!-- #copyrights end -->

            </footer><!-- #footer end -->

        </div><!-- #wrapper end -->

        <!-- Go To Top
        ============================================= -->
        <div id="gotoTop" class="icon-angle-up"></div>

        <!-- External JavaScripts
        ============================================= -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>

        <!-- Footer Scripts
        ============================================= -->
        <script type="text/javascript" src="js/functions.js"></script>

    </body>
</html>