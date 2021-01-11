<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/* 
Set Name and age
Get Name and age
*/
class getSetName {
  public $name;
  public $age;

  /*Function setname and set age để dùng để truyền giá trị */
  function set_name($name) {
    $this->name = $name;
  }
   /*Function getname and get age để dùng để nhận giá trị */
  function get_name() {
    return $this->name;
  }
  function set_age($age) {
    $this->age = $age;
  }
  function get_age() {
    return $this->age;
  }

}

/* Truyền và lấy*/
$huy = new getSetName();
$huy->set_name('Lưu Quang Huy');
$huy->set_age('13');
/* truyền và lấy */
$tien = new getSetName();
$tien->set_name('Tien');
$tien->set_age('15');
/* truyền và lấy */
$kieu = new getSetName();
$kieu->set_name('kieu');
$kieu->set_age('14');
/* Truy cập vào $huy để lấy giá trị in ra */
echo $huy->get_name();
echo "<br>";
echo $huy->get_age();
echo "<br>";
echo $tien->get_name();
echo "<br>";
echo $tien->get_age();
echo "<br>";
echo $kieu->get_name();
echo "<br>";
echo $kieu->get_age();
?>
</body>
</html>