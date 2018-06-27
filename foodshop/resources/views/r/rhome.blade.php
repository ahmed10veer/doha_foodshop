<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Restaurant</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
        <script type="text/javascript" src="js/jquery-1.6.js" ></script>
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/cufon-replace.js"></script>  
        <script type="text/javascript" src="js/Forum_400.font.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/tms-0.3.js"></script>
        <script type="text/javascript" src="js/tms_presets.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/atooltip.jquery.js"></script> 
        <script type="text/javascript" src="js/mycooky.js"></script> 

        <!--[if lt IE 9]>
                <script type="text/javascript" src="js/html5.js"></script>
                <style type="text/css">
                        .slider_bg {behavior:url(js/PIE.htc)}
                </style>
        <![endif]-->
        <!--[if lt IE 7]>
                <div style='clear:both;text-align:center;position:relative'>
                        <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
                </div>
        <![endif]-->
    </head>
    <body id="page1">
        <div class="body6">
            <div class="body1">
                <div class="body5">
                    <div class="main">
                        <!-- header -->
                        <header>
                            <h1><a href="index.html" id="logo">Deliccio Classic European Cuisine</a></h1>
                            <nav>
                                <ul id="top_nav">
                                    <li class="end"><a href="javascript:postCookie()"><img src="images/icon_2.gif" alt=""></a></li>
                                </ul>
                            </nav>
                            <nav>
                                <ul id="menu">
                                    <li class="active"><a href="index.html">Restaurant</a></li>
                                    <li><a href="Cuisine.html">Cuisine</a></li>
                                    <li><a href="Contacts.html">Contacts</a></li>
                                </ul>
                            </nav>
                        </header>
                        <!-- / header -->
                        <!-- content -->
                        <article id="content">
                            <div class="slider_bg">
                                <div class="slider">
                                    <ul class="items">

                                        <li>
                                            <img src="{{$alldishes['banner_dishes1']->imagebig}}" alt="">
                                            <!--<img src="images/img2.jpg" alt="">-->
                                            <div class="banner">
                                                <strong>{{$alldishes['banner_dishes1']->title}}</strong>
                                                <b>{{$alldishes['banner_dishes1']->summary}}</b>
                                                <p>
                                                    <span>{{$alldishes['banner_dishes1']->description}}</span>
                                                </p>
                                            </div>
                                        </li>			
                                        
                                        

                                        <li>
                                            <img src="{{$alldishes['banner_dishes2']->imagebig}}" alt="">
                                            <!--<img src="images/img2.jpg" alt="">-->
                                            <div class="banner">
                                                <strong>{{$alldishes['banner_dishes2']->title}}</strong>
                                                <b>{{$alldishes['banner_dishes2']->summary}}</b>
                                                <p>
                                                    <span>{{$alldishes['banner_dishes2']->description}}</span>
                                                </p>
                                            </div>
                                        </li>			
                                        
                                        

                                        <li>
                                            <img src="{{$alldishes['banner_dishes3']->imagebig}}" alt="">
                                            <!--<img src="images/img2.jpg" alt="">-->
                                            <div class="banner">
                                                <strong>{{$alldishes['banner_dishes3']->title}}</strong>
                                                <b>{{$alldishes['banner_dishes3']->summary}}</b>
                                                <p>
                                                    <span>{{$alldishes['banner_dishes3']->description}}</span>
                                                </p>
                                            </div>
                                        </li>			
                                        
                                        

                                        <li>
                                            <img src="{{$alldishes['banner_dishes4']->imagebig}}" alt="">
                                            <!--<img src="images/img2.jpg" alt="">-->
                                            <div class="banner">
                                                <strong>{{$alldishes['banner_dishes4']->title}}</strong>
                                                <b>{{$alldishes['banner_dishes4']->summary}}</b>
                                                <p>
                                                    <span>{{$alldishes['banner_dishes4']->description}}</span>
                                                </p>
                                            </div>
                                        </li>			
                                        
                                        
                                        
