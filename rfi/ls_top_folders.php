<?php 
echo "<h3>pwd</h3>";
$output = shell_exec('pwd');
echo "<pre>$output</pre>";

echo "<h3>.</h3>";
$output = shell_exec('ls -lart .');
echo "<pre>$output</pre>";

echo "<h3>..</h3>";
$output = shell_exec('ls -lart ..');
echo "<pre>$output</pre>";

echo "<h3>/home</h3>";
$output = shell_exec('ls -lart /home');
echo "<pre>$output</pre>";

echo "<h3>/usr</h3>";
$output = shell_exec('ls -lart /usr');
echo "<pre>$output</pre>";

echo "<h3>/var</h3>";
$output = shell_exec('ls -lart /var');
echo "<pre>$output</pre>";
?>