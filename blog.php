<?php
include "nav.php";?>
<?php
include "connection.php";
if(isset($_POST['txtPost'])){
	$txtPost=$_POST['txtPost'];
	$title=$_POST['title'];
	$img_path=$_FILES["fileToUpload"]["name"];
	//upload image
	$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
	
	
	$sql = "INSERT INTO `post`( `id_category`, `title`,`img_path`,`text_post`) VALUES (1,'$title','$img_path','$txtPost')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<html>
<head><title>
Magazine | Blog </title>
<link rel="stylesheet" type="text/css" href="blog.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<body>
	  <script src="blog.js"></script>
<h3><center>POST THE NEWS</center></h3>
 <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
<div class="container">
    <div class="row" >
    <div class="col-md-6">
    						<div class="widget-area no-padding blank">
								<div class="status-upload">
									<form action="blog.php" method="post" enctype="multipart/form-data">
									<div class="form-group">
                                   
									<input type="text" class="form-control" name="title" placeholder="Title">
									</div>
										<textarea placeholder="What is going on around you?" name="txtPost"></textarea>
										<ul>
											<li> <input type="file" name="fileToUpload" id="fileToUpload"data-toggle="tooltip" data-placement="bottom" data-original-title="Picture" ><i</i></input></li>
										</ul>
										<button type="submit" class="btn btn-success green">Post it!</button>
									</form>
								</div><!-- Status Upload  -->
							</div><!-- Widget Area -->
						</div>
        
</div>
</div>
</body>
</html>