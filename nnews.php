<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"magazine");
include "nav.php";?>
<html>
<head><title>
Magazine | National News</title>
<link rel="stylesheet" type="text/css" href="nnews.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
  $res=mysqli_query($link,"SELECT * FROM post");
  while($row=mysqli_fetch_array($res))
  {
 ?>
 <div class="container">
    <div class="row">
       <div class="row">
        <article class="col-md-6">
                <figure class="col-lg-12">
                <a href=""><img class="img img-responsive article-img" src="<?php echo $row["img_path"]; ?>"</a>
                <figcaption class="article-caption"><h1 class="article-title"><a href="<?php echo $row["title"]; ?>"></a></h1>
                </figcaption>
                </figure>
                <div class="article-intro col-lg-12" style="padding-top: 10px;"><strong>
                <?php echo $row["text_post"]; ?>
               </strong> </div>
                </article>
        <article class="col-md-6">
                <figure class="col-lg-12">
                <a href=""><img class="img img-responsive article-img" src="<?php echo $row["img_path"]; ?>"</a>
                <figcaption class="article-caption"><h1 class="article-title"><a href="<?php echo $row["title"]; ?>"></a></h1>
                </figcaption>
                </figure>
                <div class="article-intro col-lg-12" style="padding-top: 10px;"><strong>
                <?php echo $row["text_post"]; ?>
               </strong> </div>
                </article>
                </div>  
                <div class="row">
               <article class="col-md-6">
                <figure class="col-lg-12">
                <a href=""><img class="img img-responsive article-img" src="<?php echo $row["img_path"]; ?>"</a>
                <figcaption class="article-caption"><h1 class="article-title"><a href="<?php echo $row["title"]; ?>"></a></h1>
                </figcaption>
                </figure>
                <div class="article-intro col-lg-12" style="padding-top: 10px;"><strong>
                <?php echo $row["text_post"]; ?>
               </strong> </div>
                </article> 
                <article class="col-md-6">
                <figure class="col-lg-12">
                <a href=""><img class="img img-responsive article-img" src="<?php echo $row["img_path"]; ?>"</a>
                <figcaption class="article-caption"><h1 class="article-title"><a href="<?php echo $row["title"]; ?>"></a></h1>
                </figcaption>
                </figure>
                <div class="article-intro col-lg-12" style="padding-top: 10px;"><strong>
                <?php echo $row["text_post"]; ?>
               </strong> </div>
                </article>
                </div>
                </div>
</div>
 <?php
  }


       ?>

    <?php
  $res=mysqli_query($link,"SELECT * FROM post");
  while($row=mysqli_fetch_array($res))
  {
 ?>
<div class="container1">
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="#" class="MakaleYazariAdi"><?php echo $row["title"]; ?></a>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="<?php echo $row["img_path"]; ?>" alt="Kurt">
                    </a>
                </div>
                <div class="media-body">
                <h4 class="media-heading"><?php echo $row["title"]; ?></h4>
                <?php echo $row["text_post"]; ?>
                <div class="clearfix"></div>
                <div class="btn-group" role="group" id="BegeniButonlari">
                    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-thumbs-up"></span></button>
                    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-thumbs-down"></span></button>
                </div>                 
               </div>
            </div>
        </div>
    </div>
</div>
 <?php
  }


       ?>
</body>
</html>
<?php
include "footer.php";?>