<?php

namespace Database\Seeders;

use App\Models\HomeServicesSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeServicesSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeServicesSection::updateOrCreate(
            ['id' => 1],
            [
                'subtitle_vi' => 'Chúng tôi làm gì?',
                'subtitle_en' => 'What do We Do?',
                'heading_vi' => 'Chúng tôi giúp doanh nghiệp tối ưu nguồn lực và mở rộng quy mô bằng các giải pháp trọng tâm',
                'heading_en' => 'Empowering Business Excellence through Strategic & Core Solutions',

                // Service 1: Investment Consulting
                'service_1_title_vi' => 'Tư vấn Đầu tư',
                'service_1_title_en' => 'Investment Consulting',
                'service_1_desc_vi' => 'Cung cấp chiến lược đầu tư thông minh và quản lý nguồn vốn hiệu quả để tối ưu hóa lợi nhuận dài hạn cho đối tác.',
                'service_1_desc_en' => 'Providing smart investment strategies and effective capital management to optimize long-term returns for partners.',
                'service_1_image' => '/frontend/assets/img/features/feature-img-1.jpg',
                'service_1_url' => 'javascript:void(0)',

                // Service 2: Trade and Distribution
                'service_2_title_vi' => 'Thương mại và Phân phối',
                'service_2_title_en' => 'Trade and Distribution',
                'service_2_desc_vi' => 'Số hóa quy trình vận hành và ứng dụng công nghệ tiên tiến nhằm nâng cao năng suất và lợi thế cạnh tranh số cho doanh nghiệp.',
                'service_2_desc_en' => 'Digitalizing operations and applying advanced technology to enhance productivity and digital competitive advantages for businesses.',
                'service_2_image' => '/frontend/assets/img/features/feature-img-2.jpg',
                'service_2_url' => 'javascript:void(0)',

                // Service 3: Technology Solution
                'service_3_title_vi' => 'Giải pháp Công nghệ',
                'service_3_title_en' => 'Technology Solution',
                'service_3_desc_vi' => 'Chúng tôi giúp chuyên gia tìm dạng và đề xúc tìm dạng nhà đa quy mô',
                'service_3_desc_en' => 'We help you find and secure your ideal investment property',
                'service_3_image' => '/frontend/assets/img/features/feature-img-3.jpg',
                'service_3_url' => 'javascript:void(0)',

                'is_active' => true,
            ]
        );
    }
}
