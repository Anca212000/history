<?php
function conectare1()
{$con=@mysql_connect("localhost","root","");
mysql_select_db("profesor");
return $con;

}
?>
