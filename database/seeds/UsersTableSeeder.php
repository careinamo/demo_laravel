<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Administrador del sistema',
            'email' => 'administrador@gmail.com',
            'username' => 'administrador',
            'avatar' => 'user.png',
            'password' => bcrypt('secret'),
        ]);
		// Asignación del rol
		$user->assignRole('administrador');

        $user = User::create([
            'name' => 'christian areinamo',
            'email' => 'careinamoandrade@gmail.com',
            'username' => 'careinamo',
            'avatar' => '20345537.jpg',
            'password' => bcrypt('secret'),
        ]);
		// Asignación del rol
		$user->assignRole('basico');		

		$users = factory(App\User::class, 30)->create();
		foreach ($users as $user) {
			$user->assignRole('basico');
		}
    }


}
