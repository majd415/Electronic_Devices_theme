<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Icon
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- Animate.css -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ; ?>/css/bootstrap.min.css">
    <link href="<?php bloginfo('stylesheet_directory') ; ?>/https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ; ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ; ?>/css/owl.theme.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ; ?>/css/main.css">




</head>

<header>
        <nav class="navbar navbar-expand-lg sticky-nav">
            <div class="container">
                <a class="navbar-brands d-none d-lg-block" href="http://localhost:82/wordpress/">
                    <img src="<?php bloginfo('stylesheet_directory') ; ?>/images/logo03.png" class="w-100 logo ll" alt="BookShop Logo">
                </a>
                <div class="d-none d-lg-block w-100">
                    <form class="form-inline my-2 my-lg-0 w-100">
                        <div class="input-group w-100 mr-1">
                            <input class="form-control _mr-sm-2" aria-label="Large"
                                aria-describedby="inputGroup-sizing-sm" type="search" placeholder="Search somthing..."
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn  text-light my-2 my-sm-0" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <a href="http://localhost:82/wordpress/" class="btn btn-light mr-1 d-block d-lg-none" title="Home">
                    <i class="fas fa-home"></i>
                </a>
                <a href="#" class="btn btn-light mr-1 d-block d-lg-none" title="Tìm kiếm">
                    <i class="fas fa-search"></i>
                </a>
                <a href="http://localhost:82/wordpress/index.php/electronic-devices-1-login/" class="btn btn-light mr-1 " title="Tài khoản">
                    <i class="fas fa-user"></i>
                </a>
                <button class="btn btn-outline-dark mr-1" data-toggle="modal" data-target="#myCart">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="badge badge-warning">4</span>
                </button>
            </div>
        </nav>
        <div class="secondary-navbar bg-light">
            <div class="w-100 clearfix bg-dark d-block d-lg-none">
                <span class="mx-4 my-2 text-light float-left">MENU</span>
                <button class="mx-4 my-2 navbar-toggler float-right" type="button" data-toggle="collapse"
                    data-target="#collapseTopNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars text-light"></i>
                </button>
            </div>
            <div class="collapse navbar-collapse collapse-mb d-lg-block mm" id="collapseTopNav">
                <ul class="nav justify-content-center sp1">
                    <li class="nav-item">
                        <a class="nav-link text-dark activepage" href="http://localhost:82/wordpress/">STORE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="http://localhost:82/wordpress/index.php/electronic-devices-1-product/">PRODUCT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="http://localhost:82/wordpress/index.php/electronic-devices-1-categor/">CATEGORY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="http://localhost:82/wordpress/index.php/electronic-devices-1-login/">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="http://localhost:82/wordpress/index.php/electronic-devices-1-contact/">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="http://localhost:82/wordpress/index.php/electronic-devices-1-about/">ABOUT</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
