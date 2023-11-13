<?php
//6.Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
function sortArr($arr)
{
    sort($arr);
    echo "Mảng sắp xếp theo thứ tự tăng dần là: ". implode(', ', $arr);    
}
$array = array(5, 2, 8, 10, 1, -100, -10, 2000);
sortArr($array);

//7.Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function calculateFactorial($n)
{
    //Kiểm tra xem đầu vào có phải là số nguyên dương không
    if (!is_int($n) || $n < 0) {
        return "Nhập lại một số nguyên dương!";
    } elseif ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * calculateFactorial($n - 1); //Sử dụng đệ quy
    }
}
$n = 5;
echo "Giai thừa của $n là: " . calculateFactorial($n);

// 8.Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function isPrime($number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function findPrimesInRange($start, $end)
{
    $primes = [];
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }
    return $primes;
}
$a = 1;
$b = 50;
$primeNumbers = findPrimesInRange($a, $b);
echo "Các số nguyên tố trong khoảng từ $a đến $b là: " . implode(', ', $primeNumbers);

// 9.Viết chương trình PHP để tính tổng của các số trong một mảng.
function calculateSum($array)
{
    $sum = 0;
    foreach ($array as $number) {
        $sum += $number;
    }
    return $sum;
}
$Array = array(1, 5, 7, 27, 3);
echo "Tổng của mảng đã cho là: " . calculateSum($Array);

// 10.Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
function fibonacciInRange($start, $end)
{
    $fibonacciNumbers = array();
    $a = 0;
    $b = 1;
    while ($a <= $end) {
        if ($a >= $start) {
            $fibonacciNumbers[] = $a;
        }
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }
    return $fibonacciNumbers;
}
$a = 1;
$b = 20;
$fibonacciNumbersInRange = fibonacciInRange($a, $b);
echo "Các số Fibonacci trong khoảng từ $a đến $b là: ". implode(', ', $fibonacciNumbersInRange);

// 11.Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
function isArmstrong($number)
{
    // Chuyển số thành một mảng các chữ số
    $digits = str_split($number);
    // Tính tổng lũy thừa của các chữ số
    $sum = 0;
    $n = count($digits);
    foreach ($digits as $digit) {
        $sum += pow($digit, $n);
    }
    // Kiểm tra xem tổng lũy thừa có bằng số ban đầu không    
    if ($sum == $number) {
        echo $number . " là số Armstrong.";
    } else {
        echo $number . " không phải là số Armstrong.";
    }
}
$n = 8208;
echo isArmstrong($n);

//12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
function randomInsertElement($element, $position, $arr)
{
    $lengthArr = count($arr);
    $index = $position - 1;
    if ($index > $lengthArr - 1) {
        $index = $lengthArr;
    } elseif ($index < 0) {
        $index = 0;
    }
    $arr1 = array_slice($arr, 0, $index);
    $arr2 = array_slice($arr, $index);

    $resultArray = array_merge($arr1, array($element), $arr2);
    // echo "mang cuoi" . var_dump($resultArray) . "<br/>";
    return $resultArray;
}
$cars = array("Volvo", "BMW", "Toyota");
echo "Mang ban dau: " .implode(', ', $cars). "<br>";
echo "Mang sau khi chen: " .implode(', ', randomInsertElement("vin", -1, $cars));

//13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function removeDuplicateElement($arr)
{
    $arrDuplicatesSingle = array_unique(array_diff_assoc($arr, array_unique($arr)));
    return array_diff($arr, $arrDuplicatesSingle);
}
$cars = array("Volvo", "Volvo", "Volvo", "Toyota");
echo "Mang ban dau". implode(', ', $cars). "<br>";
echo "Mang sau khi loai bo phan tu lap: " .implode(', ', removeDuplicateElement($cars));

//14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function findIndexOfElement($arr, $element)
{
    return array_search($element, $arr);
}
$var = "BMW";
$cars = array("Volvo", "Vin", "BMW", "Toyota");
echo "Mang ban dau" . implode(', ', $cars). "<br>";
echo "Phần tử $var có index là: " .findIndexOfElement($cars, $var);

//15.Viết chương trình PHP để đảo ngược một chuỗi.
$string = "hello world";
$reverseString = strrev($string);
echo "Chuoi dao nguoc cua {$string} la: {$reverseString}";

//16.Viết chương trình PHP để tính số lượng phần tử trong một mảng.
$cars = array("Volvo", "BMW", "Toyota", "Toyota");
echo "Mang ban dau" . "<br>". implode(',',$cars);
$lengthArr = count($cars);
echo "So luong phan tu trong mang la: $lengthArr";

//17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function handleCheckPlaindrome($string)
{
    $string = str_replace(' ', '', $string);
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    $string = strtolower($string);

    $reverse = strrev($string);

    return $string == $reverse;
}
$string = "12321";
if (handleCheckPlaindrome($string)) {
    echo "{$string} is Palindrome";
} else {
    echo "{$string} is not Palindrome";
}

//18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function demSoLanXuatHien($mang, $phaneTuCanDem)
{
    $dem = 0;

    // Duyệt qua mảng và tăng biến đếm nếu phần tử trùng khớp
    foreach ($mang as $phaneTu) {
        if ($phaneTu == $phaneTuCanDem) {
            $dem++;
        }
    }
    return $dem;
}
$mangDuLieu = array(1, 2, 3, 4, 2, 5, 2, 6, 2, 7);
$phaneTuCanDem = 2;
$soLanXuatHien = demSoLanXuatHien($mangDuLieu, $phaneTuCanDem);
echo "Số lần xuất hiện của phần tử $phaneTuCanDem trong mảng là: $soLanXuatHien";

