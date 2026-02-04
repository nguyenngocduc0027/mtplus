<?php

namespace Database\Seeders;

use App\Models\HomeAwardsSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeAwardsSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeAwardsSection::updateOrCreate(
            ['id' => 1],
            [
                'subtitle_vi' => 'Giải thưởng của chúng tôi',
                'subtitle_en' => 'Our Awards',
                'heading_vi' => 'THÀNH TỰU VƯỢT TRỘI - ĐẲNG CẤP QUỐC TẾ',
                'heading_en' => 'OUTSTANDING ACHIEVEMENTS - INTERNATIONAL STANDARD',

                // Award 1
                'award_1_icon' => '/frontend/assets/img/badges/badge-1.svg',
                'award_1_year' => '2021',
                'award_1_title_vi' => 'Đại lý Bất động sản Hàng đầu',
                'award_1_title_en' => 'Top Real Estate Agency',

                // Award 2
                'award_2_icon' => '/frontend/assets/img/badges/badge-2.svg',
                'award_2_year' => '2022',
                'award_2_title_vi' => 'Giải pháp Bất động sản Sáng tạo',
                'award_2_title_en' => 'Innovative Property Solutions',

                // Award 3
                'award_3_icon' => '/frontend/assets/img/badges/badge-3.svg',
                'award_3_year' => '2019',
                'award_3_title_vi' => 'Quản lý Bất động sản Tốt nhất',
                'award_3_title_en' => 'Best Property Management',

                // Award 4
                'award_4_icon' => '/frontend/assets/img/badges/badge-4.svg',
                'award_4_year' => '2023',
                'award_4_title_vi' => 'Xuất sắc trong Dịch vụ Khách hàng',
                'award_4_title_en' => 'Excellence in Customer Service',

                // Award 5
                'award_5_icon' => '/frontend/assets/img/badges/badge-5.svg',
                'award_5_year' => '2024',
                'award_5_title_vi' => 'Chuyên gia Bất động sản Hàng đầu',
                'award_5_title_en' => 'Top Real Estate Consultant',

                'is_active' => true,
            ]
        );
    }
}
