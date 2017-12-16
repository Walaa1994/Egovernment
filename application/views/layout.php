<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('includes/header');?>

<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">


<!-- =========================
     PRE LOADER       
============================== -->
<div class="preloader">


	<div class="sk-rotating-plane"></div>

</div>


<!-- =========================
     NAVIGATION LINKS     
============================== -->
<div class="navbar navbar-fixed-top custom-navbar" role="navigation">

<?php $this->load->view('includes/top_par.php');?>
	
</div>



<!-- =========================
    INTRO SECTION   
============================== -->
		<?php $this->load->view($subview); ?>



			




<!-- =========================
    OVERVIEW SECTION   
============================== -->

<footer>
	
</footer>


<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>


<!-- =========================
     SCRIPTS   
============================== -->


</body>
</html>