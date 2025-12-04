<?php
session_start();

if (!isset($_GET['index'])) {
    header("Location: index.php");
    exit;
}

$idx = intval($_GET['index']);

if (isset($_SESSION['absensi_queue'][$idx])) {
    unset($_SESSION['absensi_queue'][$idx]);

    // reindex array agar tidak bolong-bolong
    $_SESSION['absensi_queue'] = array_values($_SESSION['absensi_queue']);
}

header("Location: index.php");
exit;
