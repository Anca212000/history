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
	if(@$_POST['continua2_img'])
	{
		$val=@$_POST['radio'];
		if($val)
		{
			$l=mysql_query("SELECT `nume-lect` FROM `lectii` WHERE `id-lect`='$val'");
			$ic=mysql_query("SELECT `id-cap` FROM `lectii` WHERE `id-lect`='$val'");
			$l=mysql_fetch_row($l);
			$ic=mysql_fetch_row($ic);
			$nc=mysql_query("SELECT `nume-cap` FROM `capitole` WHERE `id-cap`='$ic[0]'");
			$nc=mysql_fetch_row($nc);
			echo "Lectia \"".$l[0]."\" din capitolul \"".$nc[0]."\":<br>";
			echo "<form action=\"ad_imagine_lect.php\" method=\"post\" enctype=\"multipart/form-data\">";
			echo "<input type=\"hidden\" name=\"nr_lect\" value=\"$val\">";
			echo "<input class=\"text\" type=\"file\" name=\"file_img1\">";
			echo "<span><input class=\"buton\" type=\"submit\" name=\"ad_img\" value=\"Adauga\"></span>";
			echo "</form>";
		}
		else
		{
			$capitol=mysql_query("SELECT * FROM capitole");
			$lectie=mysql_query("SELECT * FROM lectii");
			if(mysql_num_rows($capitol)==0)
                echo "<i style=\"margin:4px;color:red\">Nu aveti nici un capitol si nici o lectie pentru a putea adauga o imagine.</i><br>";
            elseif(mysql_num_rows($lectie))
			{
				while($rand=mysql_fetch_row($capitol))
                {
					echo "<li> <b>".$rand[1]."</b></li><br>";
					$lectie=mysql_query("SELECT `id-lect`,`nume-lect` FROM `lectii` WHERE `id-cap`='$rand[0]'");
					echo "<form action=\"ad_imagine.php\" method=\"post\">";
					if(mysql_num_rows($lectie))
						while($rand1=mysql_fetch_row($lectie))
						{
							echo "<input type=\"radio\" name=\"radio\" value=\"$rand1[0]\">&nbsp ".$rand1[1]."<br>";
							echo "<input type=\"hidden\" name=\"capitol\" value=\"$rand[1]\">";
							echo "<input type=\"hidden\" name=\"lectie\" value=\"$rand1[1]\">";
						}
					else
						echo "<i style=\"margin:4px;color:red\">Nu aveti lectii la acest capitol.</i><br>";
				}
				echo "<br><i style=\"margin:4px;color:red\">Nu ati selectat nimic!</i><br>";
				echo "<br><span><input class=\"buton\" type=\"submit\" name=\"continua2_img\" value=\"Continua\"></span>";
				echo "</form>";
			}
			elseif(mysql_num_rows($lectie)==0)
			{
				echo "<i style=\"margin:4px;color:red\">Nu aveti lectii la aceste capitole pentru a putea adauga imagini:</i><br><br>";
				while($rand=mysql_fetch_row($capitol))
					echo "<li>".$rand[1]."</li><br>";
			}
		}
		echo "<br><br><a href=\"acasa_prof.php\"><span><< Inapoi</span></a>";
	}
    elseif(@$_POST['modif_img'])
    {
        $val=@$_POST['val_capt'];
		$nume=$_FILES["file_img"]["name"];
		if($nume)
		{
			$extensie = pathinfo($nume, PATHINFO_EXTENSION);
			if($extensie === "jpg" or $extensie === "png" or $extensie === "jpeg" or $extensie === "gif" or $extensie === 'bmp' )
			{
				$numecapt=mysql_query("SELECT `nume-cap` FROM `capitole` WHERE `id-cap`='$val'");
				$nnumecapt=mysql_fetch_row($numecapt);
				$loc="capitole/$nnumecapt[0]/imagini/";
				move_uploaded_file($_FILES["file_img"]["tmp_name"],$loc.$nume);
				echo "<i style=\"margin:4px;color:red\">Imaginea a fost adaugata!</i>";
				$i="INSERT INTO `imgcapitol` (`idc`, `idim`, `nume-img`) VALUES ('$val', '', '$nume')";
				mysql_query($i);
			}
			else
				echo "<i style=\"margin:4px;color:red\">Aceasta nu este o imagine!</i>";
		}
		else
		{
			$nc=mysql_query("SELECT `nume-cap` FROM `capitole` WHERE `id-cap`='$val'");
			$nc=mysql_fetch_row($nc);
			echo "<b>Capitolul \"".$nc[0]."\":</b><br>";
			echo "<form action=\"ad_imagine.php\" method=\"post\" enctype=\"multipart/form-data\">";
			echo "<i style=\"margin:4px;color:red\">Nu ati adaugat nici o imagine!</i><br>";
			echo "<input class=\"text\" type=\"file\" name=\"file_img\">";
            echo "<input type=\"hidden\" name=\"val_capt\" value=\"$val\">";
            echo "<span><input class=\"buton\" type=\"submit\" name=\"modif_img\" value=\"Adauga\"></span>
			</form>";
		}
		echo "<br><br><a href=\"acasa_prof.php\"><span><< Inapoi</span></a>";
	}
    @mysql_close($con);
    ?>
</div>

</body>
</html>