//19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
$mangDuLieu = array(5, 2, 8, 1, 6);
rsort($mangDuLieu);
echo "Mảng sau khi sắp xếp giảm dần: ". implode(',',$mangDuLieu);

//20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
$mangDuLieu = array(1, 2, 3, 4, 5);
// Thêm phần tử vào đầu mảng
$phaneTuDau = 0;
array_unshift($mangDuLieu, $phaneTuDau);

// Thêm phần tử vào cuối mảng
$phaneTuCuoi = 6;
array_push($mangDuLieu, $phaneTuCuoi);

echo "Mảng sau khi thêm phần tử vào đầu và cuối: ". implode(',',$mangDuLieu);

//21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function timSoLonThuHai($mang)
{    
    rsort($mang); //Sắp xếp mảng giảm dần và lấy phần tử thứ 2
    $soLonThuHai = $mang[1];

    return $soLonThuHai;
}
$mangDuLieu = array(5, 2, 8, 1, 6);
$soLonThuHai = timSoLonThuHai($mangDuLieu);
echo "Số lớn thứ hai trong mảng là: $soLonThuHai";

//22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function timUSCLN($a, $b) {
    //Kiểm tra số nguyên dương
    if (!is_int($a) || !is_int($b) || $a<=0 || $b<=0){
        return "$a và $b không hợp lệ!";
    }

    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function timBSCNN($a, $b) {
    //Kiểm tra số nguyên dương
    if (!is_int($a) || !is_int($b) || $a<=0 || $b<=0){
        return "$a và $b không hợp lệ!";
    }

    $bsc = ($a * $b) / timUSCLN($a, $b);
    return $bsc;
}
$so1 = -1;
$so2 = 18;
$uscln = timUSCLN($so1, $so2);
$bscnn = timBSCNN($so1, $so2);
echo "Ước số chung lớn nhất của $so1 và $so2 là: $uscln". "<br>";
echo "Bội số chung nhỏ nhất của $so1 và $so2 là: $bscnn". "<br>";

//23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
function kiemTraSoHoanHao($so)
{
    if ($so <= 0) {
        return false;
    }

    $tongUocSo = 0;
    for ($i = 1; $i <= $so / 2; $i++) {
        if ($so % $i == 0) {
            $tongUocSo += $i;
        }
    }
    return $tongUocSo == $so;
}
$soCanKiemTra = 28;
if (kiemTraSoHoanHao($soCanKiemTra)) {
    echo "$soCanKiemTra là số hoàn hảo.";
} else {
    echo "$soCanKiemTra không là số hoàn hảo.";
}

// 24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function findOddMax($array)
{
    $OddMax = 0;
    foreach ($array as $arr) {
        if ($arr % 2 == 1 && $OddMax < $arr) {
            $OddMax = $arr;
        }
    }
    if ($OddMax == 0) {
        $OddMax = "Mảng không có số lẻ";
    }
    return $OddMax;
};
$n = array(2, 4, 1, 5, 6, 7, 9, 22, 11, 98, 202, 101);
echo "Số lẻ lớn nhất trong mảng là: " . findOddMax($n);

// 25 Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function checkPrime($num)
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
$n=10;
if (checkPrime($n)){
    echo "$n là số nguyên tố!";
} else {
    echo "$n không là số nguyên tố!";
}

// 26 Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function findPosNum($array)
{    
    rsort($array); //Sắp xếp theo thứ tự giảm dần, phần tử đầu tiên là phần tử lớn nhất
    $posMax = $array[0];
    if ($posMax <0) {
        return "Mảng không có số dương";
    }
    return $posMax;
}
$arr = array('-1', '-20', '0', '10', '110', '102', '-100', '10000');
echo 'Số dương lớn nhất trong mảng là: ' . findPosNum($arr);

// 27 Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function findNegNum($array)
{
    $negMax = 1;
    //tìm số âm đầu tiên
    foreach ($array as $arr) {
        if ($arr < 0) {
            $negMax = $arr;
            break;
        }
    }
    //tìm số âm lớn nhất
    foreach ($array as $arr) {
        if ($arr < 0 && $arr > $negMax) {
            $negMax = $arr;
        }
    }
    if ($negMax == 1) {
        $negMax = "Mảng không có số âm";
    }
    return $negMax;
}
$arr = array('-100', '-20', '0', '10', '110', '102', '-100', '10000', '-1');
echo 'Số âm lớn nhất trong mảng là: ' . findNegNum($arr);

// 28 Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function sumOdd($n)
{
    if ($n <= 0) {
        echo "Không tính được tổng các số lẻ từ 1 đến $n";
    } else {
        $sumOdd = round($n / 2) ** 2;
        return $sumOdd;
    }
}
$n = 7;
echo "Tổng các số lẻ từ 1 đến $n là: " . sumOdd($n);

// 29 Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
function findSquareNum($start, $end)
{    
    $start = round($start);//Lấy khoảng nguyên
    $squareNums = [];//Tạo mảng rỗng để chứa số chính phương tìm được
    for ($i = $start; $i <= $end; $i++) {
        if (sqrt($i) == intval(sqrt($i))) {
            $squareNums[] = $i;
        }
    } 
    return $squareNums;   
};
$a =1;
$b= 25;
echo "Các số chính phương từ $a đến $b là: " . implode(', ',findSquareNum($a,$b));

// 30 Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function checkStrpos($str1, $str2)
{
    if (strpos($str1, $str2) !== false) {
        echo "{$str2} có trong {$str1}!";
    } else {
        echo "{$str2} không có trong {$str1}!";
    }
}
$stra = "Today is Monday";
$strb = "is";
checkStrpos($stra, $strb);