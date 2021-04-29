<?php
    //Passare come parametri GET name, mail e age e verificare (cercando i metodi
    //che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
    //che mail contenga un punto e una chiocciola e che age sia un numero.
    //Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
  ?>

<?php
  $name = $_GET['name'];
  $mail = $_GET['mail'];
  $age = $_GET['age'];

  $result_name = strlen($name);
  $result_mail = strpos($mail, '.' && '@' );
  $result_age = is_int($age);

//
if ($result_name > 3 || $result_mail === true || $result_age === true) {
   ?>

   <div class="">
     accesso riuscito
   </div>
<?php }  else { ?>
  <div class="">
    accesso negato
  </div>
<?php } ?>
