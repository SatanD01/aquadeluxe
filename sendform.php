<?php
//Сбор данных из полей формы. 
$name = $_POST['name'];// Берём данные из input c атрибутом name="name"
$phone = $_POST['phone']; // Берём данные из input c атрибутом name="phone"
$city = $_POST['city']; // Берём данные из input c атрибутом name="mail"

$token = "6086081027:AAETHblCkonArvcY7_BsoxTvjVnHDt49h1Q"; // Тут пишем токен
$chat_id = "-1001937333750"; // Тут пишем ID группы, куда будут отправляться сообщения
$sitename = "aquadeluxe.uz"; //Указываем название сайта

$arr = array(

  'Заказ с сайта: ' => $sitename,
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  'Город' => $city
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

?>