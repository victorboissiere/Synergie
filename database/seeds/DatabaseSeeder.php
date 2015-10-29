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
    /**
     * Create admin user for admin panel
     */
    public function run()
    {
        $admin_name = env('ADMIN_NAME', 'admin');
        $admin_email = env('ADMIN_EMAIL', 'admin@admin.com');
        $admin_password = env('ADMIN_PASSWORD', 'admin');
        $admin_url = env('ADMIN_URL', 'admin');

        App\User::create([
            'name' => $admin_name,
            'email' => $admin_email,
            'password' => $admin_password]);

        $this->command->info('Admin user created!');
        $this->command->info('Name : '. $admin_name .'');
        $this->command->info('Email : '. $admin_email .'');
        $this->command->info('Admin available at : '. url($admin_url) .'');
    }
}
