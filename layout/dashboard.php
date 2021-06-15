<!DOCTYPE html>
<html>
<head>
	<title>OLD BOOKS STORE</title>
	<link rel="stylesheet" href="<?php echo ASSET; ?>css/style.css">
</head>
<body>
<center>
<div>
	
	<!-- ini untuk header -->
	<div class="header">

		<img src="<?php echo ASSET; ?>images/header.jpg" alt="[IMG]">	
	
	</div>

	<!-- ini untuk menu -->
	<div class="menu">
		<center>
		<a href="index.php">Dashboard</a>
		<a href="index.php?page=category_tampil">Category</a>
		<a href="index.php?page=post_tampil">Post</a>
		<a href="index.php?page=photos_tampil">Photos</a>
		<a href="index.php?page=album_tampil">Album</a>
		<a href="login_logout.php">Logout</a>
		</center>
	</div>


	<section>
            <?php
                if (isset($_GET['page'])) {
                    include $_GET['page'] . ".php";
                } else {
                    include "main_dashboard.php";
                }
            ?>

        </section>

	<!-- ini untuk footer -->
	<div class="footer">

		copyright &copy; 2021. Programmed by Nurhadizah Saragih
	
	</div>

</div>
</center>
</body>
</html>
