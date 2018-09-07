<?
  $name=$_POST['name'];
  //$recapture=$_POST['g-recaptcha-response'];
  mail('eduard.zhulega@yandex.ru','Сообщение с сайта', 'From: ${name}');
  print_r($_POST);
?> 
