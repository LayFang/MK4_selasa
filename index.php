<?php require 'controller.php';
/**
 * @var string $tajuk
 * @var integer $tahun
 * @var integer $mula
 * @var integer $akhir
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalendar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<table class="tajuk"...>
    <tr>
        <td><h1><?=$tajuk ?></h1></td>
        <td>
            <form action="./" method="post">
                <table class="form">
                    <tr>
                        <td><label for="bulan">Bulan</label></td>
                        <td><label for="tahun">Tahun</label></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><select name="bulan" id="bulan" required>
                                <option value="">Sila Pilih</option>
                                <?php
                                foreach (NAMABULAN as $nombor => $perkataan) {
                                    echo "<option value = \"$nombor\">$perkataan</option>";
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <input type="number" name="tahun" id="tahun"
                                   required value="<?= $tahun ?>" class="tahun">
                        </td>
                        <td>
                            <button type="submit">Papar</button>
                        </td>
                    </tr>
                </table>
        </td>
    </tr>
</table>

<table class="kal">
    <tr>
        <?php
        foreach (NAMAHARI as $nama) {
            echo "<th>$nama</th>";
        }
        ?>
    </tr>
    <?php
    $hb = ($mula * -1) +1;
    for ($baris = 0; $baris <6; $baris++){
        echo '<tr>';
        for ($kotak = 0; $kotak <7; $kotak++) {
            echo '<td>';
            if ($hb>0 and $hb <= $akhir){
                acara($hb);
            }
            echo '</td>';
            $hb++;
        }
        echo '</tr>';
        if ($hb >=$akhir) break;
    }
    ?>
</table>
</body>
</html> 