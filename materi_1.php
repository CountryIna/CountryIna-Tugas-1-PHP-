<h3> MATERI PHP 1 </h3?

<?php
//Array
	$jurusan = array ("Sistem Informasi", "Bahasa Inggris", "Ekonomi");
	echo $jurusan [0];
	echo $jurusan [1];
	echo $jurusan [2];

//index	
	echo "Saya belajar PHP";
	$belajar = "belajar pemograman";
	echo $belajar;

//operator
	$a=10;
	$b=5;
	
	echo ($a + $b);
	echo "<br>";
	echo ($a / $b);
	echo "<br>";
	echo ($a * $b);
	echo "<br>";
	echo ($a - $b);
	echo "<br>";

//kondisi_if
	$harga=100000;
	if ($harga  > 150000) {
		echo "Tidak saya beli";

	}else if($harga > 80000) {
		echo "Akan saya tawar";

	}else{
		echo "Saya akan beli";
	}
	
	//Jika 1 kondisi : menggunakan if
	//Jika 2 kondisi : menggunakan if else
	//Jika 3 kondisi : menggunakan else if
?>