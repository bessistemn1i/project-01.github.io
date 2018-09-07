<?
  $name=$_POST['name'];
  $recapture=$_POST['g-recaptcha-response'];
  $msg="Вам прислали сообщение с сайта\nИмя: {$name};
  mail('eduard.zhulega@yandex.ru','Сообщение с сайта', 'From: ${name}');
  echo "Ваше сообщение успешно отправлено";
  print_r($_POST);
?> 
