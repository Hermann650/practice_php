<?php
    // Mini Task - 1 - Array Map + String Functions
    // Diberikan array nama-nama berikut:
    // $names = ["  alice ", "BOB", "charlie  ", "DIANA", "  eve"];
    //
    // Gunakan array_map() untuk:
    // 1. Hapus spasi di awal dan akhir setiap nama (trim)
    // 2. Ubah setiap nama menjadi Title Case (ucfirst + strtolower)
    //
    // Lalu gunakan perulangan untuk mencetak hasil dengan format:
    // "1. Alice"
    // "2. Bob"
    // dst.

    $names = ["  alice ", "BOB", "charlie  ", "DIANA", "  eve"];

    $formatted = array_map(fn($name) => ucfirst(strtolower(trim($name))), $names);
    for ($i = 0; $i < count($formatted); $i++) {
        echo $i + 1 . "." . " " . $formatted[$i] . "\n";
    }

    echo "\n";

    // Mini Task - 2 - Array Filter + String Functions
    // Diberikan array kalimat-kalimat berikut:
    // $sentences = ["Hello World", "php is awesome", "I Love PHP", "learning is fun", "PHP Rules"];
    //
    // Gunakan array_filter() untuk menyaring hanya kalimat yang
    // mengandung kata "PHP" (case-sensitive).
    //
    // Lalu gunakan perulangan untuk mencetak setiap kalimat yang lolos filter
    // beserta panjang karakternya (strlen), dengan format:
    // "- Hello World (11 chars)"  <- contoh jika lolos

    $sentences = ["Hello World", "php is awesome", "I Love PHP", "learning is fun", "PHP Rules"];

    $phpSentences = array_filter($sentences, fn($s) => str_contains($s, "PHP"));
    
    foreach ($phpSentences as $sentence) {
        echo $sentence . " " . "(" . strlen($sentence) . " " . "chars" . ")" . "\n";
    }

    echo "\n";

    // Mini Task - 3 - Array Reduce + String Functions + Looping
    // Diberikan array harga-harga berikut:
    // $prices = [30000, 75000, 120000, 45000, 90000, 50000];
    //
    // Gunakan array_reduce() untuk menghitung total harga setelah diskon.
    // Aturan diskon:
    // - Jika harga > 50000, berikan diskon 10%
    // - Jika harga <= 50000, tidak ada diskon
    //
    // Terakhir cetak total: "Total: Rp xxx.xxx"
    // ============================================================

    // $prices = [30000, 75000, 120000, 45000, 90000, 50000];

    // $total = array_reduce($prices, function ($total, $price) {
    //     $final = /* ... */;
    //     return /* ... */;
    // }, 0);

    // echo "Total: Rp " . /* ... */ . "\n";

    // Mini Task - 4 - Class Persegi Panjang
    // Lengkapi code berikut untuk menghitung luas dan permukaan persegi panjang 
    // Area : P * L
    // Perimeter : 2 * (P + L)
    // class Rectangle {
    //     public float $length;
    //     public float $width;

    //     public function __construct(float /*...*/, float /*...*/) {
    //         // code here ...
    //     }

    //     public function getArea(): float {
    //         // code here ...
    //     }

    //     public function getPerimeter(): float {
    //         // code here ...
    //     }
    // }

    // $rectangle = new Rectangle(10, 5);
    // echo "Rectangle Area: ".$rectangle->getArea()."\n";       
    // echo "Rectangle Perimeter: ".$rectangle->getPerimeter()."\n"; 

    // Mini Task - 5 - Class Persegi
    // Buat class, object, method, dan props untuk menghitung keliling dan luas persegi
    // Area : S * S
    // Perimeter : 4 * S
    // Code here...  
?>
