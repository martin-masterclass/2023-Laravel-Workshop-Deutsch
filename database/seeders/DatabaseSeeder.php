<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Martin',
            'email' => 'hello@laravelacademy.com',
            'password' => bcrypt('bla123'),
            'role' => 'admin'
        ]);
        $divisions = ['Kundenservice', 'Management', 'IT', 'Backoffice' ];
        \App\Models\User::factory(50)->create([
            'password' => bcrypt('x'),
        ])->each(function ($user) use ($divisions) { $user->update([
            'division' => $divisions[rand(0, count($divisions)-1)],
            'birthday' => Carbon::now()->subDays(rand(20*365, 65*365)),
            ]);
        } );
    }
}
