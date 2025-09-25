<?php
//Setup awal
echo "--POLGAN MART--<br>";
echo "Daftar Pembelian<br><br>";
$nama_barang = ["Floridina", "Kacang dua Kelinci", "Lemonilo", "lays", "Le mineral"];
$harga_barang = [5000, 1000, 4000, 6000, 3000];

$beli = [];
$jumlah = [];
$total = [];
$grandtotal = 0;

// jumlah jenis barang yang dibeli random (2–5)
$jenis_beli = rand(2, 5);

// ambil index unik langsung dengan array_rand
$barang_terpilih = array_rand($nama_barang, $jenis_beli);

// loop untuk simpan hasil pembelian
foreach($barang_terpilih as $index){  
    $qty = rand(1,5); // jumlah beli random
    
    $beli[] = $index;
    $jumlah[] = $qty;
    $total[] = $harga_barang[$index] * $qty;
}

// tampilkan struk
foreach($beli as $key => $index){
    echo "Nama Barang : ".$nama_barang[$index]."<br>";
    echo "Harga Barang : ".$harga_barang[$index]."<br>";
    echo "Jumlah Beli : ".$jumlah[$key]."<br>";
    echo "Total Harga : ".$total[$key]."<br><br>";
    
    $grandtotal += $total[$key];
}


