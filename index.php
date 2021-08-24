<?php
//Lista Revisão e Aprendizagem ->
// Variaveis e Constantes
// Functions
// Condicionais
// Estrutura de Repetições
// Arrays e Objetos


// Variaveis
$a = 1;
$b = 2;

function Teste() {
  // echo $a; -- Escopo não definido
};

Teste();

function Soma() {
  global $a, $b;

  $b = $a + $b;
}


function Somando() {
  $GLOBALS['a'] = $GLOBALS['a'] + $GLOBALS['b'];
}

Somando();
echo $a;

// Constantes
define("FOO", "alguma coisa");

echo FOO;

//Variaveis variaveis
$a = "hello";
$$a = "world";
echo "$a ${$a}";

// Condicional
$c = 2;
$d = 3;

if($d > $c)
  echo "$d é maior que $c";


// Arrays
$array = [
  "foo" => "bar",
  "bar" => "foo",
];

var_dump($array);