<!--                                        <li>
                                            <img src="images/img2.jpg" alt="">
                                            <div class="banner">
                                                <strong>succulent<span>meat</span></strong>
                                                <b>Dish of the Day</b>
                                                <p>
                                                    <span>Lorem ipsum dolamet consectetur <br>
                                                        adipisicing elit, sed do eiusmod tempor aliqua enim ad minim veniam, quis nosinci- didunt ut labore et dolore.</span>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="images/img3.jpg" alt="">
                                            <div class="banner">
                                                <strong>French-Style<span>Tartlet</span></strong>
                                                <b>Dish of the Day</b>
                                                <p>
                                                    <span>Lorem ipsum dolamet consectetur <br>
                                                        adipisicing elit, sed do eiusmod tempor aliqua enim ad minim veniam, quis nosinci- didunt ut labore et dolore.</span>
                                                </p>
                                            </div>
                                        </li>-->
                                    </ul>
                                </div>
                            </div>
                            <div class="wrap">
                                <section class="cols">
                                    <div class="box">
                                        <div>
                                            <h2>Welcome <span>to Us!</span></h2>
                                            <figure><img src="{{$alldishes['welcome_id']->imagesmall}}" alt="" ></figure>
                                            <p class="pad_bot1">{{$alldishes['welcome_id']->description}}</p>
                                            <a href="#" class="button1" style="visibility: hidden">Read More</a>
                                        </div>
                                    </div>
                                </section>
                                <section class="cols pad_left1">
                                    <div class="box">
                                        <div>
                                            <h2>About <span>Us</span></h2>
                                            <figure><img src="{{$alldishes['about_us_id']->imagesmall}}" alt="" ></figure>
                                            <p class="pad_bot1">{{$alldishes['about_us_id']->description}}</p>
                                            <a href="#" class="button1" style="visibility: hidden">Read More</a>
                                        </div>
                                    </div>
                                </section>
                                <section class="cols pad_left1">
                                    <div class="box">
                                        <div>
                                            <h2>Our <span>Services</span></h2>
                                            <figure><img src="{{$alldishes['our_services_id']->imagesmall}}" alt="" ></figure>
                                            <p class="pad_bot1">{{$alldishes['our_services_id']->description}}</p>

                                            <a href="#" class="button1" style="visibility: hidden">Read More</a>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="body2" style="display: none">
            <div class="main">
                <article id="content2">
                    <div class="wrapper">
                        <section class="col1 pad_left1">
                            <h2>Upcoming Events</h2>
                            <div class="wrapper">
                                <div class="cols">
                                    <div class="wrapper pad_bot2">
                                        <figure class="left marg_right1"><img src="images/page1_img4.jpg" alt=""></figure>
                                        <p>
                                            <a href="#">20.07. Sed perspiciatis</a><br>
                                            Unde omnis iste natus error volu accusantium doloremque.
                                        </p>
                                    </div>
                                    <div class="wrapper">
                                        <figure class="left marg_right1"><img src="images/page1_img5.jpg" alt=""></figure>
                                        <p>
                                            <a href="#">18.07. Quasi architecto</a><br>
                                            Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.
                                        </p>
                                    </div>
                                </div>
                                <div class="cols pad_left1">
                                    <div class="wrapper pad_bot2">
                                        <figure class="left marg_right1"><img src="images/page1_img6.jpg" alt=""></figure>
                                        <p>
                                            <a href="#">11.07. Laudaum totam</a><br>
                                            Rem aperiam, eaque ipsa quae ab illo inventore veritatis.
                                        </p>
                                    </div>
                                    <div class="wrapper">
                                        <figure class="left marg_right1"><img src="images/page1_img7.jpg" alt=""></figure>
                                        <p>
                                            <a href="#">09.07. Volups asrnatur</a> <br>
                                            Aut odit aut fugit, sed quia consequuntur magni dolores eos qui.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="col2 pad_left1">
                            <h2>Testimonials</h2>
                            <ul class="testimonials">
                                <li>
                                    <span>1</span>
                                    <p>
                                        “Remperam eaquepsa quae abillo inventore vertatis.”
                                        <img src="images/signature1.jpg" alt="">
                                    </p>
                                </li>
                                <li>
                                    <span>2</span>
                                    <p>
                                        “Quasi arctecto beatae vitae dicta sunt explicabo.”
                                        <img src="images/signature2.jpg" alt="">
                                    </p>
                                </li>
                                <li>
                                    <span>3</span>
                                    <p>
                                        “Nemo enim ipsam volupta<br>
                                        tem quia voluptas.”<img src="images/signature3.jpg" alt="">
                                    </p>
                                </li>
                            </ul>
                        </section>
                    </div>
                </article>
                <!-- / content -->
            </div>
        </div>
        <div class="body3">
            <div class="body4">
                <div class="main">
                    <!-- footer -->
                    <footer>
                        <div class="wrapper">
                            <section class="col1 pad_left1">
                                <h3>Created By: <span>Shadman Rahman</span></h3>
                                Academic Project. <a href="http://www.kuet.ac.bd/department/ECE/" target="_blank" rel="nofollow">www.kuet.ac.bd/department/ECE</a>
                            </section>
                            <section class="col2 pad_left1" style="display: none">
                                <h3>Follow Us </h3>
                                <ul id="icons">
                                    <li><a href="#" class="normaltip" title="Facebook"><img src="images/icon1.gif" alt=""></a></li>
                                    <li><a href="#" class="normaltip" title="Linkedin"><img src="images/icon2.gif" alt=""></a></li>
                                    <li><a href="#" class="normaltip" title="Twitter"><img src="images/icon3.gif" alt=""></a></li>
                                    <li><a href="#" class="normaltip" title="Delicious"><img src="images/icon4.gif" alt=""></a></li>
                                    <li><a href="#" class="normaltip" title="Technorati"><img src="images/icon5.gif" alt=""></a></li>
                                </ul>
                            </section>
                        </div>
                        <!-- {%FOOTER_LINK} -->
                    </footer>
                    <!-- / footer -->
                </div>
            </div>
        </div>
        <script type="text/javascript"> Cufon.now();</script>
    </body>
</html>