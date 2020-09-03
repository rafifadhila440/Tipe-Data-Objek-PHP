<?php
class produk{
    public $namaBarang,
           $merk,
           $harga;

    public function getCetak(){
        return "$this->merk, (Rp $this->harga)";
    }
    public function __construct($namaBarang="nama barang", $merk="merk",$harga=0){
        $this->namaBarang = $namaBarang;
        $this->merk=$merk;
        $this->harga=$harga;
    }

}
$produk1 = new produk("Vivobook S14","Asus",12000000);
$produk2 = new produk("Hardisk Eksternal","Seagate",1000000);
$produk3 = new produk("ThinkPad","Lenovo",5000000);
$produk4 = new produk("Pen Tablet","Wacom",800000);


echo "Nama Barang Laptop: " . $produk1->getCetak();
echo "<br>";
echo "Nama Barang Aksesoris: " . $produk2->getCetak();
echo "<br>";
echo "Nama Barang Laptop: " . $produk3->getCetak();
echo "<br>";
echo "Nama Barang Aksesoris: " . $produk4->getCetak();
?>