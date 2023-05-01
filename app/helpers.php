<?php
/**
 * fungsi untuk membuat format rupiah
 */
function formatRupiah($nilai){
    $nilai = (int) str_replace('.','',$nilai);
    return number_format($nilai,0,',','.');
}

function rangeUang( $total ){
    $data = range(50000,100000);
    var_dump($data);
}
