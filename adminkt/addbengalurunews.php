<?php

session_start();

include 'databaseconnect.php';

$Sstatus="";

if(isset($_POST['submit_image'])){
    $heading=$_POST['heading'];
    $content=$_POST['content'];
    $author=$_POST['author'];
    $date=$_POST['date'];
    $rate=$_POST['rate'];
    $category=$_POST['category'];

    $newsphoto = $_FILES['newsphoto']['name'];
    $target1 = "../images/".basename($newsphoto);

    $newsphoto2 = $_FILES['newsphoto2']['name'];
    $target2 = "../images/".basename($newsphoto2);

    $newsphoto3 = $_FILES['newsphoto3']['name'];
    $target3 = "../images/".basename($newsphoto3);

    $newsphoto4 = $_FILES['newsphoto4']['name'];
    $target4 = "../images/".basename($newsphoto4);

    if(move_uploaded_file($_FILES['newsphoto']['tmp_name'], $target1)) {
        if(move_uploaded_file($_FILES['newsphoto2']['tmp_name'], $target2)) {
            if(move_uploaded_file($_FILES['newsphoto3']['tmp_name'], $target3)) {
                if(move_uploaded_file($_FILES['newsphoto4']['tmp_name'], $target4)) {
                    $query="INSERT INTO news(heading,content,author,post_date,rate,category,photo,photo2,photo3,photo4)
                    values 
                    ('$heading','$content','$author','$date','$rate','$category','$newsphoto','$newsphoto2','$newsphoto3','$newsphoto4')";
                    if(mysqli_query($conn, $query))  
                    {  
                        echo '<script type="text/javascript"> 
                            alert("Product added successfully"); 
                            window.location.href = "addbengalurunews.php";
                            </script>';  
                    }else{
                        echo '<script type="text/javascript"> 
                            alert("Couldn"t add product.....technical error please try again!!!");
                            window.location.href = "addbengalurunews.php";
                            </script>';
                    }
                }
            }
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>KannadaTimes</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />
     <!-- Dropzone Css -->
    <link href="plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="plugins/multi-select/css/multi-select.css" rel="stylesheet">


    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
    
     <!-- Bootstrap Select Css -->
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">Admin Kannada Times News</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                   
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="index.php">
                            <i class="material-icons"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                  
                   
                    <!-- helper classes-->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons"></i>
                            <span>Photo Gallery</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Image</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="">Upload Image</a>
                                    </li>
                                    <li>
                                        <a href="">Delete Image</a>
                                    </li>
                                   
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Video</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a>Upload Video</a>
                                    </li>
                                    <li>
                                        <a>Delete Video</a>
                                    </li>
                                    
                                  
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                    
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">perm_media</i>
                            <span>Manage Users</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="addusers.php">Add user</a>
                            </li>
                            <li>
                                <a href="">Delete User</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">pie_chart</i>
                            <span>News</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="">Add News</a>
                            </li>
                           
                          
                        </ul>
                    </li>
                    
                  
                    <li class="header">LABELS</li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-red">donut_large</i>
                            <span>Important</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-amber">donut_large</i>
                            <span>Warning</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-light-blue">donut_large</i>
                            <span>Information</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
       
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>ADD NEWS</h2>
            </div>
              <form method="post" action="" enctype="multipart/form-data">

  <div class="form-group">
    <label>Heading</label>
    <input type="text" class="form-control" id="heading" name="heading"  placeholder="News Heading" required value=<?php echo isset($_POST['heading']) ? $_POST["heading"] : ''; ?>>
  </div>

  <div class="form-group">
    <label>Content</label>
  <textarea class="form-control" id="content" name="content" placeholder="News Content" required value=<?php echo isset($_POST['content']) ? $_POST["content"] : ''; ?>></textarea>
  </div>

 <div class="form-group">
    <label>Author</label>
    <input type="text" class="form-control" id="author" name="author" placeholder="author name" required value=<?php echo isset($_POST['author']) ? $_POST["author"] : ''; ?>>
  </div>

 <div class="form-group">
    <label>Date</label>
    <input type="text" class="form-control" id="date" name="date" required>
  </div>

<div class="form-group">
    <label for="rate" >Rate</label>
    <select id="rate" name="rate" class="form-control form-control-lg" required>
    <option value>None</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select>
</div>


<div class="form-group">
    <label>Category</label>
<select id="category" name="category" class="form-control form-control-lg" required>
    <option value>None</option>
    <option value="Suddi">Suddi</option>
    <option value="Politics">Politics</option>
    <option value="Cinema">Cinema</option>
    <option value="Namma Bengaluru">Namma Bengaluru</option>
    <option value="Hemmeya Kannadigaru">Hemmeya Kannadigaru</option>
    <option value="Sports">Sports</option>
    <option value="Health">Health</option>
    <option value="Astrology">Astrology</option>
    <option value="Blog">Blog</option>
    <option value="Putani Prapancha">Putani Prapancha</option>
  </select>
</div>

 <div class="form-group">
    <label>Photo</label>
    <input type="file" class="form-control" name="newsphoto" id="newsphoto" accept=".jpeg,.JPEG,.JPG,.jpg,.PNG,.png" required>
    
  </div>


  <div class="form-group">
    <label>Photo</label>
    <input type="file" class="form-control" name="newsphoto2" id="newsphoto" accept=".jpeg,.JPEG,.JPG,.jpg,.PNG,.png" required>
    
  </div>


  <div class="form-group">
    <label>Photo</label>
    <input type="file" class="form-control" name="newsphoto3" id="newsphoto" accept=".jpeg,.JPEG,.JPG,.jpg,.PNG,.png" required>
    
  </div>


  <div class="form-group">
    <label>Photo</label>
    <input type="file" class="form-control" name="newsphoto4" id="newsphoto" accept=".jpeg,.JPEG,.JPG,.jpg,.PNG,.png" required>
    
  </div>
  <button type="submit" class="btn btn-primary" name="submit_image">Post</button>
</form> 

            <!-- Widgets -->
            
            
                
               
                           </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
       
            <!-- #END# CPU Usage -->
           
                <!-- #END# Visitors -->
                <!-- Latest Social Trends -->
               
                <!-- #END# Latest Social Trends -->
                <!-- Answered Tickets -->
               
                <!-- #END# Answered Tickets -->
            </div>

           
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                
                <!-- #END# Browser Usage -->
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>