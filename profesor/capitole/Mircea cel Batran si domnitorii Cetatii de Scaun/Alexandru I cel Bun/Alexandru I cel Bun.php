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
var lectie = [
'Bunicul lui Ștefan Mare, Alexandru, a fost unul dintre cei mai importanți domnitori Muşatini, om politic şi diplomat de seamă, bun gospodar al ţării.<br>&nbsp;&nbsp;&nbsp;&nbsp;A luat domnia cu ajutorul domnului muntean Mircea cel Bătrân, în condiţiile rivalităţii dintre cele două mari puteri europene, regatul Ungariei şi regatul Poloniei. Mircea cel Bătrân a fost și cel care i-a dat lui Alexandru teritoriul de sud al Moldovei, mărind spațiul de deschidere la Marea Neagră, foarte îngust pe vremea lui Roman I. Cedarea acestui teritoriu de către Mircea a fost pentru a-l interesa pe Alexandru să se implice în lupta contra turcilor ca aliat al Țării Românești. Prin intrarea în sistemul de alianţe polono-lituanian, Alexandru <b title="a contracara = a împiedica"><i>contracara</i></b> vechea tendinţă de expansiune a regatului maghiar spre Moldova. Alexandru obţine şi recunoaşterea din partea lui Vladislav, printr-un înscris, a stăpânirii Moldovei asupra Pocuţiei.<br>&nbsp;&nbsp;&nbsp;&nbsp;Alexandru îl ajută pe regele polon în coaliţia împotriva expansiunii cavalerilor teutoni, în bătăliile de la Grünwald (1410), apoi în luptele ce au urmat din 1411, 1412 şi 1414, dar mai cu seamă în marea confruntare de la Marienburg (1422), unde Alexandru trimite un corp de oaste de 400 de călăreţi conduşi de spătarul Coman. Totuşi, la 15 martie 1412, Vladislav al II-lea încheie cu regele Ungariei, Sigismund de Luxemburg, un tratat la Lublau cu scopul declarat al luptei comune împotriva expansiunii Imperiului Otoman.',
"La cererea lui Sigismund, a fost introdusă în tratat o clauză rămasă secretă privind împărţirea Moldovei între cele două regate, în cazul în care Alexandru nu l-ar fi ajutat pe Sigismund în războiul antiotoman. Însă, în mai 1420, când turcii asediază Cetatea Albă, cei doi suzerani nu răspund la cererea de ajutor al lui Alexandru şi Alexandru este nevoit să facă faţă situaţiei cu forţe proprii. Aflând ulterior de conţinutul Tratatului de la Lublau, Alexandru rupe legăturile cu polonii (1431) şi se aliază cu lituanii împotriva lui Vladislav II, însă, se poate afirma că „politica externă a lui Alexandru cel Bun nu a fost o politică ofensivă, ci una defensivă” (Constantin C. Giurescu, Dinu C. Giurescu).<br>&nbsp;&nbsp;&nbsp;&nbsp;Alexandru se ocupă îndeaproape de prosperitatea Moldovei. Înfloresc ramurile de tradiţie ale economiei: agricultură, pomicultură, grădinărit, viticultură, pescuit, apicultură. Meşteşugurile se înmulţesc şi se diversifică. O mare pondere capătă mineritul. Sporesc produsele pentru export şi este încurajat comerţul (privilegii acordate negustorilor din Liov şi celor autohtoni). Statul şi instituţiile sale sunt temeinic organizate: întărirea instituţiei domniei şi prestigiului ei, a autorităţii domnului în faţa boierilor şi a tuturor supuşilor săi, grija faţă de sfatul domnesc şi de dregători. Alexandru este ctitorul a două mari aşezări religioase; mănăstirea Bistriţa (ţinutul Neamţului) şi Moldoviţa. Mănăstirea Bistriţa devine a doua necropolă muşatină, după cea de la Rădăuţi.",
"La 1 ianuarie 1432, Alexandru moare şi este înmormântat la Mănăstirea Bistriţa."
];
var n=0;
function changeText1()
{
 n++;
 document.getElementById('text').innerHTML = lectie[n];
 if(n==2)
    document.getElementById("ldr").style.visibility = "hidden";
 document.getElementById("lst").style.visibility = "visible";
}
function changeText2()
{
 n--;
 document.getElementById('text').innerHTML = lectie[n];
 if(n==0)
    document.getElementById("lst").style.visibility = "hidden";
 document.getElementById("ldr").style.visibility = "visible";
}
var m=0;
function buton()
{
m++;
if(m%2)
 {document.getElementById('indicatit').innerHTML = 'Informațiile importante despre Alexandru I';
   document.getElementById('indicatit').style.visibility = "visible";
   document.getElementById('indicatii').innerHTML = 'Portretul lui Alexandru I';
   document.getElementById('indicatii').style.visibility = "visible";
   document.getElementById('indicatis').innerHTML = 'Butoanele pentru pagina următoare și precedentă';
   document.getElementById('indicatis').style.visibility = "visible";
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
   document.getElementById('indicatis').innerHTML = ' ';
   document.getElementById('indicatis').style.visibility = "hidden";
   document.getElementById('indicatia').innerHTML = ' ';
   document.getElementById('indicatia').style.visibility = "hidden";
   document.getElementById('indicatib').innerHTML = ' ';
   document.getElementById('indicatib').style.visibility = "hidden";
   }
}
</script>

