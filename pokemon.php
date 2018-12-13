<?php

include "nav.php";

$id = $_GET['id'];

if($id == 1){$prev = 250;}else{$prev = $id *1 -1;}
if($id == 250){$next = 1;}else{$next = $id *1 +1;}

$url = "http://pokeapi.co/api/v2/pokemon/$id/";

$json = file_get_contents($url);

$pokemon = json_decode($json); 

echo '<div class="d-flex justify-content-center ">
<div class="container h-50 row d-flex justify-content-center mb-5 align-items-center bgWhite">
    <div class="col-10 m-5 p-5" style="background: white; border-radius:25px;">
    <h1 class="text-center">' . $pokemon -> name . '</h1>
    <img class="pokeImg" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/' . $id . '.png" alt="' . $pokemon -> name . '">
    <div class="type ' . $pokemon -> types[0] -> type -> name . '">'. $pokemon -> types[0] -> type -> name . '</div>'
    .(isset($pokemon ->types[1])?'<div class="type ' . $pokemon ->types[1] -> type -> name . '">' . $pokemon ->types[1] -> type -> name . '</div>'
    :"").
    '<div class="d-flex justify-content-center mt-5" style="width: 100%;">
    <nav aria-label="Page navigation example">
    <ul class="pagination">
    <li class="page-item"><a class="page-link" href="pokemon.php?id='. $prev . '">vorige</a></li>
    <li class="page-item"><a class="page-link" href="pokemon.php?id=' . $next .'">volgende</a></li>
    </ul>
    </nav>
    </div>
    </div>
    </div>
    </div>';
?>
