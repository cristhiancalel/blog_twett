<?php

use Illuminate\Database\Seeder;
use App\Entry;
use App\User;
class EntriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generar datos con multiples urusarios 10 por cada uno
        $users=User::all();
        $users->each(function ($user){
            factory(Entry::class,10)->create([
                'user_id'=>$user->id
            ]);

        });


    }
}
