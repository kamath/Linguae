<?php
$words="aetas,aetatis,f.,age;lifetime;generation;[period;era]`ager,agri,m.,field;farm`agricola,agricolae,m.,farmer`amicus,amici,m.,friend`amor,amoris,m.,love`animal,animalis,n.,animal`animus,animi,m.,spirit;soul;mind`annus,anni,m.,year`aqua,aquae,f.,water`arbor,arboris,f.,tree`arma,armorum,n.pl.,weapons`athleta,athletae,m.,athlete`auxilium,auxilii,n.,help`bellum,belli,n.,war`caput,capitis,n.,head`casa,casae,f.,little house,cottage`castra,castrorum,n.pl.,camp`civis,civis,m./f.,citizen`civitas,civitatis,f.,state;community`consilium,consilii,n.,plan;advice`consul,consulis,m.,consul`cornu,cornus,n.,horn`corpus,corporis,n.,body`cura,curae,f.,care;anxiety;grief`dea,deae,f.,goddess`deus,dei,m.,god`dextra,dextrae,f.,right hand`digitus,digiti,m.,finger`discipula,discipulae,f.,student`discipulus,discipuli,m.,student`dives,divitis,m.,rich;wealthy`dolor,doloris,m.,grief;pain`dolus,doli,m.,trickery;deception`domus,domus,f.,house;home`domina,dominae,f.,mistress`dominus,domini,m.,master`donum,doni,n.,gift`dux,ducis,m.,leader;general`epistula,epistulae,f.,letter`equus,equi,m.,horse`exemplar,exemplaris,n.,example`exemplum,exempli,n.,example`exercitus,exercitus,m.,army`fabula,fabulae,f.,story`familia,familiae,f.,family;household`femina,feminae,f.,woman;wife`filia,filiae,f.,daughter`filius,filii,m.,son`flamma,flammae,f.,flame`forma,formae,f.,form;appearance;beauty`fortitudo,fortitudinis,f.,courage`frater,fratris,m.,brother`gaudium,gaudii,n.,joy`gladius,gladii,m.,sword`hasta,hastae,f.,spear`heros,herois,m.,hero`homo,hominis,m.,man(i.e.human being);(pl.)people`hora,horae,f.,hour`hostis,hostis,m.,enemy `ignis,ignis,m.,fire `impetus,impetus,m.,an attack`insula,insulae,f.,island`ira,irae,f.,anger `Italia,Italiae,f.,Italy `iter,itineris,n.,way; road; path; journey`iudex,iudecis,m.,a judge (cf. iudico)`labor,laboris,m.,labor; task`lacrima,lacrimae,f.,a tear`leo,leonis,m.,lion`lex,legis,f.,law`liber,libri,m.,book`littera,litterae,f.,letter of the alphabet`locus,loci,m.,place`lupa,lupae,f.,she-wolf `magister,magistri,m.,master; teacher`manus,manus,f.,hand; band troop [of men]`mare,maris,n.,sea`mater,matris,f.,mother`memoria,memoriae,f.,memory `metus,metus,m.,fear; anxiety; dread`miles,militis,m.,soldier`mons,montis,m.,mountain `monstrum,monstri,n.,monster; [wonder; marvel; portent]`mors,mortis,f.,death`mos,moris,m.,custom,habit`mulier,mulieris,f.,woman (derogatory)`nauta,nautae,m.,sailor `navis,navis,f.,ship,boat`nomen,nominis,n.,name `nox,noctis,f.,night `oculus,oculi,m.,eye`odium,odii,n.,hatred`Optimates,Optimatium,m.pl.,the Optimates; aristocrats`oraculum,oraculi,n.,oracle`oratio,orationis,f.,speech`os,oris,n.,mouth`parens,parentis,m./f. parent`patria,patriae,f.,fatherland; country `pax,pacis,f.,peace `pectus,pectoris,n.,chest`pecunia,pecuniae,f.,money`periculum,periculi,n.,danger `pilum,pili,n.,javelin; throwing spear`plebs,plebis,f.,the plebs / plebeians`poeta,poetae,m.,poet `Populares,Populium,m.pl.,the Populares; Popular party; democrats`populus,populi,m.,a people; a population`praemium,praemii,n.,reward `proelium,proelii,n.,battle`puella,puellae,f.,girl`puer,pueri,m.,boy; child`regia,regiae,f.,palace`regina,reginae,f.,queen `rex,regis,m.,king `res,rei,f.,thing;matter`rivus,rivi,m.,brook; stream `Roma,Romae,f.,Rome `salus,salutis,f.,health; safety`sanguis,sanguinis,m.,blood `scutum,scuti,n.,shield`senatus,senatus,m.,senate`senex,senis,m.,old man`servus,servi,m.,slave`silva,silvae,f.,forest` soror,sororis,f.,sister `tempestas,tempestatis,f.,storm; season`templum,templi,n.,temple `tempus,temporis,n.,time `terra,terrae,f.,land `timor,timoris,m.,fear `tumultus,tumultus,m.,uproar; confusion; commotion`urbs,urbis,f.,city (usually the city of Rome) `venenum,veneni,n.,poison `verbum,verbi,n.,word`via,viae,f.,road; way; path`vinculum,vinculi,n.,chain; fetter `vir,viri,m.,man; husband`vires,virium,f.pl.,strength`vis,——,f.,force; power; violence`vita,vitae,f.,life";
$pieces = explode("`",$words);
for($a = 0;$a<=count($pieces)-1; $a++)
{
  $pi[$a] = explode(",",$pieces[$a]);
  $wordnom = $pi[$a][0];
  $wordgen = $pi[$a][1];
  $wordgend = $pi[$a][2];
  $worddef = $pi[$a][3];
  if($wordnom=="domus")
  {
    $nom = "domus";
    $gen = "domi/domus";
    $dat = "domo/domui";
    $acc = "domum";
    $abl = "domo/domu";
    $nompl = "domus";
    $genpl = "domorum/domuum";
    $datpl = "domibus";
    $accpl = "domos/domus";
    $ablpl = "domibus";
  }
  else if (strpos($wordgend,"pl") !== false)
  {
    if(strpos($wordgend,"n")!==false)
    {
      if(substr($wordgen,-3)=="ium")
      {
        $root = substr($wordgen,0,-2);
        $nom = $root."a"."";
        $acc = $nom;
        $gen = $root."um"."";
        $dat = $root."ibus"."";
        $abl = $dat;
      }
      else if (substr($wordgen,-4)=="orum") {
        $root = substr($wordgen,0,-4);
        $nom = $wordnom."";
        $acc = $nom;
        $gen = $wordgen."";
        $dat = $root."is"."";
        $abl = $dat;
      }
      else if (substr($wordgen,-2)=="um") {
        $root = substr($wordgen,0,-2);
        $nom = $wordnom."";
        $acc = $nom;
        $gen = $wordgen."";
        $dat = $root."ibus"."";
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
        $root = substr($wordgen,0,-3);
        $nom = $root."es"."";
        $acc = $nom;
        $gen = $wordgen."";
        $dat = $root."ibus"."";       
        $abl = $dat;
      }
      else if (substr($wordgen,-4)=="orum")
      {
        $root = substr($wordgen,0,-4);
        $nom = $wordgen."";
        $gen = $wordgen."";
        $acc = $root."os";
        $dat = $root."is"."";
        $abl = $dat;  
      }
      else if (substr($wordgen,-4)=="um")
      {
        $root = substr($wordgen,0,-4);
        $nom = $wordnom."";
        $acc = $nom;
        $gen = $wordgen."";
        $dat = $root."ibus"."";
        $abl = $dat;
      }     
    }
  }
  else if(substr($wordgen,-2)=="ae")
  {
    $nom = $wordnom."";
    $root = substr($wordgen,0,-2);
    $gen = $root."ae";
    $dat = $root."ae";
    $acc = $root."am";
    $abl = $root."a";
    $nompl = $root."ae";
    $genpl = $root."arum";
    $datpl = $root."is";
    $accpl = $root."as";
    $ablpl = $root."is";
    
  }
  else if(substr($wordgen,-2)=="ei" && substr($wordnom,-2)=="es")
  {
    $nom = $wordnom."";
    $root = substr($wordgen,0,-2);
    $gen = $root."ei";
    $dat = $gen;
    $acc = $root."em";
    $abl = $root."e";
    $nompl = $root."es";
    $genpl = $root."erum";
    $datpl = $root."ebus";
    $accpl = $root."es";
    $ablpl = $root."ebus";
    
  }
  else if(substr($wordgen,-2)=="us")
  {
    if(strpos($wordgend,"n")!==false)
    {
      $nom = $wordnom."";
      $root = substr($wordgen,0,-2);
      $gen = $root."us";
      $dat = $root."u";
      $acc = $nom;
      $abl = $dat;
      $nompl = $root."ua";
      $genpl = $root."uum";
      $datpl = $root."ibus";
      $accpl = $root."ua";
      $ablpl = $root."ibus";
      
    }
    else
    {
      $nom = $wordnom."";
      $root = substr($wordgen,0,-2);
      $gen = $root."us";
      $dat = $root."ui";
      $acc = $root."um";
      $abl = $root."u";
      $nompl = $root."us";
      $genpl = $root."uum";
      $datpl = $root."ibus";
      $accpl = $root."us";
      $ablpl = $root."ibus";
        
    }
  }
  else if(substr($wordgen,-2)=="is")
  {
    $nom = $wordnom."";
    $root = substr($wordgen,0,-2);
    $gen = $root."is";
    $dat = $root."i";
    if(strpos($wordgend,"n")!==false)
    {
      $nompl = $root."a";
      $accpl = $root."a";
      $acc = $nom;
    }
    else
    {
      $nompl = $root."es";
      $accpl = $nompl;
      $acc = $root."em";
    }
    $abl = $root."e";
    $genpl = $root."um";
    $datpl = $root."ibus";
    $ablpl = $root."ibus";
    
  }
  else
  {
    if(strpos($wordgend,"n")!==false)
    {
      $nom = $wordnom."";
      $root = substr($wordgen,0,-1);
      $gen = $root."i";
      $dat = $root."o";
      $acc = $nom;
      $abl = $root."o";
      $nompl = $root."a";
      $genpl = $root."orum";
      $ablpl = $root."is";
      $accpl = $root."a";
      $datpl = $root."is";
      
    }
    else
    {
      $nom = $wordnom."";
      $root = substr($wordgen,0,-1);
      $gen = $root."i";
      $dat = $root."o";
      $acc = $root."um";
      $abl = $root."o";
      $nompl = $root."i";
      $genpl = $root."orum";
      $ablpl = $root."is";
      $accpl = $root."os";
      $datpl = $root."is";
    }
  }
  $toprint = "<strong>".$wordnom."</strong>".$gen.$dat.$acc.$abl.$nompl.$genpl.$datpl.$accpl.$ablpl;
  $toJSON = array("nom"=>$wordnom,"gen"=>$gen,"dat"=>$dat,"acc"=>$acc,"abl"=>$abl,"nompl"=>$nompl,"genpl"=>$genpl,"datpl"=>$datpl,"accpl"=>$accpl,"ablpl"=>$ablpl,$nom=>"nom",$dat=>"dat",$gen=>"gen",$dat=>"dat",$acc=>"acc",$abl=>"abl",$nompl=>"nompl",$genpl=>"genpl",$datpl=>"datpl",$accpl=>"accpl",$ablpl=>"ablpl","definition"=>$worddef);
  $json = json_encode($toJSON);
  $jsond = json_decode($json);
  $nomd = $jsond->{'nom'};
  $search = $_GET['search'];
  if($jsond->{'nom'}==$search || $jsond->{'gen'}==$search || $jsond->{'dat'}==$search || $jsond->{'acc'}==$search || $jsond->{'abl'}==$search || $jsond->{'nompl'}==$search || $jsond->{'genpl'}==$search || $jsond->{'datpl'}==$search || $jsond->{'accpl'}==$search || $jsond->{'ablpl'}==$search)
  {
    if(isset($search))
    {
     $end = "\"".$search."\" comes from ".$jsond->{'nom'}.", meaning ".$jsond->{'definition'}; 
    }
  }
}
?>
<html>
  <head>
    <title>Linguae</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/WOW.js"></script>
    <script type="text/javascript">new WOW().init();</script>
    <script type="text/javascript" src="js/jQuery.min.js"></script>
    <script type="text/javascript" src="js/ripple.js"></script>
    <script type="text/javascript" src="js/scrolling.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="http://www.parsecdn.com/js/parse-1.4.2.min.js"></script>
  </head>
  <body>
    <nav class="nav" align="center">
      <ul class="nav">
        <li><img src="img/legion.png" height="42"></li>
        <li class="logo">Linguae</li>
        <li class="notlogo">&middot;</li>
        <li class="notlogo logo">Latin Parser</li>
      </ul>
    </nav>
    <div class="jumbotron">
      <div class="container">
        <div class="col-md-3"></div>
        <div class="col-md-9">
          <h1>Linguae</h1>
          <form method="get">
            <input name="search" placeholder="The word of difficulty">
            <input type="submit" class="btn btn-primary">
          </form>
          <h3 id="w"><?php echo $end; ?></h3>
          <h2>N.B - ONLY WORKS WITH <b><u><i><strong>NOUNS</strong></i></u></b> found in <a href="http://phslatin.cmswiki.wikispaces.net/file/view/Latin3.ComprehensiveReviewVocabulary.docx/519408008/Latin3.ComprehensiveReviewVocabulary.docx">this</a> list</h2>
          <h3>Made with <i class="fa fa-heart animated infinite pulse" style="color:red"></i> and <a href="http://github.com/andykamath/linguae">Open-Sourced</a> by <a href="http://andykamath.com">Andy Kamath</a></h3>
        </div>
      </div>
    </div>
  </body>
</html>
