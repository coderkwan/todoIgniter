<?php

namespace App\Models;

use CodeIgniter\Model;

class todoModel extends Model {
	protected $table = 'todo';
	protected $allowedFields = ['todo', 'complete'];

	public function getTodos($slug = false) {
		if ($slug === false) {
			return $this->findAll();
		}
	}
}