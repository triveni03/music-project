<?php

require('db.php');
include("auth.php");
?>

  <meta name="veiwport" content="width=device-width",initial-scale=1,user-scalable=no">

  <link rel="stylesheet" type="text/css" href="css/about.css">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script
  src="https://code.jquery.com/jquery-3.3.1.js">
</script>
<script type="text/javascript">
  $(document).ready(function()
  {
    $('.toggle').click(function()
    {
      $('ul').slideToggle(500);
    })
  })
</script>
<title>Inserting Page</title>
<link rel="stylesheet" href="css/insert.css" />
<section>
  <header>
    <a href="#" class="logo"><img src="img/logo.jpg" width="100px;" height="80px;"></a>
    <a class="toggle">Menu</a>
    <ul class="active">     
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </header>

<div class="one">

<?php
include("db.php");

 
 
if(isset($_POST['submit']))
{
	$errors=1;
 //Targeting Folder
 $target="songs/";
	$id=$_POST['id'];
 /* $file_name=$_FILES['image']['name'];
 $file_tmp=$_FILES['image']['tmp_name'];
 $file_type=$_FILES['image']['type'];
 $file_size=$_FILES['image']['size'];
 $f="images/";
 move_uploaded_file($_FILES['image']['tmp_name'],$f.$file_name);*/

 //Targeting Folder
 $stime = mysqli_real_escape_string($con,$_POST['stime']);
 $target=$target.basename($_FILES['song']['name']);
 //Getting Selected video Type
 $type=pathinfo($target,PATHINFO_EXTENSION);
 //Allow Certain File Format To Upload
 if($type!='mp3'&& $type!='avi'){
  echo "    Only mp3,avi file format are allowed";
   $errors=0;
 }
  //checking for Exsisting video Files
  if(file_exists($target)){
   echo "   File Exist";
   $errors=0;
  }
   //Checking for File Size 1000000 bytes== 1MB ..here file limit is 2MB..You can Change the limit..
   //250*2000000==500MB
  $filesize=$_FILES['song']['size'];
   if($filesize>250*2000000){
    echo '                     You Can not Upload Large File(more than 2MB) by Default ini setting..<a href="http://www.codenair.com/2018/03/how-to-upload-large-file-in-php.html">How to upload large file in php</a>'; 
       $errors=0;
   }
   if($errors == 0){
    echo ' Your File Not Updated';
   }else{
   //Moving The video file to Desired Directory
  $uplaod_success=move_uploaded_file($_FILES['song']['tmp_name'],$target);
  if($uplaod_success){
   //Getting Selected video Information
      $stime = mysqli_real_escape_string($con,$_POST['stime']);
      $name=$_FILES['song']['name'];
      $size=$_FILES['song']['size'];
      /*$result=mysqli_query($con,"UPDATE audio SET name='$name' WHERE id=$id");
      iname='$file_name',isize='$file_size',itype='$file_type'*/
   $result=mysqli_query($con,"UPDATE audio set stime='$stime', name='$name',size='$size',type='$type' where id='$id'");
   if($result==TRUE){
    echo "Your song  '$name' and image '$file_name' Successfully Upated to database";
   }
  }
  }
 }
?>

</div>
</section>