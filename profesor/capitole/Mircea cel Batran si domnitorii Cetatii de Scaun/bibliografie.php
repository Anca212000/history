<?php
include '../../autentificare.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="../../style_prof.css">
<title>Mircea cel Bătrân şi domnitorii Cetăţii de Scaun</title>
</head>
<style>
body .ac {
	border:2px solid rgba(158, 20, 20, 1);
	-webkit-border-radius: 100px;
	-moz-border-radius: 100px;
	border-radius: 100px;
	float:right;
	margin:20px 20px 0 5px;
	padding:10px;
	color:rgba(158, 20, 20, 1);
	text-decoration:none;
	background-color:rgba(158, 20, 20, 0.1);
}
body span :hover {
	color:rgba(158, 20, 20, 0.8);
	border:2px solid rgba(158, 20, 20, 0.5);
	background-color:rgba(158, 20, 20, 0.05);
}
</style>
<body>

<header>
<h1>Mircea cel Bătrân şi <br>domnitorii Cetăţii de Scaun</h1>
<span><br><br><a href="../../logout.php" style="margin-left:20px;margin-top:50px;">Deconecteaza-te</a></span>
</header>

<span><a class="ac" href="index.php">Acasa</a></span>

<section>
<?php
if($_SESSION['domeniu']=='profesor')
{
?>
<a href="../../acasa_prof.php" title="Panou de administrare"><img src="../imagini/admin.png" width="40px" style="float:left;margin-left:10px;margin-top:15px;"/></a>
<?php
}
?>
<div class="nume" style="margin-left:50px;">
<br><br><br>
<ul>
	<li>Magdalena Rangu ș.a., <b>Caiet de aplicații practice la istorie</b>, clasa a IV-a, Editura Lidian, Suceava, 2010</li>
	<li>Magdalena Rangu ș.a., <b>Caiet de aplicații practice la istorie</b>, clasa a VIII-a, Editura Lidian, Suceava, 2008</li>
	<li>Al. Barnea ș.a., <b>Manual de istorie</b>, clasa a IX-a, Editura Corint, București, 2004</li>
	<li>Zoe Petre ș.a., <b>Manual de istorie</b>, clasa a IX-a, Editura Corint, București, 2004</li>
	<li>N. Dumitrescu ș.a., <b>Manual de istorie</b>, clasa a IX-a, Editura Didactică și Pedagogică, București, 2004</li>
	<li>Mihaela Nacu, <b>Memorator de istorie universală pentru clasa a IX-a</b>, Editura Booklet, București, 2007</li>
	<li>Ion Pătroiu, <b>Marele Mircea Voievod</b>, Editura Academiei R.S.R., București, 1987</li>
	<li>C. Căzănișteanu, <b>Pe urmele lui Mircea cel Mare</b>, Editura Sport-Turism, București, 1987</li>
	<li>Neagu Djuvara, <b>Mircea cel Bătrân și luptele cu turcii</b>, Editura Humanitas Junior, București, 2003</li>
	<li>Ștefan Sorin Gorovei, <b>Mușatinii, Editura Albatros</b>, București, 1976</li>
	<li>D. Popescu, <b>Dicționar de personalități istorice. Voievozi, principi, domnitori, regi</b>, Editura Niculescu, București, 2001</li>
	<li>Boris Crăciun, <b>Istoria românilor în 1000 de imagini. Album și atlas școlar</b>, Editura Porțile Orientului, Iași</li>
	<li>Boris Crăciun, <b>Istoria ilustrată a românilor de la origini până în prezent. Album istoric pentru copii și tineret</b>, Editura Porțile Orientului, Iași</li>
	<li>Dumitru Almaș, <b>Povestiri istorice pentru copii și preșcolari</b>, vol. I, Editura Didactică și Pedagogică, București, 2003</li>

</ul>
</div>

</section>

</body>
</html>