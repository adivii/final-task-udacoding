<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Nilai</title>
</head>
<body>
    <form action="index.php" method="get">
        <input type="number" name="inAngka" placeholder="Masukkan Nilai">
        <br>
        <input type="text" name="status" placeholder="Status" value="<?php    
            if(isset($_GET['buttHitung'])){
                $nilai = $_GET['inAngka'];
                if($nilai<60 && $nilai>=0){
                    echo 'Tidak Lulus';
                }
                else if($nilai>=60 && $nilai<=80){
                    echo 'Memuaskan';
                }
                else if($nilai>80 && $nilai<=90){
                    echo 'Sangat Memuaskan';
                }
                else if($nilai>90 && $nilai<=100){
                    echo 'Terpuji';
                }
                else{
                    echo 'Nilai Tidak Valid';
                }
            }
        ?>">
        <br>
        <input type="submit" value="Hitung" name="buttHitung">
    </form>
</body>
</html>