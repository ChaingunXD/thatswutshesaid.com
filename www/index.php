<?php
  $joke_id = null;

  $domains = array(
    'f' => 'thatswutshesaid.com',
    'm' => 'thatswuthesaid.com'
  );

  if(isset($_SERVER['ENV']) && $_SERVER['ENV'] === 'development') {
    $domains = array(
      'f' => 'dev.thatswutshesaid.com',
      'm' => 'dev.thatswuthesaid.com'
    );
  }

  $current_domain = $_SERVER['HTTP_HOST'];
  $current_gender = 'f';

  if(stristr($current_domain, 'wuthesaid')) {
    $current_gender = 'm';
  }

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
    $joke = $jokes[$joke_id];
    header('Location: http://' . $domains[$joke['gender']] . '/' . $joke_id . '/', 302);
    exit;
  } elseif(isset($jokes[$joke_id])) {
    $joke = $jokes[$joke_id];
    if($domains[$joke['gender']] !== $current_domain) {
      header('Location: http://' . $domains[$joke['gender']] . '/' . $joke_id . '/', 301);
      exit;
    }
    include('../templates/joke.php');
  } else {
    include('../templates/404.php');
  }

  $content = ob_get_clean();

  include('../templates/layout.php');