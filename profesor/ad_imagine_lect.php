<?php
include 'autentificare.php';
?>
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="style_prof.css">
<title>Panou de administrare</title>
</head>
      
<body>

<header>
<h1>Bine ati venit domnule profesor!</h1>
<br><span><a href="logout.php">Deconecteaza-te</a></span>
</header>

<div class="rotund">
    <?php
    include '../conectare.php';
    $con=conectare1();

	if(@$_POST['ad_img'])
	{
		$val=@$_POST['nr_lect'];
		$nume=$_FILES["file_img1"]["name"];
		if($nume)
		{
			$extensie = pathinfo($nume, PATHINFO_EXTENSION);
			if($extensie === "jpg" or $extensie === "png" or $extensie === "jpeg" or $extensie === "gif" or $extensie === 'bmp')
			{
				$idcap=mysql_query("SELECT `id-cap` FROM `lectii` WHERE `id-lect`='$val'");
				$iidcap=mysql_fetch_row($idcap);
				$numecapt=mysql_query("SELECT `nume-cap` FROM `capitole` WHERE `id-cap`='$iidcap[0]'");
				$nnumecapt=mysql_fetch_row($numecapt);
				$numelect=mysql_query("SELECT `nume-lect` FROM `lectii` WHERE `id-lect`='$val'");
				$nnumelect=mysql_fetch_row($numelect);
				$loc="capitole/$nnumecapt[0]/imagini/";
				move_uploaded_file($_FILES["file_img1"]["tmp_name"],$loc.$nume);
				echo "<i style=\"margin:4px;color:red\">Imaginea a fost adaugata!</i>";
				$i="INSERT INTO `imagini`(`idl`,`idim`,`nume-img`) VALUES('$val','','$nume')";
				mysql_query($i);
			}
			else
				echo "<i style=\"margin:4px;color:red\">Aceasta nu este o imagine!</i>";
		}
		else
		{
			$l=mysql_query("SELECT `nume-lect` FROM `lectii` WHERE `id-lect`='$val'");
			$ic=mysql_query("SELECT `id-cap` FROM `lectii` WHERE `id-lect`='$val'");
			$l=mysql_fetch_row($l);
			$ic=mysql_fetch_row($ic);
			$nc=mysql_query("SELECT `nume-cap` FROM `capitole` WHERE `id-cap`='$ic[0]'");
			$nc=mysql_fetch_row($nc);
			echo "Lectia \"".$l[0]."\" din capitolul \"".$nc[0]."\":<br>";
			echo "Lectia \"".$l."\" din capitolul \"".$c."\":<br>";
			echo "<form action=\"ad_imagine_lect.php\" method=\"post\" enctype=\"multipart/form-data\">";
			echo "<input type=\"hidden\" name=\"nr_lect\" value=\"$val\">";
			echo "<br><i style=\"margin:4px;color:red\">Nu ati adaugat imaginea!</i><br>";
			echo "<input class=\"text\" type=\"file\" name=\"file_img1\">";
			echo "<span><input class=\"buton\" type=\"submit\" name=\"ad_img\" value=\"Adauga\"></span>";
			echo "</form>";
		}
		echo "<br><br><a href=\"acasa_prof.php\"><span><< Inapoi</span></a>";
	}
	
	@mysql_close($con);
    ?>
</div>

</body>
</html>