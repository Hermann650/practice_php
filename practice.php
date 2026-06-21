<?php

    // PrintEven - Buat program untuk mencetak angka genap dari 1 sampai 20.
    //
    // Ketentuan:
    // Gunakan loop dan if statement
    //
    // Test Case:
    // Output:
    // 2
    // 4
    // 6
    // ...
    // 20
    function printEven(int $n) {
        for ($i=1; $i <= $n; $i++) {
            if ($i % 2 == 0) {
                echo $i;
                echo "\n";
            }
        }
    }
    printEven(20); 
    echo "\n";

    // Grading Status - Buat program untuk menentukan status kelulusan siswa.
    //
    // Ketentuan:
    // Nilai >= 75 → "Lulus"
    // Selain itu → "Tidak Lulus"
    //
    // Data:
    // {90, 65, 80, 70, 100}
    //
    // Test Case:
    // Output:
    // Nilai: 90 - Lulus
    // Nilai: 65 - Tidak Lulus
    // Nilai: 80 - Lulus
    // Nilai: 70 - Tidak Lulus
    // Nilai: 100 - Lulus
    function gradingStatus(array $grades) {
        foreach ($grades as $pass) {
            if ($pass >= 75) {
                echo "Lulus \n";
            } else {
                echo "Tidak Lulus \n";
            }
        }
    }
    gradingStatus([90, 65, 80, 70, 100]);
    echo "\n";

    // Soal: Count Positive Numbers In List
	//
	// Diberikan sebuah list bilangan bulat.
	// Hitunglah berapa banyak bilangan POSITIF (> 0) dalam list tersebut.
	//
	// Ketentuan:
	// Angka 0 tidak dihitung sebagai positif
	//
	// Test Case:
	// List: -5 3 0 8 -2 1 → 3

    function countPositiveNumber(array $nums): int {
        $count = 0;
        foreach ($nums as $tums) {
            if ($tums > 0) {
                $count++;
            }
        }
        return $count;
    }

    echo countPositiveNumber([3]);
    echo "\n";
    echo countPositiveNumber([-5, 3, 0, 8, -2, 1]);
    echo "";

    // Soal: Sum Of Digits
    //
    // Diberikan sebuah bilangan bulat positif.
    // Jumlahkan semua digit dari bilangan tersebut.
    //
    // Test Case:
    // 1234  → 10  (1+2+3+4)
    // 99    → 18  (9+9)
    // 5     → 5
    function sumDigit(int $num): int {
        $gum = (string) $num;
        $rum = str_split($gum);
        $sum = 0;
        foreach ($rum as $tum) {
            $sum = $sum + $tum;
        }
        return $sum;
    }

    echo sumDigit(1234);
    echo "\n";
    echo sumDigit(99);
    echo "\n";
    echo sumDigit(5);
    echo "\n";
?>