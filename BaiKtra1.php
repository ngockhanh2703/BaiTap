<?php
//Bài 1: Viết một chương trình PHP để kiểm tra xem một số nguyên dương nào đó có phải là số nguyên tố hay không
function isPrime($number)
{
    //Kiểm tra số là nguyên dương hay không
    if ($number < 2) {
        return false;
    }
    //Kiểm tra số là số ngto hay không
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function findPrimesInRange($start, $end)
{
    //lấy khoảng số nguyên
    $start = round($start);
    
    //Tạo mảng rỗng để chứa các số ngto có trong khoảng 
    $primes = []; 
    //Kiểm tra từng phần tử có là số ngto hay không, nếu có thì thêm vào mảng
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }

    return $primes;
}
$a = 1;
$b = 100;
$primeNumbers = findPrimesInRange($a, $b);
echo "Các số nguyên tố trong khoảng từ $a đến $b là: " . implode(', ', $primeNumbers);













//Bài 2: Viết một ứng dụng PHP để quản lý thông tin về sản phẩm trong một cửa hàng sử dụng mảng kết hợp
echo "<br>";
// Tạo một mảng chứa thông tin về sản phẩm
$products = array(
    array("name" => "Bàn học gấp gọn", "price" => 21000, "quantity" => 100),
    array("name" => "Ghế ngồi", "price" => 15000, "quantity" => 50),
    array("name" => "Ghế gấp gọn tiện lợi", "price" => 50000, "quantity" => 10),
);

// Hiển thị thông tin của tất cả sản phẩm
foreach ($products as $item) {
    echo "Sản phẩm: " . $item["name"] . "<br>";
    echo "Giá: " . $item["price"] . "<br>";
    echo "Số lượng: " . $item["quantity"] . "<br>";
    echo "<br>";
}
//Hàm để tính tổng giá trị của tất cả sản phẩm
function calculateTotalValue($products) {
    $totalValue = 0;

    foreach ($products as $item) {
        $totalValue += $item["price"] * $item["quantity"];
    }

    return $totalValue;
}

// Tính tổng giá trị của tất cả sản phẩm
$totalValue = calculateTotalValue($products);
echo "Tổng giá trị của tất cả sản phẩm là: $" . $totalValue;
