<?php

  $url = "http://pokeapi.co/api/v2/pokemon/?limit=151/";

  $json = file_get_contents($url);

  $pokemon = json_decode($json); 

  $number = $_GET['id'];

  $number1 = $number *1 - 1 ;

  $number2 = $number * 50;

  for($i=$number1 * 50; $i<$number2; $i++){
    $x = $i + 1;

    echo '<div class="col-lg-3 col-md-6 col-sm-9"> 
    <a href="pokemon.php?id=' . $x . '">
    <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/' . $x . '.png" alt="">
    <h4>'. $x . '. ' . $pokemon -> results[$i] -> name . '</h4>
    </a>
    </div>';
  }
?>
 <!--  -->