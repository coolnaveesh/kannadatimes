<?php
session_start();


include 'databaseconnect.php';

$actuserid=$_SESSION['id'];
$actfirstname=$_SESSION['login'];

if(isset($_POST['submit_image'])){

$images = array();
   foreach($_FILES['images']['name'] as $key=>$val){ 

    if(empty($_FILES['images']['name'][$key]) ) {
        echo "<script>alert('Please Select Image');</script>"; 
        break;
      }
    
    $randomnumber = rand(100000,999999);
       
    $file=$_FILES['images'];

			$fileName=$file['name'][$key];
			$fileTmpName=$file['tmp_name'][$key];
			$fileSize=$file['size'][$key];
			$fileError=$file['error'][$key];
			$fileType=$file['type'][$key];

			$fileExt=explode('.',$fileName);
			$fileActualExt=strtolower(end($fileExt));

			$allowed=array('jpg','jpeg','png','bmp','JPG','JPEG','PNG','BMP');

			if(in_array($fileActualExt, $allowed)){
				if($fileError===0){
					if($fileSize < 1000000000){
						$fileNameNew = $fileExt[0]."_".$actuserid."_".$randomnumber.".".$fileActualExt;
						$htmlfilename = $fileNameNew;
						//$fileNameNew1 = substr($fileNameNew, 0,strrpos($fileNameNew, '.'));
						$fileDestination = 'imguploads/'.$fileNameNew;
						move_uploaded_file($fileTmpName, $fileDestination);
                        $htmlfiledestination = $fileDestination;
                        
                        $sql = "INSERT INTO imageuploads(`img_name`, `img_path`) VALUES( :fileName, :original_filedestination)";

                        $stmt = $pdo->prepare($sql);
                        $result = $stmt->execute([':fileName' =>$fileName,':original_filedestination'=>$htmlfiledestination]);




                        if($result>0){

                            echo "<script>alert('Successfully updated');</script>";

                        }

                        else{

                            echo "<script>alert('Error while Updating');</script>";
                        }

					}
					else{
                        echo "<script>alert('One of the file is too big');</script>";
		
					}

					
				}
				else{
                    echo "<script>alert('There was an error uploading your file');</script>";
					
				}

				}
				else{
                    echo "<script>alert('Cannot upload files of this type');</script>";
			}

   }
}
	
?>







<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>KannadaTimesNews|Admin</title>
    <!-- Favicon-->
    <link rel="icon" href="logon.jpeg" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="index.php">Kannada News Times</a>
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
                                        <a href="uploadimage.php">Upload Image</a>
                                    </li>
                                    <li>
                                        <a href="removephotos.php">Delete Image</a>
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
                                <a href="">Add user</a>
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
                    
                   
                    
                  
                    
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020 <a href="javascript:void(0);">Admin Kannada Times News</a>.
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
                 <div class="content-wrapper">
        <div class="form-group">
                      
                    <section class="wrapper">
                        <h2><i class="fa fa-angle-right"></i> Upload Images</h2><br>
              <div class="container">
                 <form method="POST" enctype="multipart/form-data">
            <div class="col-md-6">
                <input type="file" class="form-control" id="images" name="images[]" onchange="preview_images();" multiple/>
            </div>
            <div class="col-md-6">
                <input type="submit" class="btn btn-primary" name='submit_image' value="Upload "/>
            </div>
           </form>
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

    <!-- Custom Js -->
    <script src="js/admin.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
