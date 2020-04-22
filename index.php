<?php
function checkFirstCharacterToUpper($string)
{
    $regexp = '/^[A-Z]/';
    if (preg_match($regexp, $string)) {
        return true;
    } else {
        return false;
    }
}

$string1 = 'Nguyen van Nam';

$string2 = 'NGUYEN VAN NAM';

$string3 = 'nguyen van Nam';

if (checkFirstCharacterToUpper($string1)) {
    echo 'Ky tu dau tien cua chuoi 1 co viet hoa ' . '<br>';
} else {
    echo 'Ky tu dau tien cua chuoi 1 khong viet hoa ' . '<br>';
}
if (checkFirstCharacterToUpper($string2)) {
    echo 'Ky tu dau tien cua chuoi 2 co viet hoa ' . '<br>';
} else {
    echo 'Ky tu dau tien cua chuoi 2 khong viet hoa ' . '<br>';
}
if (checkFirstCharacterToUpper($string3)) {
    echo 'Ky tu dau tien cua chuoi 3 co viet hoa ' . '<br>';
} else {
    echo 'Ky tu dau tien cua chuoi 3 khong viet hoa ' . '<br>';
}