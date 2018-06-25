<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cuisine</title>
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
    <body id="page2">
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
                                <li class="active"><a href="Cuisine.html">Cuisine</a></li>
                                <li><a href="Contacts.html">Contacts</a></li>
                            </ul>
                        </nav>
                    </header>
                    <!-- / header -->
                    <!-- content -->
                </div>
            </div>
        </div>
        <div class="body2">
            <div class="main">
                <article id="content2">
                    <div class="wrapper">
                        <section class="pad_left1">
                            <h2>Banquet’s Specials</h2>
                            
                            @if(count($alldishes)>0)
                            @foreach($alldishes as $dish)
                            <div class="wrapper">
                                <figure class="left marg_right1"><img src="{{$dish->imagesmall}}" alt=""></figure>
                                <div class="right"><button class="button-green" style="padding: 8px" onclick="addDish({{$dish->id}}, '{{$dish->title}}');">Add to Cart</button></div>
                                <h4>
                                    <a href="#">{{$dish->title}}</a><br>
                                    {{$dish->summary}}
                                </h4>
                                <p >
                                    {{$dish->description}}
                                </p>
                            </div>
                            @endforeach
                            @endif
                            
<!--                            <div class="wrapper">
                                <figure class="left marg_right1"><img src="images/page2_img4.jpg" alt=""></figure>
                                <div class="right"><button class="button-green" style="padding: 8px">Add to Cart</button></div>
                                <p>
                                    <a href="#">Sed ut perspiciatis unde omnis iste</a><br>
                                    Natus error sit voluptatem accusantium doloremque laudantium,<br>
                                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et <br>
                                    quasi architecto beatae vitae dicta sunt explicabo.
                                </p>
                            </div>
                            <div class="wrapper">
                                <figure class="left marg_right1"><img src="images/page4_img2.jpg" alt=""></figure>
                                <div class="right"><button class="button-green" style="padding: 8px">Add to Cart</button></div>
                                <p>
                                    <a href="#">Sed ut perspiciatis unde omnis iste</a><br>
                                    Natus error sit voluptatem accusantium doloremque laudantium,<br>
                                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et <br>
                                    quasi architecto beatae vitae dicta sunt explicabo.
                                </p>
                            </div>-->
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
                                Academic Project. <a href="http://www.kuet.ac.bd/department/EEE/" target="_blank" rel="nofollow">www.kuet.ac.bd/department/EEE</a>
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