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
	$textintr=@$_POST['continut'];
	$nr=@$_POST['numar_rasp'];
	$nrcapt=@$_POST['numar_capt'];
	
	if(@$_POST['cont_rasp'])
    {
		$k=1;$kk=1;
		for($r=1;$r<=$nr;$r++)
		{
			$textrasp[$r]=@$_POST['submit_rasp'.$r];
			$val[$r]=@$_POST['radio'.$r];
			{
				if($textrasp[$r]==NULL)
					$k=0;
				if( $val[$r]==NULL)
					$kk=0;
			}
		}
		if(!$k or !$kk)
		{
			$nc=mysql_query("SELECT `nume-cap` FROM `capitole` WHERE `id-cap`='$nrcapt'");
			$nc=mysql_fetch_row($nc);
			echo "<b>Capitolul \"".$nc[0]."\":</b><br>";
			echo "<br>Intrebare: ".$textintr."<br>";
			echo "<form action=\"ad_teste_rasp.php\" method=\"post\">";
			echo "<input type=\"hidden\" name=\"continut\" value=\"$textintr\">";
			echo "<input type=\"hidden\" name=\"numar_rasp\" value=\"$nr\">";
			echo "<input type=\"hidden\" name=\"numar_capt\" value=\"$nrcapt\">";
            for($r=1;$r<=$nr;$r++)
            {
				echo "<input class=\"text\" type=\"text\" name=\"submit_rasp$r\" placeholder=\"Raspuns $r\">";
				echo "<input type=\"radio\" name=\"radio$r\" value=\"corect\"> corect&nbsp&nbsp";
				echo "<input type=\"radio\" name=\"radio$r\" value=\"incorect\"> incorect<br>";
			}
			if(!$k)
				echo "<br><i style=\"margin:4px;color:red\">Nu ati terminat de completat!</i><br>";
			if(!$kk)
				echo "<br><i style=\"margin:4px;color:red\">Nu ati terminat de selectat!</i><br>";
			echo "<br><span><input class=\"buton\" type=\"submit\" name=\"cont_rasp\" value=\"Continua\"></span>";
			echo "</form>";
		}
		else
		{
			$nr2=0;
			for($r=1;$r<=$nr;$r++)
				if($val[$r]=='corect')
					$nr2++;
			if($nr2==0)
				echo "<i style=\"margin:4px;color:red\">Trebuie sa aveti cel putin un raspuns corect!</i>";
			else
			{
				if($nr2>1)
					$insert="INSERT INTO `intrebari`(`id-intreb`,`id-cap`,`intrebare`,`tip`) VALUES ('','$nrcapt','$textintr','2')";
				elseif($nr2==1)
					$insert="INSERT INTO `intrebari`(`id-intreb`,`id-cap`,`intrebare`,`tip`) VALUES ('','$nrcapt','$textintr','1')";
				mysql_query($insert);
				$idint=mysql_query("SELECT `id-intreb` FROM `intrebari` WHERE `intrebare`='$textintr'");
				$idintt=mysql_fetch_row($idint);
				for($r=1;$r<=$nr;$r++)
				{
					if($val[$r]=='corect')
						$insert="INSERT INTO `raspunsuri`(`id-rasp`,`id-intreb`,`raspuns`,`corect`) VALUES ('','$idintt[0]','$textrasp[$r]','1')";
					else
						$insert="INSERT INTO `raspunsuri`(`id-rasp`,`id-intreb`,`raspuns`,`corect`) VALUES ('','$idintt[0]','$textrasp[$r]','0')";
					mysql_query($insert);
				}
				echo "<i style=\"margin:4px;color:red\">Intrebarea cu raspunsurile sale a fost adaugata.</i><br>";
			}
		}
		echo "<br><br><a href=\"acasa_prof.php\"><span><< Inapoi</span></a>";
	}
	    
    @mysql_close($con);
    ?>
</div>
    
</body>
</html>