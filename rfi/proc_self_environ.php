<?php 
echo "<h3>cat /proc/self/environ</h3>";
$output = shell_exec('cat /proc/self/environ');
echo "<pre>$output</pre>";
?>