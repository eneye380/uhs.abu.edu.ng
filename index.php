<?php include './headnav.php'; ?>
<!-- Header Carousel -->

<header id="myCarousel" class="top-page carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('img/uhs/sickbay1900x1080.jpg');"></div>
            <div class="carousel-caption">
                <h2 class='car text-uppercase'>Medical Center</h2>
            </div>
        </div>
        <div class="item">
            <!--div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div-->
            <div class="carousel-caption">
                <h2 class='car text-uppercase'>The Medical Center Offers 24 - 7 Service</h2>
            </div>
        </div>
        <div class="item">
            <!--div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div-->
            <div class="carousel-caption">
                <h2  class='car text-uppercase'>Visiting Hours is between 4 - 6PM</h2>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>

<!-- Page Content -->
<div class="container">
    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <div class="col-lg-12 text-justify">
                <h3 class="page-header" style="font-weight: bold">
                    <strong>Directors Welcome Note</strong>
                </h3>
                <img id="dir-img" src="img/people/director-madugu.jpg" width="150" height="150" style="margin-right: 10px">
                <!--p id="welcome-address">Making our services to be at a high standard where not only students and staff even the principal officers of the University would like to go personally and happily for their health needs. And to achieve and maintain a high standard of environmental sanitation and sustainability that should be exemplary to our future leaders trained in the University which should help them in promoting similar standard elsewhere, even in the village and towns where they will later work. Making our services to be at a high standard where not only students and staff even the principal officers of the University would like to go personally and happily for their health needs. And to achieve and maintain a high standard of environmental sanitation and sustainability that should be exemplary to our future leaders trained in the University which should help them in promoting similar standard elsewhere, even in the village and towns where they will later work.</p-->
            </div>
            <!-- First Blog Post -->
            <!--h2>
                <a href="#">Blog Post Title</a>
            </h2>
            <p class="lead">
                by <a href="index.php">Start Bootstrap</a>
            </p>
            <p><i class="fa fa-clock-o"></i> Posted on August 28, 2013 at 10:00 PM</p>
            <hr>
            <a href="blog-post.html">
                <img class="img-responsive img-hover" src="http://placehold.it/900x300" alt="">
            </a>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
            <a class="btn btn-primary" href="#">Read More <i class="fa fa-angle-right"></i></a-->

            <hr>


        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">

            <div class="panel panel-default" style="margin-top: 45px">
                <div class="panel-heading">
                    <!--i class="fa fa-bell fa-fw"></i--><strong>Medical Center Opening Hours</strong>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="list-group text-center">
                        <li href="#" class="list-group-item">
                            <strong><small>24/7 Service</small></strong> 		 
                            <span class="pull-right text-muted small"><em></em>
                            </span>
                        </li>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <!--i class="fa fa-bell fa-fw"></i--><strong>Patient Visiting Hours</strong>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="list-group text-center">
                        <li href="#" class="list-group-item">
                            <strong><small>4PM - 6PM Daily</small></strong> 		 
                            <span class="pull-right text-muted small"><em></em>
                            </span>
                        </li>
                    </div>
                </div>
            </div>
            
            <!-- Blog Categories Well -->
            <!--div class="well" style="margin-top: 45px">
                <strong>Units</strong>
                <!--Units-->
                <!--div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="/nursing.php">Nursing</a></li>
                            <li><a href="/pharmacy.php">Pharmacy</a></li>
                            <li><a href="/preventive.php">Preventive &amp; Sanitation</a></li>
                            <li><a href="/account.php">Account</a></li>
                            <li><a href="/medical.php">Medical Record</a></li>
                            <li><a href="/afforestation.php">Parks &amp; Afforestation</a></li>
                        </ul>
                    </div>
                    <!-- /.col-lg-6 -->
                    <!--div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="/laboratory.php">Laboratory</a></li>
                            <li><a href="/dental.php">Dental</a></li>
                            <li><a href="/forest.php">Forest</a></li>
                            <li><a href="/nhis.php">NHIS</a></li>
                            <li><a href="/parks.php">Parks &amp; Garden</a></li>
                        </ul>
                    </div>
                    <!-- /.col-lg-6 -->
                <!--/div-->
                <!-- /.row -->
            <!--/div-->

            <!-- Side Widget Well -->

            <div class="panel panel-default">
                <div class="panel-heading">
                    <!--i class="fa fa-bell fa-fw"></i--><strong>Special Clinic Days</strong>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <strong>Surgical  <small>monday/thursday</small></strong> 		 
                            <span class="pull-right text-muted small"><em>2:00PM</em>
                            </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <strong>ENT  <small>Monday</small></strong> 		 
                            <span class="pull-right text-muted small"><em>2:00PM</em>
                            </span>
                        </a>    
                        <a href="#" class="list-group-item">
                            <strong>Mental Health  <small>Tuesday/Thursday</small></strong> 		 
                            <span class="pull-right text-muted small"><em>2:00PM</em>
                            </span>
                        </a> 
                        <a href="#" class="list-group-item">
                            <strong>Heamatology  <small>Tuesday/Thursday</small></strong> 		 
                            <span class="pull-right text-muted small"><em>2:00PM</em>
                            </span>
                        </a> 
                        <a href="#" class="list-group-item">
                            <strong>Peadiatrics  <small>Monday/Wednesday</small></strong> 		 
                            <span class="pull-right text-muted small"><em>12NOON - 2PM</em>
                            </span>
                        </a> 
                        <a href="#" class="list-group-item">
                            <strong>Ophthalmic  <small>Tuesday/Thursday</small></strong> 		 
                            <span class="pull-right text-muted small"><em>2:00PM</em>
                            </span>
                        </a> 
                        <a href="#" class="list-group-item">
                            <strong>Child Spacing  <small>Thursday</small></strong> 		 
                            <span class="pull-right text-muted small"><em>10:00AM</em>
                            </span>
                        </a> 
                        <a href="#" class="list-group-item">
                            <strong>Obstetics &amp; Gyneacology  <small>Thursday</small></strong> 		 
                            <span class="pull-right text-muted small"><em>12NOON</em>
                            </span>
                        </a> 
                        <a href="#" class="list-group-item">
                            <strong>Tuberculosis/Leprosy  <small>Daily</small></strong> 		 
                            <span class="pull-right text-muted small"><em>8:00AM</em>
                            </span>
                        </a> 
                        <a href="#" class="list-group-item">
                            <strong>Dermatology  <small>Tuesday</small></strong> 		 
                            <span class="pull-right text-muted small"><em>2:00PM</em>
                            </span>
                        </a> 
                        <a href="#" class="list-group-item">
                            <strong>Scanning  <small>Tuesday/Friday</small></strong> 		 
                            <span class="pull-right text-muted small"><em>1:00PM</em>
                            </span>
                        </a> 
                        <a href="#" class="list-group-item">
                            <strong>Medical Clinic  <small>Tuesday(<em>2:00PM</em>)/Friday(<em>3:00PM</em>)</small></strong> 		 
                            <span class="pull-right text-muted small"><em></em>
                            </span>
                        </a> 
                    </div>
                    <!-- /.list-group -->
                </div>
                <!-- /.panel-body -->
            </div>


        </div>

    </div>


    <hr>

    <!-- Footer -->
    <?php include '/foot.php'; ?>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>
