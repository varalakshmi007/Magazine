
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"magazine");
include "nav.php";?>
<html>
<head><title>
Magazine | Highlights</title>
<link rel="stylesheet" type="text/css" href="highlights.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="slider">
<?php
  $res=mysqli_query($link,"SELECT * FROM post");
  while($row=mysqli_fetch_array($res))
  {
 ?>
  <div class="col-md-12">
    <h1>Destinations</h1>

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
     <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="thumbnail">
                <img src="<?php echo $row["img_path"]; ?>">
                  <h3>Destination 1</h3>
                  <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI. Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource sucking relationships via premier niche markets.</p>
              </div>
            </div>

            <div class="col-sm-6 col-md-6">
              <div class="thumbnail">
                <img src="<?php echo $row["img_path"]; ?>">
                <h3>Destination 2</h3>
                <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI. Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource sucking relationships via premier niche markets.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="thumbnail">
                <img src="<?php echo $row["img_path"]; ?>">
                  <h3>Destination 3</h3>
                  <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI. Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource sucking relationships via premier niche markets.</p>
              </div>
            </div>

            <div class="col-sm-6 col-md-6">
              <div class="thumbnail">
                <img src="<?php echo $row["img_path"]; ?>">
                <h3>Destination 4</h3>
                <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI. Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource sucking relationships via premier niche markets.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="thumbnail">
                <img src="<?php echo $row["img_path"]; ?>">
                  <h3>Destination 5</h3>
                  <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI. Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource sucking relationships via premier niche markets.</p>
              </div>
            </div>

            <div class="col-sm-6 col-md-6">
              <div class="thumbnail">
                <img src="?php echo $row["img_path"]; ?>">
                <h3>Destination 6</h3>
                <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI. Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource sucking relationships via premier niche markets.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>

      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
    </div>
</div>
 <?php
  }


       ?>
	<div class="container0">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-9 col-xs-12">
		    <article>
		        <div class="row">
		            <div class="col-sm-6 col-md-4">
		                <figure>
		                    <img src="http://usbcode.ir/wp-content/uploads/2017/03/bootstrap.jpg">
		                </figure>
		            </div>
		            <div class="col-sm-6 col-md-8">
		                <span class="label label-default pull-right"><i class="glyphicon glyphicon-comment"></i>50</span>
		                <h4>Raymond Dragon</h4>
		                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
		                <section>
		                    <i class="glyphicon glyphicon-user"></i>RaymondDragon
		                    <i class="glyphicon glyphicon-calendar"></i>1395/12/21
		                    <i class="glyphicon glyphicon-eye-open"></i>10000
		                </section>
		            </div>
		        </div>
		    </article>
		    
		    <article>
		        <div class="row">
		            <div class="col-sm-6 col-md-4">
		                <figure>
		                    <img src="http://usbcode.ir/wp-content/uploads/2017/03/bootstrap.jpg">
		                </figure>
		            </div>
		            <div class="col-sm-6 col-md-8">
		                <span class="label label-default pull-right"><i class="glyphicon glyphicon-comment"></i>50</span>
		                <h4>Raymond Dragon</h4>
		                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
		                <section>
		                    <i class="glyphicon glyphicon-user"></i>RaymondDragon
		                    <i class="glyphicon glyphicon-calendar"></i>1395/12/21
		                    <i class="glyphicon glyphicon-eye-open"></i>10000
		                </section>
		            </div>
		        </div>
		    </article>
		    
		    <article>
		        <div class="row">
		            <div class="col-sm-6 col-md-4">
		                <figure>
		                    <img src="http://usbcode.ir/wp-content/uploads/2017/03/bootstrap.jpg">
		                </figure>
		            </div>
		            <div class="col-sm-6 col-md-8">
		                <span class="label label-default pull-right"><i class="glyphicon glyphicon-comment"></i>50</span>
		                <h4>Raymond Dragon</h4>
		                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
		                <section>
		                    <i class="glyphicon glyphicon-user"></i>RaymondDragon
		                    <i class="glyphicon glyphicon-calendar"></i>1395/12/21
		                    <i class="glyphicon glyphicon-eye-open"></i>10000
		                </section>
		            </div>
		        </div>
		    </article>
		    
		    <article>
		        <div class="row">
		            <div class="col-sm-6 col-md-4">
		                <figure>
		                    <img src="http://usbcode.ir/wp-content/uploads/2017/03/bootstrap.jpg">
		                </figure>
		            </div>
		            <div class="col-sm-6 col-md-8">
		                <span class="label label-default pull-right"><i class="glyphicon glyphicon-comment"></i>50</span>
		                <h4>Raymond Dragon</h4>
		                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
		                <section>
		                    <i class="glyphicon glyphicon-user"></i>RaymondDragon
		                    <i class="glyphicon glyphicon-calendar"></i>1395/12/21
		                    <i class="glyphicon glyphicon-eye-open"></i>10000
		                </section>
		            </div>
		        </div>
		    </article>
		    
		    <article>
		        <div class="row">
		            <div class="col-sm-6 col-md-4">
		                <figure>
		                    <img src="http://usbcode.ir/wp-content/uploads/2017/03/bootstrap.jpg">
		                </figure>
		            </div>
		            <div class="col-sm-6 col-md-8">
		                <span class="label label-default pull-right"><i class="glyphicon glyphicon-comment"></i>50</span>
		                <h4>Raymond Dragon</h4>
		                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
		                <section>
		                    <i class="glyphicon glyphicon-user"></i>RaymondDragon
		                    <i class="glyphicon glyphicon-calendar"></i>1395/12/21
		                    <i class="glyphicon glyphicon-eye-open"></i>10000
		            </div>
		        </div>
		    </article>
		    
		    <article>
		        <div class="row">
		            <div class="col-sm-6 col-md-4">
		                <figure>
		                    <img src="http://usbcode.ir/wp-content/uploads/2017/03/bootstrap.jpg">
		                </figure>
		            </div>
		            <div class="col-sm-6 col-md-8">
		                <span class="label label-default pull-right"><i class="glyphicon glyphicon-comment"></i>50</span>
		                <h4>Raymond Dragon</h4>
		                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
		                <section>
		                    <i class="glyphicon glyphicon-user"></i>RaymondDragon
		                    <i class="glyphicon glyphicon-calendar"></i>1395/12/21
		                    <i class="glyphicon glyphicon-eye-open"></i>10000
		                </section>
		            </div>
		        </div>
		    </article>
		    
		</div>
	</div>
</div>
</body>
</html>
<?php
include "footer.php";?>