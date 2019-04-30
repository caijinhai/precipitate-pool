<?php
require './Tree.php';

$tree = new Tree();
$tree->insert(20);
$tree->insert(30);
$tree->insert(10);
$tree->insert(21);
$tree->insert(22);


$tree->preOrder($tree->head);
echo PHP_EOL;
var_dump($tree->find(30));
echo PHP_EOL;
$tree->delete(30);
$tree->preOrder($tree->head);
echo PHP_EOL;