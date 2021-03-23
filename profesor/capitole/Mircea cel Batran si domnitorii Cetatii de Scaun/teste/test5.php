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

<script language="javascript" type="text/javascript">
var m=0;
function buton()
{
m++;
if(m%2)
 {
   document.getElementById('indicatitt').innerHTML = 'Instructiunile jocului';
   document.getElementById('indicatitt').style.visibility = "visible";
   document.getElementById('indicatij').innerHTML = 'Jocul';
   document.getElementById('indicatij').style.visibility = "visible";
   document.getElementById('indicatibb').innerHTML = 'Butonul pentru testul următor sau precedent';
   document.getElementById('indicatibb').style.visibility = "visible";
   document.getElementById('indicatia').innerHTML = 'Butonul de navigare spre pagina principală';
   document.getElementById('indicatia').style.visibility = "visible";
   }
 else 
  {
   document.getElementById('indicatitt').innerHTML = ' ';
   document.getElementById('indicatitt').style.visibility = "hidden";
   document.getElementById('indicatij').innerHTML = ' ';
   document.getElementById('indicatij').style.visibility = "hidden";
   document.getElementById('indicatibb').innerHTML = ' ';
   document.getElementById('indicatibb').style.visibility = "hidden";
   document.getElementById('indicatia').innerHTML = ' ';
   document.getElementById('indicatia').style.visibility = "hidden";
   }
}
</script>

<section>

<div id="indicatia"></div>
<div class="acasa"><a href="../index.php" title="Acasa"><img src="../imagini/ac_petru.png" /></a></div>
<div class="help"><a onclick='buton()' title="Ajutor"><img src="../../imagini/help.png" /></a></div>

<?php
if($_SESSION['domeniu']=='profesor')
{
?>
<a href="../../../acasa_prof.php" title="Panou de administrare"><img src="../../imagini/admin.png" width="40px" style="float:left;margin-left:10px;margin-top:15px;"/></a>
<?php
}
?>
<br><br><br>
<div class="drept1">
<div id="indicatitt"></div>
<p id="text">
Completează în căsuță cu A, pentru adevărat și cu F, pentru fals.<br> Ai la dispoziţie 4 încercări.
</p>
</div>

<p id="text" style="margin-left:50%;color:maroon;font-size:20px;">Petru I Muşat</p>

<div class="play">
<div id="indicatij"></div>
<embed src="petru.swf" />
</div>

</section>

</body>
</html>