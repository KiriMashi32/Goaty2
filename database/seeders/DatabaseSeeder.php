<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $u = new User;
        $u->name = 'bastien';
        $u->email = 'bastien@gmail.com';
        $u->password = Hash::make('1234');
        $u->save();

        $u = new User;
        $u->name = 'leo';
        $u->email = 'leo@gmail.com';
        $u->password = Hash::make('4321');
        $u->save();


        $this->call(GoatSeeder::class);
    }
}
