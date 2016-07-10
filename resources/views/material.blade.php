<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 5/26/2016
 * Time: 1:57 PM
 */
        ?>
<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    {{--<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="resources/assets/css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="resources/assets/css/style.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="resources/assets/css/svg.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<header>
    <div class="navbar-fixed">

        {{--main menu content layout--}}
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">one</a></li>
            <li><a href="#!">two</a></li>
            <li class="divider"></li>
            <li><a href="#!">three</a></li>
        </ul>
        <ul id="dropdown2" class="dropdown-content">
            <li><a href="#!">one</a></li>
            <li><a href="#!">two</a></li>
            <li class="divider"></li>
            <li><a href="#!">three</a></li>
        </ul>
        <ul id="dropdown3" class="dropdown-content">
            <li><a href="#!">one</a></li>
            <li><a href="#!">two</a></li>
            <li class="divider"></li>
            <li><a href="#!">three</a></li>
        </ul>

        <ul id="langLayout" class="dropdown-content">
            <li><a id="vi-vn" href="#!"><span class="vi-vn"></span>Việt Nam</a></li>
            <li><a id="en-us" href="#!"><span class="en-us"></span>English</a></li>
        </ul>
        {{--main menu Search layout--}}
        <div id="hotelLayout" class="menu-layout">
            <div class="row">
                <div class="collection col m3">
                    <h6 class="collection-header">Tour du lich quang binh</h6>
                    <a href="#!" class="collection-item">Tour du lich quang binh<span class="new badge">4</span></a>
                    <a href="#!" class="collection-item">Category 1<span class="new badge right">4</span></a>
                    <a href="#!" class="collection-item">Category 1<span class="new badge right">4</span></a>
                    <a href="#!" class="collection-item">Category 1<span class="new badge right">4</span></a>
                    <a href="#!" class="collection-item">Category 1<span class="new badge right">4</span></a>
                    <a href="#!" class="collection-item">Category 1<span class="new badge right">4</span></a>
                </div>
                <div class="collection col m3">
                    <h6 class="collection-header">Tour du lich quang binh</h6>
                    <a href="#!" class="collection-item">Tour du lich quang binh<span class="badge">1</span></a>
                    <a href="#!" class="collection-item">Category 1<span class="new badge">4</span></a>
                    <a href="#!" class="collection-item">Category 1</a>
                    <a href="#!" class="collection-item">Category 1<span class="badge">14</span></a>
                    <a href="#!" class="collection-item">Category 1<span class="badge">1</span></a>
                    <a href="#!" class="collection-item">Category 1<span class="new badge">4</span></a>
                    <a href="#!" class="collection-item">Category 1</a>
                </div>
                <div class="collection col m3">
                    <h6 class="collection-header">Tour du lich quang binh</h6>
                    <a href="#!" class="collection-item">Tour du lich quang binh<span class="badge">1</span></a>
                    <a href="#!" class="collection-item">Category 1<span class="new badge">4</span></a>
                    <a href="#!" class="collection-item">Category 1</a>
                    <a href="#!" class="collection-item">Category 1<span class="badge">14</span></a>
                    <a href="#!" class="collection-item">Category 1<span class="badge">1</span></a>
                    <a href="#!" class="collection-item">Category 1<span class="new badge">4</span></a>
                    <a href="#!" class="collection-item">Category 1</a>
                </div>
                <div class="collection col m3">
                    <h6 class="collection-header">Tour du lich quang binh</h6>
                    <a href="#!" class="collection-item">Tour du lich quang binh<span class="badge">1</span></a>
                    <a href="#!" class="collection-item">Category 1<span class="new badge">4</span></a>
                    <a href="#!" class="collection-item">Category 1</a>
                    <a href="#!" class="collection-item">Category 1<span class="badge">14</span></a>
                    <a href="#!" class="collection-item">Category 1<span class="badge">1</span></a>
                    <a href="#!" class="collection-item">Category 1<span class="new badge">4</span></a>
                    <a href="#!" class="collection-item">Category 1</a>
                </div>
            </div>
        </div>

        <div id="tourLayout" class="menu-layout">
            <div class="row">
                <div class="collection col m3">
                    <h6 class="collection-header">Tour du lich quang binh</h6>
                    <a href="#!" class="collection-item">Tour du lich quang binh<span class="new badge">4</span></a>
                    <a href="#!" class="collection-item">Category 1<span class="new badge right">4</span></a>
                    <a href="#!" class="collection-item">Category 1<span class="new badge right">4</span></a>
                    <a href="#!" class="collection-item">Category 1<span class="new badge right">4</span></a>
                    <a href="#!" class="collection-item">Category 1<span class="new badge right">4</span></a>
                    <a href="#!" class="collection-item">Category 1<span class="new badge right">4</span></a>
                </div>
                <div class="collection col m3">
                    <h6 class="collection-header">Tour du lich quang binh</h6>
                    <a href="#!" class="collection-item">Tour du lich quang binh<span class="badge">1</span></a>
                    <a href="#!" class="collection-item">Category 1<span class="new badge">4</span></a>
                    <a href="#!" class="collection-item">Category 1</a>
                    <a href="#!" class="collection-item">Category 1<span class="badge">14</span></a>
                    <a href="#!" class="collection-item">Category 1<span class="badge">1</span></a>
                    <a href="#!" class="collection-item">Category 1<span class="new badge">4</span></a>
                    <a href="#!" class="collection-item">Category 1</a>
                </div>
                <div class="collection col m3">
                    <h6 class="collection-header">Tour du lich quang binh</h6>
                    <a href="#!" class="collection-item">Tour du lich quang binh<span class="badge">1</span></a>
                    <a href="#!" class="collection-item">Category 1<span class="new badge">4</span></a>
                    <a href="#!" class="collection-item">Category 1</a>
                    <a href="#!" class="collection-item">Category 1<span class="badge">14</span></a>
                    <a href="#!" class="collection-item">Category 1<span class="badge">1</span></a>
                    <a href="#!" class="collection-item">Category 1<span class="new badge">4</span></a>
                    <a href="#!" class="collection-item">Category 1</a>
                </div>
                <div class="collection col m3">
                    <h6 class="collection-header">Tour du lich quang binh</h6>
                    <a href="#!" class="collection-item">Tour du lich quang binh<span class="badge">1</span></a>
                    <a href="#!" class="collection-item">Category 1<span class="new badge">4</span></a>
                    <a href="#!" class="collection-item">Category 1</a>
                    <a href="#!" class="collection-item">Category 1<span class="badge">14</span></a>
                    <a href="#!" class="collection-item">Category 1<span class="badge">1</span></a>
                    <a href="#!" class="collection-item">Category 1<span class="new badge">4</span></a>
                    <a href="#!" class="collection-item">Category 1</a>
                </div>
            </div>
        </div>

        {{--sideNav content layout --}}
        <div id="nav-mobile" class="side-nav">
            <div class="row">
                <div class="brand-logo">
                    <a href="#"><img src="resources/assets/images/icon.png"></a>
                </div>
            </div>
            <div class="divider"></div>
            <div class="row">
                <ul id="nav-collaps" class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header waves-effect waves-teal"><i class="material-icons">account_box</i>Account</div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                    <li>
                        <div class="collapsible-header waves-effect waves-light"><svg class="svg--icon account" width="24px" height="24px"></svg>Quick Search</div>
                        <div class="collapsible-body">
                            <input title="Search content" type="text" placeholder="Location">
                            <select>
                                <option value="volvo" selected>Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="vw">VW</option>
                                <option value="audi" selected>Audi</option>
                            </select>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header waves-effect waves-teal">
                            <svg class="svg--icon contact_emai" width="32px" height="24px"></svg>Contact</div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                    <li>
                        <div class="collapsible-header waves-effect waves-teal"><i class="material-icons">email</i>Deals By Email</div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                </ul>
            </div>
        </div>


        {{-- Main Menu bar--}}
        <div id="headerInfo" class="header-info hide-on-small-only">
            <div class="header-fixed">
                <span>
                    <a href="#" class="svg-link">
                        <svg class="svg-icon-22px google_plus" width="18px" height="18px"></svg>
                    </a>
                    <a href="#" class="svg-link">
                        <svg class="svg-icon-22px facebook"></svg>
                    </a>
                    <a href="#" class="svg-link">
                        <svg class="svg-icon-22px twitter"></svg>
                    </a>
                    <a href="#" class="svg-link">
                        <svg class="svg-icon-22px skype"></svg>
                    </a>
                    <a href="#" class="svg-link">
                        <svg class="svg-icon-22px youtube"></svg>
                    </a>
                    <a href="#" class="svg-link">
                        <svg class="svg-icon-22px email"></svg>
                    </a>
                </span>
                <ul id="lang-opt" class="right ribbon">
                    <li><a id="drdLang" href="#" class="vi-vn" data-activates="langLayout"></a></li>
                </ul>
            </div>
        </div>
        <nav>
            <div class="nav-wrapper">
                <a id="btnLeftSideMenu" class="button-collapse menu-icon" href="#!" data-activates="nav-mobile">
                    <svg class="svg-icon-20px menu fill-white"></svg>
                </a>
                <ul id="nav-mobile" class="right hide-on-small-only main-menu">
                    <li><a id="drdHotel" href="#" class="dropdown" data-activates="hotelLayout">Hotel</a></li>
                    <li><a id="drdTour" href="#" class="dropdown" data-activates="tourLayout">Tours</a></li>
                    <li><a href="#">Components</a></li>
                    <li><a id="drdDrd2" class="dropdown-button" href="#!" data-activates="dropdown2">About Us</a></li>
                    <li><a id="drdDrd" class="dropdown-button" href="#!" data-activates="dropdown1">About Us</a></li>
                    <li><a href="#" class="search-icon"><svg class="svg-icon-20px search fill-white"></svg></a></li>
                </ul>
            </div>
        </nav>

    </div>
</header>
<main>
    <div class="container-fluid hide-on-small-only">
        <div class="slider" id="homeSlider">
            <ul class="slides">
                <li>
                    <img src="https://static.artofwhere.net/img/home-slider/girl-wearing-yoga-leggings.jpg" alt="Picture of a girl wearing custom printed yoga leggings" style="background-position: 70% 0;"/>
                    <div class="caption-underlay">
                        <div class="caption left-align" style="max-width:640px;">
                            <h3 style="font-family: 'Roboto Slab', serif;font-style:normal;font-weight:300;">Yoga Leggings</h3>
                            <p style="font-weight:300;font-size:1.4rem;text-shadow: 0 2px 2px rgba(0, 0, 0, 0.6);">New Yoga Leggings with high foldover waistband that gives you more versatility and a new way to design.</p>
                            <a href="create/clothing/yoga-leggings" class="waves-effect waves-light btn main-blue">Create</a>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="https://static.artofwhere.net/img/pages/kimonos/new-kimono-style-bg.jpg" alt="Picture of a girl wearing a draped kimono" style="background-position: 50% 0;"/>
                    <div class="caption-underlay">
                        <div class="caption left-align" style="max-width:640px;">
                            <h3>Draped Kimono</h3>
                            <p style="font-size: 1.2rem;font-weight: 200;">New kimono style, made in your choice of chiffon or silky knit.<br/> Add a fringe for an extra touch of glamour.</p>
                            <a href="create/clothing/draped-kimono" class="waves-effect waves-light btn main-blue">Create</a>
                            <a href="shop/clothing/draped-kimono" class="waves-effect waves-light btn main-pink">Shop Draped Kimonos</a>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="https://static.artofwhere.net/img/pages/drop-ship/bigcartel/artist-workplace.jpg" alt="Picture of an artist workspace" style="background-position: 70% 0;"/>
                    <div class="caption-underlay">
                        <div class="caption center-align" style="bottom:20%;">
                            <div style="max-width:640px;margin:auto;">
                                <div style="background: url('https://static.artofwhere.net/img/pages/drop-ship/bigcartel/bigcartel-and-artofwhere.svg') no-repeat;background-size:100%;width:70%;height:auto;display:inline-block;vertical-align: middle;margin:auto;margin-bottom:2rem;padding-bottom:23.64%;"></div>
                                <p style="font-size: 1.2rem;font-weight: 200;">Link your existing products on your Big Cartel store with your Art of Where products and keep the orders flowing.</p>
                                <a href="drop-shipping/bigcartel" class="waves-effect waves-light btn main-grey">Learn more</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="https://static.artofwhere.net/img/home-slider/art-prints.jpg" alt="Picture of framed fine art prints"/>
                    <div class="caption-underlay">
                        <div class="caption left-align">
                            <h3>Prints to last a lifetime</h3>
                            <p>Museum quality prints made to last a lifetime at prices designed for resellers.<br />
                                Perfect for <strong>fine art prints</strong>, <strong>posters</strong> or <strong>photos</strong>.</p>
                            <a href="products/wall-art" class="waves-effect waves-light btn main-grey">Read more</a>
                            <a href="create/wall-art" class="waves-effect waves-light btn main-blue">Create your own</a>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="https://static.artofwhere.net/img/home-slider/girl-sewing.jpg" alt="Picture of a girl sewing products"/>
                    <div class="caption-underlay">
                        <div class="caption left-align">
                            <h3>Drop Ship & Wholesale</h3>
                            <p><strong>Order Fulfillment</strong> services designed with artists in mind. <strong>Wholesale</strong> starting at 6&nbsp;pieces.</p>
                            <a href="drop-shipping" class="waves-effect waves-light btn main-blue">Drop Ship info</a>
                            <a href="wholesale" class="waves-effect waves-light btn main-blue">Wholesale info</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="section col s12 m12 l10">

            {{--main menu box--}}
            <div class="category hide-on-small-only">
                <div class="flat-menu">
                    <a href="#" class="item z-depth-2">
                        <i class="material-icons">airport_shuttle</i>
                        <span>airport shuttle</span>
                    </a>
                    <a href="#" class="item z-depth-2">
                        <i class="material-icons">airport_shuttle</i>
                        <span>airport shuttle</span>
                    </a>
                    <a href="#" class="item z-depth-2">
                        <i class="material-icons">card_travel</i>
                        <span>airport shuttle</span>
                    </a>
                    <a href="#" class="item z-depth-2">
                        <i class="material-icons">airport_shuttle</i>
                        <span>airport shuttle</span>
                    </a>
                    <a href="#" class="item z-depth-2">
                        <i class="material-icons">airport_shuttle</i>
                        <span>airport shuttle</span>
                    </a>
                    <a href="#" class="item z-depth-2">
                        <i class="material-icons">airport_shuttle</i>
                        <span>airport shuttle</span>
                    </a>
                    <a href="#" class="item z-depth-2">
                        <i class="material-icons">airport_shuttle</i>
                        <span>airport shuttle</span>
                    </a>
                </div>
            </div>

            {{--Promotion carosel--}}
            <div id="crs-header" class="section scrollspy">
                <div class="row">
                    <div id="crs-head" class="carousel crs-bg z-depth-2">
                        <span class="heading"> Promotion</span>
                        <hr class="small">
                        <div class="carousel-item">
                            <div>
                                <img src="resources/assets/images/1400-samantha.jpg">
                            </div>
                            <div class="crs-layout">
                                <a href="#"><h5 class="title"> title </h5></a>
                                <span class="content"> content </span>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div>
                                <img src="resources/assets/images/woman-using-peru-travel-app.jpg">
                            </div>
                            <div class="crs-layout">
                                <a href="#"><h5 class="title"> title </h5></a>
                                <span class="content"> content </span>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div>
                                <img src="resources/assets/images/Travel_Program_fi.jpg">
                            </div>
                            <div class="crs-layout">
                                <a href="#"><h5 class="title"> title </h5></a>
                                <span class="content"> content </span>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div>
                                <img src="resources/assets/images/activity.jpg">
                            </div>
                            <div class="crs-layout">
                                <a href="#"><h5 class="title"> title </h5></a>
                                <span class="content"> content </span>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div>
                                <img src="resources/assets/images/activity.jpg">
                            </div>
                            <div class="crs-layout">
                                <a href="#"><h5 class="title"> title </h5></a>
                                <span class="content"> content </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--Category content--}}
            <div id="category" class="section scrollspy">
                <div class="row">
                    <div class="col m9 s12">
                        <div id="category" class="section scrollspy">
                            <div class="inline">
                                <i class="material-icons">list</i>
                                <a href="#">Category</a>
                                <hr class="cate-line">
                            </div>
                            <div class="row">
                                <div class="col s12 m4">
                                    <div class="card z-depth-2">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="resources/assets/images/office.jpg">
                                            <span class="card-title">Card Title</span>
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">This is a link</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m4">
                                    <div class="card z-depth-2">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="resources/assets/images/office.jpg">
                                            <span class="card-title">Card Title</span>
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">This is a link</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m4">
                                    <div class="card z-depth-2">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="resources/assets/images/office.jpg">
                                            <span class="card-title">Card Title</span>
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">This is a link</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m4">
                                    <div class="card z-depth-2">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="resources/assets/images/office.jpg">
                                            <span class="card-title">Card Title</span>
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">This is a link</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m4">
                                    <div class="card z-depth-2">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="resources/assets/images/office.jpg">
                                            <span class="card-title">Card Title</span>
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">This is a link</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m4">
                                    <div class="card z-depth-2">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="resources/assets/images/office.jpg">
                                            <span class="card-title">Card Title</span>
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">This is a link</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--<span class="float-right text-uppercase"><a href="#">xem them</a></span>--}}
                            <a class="btn waves-effect waves-light right"><i class="material-icons right">navigate_next</i>More</a>
                        </div>
                        <div id="category" class="section scrollspy">
                            <div class="inline">
                                <i class="material-icons">list</i>
                                <a href="#">Category</a>
                                <hr class="cate-line">
                            </div>
                            <div class="row">
                                <div class="col s12 m4">
                                    <div class="card z-depth-2">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="resources/assets/images/office.jpg">
                                            <span class="card-title">Card Title</span>
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">This is a link</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m4">
                                    <div class="card z-depth-2">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="resources/assets/images/office.jpg">
                                            <span class="card-title">Card Title</span>
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">This is a link</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m4">
                                    <div class="card z-depth-2">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="resources/assets/images/office.jpg">
                                            <span class="card-title">Card Title</span>
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">This is a link</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="btn waves-effect waves-light right"><i class="material-icons right">navigate_next</i>More</a>
                        </div>
                    </div>
                    <div class="col m3 s12">
                        <div id="adv" class="section">
                            <div class="inline">
                                <i class="material-icons">list</i>
                                <a href="#">Category</a>
                                <hr class="cate-line">
                            </div>
                            <div class="col s12 m12">
                                <div class="card z-depth-2">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="resources/assets/images/office.jpg">
                                        <span class="card-title">Card Title</span>
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                        <p><a href="#">This is a link</a></p>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m12">
                                <div class="card z-depth-2">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="resources/assets/images/office.jpg">
                                        <span class="card-title">Card Title</span>
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                        <p><a href="#">This is a link</a></p>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m12">
                                <div class="card z-depth-2">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="resources/assets/images/office.jpg">
                                        <span class="card-title">Card Title</span>
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                        <p><a href="#">This is a link</a></p>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="category1" class="section scrollspy">
                <div class="inline">
                    <i class="material-icons">list</i>
                    <a href="#">Category</a>
                    <hr class="cate-line">
                </div>
                <div class="row">
                    <div class="col s12 m3">
                        <div class="card z-depth-2">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="resources/assets/images/office.jpg">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                <p><a href="#">This is a link</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card z-depth-2">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="resources/assets/images/office.jpg">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                <p><a href="#">This is a link</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card z-depth-2">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="resources/assets/images/office.jpg">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                <p><a href="#">This is a link</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card z-depth-2">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="resources/assets/images/office.jpg">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                <p><a href="#">This is a link</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn waves-effect waves-light right"><i class="material-icons right">navigate_next</i>More</a>
            </div>
            <div id="category2" class="section scrollspy">
                <div class="inline">
                    <i class="material-icons">list</i>
                    <a href="#">Category</a>
                    <hr class="cate-line">
                </div>
                <div class="row">
                    <div class="col s12 m3">
                        <div class="card z-depth-2">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="resources/assets/images/office.jpg">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                <p><a href="#">This is a link</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card z-depth-2">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="resources/assets/images/office.jpg">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                <p><a href="#">This is a link</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card z-depth-2">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="resources/assets/images/office.jpg">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                <p><a href="#">This is a link</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card z-depth-2">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="resources/assets/images/office.jpg">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                <p><a href="#">This is a link</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{--<span class="float-right text-uppercase"><a href="#">xem them</a></span>--}}
                <a class="btn waves-effect waves-light right"><i class="material-icons right">navigate_next</i>More</a>
            </div>
            <div id="category3" class="section scrollspy">
                <div class="inline">
                    <i class="material-icons">list</i>
                    <a href="#">Category</a>
                    <hr class="cate-line">
                </div>
                <div class="row">
                    <div class="col s12 m3">
                        <div class="card z-depth-2">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="resources/assets/images/office.jpg">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                <p><a href="#">This is a link</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card z-depth-2">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="resources/assets/images/office.jpg">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                <p><a href="#">This is a link</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card z-depth-2">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="resources/assets/images/office.jpg">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                <p><a href="#">This is a link</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card z-depth-2">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="resources/assets/images/office.jpg">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                <p><a href="#">This is a link</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn waves-effect waves-light right"><i class="material-icons right">navigate_next</i>More</a>
            </div>
            <div id="category4" class="section scrollspy">
                <div class="inline">
                    <i class="material-icons">list</i>
                    <a href="#">Category</a>
                    <hr class="cate-line">
                </div>
                <div class="row">
                    <div class="col s12 m3">
                        <div class="card z-depth-2">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="resources/assets/images/office.jpg">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                <p><a href="#">This is a link</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card z-depth-2">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="resources/assets/images/office.jpg">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                <p><a href="#">This is a link</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card z-depth-2">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="resources/assets/images/office.jpg">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                <p><a href="#">This is a link</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card z-depth-2">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="resources/assets/images/office.jpg">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                <p><a href="#">This is a link</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn waves-effect waves-light right"><i class="material-icons right">navigate_next</i>More</a>
            </div>
        </div>

        {{--ScrollSpy left menu--}}
        <div class="section col l2 hide-on-med-and-down">
            <div id="spy-header" style="height: 1px"></div>
            <div id="leftScrollSpy" class="toc-wrapper pinned">
                <ul class="table-of-contents">
                    <li><a href="#crs-header">Promotion</a></li>
                    <li><a href="#category">Category</a></li>
                    <li><a href="#category1">Category1</a></li>
                    <li><a href="#category2">Category2</a></li>
                    <li><a href="#category3">Category3</a></li>
                    <li><a href="#category4">Category4</a></li>
                </ul>
            </div>
        </div>
    </div>
</main>

{{--footer--}}
<footer class="page-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col l3 s12 offset-l1">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class="col l4 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row center">
            <h6>CÔNG TY CỔ PHẦN THƯƠNG MẠI DU LỊCH VÀ DỊCH VỤ VŨNG CHÙA</h6>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <span class="grey-text text-lighten-4 left">Copyright © 2016 Vung Chua JSC., Số GPĐKKD: 3100978535</span>
        </div>
    </div>
</footer>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="resources/assets/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="resources/assets/js/materialize.js"></script>
<script type="text/javascript" src="resources/assets/js/svg.js"></script>
<script type="text/javascript" src="resources/assets/js/custom.js"></script>
</body>
</html>
