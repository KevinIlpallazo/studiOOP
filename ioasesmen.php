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
        <input type="number" name="angka1" id="angka1"><br>
        <label for="angka2">Angka 2 : </label>
        <input type="number" name="angka2" id="angka2"><br>
        <input type="submit" name="kirim" value="tekan" >
    </form>
<?php class Aritmatika {
    private $angka1;
    private $angka2;

    public function __construct($angka1, $angka2) {
        $this->angka1 = $angka1;
        $this->angka2 = $angka2;
    }

    protected function tambah() {
        return $this->angka1 + $this->angka2;
    }

    public function kurang() {
        return $this->angka1 - $this->angka2;
    }

    public function kali() {
        return $this->angka1 * $this->angka2;
    }

    public function bagi() {
        return $this->angka1 / $this->angka2;
    }

    public function modulus() {
        return $this->angka1 % $this->angka2;
    }

}

class Kalkulator extends Aritmatika {
    public function tampilkanHasil() {
        echo "Penjumlahan: " . $this->tambah() . "<br>";  
        echo "Pengurangan: " . $this->kurang() . "<br>";  
        echo "Perkalian: " . $this->kali() . "<br>";      
        echo "Pembagian: " . $this->bagi() . "<br>";
        echo "Modulus: " . $this->modulus() . "<br>"; 
    }
}

?>

<?php
    if (isset($_POST['kirim'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];

        $kalkulator = new Kalkulator($angka1, $angka2);
        $kalkulator->tampilkanHasil();
    }
?>
</body>
</html>