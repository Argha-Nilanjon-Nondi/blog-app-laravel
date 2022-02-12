<?php

namespace Database\Seeders;

use App\Models\Login;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $login=new Login();
        $login->username="admin_blog_app";
        $login->password=hash("sha256","admin1234");
        $login->save();
    }
}
