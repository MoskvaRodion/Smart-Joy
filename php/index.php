<?php
$Name=$_POST['Name'];
$adress=$_POST['adress'];

$subject="Тема: Обратная связь";
$mestext="Спасибо, Вам за обращение, в ответе напиште товар который Вас заинтересовал.";
$headers ="От: Умная радость";
mail($adress, $subject, $mestext, $headers);
$mainpage = "../index.html";
header("Refresh: 4; url='$mainpage'");
echo "<p align='center'><b>Сообщение отправлено.</b><br>
Через 4 сек. Вы будете перенаправлены
<a href='$mainpage'>на главную страницу</a></p>";