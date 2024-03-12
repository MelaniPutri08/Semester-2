<?php

function kelulusan($nilai_akhir)
{
    if($nilai_akhir > 55)
    {
        return 'KAMU LULUS';
    } 
    elseif($nilai_akhir < 56)
    {
        return 'KAMU TIDAK LULUS';
    }
    else
    {
        return 'TERDAPAT KESALAHAN';
    }
}

function grade($nilai_akhir)
{
    if ($_nilai <= 40) {
        return 'E';
    } elseif($_nilai <= 60) {
        return 'D';
    } elseif($_nilai <= 70) {
        return 'C';
    } elseif($_nilai <= 90) {
        return 'B';
    } elseif($_nilai <= 100) {
        return 'A';
    }else{
        return 'TERDAPAT KESALAHAN';
    }
}




?>