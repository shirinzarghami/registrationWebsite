<?php
$sql = mysql_query("select email from usersTB where groupId = 21");
$recipients = array();
while($row = mysql_fetch_array($sql)) {
    $recipients[] = $row['email'];
}

$to = 'info@mydomain.com';
$subject = "E-mail subject";
$body = "E-mail body";
$headers = 'From: info@mydomain.com' . "\r\n" ;
$headers .= 'Reply-To: info@mydomain.com' . "\r\n";
$headers .= 'BCC: ' . implode(', ', $recipients) . "\r\n";

$res =mail($to, $subject, $body, $headers);

var_export( $res );
?>
