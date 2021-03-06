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
 {document.getElementById('indicatit').innerHTML = 'Informațiile importante despre Ștefan I';
   document.getElementById('indicatit').style.visibility = "visible";
   document.getElementById('indicatii').innerHTML = 'Portretul lui Ștefan I';
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
<div class="acasa"><a href="../index.php" title="Acasa"><img src="../imagini/ac_stefan.png" /></a></div>
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
Ştefan I (Muşat) este domnul Moldovei, ca frate sau nepot al lui Petru I şi Roman I. Se suie în scaun după moartea lui Roman I, cu ajutorul regelui Poloniei, Vladislav al II-lea Jagello, al cărui <b title="vasal = supus"><i>vasal</i></b> credincios a fost. Acest fapt stârneşte supărarea regelui Ungariei, Sigismund de Luxemburg, care avea şi el pretenţii de <b title="suzeranitate = dreptul suzeranului asupra seniorilor vasali"><i>suzeranitate</i></b> asupra Moldovei. El organizează o puternică expediţie asupra lui Ştefan I. Armatele regelui trec munţii şi asediază cetatea Neamţului care însă rezistă eroic. Nevoită să se retragă, oastea ungară este înfrântă la Hindău (satul Ghindăoani de astăzi), din judeţul Neamţ, în februarie 1395. După aproape patru ani, Ştefan ajută pe poloni împotriva tătarilor, dar în bătălia de la Worskla (12 august 1399) se pare că Ştefan şi-a pierdut viaţa. Este înmormântat la Rădăuţi. Pe piatra de mormânt este amintită victoria de la Ghindăoani.<br>&nbsp;&nbsp;&nbsp;&nbsp;Relațiile lui Ștefan I cu Mircea cel Bătrân au fost încordate. Pentru că Mircea era aliat cu Sigismund de Luxemburg, dușmanul înfrânt la Ghindăoani, Ștefan I a contribuit, după victoria de la Rovine, în 1395, să-l înlăture pe Mircea de pe tron, în favoarea lui Vlad Uzurpatorul. Mircea cel Bătrân va relua tronul după cruciada de la Nicopole (1396).
</p>
</div>

<div id="indicatii"></div>
<div class="pict4"><img src="../imagini/stefan.jpg" /></b></div>
<div id="indicatib"></div>
<div class="button"><a href="../teste/test7.php"><b>ÎNCEPE TESTUL</b></a></div>

</section>

</body>
</html>