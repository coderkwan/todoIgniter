<?php

namespace App\Controllers;

use App\Models\todoModel;

class Pages extends BaseController {
	public function index() {

		$model = model(todoModel::class);
		$data['todos'] = $model->getTodos();

		return view('templates/hearder', $data)
		. view("pages/home")
		. view("templates/footer");
	}

	public function create() {
		helper('form');

		$todo = $this->request->getPost(['todo']);

		$model = model(todoModel::class);
		$model->save(['todo' => $todo['todo'], 'complete' => "false"]);

		return redirect('/');
	}

	public function delete() {
		helper('form');

		$id = $this->request->getPost(['id']);

		$model = model(todoModel::class);
		$model->where('id', $id['id'])->delete();
		return redirect('/');
	}

	public function edit($id) {
		$model = model(todoModel::class);
		$data['todos'] = $model->where('id', $id)->find();

		return view('templates/hearder', $data)
		. view("pages/update")
		. view("templates/footer");
	}

	public function update() {
		helper('form');
		$model = model(todoModel::class);
		$data = $this->request->getPost(['todo', 'id']);
		$info = [
			'todo' => $data['todo'],
		];

		$model->update($data['id'], $info);
		return redirect('/');
	}
}
