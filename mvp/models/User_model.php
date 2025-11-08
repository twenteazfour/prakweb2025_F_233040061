<?php
class User_model {
    private $data = [
        ['id'=>1, 'nama'=>'Sana', 'email'=>'sana@example.com'],
        ['id'=>2, 'nama'=>'Oikawa', 'email'=>'oikawa@example.com'],
        ['id'=>3, 'nama'=>'Irene', 'email'=>'irene@example.com']
    ];

    public function getAll() {
        return $this->data;
    }

    public function getById($id) {
        foreach ($this->data as $user) {
            if ($user['id'] == $id) {
                return $user;
            }
        }
        return null;
    }
}
