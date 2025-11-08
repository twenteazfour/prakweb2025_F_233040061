<?php
class User_model {
    private static $data = [
        ['id'=>1, 'nama'=>'Sana', 'email'=>'sana@example.com'],
        ['id'=>2, 'nama'=>'Oikawa', 'email'=>'oikawa@example.com'],
        ['id'=>3, 'nama'=>'Irene', 'email'=>'irene@example.com']
    ];

    public function getAll() {
        return self::$data;
    }

    public function getById($id) {
        foreach (self::$data as $user) {
            if ($user['id'] == $id) return $user;
        }
        return null;
    }

    public function tambah($nama, $email) {
        $idBaru = count(self::$data) + 1;
        self::$data[] = ['id'=>$idBaru, 'nama'=>$nama, 'email'=>$email];
    }

    public function edit($id, $nama, $email) {
        foreach (self::$data as &$user) {
            if ($user['id'] == $id) {
                $user['nama'] = $nama;
                $user['email'] = $email;
                break;
            }
        }
    }

    public function hapus($id) {
        foreach (self::$data as $i => $user) {
            if ($user['id'] == $id) {
                unset(self::$data[$i]);
                break;
            }
        }
    }
}
