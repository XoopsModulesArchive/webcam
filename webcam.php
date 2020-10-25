<?php
# SmoothWebcam PHP v1.0
# © 2004 Xeofox. All Rights Reserved
# http://www.xeofox.co.uk

$img = 'http://mzsrv.zoo.org.au/webcams/butterflies.jpg'; /* Webcam image URL (e.g. http://www.domain.com/cam.jpg) */
$title = 'Test Webcam'; /* Title that is used if page accidentally opened */
$r = '20'; /* Image refresh rate (in seconds) */

header('refresh: ' . $r . '; url=webcam.php');
echo "<html>\n<head>\n<title>$title</title>\n<meta http-equiv='refresh' content='$r; url=webcam.php'>\n<style>body {margin: 0px}</style>\n</head>\n<body>\n<img src='$img' border='0' alt=''>\n</body>\n</html>";







