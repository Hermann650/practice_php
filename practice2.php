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

    $prices = [30000, 75000, 120000, 45000, 90000, 50000];

    $total = array_reduce($prices, function ($total, $price) {
        $final = $price > 50000 ? $price * 0.9 : $price;
        return $final + $total;
    }, 0);

    echo "Total: Rp " . number_format($total) . "\n";
    


    class Shape {
        public string $name;

        public function __construct(string $name) {
            $this->name = $name;
        }

        public function render(): string {
            $render = $this->getArea() . "cm" . " " . "&" . " " . $this->getPerimeter() . "cm";
            return "The area and perimeter is: " . $render; 
        }

        public function render3d(): string {
            $render = $this->getVolume() . "cm^3";
            return "The volume of " . $this->name . " is: " . $render;
        }
    }
    // Mini Task - 4 - Class Persegi Panjang
    // Lengkapi code berikut untuk menghitung luas dan permukaan persegi panjang 
    // Area : P * L
    // Perimeter : 2 * (P + L)
    class Rectangle extends Shape {
        public float $length;
        public float $width;

        public function __construct(float $length, float $width) {
            $this->length = $length;
            $this->width = $width;
        }

        public function getArea(): float {
            return $this->length * $this->width;
        }

        public function getPerimeter(): float {
            return 2 * ($this->length + $this->width);
        }
    }

    $rectangle = new Rectangle(10, 5); 
    echo $rectangle->render() . "\n";
    // Mini Task - 5 - Class Persegi
    // Buat class, object, method, dan props untuk menghitung keliling dan luas persegi
    // Area : S * S
    // Perimeter : 4 * S
    class Square extends Shape {
        public float $side;

        public function __construct(float $side) {
            $this->side = $side;
        }

        public function getArea(): float {
            return $this->side * $this->side;
        }

        public function getPerimeter(): float {
            return 4 * $this->side;
        }
    }

    $square = new Square(20);
     echo $square->render() . "\n"; 
    class Block extends Shape {
        public float $height;
        public float $width;
        public float $length;

        public function __construct(string $name, float $height, float $width, float $length) {
            parent::__construct($name);
            $this->height = $height;
            $this->width = $width;
            $this->length = $length;
        }

        public function getVolume(): float {
            return $this->length * $this->width * $this->height;
        }
     }

     $block = new Block("blockyBlock", 100, 200, 90);
     echo $block->render3d() . "\n";
    $new = new Shape("Johnny");
    echo $new->name;
    //echo $new->width;
?>
