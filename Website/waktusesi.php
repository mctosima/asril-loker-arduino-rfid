<?php
	session_start();
	$timeout = 60; // setting timeout dalam menit
	$logout = "logout.php"; // redirect halaman logout
 
	$timeout = $timeout * 10; // menit ke detik
	if(isset($_SESSION['start_session'])){
		$elapsed_time = time()-$_SESSION['start_session'];
		if($elapsed_time >= $timeout){
			session_destroy();
			echo "<script type='text/javascript'>alert('Sesi telah berakhir');window.location='$logout'</script>";
		}
	}
 
	$_SESSION['start_session']=time();
 
?>