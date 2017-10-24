<?php

class ayam{
	public $suara = "kukukuruyuk begitulah bunyinya";
	public $kaki = 2;
}
$ayam1 = new ayam;
echo "Saya mempunyai empat ayam ia bersuara : ".$ayam1->suara. '<br>';
echo "Dan berjalan dengan  : ".$ayam1->kaki. 'kakinya'; 
echo "<br>". "<br>";

class kuda{
	public $suara = "iiihhaaa";
	public $kaki = 4;
}
$kuda1 = new kuda;
echo "Saya mempunyai kuda ia bersuara : ".$kuda1->suara. '<br>';
echo "Dan berjalan dengan  : ".$kuda1->kaki. 'kakinya'; 
echo "<br>". "<br>";

class harimau{
	public $suara = "Umauuuwww";
	public $kaki = 4;
}
$harimau1 = new harimau;
echo "Saya mempunyai kuda ia bersuara : ".$harimau1->suara. '<br>';
echo "Dan berjalan dengan  : ".$harimau1->kaki. 'kakinya'; 
echo "<br>". "<br>";

class buaya{
	public $makan = "daging";
	public $jalan= "merangkak";
}
$buaya1 = new buaya;
echo "Saya memelihara buaya ia bersuara : ".$buaya1->makan. '<br>';
echo "Dan berjalan dengan  : " .$buaya1->jalan.'dengan kakinya yang pendek'; 
echo "<br>". "<br>";
?>