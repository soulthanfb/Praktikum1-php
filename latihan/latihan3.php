<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
</head>

<body>
    <?php
    $ar_prodi = ["SI" => "Sistem Informasi", "TI" => "Teknik Informatika", "BD" => "Bisnis Digital"];
    $ar_skill = ["HTML" => 10, "CSS" => 10, "JavaScript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "Python" => 30, "Java" => 50];
    $ar_domisili = ["Jakarta", "Bogor", "Depok", "Tanggerang", "Bekasi", "Lainnya"]
    ?>






    <fieldset style="background-color: aquamarine;">
        <legend>
            <h1>Form Registrasi IT Club Data Science</h1>
        </legend>

        <table>
            <tr>
                <th>Form Registrasi</th>
            </tr>
            <tr>
                <th>
                    <form action="" method="post">
                </th>
            </tr>
            <tr>
                <td>NIM :</td>
                <td><input type="text" name="nim" value="" size="30"></td>
            </tr>
            <tr>
                <td>Nama :</td>
                <td><input type="text" name="nama" value="" size="30"></td>
            </tr>

            <tr>
                <td>Jenis Kelamin :</td>
                <td><input type="radio" name="jk" value="Laki-laki" size="30"> Laki-laki
                    <input type="radio" name="jk" value="Perempuan" size="30"> Perempuan
                </td>
            </tr>
            <tr>
                <td>
                    Program Studi :
                </td>
                <td>
                    <select name="prodi">
                        <?php
                        foreach ($ar_prodi as $prodi => $p) { ?>
                            <option value="<?= $prodi ?>"><?= $p ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Skill Programming :</td>
                <td>
                    <?php
                    foreach ($ar_skill as $skill => $s) {
                    ?>
                        <input type="checkbox" name="skill[]" value="<?= $s ?>"><?= $skill ?>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td><button name="proses">Simpan</button></td>
            </tr>
            </form>
        </table>

    </fieldset>
    
    <?php
    
    if(isset($_POST['proses'])){
        $nim = $_POST ['nim'];
        $nama = $_POST ['nama'];
        $jk = $_POST ['jk'];
        $prodi = $_POST ['prodi'];
        $skill = $_POST ['skill'];
   
    ?>
    NIM : <?= $nim ?><br/>
    Nama : <?= $nama ?><br/>
    Jenis Kelamin : <?= $jk ?><br/>
    Prodi : <?= $prodi ?><br/>
    Skill Programming : <?= $s ?><br/> 


</php
function skor_skill($total){
    if ($total >= 100 && $total <= 150) {
                $return = "Sangat Baik";
            } elseif ($total >= 60 && $total <= 100) {
                $return = "Baik";
            } elseif ($total >= 40 && $total <= 60) {
                $return = "Cukup";
            } elseif ($total >= 0 && $total <= 40) {
                $return = "Kurang";
            } else {
                $return = "Tidak Memadai";
            } 
        }
        echo 'Kategori Skill :' skor_skill($total);
    }
    ?>
    <?php } ?>

    
    

</body>

</html>