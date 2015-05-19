<html>
	<head>
		<title>Latin Declining</title>
	</head>
	<body>
		<form method="get">
			<input name="nom" placeholder="nominative">
			<input name="gen" placeholder="genitive">
			<input name="gend" placeholder="gender (if plural write .pl., i.e. n.pl. for neuter plural)">
			<input type="submit">
		</form>
	</body>
</html>
<?php
	if(isset($_GET['nom']) && isset($_GET['gen']) && isset($_GET['gend']))
	{
	$wordnom = $_GET['nom'];
	$wordgen = $_GET['gen'];
	$wordgend = $_GET['gend'];
	echo "<strong>".$wordnom."</strong><br>";
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
			echo $nom;echo $acc;echo $gen;echo $dat;echo $abl;
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
			echo $nom;echo $acc;echo $gen;echo $dat;echo $abl;
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
		echo "<hr>";
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
		echo "<hr>";
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
			echo "<hr>";
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
			echo "<hr>";	
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
		echo "<hr>";
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
			echo "<hr>";
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
			echo "<hr>";	
		}
	}
	echo "<strong>".$wordnom."</strong><br>".$gen.$dat.$acc.$abl.$nompl.$genpl.$datpl.$accpl.$ablpl;
}

?>
