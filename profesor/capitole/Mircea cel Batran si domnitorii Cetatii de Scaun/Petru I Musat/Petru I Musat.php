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
"Petru I al Muşatei (Muşat) este domn al Moldovei. La venirea pe tron, conjunctura externă era complexă. În Polonia domnea o personalitate regală de excepţie - Vladislav II Jagello. Acesta cucereşte la 1386 cnezatul (ducatul) Haliciului, extinzându-şi teritoriul şi puterea şi conducând peste regatul polono-lituanian. Probând orientare şi simţ diplomatic, Petru prestează jurământ de vasalitate faţă de coroana polonă la Liov (26 septembrie 1387).<br>&nbsp;&nbsp;&nbsp;&nbsp;Prin aceasta, se realiza aşezarea Moldovei sub protecţia Poloniei, dar şi neutralizarea presiunii regalităţii maghiare care, în urma morţii lui Ludovic de Anjou, de la 1382, ce a condus la destrămarea uniunii statale Ungaria - Polonia, revenea în actualitate. Ungaria redevenea rivala Poloniei. Însuşi regele Poloniei era interesat în alianţa cu Petru, prin care căpăta siguranţa circulaţiei mărfurilor pe drumul comercial ce lega într-un sistem de tranzit cetăţile Chilia şi Cetatea Albă de marele centru comercial Liov. Integrarea ţării în sistemul politic condus de Vladislav Jagello a condus la sporirea prestigiului Moldovei şi a permis lui Petru o politică internă de frumoase înfăptuiri. Economia a luat avânt.<br>&nbsp;&nbsp;&nbsp;&nbsp;Înfloresc agricultura, meşteşugurile şi comerţul legat de drumul comercial amintit. Expresia comerţului înfloritor e dovedită de baterea primelor monede din Moldova, de argint (grosi), care aveau pe avers stema Moldovei (capul de bour), iar pe revers stema dinastiei Muşatinilor (scutul cu fascii şi flori de crin).", 
'Puterea economică e dovedită şi de faptul că, la 1388, Petru acordă lui Vladislav un împrumut de 3.000 de ruble de argint frâncesti (echivalentul a 52 de Kg de aur). <b title="gaj = garanție de pus în contul unei datorii"><i>Gajul</i></b> pentru suma împrumutată era Pocuţia (provincie de aproape 8.000 km2, la hotarul nordic al Moldovei). Dacă banii nu erau înapoiaţi la termenul prevăzut, urma ca Petru să ocupe Pocuţia. Vladislav n-a înapoiat în întregime suma împrumutată, fapt care, în viitorul apropiat, va deschide conflictul pentru Pocuţia. Starea de prosperitate se răsfrânge şi pe planul construcţiilor civile şi religioase.A mutat capitala de la Siret la Suceava. Fortificaţiile Sucevei sunt ridicate în vremea lui la care, pe la 1380, statorniceşte aici Cetatea de Scaun, cetatea Șcheia și Curtea Domnească.<br>&nbsp;&nbsp;&nbsp;&nbsp;Tot pentru Suceava a ridicat biserica de piatră Mirăuţi.Vestita Cetate a Neamţului îl are drept ctitor tot pe Petru, precum şi mănăstirea Neamţului din apropiere, centru de cultură şi artă medievală. Petru se îngrijeşte de structurarea statului Moldova. Reglementează relaţiile sale cu boierii, care l-au asistat la depunerea actului de vasalitate faţă de regele polon, jurându-i în acelaşi timp credinţă. Sfetnicii săi, „supremi consilieri”, sunt premisele Sfatului Domnesc, ce se va constitui şi dezvolta treptat sub urmaşi. Petru pune şi bazele cancelariei domneşti care, deşi existase şi sub Laţcu, acum capătă o organizare complexă. Spiritul de credinţă străbună n-a constat numai în ctitorirea mănăstirilor, ci şi în activitatea de organizare a unei ierarhii bisericeşti autonome.', 
'În septembrie 1386, în actele Patriarhiei din Constantinopol figurează o Mitropolie a Moldovei unde patriarhul voia să impună pe un anume Teodosie, dar Petru se opune şi este <b title="hirotonisit = ridicat la treapta preoției"><i>hirotonisit</i></b> la Halici, din voinţa lui, ca mitropolit al Moldovei, Iosif. Deşi propaganda catolică era puternică (însăşi mama domnitorului, Margareta Muşata, este câştigată la catolicism şi ridică o biserică de rit catolic în târgul Siretului, iar Petru are drept soţie pe o rudă a regelui polon, el rămâne consecvent pe linia apărării ortodoxismului şi independenţei.<br>&nbsp;&nbsp;&nbsp;&nbsp;Actele politicii sale interne şi externe sunt încununate de semnarea tratatului de la Radom (Polonia) din 1390, între Mircea cel Bătrân şi Vladislav Jagello, unde Petru a jucat cu multă autoritate rolul de mijlocitor. Stingându-se din viaţă spre sfârşitul anului 1391 sau începutul anului 1392, Petru este înmormântat în dreapta altarului bisericii Mirăuți din Suceava. Opera lui Petru, de însemnătate politică şi religioasă pentru Moldova, îl aşează pe drept în categoria întemeietorilor de aşezăminte. Relațiile lui Petru I Mușat cu Mircea cel Bătrân au fost foarte bune. Astfel, s-a folosit pentru realizarea unei alianțe antimaghiare cu Polonia, prin intermediul domnitorului moldovean, căruia îi trimite o solie munteană în 1389. Astfel preîntâmpina atacarea Țării Românești care alipise Banatul de Severin, Amlașul și Țara Făgărașului  în 1389, teritorii care erau considerate de maghiari în subordinea lor.'
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
 {document.getElementById('indicatit').innerHTML = 'Informațiile importante despre Petru I Mușat';
   document.getElementById('indicatit').style.visibility = "visible";
   document.getElementById('indicatii').innerHTML = 'Portretul lui Petru I Mușat';
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
<div class="acasa"><a href="../index.php" title="Acasa"><img src="../imagini/ac_petru.png" /></a></div>
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
Petru I al Muşatei (Muşat) este domn al Moldovei. La venirea pe tron, conjunctura externă era complexă. În Polonia domnea o personalitate regală de excepţie - Vladislav II Jagello. Acesta cucereşte la 1386 cnezatul (ducatul) Haliciului, extinzându-şi teritoriul şi puterea şi conducând peste regatul polono-lituanian. Probând orientare şi simţ diplomatic, Petru prestează jurământ de vasalitate faţă de coroana polonă la Liov (26 septembrie 1387).<br>&nbsp;&nbsp;&nbsp;&nbsp;Prin aceasta, se realiza aşezarea Moldovei sub protecţia Poloniei, dar şi neutralizarea presiunii regalităţii maghiare care, în urma morţii lui Ludovic de Anjou, de la 1382, ce a condus la destrămarea uniunii statale Ungaria - Polonia, revenea în actualitate. Ungaria redevenea rivala Poloniei. Însuşi regele Poloniei era interesat în alianţa cu Petru, prin care căpăta siguranţa circulaţiei mărfurilor pe drumul comercial ce lega într-un sistem de tranzit cetăţile Chilia şi Cetatea Albă de marele centru comercial Liov. Integrarea ţării în sistemul politic condus de Vladislav Jagello a condus la sporirea prestigiului Moldovei şi a permis lui Petru o politică internă de frumoase înfăptuiri. Economia a luat avânt.<br>&nbsp;&nbsp;&nbsp;&nbsp;Înfloresc agricultura, meşteşugurile şi comerţul legat de drumul comercial amintit. Expresia comerţului înfloritor e dovedită de baterea primelor monede din Moldova, de argint (grosi), care aveau pe avers stema Moldovei (capul de bour), iar pe revers stema dinastiei Muşatinilor (scutul cu fascii şi flori de crin).
</p>
<div id="indicatis"></div>
<a id="ldr" onclick='changeText1()' title="Pagina urmatoare"><img src="../../imagini/sageata.png" width="41px"/></a>
<a id="lst" onclick='changeText2()' title="Pagina anterioara"><img src="../../imagini/sageata2.png" width="38px"/></a>
</div>

<div id="indicatii"></div>
<div class="pict2"><img src="../imagini/petru.jpg" /></div>
<div id="indicatib"></div>
<div class="button"><a href="../teste/test5.php"><b>ÎNCEPE TESTUL</b></a></div>

</section>

</body>
</html>