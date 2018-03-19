<?php
session_start();
session_destroy();
header('Location: /web_site/home_page.php');
?>