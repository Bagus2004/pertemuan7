<?php
// Perulangan For adalah perulangan yang termasuk dalam counted loop, karena kita bisa menentukan jumlah perulangannya.
for($i = 0; $i < 10; $i++){
	echo "<h2> Perulangan ke-$i</h2>";
}
?>



<?php
// Perulangan while adalah perulangan yang termasuk dalam uncounted loop.
$ulangi =0;
while ($ulangi < 10){
	echo "<p> Ini merupakan Perulangan ke-$ulangi</p>";
	$ulangi++;
}
?>



<?php
// Perulangan Do/While tergolong uncounted loop sama seperti while. Perbedaan Do/While dengan while terletak pada cara iya memulai pengulangan.
//  Perulangan Do/While melakukan pengulangan 1 kali, lalu pengecekan kondisi. kalau while cek kondisi duu baru melakukan pengulangan
$ulangi =10;
do {
	echo "<p> Ini merupakan Perulangan ke-$ulangi</p>";
	$ulangi--;
} while ($ulangi > 0);
?>



<?php
// Perulangan foreach sama seperti perulangan for. Namun, ia lebih
// khusus digunakan untuk mecetak array.
$books = [
	"panduan belajar php untuk pemula",
	"membangun aplikasi web dengan php",
	"tutorial php dan mySql",
	"membuat chat bot dengan php"
];

echo "<h5> judul buku PHP: </h5>";
echo "<u1>";
foreach($books as $buku){

	echo "<li>$buku</li>"; 
}
echo "</u1>";
?>



<?php
// Perulangan bersarang adalah istilah untuk menyebut perulangan di
// dalam perulangan. Dalam bahasa inggris, perulangan bersarang disebut
// nested loop.
$i =0;
while($i < 10) {
	for($j = 0; $j < 10; $j++){
		echo " Ini merupakan perulangan ke ($i, $j)<br>";
        }
}
?>