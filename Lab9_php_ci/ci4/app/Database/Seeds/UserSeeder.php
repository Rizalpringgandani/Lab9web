<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = model('UserModel');
        $model->insert([
            'username' => 'admin',
            'useremail' => 'rizal009',
            'userpassword' => password_hash('rizal009', PASSWORD_DEFAULT),
        ]);
    }
}
