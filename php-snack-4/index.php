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
    'voti' => [5,2,5,1,6],
    ],
    [
    'nome'=> 'Turuzzu',
    'cognome' => 'Caputo',
    'voti' => [6,6,6,7,6],
    ],
    [
    'nome'=> 'Andrea',
    'cognome' => 'Romeo',
    'voti' => [6,6,6,7,6],
    ],
  ];

  for ($i=0; $i <count($classe) ; $i++) {
    $somma = 0;
    for ($j=0; $j < count($classe[$i]['voti']); $j++) {
        $somma += $classe[$i]['voti'][$j];
    }
    ?>
    <ul>
      <li> <?="Il nome dello studente è: ". $classe[$i]['nome'] ?> </li>
      <li> <?= "Il cognome dello studente è: ".$classe[$i]['cognome'] ?> </li>
      <li> <?= "la media  dello studente è: ". $somma / count($classe[$i]['voti']) ?> </li>
    </ul>
  <?php
  }
?>
