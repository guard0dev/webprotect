<?php
//weiterleitung zu admin Verzeichniss
echo 'Ihre IP-Adresse lautet ' . $_SERVER['REMOTE_ADDR'];
require("/core/db.php");
exit;

/*$target = "/admin/";
header("Location:$target");
exit;*/


?>