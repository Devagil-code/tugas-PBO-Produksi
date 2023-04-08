<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // $data = [
        //     'name_user' => 'Administrator',
        //     'email_user' => 'devagil@gmail.com',
        //     'password_user' => password_hash(12345, PASSWORD_BCRYPT),
        // ];
        // $this->db->table('users')->insert($data);
        $data = [
            [
                'name_user' => 'Agil Pamungkas',
                'email_user' => 'devagil@gmail.com',
                'password_user' => password_hash(12345, PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Repa Okari',
                'email_user' => 'repa@gmail.com',
                'password_user' => password_hash(12345, PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Roby Fadli',
                'email_user' => 'roby@gmail.com',
                'password_user' => password_hash(12345, PASSWORD_BCRYPT),
            ]
            ];
                $this->db->table('users')->insertBatch($data);
    }
}