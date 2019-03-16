<?php

require './SingleLinkedListNode.php';

class Stack{

	public $head;

	public $length;

	public function __construct() {
		$this->head = new SingleLinkedListNode();

		$this->length = 0;
	}

	public function pop() {
		if ($this->length == 0) {
			return false;
		}

		$this->head->next = $this->head->next->next;
		$this->length--;

		return true;
	}

	public function push($data) {
		$this->pushData($data);
	}

	public function pushData($data) {
		$node = new SingleLinkedListNode($data);
		$node->next = $this->head->next;

		$this->head->next = $node;

		$this->length++;
		return $node;
	}

	/**
     * 打印栈
     */
    public function printSelf()
    {
        if (0 == $this->length) {
            echo 'empty stack' . PHP_EOL;
            return;
        }
        echo 'head.next -> ';
        $curNode = $this->head;
        while ($curNode->next) {
            echo $curNode->next->data . ' -> ';
            $curNode = $curNode->next;
        }
        echo 'NULL' . PHP_EOL;
    }
}