<section>

<div id="indicatia"></div>
<div class="acasa"><a href="../index.php" title="Acasa"><img src="../imagini/ac_alex.png" /></a></div>
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
Bunicul lui Ștefan Mare, Alexandru, a fost unul dintre cei mai importanți domnitori Muşatini, om politic şi diplomat de seamă, bun gospodar al ţării.<br>&nbsp;&nbsp;&nbsp;&nbsp;A luat domnia cu ajutorul domnului muntean Mircea cel Bătrân, în condiţiile rivalităţii dintre cele două mari puteri europene, regatul Ungariei şi regatul Poloniei. Mircea cel Bătrân a fost și cel care i-a dat lui Alexandru teritoriul de sud al Moldovei, mărind spațiul de deschidere la Marea Neagră, foarte îngust pe vremea lui Roman I. Cedarea acestui teritoriu de către Mircea a fost pentru a-l interesa pe Alexandru să se implice în lupta contra turcilor ca aliat al Țării Românești. Prin intrarea în sistemul de alianţe polono-lituanian, Alexandru <b title="a contracara = a împiedica"><i>contracara</i></b> vechea tendinţă de expansiune a regatului maghiar spre Moldova. Alexandru obţine şi recunoaşterea din partea lui Vladislav, printr-un înscris, a stăpânirii Moldovei asupra Pocuţiei.<br>&nbsp;&nbsp;&nbsp;&nbsp;Alexandru îl ajută pe regele polon în coaliţia împotriva expansiunii cavalerilor teutoni, în bătăliile de la Grünwald (1410), apoi în luptele ce au urmat din 1411, 1412 şi 1414, dar mai cu seamă în marea confruntare de la Marienburg (1422), unde Alexandru trimite un corp de oaste de 400 de călăreţi conduşi de spătarul Coman. Totuşi, la 15 martie 1412, Vladislav al II-lea încheie cu regele Ungariei, Sigismund de Luxemburg, un tratat la Lublau cu scopul declarat al luptei comune împotriva expansiunii Imperiului Otoman.
</p>
<div id="indicatis"></div>
<a id="ldr" onclick='changeText1()' title="Pagina urmatoare"><img src="../../imagini/sageata.png" width="41px"/></a>
<a id="lst" onclick='changeText2()' title="Pagina anterioara"><img src="../../imagini/sageata2.png" width="38px"/></a>
</div>

<div id="indicatii"></div>
<div class="pict6"><img src="../imagini/alexandru.jpg" /></div>
<div id="indicatib"></div>
<div class="button"><a href="../teste/test9.php"><b>ÎNCEPE TESTUL</b></a></div>

</section>

</body>
</html>