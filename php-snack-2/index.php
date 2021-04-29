<!-- Passare come parametri GET name, mail e age e
verificare (cercando i metodi che non conosciamo
nella documentazione) che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che
age sia un numero.Se tutto è ok stampare
“Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
  $name = $_GET['name'];
  $mail = $_GET['mail'];
  $validate_email = filter_var($mail, FILTER_VALIDATE_EMAIL);
  $chiocciola = strpos($mail, '@');
  $punto =  strpos($mail, '.');
  $age = $_GET['age'];
  $validate_age = filter_var($age,FILTER_VALIDATE_INT);
  var_dump($name,$mail,$age);
  // if (strlen($name) <= 3){
  //   var_dump(cazzo);
  // }

  if (strlen($name) > 3 && $validate_email  && $chiocciola && $punto  && $validate_age) {?>
        <p><?= $name .'<br>'. $mail .'<br>' . $age ?></p><?php
  }else {
    var_dump("hai sbagliato qualche campo");
  }

?>
