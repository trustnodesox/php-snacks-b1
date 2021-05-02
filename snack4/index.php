<?php
$classe = [
  [
    'nome' => 'Lorenzo'
    'cognome' => 'De Sossi'
    'voti' => [5,7,4,9]
  ],
  [
    'nome' => 'Antonio'
    'cognome' => 'Baraldi'
    'voti' => [7,10,4,6]
  ],
  [
    'nome' => 'Franco'
    'cognome' => 'Ricciardi'
    'voti' => [7,8,9,3]
  ],
];

for ($i=0; $i < count($classe); $i++) {
?>

<div class="">
<?= $classe[$i]['nome']?>
<?= $classe[$i]['cognome']?>
<?= array_sum($classe[$i]['voti'])  / count($classe[$i]['voti'])?>
</div>

<?php
}
?>
