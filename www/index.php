<?php
  $joke_id = null;

  $url_bits = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

  if(isset($url_bits[0]) && $url_bits[0] !== "") {
    $joke_id = $url_bits[0];
  }

  $jokes = file_get_contents("jokes.json");
  $jokes = json_decode($jokes, true);

  ob_start();
  if(!$jokes || !count($jokes)) {
    include('../templates/404.php');
  } elseif($joke_id === null) {
    $joke_id = mt_rand(0, count($jokes) -1);
    header('Location: /' . $joke_id . '/', 302);
  } elseif(isset($jokes[$joke_id])) {
    $joke = $jokes[$joke_id];
    include('../templates/joke.php');
  } else {
    include('../templates/404.php');
  }

  $content = ob_get_clean();

  include('../templates/layout.php');
?>