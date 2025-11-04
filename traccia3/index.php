<?php

$words1 = [
  'vostro',
  67,
  'essere',
  'colle',
  'mi',
  'sempre',
[
  'oscura',
  'era',
  89,
  [
  'mezzo',
   'E'
  ],
'ritrovai',
'per'
],
'diritta'
];

$words2 = [
  'elemento1' => 25.89,
  'elemento2' => 'possa',
  'elemento3' => [
    'Virgilio',
    'Favore',
    'favore',
    ['fortuna']
  ],
 'fine' => '!'
];

// Aggiungo elementi mancanti

$words1[]= 'Nel';
$words1[]= 'di';
$words1[]= 'cammin';
$words1[]= 'nostra';
$words1[]= 'via';
$words2[]= 'vita';
$words2[]= 'una';
$words2[]= 'selva';
$words2[]= 'che la';
$words2[]= 'smarrita';


// Creo la variabile $results concatenando elementi degli Array

$results = $words1[8] . " " . $words1[6][3][0] . " " . $words1[9] . " " . $words1[10] . " " . $words1[9] . " " . $words1[11] . " " . $words2[0] . " " . $words1[4] . " " . $words1[6][4] . " " . $words1[6][5] . " " . $words2[1] . " " . $words2[2] . " " . $words1[6][0] . " " . $words2[3] . " " . $words1[7] . " " . $words1[12] . " " . $words1[6][1] . " " . $words2[4] . "\n";

print_r($results);