<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno
avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
<?php
  $classe = [
    [
    'nome'=> 'Giuseppe',
    'cognome' => 'Placida',
    'voti' => [10,8,5,7,6],
    ],
    [
    'nome'=> 'Antonio',
    'cognome' => 'Bho',
    'voti' => [10,8,5,7,6],
    ],
    [
    'nome'=> 'Turuzzu',
    'cognome' => 'caputo',
    'voti' => [10,8,5,7,6],
    ],
  ];

  for ($i=0; $i <count($classe) ; $i++) {
    $somma = 0;
    for ($j=0; $j < count($classe[$i]['voti']); $j++) {
        $somma += $classe[$i]['voti'][$j];

    }
    ?>
    <ul>
      <li> <?= $classe[$i]['nome'] ?> </li>
      <li> <?= $classe[$i]['cognome'] ?> </li>
      <li> <?= $somma / $j ?> </li>
    </ul>
  <?php
  }
?>
