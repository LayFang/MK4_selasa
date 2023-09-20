<?php

const NAMABULAN = [
    1 => 'Januari',
    2 => 'Februari',
    3 => 'Mac',
    4 => 'April',
    5 => 'Mei',
    6 => 'Jun',
    7 => 'Julai',
    8 => 'Ogos',
    9 => 'September',
    10 => 'Oktober',
    11 => 'November',
    12 => 'Disember'
];

const NAMAHARI = ['AHAD', 'ISNIN', 'SELESA', 'RABU', 'KHAMIS', 'JUMMAT', 'SABTU'];

if (isset($_POST['bulan'])) {
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
} else {
    $bulan = date( 'n');
    $tahun = date( 'Y');
}

$tarikh = mktime( 0, 0, 0, $bulan, 1, $tahun);
$mula = date( 'w', $tarikh);
$akhir = date( 't', $tarikh);

$tajuk = NAMABULAN[$bulan] . '' . $tahun;

function acara($hb) {
    global $bulan, $tahun;
    echo "$hb";
}
?>