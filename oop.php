<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class php {
  public $name;
  public $age;

  function set_name($name) {
    $this->name = $name;
  }
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

$huy = new php();
$huy->set_name('Lưu Quang Huy');
$huy->set_age('13');
$tien = new php();
$tien->set_name('Tien');
$tien->set_age('15');
$kieu = new php();
$kieu->set_name('kieu');
$kieu->set_age('14');
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