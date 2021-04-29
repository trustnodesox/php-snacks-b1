<?php
$primagiornata = [
  [
    'squadracasa' => 'napoli',
    'squadraospite' => 'roma',
    'punticasa' => '28',
    'puntiospiti' => '64'
  ],
  [
    'squadracasa' => 'fiorentina',
    'squadraospite' => 'cerveteri',
    'punticasa' => '75',
    'puntiospiti' => '37'
  ]
];


var_dump($primagiornata);
for ($i=0; $i < count($primagiornata); $i++) {  ?>
  <div class="">
    <?= $primagiornata[$i]['squadracasa'] ; ?> -
    <?= $primagiornata[$i]['squadraospite'] ; ?> |
    <?= $primagiornata[$i]['punticasa'];  ?> -
    <?= $primagiornata[$i]['puntiospiti'] ; ?>
  </div>
<?php }   ?>
