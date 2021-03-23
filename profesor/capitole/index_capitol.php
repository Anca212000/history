<?php
include '../../autentificare.php';
?>
<!DOCTYPE html>
<html>

<?php
include '../../../conectare.php';
$con=conectare1();

if(empty($_SESSION['cap']))
{
$capt=@$_POST['submit'];
$idcap=@$_POST['idcap'];
$_SESSION['cap']=$idcap;
$_SESSION['numecap']=$capt;
}
elseif(isset($_POST['submit']))
{$_SESSION['numecap']=@$_POST['submit'];
$capt=@$_POST['submit'];
}	
else
	$capt=$_SESSION['numecap'];
?>

<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="../../style_prof.css">
<title><?php echo $capt; ?></title>
</head>
<style>
body .ac {
	border:2px solid rgba(158, 20, 20, 1);
	-webkit-border-radius: 100px;
	-moz-border-radius: 100px;
	border-radius: 100px;
	float:right;
	margin:20px 20px 0 5px;
	padding:10px;
	color:rgba(158, 20, 20, 1);
	text-decoration:none;
	background-color:rgba(158, 20, 20, 0.1);
}
body span :hover {
	color:rgba(158, 20, 20, 0.8);
	border:2px solid rgba(158, 20, 20, 0.5);
	background-color:rgba(158, 20, 20, 0.05);
}
</style>

<body>

<header>
<h1><?php echo $capt; ?></h1>
<span><br><br><a href="../../logout.php" style="margin-left:20px">Deconecteaza-te</a></span>
</header>

<?php
if($_SESSION['domeniu']=='elev')
{
?>
<span><a class="ac" href="../index_elev.php">Capitole</a></span>
<?php
}
?>

<section>
<?php
if($_SESSION['domeniu']=='profesor')
{
?>
<a href="../../acasa_prof.php" title="Panou de administrare"><img src="../imagini/admin.png" width="40px" style="float:left;margin-left:10px;margin-top:15px;"/></a>
<?php
}
?>
<br><br><br><br>
<aside>
	<?php
	$cap=mysql_query("SELECT `id-cap` FROM `capitole` WHERE `nume-cap`='$capt'");
	$capp=mysql_fetch_row($cap);
	$lectie=mysql_query("SELECT `nume-lect` FROM `lectii` WHERE `id-cap`='$capp[0]'");
	while($r=mysql_fetch_row($lectie))
	{
	?>
	<div class="item"><a href='<?php echo $r[0]."/".$r[0].".php"?>'><?php echo $r[0];?></a></div>
	<?php
	}
	?>
	<div class="item"><a href='bibliografie.php'>Bibliografia</a></div>
	<div class="item"><a href='../teste.php'>Evaluare finala</a></div>
</aside>

<?php
$i=mysql_query("SELECT `nume-img` FROM `imgcapitol` WHERE `idc`='$capp[0]'");
$ii=mysql_fetch_row($i);
?>
<div class="pict">
	<img src='<?php echo "imagini/$ii[0]";?>' />
</div>

</section>

<?php
@mysql_close($con);
?>

</body>
</html>