<?php
$topo = array(
	array(
		"land"=>"Japan",
		"stad"=>"Tokyo"
	),
	array(
		"land"=>"Mexico",
		"stad"=>"Mexico City"
	),
	array(
		"land"=>"USA",
		"stad"=>"New York City"
	),
	array(
		"land"=>"India",
		"stad"=>"Mumbai"
	),
	array(
		"land"=>"Korea",
		"stad"=>"Seoul"
	),
	array(
		"land"=>"China",
		"stad"=>"Shanghai"
	),
	array(
		"land"=>"Nigeria",
		"stad"=>"Lagos"
	),
	array(
		"land"=>"Argentina",
		"stad"=>"Buenos Aires"
	),
	array(
		"land"=>"Egypt",
		"stad"=>"Cairo"
	),
	array(
		"land"=>"UK",
		"stad"=>"London"
	)
);
$punt = count($topo)/9;
$punten = 0;
foreach ($topo as $a) {
	echo "Welke hoofdstad heeft ".$a["land"]."? \r\n";
	$b = readline();
	if (strtolower($b) == strtolower($a['stad'])) {
		echo "Correct! + ".round($punt, 2)." punten! \r\n";
		$punten = $punten+$punt;
	} else {
		echo "Helaas, ".$b." is niet de hoofdstad van ".$a['land'].". \r\n";
		echo "Het correcte antwoord is: ".$a['stad']." \r\n";
	}
}
$cijfer = round($punten,1)+1;
echo "Jouw cijfer -> ".$cijfer;
?>
