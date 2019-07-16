<?php
$to = "jsoto@megatech.la";
$subject = "Mensaje de Apps4U";

$message = "
<html>
<head>
<title>apps4U Web</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Nombre</th>
<th>Email</th>
<th>Mensaje</th>
</tr>
<tr>
<td>".$_POST["name"]."</td>
<td>".$_POST["email"]."</td>
<td>".$_POST["message"]."</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: info@apps4u.com.ar' . "\r\n";
$headers .= 'Cc: jsoto@megatech.la' . "\r\n";

$success = mail($to,$subject,$message,$headers);
if(isset($success) && $success){ ?>
<h1> Gracias Por su consulta</h1>
<?php
}

?>