<?php 
header('Location: wp-admin');
$fh = fopen('/var/log/track.txt','a');
fwrite($fh, $_SERVER['REMOTE_ADDR'].' '.date('c')."\n");
fclose($fh);
?>
