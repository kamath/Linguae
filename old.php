<?php
$words = "aetas, aetatis, f., age; lifetime; generation; [period; era]`
ager, agri, m., field; farm `
agricola, agricolae, m., farmer `
amicus, amici, m., friend `
amor, amoris, m., love`
animal, animalis, n., animal`
animus, animi, m., spirit; soul; mind `
annus, anni, m., year`
aqua, aquae, f., water `
arbor, arboris, f., tree`
arma, armorum, n.pl., weapons`
athleta, athletae, m., athlete `
auxilium, auxilii, n., help `
bellum, belli, n., war `
caput, capitis, n., head`
casa, casae, f., little house, cottage `
castra, castrorum, n.pl., camp `
civis, civis, m./f., citizen`
civitas, civitatis, f., state; community`
consilium, consilii, n., plan; advice `
consul, consulis, m., consul`
cornu, cornus, n., horn`
corpus, corporis, n., body`
cura, curae, f., care; anxiety; grief`
dea, deae, f., goddess`
deus, dei, m., god `
dextra, dextrae, f., right hand `
digitus, digiti, m., finger`
discipula, discipulae, f., student`
discipulus, discipuli, m., student`
dives, divitis, m., rich; wealthy`
dolor, doloris, m., grief; pain `
dolus, doli, m., trickery; deception `
domus, domus, f., house; home`
domina, dominae, f., mistress`
dominus, domini, m., master`
donum, doni, n., gift `
dux, ducis, m., leader; general`
epistula, epistulae, f., letter `
equus, equi, m., horse `
exemplar, exemplaris, n., example`
exemplum, exempli, n., example `
exercitus, exercitus, m., army`
fabula, fabulae, f., story `
familia, familiae, f., family; household `
femina, feminae, f., woman; wife `
filia, filiae, f., daughter `
filius, filii, m., son `
flamma, flammae, f., flame `
forma, formae f., form; appearance; beauty `
fortis, forte., brave; strong`
fortitudo, fortitudinis, f., courage`
frater, fratris, m., brother`
gaudium, gaudii, n., joy`
gladius, gladii, m., sword`
hasta, hastae, f., spear `
heros, herois, m., hero`
homo, hominis, m., man (i.e. human being); (pl.) people`
hora, horae, f., hour`
hostis, hostis, m., enemy `
ignis, ignis, m., fire `
impetus, impetus, m., an attack`
insula, insulae, f., island`
ira, irae, f., anger `
Italia, Italiae, f., Italy `
iter, itineris, n., way; road; path; journey`
iudex, iudecis, m., a judge (cf. iudico)`
labor, laboris, m., labor; task`
lacrima, lacrimae, f., a tear`
leo, leonis, m., lion`
lex, legis, f., law`
liber, libri, m., book`
littera, litterae, f., letter of the alphabet`
locus, loci, m., place`
lupa, lupae, f., she-wolf `
magister, magistri, m., master; teacher`
manus, manus, f., hand; band troop [of men]`
mare, maris, n., sea`
mater, matris, f., mother`
memoria, memoriae, f., memory `
metus, metus, m., fear; anxiety; dread`
miles, militis, m., soldier`
mons, montis, m., mountain `
monstrum, monstri, n., monster; [wonder; marvel; portent]`
mors, mortis, f., death`
mos, moris, m., custom, habit`
mulier, mulieris, f., woman (derogatory)`
nauta, nautae, m., sailor `
navis, navis, f., ship, boat`
nomen, nominis, n., name `
nox, noctis, f., night `
oculus, oculi, m., eye`
odium, odii, n., hatred`
Optimates, Optimatium, m.pl., the Optimates; aristocrats`
oraculum, oraculi, n., oracle`
oratio, orationis, f., speech`
os, oris, n., mouth`
parens, parentis, m./f. parent`
patria, patriae, f., fatherland; country `
pax, pacis, f., peace `
pectus, pectoris, n., chest`
pecunia, pecuniae, f., money`
periculum, periculi, n., danger `
pilum, pili, n., javelin; throwing spear`
plebs, plebis, f., the plebs / plebeians`
poeta, poetae, m., poet `
Populares, Populium, m.pl., the Populares; Popular party; democrats`
populus, populi, m., a people; a population`
praemium, praemii, n., reward `
proelium, proelii, n., battle`
puella, puellae, f., girl`
puer, pueri, m., boy; child`
regia, regiae, f., palace`
regina, reginae, f., queen `
rex, regis, m., king `
res, rei, f., thing;matter`
rivus, rivi, m., brook; stream `
Roma, Romae, f., Rome `
salus, salutis, f., health; safety`
sanguis, sanguinis, m., blood `
scutum, scuti, n., shield`
senatus, senatus, m., senate`
senex, senis, m., old man`
servus, servi, m., slave`
silva, silvae, f., forest` 
soror, sororis, f., sister `
tempestas, tempestatis, f., storm; season`
templum, templi, n., temple `
tempus, temporis, n., time `
terra, terrae, f., land `
timor, timoris, m., fear `
tumultus, tumultus, m., uproar; confusion; commotion`
urbs, urbis, f., city (usually the city of Rome) `
venenum, veneni, n., poison `
verbum, verbi, n., word`
via, viae, f., road; way; path`
vinculum, vinculi, n., chain; fetter `
vir, viri, m., man; husband`
vires, virium, f.pl., strength`
vis, ——, f., force; power; violence`
vita, vitae, f., life";
$pieces = explode("`",$words);
for($a = 0;$a<=count($pieces)-1; $a++)
{
	$pi[$a] = explode(",", $pieces[$a]);
	$wordnom = $pi[$a][0];
	$wordgen = $pi[$a][1];
	$wordgend = $pi[$a][2];
	echo "<strong>".$pieces[$a]."</strong><br>";
	if($pi[$a][0]=="domus")
	{
		echo "domus<br>";
		echo "domi/domus<br>";
		echo "domo/domui<br>";
		echo "domum<br>";
		echo "domo/domu<br><br>";
		echo "domus";
		echo "domorum/domuum";
		echo "domibus";
		echo "domos/domus";
		echo "domibus";
		echo "LOCATIVE: DOMI";
	}
	else if (strpos($pi[$a][2], "pl") !== false)
	{
		if(strpos($pi[$a][2],"n")!==false)
		{
			if(substr($pi[$a][1],-3)=="ium")
			{
				$root = substr($pi[$a][1], 0,-2);
				$nomacc = $root."a"."<br>";
				$gen = $root."um"."<br>";
				$databl = $root."ibus"."<br>";
				echo $nomacc;
				echo $gen;
				echo $databl;
				echo $nomacc;
				echo $databl;
				echo "<hr>";
			}
			else if (substr($pi[$a][1],-4)=="orum") {
				$root = substr($pi[$a][1], 0,-4);
				$nomacc = $pi[$a][0]."<br>";
				$gen = $pi[$a][1]."<br>";
				$databl = $root."is"."<br>";
				echo $nomacc;
				echo $gen;
				echo $databl;
				echo $nomacc;
				echo $databl;
				echo "<hr>";
			}
			else if (substr($pi[$a][1],-2)=="um") {
				$root = substr($pi[$a][1], 0,-2);
				$nomacc = $pi[$a][0]."<br>";
				$gen = $pi[$a][1]."<br>";
				$databl = $root."ibus"."<br>";
				echo $nomacc;
				echo $gen;
				echo $databl;
				echo $nomacc;
				echo $databl;
				echo "<hr>";
			}
		}
		else
		{
			if(substr($pi[$a][1],-3)=="ium")
			{
				$root = substr($pi[$a][1], 0,-3);
				$nomacc = $root."es"."<br>";
				$gen = $pi[$a][1]."<br>";
				$databl = $root."ibus"."<br>";
				echo $nomacc;
				echo $gen;
				echo $databl;
				echo $nomacc;
				echo $databl;
				echo "<hr>";	
			}
			else if (substr($pi[$a][1],-4)=="orum")
			{
				$root = substr($pi[$a][1], 0,-4);
				$nom = $pi[$a][1]."<br>";
				$gen = $pi[$a][1]."<br>";
				$acc = $root."os<br>";
				$databl = $root."is"."<br>";
				echo $nomacc;
				echo $gen;
				echo $databl;
				echo $acc;
				echo $databl;
				echo "<hr>";	
			}
			else if (substr($pi[$a][1],-4)=="um")
			{
				$root = substr($pi[$a][1], 0,-4);
				$nomacc = $pi[$a][0]."<br>";
				$gen = $pi[$a][1]."<br>";
				$databl = $root."ibus"."<br>";
				echo $nomacc;
				echo $gen;
				echo $databl;
				echo $nomacc;
				echo $databl;
				echo "<hr>";	
			}			
		}
	}
	else if(substr($pi[$a][1],-2)=="ae")
	{
		echo $pi[$a][0]."<br>";
		$root = substr($pi[$a][1],0,-2);
		$gen = $root."ae<br>";
		echo $gen;
		echo $gen;
		echo $root."am<br>";
		echo $root."a<br><br>";
		echo $root."ae<br>";
		echo $root."arum<br>";
		echo $root."is<br>";
		echo $root."as<br>";
		echo $root."is<br>";
		echo "<hr>";
	}
	else if(substr($pi[$a][1],-2)=="ei")
	{
		echo $pi[$a][0]."<br>";
		$root = substr($pi[$a][1],0,-2);
		$gen = $root."ei<br>";
		echo $gen;
		echo $gen;
		echo $root."em<br>";
		echo $root."e<br><br>";
		echo $root."es<br>";
		echo $root."erum<br>";
		echo $root."ebus<br>";
		echo $root."es<br>";
		echo $root."ebus<br>";
		echo "<hr>";
	}
	else if(substr($pi[$a][1],-2)=="us")
	{
		if(strpos($pi[$a][2], "n")!==false)
		{
			echo $pi[$a][0]."<br>";
			$root = substr($pi[$a][1],0,-2);
			$gen = $root."us<br>";
			$dat = $root."u<br>";
			echo $gen;
			echo $dat;
			echo $root."u<br>";
			echo $root."u<br><br>";
			echo $root."ua<br>";
			echo $root."uum<br>";
			echo $root."ibus<br>";
			echo $root."ua<br>";
			echo $root."ibus<br>";
			echo "<hr>";
		}
		else
		{
			echo $pi[$a][0]."<br>";
			$root = substr($pi[$a][1],0,-2);
			$gen = $root."us<br>";
			$dat = $root."ui<br>";
			echo $gen;
			echo $dat;
			echo $root."um<br>";
			echo $root."u<br><br>";
			echo $root."us<br>";
			echo $root."uum<br>";
			echo $root."ibus<br>";
			echo $root."us<br>";
			echo $root."ibus<br>";
			echo "<hr>";	
		}
	}
	else if(substr($pi[$a][1],-2)=="is")
	{
		echo $pi[$a][0]."<br>";
		$root = substr($pi[$a][1], 0,-2);
		$gen = substr($pi[$a][1],-2);
		echo $root.$gen."<br>";
		$dat = "i";
		echo $root.$dat."<br>";
		if(strpos($pi[$a][2], "n.")!==false)
		{
			$acc = $pi[$a][0];
			$nompl = "a";
			echo $acc."<br>";
		}
		else
		{
			$acc = "em";
			$nompl = "es";
			echo $root.$acc."<br>";
		}
		$abl = "e";
		echo $root.$abl."<br>";
		echo "<br>";
		echo $root.$nompl."<br>";
		$gen = "um";
		echo $root.$gen."<br>";
		$dat = "ibus";
		echo $root.$dat."<br>";
		if($pi[$a][2]==" n.")
		{
			$acc = $pi[$a][0];
			echo $acc."<br>";
		}
		else
		{
			$acc = "em";
			echo $root.$acc."<br>";
		}
		$abl = "ibus";
		echo $root.$abl."<br>";
		echo "<hr>";
	}
	else
	{
		if(strpos($pi[$a][2], "n")!==false)
		{
			echo $pi[$a][0]."<br>";
			$root = substr($pi[$a][1],0,-1);
			$gen = $root."i<br>";
			$dat = $root."o<br>";
			echo $gen;
			echo $dat;
			echo $root."um<br>";
			echo $root."o<br><br>";
			echo $root."a<br>";
			echo $root."orum<br>";
			echo $root."is<br>";
			echo $root."a<br>";
			echo $root."is<br>";
			echo "<hr>";
		}
		else
		{
			echo $pi[$a][0]."<br>";
			$root = substr($pi[$a][1],0,-1);
			$gen = $root."i<br>";
			$dat = $root."o<br>";
			echo $gen;
			echo $dat;
			echo $root."um<br>";
			echo $root."o<br><br>";
			echo $root."i<br>";
			echo $root."orum<br>";
			echo $root."is<br>";
			echo $root."os<br>";
			echo $root."is<br>";
			echo "<hr>";	
		}
	}
}
