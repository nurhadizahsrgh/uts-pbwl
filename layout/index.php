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
		<a href="index.php">Home</a>
		<a href="index.php?page=login_form">Login</a>
		</center>
	</div>


	    <section>
            <?php
                if (isset($_GET['page'])) {
                    include $_GET['page'] . ".php";
                } else {
                    include "main_index.php";
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
