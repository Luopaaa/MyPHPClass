<?php
	session_set_cookie_params(600);
	session_start();
	session_destroy();
	session_write_close();
?>

		<script type='text/javascript'>
			window.location.href='login.php'
		</script>