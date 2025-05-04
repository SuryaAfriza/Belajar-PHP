<?php
$nama="Surya Afriza"; // String
$nilai_bhs=2; // Integer
$nilai_ipa=2.5; // Double
$bentuk_boolean = true; // Boolean

echo("Nama Mahasiswa= ".$nama."<br>");
echo("Nilai Bahasa = ".$nilai_bhs."<br>");
echo("Nilai IPA = ".$nilai_ipa."<br>");

if($bentuk_boolean == true){
    echo("Boolean Menunjukkan Nilai Benar <br>");
}

// Konversi ke float
$nilai_bhs = (float)$nilai_bhs;
// Konversi ke integer
$nilai_ipa = (int)$nilai_ipa;

echo("Nilai Bahasa setelah dikonversi ke float = ".$nilai_bhs."<br>");
echo("Nilai IPA setelah dikonversi ke integer = ".$nilai_ipa."<br>");
?>
