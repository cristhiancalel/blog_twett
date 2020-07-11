<?php
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'cristhian',
            'email'=>'cristhian@hotmail.com',
            'password'=> bcrypt('Cris2cal')

            ]);

/*
            para la utilizacion de los factory se debe realizar el siguiente codigo
*/
            factory(User::class,10)->create();


        //
    }
}
