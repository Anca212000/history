<?php
include '../../../autentificare.php';
?>
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
 document.getElementById('text').innerHTML = 'Dușmanii au lovit cu și mai multă furie, încât cerul s-a întunecat de mulțimea săgeților. A urmat apoi lupta cu sulițele, cu buzduganele și spadele. După această zi de înfruntări crâncene, în care turcii au pierdut mulți soldați, arme și steaguri, Baiazid a fost nevoit să se retragă de pe pământul românesc. Astfel, bizuindu-se pe dragostea de țară a ostenilor și pe calitățile sale militare, Mircea cel Bătrân a obținut la Rovine, cea dintâi mare biruință românească împotriva turcilor. În anul următor, 1396, el a participat cu un corp de oaste la cruciada cavalerilor europeni, dar in bătălia de la Nicopole (condusă de un alt principe, Sigismund de Luxemburg),turcii au pricinuit o grea înfrângere trupelor creștine.<br>&nbsp;&nbsp;&nbsp;&nbsp;După moartea lui Baiazid(1402), Mircea cel Bătrân a sprijinit când pe unul, când pe altul dintre urmașii lui. Dar când în fruntea imperiului a fost înscăunat Mahomed (1413), cu care regii Ungariei si Poloniei, ca si alți principii europeni, au încercat să mențină bune relații, Mircea s-a văzut nevoit să accepte plata unui <b title="tribut = obligație în galbeni de aur, plătită turcilor anual, pentru a nu ajunge sub ocupația Imperiului Otoman; primul tribut plătit de Mircea a fost de 3.000 de galbeni de aur, iar nepotul său Vlad Tepes plătea 10.000 (echivalentul a 222 de sate)"><i>tribut</i></b>. În schimb, sultanul se angaja să nu se amestece în treburile interne ale țării. După 32 de ani de domnie, încărcat de ani și fapte eroice, Mircea cel Bătrân și-a găsit șfârșitul, fiind înmormântat la Mănăstirea Cozia, ctitoria sa de pe Valea Oltului. Cel mai vrednic urmaș a fost Vlad Țepes, nepot al lui Mircea (care l-a înfruntat pe Mahomed al II-lea lângă Târgoviște, în anul 1462).';
 document.getElementById("ldr").style.visibility = "hidden";
 document.getElementById("lst").style.visibility = "visible";
}
function changeText2()
{
 document.getElementById('text').innerHTML = 'Către sfârșitul secolului al XIV-lea, pentru Țările Române și întreaga Europa s-a ivit o mare primejdie - Imperiul Otoman. Aceasta s-a întins, în mai puțin de un secol, devenind, dintr-un mic stat, un imperiu ce cuprindea țări și popoare din Asia și Europa, până la Dunăre. În aceste vremuri grele, pe tronul Țării Românești a urcat un vrednic urmaș al lui Basarab I, rămas în istorie sub numele de Mircea cel Bătrân (1386-1418). În vremea acestuia, <b title="hotarele = frontierele sau granițele care delimitau țările între ele"><i>hotarele</i></b> țării se întindeau de la Banatul Severinului până la Marea Neagră și de dincolo de Carpați până la Dunăre.<br>&nbsp;&nbsp;&nbsp;&nbsp;Vrednicul voievod s-a preocupat de sporirea puterii economice a țării sale, încurajând dezvoltarea agriculturii, meșteșugurilor si negoțului. Conștient de creșterea pericolului turcesc, el a întărit cetățile de la Dunăre, a încheiat <b title="alianțe = legături de prietenie între țări, pentru sprijin militar contra dușmanilor"><i>alianțe</i></b> cu Moldova si Polonia, iar mai târziu cu Ungaria. În anul 1394 sau 1395, vestitul sultan Baiazid Fulgerul a trecut Dunărea (pe la Turnu) în fruntea unei armate foarte numeroase. La porunca voievodului, românii au pustiit si pârjolit totul în calea dușmanilor, au otrăvit fântâniile pentru a le slăbi forțele, apoi și-au adăpostit famiile în munți.<br>&nbsp;&nbsp;&nbsp;&nbsp;Cu o <b title="oaste = armata era împărțită în oastea cea mare (formată din toți bărbații care puteau purta armele), strânsă doar în cazul războaielor, cât și oastea cea mică (formată din cavaleria fiilor de boieri și boieri) permanență"><i>oaste</i></b> de doar 10.000 de luptători, formată din țărani liberi, târgoveți si boieri, Mircea cel Bătrân i-a întâmpinat pe dușmanii de patru ori mai mulți la Rovine (un loc mlâștinos). La semnalul viteazului lor comandant, călăreții români au lovit furtunos din părti, iar arcașii au slobozit arcurile.';
 document.getElementById("ldr").style.visibility = "visible";
 document.getElementById("lst").style.visibility = "hidden";
}
var m=0;
function buton()
{
m++;
if(m%2)
 {document.getElementById('indicatit').innerHTML = 'Informațiile importante despre Mircea cel Bătrân';
   document.getElementById('indicatit').style.visibility = "visible";
   document.getElementById('indicatii').innerHTML = 'Portretul lui Mircea cel Bătrân';
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
<div class="acasa"><a href="../index.php" title="Acasa"><img src="../imagini/ac_mircea.png" /></a></div>
<div class="help"><a title="Ajutor" onclick='buton()'><img src="../../imagini/help.png" /></a></div>

<?php
$d=$_SESSION['domeniu'];
if($d==='profesor')
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
Către sfârșitul secolului al XIV-lea, pentru Țările Române și întreaga Europa s-a ivit o mare primejdie - Imperiul Otoman. Aceasta s-a întins, în mai puțin de un secol, devenind, dintr-un mic stat, un imperiu ce cuprindea țări și popoare din Asia și Europa, până la Dunăre. În aceste vremuri grele, pe tronul Țării Românești a urcat un vrednic urmaș al lui Basarab I, rămas în istorie sub numele de Mircea cel Bătrân (1386-1418). În vremea acestuia, <b title="hotarele = frontierele sau granițele care delimitau țările între ele"><i>hotarele</i></b> țării se întindeau de la Banatul Severinului până la Marea Neagră și de dincolo de Carpați până la Dunăre.<br>&nbsp;&nbsp;&nbsp;&nbsp;Vrednicul voievod s-a preocupat de sporirea puterii economice a țării sale, încurajând dezvoltarea agriculturii, meșteșugurilor si negoțului. Conștient de creșterea pericolului turcesc, el a întărit cetățile de la Dunăre, a încheiat <b title="alianțe = legături de prietenie între țări, pentru sprijin militar contra dușmanilor"><i>alianțe</i></b> cu Moldova si Polonia, iar mai târziu cu Ungaria. În anul 1394 sau 1395, vestitul sultan Baiazid Fulgerul a trecut Dunărea (pe la Turnu) în fruntea unei armate foarte numeroase. La porunca voievodului, românii au pustiit si pârjolit totul în calea dușmanilor, au otrăvit fântâniile pentru a le slăbi forțele, apoi și-au adăpostit famiile în munți.<br>&nbsp;&nbsp;&nbsp;&nbsp;Cu o <b title="oaste = armata era împărțită în oastea cea mare (formată din toți bărbații care puteau purta armele), strânsă doar în cazul războaielor, cât și oastea cea mică (formată din cavaleria fiilor de boieri și boieri) permanență"><i>oaste</i></b> de doar 10.000 de luptători, formată din țărani liberi, târgoveți si boieri, Mircea cel Bătrân i-a întâmpinat pe dușmanii de patru ori mai mulți la Rovine (un loc mlâștinos). La semnalul viteazului lor comandant, călăreții români au lovit furtunos din părti, iar arcașii au slobozit arcurile.
</p>
<div id="indicatis"></div>
<a id="ldr" onclick='changeText1()' title="Pagina urmatoare"><img src="../../imagini/sageata.png" width="41px"/></a>
<a id="lst" onclick='changeText2()' title="Pagina anterioara"><img src="../../imagini/sageata2.png" width="38px"/></a>
</div>

<div id="indicatii"></div>
<div class="pict1"><img src="../imagini/MCB.jpg" /></div>
<div id="indicatib"></div>
<div class="button"><a href="../teste/test1.php"><b>ÎNCEPE TESTUL</b></a></div>

</section>

</body>
</html>