<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
<<<<<<< HEAD
     */
    public function run()
    {
         App\User::all()->each(function (App\User $u) {
            $u->news()->saveMany(factory(App\News::class, 5)->make());
        });
    }
=======
     */  
    public function run()
    {
        App\User::all()->each(function (App\User $u) {
            $u->news()->saveMany(factory(App\News::class, 5)->make());
        });
    }
    
>>>>>>> fcebf8b9daaf19e60027db61885049c400079ac3
}
