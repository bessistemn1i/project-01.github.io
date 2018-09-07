<?
  $name=$_POST['name'];
  $email=$_POST['email'];
  $text=$_POST['message'];
  $recapture=$_POST['g-recaptcha-response'];
  $msg="Вам прислали сообщение с сайта\nИмя: {$name}\nНомер телефона: {$email}\nСообщение: {$message}\n";
  mail('eduard.zhulega@yandex.ru','Сообщение с сайта', $msg,'From: ${name}');
  echo "Ваше сообщение успешно отправлено";
  print_r($_POST);
?> 
