<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Publication;

class PublicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publication::create([
            'title' => 'Sample Publication 1',
            'description' => 'Description of Sample Publication 1.',
        ]);

        Publication::create([
            'title' => 'Sample Publication 2',
            'description' => 'Description of Sample Publication 2.',
        ]);

        // Add more publications as needed
    }
}
