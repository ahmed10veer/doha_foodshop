<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contacts</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
        <script type="text/javascript" src="js/jquery-1.6.js" ></script>
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/cufon-replace.js"></script>  
        <script type="text/javascript" src="js/Forum_400.font.js"></script>
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
    <body id="page5">
        <div class="body6">
            <div class="body1">
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
                                <li><a href="index.html">Restaurant</a></li>
                                <li><a href="Cuisine.html">Cuisine</a></li>
                                <li class="active"><a href="Contacts.html">Contacts</a></li>
                            </ul>
                        </nav>
                    </header>
                    <!-- / header -->
                    <!-- content -->
                    <article id="content">
                        <div class="wrap">
                            <div class="box">
                                <div>
                                    <h2 class="letter_spacing"><span>Shopping Cart</span></h2>
                                    
                                    <form id="orderForm" action="/order" method="post">
                                        <div>
                                            
                            @if(count($dishes)>0)
                            @foreach($dishes as $dish)
                            @if($dish != null)
                            <div class="wrapper">
                                <figure class="left marg_right1"><img src="{{$dish->imagesmall}}" alt=""></figure>
                                <div class="right"><button class="button-green" style="padding: 8px" onclick="deleteDish({{$dish->id}}); return false;" type="button">Remove</button></div>
                                <h4>
                                    <a href="#">{{$dish->title}}</a><br>
                                    {{$dish->summary}}
                                </h4>
                                <p >
                                    {{$dish->description}}
                                </p>
                            </div>
                            @endif
                            @endforeach
                            @endif
                                            <div class="wrapper">
                                                <span>Your Phone:</span>
                                                <input type="tel" class="input" name="phone" >
                                            </div>
                                            <div class="textarea_box">
                                                <span>Your Address:</span>
                                                <textarea name="address"></textarea>								
                                            </div>
                                            <input type="hidden" name="dishids" id="dishids">
                                            <a href="#" class="button1" onClick="document.getElementById('orderForm').submit()">Send</a>
                                            <a href="#" class="button1" onClick="document.getElementById('orderForm').reset()">Clear</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        <div class="body2">
            <div class="main">
                <article id="content2">
                    <div class="wrapper">
                        <section class="pad_left1">
                            <div class="wrapper">
                                <div class="cols">
                                    <h2>Our Contacts</h2>
                                </div>
                                <div class="col3 pad_left1">
                                    <h2>Miscellaneous Info</h2>
                                </div>
                            </div>
                            <div class="line1">
                                <div class="wrapper line2">
                                    <div class="cols">
                                        <div class="wrapper pad_bot1">
                                            <p class="address">
                                                Teligati,PhulBari Gate,Khulna 9203, Bangladesh<br>
                                                <span>Freephone:</span>    +1 800 559 6580<br>
                                                <span>Telephone:</span>    +1 959 603 6035<br>
                                                <span>E-mail:</span>             <a href="mailto:">mail@demolink.org</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col3 pad_left1">
                                        <p>
                                            Khulna University of Engineering & Technology commonly known as KUET, formerly BIT, Khulna, is a public engineering university of Bangladesh emphasizing education and research on engineering and technology
                                        </p>
                                    </div>
                                </div>
                            </div>
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
                                <h3>Toll Free: <span>1-800 123 45 67</span></h3>
                                Website Template by <a href="http://www.templatemonster.com/" target="_blank" rel="nofollow">www.templatemonster.com</a>
                            </section>
                            <section class="col2 pad_left1">
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