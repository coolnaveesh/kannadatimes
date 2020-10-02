<?php
session_start();

 if(!isset($_SESSION['login'])||!isset($_SESSION['id'])){
     header('Location: index.php');
 }

include 'databaseconnect.php';

$actuserid=$_SESSION['id'];
$actfirstname=$_SESSION['login'];

if(isset($_POST['submit_image'])){
    // receive all input values from the form
  $heading = mysqli_real_escape_string($conn,$_POST['heading']);
$goal= mysqli_real_escape_string($conn,$_POST['goal']);
$achieved= mysqli_real_escape_string($conn,$_POST['achieved']);
  $content = mysqli_real_escape_string($conn,$_POST['content']);
  $photo = mysqli_real_escape_string($conn,$_POST['photo']);

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
						$fileDestination = 'newsuploads/'.$fileNameNew;
						move_uploaded_file($fileTmpName, $fileDestination);
                        $htmlfiledestination = $fileDestination;
                        
                         
                        $sql = "INSERT INTO frame(`heading`,`content`,`img_name`, `img_path`) VALUES(:heading,:content, :fileName, :original_filedestination)";

                        $stmt = $pdo->prepare($sql);
                         $result = $stmt->execute([':heading' =>$heading ,':content'=>$content,':fileName' =>$fileName,':original_filedestination'=>$htmlfiledestination]);




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