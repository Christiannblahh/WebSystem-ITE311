<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'     => 'Admin',
                'email'    => 'admin@example.com',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
                'role'     => 'admin',
            ],
            [
                'name'     => 'Instructor',
                'email'    => 'instructor@example.com',
                'password' => password_hash('instructor123', PASSWORD_DEFAULT),
                'role'     => 'instructor',
            ],
            [
                'name'     => 'Student',
                'email'    => 'student@example.com',
                'password' => password_hash('student123', PASSWORD_DEFAULT),
                'role'     => 'student',
            ],
        ];

        // Insert multiple records into "users" table
        $this->db->table('users')->insertBatch($data);
    }
}
