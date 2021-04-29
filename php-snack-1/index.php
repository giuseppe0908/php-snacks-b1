<!-- Creiamo un array contenente le partite di 
basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una
squadra ospite, punti fatti dalla squadra di
casa e punti fatti dalla squadra ospite.Stampiamo
a schermo tutte le partite con questo schema:

Olimpia Milano - Cantù | 55-60 -->
<?php
 $calendario = [
   [
    'squadra_casa'=> 'Milano',
    'punteggio_casa' => '88',
    'squadra_ospite'=> 'Venezia',
    'punteggio_ospite' => '50',
   ],
   [
    'squadra_casa'=> 'Roma',
    'punteggio_casa' => '65',
    'squadra_ospite'=> 'Milano',
    'punteggio_ospite' => '90',
   ],
   [
    'squadra_casa'=> 'Napoli',
    'punteggio_casa' => '10',
    'squadra_ospite'=> 'Catanzaro',
    'punteggio_ospite' => '100',
   ],
   [
    'squadra_casa'=> 'Bari',
    'punteggio_casa' => '79',
    'squadra_ospite'=> 'Bolzano',
    'punteggio_ospite' => '70',
   ],
 ];
 var_dump($calendario);
 for ($i=0; $i < count($calendario); $i++) {  ?>
   <div class="">
     <?= $calendario[$i]['squadra_casa'] ; ?> -
     <?= $calendario[$i]['squadra_ospite'] ; ?> |
     <?= $calendario[$i]['punteggio_casa'];  ?> -
     <?= $calendario[$i]['punteggio_ospite'] ; ?>
   </div>
 <?php }   ?>
