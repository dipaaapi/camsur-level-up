<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    // database/seeders/DatabaseSeeder.php

    public function run(): void
    {
        $this->call([
            PressReleaseSeeder::class,
            SdgSeeder::class,
            SocialMediaHubSeeder::class,
            ProvincialProfileSeeder::class,
            WordOfWisdomSeeder::class,
            JobPostingSeeder::class,
        ]);
    }
}
