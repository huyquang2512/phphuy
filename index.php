<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<?php
  // Bài tập về cú pháp 
  echo "Đây là cú pháp in của echo<br>";
  print "Đây là cú pháp in của print<br>";

// Bài tập về biến
echo 'Cú pháp của biến là : $Tenbien <br>';
echo 'PHP sau khi khai báo biến, nó sẽ tự hiểu kiểu dữ liệu truyền vào nếu đúng định dạng và khai báo chính xác biến <br>';
$true_age = 16;
$true_name = "Luu Quang Huy";

echo "$true_age <br>";
echo $true_name;
echo "<br>";


// Bài tập về hằng 
define("TEN_HANG1",     "Đây là giá trị 1");
define("TEN_HANG2",     "Đây là giá trị 2");
define("TEN_HANG3",     "Đây là giá trị 3");
echo TEN_HANG1;

// Bài tập về toán tử

$So1 = 10;
$So2 = 30;
$Cong = $So1 + $So2;
$Tru = $So2 - $So1;
$Nhan = $So1 * $So2;
$Chia = $So2 / $So1;
echo "<br>";
echo $Cong;
echo "<br>";
echo $Tru;
echo "<br>";
echo $Nhan;
echo "<br>";
echo $Chia;
echo "<br>";


// Bài tập về Điều Khiển Luồng

if($So2 > $So1){
  echo "Số 30 lớn hơn số 10";
} else{
  echo "End";
}
echo "<br>";



switch ($Cong) {
  case "40":
    echo "Tổng bằng 40";
    break;
  
  default:
    echo "End";
    break;
}


// Bài tập về Vòng lặp

for($i = $So1; $i < $So2; $i++){
  echo $i;
  echo "<br>";
}


$i = 0;
while ($i <= 10) {
  echo $i;
  echo "<br>";
  $i++;
}


do{
  $i++;
}
while( $i < 10 );
echo $i;
echo "<br>";


$arr = array("name1"=> "Huy", "name2"=>"Kieu", "name3"=>"tien");
foreach ($arr as $name => $value) {
  echo $name . " - " . $value . "<br>";
}
echo "<br>";
//Bài tập về mảng
$diem = [
  'Hùng' => [
      'Toán' => 8,
      'Lý' => 7,
      'Hóa'  => 9
  ],
  'Huy' => [
      'Toán' => 7,
      'Lý' => 8,
      'Hóa'  => 8
  ],
  'Hưng' => [
      'Toán' => 9,
      'Lý' => 9,
      'Hóa'  => 9
  ],
];

foreach ($diem as $ten => $cacdiem) {
  echo $ten, PHP_EOL . "<br>";
  foreach ($cacdiem as $monhoc => $d)
      echo "  $monhoc: $d", PHP_EOL . "<br>";

}

echo "<br>";

$arr = array("name1"=> "Huy", "name2"=>"Kieu", "name3"=>"tien");
foreach ($arr as $name => $value) {
  echo $name . " - " . $value . "<br>";
}
  
  $name1[0] = "Huy";
  $name1[1] = "Tien";
  $name1[2] = "Kieu";
  $name1[3] = "Long";
  $name1[4] = "Hoang";
  echo "<br>";
  echo $name1[3];
  $name1[3] = "Tuan";
  echo $name1[3];
  echo "<br>";
  $name = array("Huy", "Kieu", "Tien");
  echo "Danh Sach Thuc Tap " . $name[0] . ", " . $name[1] . " , " . $name[2] . ".";
  
/// Bài tập về chuỗi String
echo "<br>";
$bien_name = "LuuQuangHuy";

$bien_in = "Em tên là $bien_name";
echo $bien_in;
echo "<br>";

// Bài tập về Get Post và Biến được định nghĩa cho trước
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['input'];
  echo $name;
}
echo "<br>";echo "<br>";
if( $_GET["name"] || $_GET["age"] )
{
   echo "Chào mừng ". $_GET['name']. "<br />";
   
   exit();
};
// Date 
echo "Hôm nay là thứ ". date("l") . "  Tháng  " . date("F"). "  Ngày  " . date("d"). "  bây giờ là " . date("h").date("a"). "  bây giờ là ".date("i")." Hôm nay là ngày thứ " .date("z"). " Trong năm". "   " . date("r");

// debug
echo "<br>";



?>


<body>
<form method="POST">
  Name: <input type="text" name="input">
  <input type="submit">
</form>
<br><br><br>


<form action="<?php $_PHP_SELF ?>" method="GET">
         Họ tên: <input type="text" name="name" />
         <input type="submit" />
      </form>


</html>