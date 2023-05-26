<?php class Aritmatika
{
    private $angka1;
    private $angka2;

    public function __construct($angka1, $angka2)
    {
        $this->angka1 = $angka1;
        $this->angka2 = $angka2;
    }

    public function tambah()
    {
        return $this->angka1 + $this->angka2;
    }

    public function kurang()
    {
        return $this->angka1 - $this->angka2;
    }

    public function kali()
    {
        return $this->angka1 * $this->angka2;
    }

    public function bagi()
    {
        return $this->angka1 / $this->angka2;
    }

    public function modulus()
    {
        return $this->angka1 % $this->angka2;
    }
}

class Kalkulator extends Aritmatika
{
    public function tampilkanHasil()
    {
        echo "Penjumlahan: " . $this->tambah() . "<br>";
        echo "Pengurangan: " . $this->kurang() . "<br>";
        echo "Perkalian: " . $this->kali() . "<br>";
        echo "Pembagian: " . $this->bagi() . "<br>";
        echo "Modulus: " . $this->modulus() . "<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="#" method="post">
        <label for="angka1">Angka 1 : </label>
        <input type="number" name="angka1" min="0" max="100" id="angka1"><br>
        <label for="angka2">Angka 2 : </label>
        <input type="number" name="angka2" min="0" max="100" id="angka2"><br>
        <label for="operasi">Operasi :</label>
        <select name="operasi" id="operasi">
            <option value="tambah">Penjumlahan (+)</option>
            <option value="kurang">Pengurangan (-)</option>
            <option value="kali">Perkalian (x)</option>
            <option value="bagi">Pembagian (/)</option>
            <option value="modulus">Modulus (%)</option>
        </select>
        <input type="submit" name="kirim" value="tekan">
    </form>
</body>
</html>

<?php
if (isset($_POST['kirim'])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operasi = $_POST['operasi'];


    $kalkulator = new Kalkulator($angka1, $angka2);

    switch ($operasi) {

        case 'tambah':
            $hasil = $kalkulator->tambah();
            break;
        case 'kurang':
            $hasil = $kalkulator->kurang();
            break;
        case 'kali':
            $hasil = $kalkulator->kali();
            break;
        case 'bagi':
            $hasil = $kalkulator->bagi();
            break;
        case 'modulus':
            $hasil = $kalkulator->modulus();
            break;
        default:
            echo "Pilih operasi terlebih dahulu.";
            break;
    }

    if ($hasil >= 90) {
        $nilai = "A";
    }elseif ($hasil >= 80){
        $nilai = "B";
    }elseif ($hasil >= 70){
        $nilai = "C";
    }else {
        $nilai = "D";
    }

    echo "Hasil: " . $hasil . "<br>";
    echo "Nilai: " . $nilai;
}
?>