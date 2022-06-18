<?php

$url = explode('?', $_SERVER['REQUEST_URI']);

include 'telas/head.php';
include 'telas/menu.php';
include 'acoes.php';

match ($url[0]){
  '/' => home(),
  '/login' => login(),
  '/cadastro' => cadastro(),
  '/listar' => listar(),
  '/excluir' => excluir(),
  '/editar' => editar(),
  default => not_found(),
};

include 'telas/footer.php'
?>
