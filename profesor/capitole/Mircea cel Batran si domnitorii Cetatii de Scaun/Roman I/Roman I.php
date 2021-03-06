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
function changeText1()
{
 document.getElementById('text').innerHTML = 'Căsătorit cu Anastasia, prin care, poate, se înrudea cu ducii lituanieni Koriatovici (sau prin altă linie genealogică), ori poate n-au fost înrudiri, ci numai alianţe politice, Roman a avut mai mulţi fii: Ştefan, Mihail, Iuga, Alexandru şi Bogdan. Pe Alexandru şi Bogdan i-a asociat la domnie. La moartea lui Roman (1394), tronul a fost ocupat de Ştefan I, fiul mai mare al acestuia, conform principiului primogeniturii. Se poate chiar ca Ştefan I să fi fost nu fiu, ci fratele lui Petru I şi Roman I. Roman este înmormântat la necropola Bogdăneştilor, de la Rădăuţi.<br>&nbsp;&nbsp;&nbsp;&nbsp;Relațiile lui Roman I cu Mircea cel Bătrân au fost foarte bune, continuându-se politica de bună vecinătate din vremea lui Petru I Mușat.';
 document.getElementById("ldr").style.visibility = "hidden";
 document.getElementById("lst").style.visibility = "visible";
}
function changeText2()
{
 document.getElementById('text').innerHTML = 'Roman I este domnul Moldovei, frate cu Petru I şi fiu al Muşatei. Deşi Petru a avut doi fii, Roman şi Ivaşcu, îi urmează la tron fratele său. Roman, ca şi Petru I, își va presta jurământ de credinţă regelui Vladislav II Jagello, dar, spre deosebire de Petru I, care se dovedise consecvent, Roman încalcă jurământul de vasalitate, în anul 1393, când Teodor Koriatovici (rudă, se pare cu frate, cu Iurie Koriatovici) se ridică împotriva lui Vladislav Jagello, Roman este de partea lui Teodor.<br>&nbsp;&nbsp;&nbsp;&nbsp;Prin aceasta, Roman <b title="a anihila = a anula efectul unui lucru"><i>anihila</i></b>, în mare măsură, sistemul de securitate pe care îl oferise Petru I Moldovei. Pe plan intern, Roman înfăptuieşte acte de valoare. Sub el se încheie procesul de extindere a Moldovei până la mare, prin cuprinderea în <b title="fruntarie = graniță, hotar"><i>fruntariile</i></b> sale a Cetăţii Albe. Faptul reiese din hrisoavele de domnie, unde se intitulează <i>„marele singur stăpânitor, din mila lui Dumnezeu domn, Io, Roman voievod, stăpânitor al Ţării Moldovei, de la munte (adică din nord, de la hotarul cu Polonia, n.n.) până la ţărmul mării”</i> (adică până la Cetatea Albă, n.n.).<br>&nbsp;&nbsp;&nbsp;&nbsp;Un act important este şi construirea oraşului Roman, ce poartă numele domnitorului. Aşezarea era mult mai veche, ca şi Baia, Siretul şi Hotinul. Lui Roman i se atribuie, însă pe drept, construirea sau reconstruirea cetăţii locale de lemn şi pământ, distrusă în mare parte de viiturile apelor Moldovei, încât trebuie aşezat în rândul ctitorilor.';
 document.getElementById("lst").style.visibility = "hidden";
 document.getElementById("ldr").style.visibility = "visible";
}
var m=0;
function buton()
{
m++;
if(m%2)
 {document.getElementById('indicatit').innerHTML = 'Informațiile importante despre Roman I';
   document.getElementById('indicatit').style.visibility = "visible";
   document.getElementById('indicatii').innerHTML = 'Portretul lui Roman I';
   document.getElementById('indicatii').style.visibility = "visible";
   document.getElementById('indicatib').innerHTML = 'Butonul pentru a începe testul';
   document.getElementById('indicatib').style.visibility = "visible";
   document.getElementById('indicatis').innerHTML = 'Butoanele pentru pagina următoare și precedentă';
   document.getElementById('indicatis').style.visibility = "visible";
   document.getElementById('indicatia').innerHTML = 'Butonul de navigare spre pagina principală';
   document.getElementById('indicatia').style.visibility = "visible";
   }
 else 
  {document.getElementById('indicatit').innerHTML = ' ';
   document.getElementById('indicatit').style.visibility = "hidden";
   document.getElementById('indicatii').innerHTML = ' ';
   document.getElementById('indicatii').style.visibility = "hidden";
   document.getElementById('indicatib').innerHTML = ' ';
   document.getElementById('indicatib').style.visibility = "hidden";
   document.getElementById('indicatis').innerHTML = ' ';
   document.getElementById('indicatis').style.visibility = "hidden";
   document.getElementById('indicatia').innerHTML = ' ';
   document.getElementById('indicatia').style.visibility = "hidden";
   }
}
</script>

<section>

<div id="indicatia"></div>
<div class="acasa"><a href="../index.php" title="Acasa"><img src="../imagini/ac_roman.png" /></a></div>
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
Roman I este domnul Moldovei, frate cu Petru I şi fiu al Muşatei. Deşi Petru a avut doi fii, Roman şi Ivaşcu, îi urmează la tron fratele său. Roman, ca şi Petru I, își va presta jurământ de credinţă regelui Vladislav II Jagello, dar, spre deosebire de Petru I, care se dovedise consecvent, Roman încalcă jurământul de vasalitate, în anul 1393, când Teodor Koriatovici (rudă, se pare cu frate, cu Iurie Koriatovici) se ridică împotriva lui Vladislav Jagello, Roman este de partea lui Teodor.<br>&nbsp;&nbsp;&nbsp;&nbsp;Prin aceasta, Roman <b title="a anihila = a anula efectul unui lucru"><i>anihila</i></b>, în mare măsură, sistemul de securitate pe care îl oferise Petru I Moldovei. Pe plan intern, Roman înfăptuieşte acte de valoare. Sub el se încheie procesul de extindere a Moldovei până la mare, prin cuprinderea în <b title="fruntarie = graniță, hotar"><i>fruntariile</i></b> sale a Cetăţii Albe. Faptul reiese din hrisoavele de domnie, unde se intitulează <i>„marele singur stăpânitor, din mila lui Dumnezeu domn, Io, Roman voievod, stăpânitor al Ţării Moldovei, de la munte (adică din nord, de la hotarul cu Polonia, n.n.) până la ţărmul mării”</i> (adică până la Cetatea Albă, n.n.).<br>&nbsp;&nbsp;&nbsp;&nbsp;Un act important este şi construirea oraşului Roman, ce poartă numele domnitorului. Aşezarea era mult mai veche, ca şi Baia, Siretul şi Hotinul. Lui Roman i se atribuie, însă pe drept, construirea sau reconstruirea cetăţii locale de lemn şi pământ, distrusă în mare parte de viiturile apelor Moldovei, încât trebuie aşezat în rândul ctitorilor. 
</p>
<div id="indicatis"></div>
<a id="ldr" onclick='changeText1()' title="Pagina urmatoare"><img src="../../imagini/sageata.png" width="41px"/></a>
<a id="lst" onclick='changeText2()' title="Pagina anterioara"><img src="../../imagini/sageata2.png" width="38px"/></a>
</div>

<div id="indicatii"></div>
<div class="pict3"><img src="../imagini/roman.jpg" /></div>
<div id="indicatib"></div>
<div class="button"><a href="../teste/test6.php"><b>ÎNCEPE TESTUL</b></a></div>

</section>

</body>
</html>