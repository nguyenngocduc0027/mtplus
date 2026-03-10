<?php

namespace Database\Seeders;

use App\Models\HomeNewsSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeNewsSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeNewsSection::updateOrCreate(
            ['id' => 1],
            [
                'subtitle_vi' => 'Tin tức',
                'subtitle_en' => 'News',
                'heading_vi' => 'TIN TỨC & GÓC NHÌN CHIẾN LƯỢC',
                'heading_en' => 'NEWS & STRATEGIC PERSPECTIVES',
                'is_active' => true,
            ]
        );
    }
}
