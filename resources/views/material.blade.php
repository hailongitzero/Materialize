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
    <link type="text/css" rel="stylesheet" href="resources/assets/svg-sprite/svg.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<svg width="0" height="0" style="position:absolute">
    <symbol viewBox="0 0 24 24" id="ic_apps_24px"><path d="M4 8h4V4H4v4zm6 12h4v-4h-4v4zm-6 0h4v-4H4v4zm0-6h4v-4H4v4zm6 0h4v-4h-4v4zm6-10v4h4V4h-4zm-6 4h4V4h-4v4zm6 6h4v-4h-4v4zm0 6h4v-4h-4v4z"/></symbol>
    <symbol viewBox="0 0 24 24" id="ic_arrow_back_24px"><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/></symbol>
    <symbol viewBox="0 0 24 24" id="ic_arrow_downward_24px"><path fill="#010101" d="M20 12l-1.41-1.41L13 16.17V4h-2v12.17l-5.58-5.59L4 12l8 8 8-8z"/></symbol>
    <symbol viewBox="0 0 24 24" id="ic_arrow_drop_down_24px"><path d="M7 10l5 5 5-5z"/></symbol>
    <symbol viewBox="0 0 24 24" id="ic_arrow_drop_down_circle_24px"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 12l-4-4h8l-4 4z"/></symbol>
    <symbol viewBox="0 0 24 24" id="ic_arrow_drop_up_24px"><path d="M7 14l5-5 5 5z"/></symbol>
    <symbol viewBox="0 0 24 24" id="ic_arrow_forward_24px"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></symbol>
    <symbol viewBox="0 0 24 24" id="ic_arrow_upward_24px"><path d="M4 12l1.41 1.41L11 7.83V20h2V7.83l5.58 5.59L20 12l-8-8-8 8z"/></symbol>
    <symbol viewBox="0 0 24 24" id="ic_cancel_24px"><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"/></symbol>
    <symbol viewBox="0 0 24 24" id="ic_check_24px"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></symbol>
    <symbol viewBox="0 0 24 24" id="ic_chevron_left_24px"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></symbol>
    <symbol viewBox="0 0 24 24" id="ic_chevron_right_24px"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></symbol>
    <symbol viewBox="0 0 24 24" id="ic_close_24px"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></symbol>
    <symbol viewBox="0 0 24 24" id="ic_expand_less_24px"><path d="M12 8l-6 6 1.41 1.41L12 10.83l4.59 4.58L18 14z"/></symbol>
    <symbol viewBox="0 0 24 24" id="ic_expand_more_24px"><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/></symbol>
    <symbol viewBox="0 0 24 24" id="ic_first_page_24px"><path d="M18.41 16.59L13.82 12l4.59-4.59L17 6l-6 6 6 6zM6 6h2v12H6z"/></symbol>
    <symbol viewBox="0 0 24 24" id="ic_fullscreen_24px"><path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z"/></symbol>
    <symbol viewBox="0 0 24 24" id="ic_fullscreen_exit_24px"><path d="M5 16h3v3h2v-5H5v2zm3-8H5v2h5V5H8v3zm6 11h2v-3h3v-2h-5v5zm2-11V5h-2v5h5V8h-3z"/></symbol>
    <symbol viewBox="0 0 24 24" id="ic_last_page_24px"><path d="M5.59 7.41L10.18 12l-4.59 4.59L7 18l6-6-6-6zM16 6h2v12h-2z"/></symbol>
    <symbol viewBox="0 0 24 24" id="ic_menu_24px"><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></symbol>
    <symbol viewBox="0 0 24 24" id="ic_more_horiz_24px"><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></symbol>
    <symbol viewBox="0 0 24 24" id="ic_more_vert_24px"><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></symbol>
    <symbol viewBox="0 0 24 24" id="ic_refresh_24px"><path d="M17.65 6.35A7.958 7.958 0 0 0 12 4c-4.42 0-7.99 3.58-7.99 8s3.57 8 7.99 8c3.73 0 6.84-2.55 7.73-6h-2.08A5.99 5.99 0 0 1 12 18c-3.31 0-6-2.69-6-6s2.69-6 6-6c1.66 0 3.14.69 4.22 1.78L13 11h7V4l-2.35 2.35z"/></symbol>
    <symbol viewBox="0 0 24 24" id="ic_subdirectory_arrow_left_24px"><path d="M11 9l1.42 1.42L8.83 14H18V4h2v12H8.83l3.59 3.58L11 21l-6-6 6-6z"/></symbol>
    <symbol viewBox="0 0 24 24" id="ic_subdirectory_arrow_right_24px"><path d="M19 15l-6 6-1.42-1.42L15.17 16H4V4h2v10h9.17l-3.59-3.58L13 9l6 6z"/></symbol>
    <symbol viewBox="0 0 24 24" id="ic_unfold_less_24px"><path d="M7.41 18.59L8.83 20 12 16.83 15.17 20l1.41-1.41L12 14l-4.59 4.59zm9.18-13.18L15.17 4 12 7.17 8.83 4 7.41 5.41 12 10l4.59-4.59z"/></symbol>
    <symbol viewBox="0 0 24 24" id="ic_unfold_more_24px"><path d="M12 5.83L15.17 9l1.41-1.41L12 3 7.41 7.59 8.83 9 12 5.83zm0 12.34L8.83 15l-1.41 1.41L12 21l4.59-4.59L15.17 15 12 18.17z"/></symbol>
</svg>
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
                        <div class="collapsible-header waves-effect waves-light"><i class="material-icons">search</i>Quick Search</div>
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
                        <div class="collapsible-header waves-effect waves-teal"><i class="material-icons">contacts</i>Contact</div>
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
        <nav>
            <div class="nav-wrapper">
                <a id="btnLeftSideMenu" class="button-collapse" href="#!" data-activates="nav-mobile"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a id="drdHotel" href="#" class="dropdown" data-activates="hotelLayout">Hotel</a></li>
                    <li><a id="drdTour" href="#" class="dropdown" data-activates="tourLayout">Tours</a></li>
                    <li><a href="#">Components</a></li>
                    <li><a id="drdDrd2" class="dropdown-button" href="#!" data-activates="dropdown2">About Us</a></li>
                    <li><a id="drdDrd" class="dropdown-button" href="#!" data-activates="dropdown1">About Us</a></li>
                    <li><a href="#">
                            <!-- ic_menu_24px -->
                            <svg class="svg-ic_menu_24px-dims">
                                <use xlink:href="#ic_menu_24px"></use>
                            </svg>
                        </a></li>
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

            {{--search layout--}}
            <div class="category">

            </div>
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
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
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
    <div class="footer-copyright">
        <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
    </div>
</footer>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="resources/assets/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="resources/assets/js/materialize.js"></script>
<script type="text/javascript" src="resources/assets/js/custom.js"></script>
</body>
</html>
