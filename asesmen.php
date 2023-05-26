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
        echo "Penjumlahan   : " . $this->tambah() . "<br>";  
        echo "Pengurangan   : " . $this->kurang() . "<br>";  
        echo "Perkalian     : " . $this->kali() . "<br>";      
        echo "Pembagian     : " . $this->bagi() . "<br>";
        echo "Modulus       : " . $this->modulus() . "<br>"; 
    }
}

$kalkulator = new Kalkulator(20, 2);
$kalkulator->tampilkanHasil();

?>