<?php
function kiemTraSoNguyenTo($n) {
    // Số nhỏ hơn 2 không phải là số nguyên tố
    if ($n < 2) {
        return false;
    }
    
    // Kiểm tra các ước số từ 2 đến căn bậc hai của n
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    
    return true;
}

// Kiểm tra thử với số 7
$soCanKiemTra = 7;

if (kiemTraSoNguyenTo($soCanKiemTra)) {
    echo "$soCanKiemTra là số nguyên tố.";
} else {
    echo "$soCanKiemTra không phải là số nguyên tố.";
}
?>