<?php

require('./TreeNode.php');

class Tree {
	public $head;

	public function __construct($headData = null) {
		if ($headData != null) {
			$this->head = new TreeNode($data);
		}
	}

	public function insert($data) {
		if ($this->head == null) {
			$this->head = new TreeNode($data);
			return true;
		}

		$node = $this->head;
		while($node != null) {
			if ($data > $node->data) {
				if ($node->right == null) {
					$node->right = new TreeNode($data);
					return true;
				}
				$node = $node->right;
			} else {
				if ($node->left == null) {
					$node->left = new TreeNode($data);
					return true;
				}
				$node = $node->left;
			}
		}
	}

	public function delete($data) {
		$node = $this->head;
		$pnode = null;

		while($node != null) {
			if ($node->data == $data) {
				break;
			} elseif ($data > $node->data) {
				$pnode = $node;
				$node = $node->right;
			} else {
				$pnode = $node;
				$node = $node->left;
			}
		}

		if ($node == null) {
			return false;
		}

		if ($node->left != null && $node->right != null) {
			$minPP = $node;
			$minP = $node->right;
			while($minP->left != null) {
				$minPP = $minP;
				$minP = $minP->left;
			}
			$node->data = $minP->data;
			$node = $minP;
			$minPP->left = null;
		}

		if ($node->left != null) {
			$child = $node->left;
		} elseif ($node->right != null) {
			$child = $node->right;
		} else {
			$child = null;
		}

		if ($pnode == null) {
			$node = $child;
		} elseif ($pnode->left = $node) {
			$pnode->left = $child;
		} else {
			$pnode->right = $child;
		}
	}

	public function find($data) {
		if ($this->head == null) {
			return null;
		}

		$node = $this->head;

		while($node != null) {
			if ($data = $node->data) {
				return $node;
			} elseif ($data > $node->data) {
				$node = $node->right;
			} else {
				$node = $node->left;
			}
		}
	}

	public function preOrder($node) {
		if ($node == null) {
			return ;
		}

		echo $node->data . '->';
		$this->preOrder($node->left);
		$this->preOrder($node->right);
	}

	public function centerOrder($node) {
		if ($node == null) {
			return ;
		}

		$this->preOrder($node->left);
		echo $node->data . '->';
		$this->preOrder($node->right);
	}

}