<?php

//include il mio database
include __DIR__ . "/data/db.php";

$genres = [];
//controllo se nella select il genere è all in quel caso l'array albums è composto da tutti gli albums disponibili altrimenti è vuoto e lo popolo in seguito
$albums = empty($_GET['genre']) || $_GET['genre'] === 'all' ? $database : [];


//compongo un array con tutti i generi musicali
foreach($database as $album){
//se il genere è già presente nell'array non lo aggiungo viceversa si
  if(!in_array($album['genre'],$genres)){
    $genres[] = $album['genre'];
  }

};

//se l'array di albums è vuoto(ovvero contiene un genere) popolo l'array albums con gli album di quel genere
if(count($albums) === 0){
//ciclo il mio database per poi andare ad aggiungere l'album con il genere associato ad esso se il genere dell'album corrisponde alla $_GET
  foreach($database as $album){
    if($album['genre'] === $_GET['genre']){
      $albums[] = $album;
    }
  }

};

//passo a json encode due array: uno contenente l'array di albums
//l'altro contenente tutti i generi
$response = [
  'albums' => $albums,
  'genres' => $genres
];


//trasformo il mio db in api
header('Content-Type: application/json');

echo json_encode($response);

?>