<?php 
$token = "1560346469:AAHDlIXPKBf-MRp3XmOH1OtZflL7rx2y4NQ";
$chat_id = "-549935692";

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$message = $_POST['message'];
$kit = $_POST['kit_name'];
$resolution = $_POST['field1'];
$type = $_POST['field2'];
$count1 = $_POST['count_1'];
$count2 = $_POST['count_2'];
$count3 = $_POST['count_3'];
$time = $_POST['field3'];
$price = $_POST['price'];
$mkad = $_POST['user_km'];
$file = $_POST['user_file'];


$arr = array(
	'Имя: ' => $name,
	'Телефон: ' => $phone,
	'Сообщение: ' => $message,
	'Комплект/Тип: ' => $kit,
	'Где: ' => $resolution,
	'КМ от МКАД: ' => $mkad,
	'Тип: ' => $type,
	'Камер в помещении: ' => $count1,
	'Камер на улице: ' => $count2,
	'Камер антивандальных: ' => $count3,
	'Время хранения записи: ' => $time,
	'Цена в калькуляторе: ' => $price,
	'Файл: ' => $file,
  );

  foreach($arr as $key => $value) {
	$txt .= "<b>".$key."</b> ".$value."%0A";
  };

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
	echo "Good";
  } else {
	echo "Error";
  }

?>