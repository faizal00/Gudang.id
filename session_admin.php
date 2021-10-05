<?php
	if($_SESSION['Role']!="User"){
		header("location:dashboard_user.php?pesan=bukan_admin");
	}
    ?>