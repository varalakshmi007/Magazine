<?php
include "connection.php";
if(isset($_GET['id'])){
$id=$_GET['id'];	

$sql = "SELECT `id`, `id_category`, `title`, `img_path`, `text_post` FROM `post` WHERE `id`=$id";
$result = mysqli_query($conn, $sql);


    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
	{
        echo "id: " . $row["id"];
    




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
	<div class="row">
	                <div class="col-md-10 blogShort">
                     <h1><?php echo $row['title']; ?></h1>
                     <img src="uploads/<?php echo $row['img_path']; ?>" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">
                      
                        
                     <article> <p><?php echo $row['text_post']; ?></p></article>
                     <a class="btn btn-blog pull-right marginBottom10" href="http://bootsnipp.com/user/snippets/2RoQ">READ MORE</a> 
                 </div>
	</div>
    
    
</div>

</body>
</html>
<?php
	} 
mysqli_close($conn);
}
?>