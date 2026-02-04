<?php

namespace Database\Seeders;

use App\Models\HomeTeamSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeTeamSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeTeamSection::updateOrCreate(
            ['id' => 1],
            [
                'subtitle_vi' => 'Đội ngũ của chúng tôi',
                'subtitle_en' => 'Our Team',
                'heading_vi' => 'ĐỘI NGŨ CHUYÊN NGHIỆP - TẬN TÂM VÌ KHÁCH HÀNG',
                'heading_en' => 'PROFESSIONAL TEAM - DEDICATED TO CLIENTS',
                'is_active' => true,
            ]
        );
    }
}
