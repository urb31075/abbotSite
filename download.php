<?php
$filename = 'log.txt';
$filefolder = 'folder/';
$filesize = filesize($filefolder.$filename);
header('HTTP/1.1 200 OK');
header('Connection: close');
header('Content-Type: application/octet-stream');
header('Accept-Ranges: bytes');
header('Content-Disposition: attachment; filename='.$filename);
header('Content-Length: '.$filesize);
readfile($filefolder.$filename);
?> 