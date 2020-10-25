<?php
//****************************************************
//Webcam Xoops Module v.1 by Bassman
//Website: http://www.bassmanthemes.com
//
//
//
//
//****************************************************
require dirname(__DIR__, 2) . '/mainfile.php';
require dirname(__DIR__, 2) . '/header.php';
OpenTable();
echo '<center><iframe name="webcamembed" src="webcam.php" scrolling="auto" width="350" height="250" marginwidth="0" marginheight="0" frameborder="no"></iframe>';
CloseTable();
require XOOPS_ROOT_PATH . '/footer.php';





