<?php
$name = $_POST['name'];
$name = str_replace("'", "''", $name);
$email = $_POST['email'];
$email = str_replace("'", "''", $email);
$subject = $_POST['subject'];
$subject = str_replace("'", "''", $subject);
$message = $_POST['message'];
$message = str_replace("'", "''", $message);

require('_conn.php');

$sql = "INSERT INTO `azuma_a_letter1` (`no`, `name`, `email`, `subject`, `message`, `reg_date`) VALUES (NULL, '$name', '$email', '$subject', '$message', current_timestamp());";
mysqli_query($conn, $sql);
?>

<!-- Going Back -->
<script>
window.location = '<script>window.location.replace(document.referrer);</script>';
</script>
