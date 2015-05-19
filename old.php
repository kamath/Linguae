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
	if($wordnom=="domus")
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
  else if (strpos($wordgend, "pl") !== false)
  {
    if(strpos($wordgend,"n")!==false)
    {
      if(substr($wordgen,-3)=="ium")
      {
        $root = substr($wordgen, 0,-2);
        $nom = $root."a"."<br>";
        $acc == $nom;
        $gen = $root."um"."<br>";
        $dat = $root."ibus"."<br>";
        $abl = $dat;
      }
      else if (substr($wordgen,-4)=="orum") {
        $root = substr($wordgen, 0,-4);
        $nom = $wordnom."<br>";
        $acc = $nom;
        $gen = $wordgen."<br>";
        $dat = $root."is"."<br>";
        $abl = $dat;
      }
      else if (substr($wordgen,-2)=="um") {
        $root = substr($wordgen, 0,-2);
        $nom = $wordnom."<br>";
        $acc = $nom;
        $gen = $wordgen."<br>";
        $dat = $root."ibus"."<br>";
        $abl = $dat;
      }
      $nompl = "";
      $genpl = $nompl;
      $datpl = $nompl;
      $accpl = $nompl;
      $ablpl = $nompl;
    }
    else
    {
      if(substr($wordgen,-3)=="ium")
      {
        $root = substr($wordgen, 0,-3);
        $nom = $root."es"."<br>";
        $acc = $nom;
        $gen = $wordgen."<br>";
        $dat = $root."ibus"."<br>";       
        $abl = $dat;
      }
      else if (substr($wordgen,-4)=="orum")
      {
        $root = substr($wordgen, 0,-4);
        $nom = $wordgen."<br>";
        $gen = $wordgen."<br>";
        $acc = $root."os<br>";
        $dat = $root."is"."<br>";
        $abl = $dat;  
      }
      else if (substr($wordgen,-4)=="um")
      {
        $root = substr($wordgen, 0,-4);
        $nom = $wordnom."<br>";
        $acc = $nom;
        $gen = $wordgen."<br>";
        $dat = $root."ibus"."<br>";
        $abl = $dat;
      }     
    }
  }
  else if(substr($wordgen,-2)=="ae")
  {
    $nom = $wordnom."<br>";
    $root = substr($wordgen,0,-2);
    $gen = $root."ae<br>";
    $dat = $root."ae<br>";
    $acc = $root."am<br>";
    $abl = $root."a<br><br>";
    $nompl = $root."ae<br>";
    $genpl = $root."arum<br>";
    $datpl = $root."is<br>";
    $accpl = $root."as<br>";
    $ablpl = $root."is<br>";
    
  }
  else if(substr($wordgen,-2)=="ei" && substr($wordnom,-2)=="es")
  {
    $nom = $wordnom."<br>";
    $root = substr($wordgen,0,-2);
    $gen = $root."ei<br>";
    $dat = $gen;
    $acc = $root."em<br>";
    $abl = $root."e<br><br>";
    $nompl = $root."es<br>";
    $genpl = $root."erum<br>";
    $datpl = $root."ebus<br>";
    $accpl = $root."es<br>";
    $ablpl = $root."ebus<br>";
    
  }
  else if(substr($wordgen,-2)=="us")
  {
    if(strpos($wordgend, "n")!==false)
    {
      $nom = $wordnom."<br>";
      $root = substr($wordgen,0,-2);
      $gen = $root."us<br>";
      $dat = $root."u<br>";
      $acc = $nom;
      $abl = $dat;
      $nompl = $root."ua<br>";
      $genpl = $root."uum<br>";
      $datpl = $root."ibus<br>";
      $accpl = $root."ua<br>";
      $ablpl = $root."ibus<br>";
      
    }
    else
    {
      $nom = $wordnom."<br>";
      $root = substr($wordgen,0,-2);
      $gen = $root."us<br>";
      $dat = $root."ui<br>";
      $acc = $root."um<br>";
      $abl = $root."u<br><br>";
      $nompl = $root."us<br>";
      $genpl = $root."uum<br>";
      $datpl = $root."ibus<br>";
      $accpl = $root."us<br>";
      $ablpl = $root."ibus<br>";
        
    }
  }
  else if(substr($wordgen,-2)=="is")
  {
    $nom = $wordnom."<br>";
    $root = substr($wordgen, 0,-2);
    $gen = $root."is<br>";
    $dat = $root."i<br>";
    if(strpos($wordgend, "n")!==false)
    {
      $nompl = $root."a<br>";
      $accpl = $root."a<br>";
      $acc = $nom;
    }
    else
    {
      $nompl = $root."es<br>";
      $accpl = $nompl;
      $acc = $root."em<br>";
    }
    $abl = $root."e<br><br>";
    $genpl = $root."um<br>";
    $datpl = $root."ibus<br>";
    $ablpl = $root."ibus<br>";
    
  }
  else
  {
    if(strpos($wordgend, "n")!==false)
    {
      $nom = $wordnom."<br>";
      $root = substr($wordgen,0,-1);
      $gen = $root."i<br>";
      $dat = $root."o<br>";
      $acc = $nom;
      $abl = $root."o<br><br>";
      $nompl = $root."a<br>";
      $genpl = $root."orum<br>";
      $ablpl = $root."is<br>";
      $accpl = $root."a<br>";
      $datpl = $root."is<br>";
      
    }
    else
    {
      $nom = $wordnom."<br>";
      $root = substr($wordgen,0,-1);
      $gen = $root."i<br>";
      $dat = $root."o<br>";
      $acc = $root."um<br>";
      $abl = $root."o<br><br>";
      $nompl = $root."i<br>";
      $genpl = $root."orum<br>";
      $ablpl = $root."is<br>";
      $accpl = $root."os<br>";
      $datpl = $root."is<br>";
        
    }
  }
  $toprint = "<strong>".$wordnom."</strong><br>".$gen.$dat.$acc.$abl.$nompl.$genpl.$datpl.$accpl.$ablpl;
  $toJSON = array('nomsing' => $nom, 'nompl' = $nompl, 'gensing' => $gen, 'genpl' = $genpl, 'datsing' => $dat, 'datpl' = $datpl, 'accsing' => $acc, 'accpl' = $accpl, 'ablsing' => $abl, 'ablpl' = $ablpl);
  $json = json_encode($toJSON);
  echo $json;
}
