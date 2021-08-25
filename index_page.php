<?php

if(isset($_POST['upload'])){
   $imgname= $_POST['imgname'];
   $image =$_FILES['image'];
   $imageName = $image['name'];
   $imageType = $image['type'];  
   $imageTmpName = $image['tmp_name'];
   $imageError = $image['error'];
   $imageSize = $image['size'];
   

   if ($imgname== ""){
    $imageNameWithoutEx = pathinfo( $imageName,PATHINFO_FILENAME);
    $imageEx = pathinfo( $imageName,PATHINFO_EXTENSION);
    $imageNewName = "$imageNameWithoutEx" .uniqid() . "$imageEx";
    move_uploaded_file($imageTmpName , "uploads/$imageNewName");
   }
  else{
   move_uploaded_file($imageTmpName , "uploads/$imgname"); 
  }
}
else 
{
     header("location: upload_page.php");
       
}
$dir = "uploads";
  $a= scandir($dir);
  for($i=2 ; $i<count($a); $i++)
  {
     $img=$a[$i];
     echo "download" ,"<a href='uploads/$img'/>.$img</a>","<br>";
     echo "<img src='uploads/$img' width='50%'  height='50%' />","<br>";
  }
  
           