<?php

use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Favorite;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('password'),
            'created_at' => now(),
        ]);        
        */
        factory(User::class, 10)
            ->create()->each(function($user){
                factory(Favorite::class, 5)
                    ->create([
                        'user_id'=> $user->id
                    ]);
            });

        

    }
}

