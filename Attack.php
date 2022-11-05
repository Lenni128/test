<?php
$target = htmlspecialchars($_POST['name']);
$output = shell_exec('ping ' . $target);
echo "<pre>$output</pre>"; 
?>
