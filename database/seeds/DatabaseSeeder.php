<?php

use App\user;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('UserTableSeeder');

        Model::reguard();
    }
}

class UserTableSeeder extends Seeder
{
    public function run()
    {

        App\User::create([
            'name' => 'Victor Boissiere',
            'email' => 'victor.boissiere@gmail.com',
            'password' => env('ADMIN_PASSWORD', 'admin')]);

    }
}
