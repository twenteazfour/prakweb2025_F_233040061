<?php
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

    public function tambah() {
        include __DIR__ . '/../views/user/form_tambah.php';
    }

    public function simpan() {
        if (isset($_POST['nama']) && isset($_POST['email'])) {
            $model = new User_model();
            $model->tambah($_POST['nama'], $_POST['email']);
        }
        header("Location: ?c=User&a=index");
        exit;
    }

    public function edit() {
        $id = $_GET['id'] ?? 0;
        $model = new User_model();
        $user = $model->getById($id);
        include __DIR__ . '/../views/user/form_edit.php';
    }

    public function update() {
        if (isset($_POST['id'])) {
            $model = new User_model();
            $model->edit($_POST['id'], $_POST['nama'], $_POST['email']);
        }
        header("Location: ?c=User&a=index");
        exit;
    }

    public function hapus() {
        $id = $_GET['id'] ?? 0;
        $model = new User_model();
        $model->hapus($id);
        header("Location: ?c=User&a=index");
        exit;
    }
}
