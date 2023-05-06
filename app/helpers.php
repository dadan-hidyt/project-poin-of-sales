<?php
/**
 * fungsi untuk membuat format rupiah
 */
function formatRupiah($nilai){
    $nilai = (int) str_replace('.','',$nilai);
    return number_format($nilai,0,',','.');
}

