<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
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
          // Creating 6 random generated entries/jobs in Listing table
          Listing::factory(6)->create();

          //Creating Manually Customised entries/jobs in Listing table 
          Listing:: create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'laravel, javascript',
            'company' => 'Acme Corp',
            'location'=> 'Boston,MA',
            'email'=> 'email@email.com',
            'website'=> 'https://www.acme.com',
            'description'=> 'Some text'
          ]);

          Listing:: create([
            'title' => 'Python Junior Developer',
            'tags' => 'python, javascript',
            'company' => 'Acme Corp',
            'location'=> 'Boston,MA',
            'email'=> 'email@email.com',
            'website'=> 'https://www.acme.com',
            'description'=> 'Some text part 2'
          ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
