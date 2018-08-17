<?php

use Illuminate\Database\Seeder;

use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,10)->create();
        
        DB::table('users')->insert([
        	'name' 	 	=>	'Administrador',
        	'email'		=>	'admin@admin.com',
        	'password'	=>	bcrypt('secret'),
        	'type'		=> 'admin'

        ]);
    }
}
