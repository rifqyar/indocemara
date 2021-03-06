<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

	<title><?php echo $__env->yieldContent('title'); ?></title>

	<!-- Script -->
  <script type="text/javascript" src="<?php echo e(asset('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('js/vendor/jquery-1.11.1.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('js/vendor/bootstrap.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('js/vendor/wow-animate.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('js/main.js')); ?>"></script>

	<!-- CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('fontawesome/css/all.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/wow-animate.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/templatemo-style.css')); ?>">

	<?php echo $__env->yieldContent('css'); ?>
</head>
<body>

	<div class="header" id="top">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="<?php echo e(route('user.index')); ?>" class="navbar-brand scroll-top"><img src="images/logo.png" alt="Layer Template"><span class="orange">Indo</span>Cemara</a>
        </div>
        <!--/.navbar-header-->
        <div id="main-nav" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo e(route('user.index')); ?>">Home</a></li>
            <li><a href="#" class="scroll-link" data-id="second-section">Our Services</a></li>
            <li><a href="#">How it Works?</a>
              <ul class="sub-menu">
                <li><a href="#">How it Works?</a></li>
                <li><a href="#">Our Science</a></li>
                <li><a href="#">Data Protection</a></li>
                <li><a href="#">Research Participation</a></li>
              </ul>
            </li>
            <li><a href="columns.html">Pricing</a></li>
            <li><a href="#"><span>Sign Up</span></a></li>
          </ul>
        </div>
        <!--/.navbar-collapse-->
  		</div>
  		<!--/.container-->
    </nav>
      <!--/.navbar-->
  </div>
  <!--/.header-->

  

	<div class="parallax">
		<?php echo $__env->yieldContent('content'); ?>
		
		<footer>
			<div class="container">
			  <div class="row">
			    <div class="col-md-12">
			      <div class="social-icons">
			        <ul>
			          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
			          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
			          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			          <li><a href="#"><i class="fa fa-rss"></i></a></li>
			          <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
			          <li><a href="#"><i class="fa fa-google"></i></a></li>
			        </ul>
			      </div>
			    </div>
			  </div>
			  <div class="row">
			    <div class="copyright-text">
			      <p>Copyright &copy; 2084 Indo Cemara yang baik dan tidak sombong</p>
			    </div>
			  </div>
			  <div class="col-md-12">
			    <div class="third-arrow">
			      <a href="#" class="scroll-link btn btn-dark" data-id="top"><i class="fa fa-angle-up"></i></a>
			    </div>
			  </div>
			</div>
		</footer> 
	</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\indocemara\resources\views/user/layout/app.blade.php ENDPATH**/ ?>