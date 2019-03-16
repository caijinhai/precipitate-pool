<?php

require './SingleLinkedList.php';

$list = new SingleLinkedList();
$list->insert('a');
$list->insert('b');
$list->insert('c');
$list->insert('d');
$list->insert('b');
$list->insert('a');

var_dump($list->printList());