<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(10)->create();
        Listing::factory(6)->create();
        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acne Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email1@gmail.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur 
        //         adipisicing elit. Labore tempora consequuntur placeat 
        //         officia? Molestias, accusamus, perspiciatis est aperiam 
        //         reprehenderit error exercitationem hic nesciunt esse harum
        //         placeat ut magnam blanditiis ducimus.'
        // ]);
        // Listing::create([
        //     'title' => 'Full-stack Engineer',
        //     'tags' => 'laravel, backend, api, javascript',
        //     'company' => 'Acne Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email1@gmail.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur 
        //         adipisicing elit. Labore tempora consequuntur placeat 
        //         officia? Molestias, accusamus, perspiciatis est aperiam 
        //         reprehenderit error exercitationem hic nesciunt esse harum
        //         placeat ut magnam blanditiis ducimus.'
        // ]);
    }
}
