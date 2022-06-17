<?php 
echo "<h3>..</h3>"
$output = shell_exec('ls -lart ..');
echo "<pre>$output</pre>";
?>