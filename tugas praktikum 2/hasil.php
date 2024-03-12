<?php
if (isset($_POST['submit'])){
    $customer = $_POST['customer'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];

    $ar_produk = [
        'TV' => 4200000,
        'KULKAS' => 3100000,
        'MESIN CUCI' => 3800000
    ];

    $produk_value = isset($ar_produk[$produk]) ? $ar_produk[$produk] :"Tidak ditemukan";
    $total_belanja = number_format($produk_value * $jumlah, 0, ',', '.');

    echo "Nama Customer : $customer</br>";
    echo "Produk Pilihan : $produk</br>";
    echo "Jumlah Beli : $jumlah</br>";
    echo "Total Belanja : $total_belanja</br>";
}
?>