<html>
   
   <head>
      <title>Delete Post</title>
   </head>
   
   <body>
      <?php
 $servername = "localhost";
$username = "u413525836_kannadauser";
$password = "1P_kannadauser";
$dbname = "u413525836_kannadatimes";
$id = $_GET['image_id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "DELETE from imageuploads where image_id='$id'";
if (mysqli_query($conn, $sql)) {
echo "";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$result = mysqli_query($conn, $sql);
if($result){
header("Location: removephotos.php");
}else{
echo "Unable to delete";
}
      ?>
      
   </body>
</html>