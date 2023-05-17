<?php
	$a = 10;
	$b = 3;

	$tambah = $a + $b;
	$kurang = $a - $b;
	$kali 	= $a * $b;
	$bagi 	= $a / $b;
	$sisa 	= $a % $b;
	$pangkat= pow($a, $b);

	echo "a = $a <br> b = $b <hr>";
	echo "$a + $b = $tambah <br>";
	echo "$a - $b = $kurang <br>";
	echo "$a * $b = $kali <br>";
	echo "$a / $b = $bagi <br>";
	echo "$a % $b = $sisa <br>";
	echo "$a ^ $b = $pangkat <br>";

	//increment
	$a++;
	echo "a++ = $a <br>";
	#decrement
	$b--;
	echo "b-- = $b <hr>";

	// Operator Perbandingan
	

	$samadengan		= $a == $b;
	$tdksamadengan	= $a != $b;
	$lbhdarisamadengan	= $a >= $b;
	$lbhdari			= $a > $b;
	$krgdarisamadengan	= $a <= $b;
	$krgdari 			= $a < $b;
	$negasisamadengan	= $a !($samadengan);

	echo "$a == $b = $samadengan <br>";
	echo "$a != $b = $tdksamadengan <br>";
	echo "$a >= $b = $lbhdarisamadengan <br>";
	echo "$a > $b = $lebihdari <br>";
	echo "$a <= $b = $krgdarisamadengan <br>";
	echo "$a < $b = $krgdari <br>";
	echo "!($a == $b) = $negasisamadengan <br>";
?>
