<?php
session_start();
unset($_SESSION['absensi_queue']);
header("Location: index.php");
exit;
