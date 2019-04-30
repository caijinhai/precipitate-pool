<?php

require './SingleLinkedListNode.php';

class SingleLinkedList {

	public $head = null;

	public $length = null;

	public function __construct($head = null) {
		if ($head == null) {
			$this->head = new SingleLinkedListNode();
		} else {
			$this->head = $head;
		}

		$this->length = 0;
	}

	// 采用头插法插入数据
	public function insert($data) {
		$this->insertDataAfter($this->head, $data);
	}

	public function insertDataAfter($originNode, $data) {
		if ($originNode == null) {
			return false;
		}

		$newNode = new SingleLinkedListNode($data);

		$newNode->next = $originNode->next;
		$originNode->next = $newNode;

		$this->length++;
		return $newNode;
	}

	public function delete($node) {
		if ($node == null) {
			return false;
		}

		$preNode = $this->getPreNode($node);

		$preNode->next = $node->next;
		unset($node);
		$this->length--;
		return true;
	}

	public function getPreNode($node) {
		if ($node == null) {
			return false;
		}

		$preNode = $this->head;
		$currentNode = $this->head;			

		while($currentNode != $node && $currentNode->next != null) {
			$preNode = $currentNode;
			$currentNode = $currentNode->next;
		}

		return $preNode;
	}

	public function printList() {
		if ($this->head->next == null) {
			return false;
		}

		$node = $this->head->next;
		$length = $this->length;

		while($node != null && $length--) {
			echo $node->data . '-->';
			$node = $node->next;
		}

		echo 'NULL' . PHP_EOF;
		return true;
	}

}