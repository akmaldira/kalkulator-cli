<?php
function perkalian($angka1,$angka2){
    $hasil = $angka1 * $angka2;
    echo "Hasil dari $angka1 * $angka2 = $hasil";
}
function pembagian($angka1,$angka2){
    $hasil = $angka1 / $angka2;
    echo "Hasil dari $angka1 / $angka2 = $hasil";
}
function penjumlahan($angka1,$angka2){
    $hasil = $angka1 + $angka2;
    echo "Hasil dari $angka1 + $angka2 = $hasil";
}
function pengurangan($angka1,$angka2){
    $hasil = $angka1 - $angka2;
    echo "Hasil dari $angka1 - $angka2 = $hasil";
}

echo "1. Perkalian\n2. Pembagian\n3. Penjumlahan\n4. Pengurangan\n";
echo "Masukkan operasi yang akan anda jalankan: ";
$pilih = trim(fgets(STDIN));
echo "Masukkan angka pertama: ";
$angka1 = trim(fgets(STDIN));
echo "Masukkan angka kedua: ";
$angka2 = trim(fgets(STDIN));
if ($pilih == 1){
    perkalian($angka1,$angka2);
}
elseif ($pilih == 2){
    pembagian($angka1,$angka2);
}
elseif ($pilih == 3){
    penjumlahan($angka1,$angka2);
}
elseif ($pilih == 4){
    pengurangan($angka1,$angka2);
}
else{
    echo "Masukkan pilihan yang benar!!!";
}
?>