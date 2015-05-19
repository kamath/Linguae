<html>
	<head>
		<title>Latin Declining</title>
	</head>
	<body>
		<form method="get">
			<input name="nom" placeholder="nominative">
			<input name="gen" placeholder="genitive">
			<input name="gend" placeholder="gender">
			<input type="submit">
		</form>
	</body>
</html>
<?php
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
			else if (substr($wordgen,-4)=="orum") {
				$root = substr($wordgen, 0,-4);
				$nomacc = $wordnom."<br>";
				$gen = $wordgen."<br>";
				$databl = $root."is"."<br>";
				echo $nomacc;
				echo $gen;
				echo $databl;
				echo $nomacc;
				echo $databl;
				echo "<hr>";
			}
			else if (substr($wordgen,-2)=="um") {
				$root = substr($wordgen, 0,-2);
				$nomacc = $wordnom."<br>";
				$gen = $wordgen."<br>";
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
			if(substr($wordgen,-3)=="ium")
			{
				$root = substr($wordgen, 0,-3);
				$nomacc = $root."es"."<br>";
				$gen = $wordgen."<br>";
				$databl = $root."ibus"."<br>";
				echo $nomacc;
				echo $gen;
				echo $databl;
				echo $nomacc;
				echo $databl;
				echo "<hr>";	
			}
			else if (substr($wordgen,-4)=="orum")
			{
				$root = substr($wordgen, 0,-4);
				$nom = $wordgen."<br>";
				$gen = $wordgen."<br>";
				$acc = $root."os<br>";
				$databl = $root."is"."<br>";
				echo $nomacc;
				echo $gen;
				echo $databl;
				echo $acc;
				echo $databl;
				echo "<hr>";	
			}
			else if (substr($wordgen,-4)=="um")
			{
				$root = substr($wordgen, 0,-4);
				$nomacc = $wordnom."<br>";
				$gen = $wordgen."<br>";
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
	else if(substr($wordgen,-2)=="ae")
	{
		echo $wordnom."<br>";
		$root = substr($wordgen,0,-2);
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
	else if(substr($wordgen,-2)=="ei" && substr($wordnom,-2)=="es")
	{
		echo $wordnom."<br>";
		$root = substr($wordgen,0,-2);
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
	else if(substr($wordgen,-2)=="us")
	{
		if(strpos($wordgend, "n")!==false)
		{
			echo $wordnom."<br>";
			$root = substr($wordgen,0,-2);
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
			echo $wordnom."<br>";
			$root = substr($wordgen,0,-2);
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
	else if(substr($wordgen,-2)=="is")
	{
		echo $wordnom."<br>";
		$root = substr($wordgen, 0,-2);
		$gen = substr($wordgen,-2);
		echo $root.$gen."<br>";
		$dat = "i";
		echo $root.$dat."<br>";
		if(strpos($wordgend, "n.")!==false)
		{
			$acc = $wordnom;
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
		if($wordgend==" n.")
		{
			$acc = $wordnom;
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
		if(strpos($wordgend, "n")!==false)
		{
			echo $wordnom."<br>";
			$root = substr($wordgen,0,-1);
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
			echo $wordnom."<br>";
			$root = substr($wordgen,0,-1);
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
?>
