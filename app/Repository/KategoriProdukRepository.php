<?php
namespace App\Repository;
use App\Models\KategoriProduk;
class KategoriProdukRepository{
    public function getAll(){
        return KategoriProduk::latest()->get();
    }
}
?>