<?php
session_start();
unset($_SESSION['id']);
session_destroy();
echo"<script>alert('sign out ?');</script>";
					echo"<script>location.href='index.php'</script>";
?>
