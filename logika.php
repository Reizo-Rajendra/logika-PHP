<?php

// ================================
// 1. Hanya satu kondisi positif
// Variabel: kondisi kutukan
// Jika kutukan muncul, maka Yuji Itadori akan mengusir kutukan tersebut
// ================================

$kutukan = true;

if ($kutukan) {
    echo "1. Yuji Itadori akan mengusir kutukan tersebut.<br><br>";
}



// ================================
// 2. Hanya satu kondisi negatif
// Variabel: energi kutukan
// Jika energi kutukan tidak cukup, maka Megumi tidak dapat memanggil shikigami
// ================================

$energiKutukan = 40;

if ($energiKutukan < 50) {
    echo "2. Megumi Fushiguro tidak dapat memanggil shikigami.<br><br>";
}



// ================================
// 3. Dua kondisi
// Variabel: kekuatan kutukan
// ================================

$kekuatanKutukan = "sangat kuat";

if ($kekuatanKutukan == "sangat kuat") {
    echo "3. Satoru Gojo akan turun tangan.<br><br>";
} else {
    echo "3. Yuji Itadori akan melawannya sendiri.<br><br>";
}



// ================================
// 4. Lebih dari 2 kondisi
// Variabel: tingkat bahaya kutukan
// ================================

$tingkatBahaya = "tinggi";

if ($tingkatBahaya == "rendah") {
    echo "4. Murid tahun pertama dapat mengusirnya.<br><br>";
}
elseif ($tingkatBahaya == "menengah") {
    echo "4. Memerlukan tim murid tahun kedua.<br><br>";
}
elseif ($tingkatBahaya == "tinggi") {
    echo "4. Penyihir tingkat 1 harus bertarung.<br><br>";
}
elseif ($tingkatBahaya == "khusus") {
    echo "4. Penyihir tingkat khusus atau Satoru Gojo harus turun tangan.<br><br>";
}
elseif ($tingkatBahaya == "jari sukuna") {
    echo "4. Situasi dianggap sangat berbahaya.<br><br>";
}
else {
    echo "4. Ancaman kutukan perlu dianalisis terlebih dahulu.<br><br>";
}



// ================================
// 5. Pengkondisian bersarang (Nested)
// Variabel: jenis jurus dan energi
// ================================

$jurus = "Domain Expansion";
$energi = 65;

if ($jurus == "Domain Expansion") {

    if ($energi >= 71) {
        echo "5. Domainnya sempurna.<br><br>";
    }
    elseif ($energi >= 51) {
        echo "5. Domainnya kurang sempurna.<br><br>";
    }
    elseif ($energi >= 30) {
        echo "5. Domainnya sangat rapuh.<br><br>";
    }
    else {
        echo "5. Energi tidak cukup untuk mengeluarkan jurus.<br><br>";
    }

}
elseif ($jurus == "Kagebunshin") {

    if ($energi >= 70) {
        echo "5. Akan tercipta 5000 clone.<br><br>";
    }
    elseif ($energi >= 51) {
        echo "5. Akan tercipta 1000 clone.<br><br>";
    }
    elseif ($energi >= 30) {
        echo "5. Akan tercipta 5 clone.<br><br>";
    }
    else {
        echo "5. Energi tidak cukup untuk mengeluarkan jurus.<br><br>";
    }

}
else {
    echo "5. Jenis jurus tidak dikenali.<br><br>";
}



// ================================
// 6. Pengkondisian dengan syarat DAN (&&)
// Variabel: kekuatan musuh dan situasi pertempuran
// ================================

$musuh = "kuat";
$situasi = "berbahaya";

if ($musuh == "kuat" && $situasi == "berbahaya") {
    echo "6. Satoru Gojo akan menggunakan Domain Expansion.<br><br>";
}
elseif ($musuh == "kuat" && $situasi == "aman") {
    echo "6. Para penyihir akan bertarung bersama.<br><br>";
}
elseif ($musuh == "normal" && $situasi == "berbahaya") {
    echo "6. Penyihir akan memanggil bala bantuan.<br><br>";
}
elseif ($musuh == "normal" && $situasi == "aman") {
    echo "6. Yuji Itadori saja sudah cukup.<br><br>";
}
else {
    echo "6. Keputusan tergantung situasi dan kondisi.<br><br>";
}



// ================================
// 7. Pengkondisian dengan syarat ATAU (||)
// Variabel: ancaman
// ================================

$ancaman = "tingkat khusus";

if ($ancaman == "tingkat khusus" || $ancaman == "jari sukuna") {
    echo "7. Semua penyihir di Tokyo Jujutsu High harus bersiap bertarung.<br><br>";
}
else {
    echo "7. Penyihir cukup membuat tim minimal 3 orang untuk membasmi kutukan.<br><br>";
}

?>