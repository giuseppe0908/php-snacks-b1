<!-- Creare un array di array.
Ogni array figlio avrà come chiave una data in questo formato: DD/MM/YYYY
(ad es 31/01/2007) e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post. -->
<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
//scorro le chiavi dell'array
$keys = array_keys($posts);
// var_dump($keys);
  for ($i=0; $i < count($keys) ; $i++) {
    // var_dump($posts[$keys[$i]]);
    $post = $posts[$keys[$i]];
    for ($j=0; $j < count($post) ; $j++) { ?>
      <ul>
        <li><?= $keys[$i] ?></li>
        <li><?= $post[$j]['title'] ?></li>
        <li><?= $post[$j]['author'] ?></li>
        <li><?= $post[$j]['text'] ?></li>
      </ul>
      <?php
    }
  }
 ?>
