<?php

$name = $_POST['name'];
$to = "Remynijsten@hotmail.com";
$message = $_POST['message'];
$subject = "Test Subject";

$headers = "From form submission";

// send email
mail($to, 'php test', 'message test');

echo "email send";

?>
