<?php

namespace Database\Seeders;

use App\Models\HomeCommitmentSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeCommitmentSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeCommitmentSection::updateOrCreate(
            ['id' => 1],
            [
                'subtitle_vi' => 'Cam kết của chúng tôi',
                'subtitle_en' => 'Our Commitment',
                'heading_vi' => 'GIÁ TRỊ BỀN VỮNG - CAM KẾT ĐỒNG HÀNH CÙNG THÀNH CÔNG',
                'heading_en' => 'SUSTAINABLE VALUE - COMMITTED TO YOUR SUCCESS',
                'description_vi' => 'Tại MT Plus, cam kết của chúng tôi vượt xa những giao dịch thương mại thông thường - đó là sự xây dựng niềm tin, minh bạch và mang lại những kết quả vượt trội cho đối tác.',
                'description_en' => 'At MT Plus, our commitment goes beyond simple transactions - it\'s about building trust, transparency, and delivering exceptional results for our partners.',

                // Feature 1
                'feature_1_icon' => '/frontend/assets/img/about/feature-icon-5.png',
                'feature_1_title_vi' => 'Trách nhiệm doanh nghiệp',
                'feature_1_title_en' => 'Corporate Responsibility',

                // Feature 2
                'feature_2_icon' => '/frontend/assets/img/about/feature-icon-6.png',
                'feature_2_title_vi' => 'Đội ngũ tâm huyết và trách nhiệm',
                'feature_2_title_en' => 'Dedicated Team and Leadership',

                // Feature 3
                'feature_3_icon' => '/frontend/assets/img/about/feature-icon-7.png',
                'feature_3_title_vi' => 'Minh bạch & Chính trực',
                'feature_3_title_en' => 'Integrity & Transparency',

                // Feature 4
                'feature_4_icon' => '/frontend/assets/img/about/feature-icon-8.png',
                'feature_4_title_vi' => 'Hợp tác bền vững thành công',
                'feature_4_title_en' => 'Long-term Success Partnership',

                'button_url' => 'javascript:void(0)',

                // Images
                'main_image' => '/frontend/assets/img/about/wh-img-3.jpg',
                'thumb_image' => '/frontend/assets/img/about/wh-thumb-3.jpg',

                // Rating Box
                'rating_score' => '4.8',
                'customer_count' => '300+',
                'customer_text_vi' => 'Khách hàng hài lòng',
                'customer_text_en' => 'Satisfied Customers',

                'is_active' => true,
            ]
        );
    }
}
