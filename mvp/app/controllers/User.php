<?php

require_once __DIR__ . '/../models/User_model.php';

class User {
    public function index() {
        $model = new User_model();
        $users = $model->getAll();

        include __DIR__ . '/../views/user/list.php';
    }

    public function detail() {
        $id = $_GET['id'] ?? 1;
        $model = new User_model();
        $user = $model->getById($id);

        include __DIR__ . '/../views/user/detail.php';
    }
}
