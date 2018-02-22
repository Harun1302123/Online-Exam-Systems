<?php 
session_start();
if (!isset($_SESSION['login_user'])) {
	header('location:index.php');
}

 ?>

<div class="container">
	<?php include("top.php"); ?>
	<div class="subject">
		<h2><marquee behavior="alt" direction="">Welcome To Online Exam System</marquee></h2>
		<a href="subject.php"><button>Start Exam</button></a>
	</div>
	<?php include("footer.php") ?>
</div>