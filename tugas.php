<?php

abstract class Laptop {
    // abstract class adalah class yang berperan sebagai kerangka dasar bagi class turunannya
    abstract public function Procie();  
    abstract public function VGA();  
    abstract public function Harga(); 
}

class Nitro extends laptop {
    // abstract method adalah method yang memaksa harus diimplementasikan(diterapkan) ke semua kelas turunannya, dan ditulis tanpa isi melainkan hanya signaturenya saja
    // extends berfungsi sebagai pewaris (mewarisi)
    // fungsi return digunakan untuk mengembalikan string ke abstract method
    public function Procie() {  
        return "Laptop ini memilki Processor I5-11400H<br/>";    
        
   }  
          
   public function VGA(){  
        return "Laptop ini memiliki VGA RTX 3050<br/>";  
   }  
     
   public function Harga() {  
        return "Laptop ini memiliki harga Rp13.199.000<br/>";  
   }  
}  

class Predator extends laptop {
    public function Procie() {  
        return "Laptop ini memilki Processor i7-11800H<br/>";  
   }  
          
   public function VGA(){  
        return "Laptop ini memiliki VGA RTX 3070<br/>";  
   }  
     
   public function Harga() {  
        return "Laptop ini memiliki harga Rp22.999.000<br/>";  
   }  
}  
//membuat objek baru yang mengacu pada isi class yang kita panggil misalnya objek nitro mengacu pada isi class nitro
$Nitro = new Nitro;  
$Predator = new Predator;  
   
 echo "<b>Laptop Acer Nitro 5 Memiliki Spesifikasi : </b><br/>";
 //syntax ini digunakan untuk memanggil/menampilkan kembali apa yang dikembalikan oleh return sebagai hasil dari objek yang berkaitan, misalnya jika kita tulis $Nitro->Procie maka kita menampilkan apa yang disampai objek do bagian procie
 echo $Nitro->Procie();  
 echo $Nitro->VGA();  
 echo $Nitro->Harga();  
   
 echo "<br/>";  
 echo "<b>Laptop Acer Predator Helios 300 Memiliki : </b><br/>";  
 echo $Predator->Procie();  
 echo $Predator->VGA();
 echo $Predator->Harga();
 echo "<br/>";
 echo "<br/>";
?>


<?php

interface Hewan {
     public function bersuara();
 }
 
 class Anjing implements Hewan {
     public function bersuara() {
         echo "Guk guk!";
     }
 }
 
 class Kucing implements Hewan {
     public function bersuara() {
         echo "Meong meong!";
     }
 }
 $kucing = new Kucing();
 $anjing = new Anjing();
 echo "<b>Suara Kucing : </b><br/>";  
 $kucing->bersuara();
 echo "<br/>";
 echo "<b>Suarai Anjing : </b><br/>";  
 $anjing->bersuara();
 
// PERBEDAAN YANG KITA CARI!

// dari penulisan abstract menggunakan extends dan interface menggunakan implement

// abstract class sebenarnya adalah sebuah class, sehingga memiliki semua sifat dari class biasa (punya konstruktor).
// hanya saja sifatnya masih abstrak, karena itu biasanya method kosong/belum di implementasikan.
//Interface adalah sebuah blok signature kumpulan method tanpa tubuh (konstan).

// abstract class didepannya menggunakan absract publik function pada abstract method = abstract public function Makan();
// apabila interface langsung public function, tidak menggunakan awalan interface seperti pada abstract class = public function Makan();  

// abstract class harus menggunakan class di depan classnya = abstract class ayam{}
// interface tidak usah menggunakan class di depan classnya = interface ayam{}

// kalo kita menggunakan implement kita tidak bisa sekaligus menggunakan extends
// apabila kita menggunakan extends bisa sekaligus menggunakan implement

?>



