<?php

class TreeNode {

	public $left;

	public $right;

	public $data;

	public function __construct($data = null) {
		$this->data = $data;
		$this->left = null;
		$this->right = null;
	}
}