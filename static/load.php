<?php 
if ($_GET['index'] > -1 && $_GET['index']<101) {
file_get_contents("http://192.168.2.60/load.cmd?" . "index=".$_GET['index']);
file_get_contents("http://192.168.2.61/load.cmd?" . "index=".$_GET['index']);
file_get_contents("http://192.168.2.62/load.cmd?" . "index=".$_GET['index']);
file_get_contents("http://192.168.2.63/load.cmd?" . "index=".$_GET['index']);
file_get_contents("http://192.168.2.64/load.cmd?" . "index=".$_GET['index']);
file_get_contents("http://192.168.2.65/load.cmd?" . "index=".$_GET['index']);
file_get_contents("http://192.168.2.66/load.cmd?" . "index=".$_GET['index']);
}
