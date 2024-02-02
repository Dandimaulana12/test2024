<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- soal test 1 -->
    <?php
    $a = 'aaabbcccddeddbzaa';
    // $array = array($a);
    // $array = array_map($a);

    // var_dump($array);


    ?>

    <!-- soal test 2 -->
    <?php
    $array = [9, 3, 7, 8, 2, 6, 1, 4, 10, 2, 2, 3];
    echo "soal test 2";
    echo "<br>";

    // foreach($new => $array = $array){

    // }


    ?>
    <!-- <form action="" method="POST">
        <input type="text" id="tipe_barang">
        <input type="text" id="jumlah_barang">
        <button type="submit" name="submit">Jumlah</button>
    </form> -->
    <!-- soal test 3 -->
    <?php
    echo "soal test 3";
    echo "<br>";
    // if (isset('submit')) {
        $harga_barangA = 99900;
        $tipe_barang_A = 'A';
        $jumlah_barang = 55;
        $hari_A = 'senin';
        // $total_a = $harga_barangA * $jumlah_barang;
        
        $harga_barangB = 49900;
        $tipe_barang_B = 'B';
        $jumlah_barang = 100;
        $hari_B = 'jumat';
        $total_b;
        // $total_b = $harga_barangB * $jumlah_barang;

        $diskon = 0;
        // untuk barang A
        if ($jumlah_barang > 50) {
            $diskon = $jumlah_barang * 5 / 100;
            $total_a = $harga_barangA - $diskon;
        }
        
        if ($hari_A === 'senin' || $hari_A === 'kamis') {
            $diskon = $jumlah_barang * 10 / 100;
            $total_a = $harga_barangA - $diskon;
        }

        echo $total_a;
        echo "<br>";

        // untuk barang B
        if ($jumlah_barang > 100) {
            $diskon = $jumlah_barang * 10 / 100;
            $total_b = $harga_barangB - $diskon;
        }

        if ($hari_B === 'jumat') {
            $diskon = $jumlah_barang * 5 / 100;
            $total_b = $harga_barangB - $diskon;
        }

        echo $total_b;
    // }
    ?>
    <?php

    ?>
    <script>
        const tipe_barang = document.getElementById('tipe_barang');
        const jumlah_barang = document.getElementById('jumlah_barang');
    </script>

</body>

</html>