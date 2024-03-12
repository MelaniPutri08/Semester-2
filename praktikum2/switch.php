<?php 
//Bikin variabel Nilai A,B,C,D,E
$grade = "A";
//Bikin predikat
$predikat;

//Bikin percabangan switch 
switch ($grade) {
    case "A":
        $predikat = "Sangat Baik";
        break;
    case "B":
        $predikat = "Baik";
        break;
    case "C":
        $predikat = "Cukup";
        break;  
    case "D":
        $predikat = "Kurang";
        break;  
    case "E":
        $predikat = "Wasallam";
        break;
    default:
        $predikat = "Nilai Tidak Ditemukan";
        break;
}

echo "predikat : " . $predikat; 

?>