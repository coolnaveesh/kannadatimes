<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<?php
$servername = "localhost";
$username = "u413525836_kannadauser";
$password = "1P_kannadauser";
$dbname = "u413525836_kannadatimes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['reg_p'])) {
  // receive all input values from the form
  $heading = mysqli_real_escape_string($conn,$_POST['heading']);
$goal= mysqli_real_escape_string($conn,$_POST['goal']);
$achieved= mysqli_real_escape_string($conn,$_POST['achieved']);
  $content = mysqli_real_escape_string($conn,$_POST['content']);
  $photo = mysqli_real_escape_string($conn,$_POST['photo']);
  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//palraj
$target_dir = "newsuploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
//palraj

$name = basename( $_FILES["fileToUpload"]["name"]);
$sql = "INSERT INTO news (heading,content,photo,name)
VALUES ('$heading', '$content', '$photo', '$name')";

if ($conn->query($sql) === TRUE) {
	Echo "Activity Uploaded Sucessfully..!";
	//header("Location: index.php");
Echo "<a href='index.php'>Home</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>