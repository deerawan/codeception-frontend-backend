<?php
$message = "No string entered";

if (!empty($_POST['string'])) {
	$message = "String converted: " . strtoupper($_POST['string']);
}

echo $message;

?>