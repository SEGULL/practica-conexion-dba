<?php 

//$con = new mysqli("SERVIDOR","USER DBA","PASSWORD DBA","NAME DBA");
$seg = new mysqli("localhost","root","","dba");

if ($seg) {
	echo "Bien conectado";
}else{
	echo "Mal conectado";
}


?>