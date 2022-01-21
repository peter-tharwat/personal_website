<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::query()->delete();
        \App\Models\User::create([
            'name'=>"إسم المستخدم",
            'email'=>"admin@admin.com",
            'password'=>bcrypt('password'),
            'email_verified_at'=>now(),
            'main_color'=>"#03a9f4",
            'hover_color'=>"#e9f2f6",
        ]);
    }
}
