<?php
  if(isset($_GET['nom']) && isset($_GET['gen']) && isset($_GET['gend']))
  {
  $wordnom = $_GET['nom'];
  $wordgen = $_GET['gen'];
  $wordgend = $_GET['gend'];
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
        <li class="logo">Linguae Latinae</li>
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
            <input name="nom" placeholder="nominative">
            <input name="gen" placeholder="genitive">
            <input name="gend" placeholder="gender (if plural write .pl., i.e. n.pl. for neuter plural)">
            <input type="submit" class="btn btn-primary">
          </form>
          <h3 id="w"><?php echo $toprint; ?></h3>
        </div>
      </div>
    </div>
  </body>
</html>

