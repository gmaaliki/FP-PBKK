<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            UserNotificationSeeder::class,
            UserSkillSeeder::class,
            UserLanguageSeeder::class,
            UserEducationSeeder::class,
            UserCertificationSeeder::class,
            CategorySeeder::class,
            SubcategorySeeder::class,
            ServiceSeeder::class,
            UserReviewSeeder::class,
            ServiceReportSeeder::class,
            ServicePictureSeeder::class,
            TransactionSeeder::class,
            WishlistSeeder::class,
        ]);
    }
}
