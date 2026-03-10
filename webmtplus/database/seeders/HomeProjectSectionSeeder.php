<?php

namespace Database\Seeders;

use App\Models\HomeProjectSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeProjectSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeProjectSection::updateOrCreate(
            ['id' => 1],
            [
                'subtitle_vi' => 'Dự án của chúng tôi',
                'subtitle_en' => 'Our Projects',
                'heading_vi' => 'DỰ ÁN TIÊU BIỂU - KIẾN TẠO GIÁ TRỊ THỰC',
                'heading_en' => 'FEATURED PROJECTS - CREATING REAL VALUE',
                'is_active' => true,
            ]
        );
    }
}
