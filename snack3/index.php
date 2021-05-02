<?php
  //  Creare un array di array.
  //  Ogni array figlio avrà come chiave una data in questo formato: DD/MM/YYYY
  //  (ad es 31/01/2007) e come valore un array di post associati a quella data.
  //  Stampare ogni data con i relativi post.
 ?>

 <?php

$posts = [

    '30/12/2021' => [
        [
            'titolo' => 'Post 1',
            'autore' => 'Lorenzo De Sossi',
            'testo' => 'Testo post 1'
        ],
        [
            'titolo' => 'Post 2',
            'autore' => 'Lorenzo De Sossi',
            'testo' => 'Testo post 2'
        ],
    ],
    '07/02/2017' => [
        [
            'titolo' => 'Post 3',
            'autore' => 'Lorenzo De Sossi',
            'testo' => 'Testo post 3'
        ]
    ],
    '25/09/2018' => [
        [
            'titolo' => 'Post 4',
            'autore' => 'Lorenzo De Sossi',
            'testo' => 'Testo post 4'
        ],
        [
            'titolo' => 'Post 5',
            'autore' => 'Lorenzo De Sossi',
            'testo' => 'Testo post 5'
        ],
        [
            'titolo' => 'Post 6',
            'autore' => 'Lorenzo De Sossi',
            'testo' => 'Testo post 6'
        ]
    ],
];

$post_keys = array_keys($posts);
$posts_by_keys = $posts[$post_keys[$i]];

for ($i=0; $i < count($posts_by_keys) ; $i++) {
  echo $post_keys[$i];
  var_dump($posts[$post_keys[$i]][$i]);
}

?>
