<?php
include '../../../autentificare.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" type="text/css" href="../../../style_prof.css">
<title>Mircea cel Bătrân şi domnitorii Cetăţii de Scaun</title>
</head>

<body>
<header>
<h1>Mircea cel Bătrân şi <br>domnitorii Cetaţii de Scaun</h1>
<span><br><br><a href="../../../logout.php" style="margin-left:20px">Deconecteaza-te</a></span>
</header>

<script>
var m=0;
function buton()
{
m++;
if(m%2)
 {document.getElementById('indicatit').innerHTML = 'Informațiile importante despre Iuga';
   document.getElementById('indicatit').style.visibility = "visible";
   document.getElementById('indicatii').innerHTML = 'Portretul lui Iuga';
   document.getElementById('indicatii').style.visibility = "visible";
   document.getElementById('indicatia').innerHTML = 'Butonul de navigare spre pagina principală';
   document.getElementById('indicatia').style.visibility = "visible";
   document.getElementById('indicatib').innerHTML = 'Butonul pentru a începe testul';
   document.getElementById('indicatib').style.visibility = "visible";
   }
 else 
  {document.getElementById('indicatit').innerHTML = ' ';
   document.getElementById('indicatit').style.visibility = "hidden";
   document.getElementById('indicatii').innerHTML = ' ';
   document.getElementById('indicatii').style.visibility = "hidden";
   document.getElementById('indicatia').innerHTML = ' ';
   document.getElementById('indicatia').style.visibility = "hidden";
   document.getElementById('indicatib').innerHTML = ' ';
   document.getElementById('indicatib').style.visibility = "hidden";
   }
}
</script>

<section>

<div id="indicatia"></div>
<div class="acasa"><a href="../index.php" title="Acasa"><img src="../imagini/ac_iuga.png" /></a></div>
<div class="help"><a title="Ajutor" onclick='buton()'><img src="../../imagini/help.png" /></a></div>

<?php
$d=$_SESSION['domeniu'];
if($d=='profesor')
{
?>
<a href="../../../acasa_prof.php" title="Panou de administrare"><img src="../../imagini/admin.png" width="40px" style="float:left;margin-left:10px;margin-top:15px;"/></a>
<?php
}
?>
<br><br><br>
<div class="drept">
<div id="indicatit"></div>
<p id="text">
Iuga (Ologul), domn al Moldovei are o filiaţie incertă. Unii istorici îl socotesc fiu al lui Roman I, alţii cred că e fiul lui Petru I, iar alţii că ar fi al presupusului domn al Moldovei, Jurg Koriatovici. În afară de două acte emise cert din cancelaria lui Iuga şi de referirile sumare la el conţinute în Letopiseţul de la Putna şi de cel de la Bistriţa, care abia conduc la concluzia că domnia lui n-a durat mai mult de câteva luni, restul sunt simple presupuneri. Nu rezistă astfel (având în vedere scurtul interval de domnie) ştirea furnizată de Grigore Ureche privind faptul că Iuga ar fi organizat Biserica din Moldova. Iuga îşi sfârşeşte domnia atunci când, în februarie 1400, se suia pe tronul Moldovei (cu ajutorul lui Mircea cel Bătrân), Alexandru cel Bun. Letopiseţul de la Bistriţa notează că pe Iuga „l-a luat Mircea Voievod”. Ce s-a întâmplat apoi cu Iuga nu se mai ştie.<br>&nbsp;&nbsp;&nbsp;&nbsp;Nu i se cunosc nici împrejurările sfârşitului, nici mormântul.
</p>
</div>

<div id="indicatii"></div>
<div class="pict5"><img src="../imagini/iuga.jpg" /><br><b>1399 - 1400</b></div>
<div id="indicatib"></div>
<div class="button"><a href="../teste/test8.php"><b>ÎNCEPE TESTUL</b></a></div>

</section>

</body>
</html>