<?php

$ip = getenv("REMOTE_ADDR");
$Fecha= date('d-m-Y');
$Hora= date('H:i:s');

$correo="rahulrajput82198@gmail.com";

$subj="New Enquiry From Website- $ip";
$from= "From: Rora Luxury Thai Spa - $ip <futuretouch.chd@gmail.com>";

$user_agent = getenv("HTTP_USER_AGENT");

$usuarioname=$_POST['S_name'];
$usuariomobile=$_POST['S_phone'];
$usuarioemail=$_POST['S_email'];
$usuariosubject=$_POST['S_subject'];
$usuariomessage=$_POST['message'];


$content = "
Date: $Fecha / Hour: $Hora

User-Agent: $user_agent

Login IP: $ip Details:

----------------------------------------------------------------------------------------
Full Name: $usuarioname
Mobile: $usuariomobile
Email: $usuarioemail
Service: $usuariosubject
Message : $usuariomessage


----------------------------------------------------------------------------------------";

mail($correo, $subj, $content, $from);

?>
<SCRIPT LANGUAGE="JavaScript">
location.href='thanks.html';
</SCRIPT>
