<?php
$Name=$_POST['Name'];
$adress=$_POST['adress'];

$subject="Тема: Обратная связь";
$mestext="Спасибо $Name за сообщение, мы ответим в ближайщее время.";
$headers ="От: Лунная соната";
mail($adress, $subject, $mestext, $headers);
$mainpage = "../index.html";
header("Refresh: 4; url='$mainpage'");
echo "<p align='center'><b>Сообщение отправлено.</b><br>
Через 4 сек. Вы будете перенаправлены
<a href='$mainpage'>на главную страницу</a></p>";
