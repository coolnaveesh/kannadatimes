<?php
    include('adminkt/databaseconnect.php');
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <title>KannadaTimes</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logon.jpeg" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
    
     <!-- Added styles for this template -->

<link href="css/myindex.css" rel="stylesheet">
<link href="css/breaking.css" rel="stylesheet">
    <!-- Responsive styles for this template -->
    <link href="css/responsive.css" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="css/colors.css" rel="stylesheet">

    <!-- Version Tech CSS for this template -->
    <link href="css/version/tech.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
.bigHeading{
    animation:blinkingText 1.2s infinite;
}
@keyframes blinkingText{
    0%{     color: #fff;    }
    49%{    color: #fff; }
    60%{    color: transparent; }
    99%{    color:transparent;  }
    100%{   color: #fff;    }
}
.bigHeading{
    display: block;
    position: absolute;
    font-style: italic;
    font-size: 35px;
    background: #e60000;
    color: #fff;
    text-transform: uppercase;
    padding: 13px;
    height:54.5px;
    letter-spacing: 3px;
    font-weight: 700;
    z-index: 2;
}
.navbar-nav .nav-item a:hover{
    color:white;
}
.nav-link{
    font-weight:900!important;
    font-size:12px!important;
}
div.scrollmenu {
  background-color: #00008B;
  overflow: auto;
  white-space: nowrap;
}

div.scrollmenu a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

div.scrollmenu a:hover {
  background-color: red;
  color:white!important;
}
.scrollmenu{
    margin-top:4.2em;
}
@media only screen and (max-width: 600px)  {
    .bigHeading i{
        font-size: 18px;
        padding: 8px;
    }
    .navbar-brand img{
        left:40%;
        position:relative;
    }
    .banner_row{
        margin-top:0em!important;
    }
}

</style>
</head>
<body style="overflow-x:hidden;">

    <div id="wrapper">
        <header class="tech-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-col fixed-top bg-col">
                    
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                   
                    <a class="navbar-brand" href="index.php
                    "><img src="upload/kt_logo.jpeg" alt="" height="50" width="100"></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                         <ul class="navbar-nav mr-auto">
                            
                            <li class="nav-item dropdown has-submenu menu-large hidden-md-down hidden-sm-down hidden-xs-down">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
ಸುದ್ದಿ</a>
                                <ul class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                                    <li>
                                        <div class="container">
                                            <div class="mega-menu-content clearfix">
                                                <div class="tab">
                                                    <button class="tablinks active" onclick="openCategory(event, 'cat01')">

ವಿದೇಶ</button>
                                                    <button class="tablinks" onclick="openCategory(event, 'cat02')">
ದೇಶ</button>
                                                    <button class="tablinks" onclick="openCategory(event, 'cat03')">ರಾಜ್ಯ</button>
                                                    
                                                </div>

                                                <div class="tab-details clearfix">
                                                    <div id="cat01" class="tabcontent active">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="upload/tech_menu_02.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">ಕರೋನಾ</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="" title="">Top 10+ care advice for your toenails</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="" title="">
                                                                            <img src="upload/tech_menu_02.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Science</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="" title="">The secret of your beauty is handmade soap</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="" title="">
                                                                            <img src="upload/tech_menu_03.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Science</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="" title="">Benefits of face mask made from mud</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="" title="">
                                                                            <img src="upload/tech_menu_04.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Science</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="" title="">Relax with the unique warmth of candle flavor</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>
                                                        </div><!-- end row -->
                                                    </div>
                                                    <div id="cat02" class="tabcontent">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="" title="">
                                                                            <img src="upload/tech_menu_05.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Technology</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="" title="">2017 summer stamp will have design models here</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="" title="">
                                                                            <img src="upload/tech_menu_06.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Technology</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="" title="">Which color is the most suitable color for you?</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="" title="">
                                                                            <img src="upload/tech_menu_07.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Technology</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="" title="">Subscribe to these sites to keep an eye on the fashion</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="" title="">
                                                                            <img src="upload/tech_menu_08.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Technology</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="" title="">The most trends of this year with color combination</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>
                                                        </div><!-- end row -->
                                                    </div>
                                                    <div id="cat03" class="tabcontent">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="" title="">
                                                                            <img src="upload/ragini.jpeg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Social Media</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="" title="">I visited the architects of Istanbul for you</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="" title="">
                                                                            <img src="upload/tech_menu_10.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Social Media</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="" title="">Prepared handmade dish dish in the Netherlands</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="" title="">
                                                                            <img src="upload/tech_menu_11.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Social Media</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="" title="">I recommend you visit the fairy chimneys</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="" title="">
                                                                            <img src="upload/tech_menu_12.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Social Media</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="" title="">One of the most beautiful ports in the world</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>
                                                        </div><!-- end row -->
                                                    </div>
                                                    <div id="cat04" class="tabcontent">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="" title="">
                                                                            <img src="upload/tech_menu_13.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Car News</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="" title="">A collection of the most beautiful shop designs</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="" title="">
                                                                            <img src="upload/tech_menu_14.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Car News</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="" title="">America's and Canada's most beautiful wine houses</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="" title="">
                                                                            <img src="upload/tech_menu_15.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Car News</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="" title="">The most professional ways to color your walls</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="" title="">
                                                                            <img src="upload/tech_menu_16.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Car News</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="" title="">Stylish cabinet designs and furnitures</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>
                                                        </div><!-- end row -->
                                                    </div>
                                                    <div id="cat05" class="tabcontent">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="" title="">
                                                                            <img src="upload/tech_menu_17.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Worldwide</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="" title="">Grilled vegetable with fish prepared with fish</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="" title="">
                                                                            <img src="upload/tech_menu_18.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Worldwide</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="" title="">The world's finest and clean meat restaurants</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="" title="">
                                                                            <img src="upload/tech_menu_19.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Worldwide</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="" title="">Fried veal and vegetable dish</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="" title="">
                                                                            <img src="upload/tech_menu_20.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Worldwide</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="" title="">Tasty pasta sauces and recipes</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>
                                                        </div><!-- end row -->
                                                    </div>
                                                </div><!-- end tab-details -->
                                            </div><!-- end mega-menu-content -->
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="politics.php">ರಾಜಕೀಯ</a>
                            </li> 
                            <li class="">
                                <a class="nav-link" href="">
ಸಿನಿಮಾ</a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="bengaluru.php">ನಮ್ಮ ನಗರ ಬೆಂಗಳೂರು</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="kannadiga.php">ಹೆಮ್ಮೆಯ ಕನ್ನಡಿಗರು</a>
                            </li>
                             
                             
                             <li class="nav-item">
                                <a class="nav-link" href="sports.php">
ಕ್ರೀಡೆ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="health.php">
ಆರೋಗ್ಯ</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="astrology.php">ಜ್ಯೋತಿಷ್ಯ</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="blog.php">ಅಂಕಣ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="kids.php">ಪುಟಾಣಿ ಪ್ರಪಂಚ</a>
                            </li>
                            
                        </ul>
                        <ul class="navbar-nav mr-2">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-youtube"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.facebook.com/Kannada-Times-News-106167077875999"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div><!-- end container-fluid -->
            
        </header><!-- end market-header -->
        <div class="scrollmenu w-100 d-block d-lg-none">
                <a href="index.php">ಸುದ್ದಿ</a>
                <a href="politics.php">ರಾಜಕೀಯ</a>
                <a href="#">ಸಿನಿಮಾ</a>
                <a href="bengaluru.php">ನಮ್ಮ ನಗರ ಬೆಂಗಳೂರು</a>
                <a href="kannadiga.php">ಹೆಮ್ಮೆಯ ಕನ್ನಡಿಗರು</a>
                <a href="sports.php">ಕ್ರೀಡೆ</a>
                <a href="health.php">ಆರೋಗ್ಯ</a>  
                <a href="astrology.php">ಜ್ಯೋತಿಷ್ಯ</a>
                <a href="blog.php">ಅಂಕಣ</a>
                <a href="kids.php">ಪುಟಾಣಿ ಪ್ರಪಂಚ</a>
                <a class="nav-link" href="#"><i class="fa fa-youtube"></i></a>
                <a class="nav-link" href="https://www.facebook.com/Kannada-Times-News-106167077875999"><i class="fa fa-facebook"></i></a>
                <a class="nav-link" href="#"><i class="fa fa-instagram"></i></a>
                <a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
            </div>
        <div class="row banner_row" style="margin-top:4.2em;">
            <div class="container">
                <div class="col-md-12">
                    <img src="images/news.jpg" style="    width: inherit;
    height: 200px;
    object-fit: cover;
    object-position: top;">
                </div>
            </div>
        </div>


        <section class="">
            <div class="">
            <div class="bigHeading"><i>BREAKING</i></div>
            <marquee bgcolor="#00008B"  behavior="scroll" direction="left">
               <p style="color:white;font-size:22px;" >ಡ್ರಗ್ಸ್ ಜಾಲ ಪ್ರಕರಣಕ್ಕೆ ಸಂಬಂಸಿದಂತೆ ಸಿಸಿಬಿ ವಶದಲ್ಲಿರುವ ಚಿತ್ರನಟಿ  ರಾಗಿಣಿ ದ್ವಿವೇದಿ .....                                    ವಿಧಾನಮಂಡಲ ಅಧಿವೇಶನಕ್ಕೆ ಮೊದಲು ಸಚಿವ ಸಂಪುಟ ವಿಸ್ತರಣೆ ನಡೆಯಲಿದೆ.
            </p></marquee>


                <div class="masonry-blog clearfix">
                <?php
                $user = "SELECT * FROM news where rate >= 3 limit 4";
                if ($users = mysqli_query($conn,$user)) { 
                    while($rows = mysqli_fetch_assoc($users)){
                        echo'
                    <div class="second-slot">
                        <div class="masonry-box post-media">
                             <img src="images/'.$rows['photo'].'" alt=""  height="300" width="200" class="">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        
                                        <h4><a href="ambulance.php" title="">'.$rows['heading'].'</a></h4>
                                        <small><a href="" title="">'.$rows['post_date'].'</a></small>
                                        <small><a href="" title="">by '.$rows['author'].'</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                             </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end second-side -->
                    ';}}?>
                </div><!-- end masonry -->
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix">
                                <h4 class="pull-left">Recent News <a href="#"><i class="fa fa-rss"></i></a></h4>
                            </div><!-- end blog-top -->

                            <div class="blog-list clearfix">
                             <?php
                                $user = "SELECT * FROM news where rate >= 3";
                                if ($users = mysqli_query($conn,$user)) { 
                                    while($rows = mysqli_fetch_assoc($users)){
                                        echo'
                                <div class="blog-box row mb-4">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="" title="">
                                                <img src="images/'.$rows['photo'].'" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="" title="">'.$rows['heading'].' 
</a></h4>
                                        <p>  '.$rows['content'].'</p>

                                        <small class="firstsmall"><a class="bg-orange" href="" title="">'.$rows['category'].'</a></small>
                                        <small><a href="" title="">'.$rows['post_date'].'</a></small>
                                        <small><a href="" title="">by '.$rows['author'].'</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                ';
                                    }}?>
                            </div><!-- end blog-list -->
                        </div><!-- end page-wrapper -->

                        <hr class="invis">

                        <div class="row">
                            <div class="col-md-12">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-start">
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                     <?php
                                     $user = "SELECT * FROM advertisnment limit 1";
                                    if ($users = mysqli_query($conn,$user)) { 
                                        while($rows = mysqli_fetch_assoc($users)){
                                            echo'
                                        <img src="images/'.$rows['photo'].'">
                                        ';
                                        }}
                                        ?>
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Trend Videos</h2>
                                <?php
            $user = "SELECT * FROM `trend_videos` limit 3";
            if ($users = mysqli_query($conn,$user)) { 
                while($rows = mysqli_fetch_assoc($users)){
                    echo'
                                <div class="trend-videos">
                                    <div class="blog-box">
                                        <div class="post-media">
                                                <iframe width="255" height="147"
                                                    src="'.$rows['video'].'">
                                                </iframe>
                                        </div><!-- end media -->
                                        <div class="blog-meta">
                                            <h4><a href="" title="">'.$rows['title'].'</a></h4>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->

                                    <hr class="invis">
                                </div><!-- end videos -->
                                ';
                }}?>
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Popular Posts</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                    <?php
                                     $user = "SELECT * FROM news limit 3";
                                if ($users = mysqli_query($conn,$user)) { 
                                    while($rows = mysqli_fetch_assoc($users)){
                                        echo'
                                        <a href="" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="images/'.$rows['photo'].'" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">5 '.$rows['heading'].'</h5>
                                                <small>'.$rows['post_date'].'</small>
                                            </div>
                                        </a>';
                                    }}
                                        ?>
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            
                            <div class="widget">
                                <h2 class="widget-title">Follow Us</h2>

                                <div class="row text-center">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="#" class="social-button facebook-button">
                                            <i class="fa fa-facebook"></i>
                                            <p>27k</p>
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="#" class="social-button twitter-button">
                                            <i class="fa fa-twitter"></i>
                                            <p>98k</p>
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="#" class="social-button google-button">
                                            <i class="fa fa-google-plus"></i>
                                            <p>17k</p>
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="#" class="social-button youtube-button">
                                            <i class="fa fa-youtube"></i>
                                            <p>22k</p>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- end widget -->

                            <div class="widget">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                         <?php
                                     $user = "SELECT * FROM advertisnment limit 1";
                                    if ($users = mysqli_query($conn,$user)) { 
                                        while($rows = mysqli_fetch_assoc($users)){
                                            echo'
                                        <img src="images/'.$rows['photo'].'">
                                        ';
                                        }}
                                        ?>
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="widget">
                            <div class="footer-text text-left">
                                <a href="index.php"><img src="upload/kt_logo.jpeg" alt="" class="img-fluid"></a>
                                <p>

</p>
                                <div class="social">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>              
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                </div>

                                <hr class="invis">

                                <div class="newsletter-widget text-left">
                                    <form class="form-inline">
                                        <input type="text" class="form-control" placeholder="Enter your email address">
                                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                                    </form>
                                </div><!-- end newsletter -->
                            </div><!-- end footer-text -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <h2 class="widget-title">Popular Categories</h2>
                            <div class="link-widget">
                                <ul>
                                    <li><a href="politics.php">
ರಾಜಕೀಯ<span>(21)</span></a></li>
                                    <li><a href="health.php">
ಆರೋಗ್ಯ<span>(15)</span></a></li>
                                    <li><a href="kannadiga.php">
ಹೆಮ್ಮೆಯ ಕನ್ನಡಿಗರು<span>(31)</span></a></li>
                                    <li><a href="cinema.php">
ಸಿನಿಮಾ<span>(22)</span></a></li>
                                    <li><a href="bengaluru.php">
ನಮ್ಮ ನಗರ ಬೆಂಗಳೂರು<span>(66)</span></a></li>
                                </ul>
                            </div><!-- end link-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <h2 class="widget-title">Copyrights</h2>
                            <div class="link-widget">
                                <ul>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Advertising</a></li>
                                    <li><a href="#">Write for us</a></li>
                                    <li><a href="#">Trademark</a></li>
                                    <li><a href="#">License & Help</a></li>
                                </ul>
                            </div><!-- end link-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <div class="copyright">&copy; KannadaTimes
                </div>
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="dmtop">Scroll to Top</div>
        
    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>