<?php
    //penulisan kode php
    echo "Hello, world\n";

    //aturan dasar penulisan kode php
    $andi = "Andi\n";
    echo $andi;

    //pengertian variabel dan cara penulisan
    $i;
    $nama;
    $Umur;
    $_lokasi_memori;
    $ANGKA_MAKSIMUM;

    //cara menampilkan nilai variabel
    $a = 'Saya sedang belajar PHP'; 
    $b=5; 

    print $a;
    echo $b;

    $a = 5;
    $b = "Sedang belajar PHP $a\n";

    echo $b; //hasil: saya sedang belajar php 5

    //pengertian tipe data integer
    $umur=21;
    $harga=15000;
    $rugi=-500000;

    echo $umur; //21
    echo "\n";
    echo $harga; //15000
    echo "\n";
    echo $rugi; //-500000
    echo "\n";

    $a=14;
    $b=16;
    $c=$a + $b;
    echo $c; //30

    $d=$a * $b;
    echo $d; //224

    //pengertian tipe data float
    $angka_float1= 0.78; echo "\n";
    $angka_float2= 14.99; echo "\n";
    $angka_scientific1=0.314E1; echo "\n";
    $angka_scientific2=0.3365E-3; echo "\n";

    echo $angka_float1; echo "\n"; //0.78
    echo $angka_float2; echo "\n"; //14.99
    echo $angka_scientific1; echo "\n"; //3.14
    echo $angka_scientific2; echo "\n"; //0.0003365

    $a=10.66;
    $b=12.4;
    $c= $a + $b;
    echo $c; echo "\n"; //23.06

    $d=$a / $b;
    echo $d; //0.85967741935484 

    //pengertian tipe data string
    $string1='ini adalah string sederhana'; echo "\n";

    $string2="ini adalah string yang bisa memiliki beberapa baris"; echo "\n";

    $string3='Dia berkata: "I\ ll be back"'; echo "\n";

    echo $string1; echo "\n";
    echo $string2; echo "\n";
    echo $string3; echo "\n";

    //pengertian tipe data boolean
    $benar=true;
    $salah=false;

    echo "benar = $benar, salah = $salah\n"; //hasil: benar = 1, salah = 

    //pengertian operator aritmatika
    $hasil1= -3;
    $hasil2= 3+5;
    $hasil3= 8-4.5;
    $hasil4= 2*5;
    $hasil5= 3+8/5-3;
    $hasil6= 10 % 4;

    echo "$hasil1:"; var_dump($hasil1); echo "\n";
    echo "$hasil2:"; var_dump($hasil2); echo "\n";
    echo "$hasil3:"; var_dump($hasil3); echo "\n";
    echo "$hasil4:"; var_dump($hasil4); echo "\n";
    echo "$hasil5:"; var_dump($hasil5); echo "\n";
    echo "$hasil6:"; var_dump($hasil6);


?>